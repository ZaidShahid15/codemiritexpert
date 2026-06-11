@extends('layouts.app')

@section('title', 'Codemir IT Experts | Custom Web Development & AI Tools')
@section('meta_description', 'We build custom Laravel web systems, web apps, and AI-powered tools for founders and SMBs. 20+ projects delivered. Based in Pakistan, serving globally.')

@section('content')

{{-- HERO --}}
<section class="relative min-h-[calc(100vh-76px)] flex items-center justify-center overflow-hidden bg-brand-black py-16">
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
            @foreach(['20+ Projects Delivered', 'Laravel Expert', 'AI Tools Integrated', 'Clients in US · UK · AU'] as $badge)
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

{{-- SERVICES --}}
<section class="py-24 bg-brand-black relative">
    <div class="max-w-7xl mx-auto px-6">
        <div class="text-center mb-16" data-aos="fade-up">
            <span class="font-grotesk text-brand-blue text-sm tracking-widest uppercase">What We Build</span>
            <h2 class="font-playfair text-4xl md:text-5xl font-bold text-white mt-3">For Your Business</h2>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach($services as $index => $service)
            <a href="{{ route('services.detail', $service['slug']) }}" class="bg-brand-card border border-white/5 rounded-2xl p-8 hover:border-brand-blue/40 transition group block hover:-translate-y-1 duration-300" data-aos="fade-up" data-aos-delay="{{ $index * 80 }}">
                <div class="w-12 h-12 bg-brand-blue/10 rounded-xl flex items-center justify-center mb-5 group-hover:bg-brand-blue/20 transition">
                    @if($service['icon'] === 'globe')
                        <svg class="w-6 h-6 text-brand-blue" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <circle cx="12" cy="12" r="10"></circle>
                            <path d="M2 12h20M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path>
                        </svg>
                    @elseif($service['icon'] === 'cog')
                        <svg class="w-6 h-6 text-brand-blue" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9.594 3.94c.09-.542.56-.94 1.11-.94h2.593c.55 0 1.02.398 1.11.94l.213 1.281c.063.374.313.686.645.87.074.04.147.083.22.127.324.196.72.257 1.075.124l1.217-.456a1.125 1.125 0 0 1 1.37.49l1.296 2.247a1.125 1.125 0 0 1-.26 1.43l-1.003.828c-.293.241-.438.613-.43.992a7.723 7.723 0 0 1 0 .255c-.008.378.137.75.43.991l1.004.827c.424.35.534.954.26 1.43l-1.298 2.247a1.125 1.125 0 0 1-1.369.491l-1.217-.456c-.355-.133-.75-.072-1.076.124a6.57 6.57 0 0 1-.22.128c-.331.183-.581.495-.644.869l-.213 1.28c-.09.543-.56.941-1.11.941h-2.594c-.55 0-1.02-.398-1.11-.94l-.213-1.281c-.062-.374-.312-.686-.644-.87a6.52 6.52 0 0 1-.22-.127c-.325-.196-.72-.257-1.076-.124l-1.217.456a1.125 1.125 0 0 1-1.369-.49l-1.297-2.247a1.125 1.125 0 0 1 .26-1.43l1.004-.827c.292-.24.437-.613.43-.992a6.932 6.932 0 0 1 0-.255c.007-.378-.138-.75-.43-.991l-1.004-.827a1.125 1.125 0 0 1-.26-1.43l1.297-2.247a1.125 1.125 0 0 1 1.37-.491l1.216.456c.356.133.751.072 1.076-.124.072-.044.146-.087.22-.128.332-.183.582-.495.644-.869l.214-1.28z"></path>
                            <circle cx="12" cy="12" r="3"></circle>
                        </svg>
                    @elseif($service['icon'] === 'cpu')
                        <svg class="w-6 h-6 text-brand-blue" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <rect x="4" y="4" width="16" height="16" rx="2"></rect>
                            <path d="M9 9h6v6H9zM9 1v3M15 1v3M9 20v3M15 20v3M20 9h3M20 15h3M1 9h3M1 15h3"></path>
                        </svg>
                    @elseif($service['icon'] === 'shopping-cart')
                        <svg class="w-6 h-6 text-brand-blue" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <circle cx="9" cy="21" r="1"></circle>
                            <circle cx="20" cy="21" r="1"></circle>
                            <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path>
                        </svg>
                    @elseif($service['icon'] === 'link')
                        <svg class="w-6 h-6 text-brand-blue" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M13.19 8.688a4.5 4.5 0 0 1 1.242 7.244l-4.5 4.5a4.5 4.5 0 0 1-6.364-6.364l1.757-1.757m13.35-.622 1.757-1.757a4.5 4.5 0 0 0-6.364-6.364l-4.5 4.5a4.5 4.5 0 0 0 1.242 7.244"></path>
                        </svg>
                    @elseif($service['icon'] === 'chart-bar')
                        <svg class="w-6 h-6 text-brand-blue" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3 13.125C3 12.504 3.504 12 4.125 12h2.25c.621 0 1.125.504 1.125 1.125v6.75C7.5 20.496 6.996 21 6.375 21h-2.25A1.125 1.125 0 0 1 3 19.875v-6.75zM9.75 8.625c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125v11.25c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 0 1-1.125-1.125V8.625zM16.5 4.125c0-.621.504-1.125 1.125-1.125h2.25C20.496 3 21 3.504 21 4.125v15.75c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 0 1-1.125-1.125V4.125z"></path>
                        </svg>
                    @else
                        <span class="text-brand-blue text-xl">◈</span>
                    @endif
                </div>
                <h3 class="font-playfair text-xl font-semibold text-white mb-3">{{ $service['title'] }}</h3>
                <p class="font-inter text-brand-muted text-sm leading-relaxed mb-4">{{ $service['desc'] }}</p>
                <div class="text-brand-blue text-xs font-semibold flex items-center gap-1 group-hover:text-white transition">
                    Learn More &rarr;
                </div>
            </a>
            @endforeach
        </div>
        <div class="text-center mt-12">
            <a href="{{ route('services') }}" class="inline-flex items-center gap-2 text-brand-blue font-semibold hover:underline">
                See All Services →
            </a>
        </div>
    </div>
