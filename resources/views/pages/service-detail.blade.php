@extends('layouts.app')
@section('title', $service['title'] . ' | Codemir IT Experts')
@section('meta_description', $service['description'])

@section('content')

@php
    $mappedService = 'Other';
    if ($service['slug'] === 'custom-websites') $mappedService = 'Website';
    elseif (in_array($service['slug'], ['web-applications', 'business-systems'])) $mappedService = 'Web App';
    elseif ($service['slug'] === 'ai-tools') $mappedService = 'AI Tool';
    elseif ($service['slug'] === 'ecommerce') $mappedService = 'eCommerce';
@endphp

{{-- HERO --}}
<section class="relative min-h-[80vh] flex items-center justify-center overflow-hidden bg-brand-black py-20 lg:py-24">
    {{-- Animated grid background --}}
    <div class="absolute inset-0 opacity-10">
        <div class="absolute inset-0" style="background-image: linear-gradient(rgba(30,107,255,0.3) 1px, transparent 1px), linear-gradient(90deg, rgba(30,107,255,0.3) 1px, transparent 1px); background-size: 60px 60px;"></div>
    </div>
    {{-- Glow --}}
    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[600px] h-[600px] bg-brand-blue/10 rounded-full blur-3xl pointer-events-none"></div>

    <div class="relative z-10 max-w-7xl mx-auto px-6 w-full">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-16 items-center">
            
            {{-- Left Side: Info --}}
            <div class="lg:col-span-7" data-aos="fade-right">
                {{-- Breadcrumbs --}}
                <div class="flex items-center gap-2 text-sm text-brand-muted mb-8 font-inter">
                    <a href="{{ route('home') }}" class="hover:text-white transition">Home</a>
                    <span>/</span>
                    <a href="{{ route('services') }}" class="hover:text-white transition">Services</a>
                    <span>/</span>
                    <span class="text-white">{{ $service['title'] }}</span>
                </div>

                {{-- Service Icon --}}
                <div class="w-16 h-16 bg-brand-blue/10 border border-brand-blue/20 rounded-2xl flex items-center justify-center mb-6">
                    @if($service['icon'] === 'globe')
                        <svg class="w-8 h-8 text-brand-blue" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <circle cx="12" cy="12" r="10"></circle>
                            <path d="M2 12h20M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path>
                        </svg>
                    @elseif($service['icon'] === 'cog')
                        <svg class="w-8 h-8 text-brand-blue" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9.594 3.94c.09-.542.56-.94 1.11-.94h2.593c.55 0 1.02.398 1.11.94l.213 1.281c.063.374.313.686.645.87.074.04.147.083.22.127.324.196.72.257 1.075.124l1.217-.456a1.125 1.125 0 0 1 1.37.49l1.296 2.247a1.125 1.125 0 0 1-.26 1.43l-1.003.828c-.293.241-.438.613-.43.992a7.723 7.723 0 0 1 0 .255c-.008.378.137.75.43.991l1.004.827c.424.35.534.954.26 1.43l-1.298 2.247a1.125 1.125 0 0 1-1.369.491l-1.217-.456c-.355-.133-.75-.072-1.076.124a6.57 6.57 0 0 1-.22.128c-.331.183-.581.495-.644.869l-.213 1.28c-.09.543-.56.941-1.11.941h-2.594c-.55 0-1.02-.398-1.11-.94l-.213-1.281c-.062-.374-.312-.686-.644-.87a6.52 6.52 0 0 1-.22-.127c-.325-.196-.72-.257-1.076-.124l-1.217.456a1.125 1.125 0 0 1-1.369-.49l-1.297-2.247a1.125 1.125 0 0 1 .26-1.43l1.004-.827c.292-.24.437-.613.43-.992a6.932 6.932 0 0 1 0-.255c.007-.378-.138-.75-.43-.991l-1.004-.827a1.125 1.125 0 0 1-.26-1.43l1.297-2.247a1.125 1.125 0 0 1 1.37-.491l1.216.456c.356.133.751.072 1.076-.124.072-.044.146-.087.22-.128.332-.183.582-.495.644-.869l.214-1.28z"></path>
                            <circle cx="12" cy="12" r="3"></circle>
                        </svg>
                    @elseif($service['icon'] === 'cpu')
                        <svg class="w-8 h-8 text-brand-blue" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <rect x="4" y="4" width="16" height="16" rx="2"></rect>
                            <path d="M9 9h6v6H9zM9 1v3M15 1v3M9 20v3M15 20v3M20 9h3M20 15h3M1 9h3M1 15h3"></path>
                        </svg>
                    @elseif($service['icon'] === 'shopping-cart')
                        <svg class="w-8 h-8 text-brand-blue" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <circle cx="9" cy="21" r="1"></circle>
                            <circle cx="20" cy="21" r="1"></circle>
                            <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path>
                        </svg>
                    @elseif($service['icon'] === 'link')
                        <svg class="w-8 h-8 text-brand-blue" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M13.19 8.688a4.5 4.5 0 0 1 1.242 7.244l-4.5 4.5a4.5 4.5 0 0 1-6.364-6.364l1.757-1.757m13.35-.622 1.757-1.757a4.5 4.5 0 0 0-6.364-6.364l-4.5 4.5a4.5 4.5 0 0 0 1.242 7.244"></path>
                        </svg>
                    @elseif($service['icon'] === 'chart-bar')
                        <svg class="w-8 h-8 text-brand-blue" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3 13.125C3 12.504 3.504 12 4.125 12h2.25c.621 0 1.125.504 1.125 1.125v6.75C7.5 20.496 6.996 21 6.375 21h-2.25A1.125 1.125 0 0 1 3 19.875v-6.75zM9.75 8.625c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125v11.25c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 0 1-1.125-1.125V8.625zM16.5 4.125c0-.621.504-1.125 1.125-1.125h2.25C20.496 3 21 3.504 21 4.125v15.75c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 0 1-1.125-1.125V4.125z"></path>
                        </svg>
                    @endif
                </div>

                <h1 class="font-playfair text-4xl md:text-5xl lg:text-6xl font-bold leading-tight text-white mb-6">
                    {{ $service['title'] }}<span class="text-brand-blue">.</span>
                </h1>
                
                <p class="font-inter text-brand-muted text-base md:text-lg leading-relaxed mb-8 max-w-xl">
                    {{ $service['long_description'] }}
                </p>

                <div class="flex flex-wrap gap-2">
                    @foreach($service['technologies'] as $tech)
                    <span class="bg-brand-card border border-white/10 text-brand-muted font-grotesk text-xs px-4 py-1.5 rounded-full hover:border-brand-blue/40 hover:text-white transition">
                        {{ $tech }}
                    </span>
                    @endforeach
                </div>
            </div>

            {{-- Right Side: Form --}}
            <div class="lg:col-span-5" data-aos="fade-left">
                <div class="bg-brand-card border border-white/5 rounded-3xl p-8 lg:p-10 relative overflow-hidden shadow-2xl shadow-brand-black/50">
                    {{-- Subtle inside glow --}}
                    <div class="absolute -top-24 -right-24 w-48 h-48 bg-brand-blue/10 rounded-full blur-2xl pointer-events-none"></div>

                    <h3 class="font-playfair text-2xl font-bold text-white mb-6 text-center">Start Your Project</h3>

                    @if(session('success'))
                    <div class="mb-6 bg-green-500/10 border border-green-500/30 text-green-400 rounded-xl px-4 py-3 text-center text-sm font-inter">
                        {{ session('success') }}
                    </div>
                    @endif

                    <form action="{{ route('contact.send') }}" method="POST" class="space-y-4">
                        @csrf
                        {{-- Hidden parameters to satisfy ContactFormRequest validation rules --}}
                        <input type="hidden" name="phone" value="">
                        <input type="hidden" name="budget" value="Under $500">

                        <div>
                            <label class="font-grotesk text-xs text-brand-muted uppercase tracking-wider block mb-1.5">Name</label>
                            <input type="text" name="name" value="{{ old('name') }}" placeholder="John Doe" required
                                   class="w-full bg-brand-black border border-white/10 focus:border-brand-blue rounded-xl px-4 py-3 text-white font-inter text-sm outline-none transition @error('name') border-red-500 @enderror">
                            @error('name')<p class="text-red-400 text-xs mt-1">{{ $message }}</p>@enderror
                        </div>

                        <div>
                            <label class="font-grotesk text-xs text-brand-muted uppercase tracking-wider block mb-1.5">Email</label>
                            <input type="email" name="email" value="{{ old('email') }}" placeholder="john@company.com" required
                                   class="w-full bg-brand-black border border-white/10 focus:border-brand-blue rounded-xl px-4 py-3 text-white font-inter text-sm outline-none transition @error('email') border-red-500 @enderror">
                            @error('email')<p class="text-red-400 text-xs mt-1">{{ $message }}</p>@enderror
                        </div>

                        <div>
                            <label class="font-grotesk text-xs text-brand-muted uppercase tracking-wider block mb-1.5">Service Interested In</label>
                            <div class="relative">
                                <select name="service" required
                                        class="w-full bg-brand-black border border-white/10 focus:border-brand-blue rounded-xl px-4 py-3 text-white font-inter text-sm outline-none transition appearance-none @error('service') border-red-500 @enderror">
                                    @foreach(['Website', 'Web App', 'AI Tool', 'eCommerce', 'Other'] as $opt)
                                    <option value="{{ $opt }}" {{ (old('service') ?? $mappedService) === $opt ? 'selected' : '' }}>{{ $opt }}</option>
                                    @endforeach
                                </select>
                                <div class="absolute inset-y-0 right-0 flex items-center pr-4 pointer-events-none text-brand-muted">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                                </div>
                            </div>
                            @error('service')<p class="text-red-400 text-xs mt-1">{{ $message }}</p>@enderror
                        </div>

                        <div>
                            <label class="font-grotesk text-xs text-brand-muted uppercase tracking-wider block mb-1.5">Message</label>
                            <textarea name="description" rows="3" placeholder="Tell us about your project goals..." required
                                      class="w-full bg-brand-black border border-white/10 focus:border-brand-blue rounded-xl px-4 py-3 text-white font-inter text-sm outline-none transition resize-none @error('description') border-red-500 @enderror">{{ old('description') }}</textarea>
                            @error('description')<p class="text-red-400 text-xs mt-1">{{ $message }}</p>@enderror
                        </div>

                        <button type="submit" class="w-full bg-brand-blue hover:bg-brand-blue-hover text-white font-semibold py-3.5 rounded-xl transition-all duration-200 text-sm font-inter shadow-lg shadow-brand-blue/20 mt-2">
                            Send Message →
                        </button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</section>

