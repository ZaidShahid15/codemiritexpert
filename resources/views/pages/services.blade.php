@extends('layouts.app')
@section('title', 'Services | Codemir IT Experts')

@section('content')
@include('components.page-hero', [
    'eyebrow'     => 'What We Build',
    'title'       => 'Our Services &<br><span class="text-brand-blue">Solutions</span>',
    'description' => 'From custom Laravel web systems to AI-powered automations — we deliver end-to-end digital solutions that grow your business.',
    'cta1Label'   => 'Start Your Project',
    'cta1Route'   => 'contact',
    'cta2Label'   => 'See Our Work',
    'cta2Route'   => 'work',
    'badges'      => ['Laravel Development', 'AI Integration', 'API & SaaS', 'E-Commerce', 'Mobile Apps'],
])

{{-- SERVICES SECTION WITH TABS --}}
<section class="py-24 bg-brand-black min-h-screen" x-data="{ activeTab: 'All' }">
    <div class="max-w-7xl mx-auto px-6">

        <div class="text-center mb-12" data-aos="fade-up">
            <span class="font-grotesk text-brand-blue text-sm tracking-widest uppercase">All Services</span>
            <h2 class="font-playfair text-4xl md:text-5xl font-bold text-white mt-3">What We Build For You</h2>
            <p class="font-inter text-brand-muted mt-4 max-w-2xl mx-auto">Browse our complete range of services. Each is crafted to solve a specific business challenge with modern, scalable technology.</p>
        </div>

        {{-- Category Tabs --}}
        <div class="flex flex-wrap justify-center gap-3 mb-14" data-aos="fade-up">
            @foreach(['All', 'Websites', 'Web Apps', 'AI Tools', 'eCommerce', 'API & Systems'] as $tab)
            <button
                @click="activeTab = '{{ $tab }}'"
                :class="activeTab === '{{ $tab }}'
                    ? 'bg-brand-blue text-white border-brand-blue shadow-lg shadow-brand-blue/20'
                    : 'bg-brand-card text-brand-muted border-white/10 hover:text-white hover:border-white/30'"
                class="px-6 py-2.5 font-grotesk text-sm font-semibold rounded-full border transition-all duration-200 outline-none">
                {{ $tab }}
            </button>
            @endforeach
        </div>

        {{-- Services Grid --}}
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

            {{-- Custom Websites --}}
            <div x-show="activeTab === 'All' || activeTab === 'Websites'"
                 x-transition:enter="transition ease-out duration-300"
                 x-transition:enter-start="opacity-0 scale-95"
                 x-transition:enter-end="opacity-100 scale-100"
                 x-transition:leave="transition ease-in duration-150"
                 x-transition:leave-start="opacity-100 scale-100"
                 x-transition:leave-end="opacity-0 scale-95"
                 data-aos="fade-up" data-aos-delay="0">
                <a href="{{ route('services.detail', 'custom-websites') }}" class="bg-brand-card border border-white/5 rounded-2xl p-8 hover:border-brand-blue/40 transition group block hover:-translate-y-1 duration-300 h-full flex flex-col">
                    <div class="w-14 h-14 bg-brand-blue/10 rounded-xl flex items-center justify-center mb-6 group-hover:bg-brand-blue/20 transition">
                        <svg class="w-7 h-7 text-brand-blue" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <circle cx="12" cy="12" r="10"></circle>
                            <path d="M2 12h20M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path>
                        </svg>
                    </div>
                    <span class="font-grotesk text-xs text-brand-blue uppercase tracking-wider mb-3">Websites</span>
                    <h3 class="font-playfair text-2xl font-semibold text-white mb-4">Custom Website Development</h3>
                    <p class="font-inter text-brand-muted text-sm leading-relaxed mb-6 flex-1">We design and develop fast, SEO-ready, mobile-first websites using PHP Laravel and Tailwind CSS. Every site is hand-coded — no page builders, no templates.</p>
                    <div class="flex flex-wrap gap-2 mb-6">
                        @foreach(['PHP', 'Laravel', 'Tailwind CSS', 'MySQL'] as $tech)
                        <span class="bg-brand-black border border-white/10 text-brand-muted font-grotesk text-xs px-3 py-1 rounded-full">{{ $tech }}</span>
                        @endforeach
                    </div>
                    <div class="text-brand-blue text-sm font-semibold flex items-center gap-1 group-hover:text-white transition pt-4 border-t border-white/5">
                        View Details →
                    </div>
                </a>
            </div>

            {{-- Web Applications --}}
            <div x-show="activeTab === 'All' || activeTab === 'Web Apps'"
                 x-transition:enter="transition ease-out duration-300"
                 x-transition:enter-start="opacity-0 scale-95"
                 x-transition:enter-end="opacity-100 scale-100"
                 x-transition:leave="transition ease-in duration-150"
                 x-transition:leave-start="opacity-100 scale-100"
                 x-transition:leave-end="opacity-0 scale-95"
                 data-aos="fade-up" data-aos-delay="50">
                <a href="{{ route('services.detail', 'web-applications') }}" class="bg-brand-card border border-white/5 rounded-2xl p-8 hover:border-brand-blue/40 transition group block hover:-translate-y-1 duration-300 h-full flex flex-col">
                    <div class="w-14 h-14 bg-brand-blue/10 rounded-xl flex items-center justify-center mb-6 group-hover:bg-brand-blue/20 transition">
                        <svg class="w-7 h-7 text-brand-blue" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9.594 3.94c.09-.542.56-.94 1.11-.94h2.593c.55 0 1.02.398 1.11.94l.213 1.281c.063.374.313.686.645.87.074.04.147.083.22.127.324.196.72.257 1.075.124l1.217-.456a1.125 1.125 0 0 1 1.37.49l1.296 2.247a1.125 1.125 0 0 1-.26 1.43l-1.003.828c-.293.241-.438.613-.43.992a7.723 7.723 0 0 1 0 .255c-.008.378.137.75.43.991l1.004.827c.424.35.534.954.26 1.43l-1.298 2.247a1.125 1.125 0 0 1-1.369.491l-1.217-.456c-.355-.133-.75-.072-1.076.124a6.57 6.57 0 0 1-.22.128c-.331.183-.581.495-.644.869l-.213 1.28c-.09.543-.56.941-1.11.941h-2.594c-.55 0-1.02-.398-1.11-.94l-.213-1.281c-.062-.374-.312-.686-.644-.87a6.52 6.52 0 0 1-.22-.127c-.325-.196-.72-.257-1.076-.124l-1.217.456a1.125 1.125 0 0 1-1.369-.49l-1.297-2.247a1.125 1.125 0 0 1 .26-1.43l1.004-.827c.292-.24.437-.613.43-.992a6.932 6.932 0 0 1 0-.255c.007-.378-.138-.75-.43-.991l-1.004-.827a1.125 1.125 0 0 1-.26-1.43l1.297-2.247a1.125 1.125 0 0 1 1.37-.491l1.216.456c.356.133.751.072 1.076-.124.072-.044.146-.087.22-.128.332-.183.582-.495.644-.869l.214-1.28z"></path>
                            <circle cx="12" cy="12" r="3"></circle>
                        </svg>
                    </div>
                    <span class="font-grotesk text-xs text-brand-blue uppercase tracking-wider mb-3">Web Apps</span>
                    <h3 class="font-playfair text-2xl font-semibold text-white mb-4">Web Application Development</h3>
                    <p class="font-inter text-brand-muted text-sm leading-relaxed mb-6 flex-1">From CRMs to booking systems to dashboards — we build powerful, scalable web applications that automate your operations and delight your users.</p>
                    <div class="flex flex-wrap gap-2 mb-6">
                        @foreach(['Laravel', 'Livewire', 'Alpine.js', 'MySQL'] as $tech)
                        <span class="bg-brand-black border border-white/10 text-brand-muted font-grotesk text-xs px-3 py-1 rounded-full">{{ $tech }}</span>
                        @endforeach
                    </div>
                    <div class="text-brand-blue text-sm font-semibold flex items-center gap-1 group-hover:text-white transition pt-4 border-t border-white/5">
                        View Details →
                    </div>
                </a>
            </div>

            {{-- AI Tools --}}
            <div x-show="activeTab === 'All' || activeTab === 'AI Tools'"
                 x-transition:enter="transition ease-out duration-300"
                 x-transition:enter-start="opacity-0 scale-95"
                 x-transition:enter-end="opacity-100 scale-100"
                 x-transition:leave="transition ease-in duration-150"
                 x-transition:leave-start="opacity-100 scale-100"
                 x-transition:leave-end="opacity-0 scale-95"
                 data-aos="fade-up" data-aos-delay="100">
                <a href="{{ route('services.detail', 'ai-tools') }}" class="bg-brand-card border border-white/5 rounded-2xl p-8 hover:border-brand-blue/40 transition group block hover:-translate-y-1 duration-300 h-full flex flex-col">
                    <div class="w-14 h-14 bg-brand-blue/10 rounded-xl flex items-center justify-center mb-6 group-hover:bg-brand-blue/20 transition">
                        <svg class="w-7 h-7 text-brand-blue" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <rect x="4" y="4" width="16" height="16" rx="2"></rect>
                            <path d="M9 9h6v6H9zM9 1v3M15 1v3M9 20v3M15 20v3M20 9h3M20 15h3M1 9h3M1 15h3"></path>
                        </svg>
                    </div>
                    <span class="font-grotesk text-xs text-brand-blue uppercase tracking-wider mb-3">AI Tools</span>
                    <h3 class="font-playfair text-2xl font-semibold text-white mb-4">AI Tool Integration</h3>
                    <p class="font-inter text-brand-muted text-sm leading-relaxed mb-6 flex-1">We integrate GPT-powered chatbots, AI content tools, and automation systems directly into your existing web platform or as standalone products.</p>
                    <div class="flex flex-wrap gap-2 mb-6">
                        @foreach(['OpenAI API', 'Laravel', 'Python', 'REST API'] as $tech)
                        <span class="bg-brand-black border border-white/10 text-brand-muted font-grotesk text-xs px-3 py-1 rounded-full">{{ $tech }}</span>
                        @endforeach
                    </div>
                    <div class="text-brand-blue text-sm font-semibold flex items-center gap-1 group-hover:text-white transition pt-4 border-t border-white/5">
                        View Details →
                    </div>
                </a>
            </div>

            {{-- eCommerce --}}
            <div x-show="activeTab === 'All' || activeTab === 'eCommerce'"
                 x-transition:enter="transition ease-out duration-300"
                 x-transition:enter-start="opacity-0 scale-95"
                 x-transition:enter-end="opacity-100 scale-100"
                 x-transition:leave="transition ease-in duration-150"
                 x-transition:leave-start="opacity-100 scale-100"
                 x-transition:leave-end="opacity-0 scale-95"
                 data-aos="fade-up" data-aos-delay="150">
                <a href="{{ route('services.detail', 'ecommerce') }}" class="bg-brand-card border border-white/5 rounded-2xl p-8 hover:border-brand-blue/40 transition group block hover:-translate-y-1 duration-300 h-full flex flex-col">
                    <div class="w-14 h-14 bg-brand-blue/10 rounded-xl flex items-center justify-center mb-6 group-hover:bg-brand-blue/20 transition">
                        <svg class="w-7 h-7 text-brand-blue" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <circle cx="9" cy="21" r="1"></circle>
                            <circle cx="20" cy="21" r="1"></circle>
                            <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path>
                        </svg>
                    </div>
                    <span class="font-grotesk text-xs text-brand-blue uppercase tracking-wider mb-3">eCommerce</span>
                    <h3 class="font-playfair text-2xl font-semibold text-white mb-4">eCommerce Development</h3>
                    <p class="font-inter text-brand-muted text-sm leading-relaxed mb-6 flex-1">Full-featured online stores with shopping carts, payment gateways (Stripe, PayPal), inventory management, and order tracking — all built in Laravel.</p>
                    <div class="flex flex-wrap gap-2 mb-6">
                        @foreach(['Laravel', 'Stripe', 'PayPal API', 'MySQL'] as $tech)
                        <span class="bg-brand-black border border-white/10 text-brand-muted font-grotesk text-xs px-3 py-1 rounded-full">{{ $tech }}</span>
                        @endforeach
                    </div>
                    <div class="text-brand-blue text-sm font-semibold flex items-center gap-1 group-hover:text-white transition pt-4 border-t border-white/5">
                        View Details →
                    </div>
                </a>
            </div>

            {{-- API Development --}}
            <div x-show="activeTab === 'All' || activeTab === 'API & Systems'"
                 x-transition:enter="transition ease-out duration-300"
                 x-transition:enter-start="opacity-0 scale-95"
                 x-transition:enter-end="opacity-100 scale-100"
                 x-transition:leave="transition ease-in duration-150"
                 x-transition:leave-start="opacity-100 scale-100"
                 x-transition:leave-end="opacity-0 scale-95"
                 data-aos="fade-up" data-aos-delay="200">
                <a href="{{ route('services.detail', 'api-development') }}" class="bg-brand-card border border-white/5 rounded-2xl p-8 hover:border-brand-blue/40 transition group block hover:-translate-y-1 duration-300 h-full flex flex-col">
                    <div class="w-14 h-14 bg-brand-blue/10 rounded-xl flex items-center justify-center mb-6 group-hover:bg-brand-blue/20 transition">
                        <svg class="w-7 h-7 text-brand-blue" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M13.19 8.688a4.5 4.5 0 0 1 1.242 7.244l-4.5 4.5a4.5 4.5 0 0 1-6.364-6.364l1.757-1.757m13.35-.622 1.757-1.757a4.5 4.5 0 0 0-6.364-6.364l-4.5 4.5a4.5 4.5 0 0 0 1.242 7.244"></path>
                        </svg>
                    </div>
                    <span class="font-grotesk text-xs text-brand-blue uppercase tracking-wider mb-3">API & Systems</span>
                    <h3 class="font-playfair text-2xl font-semibold text-white mb-4">API Development & Integration</h3>
                    <p class="font-inter text-brand-muted text-sm leading-relaxed mb-6 flex-1">We build clean, well-documented REST APIs and integrate third-party services — payment gateways, CRMs, shipping providers, and more.</p>
                    <div class="flex flex-wrap gap-2 mb-6">
                        @foreach(['Laravel Sanctum', 'REST API', 'OAuth', 'JSON'] as $tech)
                        <span class="bg-brand-black border border-white/10 text-brand-muted font-grotesk text-xs px-3 py-1 rounded-full">{{ $tech }}</span>
                        @endforeach
                    </div>
                    <div class="text-brand-blue text-sm font-semibold flex items-center gap-1 group-hover:text-white transition pt-4 border-t border-white/5">
                        View Details →
                    </div>
                </a>
            </div>

            {{-- Business Systems --}}
            <div x-show="activeTab === 'All' || activeTab === 'API & Systems'"
                 x-transition:enter="transition ease-out duration-300"
                 x-transition:enter-start="opacity-0 scale-95"
                 x-transition:enter-end="opacity-100 scale-100"
                 x-transition:leave="transition ease-in duration-150"
                 x-transition:leave-start="opacity-100 scale-100"
                 x-transition:leave-end="opacity-0 scale-95"
                 data-aos="fade-up" data-aos-delay="250">
                <a href="{{ route('services.detail', 'business-systems') }}" class="bg-brand-card border border-white/5 rounded-2xl p-8 hover:border-brand-blue/40 transition group block hover:-translate-y-1 duration-300 h-full flex flex-col">
                    <div class="w-14 h-14 bg-brand-blue/10 rounded-xl flex items-center justify-center mb-6 group-hover:bg-brand-blue/20 transition">
                        <svg class="w-7 h-7 text-brand-blue" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3 13.125C3 12.504 3.504 12 4.125 12h2.25c.621 0 1.125.504 1.125 1.125v6.75C7.5 20.496 6.996 21 6.375 21h-2.25A1.125 1.125 0 0 1 3 19.875v-6.75zM9.75 8.625c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125v11.25c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 0 1-1.125-1.125V8.625zM16.5 4.125c0-.621.504-1.125 1.125-1.125h2.25C20.496 3 21 3.504 21 4.125v15.75c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 0 1-1.125-1.125V4.125z"></path>
                        </svg>
                    </div>
                    <span class="font-grotesk text-xs text-brand-blue uppercase tracking-wider mb-3">API & Systems</span>
                    <h3 class="font-playfair text-2xl font-semibold text-white mb-4">Business Management Systems</h3>
                    <p class="font-inter text-brand-muted text-sm leading-relaxed mb-6 flex-1">Custom ERP systems, inventory trackers, HR management tools, and operations dashboards — built exactly for your workflow.</p>
                    <div class="flex flex-wrap gap-2 mb-6">
                        @foreach(['Laravel', 'MySQL', 'Livewire', 'Charts.js'] as $tech)
                        <span class="bg-brand-black border border-white/10 text-brand-muted font-grotesk text-xs px-3 py-1 rounded-full">{{ $tech }}</span>
                        @endforeach
                    </div>
                    <div class="text-brand-blue text-sm font-semibold flex items-center gap-1 group-hover:text-white transition pt-4 border-t border-white/5">
                        View Details →
                    </div>
                </a>
            </div>

        </div>{{-- end grid --}}

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

