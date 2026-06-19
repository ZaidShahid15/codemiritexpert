@extends('layouts.app')
@section('title', 'Insights & Blog | Codemir IT Experts')
@section('meta_description', 'Deep dives into custom Laravel systems, RESTful API engineering, and AI automation workflows written by our experts.')

@section('content')
@include('components.page-hero', [
    'eyebrow'     => 'Our Blog',
    'title'       => 'Developer Insights &<br><span class="text-brand-blue">Tech Articles</span>',
    'description' => 'Read our latest insights on PHP Laravel engineering, generative AI integrations, and custom business workflow automations.',
    'cta1Label'   => 'Contact Us',
    'cta1Route'   => 'contact',
    'cta2Label'   => 'Read Articles',
    'cta2Route'   => 'blog',
    'badges'      => ['Laravel Best Practices', 'OpenAI APIs', 'Custom CRM/ERP', 'API Design', 'Software Performance'],
])

{{-- BLOG POSTS LIST --}}
<section class="py-24 bg-brand-black min-h-screen">
    <div class="max-w-6xl mx-auto px-6">
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            @foreach($posts as $slug => $post)
            <div data-aos="fade-up" data-aos-delay="{{ $loop->index * 80 }}">
                <div class="bg-brand-card border border-white/5 rounded-2xl overflow-hidden hover:border-brand-blue/30 transition-all duration-300 hover:-translate-y-1 group h-full flex flex-col justify-between">
                    
                    {{-- Blog Card Header Image/Gradient --}}
                    <div class="relative h-48 bg-gradient-to-br from-brand-blue/20 to-purple-900/40 border-b border-white/5 flex items-center justify-center p-6 text-center select-none overflow-hidden">
                        <div class="absolute -top-12 -left-12 w-28 h-28 bg-brand-blue/20 rounded-full blur-xl pointer-events-none"></div>
                        <div class="absolute -bottom-12 -right-12 w-28 h-28 bg-purple-500/20 rounded-full blur-xl pointer-events-none"></div>
                        
                        <div class="z-10">
                            <span class="font-grotesk text-xs uppercase tracking-widest text-brand-blue/80 bg-brand-blue/10 border border-brand-blue/20 px-3 py-1 rounded-full mb-3 inline-block">
                                {{ $post['category'] }}
                            </span>
                            <h4 class="font-playfair text-lg font-bold text-white line-clamp-2">{{ $post['title'] }}</h4>
                        </div>
                    </div>

                    {{-- Blog Card Body --}}
                    <div class="p-6 flex-1 flex flex-col justify-between">
                        <div>
                            <div class="flex items-center gap-3 text-xs text-brand-muted mb-4 font-grotesk font-medium">
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
    </div>
</section>

{{-- FEATURED PORTFOLIO SHOWCASE --}}
<section class="py-24 bg-brand-dark border-t border-white/5 relative overflow-hidden">
    <div class="absolute top-1/4 left-1/10 w-96 h-96 bg-brand-blue/5 rounded-full filter blur-[100px] pointer-events-none"></div>
    <div class="max-w-6xl mx-auto px-6 relative z-10">
        <div class="flex flex-col md:flex-row md:items-end justify-between mb-16" data-aos="fade-up">
            <div>
                <span class="font-grotesk text-brand-blue text-xs tracking-[0.2em] uppercase bg-brand-blue/10 px-4 py-2 rounded-full border border-brand-blue/20">Featured Work</span>
                <h2 class="font-playfair text-4xl font-bold text-white mt-6">From Code to Reality</h2>
                <p class="font-inter text-brand-muted text-base max-w-xl mt-4">Take a look at how we build systems that solve real operational business challenges.</p>
            </div>
            <div class="mt-6 md:mt-0">
                <a href="{{ route('work') }}" class="inline-flex items-center gap-2 text-sm font-semibold text-brand-blue hover:text-white transition">
                    View Full Portfolio &rarr;
                </a>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <div class="bg-brand-card/60 backdrop-blur-sm border border-white/5 p-8 rounded-3xl hover:border-brand-blue/20 transition-all duration-300" data-aos="fade-right">
                <span class="font-grotesk text-[10px] uppercase tracking-widest text-brand-blue/80 bg-brand-blue/10 border border-brand-blue/20 px-3 py-1 rounded-full mb-4 inline-block">Web Application</span>
                <h3 class="font-playfair text-2xl font-bold text-white mb-3">Custom ERP / Business Management System</h3>
                <p class="font-inter text-brand-muted text-sm leading-relaxed mb-6">We developed a fully modular CRM and ERP system for a logistics company. It handles custom payroll, tracking, invoicing, and user permissions, completely replacing a dozen expensive third-party seat subscriptions.</p>
                <div class="flex flex-wrap gap-2">
                    <span class="bg-brand-black/40 border border-white/10 text-brand-muted font-grotesk text-xs px-3 py-1 rounded-full">Laravel</span>
                    <span class="bg-brand-black/40 border border-white/10 text-brand-muted font-grotesk text-xs px-3 py-1 rounded-full">MySQL</span>
                    <span class="bg-brand-black/40 border border-white/10 text-brand-muted font-grotesk text-xs px-3 py-1 rounded-full">Livewire</span>
                </div>
            </div>
            <div class="bg-brand-card/60 backdrop-blur-sm border border-white/5 p-8 rounded-3xl hover:border-brand-blue/20 transition-all duration-300" data-aos="fade-left">
                <span class="font-grotesk text-[10px] uppercase tracking-widest text-brand-blue/80 bg-brand-blue/10 border border-brand-blue/20 px-3 py-1 rounded-full mb-4 inline-block">AI Integration</span>
                <h3 class="font-playfair text-2xl font-bold text-white mb-3">GPT-4 Trained Support Voice & Chat Agent</h3>
                <p class="font-inter text-brand-muted text-sm leading-relaxed mb-6">Designed and deployed a Retrieval-Augmented Generation (RAG) assistant for a medical scheduling platform. It securely answers catalog questions and handles real-time appointment bookings.</p>
                <div class="flex flex-wrap gap-2">
                    <span class="bg-brand-black/40 border border-white/10 text-brand-muted font-grotesk text-xs px-3 py-1 rounded-full">OpenAI API</span>
                    <span class="bg-brand-black/40 border border-white/10 text-brand-muted font-grotesk text-xs px-3 py-1 rounded-full">Vector DB</span>
                    <span class="bg-brand-black/40 border border-white/10 text-brand-muted font-grotesk text-xs px-3 py-1 rounded-full">Python</span>
                </div>
            </div>
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
