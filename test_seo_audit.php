<?php

require __DIR__ . '/vendor/autoload.php';
$app = require_once __DIR__ . '/bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);

$routes = [
    '/',
    '/services',
    '/services/custom-websites',
    '/services/web-applications',
    '/services/ecommerce',
    '/services/api-development',
    '/services/business-systems',
    '/services/ai-tools',
    '/ai-solutions',
    '/work',
    '/work/law-firm-website',
    '/work/booking-system',
    '/work/business-management-system',
    '/work/ai-chatbot-integration',
    '/work/ecommerce-store',
    '/work/inventory-management-system',
    '/blog',
    '/blog/clean-laravel-vs-wordpress',
    '/blog/laravel-openai-integration-guide',
    '/blog/building-custom-crm-laravel',
    '/contact',
    '/about',
    '/law-firm-website-development',
    '/clinic-website-development',
    '/privacy-policy',
    '/terms-and-conditions',
    '/sitemap',
    '/sitemap.xml',
];

$errors = [];
$report = [];

foreach ($routes as $uri) {
    $request = Illuminate\Http\Request::create($uri, 'GET');
    $response = $kernel->handle($request);
    $status = $response->getStatusCode();
    $content = $response->getContent();

    if ($uri === '/sitemap.xml') {
        $report[] = [
            'uri' => $uri,
            'status' => $status,
            'h1_count' => 'N/A',
            'title' => 'XML Sitemap',
            'title_len' => 11,
            'desc_len' => 'N/A',
            'canonical' => 'N/A'
        ];
        continue;
    }

    if ($status !== 200) {
        $errors[] = "Route $uri returned HTTP $status";
        continue;
    }

    // Check H1 count
    preg_match_all('/<h1\b[^>]*>(.*?)<\/h1>/is', $content, $h1Matches);
    $h1Count = count($h1Matches[0]);
    if ($h1Count !== 1) {
        $errors[] = "Route $uri has $h1Count <h1> tags (expected exactly 1)";
    }

    // Check Title
    preg_match('/<title>(.*?)<\/title>/is', $content, $titleMatches);
    $title = trim($titleMatches[1] ?? '');
    $titleLen = mb_strlen($title);
    if ($titleLen === 0) {
        $errors[] = "Route $uri has empty <title>";
    } elseif ($titleLen > 60) {
        $errors[] = "Route $uri title exceeds 60 chars ($titleLen chars): '$title'";
    }

    // Check Meta Description
    preg_match('/<meta\s+name="description"\s+content="([^"]*)"/is', $content, $descMatches);
    $desc = trim($descMatches[1] ?? '');
    $descLen = mb_strlen($desc);
    if ($descLen === 0) {
        $errors[] = "Route $uri has empty meta description";
    } elseif ($descLen > 155) {
        $errors[] = "Route $uri meta description exceeds 155 chars ($descLen chars): '$desc'";
    }

    // Check Canonical
    preg_match('/<link\s+rel="canonical"\s+href="([^"]*)"/is', $content, $canonMatches);
    $canonical = trim($canonMatches[1] ?? '');
    if (empty($canonical)) {
        $errors[] = "Route $uri missing canonical tag";
    } elseif (str_contains($canonical, 'www.')) {
        $errors[] = "Route $uri canonical contains www: $canonical";
    }

    $report[] = [
        'uri' => $uri,
        'status' => $status,
        'h1_count' => $h1Count,
        'title' => $title,
        'title_len' => $titleLen,
        'desc_len' => $descLen,
        'canonical' => $canonical
    ];
}

echo "=== SEO AUDIT SUMMARY ===\n";
echo "Total routes tested: " . count($routes) . "\n";
echo "Total errors found: " . count($errors) . "\n\n";

if (!empty($errors)) {
    echo "ERRORS:\n";
    foreach ($errors as $e) {
        echo "- $e\n";
    }
} else {
    echo "ALL ROUTES PASSED 100%:\n";
    foreach ($report as $r) {
        printf("%-38s | H1: %-3s | Title (%2d chars): %-55s | Desc (%3s chars)\n", 
            $r['uri'], 
            $r['h1_count'], 
            $r['title_len'], 
            mb_substr($r['title'], 0, 55), 
            $r['desc_len']
        );
    }
}