{{-- DELIVERY PROCESS --}}
<section class="py-24 bg-brand-black relative overflow-hidden">
    <div class="absolute top-1/4 left-1/10 w-96 h-96 bg-brand-blue/5 rounded-full filter blur-[100px] pointer-events-none"></div>
    <div class="absolute bottom-1/4 right-1/10 w-96 h-96 bg-purple-500/5 rounded-full filter blur-[100px] pointer-events-none"></div>

    <div class="max-w-6xl mx-auto px-6 relative z-10">
        <div class="text-center mb-20" data-aos="fade-up">
            <span class="font-grotesk text-brand-blue text-xs tracking-[0.2em] uppercase bg-brand-blue/10 px-4 py-2 rounded-full border border-brand-blue/20">Our Approach</span>
            <h2 class="font-playfair text-4xl md:text-5xl font-bold text-white mt-6">How We Work</h2>
            <p class="font-inter text-brand-muted text-base max-w-xl mx-auto mt-4">We follow a proven, transparent process to take your vision from idea to launch.</p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8 relative">
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
                <div class="absolute top-6 right-8 font-grotesk text-4xl font-extrabold text-white/5 group-hover:text-brand-blue/10 transition-colors duration-300">
                    {{ $step['step'] }}
                </div>
                <div class="w-12 h-12 rounded-2xl bg-brand-black border border-white/10 flex items-center justify-center mb-6 group-hover:border-brand-blue/30 group-hover:bg-brand-blue/5 transition-all duration-300">
                    {!! $step['icon'] !!}
                </div>
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

