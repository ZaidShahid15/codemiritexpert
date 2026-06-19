@extends('layouts.app')
@section('title', 'Sitemap | Codemir IT Experts')
@section('meta_description', 'Sitemap for Codemir IT Experts. Explore our pages, custom software development services, project case studies, and tech insights.')

@section('content')
<section class="relative min-h-[50vh] flex items-center justify-center overflow-hidden bg-brand-black pt-16 pb-12">
    {{-- Animated grid background --}}
    <div class="absolute inset-0 opacity-10">
        <div class="absolute inset-0" style="background-image: linear-gradient(rgba(30,107,255,0.4) 1px, transparent 1px), linear-gradient(90deg, rgba(30,107,255,0.4) 1px, transparent 1px); background-size: 60px 60px;"></div>
    </div>
    {{-- Large center glow --}}
    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[600px] h-[700px] bg-brand-blue/10 rounded-full blur-3xl pointer-events-none"></div>

    <div class="relative z-10 max-w-4xl mx-auto px-6 text-center">
        <span class="inline-block font-grotesk text-brand-blue text-xs tracking-widest uppercase mb-4 border border-brand-blue/30 px-4 py-1.5 rounded-full">
            Ecosystem Index
        </span>
        <h1 class="font-playfair text-4xl md:text-5xl font-bold leading-tight text-white mb-4">
            Website Sitemap
        </h1>
        <p class="font-inter text-brand-muted text-sm md:text-base max-w-xl mx-auto">
            A visual roadmap of all public sections, case studies, custom services, and tech resources.
        </p>
    </div>
</section>

