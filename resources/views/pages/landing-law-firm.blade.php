@extends('layouts.app')
@section('title', 'Law Firm Website Development | Codemir IT Experts')
@section('meta_description', 'Custom law firm website development for attorneys in US, UK & Australia. Mobile-friendly, high-converting consultation forms & fast load times.')

@section('structured_data')
<script type="application/ld+json">
{
    "@@context": "https://schema.org",
    "@@type": "BreadcrumbList",
    "itemListElement": [
        {
            "@@type": "ListItem",
            "position": 1,
            "name": "Home",
            "item": "{{ route('home') }}"
        },
        {
            "@@type": "ListItem",
            "position": 2,
            "name": "Law Firm Website Development",
            "item": "{{ rtrim(config('app.url'), '/') . request()->getPathInfo() }}"
        }
    ]
}
</script>
<script type="application/ld+json">
{
    "@@context": "https://schema.org",
    "@@type": "Service",
    "name": "Law Firm Website Development",
    "description": "Custom law firm website development for attorneys and legal practices. Hand-coded in Laravel, mobile-first, sub-second speeds, and high-converting consultation forms.",
    "provider": {
        "@@type": "Organization",
        "name": "Codemir IT Experts",
        "url": "https://codemiritexpert.online"
    },
    "areaServed": ["United States", "United Kingdom", "Australia"]
}
</script>
<script type="application/ld+json">
{
    "@@context": "https://schema.org",
    "@@type": "FAQPage",
    "mainEntity": [
        {
            "@@type": "Question",
            "name": "How does a custom law firm website help attract higher-value clients?",
            "acceptedAnswer": {
                "@@type": "Answer",
                "text": "A custom law firm website loads in under a second, projects authoritative prestige, and guides prospective clients straight to a secure consultation intake form without confusing menus."
            }
        },
        {
            "@@type": "Question",
            "name": "Can our website connect to Clio, PracticePanther, or our legal CRM?",
            "acceptedAnswer": {
                "@@type": "Answer",
                "text": "Yes. We can connect your website directly to Clio, LawVu, PracticePanther, or custom CRM databases so consultation leads automatically sync to your attorneys."
            }
        },
        {
            "@@type": "Question",
            "name": "How do you handle client confidentiality and website security?",
            "acceptedAnswer": {
                "@@type": "Answer",
                "text": "We build with hand-coded Laravel rather than vulnerable WordPress plugins. All consultation submissions use end-to-end SSL/TLS encryption, CSRF protection, and sanitized database handlers."
            }
        },
        {
            "@@type": "Question",
            "name": "Is the website optimized for local attorney searches (SEO)?",
            "acceptedAnswer": {
                "@@type": "Answer",
                "text": "Yes. We structure attorney bio pages, practice area hierarchies, and legal service schema.org tags to maximize visibility for local and commercial legal queries across the US, UK, and Australia."
            }
        },
        {
            "@@type": "Question",
            "name": "How long does development take from proposal to launch?",
            "acceptedAnswer": {
                "@@type": "Answer",
                "text": "A standard boutique law firm website is typically designed, developed, and launched within 3 to 5 weeks with fixed milestone deliverables."
            }
        }
    ]
}
</script>
@endsection

@section('content')