</section>

{{-- FEATURED WORK --}}
<section class="py-24 bg-brand-dark" x-data="{ activeTab: 'All' }">
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

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 min-h-[300px]">
            @foreach($projects as $project)
            <div x-show="activeTab === 'All' || activeTab === '{{ $project['category'] }}'"
                 x-transition:enter="transition ease-out duration-300"
                 x-transition:enter-start="opacity-0 scale-95"
                 x-transition:enter-end="opacity-100 scale-100"
                 class="group relative overflow-hidden rounded-2xl bg-brand-card border border-white/5 hover:border-brand-blue/40 transition">
                <div class="h-48 bg-gradient-to-br from-brand-blue/20 to-brand-black flex items-center justify-center relative overflow-hidden">
                    <span class="font-grotesk text-brand-muted text-sm z-10 hidden">{{ $project['tag'] }}</span>
                    <img src="{{ asset('images/projects/' . $project['image']) }}" alt="{{ $project['title'] }}" class="absolute inset-0 w-full h-full object-cover group-hover:scale-105 transition duration-500" width="400" height="250" loading="lazy">
                    <div class="absolute inset-0 bg-brand-dark/50 group-hover:bg-brand-dark/10 transition duration-500"></div>
                </div>
                <div class="p-6">
                    <span class="font-grotesk text-xs text-brand-blue uppercase tracking-wider">{{ $project['category'] }}</span>
                    <h3 class="font-playfair text-lg font-semibold text-white mt-2 mb-3">{{ $project['title'] }}</h3>
                    <a href="{{ route('work') }}" class="text-sm text-brand-muted hover:text-brand-blue transition">View Case Study →</a>
                </div>
            </div>
            @endforeach
        </div>
        <div class="text-center mt-12">
            <a href="{{ route('work') }}" class="border border-white/20 hover:border-brand-blue text-white font-semibold px-8 py-4 rounded-full transition">
                View All Projects
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

        <div class="grid grid-cols-1 md:grid-cols-4 gap-8 relative">
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

{{-- FAQs --}}
@include('components.faq')

@endsection
