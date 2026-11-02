<!DOCTYPE html>
<html lang="en" class="scroll-smooth" style="overflow-x: hidden;">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @if(config('services.google.site_verification'))
    <meta name="google-site-verification" content="{{ config('services.google.site_verification') }}">
    @endif
    <title>@yield('title', 'Codemir IT Experts | Custom Web Development & AI Tools')</title>
    <meta name="description" content="@yield('meta_description', 'We build custom Laravel web systems, web apps, and AI-powered tools for founders and SMBs. 20+ projects delivered.')">

    <!-- Structured Data: Organization + ProfessionalService -->
    <script type="application/ld+json">
    {
        "@@context": "https://schema.org",
        "@@type": ["Organization", "ProfessionalService"],
        "name": "Codemir IT Experts",
        "url": "https://codemiritexpert.online",
        "logo": "https://codemiritexpert.online/images/logo.png",
        "description": "Custom Laravel web development agency specializing in web applications, AI-powered tools, eCommerce solutions & API integrations for founders in the US, UK & Australia.",
        "founder": {
            "@@type": "Person",
            "name": "Zaid Shahid",
            "jobTitle": "Founder & Lead Developer"
        },
        "address": {
            "@@type": "PostalAddress",
            "addressLocality": "Faisalabad",
            "addressCountry": "PK"
        },
        "areaServed": [
            {"@@type": "Country", "name": "United States"},
            {"@@type": "Country", "name": "United Kingdom"},
            {"@@type": "Country", "name": "Australia"},
            {"@@type": "Country", "name": "Pakistan"}
        ],
        "knowsAbout": ["Laravel", "PHP", "Web Application Development", "AI Integration", "eCommerce Development", "API Development", "SaaS Development"],
        "sameAs": [
            "https://github.com/ZaidShahid15",
            "https://www.linkedin.com/company/codemir-it-experts",
            "https://www.facebook.com/profile.php?id=61564927201888",
            "https://www.instagram.com/codemiritexpert/",
            "https://www.google.com/search?q=Codemir+IT+Experts"
        ],
        "hasMap": "https://maps.google.com/?q=Codemir+IT+Experts+Faisalabad",
        "contactPoint": {
            "@@type": "ContactPoint",
            "contactType": "sales",
            "availableLanguage": ["English", "Urdu"]
        },
        "serviceType": [
            "Custom Web Development",
            "Laravel Web Application Development",
            "AI Tool Integration",
            "eCommerce Development",
            "API Development & Integration",
            "Business Management Systems"
        ]
    }
    </script>

    @yield('structured_data')

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('images/logo.png') }}">

    <!-- Canonical URL -->
    <link rel="canonical" href="{{ url()->current() }}">

    <!-- Open Graph -->
    <meta property="og:title" content="@yield('title', 'Codemir IT Experts')">
    <meta property="og:description" content="@yield('meta_description', 'Custom Laravel web development agency.')">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:image" content="{{ asset('images/logo.png') }}">
    <meta property="og:site_name" content="Codemir IT Experts">
    <meta property="og:locale" content="en_US">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="@yield('title', 'Codemir IT Experts')">
    <meta name="twitter:description" content="@yield('meta_description', 'Custom Laravel web development agency.')">
    <meta name="twitter:image" content="{{ asset('images/logo.png') }}">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600;700&family=Inter:wght@300;400;500;600&family=Space+Grotesk:wght@400;500;600&display=swap" rel="stylesheet">

    <!-- AOS Animation -->
    <link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css">

    <!-- Tailwind CSS (compiled) -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-brand-black text-white font-inter antialiased" style="overflow-x: hidden; max-width: 100vw;">

    @include('components.navbar')

    {{-- Spacer to push content below fixed floating navbar (navbar height ~64px + 16px top offset = 80px, spacer = 96px) --}}
    <div style="height: 96px; flex-shrink: 0;"></div>

    <main>
        @yield('content')
    </main>

    @include('components.footer')

    <!-- AOS Init -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>AOS.init({ duration: 800, once: true, offset: 80 });</script>

    <!-- Alpine.js -->
    <script defer src="https://cdn.jsdelivr.net/npm/@alpinejs/collapse@3.x.x/dist/cdn.min.js"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    {{-- Floating Bottom Dock Bar --}}
    @include('components.dock-bar')

    {{-- Floating WhatsApp Button --}}
    <a href="https://wa.me/923268634963" target="_blank" rel="noopener noreferrer" 
       class="fixed bottom-24 right-6 z-50 flex items-center justify-center w-14 h-14 bg-[#25D366] text-white rounded-full shadow-lg hover:scale-110 hover:shadow-2xl transition-all duration-300"
       aria-label="Chat with us on WhatsApp">
        <svg class="w-8 h-8 fill-current" viewBox="0 0 24 24">
            <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51a12.8 12.8 0 0 0-.57-.01c-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 0 0-3.48-8.413Z"/>
        </svg>
    </a>

    @stack('scripts')
</body>
</html>
