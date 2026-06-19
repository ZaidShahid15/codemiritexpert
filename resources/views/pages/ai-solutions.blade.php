@extends('layouts.app')
@section('title', 'Futuristic AI Solutions | Codemir IT Experts')
@section('meta_description', 'Scale your business operations with custom-trained AI chatbots, autonomous workflow agents, voice assistants, and natural language data extraction pipelines.')

@section('content')
@include('components.page-hero', [
    'eyebrow'     => 'Artificial Intelligence',
    'title'       => 'Futuristic AI Solutions &<br><span class="text-brand-blue">Automation</span>',
    'description' => 'We integrate state-of-the-art LLMs, automated agents, and intelligent voice assistants to optimize your business operations and accelerate growth.',
    'cta1Label'   => 'Get Started',
    'cta1Route'   => 'contact',
    'cta2Label'   => 'See Our Work',
    'cta2Route'   => 'work',
    'badges'      => ['AI Chatbots', 'Autonomous Agents', 'Voice Assistants', 'Workflow Automation', 'Custom RAG Integrations'],
])

{{-- SOLUTIONS GRID --}}
<section class="py-24 bg-brand-black min-h-screen">
    <div class="max-w-7xl mx-auto px-6">
        <div class="text-center mb-16" data-aos="fade-up">
            <span class="font-grotesk text-brand-blue text-sm tracking-widest uppercase">Ecosystem Capabilities</span>
            <h2 class="font-playfair text-4xl md:text-5xl font-bold text-white mt-3">Futuristic AI Integrations</h2>
            <p class="font-inter text-brand-muted mt-4 max-w-2xl mx-auto">Explore how we integrate intelligence into your custom platforms to save hours of manual operations and delight users.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            
            {{-- AI Chatbots --}}
            <div data-aos="fade-up" data-aos-delay="0">
                <div class="bg-brand-card border border-white/5 rounded-2xl p-8 hover:border-brand-blue/40 transition group hover:-translate-y-1 duration-300 h-full flex flex-col justify-between">
                    <div>
                        <div class="w-14 h-14 bg-brand-blue/10 rounded-xl flex items-center justify-center mb-6 group-hover:bg-brand-blue/20 transition">
                            <svg class="w-7 h-7 text-brand-blue" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M8.625 12a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0H8.25m4.125 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0H12m4.125 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0h-.375M21 12c0 4.556-4.03 8.25-9 8.25a9.764 9.764 0 0 1-2.555-.337A5.972 5.972 0 0 1 5.41 20.97a5.969 5.969 0 0 1-.474-3.658C3.764 15.902 3 14.051 3 12c0-4.556 4.03-8.25 9-8.25s9 3.694 9 8.25Z"></path>
                            </svg>
                        </div>
                        <h3 class="font-playfair text-2xl font-semibold text-white mb-4">AI Chatbots</h3>
                        <p class="font-inter text-brand-muted text-sm leading-relaxed mb-6">Custom-trained customer service chatbots equipped with Retrieval-Augmented Generation (RAG) to dynamically answer inquiries based on your knowledge base.</p>
                    </div>
                    <ul class="space-y-2.5 font-inter text-xs text-brand-muted border-t border-white/5 pt-5">
                        <li class="flex items-center gap-2">✓ Trained on your catalog/PDFs</li>
                        <li class="flex items-center gap-2">✓ 24/7 autonomous support</li>
                        <li class="flex items-center gap-2">✓ Handover to human agents</li>
                    </ul>
                </div>
            </div>

            {{-- AI Agents --}}
            <div data-aos="fade-up" data-aos-delay="80">
                <div class="bg-brand-card border border-white/5 rounded-2xl p-8 hover:border-brand-blue/40 transition group hover:-translate-y-1 duration-300 h-full flex flex-col justify-between">
                    <div>
                        <div class="w-14 h-14 bg-brand-blue/10 rounded-xl flex items-center justify-center mb-6 group-hover:bg-brand-blue/20 transition">
                            <svg class="w-7 h-7 text-brand-blue" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 17.25v1.007a3 3 0 0 1-.879 2.122L7.5 21h9l-.621-.621A3 3 0 0 1 15 18.257V17.25m6-12V15a2.25 2.25 0 0 1-2.25 2.25H5.25A2.25 2.25 0 0 1 3 15V5.25m18 0A2.25 2.25 0 0 0 18.75 3H5.25A2.25 2.25 0 0 0 3 5.25m18 0V12a2.25 2.25 0 0 1-2.25 2.25H5.25A2.25 2.25 0 0 1 3 12V5.25"></path>
                            </svg>
                        </div>
                        <h3 class="font-playfair text-2xl font-semibold text-white mb-4">Autonomous Agents</h3>
                        <p class="font-inter text-brand-muted text-sm leading-relaxed mb-6">Intelligent software agents designed to run background processes, screen emails, structure business data, and coordinate tasks with minimal supervision.</p>
                    </div>
                    <ul class="space-y-2.5 font-inter text-xs text-brand-muted border-t border-white/5 pt-5">
                        <li class="flex items-center gap-2">✓ Automated email dispatch</li>
                        <li class="flex items-center gap-2">✓ Background research agents</li>
                        <li class="flex items-center gap-2">✓ Seamless CRM synchronization</li>
                    </ul>
                </div>
            </div>

            {{-- AI Voice Assistants --}}
            <div data-aos="fade-up" data-aos-delay="160">
                <div class="bg-brand-card border border-white/5 rounded-2xl p-8 hover:border-brand-blue/40 transition group hover:-translate-y-1 duration-300 h-full flex flex-col justify-between">
                    <div>
                        <div class="w-14 h-14 bg-brand-blue/10 rounded-xl flex items-center justify-center mb-6 group-hover:bg-brand-blue/20 transition">
                            <svg class="w-7 h-7 text-brand-blue" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 18.75a6 6 0 0 0 6-6v-1.5m-6 7.5a6 6 0 0 1-6-6v-1.5m6 7.5v3.75m-3.75 0h7.5M12 15.75a3 3 0 0 1-3-3V4.5a3 3 0 1 1 6 0v8.25a3 3 0 0 1-3 3Z"></path>
                            </svg>
                        </div>
                        <h3 class="font-playfair text-2xl font-semibold text-white mb-4">AI Voice Assistants</h3>
                        <p class="font-inter text-brand-muted text-sm leading-relaxed mb-6">Integrate natural, conversational phone assistants using Vapi or Retell to handle customer phone orders, book bookings, or conduct follow-up reminders.</p>
                    </div>
                    <ul class="space-y-2.5 font-inter text-xs text-brand-muted border-t border-white/5 pt-5">
                        <li class="flex items-center gap-2">✓ Inbound/Outbound call support</li>
                        <li class="flex items-center gap-2">✓ Natural voice, <250ms latency</li>
                        <li class="flex items-center gap-2">✓ Fully customizable phone numbers</li>
                    </ul>
                </div>
            </div>

            {{-- Workflow Automation --}}
            <div data-aos="fade-up" data-aos-delay="0">
                <div class="bg-brand-card border border-white/5 rounded-2xl p-8 hover:border-brand-blue/40 transition group hover:-translate-y-1 duration-300 h-full flex flex-col justify-between">
                    <div>
                        <div class="w-14 h-14 bg-brand-blue/10 rounded-xl flex items-center justify-center mb-6 group-hover:bg-brand-blue/20 transition">
                            <svg class="w-7 h-7 text-brand-blue" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 12c0-1.232-.046-2.453-.138-3.662a4.006 4.006 0 0 0-3.7-3.7 48.678 48.678 0 0 0-7.324 0 4.006 4.006 0 0 0-3.7 3.7c-.017.22-.032.441-.046.662M19.5 12l3-3m-3 3-3-3M3 12c0 1.232.046 2.453.138 3.662a4.006 4.006 0 0 0 3.7 3.7 48.656 48.656 0 0 0 7.324 0 4.006 4.006 0 0 0 3.7-3.7c.017-.22.032-.441.046-.662M3 12l-3 3m3-3 3 3"></path>
                            </svg>
                        </div>
                        <h3 class="font-playfair text-2xl font-semibold text-white mb-4">Workflow Automation</h3>
                        <p class="font-inter text-brand-muted text-sm leading-relaxed mb-6">Connect webhooks, databases, and AI endpoints to construct custom automations that take files, extract parameters, draft emails, and log reports automatically.</p>
                    </div>
                    <ul class="space-y-2.5 font-inter text-xs text-brand-muted border-t border-white/5 pt-5">
                        <li class="flex items-center gap-2">✓ Zapier & Make.com workflows</li>
                        <li class="flex items-center gap-2">✓ Custom API listeners</li>
                        <li class="flex items-center gap-2">✓ Automatic invoice generation</li>
                    </ul>
                </div>
            </div>

            {{-- Data Intelligence --}}
            <div data-aos="fade-up" data-aos-delay="80">
                <div class="bg-brand-card border border-white/5 rounded-2xl p-8 hover:border-brand-blue/40 transition group hover:-translate-y-1 duration-300 h-full flex flex-col justify-between">
                    <div>
                        <div class="w-14 h-14 bg-brand-blue/10 rounded-xl flex items-center justify-center mb-6 group-hover:bg-brand-blue/20 transition">
                            <svg class="w-7 h-7 text-brand-blue" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 0 0-3.375-3.375h-1.5A1.125 1.125 0 0 1 13.5 7.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 0 0-9-9Z"></path>
                            </svg>
                        </div>
                        <h3 class="font-playfair text-2xl font-semibold text-white mb-4">Data Intelligence</h3>
                        <p class="font-inter text-brand-muted text-sm leading-relaxed mb-6">Extract critical information, summarize lengthy documents, and classify huge datasets using state-of-the-art NLP patterns directly in your dashboards.</p>
                    </div>
                    <ul class="space-y-2.5 font-inter text-xs text-brand-muted border-t border-white/5 pt-5">
                        <li class="flex items-center gap-2">✓ Automatic PDF text extraction</li>
                        <li class="flex items-center gap-2">✓ Sentiment profiling widget</li>
                        <li class="flex items-center gap-2">✓ Structured database records</li>
                    </ul>
                </div>
            </div>

            {{-- Custom AI Models --}}
            <div data-aos="fade-up" data-aos-delay="160">
                <div class="bg-brand-card border border-white/5 rounded-2xl p-8 hover:border-brand-blue/40 transition group hover:-translate-y-1 duration-300 h-full flex flex-col justify-between">
                    <div>
                        <div class="w-14 h-14 bg-brand-blue/10 rounded-xl flex items-center justify-center mb-6 group-hover:bg-brand-blue/20 transition">
                            <svg class="w-7 h-7 text-brand-blue" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 3v18m9-9H3M12 5.25a6.75 6.75 0 0 1 6.75 6.75M12 5.25a6.75 6.75 0 0 0-6.75 6.75m12 0a6.75 6.75 0 0 1-6.75 6.75m6.75-6.75H12m-6.75 0a6.75 6.75 0 0 0 6.75 6.75m0 0V12"></path>
                            </svg>
                        </div>
                        <h3 class="font-playfair text-2xl font-semibold text-white mb-4">Custom AI Models</h3>
                        <p class="font-inter text-brand-muted text-sm leading-relaxed mb-6">Fine-tune open-source models (like Meta Llama) or build custom regression, classification, and scoring widgets tailored to your proprietary datasets.</p>
                    </div>
                    <ul class="space-y-2.5 font-inter text-xs text-brand-muted border-t border-white/5 pt-5">
                        <li class="flex items-center gap-2">✓ Private data hosting models</li>
                        <li class="flex items-center gap-2">✓ Fine-tuned custom weights</li>
                        <li class="flex items-center gap-2">✓ Fast, localized inference API</li>
                    </ul>
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

