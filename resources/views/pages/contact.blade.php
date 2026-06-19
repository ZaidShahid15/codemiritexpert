@extends('layouts.app')
@section('title', 'Contact Codemir IT Experts | Start Your Project')

@section('content')
@include('components.page-hero', [
    'eyebrow'     => 'Get In Touch',
    'title'       => "Let's Build<br><span class=\"text-brand-blue\">Something Great</span>",
    'description' => "Tell us about your project and we'll get back to you within 24 hours with a tailored plan — no pressure, no generic templates.",
    'cta1Label'   => 'Send a Message',
    'cta1Route'   => 'contact',
    'cta2Label'   => 'View Our Work',
    'cta2Route'   => 'work',
    'badges'      => ['Reply Within 24 Hours', 'Free Consultation', 'No Hidden Fees', 'Trusted by 20+ Clients'],
])

<section class="py-24 bg-brand-black min-h-screen">
    <div class="max-w-6xl mx-auto px-6">
        @if(session('success'))
        <div class="mb-8 bg-green-500/10 border border-green-500/30 text-green-400 rounded-xl px-6 py-4 text-center font-inter">
            {{ session('success') }}
        </div>
        @endif

        <div class="grid grid-cols-1 lg:grid-cols-5 gap-10">

            {{-- FORM --}}
            <div class="lg:col-span-3 bg-brand-card border border-white/5 rounded-2xl p-8" data-aos="fade-right">
                <form action="{{ route('contact.send') }}" method="POST" class="space-y-5">
                    @csrf
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                        <div>
                            <label class="font-grotesk text-sm text-brand-muted block mb-2">Full Name *</label>
                            <input type="text" name="name" value="{{ old('name') }}" placeholder="John Smith"
                                   class="w-full bg-brand-black border border-white/10 focus:border-brand-blue rounded-xl px-4 py-3 text-white font-inter text-sm outline-none transition @error('name') border-red-500 @enderror">
                            @error('name')<p class="text-red-400 text-xs mt-1">{{ $message }}</p>@enderror
                        </div>
                        <div>
                            <label class="font-grotesk text-sm text-brand-muted block mb-2">Email Address *</label>
                            <input type="email" name="email" value="{{ old('email') }}" placeholder="john@company.com"
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
                            <select name="service" class="w-full bg-brand-black border border-white/10 focus:border-brand-blue rounded-xl px-4 py-3 text-white font-inter text-sm outline-none transition @error('service') border-red-500 @enderror">
                                <option value="">Select a service</option>
                                @foreach(['Website', 'Web App', 'AI Tool', 'eCommerce', 'Other'] as $opt)
                                <option value="{{ $opt }}" {{ old('service') == $opt ? 'selected' : '' }}>{{ $opt }}</option>
                                @endforeach
                            </select>
                            @error('service')<p class="text-red-400 text-xs mt-1">{{ $message }}</p>@enderror
                        </div>
                    </div>

                    <div>
                        <label class="font-grotesk text-sm text-brand-muted block mb-2">Budget Range *</label>
                        <select name="budget" class="w-full bg-brand-black border border-white/10 focus:border-brand-blue rounded-xl px-4 py-3 text-white font-inter text-sm outline-none transition">
                            <option value="">Select budget</option>
                            @foreach(['Under $500', '$500–$1000', '$1000–$3000', '$3000+'] as $b)
                            <option value="{{ $b }}" {{ old('budget') == $b ? 'selected' : '' }}>{{ $b }}</option>
                            @endforeach
                        </select>
                        @error('budget')<p class="text-red-400 text-xs mt-1">{{ $message }}</p>@enderror
                    </div>

                    <div>
                        <label class="font-grotesk text-sm text-brand-muted block mb-2">Project Description *</label>
                        <textarea name="description" rows="5" placeholder="Tell us about your project, goals, and timeline..."
                                  class="w-full bg-brand-black border border-white/10 focus:border-brand-blue rounded-xl px-4 py-3 text-white font-inter text-sm outline-none transition resize-none @error('description') border-red-500 @enderror">{{ old('description') }}</textarea>
                        @error('description')<p class="text-red-400 text-xs mt-1">{{ $message }}</p>@enderror
                    </div>

                    <button type="submit" class="w-full bg-brand-blue hover:bg-brand-blue-hover text-white font-semibold py-4 rounded-xl transition font-inter">
                        Send Message →
                    </button>
                </form>
            </div>

            {{-- CONTACT INFO --}}
            <div class="lg:col-span-2 space-y-5" data-aos="fade-left">
                <div class="bg-brand-card border border-white/5 rounded-2xl p-8 space-y-6">
                    <h3 class="font-playfair text-xl font-semibold text-white">Contact Details</h3>
                    <div class="space-y-4 font-inter text-sm">
                        <div class="flex items-start gap-3">
                            <span class="text-brand-blue mt-0.5">✉</span>
                            <div>
                                <p class="text-brand-muted text-xs mb-0.5">Email</p>
                                <a href="mailto:codemiritexpert@gmail.com" class="text-white hover:text-brand-blue transition">codemiritexpert@gmail.com</a>
                            </div>
                        </div>
                        <div class="flex items-start gap-3">
                            <span class="text-brand-blue mt-0.5">📞</span>
                            <div>
                                <p class="text-brand-muted text-xs mb-0.5">Phone / WhatsApp</p>
                                <a href="tel:+923268634963" class="text-white hover:text-brand-blue transition">+92 326 8634963</a>
                            </div>
                        </div>
                        <div class="flex items-start gap-3">
                            <span class="text-brand-blue mt-0.5">📍</span>
                            <div>
                                <p class="text-brand-muted text-xs mb-0.5">Location</p>
                                <p class="text-white">Faisalabad, Punjab, Pakistan</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-3">
                            <span class="text-brand-blue mt-0.5">🕐</span>
                            <div>
                                <p class="text-brand-muted text-xs mb-0.5">Working Hours</p>
                                <p class="text-white">Mon–Sat · 9AM–10PM PKT</p>
                            </div>
                        </div>
                    </div>
                    <div class="pt-4 border-t border-white/5">
                        <p class="font-grotesk text-xs text-brand-muted uppercase tracking-wider mb-3">Follow Us</p>
                        <div class="flex gap-3 flex-wrap">
                            <a href="https://www.linkedin.com/company/codemir-it-experts/" target="_blank" aria-label="LinkedIn" class="w-9 h-9 bg-brand-black border border-white/10 rounded-lg flex items-center justify-center text-brand-muted hover:text-brand-blue hover:border-brand-blue transition">
                                <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24"><path d="M19 3a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h14m-.5 15.5v-5.3a3.26 3.26 0 0 0-3.26-3.26c-.85 0-1.84.52-2.32 1.3v-1.11h-2.79v8.37h2.79v-4.93c0-.77.62-1.4 1.39-1.4a1.4 1.4 0 0 1 1.4 1.4v4.93h2.79M6.88 8.56a1.68 1.68 0 0 0 1.68-1.68c0-.93-.75-1.69-1.68-1.69a1.69 1.69 0 0 0-1.69 1.69c0 .93.76 1.68 1.69 1.68m1.39 9.94v-8.37H5.5v8.37h2.77z"/></svg>
                            </a>
                            <a href="https://www.instagram.com/codemiritexpert/" target="_blank" aria-label="Instagram" class="w-9 h-9 bg-brand-black border border-white/10 rounded-lg flex items-center justify-center text-brand-muted hover:text-brand-blue hover:border-brand-blue transition">
                                <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
                            </a>
                            <a href="https://www.facebook.com/profile.php?id=61564927201888" target="_blank" aria-label="Facebook" class="w-9 h-9 bg-brand-black border border-white/10 rounded-lg flex items-center justify-center text-brand-muted hover:text-brand-blue hover:border-brand-blue transition">
                                <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24"><path d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z"/></svg>
                            </a>
                            <a href="https://github.com/ZaidShahid15" target="_blank" aria-label="GitHub" class="w-9 h-9 bg-brand-black border border-white/10 rounded-lg flex items-center justify-center text-brand-muted hover:text-brand-blue hover:border-brand-blue transition">
                                <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24"><path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/></svg>
                            </a>
                        </div>
                    </div>
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

        <div class="grid grid-cols-1 md:grid-cols-4 gap-8 relative">
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

