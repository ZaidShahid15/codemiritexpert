@extends('layouts.app')
@section('title', 'Privacy Policy | Codemir IT Experts')
@section('meta_description', 'Privacy Policy for Codemir IT Experts. Learn how we collect, use, protect, and manage your data when working with us.')

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
            Legal & Compliance
        </span>
        <h1 class="font-playfair text-4xl md:text-5xl font-bold leading-tight text-white mb-4">
            Privacy Policy
        </h1>
        <p class="font-inter text-brand-muted text-sm md:text-base max-w-xl mx-auto">
            Last updated: June 19, 2026. Your privacy and trust are paramount to us.
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
                        <span class="text-brand-blue">01.</span> Introduction
                    </h2>
                    <p>
                        Welcome to Codemir IT Experts. We are dedicated to respecting and protecting the privacy of our clients, website visitors, and partners. This Privacy Policy details the types of information we collect, how we handle, process, and secure that data, and the options available to you regarding our collection and use of your information.
                    </p>
                    <p>
                        By accessing our website (<a href="{{ route('home') }}" class="text-brand-blue hover:underline">codemiritexpert.com</a>) and utilizing our custom web development or AI integration services, you acknowledge that you agree to the terms described in this policy.
                    </p>
                </div>

                {{-- Section 2 --}}
                <div class="space-y-4">
                    <h2 class="font-playfair text-2xl font-bold text-white flex items-center gap-3">
                        <span class="text-brand-blue">02.</span> Information We Collect
                    </h2>
                    <p>
                        We collect information to provide high-quality services, custom solutions, and communication channels for our clients. The details we gather fall into two categories:
                    </p>
                    <ul class="space-y-3 pl-4">
                        <li class="flex items-start gap-3">
                            <span class="text-brand-blue mt-1">◈</span>
                            <div>
                                <strong class="text-white">Information You Provide Voluntarily:</strong> 
                                When you contact us via our quote form, email, or messaging services, you may provide your full name, email address, phone number, budget range, and project details.
                            </div>
                        </li>
                        <li class="flex items-start gap-3">
                            <span class="text-brand-blue mt-1">◈</span>
                            <div>
                                <strong class="text-white">Automated Usage Data:</strong> 
                                We gather non-identifying technical data automatically, such as IP addresses, browser types, screen resolutions, system configurations, referral pages, and time spent on specific parts of our site.
                            </div>
                        </li>
                    </ul>
                </div>

                {{-- Section 3 --}}
                <div class="space-y-4">
                    <h2 class="font-playfair text-2xl font-bold text-white flex items-center gap-3">
                        <span class="text-brand-blue">03.</span> How We Use Your Data
                    </h2>
                    <p>
                        Your information is used solely to deliver, enhance, and secure our systems and interaction channels:
                    </p>
                    <ul class="space-y-3 pl-4">
                        <li class="flex items-start gap-3">
                            <span class="text-brand-blue mt-1">◈</span>
                            <span>To reply to customer support requests and project quote inquiries within 24 hours.</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <span class="text-brand-blue mt-1">◈</span>
                            <span>To design, code, and deploy the specific systems and AI tool integrations requested by you.</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <span class="text-brand-blue mt-1">◈</span>
                            <span>To monitor, optimize, and diagnose security issues or performance bugs on our servers.</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <span class="text-brand-blue mt-1">◈</span>
                            <span>To comply with legal, regulatory, or system security obligations.</span>
                        </li>
                    </ul>
                </div>

                {{-- Section 4 --}}
                <div class="space-y-4">
                    <h2 class="font-playfair text-2xl font-bold text-white flex items-center gap-3">
                        <span class="text-brand-blue">04.</span> Data Security & Storage
                    </h2>
                    <p>
                        We employ industry-standard administrative, physical, and digital security measures to safeguard your database files and correspondence against unauthorized access, disclosure, alteration, or destruction. We utilize SSL/TLS protocols, strict host firewalls, and credential hashing.
                    </p>
                    <p>
                        Our hosting environment and servers are regularly updated. However, no transmission over the Internet or electronic storage can be guaranteed to be 100% secure. While we strive to use commercially acceptable means to protect your personal details, we cannot guarantee absolute security.
                    </p>
                </div>

                {{-- Section 5 --}}
                <div class="space-y-4">
                    <h2 class="font-playfair text-2xl font-bold text-white flex items-center gap-3">
                        <span class="text-brand-blue">05.</span> Third-Party Services & APIs
                    </h2>
                    <p>
                        To build functional websites and AI integrations, we interface with secure third-party applications and SDKs, including:
                    </p>
                    <ul class="space-y-3 pl-4">
                        <li class="flex items-start gap-3">
                            <span class="text-brand-blue mt-1">◈</span>
                            <div>
                                <strong class="text-white">OpenAI / Anthropic APIs:</strong> 
                                We connect smart LLM frameworks securely without letting these providers use client prompt history or private vector database records for training public models.
                            </div>
                        </li>
                        <li class="flex items-start gap-3">
                            <span class="text-brand-blue mt-1">◈</span>
                            <div>
                                <strong class="text-white">Stripe / PayPal Payment Gateways:</strong> 
                                All transactional data is direct and tokenized. We never store or hold raw credit card details on our local database files.
                            </div>
                        </li>
                    </ul>
                </div>

                {{-- Section 6 --}}
                <div class="space-y-4">
                    <h2 class="font-playfair text-2xl font-bold text-white flex items-center gap-3">
                        <span class="text-brand-blue">06.</span> Your Data Rights
                    </h2>
                    <p>
                        Depending on your location, you have the right to request access to the data we hold, ask that we correct errors in your details, or request that we delete your data from our active records. If you wish to trigger any of these rights, please email us directly.
                    </p>
                </div>

                {{-- Section 7 --}}
                <div class="space-y-4 pt-6 border-t border-white/5">
                    <h2 class="font-playfair text-2xl font-bold text-white flex items-center gap-3">
                        <span class="text-brand-blue">07.</span> Contact Information
                    </h2>
                    <p>
                        If you have questions about this Privacy Policy, please contact our support department:
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