{{-- HERO --}}
<section class="relative min-h-[80vh] flex items-center justify-center overflow-hidden bg-brand-black py-20 lg:py-24">
    {{-- Animated grid background --}}
    <div class="absolute inset-0 opacity-10">
        <div class="absolute inset-0" style="background-image: linear-gradient(rgba(30,107,255,0.3) 1px, transparent 1px), linear-gradient(90deg, rgba(30,107,255,0.3) 1px, transparent 1px); background-size: 60px 60px;"></div>
    </div>
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
                    <span class="text-white">Law Firm Website Development</span>
                </div>

                <div class="w-16 h-16 bg-brand-blue/10 border border-brand-blue/20 rounded-2xl flex items-center justify-center mb-6 text-2xl">
                    ⚖️
                </div>

                <h1 class="font-playfair text-4xl md:text-5xl lg:text-6xl font-bold leading-tight text-white mb-6">
                    Law Firm Website Development<span class="text-brand-blue">.</span>
                </h1>

                <p class="font-inter text-brand-muted text-base md:text-lg leading-relaxed mb-8 max-w-xl">
                    Bespoke, hand-coded law firm websites engineered for attorneys, partners, and boutique legal practices across the US, UK, and Australia. Turn search traffic into high-value consultation inquiries with lightning speed and verified prestige.
                </p>

                <div class="flex flex-wrap gap-2">
                    @foreach(['PHP Laravel', 'Practice Area Silos', 'Attorney Directories', 'Sub-Second Speeds', 'Clio/CRM Integration', 'SEO Schema'] as $tech)
                    <span class="bg-brand-card border border-white/10 text-brand-muted font-grotesk text-xs px-4 py-1.5 rounded-full hover:border-brand-blue/40 hover:text-white transition">
                        {{ $tech }}
                    </span>
                    @endforeach
                </div>
            </div>

            {{-- Right Side: Form --}}
            <div class="lg:col-span-5" data-aos="fade-left">
                <div class="bg-brand-card border border-white/5 rounded-3xl p-8 lg:p-10 relative overflow-hidden shadow-2xl shadow-brand-black/50">
                    <div class="absolute -top-24 -right-24 w-48 h-48 bg-brand-blue/10 rounded-full blur-2xl pointer-events-none"></div>

                    <h3 class="font-playfair text-2xl font-bold text-white mb-2 text-center">Request a Legal Website Quote</h3>
                    <p class="font-inter text-brand-muted text-xs text-center mb-6">Confidential proposal & timeline delivered within 24 hours.</p>

                    @if(session('success'))
                    <div class="mb-6 bg-green-500/10 border border-green-500/30 text-green-400 rounded-xl px-4 py-3 text-center text-sm font-inter">
                        {{ session('success') }}
                    </div>
                    @endif

                    <form action="{{ route('contact.send') }}" method="POST" class="space-y-4">
                        @csrf
                        <input type="hidden" name="phone" value="">
                        <input type="hidden" name="budget" value="$1000–$3000">
                        <input type="hidden" name="service" value="Website">

                        <div>
                            <label class="font-grotesk text-xs text-brand-muted uppercase tracking-wider block mb-1.5 font-medium">Your Name *</label>
                            <input type="text" name="name" value="{{ old('name') }}" placeholder="Attorney John Smith" required
                                   class="w-full bg-brand-black border border-white/10 focus:border-brand-blue rounded-xl px-4 py-3 text-white font-inter text-sm outline-none transition @error('name') border-red-500 @enderror">
                            @error('name')<p class="text-red-400 text-xs mt-1">{{ $message }}</p>@enderror
                        </div>

                        <div>
                            <label class="font-grotesk text-xs text-brand-muted uppercase tracking-wider block mb-1.5 font-medium">Work Email *</label>
                            <input type="email" name="email" value="{{ old('email') }}" placeholder="john@smithlaw.com" required
                                   class="w-full bg-brand-black border border-white/10 focus:border-brand-blue rounded-xl px-4 py-3 text-white font-inter text-sm outline-none transition @error('email') border-red-500 @enderror">
                            @error('email')<p class="text-red-400 text-xs mt-1">{{ $message }}</p>@enderror
                        </div>

                        <div>
                            <label class="font-grotesk text-xs text-brand-muted uppercase tracking-wider block mb-1.5 font-medium">Practice Goals &amp; Timeline *</label>
                            <textarea name="description" rows="3" placeholder="Tell us about your practice areas, current site issues, and timeline..." required
                                      class="w-full bg-brand-black border border-white/10 focus:border-brand-blue rounded-xl px-4 py-3 text-white font-inter text-sm outline-none transition resize-none @error('description') border-red-500 @enderror">{{ old('description') }}</textarea>
                            @error('description')<p class="text-red-400 text-xs mt-1">{{ $message }}</p>@enderror
                        </div>

                        <button type="submit" class="w-full bg-brand-blue hover:bg-brand-blue-hover text-white font-semibold py-4 rounded-xl transition-all duration-200 text-sm font-inter shadow-lg shadow-brand-blue/25 hover:shadow-brand-blue/40 hover:-translate-y-0.5 mt-2">
                            Request Confidential Proposal →
                        </button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</section>

