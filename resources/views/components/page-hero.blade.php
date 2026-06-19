@php
    $eyebrow     = $eyebrow     ?? 'Our Expertise';
    $title       = $title       ?? 'Built For Your Business';
    $description = $description ?? 'Delivering high-performance web systems and AI-powered tools.';
    $cta1Label   = $cta1Label   ?? 'Get a Free Quote';
    $cta1Route   = $cta1Route   ?? 'contact';
    $cta2Label   = $cta2Label   ?? 'View Our Work';
    $cta2Route   = $cta2Route   ?? 'work';
    $badges      = $badges      ?? ['20+ Projects Delivered', 'Laravel Expert', 'AI Tools Integrated', 'Clients Worldwide'];
@endphp

<section class="relative min-h-[90vh] flex items-center justify-center overflow-hidden bg-brand-black pt-12 pb-20">

    {{-- Animated grid background --}}
    <div class="absolute inset-0 opacity-10">
        <div class="absolute inset-0" style="background-image: linear-gradient(rgba(30,107,255,0.4) 1px, transparent 1px), linear-gradient(90deg, rgba(30,107,255,0.4) 1px, transparent 1px); background-size: 60px 60px;"></div>
    </div>

    {{-- Large center glow --}}
    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[700px] h-[700px] bg-brand-blue/10 rounded-full blur-3xl pointer-events-none"></div>
    {{-- Secondary accent glow --}}
    <div class="absolute top-0 right-1/4 w-[300px] h-[300px] bg-purple-600/5 rounded-full blur-3xl pointer-events-none"></div>

    <div class="relative z-10 max-w-5xl mx-auto px-6 text-center">

        {{-- Eyebrow badge --}}
        <span class="inline-block font-grotesk text-brand-blue text-sm tracking-widest uppercase mb-6 border border-brand-blue/30 px-4 py-1.5 rounded-full" data-aos="fade-down">
            {{ $eyebrow }}
        </span>

        {{-- Title --}}
        <h1 class="font-playfair text-5xl md:text-7xl font-bold leading-tight text-white mb-6" data-aos="fade-up">
            {!! $title !!}
        </h1>

        {{-- Description --}}
        <p class="font-inter text-brand-muted text-lg md:text-xl max-w-2xl mx-auto mb-10" data-aos="fade-up" data-aos-delay="100">
            {{ $description }}
        </p>

        {{-- CTA Buttons --}}
        <div class="flex flex-wrap gap-4 justify-center mb-14" data-aos="fade-up" data-aos-delay="200">
            <a href="{{ route($cta1Route) }}"
               class="bg-brand-blue hover:bg-brand-blue-hover text-white font-semibold px-8 py-4 rounded-full transition text-base shadow-lg shadow-brand-blue/20 hover:shadow-brand-blue/40">
                {{ $cta1Label }} →
            </a>
            <a href="{{ route($cta2Route) }}"
               class="border border-white/20 hover:border-white/60 text-white font-semibold px-8 py-4 rounded-full transition text-base hover:bg-white/5">
                {{ $cta2Label }}
            </a>
        </div>

        {{-- Trust badges --}}
        <div class="flex flex-wrap justify-center gap-6 text-sm font-grotesk text-brand-muted" data-aos="fade-up" data-aos-delay="300">
            @foreach($badges as $badge)
            <span class="flex items-center gap-2">
                <span class="w-1.5 h-1.5 rounded-full bg-brand-blue"></span>
                {{ $badge }}
            </span>
            @endforeach
        </div>
    </div>
</section>
