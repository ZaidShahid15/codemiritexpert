<?php
return [
    // Home page
    'home' => [
        ['route' => 'services', 'anchor' => 'Services'],
        ['route' => 'ai-solutions', 'anchor' => 'AI Solutions'],
        ['route' => 'work', 'anchor' => 'Our Work'],
        ['route' => 'landing.law-firm', 'anchor' => 'Law Firm Website Development'],
        ['route' => 'landing.clinic', 'anchor' => 'Clinic Website Development'],
        ['route' => 'blog', 'anchor' => 'Blog'],
    ],
    // Services index page
    'services' => [
        ['route' => 'services.detail', 'params' => ['slug' => 'custom-websites'], 'anchor' => 'Custom Laravel website development'],
        ['route' => 'services.detail', 'params' => ['slug' => 'web-applications'], 'anchor' => 'Custom Laravel web applications'],
        ['route' => 'services.detail', 'params' => ['slug' => 'ai-tools'], 'anchor' => 'AI chatbot development for business'],
        ['route' => 'services.detail', 'params' => ['slug' => 'ecommerce'], 'anchor' => 'Custom Laravel ecommerce development'],
        ['route' => 'services.detail', 'params' => ['slug' => 'api-development'], 'anchor' => 'REST API development with Laravel'],
        ['route' => 'services.detail', 'params' => ['slug' => 'business-systems'], 'anchor' => 'Custom ERP and inventory software development'],
        ['route' => 'landing.law-firm', 'anchor' => 'Law Firm Landing Page'],
        ['route' => 'landing.clinic', 'anchor' => 'Clinic Landing Page'],
    ],
    // Individual service detail pages
    'custom-websites' => [
        ['route' => 'work.detail', 'params' => ['slug' => 'law-firm-website'], 'anchor' => 'Law Firm case study'],
        ['route' => 'landing.law-firm', 'anchor' => 'Law Firm Landing'],
        ['route' => 'landing.clinic', 'anchor' => 'Clinic Landing'],
        ['route' => 'blog.detail', 'params' => ['slug' => 'clean-laravel-vs-wordpress'], 'anchor' => 'Laravel vs WordPress guide'],
        ['route' => 'contact', 'anchor' => 'Request a Laravel development quote'],
    ],
    'web-applications' => [
        ['route' => 'work.detail', 'params' => ['slug' => 'business-management-system'], 'anchor' => 'ERP case study'],
        ['route' => 'work.detail', 'params' => ['slug' => 'booking-system'], 'anchor' => 'Clinic booking system case study'],
        ['route' => 'services.detail', 'params' => ['slug' => 'business-systems'], 'anchor' => 'Custom ERP solutions'],
        ['route' => 'blog.detail', 'params' => ['slug' => 'building-custom-crm-laravel'], 'anchor' => 'Custom CRM development guide'],
        ['route' => 'contact', 'anchor' => 'Request a Laravel development quote'],
    ],
    'ai-tools' => [
        ['route' => 'ai-solutions', 'anchor' => 'AI Solutions Overview'],
        ['route' => 'work.detail', 'params' => ['slug' => 'ai-chatbot-integration'], 'anchor' => 'AI chatbot case study'],
        ['route' => 'blog.detail', 'params' => ['slug' => 'laravel-openai-integration-guide'], 'anchor' => 'OpenAI integration guide'],
        ['route' => 'contact', 'anchor' => 'Request a Laravel development quote'],
    ],
    'ecommerce' => [
        ['route' => 'work.detail', 'params' => ['slug' => 'ecommerce-store'], 'anchor' => 'Ecommerce case study'],
        ['route' => 'services.detail', 'params' => ['slug' => 'api-development'], 'anchor' => 'API development services'],
        ['route' => 'services.detail', 'params' => ['slug' => 'business-systems'], 'anchor' => 'Business systems services'],
        ['route' => 'contact', 'anchor' => 'Request a Laravel development quote'],
    ],
    'api-development' => [
        ['route' => 'services.detail', 'params' => ['slug' => 'ecommerce'], 'anchor' => 'Ecommerce development services'],
        ['route' => 'services.detail', 'params' => ['slug' => 'business-systems'], 'anchor' => 'Business systems services'],
        ['route' => 'services.detail', 'params' => ['slug' => 'ai-tools'], 'anchor' => 'AI tools page'],
        ['route' => 'contact', 'anchor' => 'Request a Laravel development quote'],
    ],
    'business-systems' => [
        ['route' => 'work.detail', 'params' => ['slug' => 'business-management-system'], 'anchor' => 'ERP case study'],
        ['route' => 'work.detail', 'params' => ['slug' => 'inventory-management-system'], 'anchor' => 'Inventory management case study'],
        ['route' => 'blog.detail', 'params' => ['slug' => 'building-custom-crm-laravel'], 'anchor' => 'Custom CRM development guide'],
        ['route' => 'contact', 'anchor' => 'Request a Laravel development quote'],
    ],
    // Landing pages
    'landing.law-firm' => [
        ['route' => 'services.detail', 'params' => ['slug' => 'custom-websites'], 'anchor' => 'Custom website development'],
        ['route' => 'work.detail', 'params' => ['slug' => 'law-firm-website'], 'anchor' => 'Law Firm case study'],
        ['route' => 'contact', 'anchor' => 'Request a Laravel development quote'],
    ],
    'landing.clinic' => [
        ['route' => 'services.detail', 'params' => ['slug' => 'custom-websites'], 'anchor' => 'Custom website development'],
        ['route' => 'work.detail', 'params' => ['slug' => 'booking-system'], 'anchor' => 'Clinic booking system case study'],
        ['route' => 'contact', 'anchor' => 'Request a Laravel development quote'],
    ],
    // Work index page
    'work' => [
        ['route' => 'work.detail', 'params' => ['slug' => 'law-firm-website'], 'anchor' => 'Law Firm case study'],
        ['route' => 'work.detail', 'params' => ['slug' => 'business-management-system'], 'anchor' => 'ERP case study'],
        ['route' => 'work.detail', 'params' => ['slug' => 'ai-chatbot-integration'], 'anchor' => 'AI chatbot case study'],
        ['route' => 'work.detail', 'params' => ['slug' => 'ecommerce-store'], 'anchor' => 'Ecommerce case study'],
        ['route' => 'work.detail', 'params' => ['slug' => 'booking-system'], 'anchor' => 'Clinic booking case study'],
        ['route' => 'work.detail', 'params' => ['slug' => 'inventory-management-system'], 'anchor' => 'Inventory management case study'],
        ['route' => 'services', 'anchor' => 'Services'],
        ['route' => 'landing.law-firm', 'anchor' => 'Law Firm Landing'],
        ['route' => 'landing.clinic', 'anchor' => 'Clinic Landing'],
        ['route' => 'contact', 'anchor' => 'Request a Laravel development quote'],
    ],
    // Individual work case studies
    'law-firm-website' => [
        ['route' => 'services.detail', 'params' => ['slug' => 'custom-websites'], 'anchor' => 'Custom website development'],
        ['route' => 'work.detail', 'params' => ['slug' => 'business-management-system'], 'anchor' => 'ERP case study'],
        ['route' => 'work.detail', 'params' => ['slug' => 'booking-system'], 'anchor' => 'Clinic booking system case study'],
        ['route' => 'contact', 'anchor' => 'Request a Laravel development quote'],
    ],
    'business-management-system' => [
        ['route' => 'services.detail', 'params' => ['slug' => 'business-systems'], 'anchor' => 'Custom ERP services'],
        ['route' => 'work.detail', 'params' => ['slug' => 'law-firm-website'], 'anchor' => 'Law Firm case study'],
        ['route' => 'work.detail', 'params' => ['slug' => 'inventory-management-system'], 'anchor' => 'Inventory management case study'],
        ['route' => 'contact', 'anchor' => 'Request a Laravel development quote'],
    ],
    'ai-chatbot-integration' => [
        ['route' => 'services.detail', 'params' => ['slug' => 'ai-tools'], 'anchor' => 'AI chatbot services'],
        ['route' => 'work.detail', 'params' => ['slug' => 'business-management-system'], 'anchor' => 'ERP case study'],
        ['route' => 'work.detail', 'params' => ['slug' => 'ecommerce-store'], 'anchor' => 'Ecommerce case study'],
        ['route' => 'contact', 'anchor' => 'Request a Laravel development quote'],
    ],
    'ecommerce-store' => [
        ['route' => 'services.detail', 'params' => ['slug' => 'ecommerce'], 'anchor' => 'Ecommerce development services'],
        ['route' => 'work.detail', 'params' => ['slug' => 'ai-chatbot-integration'], 'anchor' => 'AI chatbot case study'],
        ['route' => 'work.detail', 'params' => ['slug' => 'booking-system'], 'anchor' => 'Clinic booking case study'],
        ['route' => 'contact', 'anchor' => 'Request a Laravel development quote'],
    ],
    'booking-system' => [
        ['route' => 'services.detail', 'params' => ['slug' => 'web-applications'], 'anchor' => 'Custom web app services'],
        ['route' => 'work.detail', 'params' => ['slug' => 'law-firm-website'], 'anchor' => 'Law Firm case study'],
        ['route' => 'work.detail', 'params' => ['slug' => 'ecommerce-store'], 'anchor' => 'Ecommerce case study'],
        ['route' => 'contact', 'anchor' => 'Request a Laravel development quote'],
    ],
    'inventory-management-system' => [
        ['route' => 'services.detail', 'params' => ['slug' => 'business-systems'], 'anchor' => 'ERP services'],
        ['route' => 'work.detail', 'params' => ['slug' => 'business-management-system'], 'anchor' => 'ERP case study'],
        ['route' => 'work.detail', 'params' => ['slug' => 'ai-chatbot-integration'], 'anchor' => 'AI chatbot case study'],
        ['route' => 'contact', 'anchor' => 'Request a Laravel development quote'],
    ],
    // AI Solutions page
    'ai-solutions' => [
        ['route' => 'services', 'anchor' => 'Services'],
        ['route' => 'work', 'anchor' => 'Our Work'],
        ['route' => 'landing.law-firm', 'anchor' => 'Law Firm Website Development'],
        ['route' => 'landing.clinic', 'anchor' => 'Clinic Website Development'],
        ['route' => 'blog', 'anchor' => 'Blog'],
    ],
    'blog' => [
        ['route' => 'blog.detail', 'params' => ['slug' => 'clean-laravel-vs-wordpress'], 'anchor' => 'Laravel vs WordPress guide'],
        ['route' => 'blog.detail', 'params' => ['slug' => 'laravel-openai-integration-guide'], 'anchor' => 'OpenAI integration guide'],
        ['route' => 'blog.detail', 'params' => ['slug' => 'building-custom-crm-laravel'], 'anchor' => 'Custom CRM development guide'],
        ['route' => 'contact', 'anchor' => 'Request a Laravel development quote'],
    ],
    // Individual blog posts
    'clean-laravel-vs-wordpress' => [
        ['route' => 'services.detail', 'params' => ['slug' => 'custom-websites'], 'anchor' => 'Custom website development'],
        ['route' => 'blog.detail', 'params' => ['slug' => 'laravel-openai-integration-guide'], 'anchor' => 'OpenAI integration guide'],
        ['route' => 'work.detail', 'params' => ['slug' => 'law-firm-website'], 'anchor' => 'Law Firm case study'],
        ['route' => 'contact', 'anchor' => 'Request a Laravel development quote'],
    ],
    'laravel-openai-integration-guide' => [
        ['route' => 'services.detail', 'params' => ['slug' => 'ai-tools'], 'anchor' => 'AI chatbot services'],
        ['route' => 'blog.detail', 'params' => ['slug' => 'building-custom-crm-laravel'], 'anchor' => 'Custom CRM guide'],
        ['route' => 'work.detail', 'params' => ['slug' => 'ai-chatbot-integration'], 'anchor' => 'AI chatbot case study'],
        ['route' => 'contact', 'anchor' => 'Request a Laravel development quote'],
    ],
    'building-custom-crm-laravel' => [
        ['route' => 'services.detail', 'params' => ['slug' => 'business-systems'], 'anchor' => 'custom business management software development'],
        ['route' => 'blog.detail', 'params' => ['slug' => 'clean-laravel-vs-wordpress'], 'anchor' => 'Laravel vs WordPress guide'],
        ['route' => 'work.detail', 'params' => ['slug' => 'business-management-system'], 'anchor' => 'ERP case study'],
        ['route' => 'contact', 'anchor' => 'Request a Laravel development quote'],
    ],
    // About page
    'about' => [
        ['route' => 'services', 'anchor' => 'Services'],
        ['route' => 'work', 'anchor' => 'Our Work'],
        ['route' => 'contact', 'anchor' => 'Request a Laravel development quote'],
    ],
];