<section class="py-16 bg-brand-black relative overflow-hidden">
    <div class="absolute top-1/4 left-1/10 w-96 h-96 bg-brand-blue/5 rounded-full filter blur-[100px] pointer-events-none"></div>
    <div class="absolute bottom-1/4 right-1/10 w-96 h-96 bg-purple-500/5 rounded-full filter blur-[100px] pointer-events-none"></div>

    <div class="max-w-7xl mx-auto px-6 relative z-10">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">

            {{-- COLUMN 1: CORE PAGES --}}
            <div class="bg-brand-card/60 border border-white/5 rounded-3xl p-8 hover:border-brand-blue/20 transition-all duration-300 flex flex-col h-full" data-aos="fade-up" data-aos-delay="0">
                <div class="flex items-center gap-3 mb-6">
                    <div class="w-10 h-10 bg-brand-blue/10 border border-brand-blue/20 rounded-xl flex items-center justify-center text-brand-blue">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
                        </svg>
                    </div>
                    <h3 class="font-grotesk text-lg font-bold text-white uppercase tracking-wider">Main Pages</h3>
                </div>
                <ul class="space-y-4 font-inter text-sm text-brand-muted flex-grow">
                    <li><a href="{{ route('home') }}" class="hover:text-brand-blue hover:pl-1 transition-all flex items-center gap-2">◈ Home</a></li>
                    <li><a href="{{ route('about') }}" class="hover:text-brand-blue hover:pl-1 transition-all flex items-center gap-2">◈ About Us</a></li>
                    <li><a href="{{ route('services') }}" class="hover:text-brand-blue hover:pl-1 transition-all flex items-center gap-2">◈ Our Services</a></li>
                    <li><a href="{{ route('ai-solutions') }}" class="hover:text-brand-blue hover:pl-1 transition-all flex items-center gap-2">◈ AI Solutions</a></li>
                    <li><a href="{{ route('work') }}" class="hover:text-brand-blue hover:pl-1 transition-all flex items-center gap-2">◈ Our Work (Portfolio)</a></li>
                    <li><a href="{{ route('blog') }}" class="hover:text-brand-blue hover:pl-1 transition-all flex items-center gap-2">◈ Blog & News</a></li>
                    <li><a href="{{ route('contact') }}" class="hover:text-brand-blue hover:pl-1 transition-all flex items-center gap-2">◈ Contact Us</a></li>
                    <li><a href="{{ route('privacy') }}" class="hover:text-brand-blue hover:pl-1 transition-all flex items-center gap-2">◈ Privacy Policy</a></li>
                    <li><a href="{{ route('terms') }}" class="hover:text-brand-blue hover:pl-1 transition-all flex items-center gap-2">◈ Terms of Service</a></li>
                    <li><a href="{{ route('sitemap.xml') }}" target="_blank" class="text-brand-gold hover:underline flex items-center gap-2">◈ XML Sitemap</a></li>
                </ul>
            </div>

            {{-- COLUMN 2: SERVICES --}}
            <div class="bg-brand-card/60 border border-white/5 rounded-3xl p-8 hover:border-brand-blue/20 transition-all duration-300 flex flex-col h-full" data-aos="fade-up" data-aos-delay="100">
                <div class="flex items-center gap-3 mb-6">
                    <div class="w-10 h-10 bg-brand-blue/10 border border-brand-blue/20 rounded-xl flex items-center justify-center text-brand-blue">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"/>
                            <circle cx="12" cy="12" r="3"/>
                        </svg>
                    </div>
                    <h3 class="font-grotesk text-lg font-bold text-white uppercase tracking-wider">Services</h3>
                </div>
                <ul class="space-y-4 font-inter text-sm text-brand-muted flex-grow">
                    @foreach($services as $serv)
                    <li>
                        <a href="{{ route('services.detail', $serv['slug']) }}" class="hover:text-brand-blue hover:pl-1 transition-all flex items-start gap-2">
                            <span class="text-brand-blue shrink-0">◈</span>
                            <span>{{ $serv['title'] }}</span>
                        </a>
                    </li>
                    @endforeach
                </ul>
            </div>

            {{-- COLUMN 3: CASE STUDIES --}}
            <div class="bg-brand-card/60 border border-white/5 rounded-3xl p-8 hover:border-brand-blue/20 transition-all duration-300 flex flex-col h-full" data-aos="fade-up" data-aos-delay="200">
                <div class="flex items-center gap-3 mb-6">
                    <div class="w-10 h-10 bg-brand-blue/10 border border-brand-blue/20 rounded-xl flex items-center justify-center text-brand-blue">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"/>
                        </svg>
                    </div>
                    <h3 class="font-grotesk text-lg font-bold text-white uppercase tracking-wider">Our Work</h3>
                </div>
                <ul class="space-y-4 font-inter text-sm text-brand-muted flex-grow">
                    @foreach($projects as $p)
                    <li>
                        <a href="{{ route('work.detail', $p['slug']) }}" class="hover:text-brand-blue hover:pl-1 transition-all flex items-start gap-2">
                            <span class="text-brand-blue shrink-0">◈</span>
                            <div>
                                <span class="block text-white group-hover:text-brand-blue font-semibold">{{ $p['title'] }}</span>
                                <span class="text-xs text-brand-muted">{{ $p['tag'] }} · {{ $p['industry'] }}</span>
                            </div>
                        </a>
                    </li>
                    @endforeach
                </ul>
            </div>

            {{-- COLUMN 4: BLOG POSTS --}}
            <div class="bg-brand-card/60 border border-white/5 rounded-3xl p-8 hover:border-brand-blue/20 transition-all duration-300 flex flex-col h-full" data-aos="fade-up" data-aos-delay="300">
                <div class="flex items-center gap-3 mb-6">
                    <div class="w-10 h-10 bg-brand-blue/10 border border-brand-blue/20 rounded-xl flex items-center justify-center text-brand-blue">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/>
                        </svg>
                    </div>
                    <h3 class="font-grotesk text-lg font-bold text-white uppercase tracking-wider">Insights</h3>
                </div>
                <ul class="space-y-4 font-inter text-sm text-brand-muted flex-grow">
                    @foreach($posts as $post)
                    <li>
                        <a href="{{ route('blog.detail', $post['slug']) }}" class="hover:text-brand-blue hover:pl-1 transition-all flex items-start gap-2">
                            <span class="text-brand-blue shrink-0">◈</span>
                            <div>
                                <span class="block text-white group-hover:text-brand-blue font-semibold">{{ $post['title'] }}</span>
                                <span class="text-[10px] text-brand-gold uppercase tracking-wider">{{ $post['category'] }}</span>
                            </div>
                        </a>
                    </li>
                    @endforeach
                </ul>
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

@include('components.faq')
@endsection