{{-- OVERVIEW / FEATURES --}}
<section class="py-20 bg-brand-dark border-t border-white/5">
    <div class="max-w-6xl mx-auto px-6">
        <div class="text-center mb-14" data-aos="fade-up">
            <span class="font-grotesk text-brand-blue text-sm uppercase tracking-widest">Overview</span>
            <h2 class="font-playfair text-3xl md:text-4xl font-bold text-white mt-3">What's Included in This Service</h2>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6" data-aos="fade-up">
            @foreach($service['features'] as $index => $feature)
            <div class="bg-brand-card border border-white/5 rounded-2xl p-6 hover:border-brand-blue/30 transition group" data-aos="fade-up" data-aos-delay="{{ $index * 80 }}">
                <div class="flex items-start gap-4">
                    <div class="w-10 h-10 bg-brand-blue/10 rounded-xl flex items-center justify-center flex-shrink-0 group-hover:bg-brand-blue/20 transition">
                        <svg class="w-5 h-5 text-brand-blue" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0z"/>
                        </svg>
                    </div>
                    <div>
                        <h3 class="font-playfair text-lg font-semibold text-white mb-1">{{ $feature['title'] }}</h3>
                        <p class="font-inter text-brand-muted text-sm leading-relaxed">{{ $feature['desc'] }}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- PROCESS --}}
