<?php

namespace Tests\Feature;

use Carbon\Carbon;
use DOMDocument;
use DOMXPath;
use Tests\TestCase;

class SeoRegressionTest extends TestCase
{
    /**
     * Expected SHA256 checksums from baseline.
     */
    private const ROBOTS_SHA256 = '71dfa504b648eb2e9d246ef878f8969ea2fa1bfa73ee799febe4c113292c09df';
    private const SITEMAP_SHA256 = 'a7fe211ee2218aa6fbc65c07d1e2d65977a1dc7b9b581d8a23696aefc79bfe86';

    /**
     * Assert the SHA256 checksum of public/robots.txt against the baseline.
     */
    public function test_robots_txt_matches_baseline_sha256(): void
    {
        $robotsPath = public_path('robots.txt');
        $this->assertFileExists($robotsPath, 'public/robots.txt must exist.');

        $actualSha256 = hash_file('sha256', $robotsPath);
        $this->assertSame(
            self::ROBOTS_SHA256,
            $actualSha256,
            'public/robots.txt SHA256 hash does not match the baseline value.'
        );
    }

    /**
     * Test every page against the baseline snapshot.
     */
    public function test_pages_match_seo_baseline(): void
    {
        Carbon::setTestNow('2026-11-07 12:00:00');

        $baselinePath = base_path('docs/seo/baseline.json');
        $this->assertFileExists($baselinePath, 'Baseline snapshot docs/seo/baseline.json must exist.');

        $baseline = json_decode(file_get_contents($baselinePath), true);
        $this->assertIsArray($baseline);
        $this->assertArrayHasKey('pages', $baseline);

        // Verify baseline file contains recorded hashes
        $this->assertSame(
            self::ROBOTS_SHA256,
            $baseline['robots_txt_sha256'] ?? null,
            'Baseline file robots_txt_sha256 mismatch.'
        );
        $this->assertSame(
            self::SITEMAP_SHA256,
            $baseline['sitemap_xml_sha256'] ?? null,
            'Baseline file sitemap_xml_sha256 mismatch.'
        );

        foreach ($baseline['pages'] as $pageData) {
            $url = $pageData['url'];
            $response = $this->get($url);

            // Assert HTTP 200
            $response->assertStatus(200, "URL {$url} failed to return HTTP 200.");

            // XML Sitemap verification
            if (!empty($pageData['is_xml'])) {
                $actualSitemapSha256 = hash('sha256', $response->getContent());
                $this->assertSame(
                    self::SITEMAP_SHA256,
                    $actualSitemapSha256,
                    "/sitemap.xml response body SHA256 does not match baseline."
                );
                continue;
            }

            $content = $response->getContent();
            libxml_use_internal_errors(true);
            $dom = new DOMDocument();
            $dom->loadHTML('<?xml encoding="utf-8" ?>' . $content);
            libxml_clear_errors();

            $xpath = new DOMXPath($dom);

            // Exactly one H1
            $h1Nodes = $xpath->query('//h1');
            $this->assertEquals(
                1,
                $h1Nodes->length,
                "URL {$url} must have exactly one <h1>. Found: {$h1Nodes->length}"
            );

            // Canonical unchanged
            $canonicalNode = $xpath->query('//link[@rel="canonical"]')->item(0);
            $canonical = $canonicalNode ? trim($canonicalNode->getAttribute('href')) : null;
            $this->assertEquals(
                $pageData['canonical'],
                $canonical,
                "Canonical URL changed for {$url}. Expected {$pageData['canonical']}, got {$canonical}."
            );

            // Extract internal links
            $actualLinks = [];
            foreach ($xpath->query('//a[@href]') as $a) {
                $href = trim($a->getAttribute('href'));
                $anchor = trim(preg_replace('/\s+/', ' ', $a->textContent));

                $isInternal = str_starts_with($href, '/')
                    || str_starts_with($href, '#')
                    || str_contains($href, 'localhost')
                    || str_contains($href, 'codemiritexpert.online');

                if (str_starts_with($href, 'mailto:') || str_starts_with($href, 'tel:') || str_starts_with($href, 'javascript:')) {
                    $isInternal = false;
                }

                if ($isInternal) {
                    $actualLinks[] = [
                        'href' => $href,
                        'anchor' => $anchor,
                    ];
                }
            }

            // Compare internal links per page as a SORTED LIST of (href, anchor) pairs
            // including duplicates and counts
            $expectedLinks = $pageData['internal_links'];

            $sortCallback = function (array $a, array $b): int {
                $cmp = strcmp($a['href'], $b['href']);
                if ($cmp !== 0) {
                    return $cmp;
                }
                return strcmp($a['anchor'], $b['anchor']);
            };

            usort($expectedLinks, $sortCallback);
            usort($actualLinks, $sortCallback);

            $this->assertSame(
                $expectedLinks,
                $actualLinks,
                "Internal links sorted list mismatch on {$url}."
            );
        }
    }
}
