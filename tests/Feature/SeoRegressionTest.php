<?php

namespace Tests\Feature;

use DOMDocument;
use DOMXPath;
use Tests\TestCase;

class SeoRegressionTest extends TestCase
{
    /**
     * Test every page against the baseline snapshot.
     */
    public function test_pages_match_seo_baseline(): void
    {
        $baselinePath = base_path('docs/seo/baseline.json');
        $this->assertFileExists($baselinePath, 'Baseline snapshot docs/seo/baseline.json must exist.');

        $baseline = json_decode(file_get_contents($baselinePath), true);
        $this->assertIsArray($baseline);
        $this->assertArrayHasKey('pages', $baseline);

        foreach ($baseline['pages'] as $pageData) {
            $url = $pageData['url'];
            $response = $this->get($url);

            // Assert HTTP 200
            $response->assertStatus(200, "URL {$url} failed to return HTTP 200.");

            // Sitemap.xml check
            if (!empty($pageData['is_xml'])) {
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

            // Internal links identical
            $links = [];
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
                    $links[] = [
                        'href' => $href,
                        'anchor' => $anchor,
                    ];
                }
            }

            $this->assertEquals(
                $pageData['internal_links'],
                $links,
                "Internal links set (href, anchor) modified on {$url}."
            );
        }
    }
}