<section class="py-20 bg-brand-black">
    <div class="max-w-5xl mx-auto px-6">
        <div class="text-center mb-14" data-aos="fade-up">
            <span class="font-grotesk text-brand-blue text-sm tracking-widest uppercase">Our Approach</span>
            <h2 class="font-playfair text-3xl md:text-4xl font-bold text-white mt-3">How We Deliver This Service</h2>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
            @foreach([
                ['step' => '01', 'title' => 'Discovery Call',   'desc' => 'We learn your goals, current challenges, and technical requirements in depth.'],
                ['step' => '02', 'title' => 'Proposal & Plan', 'desc' => 'You receive a detailed project plan, timeline, and fixed-price quote.'],
                ['step' => '03', 'title' => 'Build & Review',  'desc' => 'We build in milestones with regular demos so you see progress throughout.'],
                ['step' => '04', 'title' => 'Launch & Support','desc' => 'We deploy, test thoroughly, and offer ongoing support after launch.'],
            ] as $index => $step)
            <div class="text-center" data-aos="fade-up" data-aos-delay="{{ $index * 100 }}">
                <div class="font-grotesk text-5xl font-bold text-brand-blue/20 mb-4">{{ $step['step'] }}</div>
                <h3 class="font-playfair text-lg font-semibold text-white mb-3">{{ $step['title'] }}</h3>
                <p class="font-inter text-brand-muted text-sm leading-relaxed">{{ $step['desc'] }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- CTA BANNER --}}
