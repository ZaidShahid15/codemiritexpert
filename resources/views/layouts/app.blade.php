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

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('images/logo.png') }}">

    <!-- Open Graph -->
    <meta property="og:title" content="@yield('title', 'Codemir IT Experts')">
    <meta property="og:description" content="@yield('meta_description', 'Custom Laravel web development agency.')">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">

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

    @stack('scripts')
</body>
</html>
