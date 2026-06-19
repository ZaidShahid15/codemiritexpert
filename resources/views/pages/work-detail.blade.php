@extends('layouts.app')
@section('title', $project['title'] . ' | Codemir IT Experts Case Study')
@section('meta_description', $project['desc'])

@section('content')

{{-- BREADCRUMBS & HERO --}}
<section class="relative min-h-[50vh] flex items-center justify-center overflow-hidden bg-brand-black pt-16 pb-12">
    {{-- Animated grid background --}}
    <div class="absolute inset-0 opacity-10">
        <div class="absolute inset-0" style="background-image: linear-gradient(rgba(30,107,255,0.3) 1px, transparent 1px), linear-gradient(90deg, rgba(30,107,255,0.3) 1px, transparent 1px); background-size: 60px 60px;"></div>
    </div>
    {{-- Glow --}}
    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[500px] h-[500px] bg-brand-blue/10 rounded-full blur-3xl pointer-events-none"></div>

    <div class="relative z-10 max-w-5xl mx-auto px-6 w-full text-center">
        {{-- Breadcrumbs --}}
        <div class="flex items-center justify-center gap-2 text-sm text-brand-muted mb-8 font-inter">
            <a href="{{ route('home') }}" class="hover:text-white transition">Home</a>
            <span>/</span>
            <a href="{{ route('work') }}" class="hover:text-white transition">Our Work</a>
            <span>/</span>
            <span class="text-white">{{ $project['title'] }}</span>
        </div>

        <span class="inline-block font-grotesk text-brand-blue text-xs uppercase tracking-widest mb-4 bg-brand-blue/10 border border-brand-blue/20 px-4 py-1.5 rounded-full font-semibold">
            {{ $project['industry'] }} · Case Study
        </span>

        <h1 class="font-playfair text-4xl md:text-6xl font-bold leading-tight text-white mb-6">
            {{ $project['title'] }}<span class="text-brand-blue">.</span>
        </h1>

        <p class="font-inter text-brand-muted text-lg max-w-2xl mx-auto leading-relaxed">
            {{ $project['desc'] }}
        </p>
    </div>
</section>