{{-- AI DELIVERY PROCESS --}}
<section class="py-24 bg-brand-black relative overflow-hidden">
    <div class="absolute top-1/4 left-1/10 w-96 h-96 bg-brand-blue/5 rounded-full filter blur-[100px] pointer-events-none"></div>
    <div class="absolute bottom-1/4 right-1/10 w-96 h-96 bg-purple-500/5 rounded-full filter blur-[100px] pointer-events-none"></div>

    <div class="max-w-6xl mx-auto px-6 relative z-10">
        <div class="text-center mb-20" data-aos="fade-up">
            <span class="font-grotesk text-brand-blue text-xs tracking-[0.2em] uppercase bg-brand-blue/10 px-4 py-2 rounded-full border border-brand-blue/20">AI Approach</span>
            <h2 class="font-playfair text-4xl md:text-5xl font-bold text-white mt-6">How We Build AI Solutions</h2>
            <p class="font-inter text-brand-muted text-base max-w-xl mx-auto mt-4">We follow a rigorous process to build secure, highly contextual, and fast AI integrations.</p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8 relative">
            <div class="absolute top-1/2 left-0 right-0 h-0.5 bg-gradient-to-r from-brand-blue/20 via-purple-500/20 to-brand-blue/20 -translate-y-12 hidden md:block z-0"></div>

            @foreach([
                [
                    'step' => '01', 
                    'title' => 'Data Audit',    
                    'desc' => 'We audit your databases, manuals, and documents to assess structure, quality, and integrations.',
                    'icon' => '<svg class="w-6 h-6 text-brand-blue" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>'
                ],
                [
                    'step' => '02', 
                    'title' => 'RAG Setup',       
                    'desc' => 'We structure embeddings, set up Vector DB layers (Pinecone/pgvector), and implement smart contextual queries.',
                    'icon' => '<svg class="w-6 h-6 text-brand-blue" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"/></svg>'
                ],
                [
                    'step' => '03', 
                    'title' => 'AI Engineering',  
                    'desc' => 'We connect OpenAI/Claude APIs, configure prompt structures, set rate-limits, and code the core system.',
                    'icon' => '<svg class="w-6 h-6 text-brand-blue" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"/></svg>'
                ],
                [
                    'step' => '04', 
                    'title' => 'Guardrails & Go',       
                    'desc' => 'We validate output quality, implement strict guardrails against prompt injection, optimize latency, and launch.',
                    'icon' => '<svg class="w-6 h-6 text-brand-blue" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>'
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

{{-- BOTTOM CTA BANNER --}}
<section class="py-24 bg-gradient-to-b from-brand-black to-brand-dark relative overflow-hidden">
    <div class="max-w-5xl mx-auto px-6 relative z-10 text-center" data-aos="fade-up">
        <div class="inline-flex items-center gap-2 bg-brand-blue/10 border border-brand-blue/20 rounded-full px-4 py-1.5 mb-6">
            <span class="w-2 h-2 rounded-full bg-brand-blue animate-pulse"></span>
            <span class="font-grotesk text-xs text-brand-blue uppercase tracking-wider font-semibold">Ready to scale?</span>
        </div>
        <h2 class="font-playfair text-4xl md:text-5xl font-bold text-white mb-6 leading-tight">
            Let's Build Something <span class="text-brand-blue">Extraordinary</span> Together
        </h2>
        <p class="font-inter text-brand-muted text-base max-w-xl mx-auto mb-10 leading-relaxed">
            Whether you need a custom Laravel system, AI integration, or a high-converting landing page, our team is ready to bring your vision to life.
        </p>
        <div class="flex flex-col sm:flex-row justify-center items-center gap-4">
            <a href="{{ route('contact') }}" class="bg-brand-blue hover:bg-brand-blue-hover text-white font-semibold px-8 py-4 rounded-full transition text-base shadow-lg shadow-brand-blue/20">
                Get a Free Quote →
            </a>
            <a href="{{ route('work') }}" class="border border-white/20 hover:border-white/60 text-white font-semibold px-8 py-4 rounded-full transition text-base">
                View Our Work
            </a>
        </div>
    </div>
</section>

@include('components.faq')
@endsection
