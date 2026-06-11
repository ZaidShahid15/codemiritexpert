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

@include('components.faq')
@endsection