{{-- SERVICE COMMITMENT / PROMISE BANNER --}}
<section class="py-24 bg-brand-dark border-t border-white/5 relative overflow-hidden">
    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[500px] h-[500px] bg-brand-blue/5 rounded-full filter blur-[120px] pointer-events-none"></div>
    <div class="max-w-4xl mx-auto px-6 relative z-10 text-center" data-aos="fade-up">
        <span class="font-grotesk text-brand-blue text-xs tracking-[0.25em] uppercase block mb-3 font-semibold">Our Guarantee</span>
        <h2 class="font-playfair text-3xl md:text-4xl font-bold text-white mb-6">Our Service Commitment</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mt-12 text-left">
            <div class="bg-brand-card/60 backdrop-blur-sm border border-white/5 p-8 rounded-2xl hover:border-brand-blue/20 transition-all duration-300">
                <div class="text-brand-blue text-3xl mb-4">⏱</div>
                <h4 class="font-grotesk text-lg font-semibold text-white mb-2">24-Hour Response</h4>
                <p class="font-inter text-brand-muted text-sm leading-relaxed">No generic bots. We review your details and respond with a personalized technical breakdown within 24 hours.</p>
            </div>
            <div class="bg-brand-card/60 backdrop-blur-sm border border-white/5 p-8 rounded-2xl hover:border-brand-blue/20 transition-all duration-300">
                <div class="text-brand-blue text-3xl mb-4">🛠</div>
                <h4 class="font-grotesk text-lg font-semibold text-white mb-2">100% Hand-Coded</h4>
                <p class="font-inter text-brand-muted text-sm leading-relaxed">No templates. We build custom Laravel & Tailwind solutions tailored strictly to your operational goals.</p>
            </div>
            <div class="bg-brand-card/60 backdrop-blur-sm border border-white/5 p-8 rounded-2xl hover:border-brand-blue/20 transition-all duration-300">
                <div class="text-brand-blue text-3xl mb-4">🔒</div>
                <h4 class="font-grotesk text-lg font-semibold text-white mb-2">Transparent Pricing</h4>
                <p class="font-inter text-brand-muted text-sm leading-relaxed">Detailed, milestone-based quotes. Zero hidden fees, clear scope of work, and absolute IP ownership.</p>
            </div>
        </div>
    </div>
</section>

@include('components.faq')
@endsection
