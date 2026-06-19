@extends('layouts.app')

@section('title', 'Codemir IT Experts | Custom Web Development & AI Tools')
@section('meta_description', 'We build custom Laravel web systems, web apps, and AI-powered tools for founders and SMBs. 20+ projects delivered. Based in Pakistan, serving globally.')

@section('content')

{{-- HERO --}}
<section class="relative min-h-screen flex items-center justify-center overflow-hidden bg-brand-black pt-12 pb-16">
    {{-- Animated grid background --}}
    <div class="absolute inset-0 opacity-10">
        <div class="absolute inset-0" style="background-image: linear-gradient(rgba(30,107,255,0.3) 1px, transparent 1px), linear-gradient(90deg, rgba(30,107,255,0.3) 1px, transparent 1px); background-size: 60px 60px;"></div>
    </div>
    {{-- Glow --}}
    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[600px] h-[600px] bg-brand-blue/10 rounded-full blur-3xl pointer-events-none"></div>

    <div class="relative z-10 max-w-5xl mx-auto px-6 text-center">
        <span class="inline-block font-grotesk text-brand-blue text-sm tracking-widest uppercase mb-6 border border-brand-blue/30 px-4 py-1.5 rounded-full" data-aos="fade-down">
            Laravel · Web Systems · AI Tools
        </span>
        <h1 class="font-playfair text-5xl md:text-7xl font-bold leading-tight text-white mb-6" data-aos="fade-up">
            We Build Web Systems<br>
            <span class="text-brand-blue">&amp; AI-Powered Tools</span>
        </h1>
        <p class="font-inter text-brand-muted text-lg md:text-xl max-w-2xl mx-auto mb-10" data-aos="fade-up" data-aos-delay="100">
            That Grow Your Business — Not Just Look Good. Codemir IT Experts delivers custom PHP Laravel web apps, AI-integrated tools, and high-converting websites for founders and SMBs worldwide.
        </p>
        <div class="flex flex-wrap gap-4 justify-center mb-14" data-aos="fade-up" data-aos-delay="200">
            <a href="{{ route('contact') }}" class="bg-brand-blue hover:bg-brand-blue-hover text-white font-semibold px-8 py-4 rounded-full transition text-base">
                Get a Free Quote →
            </a>
            <a href="{{ route('work') }}" class="border border-white/20 hover:border-white/60 text-white font-semibold px-8 py-4 rounded-full transition text-base">
                View Our Work
            </a>
        </div>

        {{-- Trust badges --}}
        <div class="flex flex-wrap justify-center gap-6 text-sm font-grotesk text-brand-muted" data-aos="fade-up" data-aos-delay="300">
            @foreach(['20+ Projects Delivered', 'Laravel Expert', 'AI Tools Integrated', 'Clients Worldwide'] as $badge)
            <span class="flex items-center gap-2">
                <span class="w-1.5 h-1.5 rounded-full bg-brand-blue"></span>
                {{ $badge }}
            </span>
            @endforeach
        </div>
    </div>
</section>

{{-- STATS BANNER --}}
<section class="bg-brand-dark border-y border-white/5 py-16 relative overflow-hidden">
    <div class="max-w-5xl mx-auto px-6 grid grid-cols-2 md:grid-cols-4 gap-8 text-center relative z-10">
        @foreach($stats as $stat)
        <div data-aos="fade-up">
            <div class="font-playfair text-4xl md:text-5xl font-bold text-brand-blue mb-2">{{ $stat['number'] }}</div>
            <div class="font-grotesk text-sm text-brand-muted uppercase tracking-wider">{{ $stat['label'] }}</div>
        </div>
        @endforeach
    </div>
</section>

{{-- TECH CAROUSEL / SLIDER (Core Web Vital Optimized) --}}
<section class="border-b border-white/5 bg-brand-black/40 py-8 overflow-hidden relative" aria-label="Technologies Slider">
    <!-- Overlay fades for premium look -->
    <div class="absolute inset-y-0 left-0 w-24 bg-gradient-to-r from-brand-black to-transparent z-10 pointer-events-none"></div>
    <div class="absolute inset-y-0 right-0 w-24 bg-gradient-to-l from-brand-black to-transparent z-10 pointer-events-none"></div>

    <div class="animate-marquee flex gap-16 items-center">
        @foreach(array_merge([
            'PHP Laravel', 'Tailwind CSS', 'Alpine.js', 'React.js', 'Vue.js', 'MySQL', 'PostgreSQL', 'OpenAI API', 'RESTful APIs', 'eCommerce', 'AWS Hosting', 'Git & GitHub'
        ], [
            'PHP Laravel', 'Tailwind CSS', 'Alpine.js', 'React.js', 'Vue.js', 'MySQL', 'PostgreSQL', 'OpenAI API', 'RESTful APIs', 'eCommerce', 'AWS Hosting', 'Git & GitHub'
        ]) as $tech)
        <span class="font-grotesk text-lg font-bold tracking-[0.15em] text-white/30 hover:text-brand-blue transition duration-300 uppercase select-none">
            {{ $tech }}
        </span>
        @endforeach
    </div>
</section>

