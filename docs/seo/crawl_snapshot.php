<?php

require __DIR__ . '/../../vendor/autoload.php';

$app = require_once __DIR__ . '/../../bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);

$urls = [
    '/',
    '/services',
    '/services/custom-websites',
    '/services/web-applications',
    '/services/ai-tools',
    '/services/ecommerce',
    '/services/api-development',
    '/services/business-systems',
    '/work',
    '/work/law-firm-website',
    '/work/business-management-system',
    '/work/ai-chatbot-integration',
    '/work/ecommerce-store',
    '/work/booking-system',
    '/work/inventory-management-system',
    '/ai-solutions',
    '/blog',
    '/blog/building-custom-crm-laravel',
    '/blog/clean-laravel-vs-wordpress',
    '/blog/laravel-openai-integration-guide',
    '/about',
    '/contact',
    '/law-firm-website-development',
    '/clinic-website-development',
    '/privacy-policy',
    '/terms-and-conditions',
    '/sitemap',
    '/sitemap.xml',
];

$results = [];

$outputFile = $argv[1] ?? (__DIR__ . '/baseline.json');

$baseUrl = 'https://codemiritexpert.online';

foreach ($urls as $uri) {
    $fullUrl = $baseUrl . $uri;
    $request = Illuminate\Http\Request::create($fullUrl, 'GET');
    $response = $kernel->handle($request);
    $status = $response->getStatusCode();
    $content = $response->getContent();

    if ($uri === '/sitemap.xml') {
        $sitemapContent = $content;
        $results[] = [
            'url' => $uri,
            'http_status' => $status,
            'is_xml' => true,
            'title' => null,
            'meta_description' => null,
            'h1_text' => null,
            'h1_count' => 0,
            'canonical' => null,
            'internal_links' => [],
            'image_alts' => [],
        ];
        $kernel->terminate($request, $response);
        continue;
    }

    libxml_use_internal_errors(true);
    $dom = new DOMDocument();
    $dom->loadHTML('<?xml encoding="utf-8" ?>' . $content);
    libxml_clear_errors();

    $xpath = new DOMXPath($dom);

    // Title
    $titleNode = $xpath->query('//title')->item(0);
    $title = $titleNode ? trim($titleNode->textContent) : null;

    // Meta description
    $metaDescNode = $xpath->query('//meta[@name="description"]')->item(0);
    $metaDescription = $metaDescNode ? trim($metaDescNode->getAttribute('content')) : null;

    // Canonical
    $canonicalNode = $xpath->query('//link[@rel="canonical"]')->item(0);
    $canonical = $canonicalNode ? trim($canonicalNode->getAttribute('href')) : null;

    // H1
    $h1Nodes = $xpath->query('//h1');
    $h1Count = $h1Nodes->length;
    $h1Texts = [];
    foreach ($h1Nodes as $h1) {
        $h1Texts[] = trim(preg_replace('/\s+/', ' ', $h1->textContent));
    }
    $h1Text = implode(' | ', $h1Texts);

    // Internal links
    $aNodes = $xpath->query('//a[@href]');
    $internalLinks = [];
    foreach ($aNodes as $a) {
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
            $internalLinks[] = [
                'href' => $href,
                'anchor' => $anchor,
            ];
        }
    }

    // Image alts
    $imgNodes = $xpath->query('//img');
    $imageAlts = [];
    foreach ($imgNodes as $img) {
        $src = $img->getAttribute('src');
        $alt = $img->getAttribute('alt');
        $imageAlts[] = [
            'src' => $src,
            'alt' => $alt,
        ];
    }

    $results[] = [
        'url' => $uri,
        'http_status' => $status,
        'title' => $title,
        'meta_description' => $metaDescription,
        'h1_text' => $h1Text,
        'h1_count' => $h1Count,
        'canonical' => $canonical,
        'internal_links' => $internalLinks,
        'image_alts' => $imageAlts,
    ];

    $kernel->terminate($request, $response);
}

// Build Summary
$titles = [];
$descriptions = [];
$totalInternalLinks = 0;
$missingTitles = [];
$missingDescriptions = [];
$pagesWithoutExactlyOneH1 = [];

foreach ($results as $item) {
    if ($item['url'] === '/sitemap.xml') continue;

    $totalInternalLinks += count($item['internal_links']);

    if (empty($item['title'])) {
        $missingTitles[] = $item['url'];
    } else {
        $titles[$item['title']][] = $item['url'];
    }

    if (empty($item['meta_description'])) {
        $missingDescriptions[] = $item['url'];
    } else {
        $descriptions[$item['meta_description']][] = $item['url'];
    }

    if ($item['h1_count'] !== 1) {
        $pagesWithoutExactlyOneH1[] = [
            'url' => $item['url'],
            'count' => $item['h1_count'],
        ];
    }
}

$duplicateTitles = array_filter($titles, fn($urls) => count($urls) > 1);
$duplicateDescriptions = array_filter($descriptions, fn($urls) => count($urls) > 1);

$summary = [
    'total_pages' => count($results),
    'html_pages' => count($results) - 1, // excluding sitemap.xml
    'total_internal_links' => $totalInternalLinks,
    'missing_titles' => $missingTitles,
    'duplicate_titles' => $duplicateTitles,
    'missing_descriptions' => $missingDescriptions,
    'duplicate_descriptions' => $duplicateDescriptions,
    'pages_without_single_h1' => $pagesWithoutExactlyOneH1,
];

$robotsTxtPath = __DIR__ . '/../../public/robots.txt';
$robotsSha256 = file_exists($robotsTxtPath) ? hash_file('sha256', $robotsTxtPath) : null;
$sitemapSha256 = isset($sitemapContent) ? hash('sha256', $sitemapContent) : null;

$output = [
    'generated_at' => date('Y-m-d H:i:s'),
    'robots_txt_sha256' => $robotsSha256,
    'sitemap_xml_sha256' => $sitemapSha256,
    'summary' => $summary,
    'pages' => $results,
];

file_put_contents($outputFile, json_encode($output, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES));

echo "SNAPSHOT SAVED TO: {$outputFile}\n";