{{-- PROBLEM & SOLUTION --}}
<section class="py-20 bg-brand-dark border-t border-white/5">
    <div class="max-w-6xl mx-auto px-6">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-10 items-stretch">
            {{-- Problem --}}
            <div class="bg-brand-card/80 border border-red-500/20 rounded-3xl p-8 md:p-10 flex flex-col justify-between shadow-xl" data-aos="fade-right">
                <div>
                    <span class="inline-block font-grotesk text-xs uppercase tracking-wider text-red-400 font-semibold mb-3 bg-red-500/10 px-3 py-1 rounded-full">The Problem</span>
                    <h2 class="font-playfair text-2xl md:text-3xl font-bold text-white mb-4">Why Most Law Firm Websites Fail to Win Clients</h2>
                    <ul class="space-y-4 font-inter text-brand-muted text-sm leading-relaxed">
                        <li class="flex items-start gap-3">
                            <span class="text-red-400 text-base mt-0.5">✕</span>
                            <span><strong>Slow, Bloated Templates:</strong> Heavy WordPress themes significantly slow loading, causing urgent clients to click back to competing attorneys.</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <span class="text-red-400 text-base mt-0.5">✕</span>
                            <span><strong>Poor Mobile Usability:</strong> Many legal searches happen on phones, yet most law firm sites hide phone numbers and have cumbersome forms.</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <span class="text-red-400 text-base mt-0.5">✕</span>
                            <span><strong>No Direct Way to Book:</strong> Complicated menus force clients through generic contact forms with zero automated follow-up.</span>
                        </li>
                    </ul>
                </div>
            </div>

            {{-- Solution --}}
            <div class="bg-brand-card/80 border border-brand-blue/30 rounded-3xl p-8 md:p-10 flex flex-col justify-between shadow-xl" data-aos="fade-left">
                <div>
                    <span class="inline-block font-grotesk text-xs uppercase tracking-wider text-brand-blue font-semibold mb-3 bg-brand-blue/10 px-3 py-1 rounded-full">Our Solution</span>
                    <h2 class="font-playfair text-2xl md:text-3xl font-bold text-white mb-4">Hand-Coded Laravel Websites Built for Prestige &amp; Intake</h2>
                    <ul class="space-y-4 font-inter text-brand-muted text-sm leading-relaxed">
                        <li class="flex items-start gap-3">
                            <span class="text-brand-blue text-base mt-0.5">✓</span>
                            <span><strong>Sub-Second Loading Speed:</strong> Clean Laravel Blade frontend delivers fast loading performance, maximizing Google Core Web Vitals and client retention.</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <span class="text-brand-blue text-base mt-0.5">✓</span>
                            <span><strong>Tappable Consultation Triggers:</strong> Prominent click-to-call bars and streamlined 30-second intake funnels capture clients instantly.</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <span class="text-brand-blue text-base mt-0.5">✓</span>
                            <span><strong>Bank-Grade Code Security:</strong> Hand-crafted architecture eliminates WordPress plugin vulnerabilities and protects sensitive client correspondence.</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- WHAT IS INCLUDED --}}