{{-- ECOSYSTEM / TRUSTED PARTNERS SHOWCASE --}}
<section class="py-16 bg-brand-black border-b border-white/5 relative overflow-hidden">
    <div class="max-w-7xl mx-auto px-6">
        <div class="flex flex-col lg:flex-row items-center justify-between gap-10">
            
            <div class="max-w-md text-center lg:text-left shrink-0" data-aos="fade-right">
                <span class="font-grotesk text-brand-blue text-xs uppercase tracking-widest block mb-2 font-semibold">Integrations</span>
                <h2 class="font-playfair text-2xl md:text-3xl font-bold text-white leading-tight">
                    Powering Solutions with <span class="text-brand-blue">World-Class</span> Tech
                </h2>
                <p class="font-inter text-brand-muted text-sm mt-3 leading-relaxed">
                    We build on robust, secure, and industry-standard ecosystems to ensure performance and reliability.
                </p>
            </div>

            <div class="grid grid-cols-2 sm:grid-cols-3 gap-6 w-full max-w-3xl" data-aos="fade-left">
                @foreach([
                    ['name' => 'Laravel',   'desc' => 'Core Architecture', 'color' => '#FF2E2E', 'icon' => '<svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"/></svg>'],
                    ['name' => 'OpenAI',    'desc' => 'Generative AI API',  'color' => '#10B981', 'icon' => '<svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M12 4.5v15m7.5-7.5h-15"/></svg>'],
                    ['name' => 'AWS Cloud', 'desc' => 'Secure Hosting',    'color' => '#FF9900', 'icon' => '<svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z"/></svg>'],
                    ['name' => 'Stripe',    'desc' => 'Payment Gateway',   'color' => '#635BFF', 'icon' => '<svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><rect x="3" y="5" width="18" height="14" rx="2"/><path d="M3 10h18"/></svg>'],
                    ['name' => 'Tailwind',  'desc' => 'Fluid Design System','color' => '#06B6D4', 'icon' => '<svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><path d="M8 12h8"/></svg>'],
                    ['name' => 'GitHub',    'desc' => 'Continuous CI/CD',  'color' => '#FFFFFF', 'icon' => '<svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M12 2C6.477 2 2 6.477 2 12c0 4.42 2.865 8.166 6.839 9.489.5.092.682-.217.682-.482 0-.237-.008-.866-.013-1.7-2.782.603-3.369-1.34-3.369-1.34-.454-1.156-1.11-1.464-1.11-1.464-.908-.62.069-.608.069-.608 1.003.07 1.531 1.03 1.531 1.03.892 1.529 2.341 1.087 2.91.831.092-.646.35-1.086.636-1.336-2.22-.253-4.555-1.11-4.555-4.943 0-1.091.39-1.984 1.029-2.683-.103-.253-.446-1.27.098-2.647 0 0 .84-.269 2.75 1.025A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.294 2.747-1.025 2.747-1.025.546 1.377.203 2.394.1 2.647.64.699 1.028 1.592 1.028 2.683 0 3.842-2.339 4.687-4.566 4.935.359.309.678.919.678 1.852 0 1.336-.012 2.415-.012 2.743 0 .267.18.579.688.481C19.137 20.162 22 16.418 22 12c0-5.523-4.477-10-10-10z"/></svg>']
                ] as $partner)
                <div class="group relative flex flex-col items-center justify-center p-6 rounded-2xl bg-white/2 hover:bg-white/5 border border-white/5 hover:border-white/10 transition-all duration-300 shadow-sm hover:shadow-md cursor-default transform hover:-translate-y-1">
                    <div class="h-10 flex items-center justify-center mb-3">
                        <div style="color: {{ $partner['color'] }};" class="opacity-60 group-hover:opacity-100 transition-opacity duration-300">
                            {!! $partner['icon'] !!}
                        </div>
                    </div>
                    <span class="text-sm font-semibold text-white transition-colors duration-300 group-hover:text-brand-blue">{{ $partner['name'] }}</span>
                    <span class="text-[9px] tracking-wider uppercase text-brand-muted mt-1 font-medium">{{ $partner['desc'] }}</span>
                </div>
                @endforeach
            </div>

        </div>
    </div>
</section>

{{-- SERVICES — bitsolmarketing style animated border cards --}}
<section class="py-24 bg-brand-black relative">