{{-- BOTTOM CTA BANNER --}}
<section class="py-24 bg-gradient-to-b from-brand-black to-brand-dark relative overflow-hidden">
    <div class="max-w-5xl mx-auto px-6 relative z-10 text-center" data-aos="fade-up">
        <div class="inline-flex items-center gap-2 bg-brand-blue/10 border border-brand-blue/20 rounded-full px-4 py-1.5 mb-6">
            <span class="w-2 h-2 rounded-full bg-brand-blue animate-pulse"></span>
            <span class="font-grotesk text-xs text-brand-blue uppercase tracking-wider font-semibold">Ready to scale?</span>
        </div>
        <h2 class="font-playfair text-4xl md:text-5xl font-bold text-white mb-6 leading-tight">
            Let's Build Something <span class="text-brand-blue">Extraordinary</span> Together
        </h2>
        <p class="font-inter text-brand-muted text-base max-w-xl mx-auto mb-10 leading-relaxed">
            Whether you need a custom Laravel system, AI integration, or a high-converting landing page, our team is ready to bring your vision to life.
        </p>
        <div class="flex flex-col sm:flex-row justify-center items-center gap-4">
            <a href="{{ route('contact') }}" class="bg-brand-blue hover:bg-brand-blue-hover text-white font-semibold px-8 py-4 rounded-full transition text-base shadow-lg shadow-brand-blue/20">
                Get a Free Quote →
            </a>
            <a href="{{ route('work') }}" class="border border-white/20 hover:border-white/60 text-white font-semibold px-8 py-4 rounded-full transition text-base">
                View Our Work
            </a>
        </div>
    </div>
</section>

@include('components.faq')
@endsection