<section class="py-24 lg:py-28 bg-brand-black border-t border-white/5 scroll-mt-28">
    <div class="max-w-6xl mx-auto px-6">
        <div class="text-center mb-16" data-aos="fade-up">
            <span class="font-grotesk text-brand-blue text-sm uppercase tracking-widest font-semibold">Features &amp; Deliverables</span>
            <h2 class="font-playfair text-3xl md:text-4xl font-bold text-white mt-3">What Is Included in Our Law Firm Websites</h2>
            <p class="font-inter text-brand-muted mt-3 max-w-xl mx-auto text-sm">Everything required to establish digital authority and scale inbound client acquisition.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 lg:gap-8" data-aos="fade-up">
            <div class="bg-brand-card border border-white/5 rounded-2xl p-8 hover:border-brand-blue/40 transition-all duration-300 hover:-translate-y-1 h-full flex flex-col shadow-lg">
                <div class="w-14 h-14 bg-brand-blue/10 rounded-2xl flex items-center justify-center text-2xl mb-6">📱</div>
                <h3 class="font-playfair text-xl font-bold text-white mb-3">Fast Mobile-First Design</h3>
                <p class="font-inter text-brand-muted text-sm leading-relaxed flex-1">Engineered specifically for smartphone navigation so distressed clients find your credentials and representation details immediately.</p>
            </div>

            <div class="bg-brand-card border border-white/5 rounded-2xl p-8 hover:border-brand-blue/40 transition-all duration-300 hover:-translate-y-1 h-full flex flex-col shadow-lg">
                <div class="w-14 h-14 bg-brand-blue/10 rounded-2xl flex items-center justify-center text-2xl mb-6">📞</div>
                <h3 class="font-playfair text-xl font-bold text-white mb-3">Tappable Phone Number</h3>
                <p class="font-inter text-brand-muted text-sm leading-relaxed flex-1">Sticky mobile header with direct click-to-call functionality so clients facing urgent legal matters connect with your office in one tap.</p>
            </div>

            <div class="bg-brand-card border border-white/5 rounded-2xl p-8 hover:border-brand-blue/40 transition-all duration-300 hover:-translate-y-1 h-full flex flex-col shadow-lg">
                <div class="w-14 h-14 bg-brand-blue/10 rounded-2xl flex items-center justify-center text-2xl mb-6">📋</div>
                <h3 class="font-playfair text-xl font-bold text-white mb-3">Short Consultation Form</h3>
                <p class="font-inter text-brand-muted text-sm leading-relaxed flex-1">A friction-free, confidential intake funnel that qualifies prospect claims without overwhelming them with dozens of unnecessary fields.</p>
            </div>

            <div class="bg-brand-card border border-white/5 rounded-2xl p-8 hover:border-brand-blue/40 transition-all duration-300 hover:-translate-y-1 h-full flex flex-col shadow-lg">
                <div class="w-14 h-14 bg-brand-blue/10 rounded-2xl flex items-center justify-center text-2xl mb-6">⭐</div>
                <h3 class="font-playfair text-xl font-bold text-white mb-3">Proof, Reviews &amp; Results</h3>
                <p class="font-inter text-brand-muted text-sm leading-relaxed flex-1">Dedicated sections for past case settlements, client video testimonials, peer recognitions, and Google Business reviews.</p>
            </div>

            <div class="bg-brand-card border border-white/5 rounded-2xl p-8 hover:border-brand-blue/40 transition-all duration-300 hover:-translate-y-1 h-full flex flex-col shadow-lg">
                <div class="w-14 h-14 bg-brand-blue/10 rounded-2xl flex items-center justify-center text-2xl mb-6">🔍</div>
                <h3 class="font-playfair text-xl font-bold text-white mb-3">SEO-Ready Structure</h3>
                <p class="font-inter text-brand-muted text-sm leading-relaxed flex-1">Siloed practice area pages, localized legal schema markup, and canonical architecture designed to outrank local competing directories.</p>
            </div>

            <div class="bg-brand-card border border-white/5 rounded-2xl p-8 hover:border-brand-blue/40 transition-all duration-300 hover:-translate-y-1 h-full flex flex-col shadow-lg">
                <div class="w-14 h-14 bg-brand-blue/10 rounded-2xl flex items-center justify-center text-2xl mb-6">🔒</div>
                <h3 class="font-playfair text-xl font-bold text-white mb-3">CRM &amp; Intake Integration</h3>
                <p class="font-inter text-brand-muted text-sm leading-relaxed flex-1">Direct integration with Clio, PracticePanther, Lawmatics, or custom email workflows to notify your legal team the second a case is submitted.</p>
            </div>
        </div>

        {{-- RELATED CASE STUDY CALLOUT --}}
        <div class="mt-16 bg-gradient-to-r from-brand-blue/15 via-brand-card to-brand-card border border-brand-blue/30 rounded-3xl p-8 md:p-12 flex flex-col md:flex-row items-center justify-between gap-8 shadow-xl" data-aos="fade-up">
            <div class="space-y-2">
                <span class="font-grotesk text-xs uppercase tracking-wider text-brand-blue font-semibold block">Proven Client Results</span>
                <h3 class="font-playfair text-2xl md:text-3xl font-bold text-white">Case Study: International Law Firm Website</h3>
                <p class="font-inter text-brand-muted text-sm max-w-xl leading-relaxed">
                    Discover how we rebuilt an international boutique practice from an outdated WordPress template into a high-performance Laravel website, cutting page load to under 1.2s and boosting direct consultation inquiries by 30%.
                </p>
            </div>
            <a href="{{ route('work.detail', 'law-firm-website') }}" class="bg-brand-blue hover:bg-brand-blue-hover text-white text-sm font-semibold px-8 py-4 rounded-full transition-all duration-200 shrink-0 inline-flex items-center gap-2 shadow-lg shadow-brand-blue/20 hover:shadow-brand-blue/40 hover:-translate-y-0.5">
                <span>Read Full Case Study</span>
                <span>&rarr;</span>
            </a>
        </div>
    </div>