<style>
/* Rotating conic-gradient border cards */
.service-card-wrap { position: relative; }
.service-card-wrap::before {
    content: '';
    position: absolute;
    inset: 0;
    z-index: -1;
    border-radius: 16px;
    background: conic-gradient(#000, #1e6bff 5%, #000 38%, #000 50%, #8b5cf6 60%, #000 87%);
    filter: blur(4px);
    transition: transform 2s ease;
}
.service-card-wrap:hover::before { transform: rotate(180deg); }
.service-card-wrap::after {
    content: '';
    position: absolute;
    inset: 2px;
    z-index: -1;
    border-radius: 14px;
    background: conic-gradient(#0d0d1a, #1e6bff 5%, #0d0d1a 14%, #0d0d1a 50%, #8b5cf6 60%, #0d0d1a 64%);
    filter: blur(2px);
    transition: transform 2s ease;
}
.service-card-wrap:hover::after { transform: rotate(-90deg); }
.service-card-inner {
    position: relative;
    background: rgba(10,10,26,0.9);
    backdrop-filter: blur(16px);
    border: 1px solid rgba(255,255,255,0.05);
    border-radius: 14px;
    padding: 24px;
    height: 100%;
    overflow: hidden;
    transition: border-color 0.3s;
}
@media (min-width: 640px) {
    .service-card-inner {
        padding: 40px;
    }
}
.service-card-inner:hover { border-color: rgba(30,107,255,0.2); }
.service-explore-arrow {
    width: 20px;
    height: 1px;
    background: rgba(255,255,255,0.3);
    transition: width 0.3s ease, background 0.3s ease;
    display: inline-block;
    vertical-align: middle;
    margin-left: 8px;
}
.service-card-wrap:hover .service-explore-arrow {
    width: 32px;
    background: #1e6bff;
}
</style>
    <div class="max-w-7xl mx-auto px-6">
        <div class="text-center mb-16" data-aos="fade-up">
            <span class="font-grotesk text-brand-blue text-sm tracking-widest uppercase">Core Expertise</span>
            <h2 class="font-playfair text-4xl md:text-5xl font-bold text-white mt-3">What We <span class="text-brand-blue">Build</span> For You</h2>
            <p class="font-inter text-brand-muted mt-4 max-w-xl mx-auto">We combine deep technical expertise with creative innovation to solve your most complex digital challenges.</p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($services as $index => $service)
            <div class="service-card-wrap" data-aos="fade-up" data-aos-delay="{{ $index * 80 }}">
                <a href="{{ route('services.detail', $service['slug']) }}" class="service-card-inner block h-full" style="text-decoration:none;">
                    {{-- Icon --}}
                    <div style="width:56px;height:56px;border-radius:16px;background:rgba(30,107,255,0.12);display:flex;align-items:center;justify-content:center;margin-bottom:28px;transition:transform 0.3s ease;" class="svc-icon">
                        @if($service['icon'] === 'globe')
                            <svg width="24" height="24" fill="none" stroke="#1e6bff" stroke-width="2" viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><path d="M2 12h20M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"/></svg>
                        @elseif($service['icon'] === 'cog')
                            <svg width="24" height="24" fill="none" stroke="#8b5cf6" stroke-width="2" viewBox="0 0 24 24"><circle cx="12" cy="12" r="3"/><path stroke-linecap="round" stroke-linejoin="round" d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1-2.83 2.83l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-4 0v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83-2.83l.06-.06A1.65 1.65 0 0 0 4.68 15a1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1 0-4h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 2.83-2.83l.06.06A1.65 1.65 0 0 0 9 4.68a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 4 0v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 2.83l-.06.06A1.65 1.65 0 0 0 19.4 9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 0 4h-.09a1.65 1.65 0 0 0-1.51 1z"/></svg>
                        @elseif($service['icon'] === 'cpu')
                            <svg width="24" height="24" fill="none" stroke="#10b981" stroke-width="2" viewBox="0 0 24 24"><rect x="4" y="4" width="16" height="16" rx="2"/><path d="M9 9h6v6H9zM9 1v3M15 1v3M9 20v3M15 20v3M20 9h3M20 15h3M1 9h3M1 15h3"/></svg>
                        @elseif($service['icon'] === 'shopping-cart')
                            <svg width="24" height="24" fill="none" stroke="#f59e0b" stroke-width="2" viewBox="0 0 24 24"><circle cx="9" cy="21" r="1"/><circle cx="20" cy="21" r="1"/><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"/></svg>
                        @elseif($service['icon'] === 'link')
                            <svg width="24" height="24" fill="none" stroke="#1e6bff" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M13.19 8.688a4.5 4.5 0 0 1 1.242 7.244l-4.5 4.5a4.5 4.5 0 0 1-6.364-6.364l1.757-1.757m13.35-.622 1.757-1.757a4.5 4.5 0 0 0-6.364-6.364l-4.5 4.5a4.5 4.5 0 0 0 1.242 7.244"/></svg>
                        @elseif($service['icon'] === 'chart-bar')
                            <svg width="24" height="24" fill="none" stroke="#8b5cf6" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M3 13.125C3 12.504 3.504 12 4.125 12h2.25c.621 0 1.125.504 1.125 1.125v6.75C7.5 20.496 6.996 21 6.375 21h-2.25A1.125 1.125 0 0 1 3 19.875v-6.75zM9.75 8.625c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125v11.25c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 0 1-1.125-1.125V8.625zM16.5 4.125c0-.621.504-1.125 1.125-1.125h2.25C20.496 3 21 3.504 21 4.125v15.75c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 0 1-1.125-1.125V4.125z"/></svg>
                        @else
                            <svg width="24" height="24" fill="none" stroke="#1e6bff" stroke-width="2" viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><path d="M12 8v4l3 3"/></svg>
                        @endif
                    </div>
                    {{-- Content --}}
                    <h3 style="font-family:'Playfair Display',serif;font-size:22px;font-weight:700;color:#fff;margin-bottom:14px;">{{ $service['title'] }}</h3>
                    <p style="font-family:'Inter',sans-serif;font-size:14px;color:rgba(255,255,255,0.5);line-height:1.7;margin-bottom:24px;">{{ $service['desc'] }}</p>
                    {{-- Explore link (bitsolmarketing style) --}}
                    <div style="display:flex;align-items:center;font-size:13px;font-weight:700;color:rgba(255,255,255,0.7);font-family:'Space Grotesk',sans-serif;">
                        Explore Service
                        <span class="service-explore-arrow"></span>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
        <div class="text-center mt-20 md:mt-24">
            <a href="{{ route('services') }}" style="display:inline-flex;align-items:center;gap:8px;border:1px solid rgba(30,107,255,0.4);color:#1e6bff;font-family:'Space Grotesk',sans-serif;font-weight:600;font-size:15px;padding:14px 36px;border-radius:999px;transition:all 0.3s;" onmouseover="this.style.background='#1e6bff';this.style.color='#fff'" onmouseout="this.style.background='transparent';this.style.color='#1e6bff'">
                View All Services →
            </a>
        </div>
    </div>
</section>

{{-- FEATURED WORK — bitsolmarketing style --}}
<section class="py-24 bg-brand-dark" x-data="{ activeTab: 'All' }">
<style>
.project-card {
    position: relative;
    border-radius: 16px;
    overflow: hidden;
    background: rgba(15,15,30,0.8);
    border: 1px solid rgba(255,255,255,0.06);
    transition: border-color 0.3s ease, transform 0.3s ease;
    cursor: pointer;
}
.project-card:hover { border-color: rgba(30,107,255,0.35); transform: translateY(-4px); }
.project-card-img { width:100%; height:220px; object-fit:cover; transition: transform 0.6s ease; display:block; }
.project-card:hover .project-card-img { transform: scale(1.06); }
.project-card-overlay {
    position: absolute;
    inset: 0;
    background: linear-gradient(to bottom, transparent 30%, rgba(5,5,20,0.92) 100%);
    transition: background 0.4s;
}
.project-card:hover .project-card-overlay { background: linear-gradient(to bottom, rgba(5,5,20,0.3) 0%, rgba(5,5,20,0.95) 100%); }
.project-card-body { padding: 24px; }
.project-cat { font-family:'Space Grotesk',sans-serif; font-size:11px; text-transform:uppercase; letter-spacing:0.12em; color:#1e6bff; font-weight:600; }
.project-title { font-family:'Playfair Display',serif; font-size:18px; font-weight:700; color:#fff; margin:8px 0 12px; }
.project-link { font-family:'Space Grotesk',sans-serif; font-size:13px; font-weight:700; color:rgba(255,255,255,0.5); display:inline-flex; align-items:center; gap:6px; transition: color 0.2s; text-decoration:none; }
.project-card:hover .project-link { color: #1e6bff; }
.project-link-line { width:16px; height:1px; background:currentColor; display:inline-block; transition: width 0.3s; }
.project-card:hover .project-link-line { width:28px; }
</style>
    <div class="max-w-7xl mx-auto px-6">
        <div class="text-center mb-12" data-aos="fade-up">
            <span class="font-grotesk text-brand-blue text-sm tracking-widest uppercase">Portfolio</span>
            <h2 class="font-playfair text-4xl md:text-5xl font-bold text-white mt-3">Featured Work</h2>
        </div>

        {{-- Category Tabs --}}
        <div class="flex flex-wrap justify-center gap-3 mb-12" data-aos="fade-up">
            @foreach(['All', 'Website', 'Web App', 'AI Tool', 'eCommerce'] as $category)
            <button @click="activeTab = '{{ $category }}'"
                    :class="activeTab === '{{ $category }}'
                        ? 'bg-brand-blue text-white border-brand-blue shadow-lg shadow-brand-blue/20'
                        : 'bg-brand-card text-brand-muted border-white/10 hover:text-white hover:border-white/30'"
                    class="px-6 py-2.5 font-grotesk text-sm font-semibold rounded-full border transition-all duration-200 outline-none">
                {{ $category }}
            </button>
            @endforeach
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 min-h-[300px]">
            @foreach($projects as $project)
            <div x-show="activeTab === 'All' || activeTab === '{{ $project['category'] }}'"
                 x-transition:enter="transition ease-out duration-300"
                 x-transition:enter-start="opacity-0 scale-95"
                 x-transition:enter-end="opacity-100 scale-100">
                <a href="{{ route('work.detail', $project['slug']) }}" class="project-card block hover:no-underline text-white">
                    {{-- Image with overlay --}}
                    <div style="position:relative;overflow:hidden;">
                        <img src="{{ asset('images/projects/' . $project['image']) }}"
                             alt="{{ $project['title'] }}"
                             class="project-card-img"
                             width="400" height="220" loading="lazy">
                        <div class="project-card-overlay"></div>
                        {{-- Tag badge --}}
                        <span style="position:absolute;top:14px;right:14px;background:rgba(30,107,255,0.85);backdrop-filter:blur(8px);color:#fff;font-family:'Space Grotesk',sans-serif;font-size:11px;font-weight:600;padding:4px 12px;border-radius:999px;letter-spacing:0.06em;">
                            {{ $project['tag'] ?? $project['category'] }}
                        </span>
                    </div>
                    {{-- Card body --}}
                    <div class="project-card-body">
                        <div class="project-cat">{{ $project['category'] }}</div>
                        <div class="project-title">{{ $project['title'] }}</div>
                        <span class="project-link">
                            View Case Study
                            <span class="project-link-line"></span>
                        </span>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
        <div class="text-center mt-20 md:mt-24">
            <a href="{{ route('work') }}" style="display:inline-flex;align-items:center;gap:8px;border:1px solid rgba(255,255,255,0.15);color:#fff;font-family:'Space Grotesk',sans-serif;font-weight:600;font-size:15px;padding:14px 36px;border-radius:999px;transition:all 0.3s;" onmouseover="this.style.borderColor='rgba(30,107,255,0.6)';this.style.color='#1e6bff'" onmouseout="this.style.borderColor='rgba(255,255,255,0.15)';this.style.color='#fff'">
                View All Projects →
            </a>
        </div>
    </div>
</section>

{{-- PROCESS --}}
<section class="py-24 bg-brand-black relative overflow-hidden">
    <!-- Ambient background glows -->
    <div class="absolute top-1/4 left-1/10 w-96 h-96 bg-brand-blue/5 rounded-full filter blur-[100px] pointer-events-none"></div>
    <div class="absolute bottom-1/4 right-1/10 w-96 h-96 bg-purple-500/5 rounded-full filter blur-[100px] pointer-events-none"></div>

    <div class="max-w-6xl mx-auto px-6 relative z-10">
        <div class="text-center mb-20" data-aos="fade-up">
            <span class="font-grotesk text-brand-blue text-xs tracking-[0.2em] uppercase bg-brand-blue/10 px-4 py-2 rounded-full border border-brand-blue/20">Our Approach</span>
            <h2 class="font-playfair text-4xl md:text-5xl font-bold text-white mt-6">How We Work</h2>
            <p class="font-inter text-brand-muted text-base max-w-xl mx-auto mt-4">We follow a proven, transparent process to take your vision from idea to launch.</p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8 relative">
            <!-- Connector Line for Desktop -->
            <div class="absolute top-1/2 left-0 right-0 h-0.5 bg-gradient-to-r from-brand-blue/20 via-purple-500/20 to-brand-blue/20 -translate-y-12 hidden md:block z-0"></div>

            @foreach([
                [
                    'step' => '01', 
                    'title' => 'Discovery',    
                    'desc' => 'We learn your business, goals, and current pain points to scope out the perfect technical solution.',
                    'icon' => '<svg class="w-6 h-6 text-brand-blue" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/></svg>'
                ],
                [
                    'step' => '02', 
                    'title' => 'Design',       
                    'desc' => 'We wireframe, map user journeys, and design high-fidelity UI/UX layouts tailored to your brand identity.',
                    'icon' => '<svg class="w-6 h-6 text-brand-blue" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"/></svg>'
                ],
                [
                    'step' => '03', 
                    'title' => 'Development',  
                    'desc' => 'Our experts code your product using clean Laravel / Vue architecture, prioritizing speed, security, and scalability.',
                    'icon' => '<svg class="w-6 h-6 text-brand-blue" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"/></svg>'
                ],
                [
                    'step' => '04', 
                    'title' => 'Launch',       
                    'desc' => 'We rigorously test, deploy, monitor performance, and provide post-launch optimization support.',
                    'icon' => '<svg class="w-6 h-6 text-brand-blue" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M15.59 14.37a6 6 0 01-5.84 7.38v-4.8m5.84-2.58a14.98 14.98 0 006.16-12.12A14.98 14.98 0 009.63 8.41a14.98 14.98 0 00-6.16 12.12A14.98 14.98 0 0015.59 14.37z"/></svg>'
                ],
            ] as $index => $step)
            <div class="relative bg-brand-card/50 backdrop-blur-sm border border-white/5 rounded-3xl p-8 hover:border-brand-blue/30 hover:-translate-y-2 transition-all duration-300 z-10 group" 
                 data-aos="fade-up" data-aos-delay="{{ $index * 100 }}">
                
                <!-- Step number badge -->
                <div class="absolute top-6 right-8 font-grotesk text-4xl font-extrabold text-white/5 group-hover:text-brand-blue/10 transition-colors duration-300">
                    {{ $step['step'] }}
                </div>

                <!-- Icon circle wrapper -->
                <div class="w-12 h-12 rounded-2xl bg-brand-black border border-white/10 flex items-center justify-center mb-6 group-hover:border-brand-blue/30 group-hover:bg-brand-blue/5 transition-all duration-300">
                    {!! $step['icon'] !!}
                </div>

                <!-- Text content -->
                <h3 class="font-grotesk text-xl font-semibold text-white mb-3 tracking-wide group-hover:text-brand-blue transition-colors duration-300">
                    {{ $step['title'] }}
                </h3>
                <p class="font-inter text-brand-muted text-sm leading-relaxed">
                    {{ $step['desc'] }}
                </p>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- FOUNDER --}}
<section class="py-24 bg-brand-dark relative">
    <div class="max-w-4xl mx-auto px-6">
        <div class="bg-brand-card border border-white/5 rounded-3xl p-10 md:p-14 flex flex-col md:flex-row gap-10 items-center" data-aos="fade-up">
            <div class="w-32 h-32 md:w-48 md:h-48 rounded-2xl bg-brand-blue/10 border border-brand-blue/20 flex-shrink-0 overflow-hidden relative">
                <img src="{{ asset('images/founder.png') }}" alt="Zaid Shahid — Founder Codemir IT Experts" class="w-full h-full object-cover" width="192" height="192" loading="lazy">
            </div>
            <div>
                <span class="font-grotesk text-brand-blue text-sm uppercase tracking-wider">Founder</span>
                <h2 class="font-playfair text-3xl font-bold text-white mt-2 mb-1">Zaid Shahid</h2>
                <p class="font-inter text-brand-muted text-sm mb-5">Founder & Lead Developer, Codemir IT Experts · Faisalabad, Pakistan</p>
                <blockquote class="font-playfair text-xl text-white/80 italic border-l-4 border-brand-blue pl-5 mb-6">
                    "I don't just build websites. I build systems that work for your business 24/7."
                </blockquote>
                <div class="flex gap-4">
                    <a href="https://www.linkedin.com/in/-zaid-shahid/" target="_blank" rel="noopener" aria-label="Founder LinkedIn Profile"
                       class="bg-brand-blue hover:bg-brand-blue-hover text-white text-sm font-semibold px-5 py-2.5 rounded-full transition">
                        LinkedIn Profile
                    </a>
                    <a href="https://github.com/ZaidShahid15" target="_blank" rel="noopener" aria-label="Founder GitHub Profile"
                       class="border border-white/20 hover:border-white/60 text-white text-sm font-semibold px-5 py-2.5 rounded-full transition">
                        GitHub
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- TESTIMONIALS SLIDER (Smooth CSS Transform Carousel) --}}
<section class="py-24 bg-brand-black relative overflow-hidden" aria-label="Customer Reviews">
    <div class="max-w-4xl mx-auto px-6 relative z-10" x-data="{
        active: 0,
        total: 3,
        timer: null,
        touchStartX: 0,
        touchEndX: 0,
        go(index) {
            this.active = index;
            this.resetTimer();
        },
        next() {
            this.active = (this.active + 1) % this.total;
            this.resetTimer();
        },
        prev() {
            this.active = (this.active - 1 + this.total) % this.total;
            this.resetTimer();
        },
        resetTimer() {
            clearInterval(this.timer);
            this.timer = setInterval(() => { this.active = (this.active + 1) % this.total }, 6000);
        },
        handleTouchStart(e) { this.touchStartX = e.changedTouches[0].screenX },
        handleTouchEnd(e) {
            this.touchEndX = e.changedTouches[0].screenX;
            const diff = this.touchStartX - this.touchEndX;
            if (Math.abs(diff) > 50) { diff > 0 ? this.next() : this.prev() }
        },
        init() {
            this.timer = setInterval(() => { this.active = (this.active + 1) % this.total }, 6000);
        }
    }">
        <div class="text-center mb-16" data-aos="fade-up">
            <span class="font-grotesk text-brand-blue text-sm tracking-widest uppercase">Testimonials</span>
            <h2 class="font-playfair text-4xl md:text-5xl font-bold text-white mt-3">What Our Clients Say</h2>
        </div>

        <!-- Smooth Slide Track -->
        <div class="relative overflow-hidden rounded-3xl" data-aos="fade-up"
             @touchstart="handleTouchStart($event)"
             @touchend="handleTouchEnd($event)">
            <div class="flex transition-transform duration-700 ease-in-out"
                 :style="'transform: translateX(-' + (active * 100) + '%)'">
                @foreach([
                    [
                        'quote' => "Codemir IT Experts built our custom SaaS platform in Laravel. The speed, clean codebase, and communication were unmatched. Highly recommended!",
                        'author' => "Sarah Jenkins",
                        'role' => "Founder, FlowState (USA)"
                    ],
                    [
                        'quote' => "They delivered a custom eCommerce solution that doubled our site speed and increased conversion by 25%. Outstanding experience from start to finish.",
                        'author' => "Michael Chen",
                        'role' => "CEO, Horizon Ecom (UK)"
                    ],
                    [
                        'quote' => "Integrating GPT-4 APIs into our client workflow was a breeze with Zaid and his team. They are absolute Laravel & AI integration specialists.",
                        'author' => "David Miller",
                        'role' => "Founder, LexiAI (Australia)"
                    ]
                ] as $idx => $review)
                <div class="w-full flex-shrink-0 px-1">
                    <div class="bg-brand-card border border-white/5 rounded-3xl p-8 md:p-12 relative">
                        <!-- Quote mark -->
                        <span class="absolute top-6 left-8 text-8xl font-serif text-brand-blue/10 pointer-events-none select-none">&ldquo;</span>

                        <p class="font-playfair text-lg md:text-xl text-white/90 italic leading-relaxed mb-6 relative z-10">
                            "{{ $review['quote'] }}"
                        </p>
                        <div class="flex items-center gap-3">
                            <div class="w-10 h-10 rounded-full bg-brand-blue/10 border border-brand-blue/30 flex items-center justify-center font-grotesk text-brand-blue font-bold">
                                {{ substr($review['author'], 0, 1) }}
                            </div>
                            <div>
                                <h4 class="font-grotesk text-sm font-semibold text-white">{{ $review['author'] }}</h4>
                                <p class="font-inter text-xs text-brand-muted">{{ $review['role'] }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>

        <!-- Controls -->
        <div class="flex items-center justify-between mt-8" data-aos="fade-up">
            <!-- Indicator Dots -->
            <div class="flex gap-2">
                <template x-for="i in total" :key="i">
                    <button @click="go(i - 1)"
                            :class="active === i - 1 ? 'bg-brand-blue w-6' : 'bg-white/20 w-2'"
                            class="h-2 rounded-full transition-all duration-300 outline-none"
                            :aria-label="'Go to slide ' + i">
                    </button>
                </template>
            </div>

            <!-- Arrows -->
            <div class="flex gap-3">
                <button @click="prev()" aria-label="Previous Slide"
                        class="w-10 h-10 rounded-full bg-brand-card border border-white/10 flex items-center justify-center text-brand-muted hover:text-white hover:border-brand-blue transition">
                    &larr;
                </button>
                <button @click="next()" aria-label="Next Slide"
                        class="w-10 h-10 rounded-full bg-brand-card border border-white/10 flex items-center justify-center text-brand-muted hover:text-white hover:border-brand-blue transition">
                    &rarr;
                </button>
            </div>
        </div>
    </div>
</section>

{{-- CONTACT SECTION --}}
<section class="py-24 bg-gradient-to-b from-brand-dark to-brand-black border-t border-white/5" id="contact-section">
    <div class="max-w-6xl mx-auto px-6">
        <div class="text-center mb-16" data-aos="fade-up">
            <span class="font-grotesk text-brand-blue text-sm tracking-widest uppercase">Start Your Project</span>
            <h2 class="font-playfair text-4xl md:text-5xl font-bold text-white mt-3">Let's Build Something Great</h2>
            <p class="font-inter text-brand-muted mt-4 max-w-2xl mx-auto">Tell us about your project and goals. We'll get back to you within 24 hours with a custom plan.</p>
        </div>

        @if(session('success'))
        <div class="mb-8 bg-green-500/10 border border-green-500/30 text-green-400 rounded-xl px-6 py-4 text-center font-inter">
            {{ session('success') }}
        </div>
        @endif

        <div class="grid grid-cols-1 lg:grid-cols-5 gap-12 items-start">
            {{-- FORM --}}
            <div class="lg:col-span-3 bg-brand-card border border-white/5 rounded-2xl p-8 shadow-xl" data-aos="fade-right">
                <form action="{{ route('contact.send') }}" method="POST" class="space-y-5">
                    @csrf
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                        <div>
                            <label class="font-grotesk text-sm text-brand-muted block mb-2">Full Name *</label>
                            <input type="text" name="name" value="{{ old('name') }}" placeholder="John Smith" required
                                   class="w-full bg-brand-black border border-white/10 focus:border-brand-blue rounded-xl px-4 py-3 text-white font-inter text-sm outline-none transition @error('name') border-red-500 @enderror">
                            @error('name')<p class="text-red-400 text-xs mt-1">{{ $message }}</p>@enderror
                        </div>
                        <div>
                            <label class="font-grotesk text-sm text-brand-muted block mb-2">Email Address *</label>
                            <input type="email" name="email" value="{{ old('email') }}" placeholder="john@company.com" required
                                   class="w-full bg-brand-black border border-white/10 focus:border-brand-blue rounded-xl px-4 py-3 text-white font-inter text-sm outline-none transition @error('email') border-red-500 @enderror">
                            @error('email')<p class="text-red-400 text-xs mt-1">{{ $message }}</p>@enderror
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                        <div>
                            <label class="font-grotesk text-sm text-brand-muted block mb-2">Phone (Optional)</label>
                            <input type="text" name="phone" value="{{ old('phone') }}" placeholder="+1 555 000 0000"
                                   class="w-full bg-brand-black border border-white/10 focus:border-brand-blue rounded-xl px-4 py-3 text-white font-inter text-sm outline-none transition">
                        </div>
                        <div>
                            <label class="font-grotesk text-sm text-brand-muted block mb-2">Service Needed *</label>
                            <select name="service" required class="w-full bg-brand-black border border-white/10 focus:border-brand-blue rounded-xl px-4 py-3 text-white font-inter text-sm outline-none transition @error('service') border-red-500 @enderror">
                                <option value="">Select a service</option>
                                @foreach(['Website', 'Web App', 'AI Tool', 'eCommerce', 'Other'] as $opt)
                                <option value="{{ $opt }}" {{ old('service') == $opt ? 'selected' : '' }}>{{ $opt }}</option>
                                @endforeach
                            </select>
                            @error('service')<p class="text-red-400 text-xs mt-1">{{ $message }}</p>@enderror
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                        <div class="md:col-span-2">
                            <label class="font-grotesk text-sm text-brand-muted block mb-2">Budget Range *</label>
                            <select name="budget" required class="w-full bg-brand-black border border-white/10 focus:border-brand-blue rounded-xl px-4 py-3 text-white font-inter text-sm outline-none transition">
                                <option value="">Select budget</option>
                                @foreach(['Under $500', '$500–$1000', '$1000–$3000', '$3000+'] as $b)
                                <option value="{{ $b }}" {{ old('budget') == $b ? 'selected' : '' }}>{{ $b }}</option>
                                @endforeach
                            </select>
                            @error('budget')<p class="text-red-400 text-xs mt-1">{{ $message }}</p>@enderror
                        </div>
                    </div>

                    <div>
                        <label class="font-grotesk text-sm text-brand-muted block mb-2">Project Description *</label>
                        <textarea name="description" rows="4" placeholder="Tell us about your project, goals, and timeline..." required
                                  class="w-full bg-brand-black border border-white/10 focus:border-brand-blue rounded-xl px-4 py-3 text-white font-inter text-sm outline-none transition resize-none @error('description') border-red-500 @enderror">{{ old('description') }}</textarea>
                        @error('description')<p class="text-red-400 text-xs mt-1">{{ $message }}</p>@enderror
                    </div>

                    <button type="submit" class="w-full bg-brand-blue hover:bg-brand-blue-hover text-white font-semibold py-4 rounded-xl transition font-inter shadow-lg shadow-brand-blue/20">
                        Send Message →
                    </button>
                </form>
            </div>

            {{-- CONTACT INFO --}}
            <div class="lg:col-span-2 space-y-6" data-aos="fade-left">
                <div class="bg-brand-card border border-white/5 rounded-2xl p-8 space-y-6 shadow-xl">
                    <h3 class="font-playfair text-2xl font-bold text-white">Contact Details</h3>
                    <div class="space-y-5 font-inter text-sm">
                        <div class="flex items-start gap-4">
                            <span class="text-brand-blue text-lg mt-0.5">✉</span>
                            <div>
                                <p class="text-brand-muted text-xs mb-0.5">Email</p>
                                <a href="mailto:codemiritexpert@gmail.com" class="text-white hover:text-brand-blue transition font-semibold font-inter">codemiritexpert@gmail.com</a>
                            </div>
                        </div>
                        <div class="flex items-start gap-4">
                            <span class="text-brand-blue text-lg mt-0.5">📞</span>
                            <div>
                                <p class="text-brand-muted text-xs mb-0.5">Phone / WhatsApp</p>
                                <a href="tel:+923268634963" class="text-white hover:text-brand-blue transition font-semibold font-inter">+92 326 8634963</a>
                            </div>
                        </div>
                        <div class="flex items-start gap-4">
                            <span class="text-brand-blue text-lg mt-0.5">📍</span>
                            <div>
                                <p class="text-brand-muted text-xs mb-0.5">Location</p>
                                <p class="text-white font-semibold font-inter">Faisalabad, Punjab, Pakistan</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-4">
                            <span class="text-brand-blue text-lg mt-0.5">🕐</span>
                            <div>
                                <p class="text-brand-muted text-xs mb-0.5">Working Hours</p>
                                <p class="text-white font-semibold font-inter">Mon–Sat · 9AM–10PM PKT</p>
                            </div>
                        </div>
                    </div>
                    <div class="pt-6 border-t border-white/5">
                        <p class="font-grotesk text-xs text-brand-muted uppercase tracking-wider mb-4">Follow Us</p>
                        <div class="flex gap-3 flex-wrap">
                            <a href="https://www.linkedin.com/company/codemir-it-experts/" target="_blank" aria-label="LinkedIn" class="w-10 h-10 bg-brand-black border border-white/10 rounded-xl flex items-center justify-center text-brand-muted hover:text-brand-blue hover:border-brand-blue transition">
                                <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24"><path d="M19 3a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h14m-.5 15.5v-5.3a3.26 3.26 0 0 0-3.26-3.26c-.85 0-1.84.52-2.32 1.3v-1.11h-2.79v8.37h2.79v-4.93c0-.77.62-1.4 1.39-1.4a1.4 1.4 0 0 1 1.4 1.4v4.93h2.79M6.88 8.56a1.68 1.68 0 0 0 1.68-1.68c0-.93-.75-1.69-1.68-1.69a1.69 1.69 0 0 0-1.69 1.69c0 .93.76 1.68 1.69 1.68m1.39 9.94v-8.37H5.5v8.37h2.77z"/></svg>
                            </a>
                            <a href="https://www.instagram.com/codemiritexpert/" target="_blank" aria-label="Instagram" class="w-10 h-10 bg-brand-black border border-white/10 rounded-xl flex items-center justify-center text-brand-muted hover:text-brand-blue hover:border-brand-blue transition">
                                <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
                            </a>
                            <a href="https://www.facebook.com/profile.php?id=61564927201888" target="_blank" aria-label="Facebook" class="w-10 h-10 bg-brand-black border border-white/10 rounded-xl flex items-center justify-center text-brand-muted hover:text-brand-blue hover:border-brand-blue transition">
                                <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24"><path d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z"/></svg>
                            </a>
                            <a href="https://github.com/ZaidShahid15" target="_blank" aria-label="GitHub" class="w-10 h-10 bg-brand-black border border-white/10 rounded-xl flex items-center justify-center text-brand-muted hover:text-brand-blue hover:border-brand-blue transition">
                                <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24"><path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/></svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- FEATURED INSIGHTS --}}
<section class="py-24 bg-brand-black border-t border-white/5 relative overflow-hidden">
    <div class="max-w-6xl mx-auto px-6">
        
        <div class="text-center mb-16" data-aos="fade-up">
            <span class="font-grotesk text-brand-blue text-sm tracking-widest uppercase">Company Insights</span>
            <h2 class="font-playfair text-4xl md:text-5xl font-bold text-white mt-3">Latest From Our Blog</h2>
            <p class="font-inter text-brand-muted mt-4 max-w-xl mx-auto">Read our latest developer updates, custom systems architectural guides, and AI integration strategies.</p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach(array_slice($posts, 0, 3) as $slug => $post)
            <div data-aos="fade-up" data-aos-delay="{{ $loop->index * 80 }}">
                <div class="bg-brand-card border border-white/5 rounded-2xl overflow-hidden hover:border-brand-blue/30 transition-all duration-300 hover:-translate-y-1 group h-full flex flex-col justify-between">
                    
                    {{-- Header Gradient --}}
                    <div class="relative h-44 bg-gradient-to-br from-brand-blue/20 to-purple-900/40 border-b border-white/5 flex items-center justify-center p-6 text-center select-none overflow-hidden">
                        <div class="absolute -top-12 -left-12 w-24 h-24 bg-brand-blue/20 rounded-full blur-xl pointer-events-none"></div>
                        <div class="z-10">
                            <span class="font-grotesk text-[10px] uppercase tracking-widest text-brand-blue/80 bg-brand-blue/10 border border-brand-blue/20 px-3 py-1 rounded-full mb-3 inline-block">
                                {{ $post['category'] }}
                            </span>
                            <h4 class="font-playfair text-base font-bold text-white line-clamp-2">{{ $post['title'] }}</h4>
                        </div>
                    </div>

                    {{-- Body --}}
                    <div class="p-6 flex-1 flex flex-col justify-between">
                        <div>
                            <div class="flex items-center gap-3 text-xs text-brand-muted mb-3 font-grotesk font-medium">
                                <span>{{ $post['date'] }}</span>
                                <span>·</span>
                                <span>{{ $post['read_time'] }}</span>
                            </div>
                            <p class="font-inter text-brand-muted text-sm leading-relaxed mb-6">
                                {{ $post['summary'] }}
                            </p>
                        </div>

                        <a href="{{ route('blog.detail', $slug) }}" class="inline-flex items-center gap-2 text-sm font-semibold text-brand-blue group-hover:text-brand-blue-hover transition">
                            Read Article
                            <span class="transform translate-x-0 group-hover:translate-x-1 transition-transform">&rarr;</span>
                        </a>
                    </div>

                </div>
            </div>
            @endforeach
        </div>

        <div class="text-center mt-20 md:mt-24">
            <a href="{{ route('blog') }}" class="inline-flex items-center gap-2 border border-white/10 hover:border-brand-blue hover:text-white text-brand-muted font-grotesk text-sm font-semibold px-8 py-3.5 rounded-full transition duration-300">
                View All Articles &rarr;
            </a>
        </div>

    </div>
</section>

{{-- FAQs --}}
@include('components.faq')

@endsection
