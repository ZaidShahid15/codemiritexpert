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

        {{-- CTA Banner --}}
        <div class="mt-20 bg-gradient-to-r from-brand-blue/10 to-brand-dark border border-brand-blue/20 rounded-3xl p-10 md:p-14 text-center" data-aos="fade-up">
            <span class="font-grotesk text-brand-blue text-sm uppercase tracking-widest">Not Sure What You Need?</span>
            <h3 class="font-playfair text-3xl md:text-4xl font-bold text-white mt-3 mb-4">Let's Talk About Your Project</h3>
            <p class="font-inter text-brand-muted max-w-xl mx-auto mb-8">Book a free 30-minute discovery call. We'll listen, advise, and give you a clear plan — no pressure, no commitment.</p>
            <a href="{{ route('contact') }}" class="inline-flex items-center gap-2 bg-brand-blue hover:bg-brand-blue-hover text-white font-semibold px-8 py-4 rounded-full transition shadow-lg shadow-brand-blue/20">
                Get a Free Consultation →
            </a>
        </div>

    </div>
</section>

@include('components.faq')
@endsection
