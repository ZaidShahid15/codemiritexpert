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
];

$allInternalLinks = [];

foreach ($routes as $uri) {
    $request = Illuminate\Http\Request::create($uri, 'GET');
    $response = $kernel->handle($request);
    $content = $response->getContent();

    preg_match_all('/<a\s+[^>]*href=["\']([^"\']+)["\']/is', $content, $matches);
    foreach ($matches[1] as $href) {
        // Filter only internal links
        if (str_starts_with($href, 'http://') || str_starts_with($href, 'https://')) {
            if (str_contains($href, 'codemiritexpert.online') || str_contains($href, 'localhost')) {
                $path = parse_url($href, PHP_URL_PATH);
                $query = parse_url($href, PHP_URL_QUERY);
                $clean = $path . ($query ? '?' . $query : '');
                $allInternalLinks[$clean] = true;
            }
        } elseif (str_starts_with($href, '/')) {
            $allInternalLinks[$href] = true;
        }
    }
}

$broken = [];
$checked = 0;

foreach (array_keys($allInternalLinks) as $link) {
    // Ignore direct anchors or tel / mailto
    if ($link === '#' || str_starts_with($link, '#')) continue;
    $checked++;
    $request = Illuminate\Http\Request::create($link, 'GET');
    $response = $kernel->handle($request);
    $status = $response->getStatusCode();
    if ($status >= 400) {
        $broken[] = "$link returned HTTP $status";
    }
}

echo "Checked $checked unique internal links.\n";
if (empty($broken)) {
    echo "NO BROKEN INTERNAL LINKS! ALL 200 OK.\n";
} else {
    echo "Broken links found:\n";
    foreach ($broken as $b) {
        echo "- $b\n";
    }
}
