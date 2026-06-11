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
    'badges'      => ['20+ Projects Completed', 'Laravel & PHP', 'AI-Powered Apps', 'US · UK · AU Clients'],
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
            <div x-show="activeTab === 'All' || activeTab === '{{ $project['category'] }}'"
                 x-transition:enter="transition ease-out duration-300"
                 x-transition:enter-start="opacity-0 scale-95"
                 x-transition:enter-end="opacity-100 scale-100"
                 x-transition:leave="transition ease-in duration-150"
                 x-transition:leave-start="opacity-100 scale-100"
                 x-transition:leave-end="opacity-0 scale-95"
                 class="group relative overflow-hidden rounded-2xl bg-brand-card border border-white/5 hover:border-brand-blue/40 transition"
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
            </div>
            @endforeach
        </div>

        {{-- CTA --}}
        <div class="mt-20 text-center" data-aos="fade-up">
            <p class="font-inter text-brand-muted mb-6 text-lg">Have a project in mind? Let's make it happen.</p>
            <a href="{{ route('contact') }}" class="inline-flex items-center gap-2 bg-brand-blue hover:bg-brand-blue-hover text-white font-semibold px-8 py-4 rounded-full transition shadow-lg shadow-brand-blue/20">
                Start Your Project →
            </a>
        </div>
    </div>
</section>

@include('components.faq')
@endsection
