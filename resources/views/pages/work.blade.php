@extends('layouts.app')
@section('title', 'Our Work | Codemir IT Experts')

@section('content')
@include('components.page-hero', [
    'eyebrow'     => 'Portfolio',
    'title'       => 'Featured<br><span class="text-brand-blue">Projects</span>',
    'description' => 'Real solutions delivered for real businesses — from SaaS platforms and e-commerce to AI automation tools.',
    'cta1Label'   => 'Start Your Project',
    'cta1Route'   => 'contact',
    'cta2Label'   => 'Our Services',
    'cta2Route'   => 'services',
    'badges'      => ['20+ Projects Completed', 'Laravel & PHP', 'AI-Powered Apps', 'Clients Worldwide'],
])

<section class="py-24 bg-brand-black min-h-screen" x-data="{ activeTab: 'All' }">
    <div class="max-w-7xl mx-auto px-6">

        <div class="text-center mb-12" data-aos="fade-up">
            <span class="font-grotesk text-brand-blue text-sm tracking-widest uppercase">Portfolio</span>
            <h2 class="font-playfair text-4xl md:text-5xl font-bold text-white mt-3">Our Work</h2>
            <p class="font-inter text-brand-muted mt-4 max-w-xl mx-auto">Filter by category to explore specific types of projects we've delivered.</p>
        </div>

        {{-- Filter Tabs --}}
        <div class="flex flex-wrap justify-center gap-3 mb-14" data-aos="fade-up" data-aos-delay="100">
            @foreach($categories as $category)
            <button
                @click="activeTab = '{{ $category }}'"
                :class="activeTab === '{{ $category }}'
                    ? 'bg-brand-blue text-white border-brand-blue shadow-lg shadow-brand-blue/20'
                    : 'bg-brand-card text-brand-muted border-white/10 hover:text-white hover:border-white/30'"
                class="px-6 py-2.5 font-grotesk text-sm font-semibold rounded-full border transition-all duration-200 outline-none">
                {{ $category }}
            </button>
            @endforeach
        </div>

        {{-- Projects Grid --}}
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($projects as $index => $project)
            <a href="{{ route('work.detail', $project['slug']) }}"
               x-show="activeTab === 'All' || activeTab === '{{ $project['category'] }}'"
               x-transition:enter="transition ease-out duration-300"
               x-transition:enter-start="opacity-0 scale-95"
               x-transition:enter-end="opacity-100 scale-100"
               x-transition:leave="transition ease-in duration-150"
               x-transition:leave-start="opacity-100 scale-100"
               x-transition:leave-end="opacity-0 scale-95"
               class="group block relative overflow-hidden rounded-2xl bg-brand-card border border-white/5 hover:border-brand-blue/40 transition hover:no-underline text-white"
               data-aos="fade-up" data-aos-delay="{{ $index * 50 }}">
                <div class="h-56 bg-gradient-to-br from-brand-blue/20 to-brand-black flex items-center justify-center relative overflow-hidden">
                    <img src="{{ asset('images/projects/' . $project['image']) }}" alt="{{ $project['title'] }}" class="absolute inset-0 w-full h-full object-cover group-hover:scale-105 transition duration-500">
                    <div class="absolute inset-0 bg-brand-dark/50 group-hover:bg-brand-dark/10 transition duration-500"></div>
                    {{-- Category Badge on image --}}
                    <span class="absolute top-4 left-4 bg-brand-blue text-white font-grotesk text-xs font-semibold px-3 py-1 rounded-full z-10">{{ $project['category'] }}</span>
                </div>
                <div class="p-8">
                    <span class="font-grotesk text-xs text-brand-muted uppercase tracking-wider">{{ $project['industry'] }}</span>
                    <h3 class="font-playfair text-xl font-semibold text-white mt-2 mb-3">{{ $project['title'] }}</h3>
                    <p class="font-inter text-brand-muted text-sm leading-relaxed mb-6">{{ $project['desc'] }}</p>
                    <div class="flex flex-wrap gap-2">
                        @foreach($project['tags'] as $tag)
                        <span class="bg-brand-black border border-white/10 text-brand-muted font-grotesk text-xs px-3 py-1 rounded-full">{{ $tag }}</span>
                        @endforeach
                    </div>
                </div>
            </a>
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
            <a href="{{ route('services') }}" class="border border-white/20 hover:border-white/60 text-white font-semibold px-8 py-4 rounded-full transition text-base">
                Our Services
            </a>
        </div>
    </div>
</section>

@include('components.faq')
@endsection
