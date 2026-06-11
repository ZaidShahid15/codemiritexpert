@extends('layouts.app')
@section('title', 'About Us | Codemir IT Experts')

@section('content')
@include('components.page-hero', [
    'eyebrow'     => 'Who We Are',
    'title'       => 'Building Systems<br><span class="text-brand-blue">That Scale</span>',
    'description' => 'A passionate team of developers from Faisalabad, Pakistan, delivering top-tier web systems and AI tools to founders and SMBs across the globe.',
    'cta1Label'   => 'Work With Us',
    'cta1Route'   => 'contact',
    'cta2Label'   => 'See Our Work',
    'cta2Route'   => 'work',
    'badges'      => ['Founded in Faisalabad', 'Pakistan-Based & Global', '5+ Years Experience', 'Trusted by 20+ Clients'],
])

<section class="py-24 bg-brand-black min-h-screen">
    <div class="max-w-4xl mx-auto px-6">
        <div class="bg-brand-card border border-white/5 rounded-3xl p-10 md:p-14 mb-16" data-aos="fade-up">
            <h2 class="font-playfair text-3xl font-bold text-white mb-6">Our Core Values</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                @foreach($values as $value)
                <div>
                    <div class="w-12 h-12 bg-brand-blue/10 rounded-xl flex items-center justify-center mb-5">
                        @if($value['icon'] === 'lightbulb')
                        <svg class="w-6 h-6 text-brand-blue" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 18v-5.25m0 0a6.01 6.01 0 0 0 1.5-.189m-1.5.189a6.01 6.01 0 0 1-1.5-.189m3.75 7.478a12.06 12.06 0 0 1-4.5 0m3.75 2.383a14.406 14.406 0 0 1-3 0M14.25 18v-.192c0-.983.658-1.823 1.508-2.316a7.5 7.5 0 1 0-7.517 0c.85.493 1.509 1.333 1.509 2.316V18" />
                        </svg>
                        @elseif($value['icon'] === 'target')
                        <svg class="w-6 h-6 text-brand-blue" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M7.5 3.75H6A2.25 2.25 0 0 0 3.75 6v1.5M16.5 3.75H18A2.25 2.25 0 0 1 20.25 6v1.5m0 9V18A2.25 2.25 0 0 1 18 20.25h-1.5m-9 0H6A2.25 2.25 0 0 1 3.75 18v-1.5" />
                            <circle cx="12" cy="12" r="6" />
                            <circle cx="12" cy="12" r="2.5" />
                        </svg>
                        @elseif($value['icon'] === 'handshake')
                        <svg class="w-6 h-6 text-brand-blue" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 19.128a9.38 9.38 0 0 0 2.625.372 9.337 9.337 0 0 0 4.121-.952 4.125 4.125 0 0 0-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 0 1 8.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0 1 11.964-3.07M12 6.375a3.375 3.375 0 1 1-6.75 0 3.375 3.375 0 0 1 6.75 0Zm8.25 2.25a2.625 2.625 0 1 1-5.25 0 2.625 2.625 0 0 1 5.25 0Z" />
                        </svg>
                        @else
                        <span class="text-brand-blue text-xl">◈</span>
                        @endif
                    </div>
                    <h3 class="font-playfair text-xl font-semibold text-white mb-3">{{ $value['title'] }}</h3>
                    <p class="font-inter text-brand-muted text-sm leading-relaxed">{{ $value['desc'] }}</p>
                </div>
                @endforeach
            </div>
        </div>

        <div class="mb-16" data-aos="fade-up">
            <h2 class="font-playfair text-3xl font-bold text-white mb-8 text-center">Technologies We Master</h2>
            <div class="flex flex-wrap justify-center gap-4">
                @foreach($technologies as $tech)
                    <span class="bg-brand-dark border border-white/5 text-white font-inter text-sm px-6 py-3 rounded-full hover:border-brand-blue/50 transition cursor-default">{{ $tech }}</span>
                @endforeach
            </div>
        </div>
    </div>
</section>

@include('components.faq')
@endsection