<section class="py-20 bg-brand-dark border-t border-white/5">
    <div class="max-w-4xl mx-auto px-6">
        <div class="bg-gradient-to-r from-brand-blue/10 to-brand-black border border-brand-blue/20 rounded-3xl p-10 md:p-16 text-center" data-aos="fade-up">
            <span class="font-grotesk text-brand-blue text-sm uppercase tracking-widest">Ready to Get Started?</span>
            <h2 class="font-playfair text-3xl md:text-5xl font-bold text-white mt-3 mb-4">{{ $service['cta_title'] }}</h2>
            <p class="font-inter text-brand-muted max-w-xl mx-auto mb-8 text-lg">{{ $service['cta_desc'] }}</p>
            <div class="flex flex-wrap gap-4 justify-center">
                <a href="{{ route('contact') }}" class="bg-brand-blue hover:bg-brand-blue-hover text-white font-semibold px-8 py-4 rounded-full transition shadow-lg shadow-brand-blue/20">
                    Get a Free Quote →
                </a>
                <a href="{{ route('work') }}" class="border border-white/20 hover:border-brand-blue text-white font-semibold px-8 py-4 rounded-full transition">
                    See Our Work
                </a>
            </div>
        </div>
    </div>
</section>

{{-- SERVICE-SPECIFIC FAQs --}}
<section class="py-20 bg-brand-black border-t border-white/5">
    <div class="max-w-4xl mx-auto px-6">
        <div class="text-center mb-14" data-aos="fade-up">
            <span class="font-grotesk text-brand-blue text-sm uppercase tracking-widest">Got Questions?</span>
            <h2 class="font-playfair text-3xl md:text-5xl font-bold text-white mt-3 mb-4">FAQs About This Service</h2>
        </div>

        <div class="space-y-4" x-data="{ active: null }">
            @foreach($faqs as $index => $faq)
            <div class="bg-brand-card border border-white/5 rounded-xl overflow-hidden" data-aos="fade-up" data-aos-delay="{{ min($index * 80, 300) }}">
                <button @click="active === {{ $index }} ? active = null : active = {{ $index }}"
                        class="w-full text-left px-6 py-5 flex items-center justify-between focus:outline-none hover:bg-white/5 transition">
                    <span class="font-playfair text-lg font-semibold text-white">{{ $faq['question'] }}</span>
                    <span class="text-brand-blue transform transition-transform duration-300 flex-shrink-0 ml-4"
                          :class="active === {{ $index }} ? 'rotate-45' : ''">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v12M6 12h12"/></svg>
                    </span>
                </button>
                <div x-show="active === {{ $index }}"
                     x-collapse
                     x-cloak
                     class="px-6 pb-6 pt-2 font-inter text-brand-muted text-sm leading-relaxed border-t border-white/5">
                    {{ $faq['answer'] }}
                </div>
            </div>
            @endforeach
        </div>

        <div class="text-center mt-12" data-aos="fade-up">
            <p class="font-inter text-brand-muted mb-4">Still have questions?</p>
            <a href="{{ route('contact') }}" class="text-brand-blue font-semibold hover:underline">Contact us directly →</a>
        </div>
    </div>
</section>

@endsection