</section>
@include('partials.related-links')

{{-- FAQS --}}
<section class="py-20 bg-brand-dark border-t border-white/5">
    <div class="max-w-4xl mx-auto px-6">
        <div class="text-center mb-14" data-aos="fade-up">
            <span class="font-grotesk text-brand-blue text-sm uppercase tracking-widest font-semibold">Common Questions</span>
            <h2 class="font-playfair text-3xl md:text-4xl font-bold text-white mt-3 mb-4">Law Firm Website Development FAQs</h2>
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
                <div x-show="active === {{ $index }}" x-collapse x-cloak class="px-6 pb-6 pt-2 font-inter text-brand-muted text-sm leading-relaxed border-t border-white/5">
                    {{ $faq['answer'] }}
                </div>
            </div>
            @endforeach
        </div>

        {{-- BOTTOM CTA --}}
        <div class="text-center mt-20 md:mt-24 bg-gradient-to-r from-brand-blue/10 to-brand-black border border-brand-blue/20 rounded-3xl p-10 md:p-14 pb-14 md:pb-16" data-aos="fade-up">
            <h3 class="font-playfair text-2xl md:text-4xl font-bold text-white mb-3">Ready to Upgrade Your Law Firm's Online Presence?</h3>
            <p class="font-inter text-brand-muted text-sm md:text-base max-w-xl mx-auto mb-8">Let's build a fast, prestigious website that wins high-value legal clients for your firm.</p>
            <a href="{{ route('contact') }}" class="bg-brand-blue hover:bg-brand-blue-hover text-white font-semibold px-9 py-4 rounded-full transition-all duration-200 shadow-lg shadow-brand-blue/25 hover:shadow-brand-blue/40 hover:-translate-y-0.5 inline-block text-base mb-2">
                Start Your Project Today →
            </a>
        </div>
    </div>
</section>

@endsection