{{-- MAIN CONTENT --}}
<section class="py-20 bg-brand-black relative">
    <div class="max-w-6xl mx-auto px-6">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-start">
            
            {{-- Left Side: Case Study Details --}}
            <div class="lg:col-span-7 space-y-12">
                {{-- CHALLENGE --}}
                <div class="bg-brand-card/40 border-l-4 border-amber-500 rounded-r-2xl p-8 shadow-xl" data-aos="fade-up">
                    <div class="flex items-center gap-3 mb-4">
                        <span class="text-2xl">⚠️</span>
                        <h2 class="font-playfair text-2xl font-bold text-white">The Challenge</h2>
                    </div>
                    <p class="font-inter text-brand-muted text-sm leading-relaxed">
                        {{ $project['challenge'] }}
                    </p>
                </div>

                {{-- SOLUTION --}}
                <div class="bg-brand-card/40 border-l-4 border-brand-blue rounded-r-2xl p-8 shadow-xl" data-aos="fade-up" data-aos-delay="50">
                    <div class="flex items-center gap-3 mb-4">
                        <span class="text-2xl">💡</span>
                        <h2 class="font-playfair text-2xl font-bold text-white">Our Solution</h2>
                    </div>
                    <p class="font-inter text-brand-muted text-sm leading-relaxed">
                        {{ $project['solution'] }}
                    </p>
                </div>

                {{-- RESULTS --}}
                <div class="bg-brand-card/40 border-l-4 border-emerald-500 rounded-r-2xl p-8 shadow-xl" data-aos="fade-up" data-aos-delay="100">
                    <div class="flex items-center gap-3 mb-6">
                        <span class="text-2xl">📈</span>
                        <h2 class="font-playfair text-2xl font-bold text-white">Key Results</h2>
                    </div>
                    <div class="font-inter text-brand-muted text-sm leading-relaxed space-y-4">
                        @foreach(explode(', ', $project['results']) as $result)
                        <div class="flex items-start gap-3">
                            <span class="w-5 h-5 rounded-full bg-emerald-500/10 border border-emerald-500/30 flex items-center justify-center text-emerald-400 text-xs mt-0.5 flex-shrink-0">✓</span>
                            <span>{{ $result }}</span>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>

            {{-- Right Side: Showcase Image & Tech Meta --}}
            <div class="lg:col-span-5 space-y-8" data-aos="fade-left">
                {{-- Showcase Card --}}
                <div class="bg-brand-card border border-white/5 rounded-3xl overflow-hidden shadow-2xl relative group">
                    <div class="h-64 md:h-72 overflow-hidden relative">
                        <img src="{{ asset('images/projects/' . $project['image']) }}" 
                             alt="{{ $project['title'] }}" 
                             class="w-full h-full object-cover transition duration-700 group-hover:scale-105"
                             width="500" height="300" loading="lazy">
                        <div class="absolute inset-0 bg-brand-dark/20"></div>
                    </div>
                    
                    <div class="p-8 space-y-6">
                        <div>
                            <span class="font-grotesk text-xs uppercase tracking-wider text-brand-muted block mb-1">Client Category</span>
                            <span class="text-white font-semibold font-inter">{{ $project['category'] }}</span>
                        </div>

                        <div>
                            <span class="font-grotesk text-xs uppercase tracking-wider text-brand-muted block mb-1.5">Technologies Used</span>
                            <div class="flex flex-wrap gap-2">
                                @foreach($project['tags'] as $tag)
                                <span class="bg-brand-black border border-white/10 text-brand-muted font-grotesk text-xs px-3 py-1 rounded-full">
                                    {{ $tag }}
                                </span>
                                @endforeach
                            </div>
                        </div>

                        <div class="pt-6 border-t border-white/5">
                            <a href="{{ route('contact', ['service' => ($project['category'] === 'Website' ? 'Website' : ($project['category'] === 'AI Tool' ? 'AI Tool' : ($project['category'] === 'eCommerce' ? 'eCommerce' : 'Web App')))]) }}" 
                               class="w-full bg-brand-blue hover:bg-brand-blue-hover text-white text-center font-semibold py-3.5 rounded-xl transition font-inter block shadow-lg shadow-brand-blue/20">
                                Request a System Like This
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

{{-- CTA SECTION --}}
<section class="py-24 bg-gradient-to-b from-brand-black to-brand-dark border-t border-white/5">
    <div class="max-w-4xl mx-auto px-6 text-center" data-aos="fade-up">
        <span class="font-grotesk text-brand-blue text-sm uppercase tracking-widest font-semibold block mb-4">Let's Work Together</span>
        <h2 class="font-playfair text-3xl md:text-5xl font-bold text-white mb-6 leading-tight">
            Ready to Build Your Custom Solution?
        </h2>
        <p class="font-inter text-brand-muted text-base max-w-xl mx-auto mb-10 leading-relaxed">
            Whether you need a custom administrative platform, dynamic ERP, AI-trained chatbot, or eCommerce store, we deliver hand-coded results that scale.
        </p>
        <div class="flex flex-col sm:flex-row justify-center items-center gap-4">
            <a href="{{ route('contact') }}" class="bg-brand-blue hover:bg-brand-blue-hover text-white font-semibold px-8 py-4 rounded-full transition text-base shadow-lg shadow-brand-blue/20">
                Get a Free Quote →
            </a>
            <a href="{{ route('work') }}" class="border border-white/20 hover:border-white/60 text-white font-semibold px-8 py-4 rounded-full transition text-base">
                View More Case Studies
            </a>
        </div>
    </div>
</section>

@include('components.faq')
@endsection
