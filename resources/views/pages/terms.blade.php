@extends('layouts.app')
@section('title', 'Terms and Conditions | Codemir IT Experts')
@section('meta_description', 'Terms and Conditions for working with Codemir IT Experts. Read our policies regarding intellectual property, payments, and client project delivery.')

@section('content')
<section class="relative min-h-[50vh] flex items-center justify-center overflow-hidden bg-brand-black pt-16 pb-12">
    {{-- Animated grid background --}}
    <div class="absolute inset-0 opacity-10">
        <div class="absolute inset-0" style="background-image: linear-gradient(rgba(30,107,255,0.4) 1px, transparent 1px), linear-gradient(90deg, rgba(30,107,255,0.4) 1px, transparent 1px); background-size: 60px 60px;"></div>
    </div>
    {{-- Large center glow --}}
    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[600px] h-[600px] bg-brand-blue/10 rounded-full blur-3xl pointer-events-none"></div>

    <div class="relative z-10 max-w-4xl mx-auto px-6 text-center">
        <span class="inline-block font-grotesk text-brand-blue text-xs tracking-widest uppercase mb-4 border border-brand-blue/30 px-4 py-1.5 rounded-full">
            Legal Agreement
        </span>
        <h1 class="font-playfair text-4xl md:text-5xl font-bold leading-tight text-white mb-4">
            Terms & Conditions
        </h1>
        <p class="font-inter text-brand-muted text-sm md:text-base max-w-xl mx-auto">
            Last updated: June 19, 2026. Please read these terms carefully before starting a project with us.
        </p>
    </div>
</section>

<section class="py-16 bg-brand-black min-h-screen relative">
    <div class="absolute top-1/4 left-1/10 w-96 h-96 bg-brand-blue/5 rounded-full filter blur-[100px] pointer-events-none"></div>
    <div class="absolute bottom-1/4 right-1/10 w-96 h-96 bg-purple-500/5 rounded-full filter blur-[100px] pointer-events-none"></div>

    <div class="max-w-4xl mx-auto px-6 relative z-10">
        <div class="bg-brand-card border border-white/5 rounded-3xl p-8 md:p-12 shadow-2xl backdrop-blur-md" data-aos="fade-up">
            <div class="prose prose-invert max-w-none font-inter text-brand-muted text-sm md:text-base leading-relaxed space-y-8">
                
                {{-- Section 1 --}}
                <div class="space-y-4">
                    <h2 class="font-playfair text-2xl font-bold text-white flex items-center gap-3">
                        <span class="text-brand-blue">01.</span> Agreement to Terms
                    </h2>
                    <p>
                        These Terms and Conditions govern the contract between Codemir IT Experts ("we", "us", or "our") and our clients, or users of our website. By using our website or signing a project scope with us, you agree to comply with and be bound by these terms. If you disagree with any part of these terms, you must not use our website or services.
                    </p>
                </div>

                {{-- Section 2 --}}
                <div class="space-y-4">
                    <h2 class="font-playfair text-2xl font-bold text-white flex items-center gap-3">
                        <span class="text-brand-blue">02.</span> Scope of Services
                    </h2>
                    <p>
                        We build custom Laravel web systems, SaaS platforms, API configurations, and custom generative AI tools. Detailed milestones and deliverables will be explicitly defined in each client's specific statement of work (SOW). Any additional requests or scope modifications made after project launch are subject to extra estimates.
                    </p>
                </div>

                {{-- Section 3 --}}
                <div class="space-y-4">
                    <h2 class="font-playfair text-2xl font-bold text-white flex items-center gap-3">
                        <span class="text-brand-blue">03.</span> Payments & Deliveries
                    </h2>
                    <p>
                        Unless stated otherwise in your custom invoice or SOW, our standard billing terms require:
                    </p>
                    <ul class="space-y-3 pl-4">
                        <li class="flex items-start gap-3">
                            <span class="text-brand-blue mt-1">◈</span>
                            <span>A 50% upfront deposit before we commence any layout, design, or database architecture work.</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <span class="text-brand-blue mt-1">◈</span>
                            <span>The remaining balance (50%) due upon project completion, final review, and deployment to the client's live servers.</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <span class="text-brand-blue mt-1">◈</span>
                            <span>Custom billing milestones may be configured for larger projects spanning over 8 weeks.</span>
                        </li>
                    </ul>
                </div>

                {{-- Section 4 --}}
                <div class="space-y-4">
                    <h2 class="font-playfair text-2xl font-bold text-white flex items-center gap-3">
                        <span class="text-brand-blue">04.</span> Intellectual Property & IP Ownership
                    </h2>
                    <p>
                        Upon receipt of full payment, Codemir IT Experts assigns all rights, titles, and interests in the custom code, design system layouts, and database schemas created specifically for the project to the client. 
                    </p>
                    <p>
                        We retain the right to showcase screenshots, general workflow animations, and public results of the project in our portfolio, unless a non-disclosure agreement (NDA) has been explicitly executed beforehand.
                    </p>
                </div>

                {{-- Section 5 --}}
                <div class="space-y-4">
                    <h2 class="font-playfair text-2xl font-bold text-white flex items-center gap-3">
                        <span class="text-brand-blue">05.</span> Customer System Accounts & Access
                    </h2>
                    <p>
                        To perform development tasks, write database queries, or integrate third-party APIs (Stripe, OpenAI, AWS), clients must provide access credentials to development sandboxes or designated servers. 
                    </p>
                    <p>
                        Clients are solely responsible for securing their live master credentials, and we advise changing all security keys once handoff is finalized.
                    </p>
                </div>

                {{-- Section 6 --}}
                <div class="space-y-4">
                    <h2 class="font-playfair text-2xl font-bold text-white flex items-center gap-3">
                        <span class="text-brand-blue">06.</span> Warranties & Liability Limitation
                    </h2>
                    <p>
                        Our code and systems are built using lead programming standards. We verify compatibility on main browsers at the time of delivery. However, we do not warrant that our systems will run uninterrupted or error-free forever, as third-party APIs, web browsers, or server environments continuously change.
                    </p>
                    <p>
                        In no event shall Codemir IT Experts be liable for any indirect, consequential, special, or punitive damages (including loss of profits, records, or operations) arising out of the use or inability to use the custom software we build.
                    </p>
                </div>

                {{-- Section 7 --}}
                <div class="space-y-4 pt-6 border-t border-white/5">
                    <h2 class="font-playfair text-2xl font-bold text-white flex items-center gap-3">
                        <span class="text-brand-blue">07.</span> Contact & Governing Law
                    </h2>
                    <p>
                        These terms shall be governed by and construed in accordance with the laws of Punjab, Pakistan. Any legal dispute arising under these terms shall be subject to the courts of Faisalabad.
                    </p>
                    <p class="mt-4">
                        If you have questions regarding these terms, please contact:
                    </p>
                    <div class="bg-brand-black border border-white/10 rounded-2xl p-6 space-y-3 mt-4">
                        <p class="text-white font-semibold">Codemir IT Experts</p>
                        <p>Faisalabad, Punjab, Pakistan</p>
                        <p>Email: <a href="mailto:codemiritexpert@gmail.com" class="text-brand-blue hover:underline font-semibold">codemiritexpert@gmail.com</a></p>
                        <p>WhatsApp: <a href="tel:+923268634963" class="text-brand-blue hover:underline font-semibold">+92 326 8634963</a></p>
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

@include('components.faq')
@endsection
