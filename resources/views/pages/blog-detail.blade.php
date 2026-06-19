@extends('layouts.app')
@section('title', $post['title'] . ' | Codemir IT Experts Blog')
@section('meta_description', $post['summary'])

@section('content')

{{-- ARTICLE HEADER --}}
<section class="relative bg-brand-black pt-16 pb-12 border-b border-white/5">
    {{-- Animated grid background --}}
    <div class="absolute inset-0 opacity-5">
        <div class="absolute inset-0" style="background-image: linear-gradient(rgba(30,107,255,0.3) 1px, transparent 1px), linear-gradient(90deg, rgba(30,107,255,0.3) 1px, transparent 1px); background-size: 60px 60px;"></div>
    </div>

    <div class="relative z-10 max-w-6xl mx-auto px-6">
        {{-- Breadcrumbs --}}
        <div class="flex items-center gap-2 text-sm text-brand-muted mb-8 font-inter">
            <a href="{{ route('home') }}" class="hover:text-white transition">Home</a>
            <span>/</span>
            <a href="{{ route('blog') }}" class="hover:text-white transition">Blog</a>
            <span>/</span>
            <span class="text-white truncate max-w-[200px] md:max-w-none">{{ $post['title'] }}</span>
        </div>

        <div class="max-w-3xl">
            <span class="font-grotesk text-xs uppercase tracking-widest text-brand-blue bg-brand-blue/10 border border-brand-blue/20 px-4 py-1.5 rounded-full mb-6 inline-block">
                {{ $post['category'] }}
            </span>
            <h1 class="font-playfair text-3xl md:text-5xl font-bold text-white leading-tight mb-6">
                {{ $post['title'] }}
            </h1>
            <div class="flex flex-wrap items-center gap-4 text-sm text-brand-muted font-grotesk">
                <div class="flex items-center gap-2">
                    <div class="w-8 h-8 rounded-full bg-brand-blue/10 border border-brand-blue/30 flex items-center justify-center font-bold text-brand-blue text-xs">
                        ZS
                    </div>
                    <span class="text-white">{{ $post['author'] }}</span>
                </div>
                <span>·</span>
                <span>{{ $post['date'] }}</span>
                <span>·</span>
                <span>{{ $post['read_time'] }}</span>
            </div>
        </div>
    </div>
</section>

{{-- ARTICLE CONTENT --}}
<section class="py-20 bg-brand-black">
    <div class="max-w-6xl mx-auto px-6">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-start">
            
            {{-- Main Column: Content --}}
            <div class="lg:col-span-8">
                <article class="blog-article text-brand-muted leading-relaxed font-inter text-base md:text-lg">
                    {!! $post['content'] !!}
                </article>

                {{-- Back to blog CTA --}}
                <div class="mt-14 pt-8 border-t border-white/5 flex flex-wrap gap-4 justify-between items-center">
                    <a href="{{ route('blog') }}" class="inline-flex items-center gap-2 text-sm font-semibold text-brand-blue hover:text-brand-blue-hover transition">
                        &larr; Back to all articles
                    </a>
                    <div class="flex gap-3">
                        <span class="text-xs font-grotesk text-brand-muted uppercase tracking-wider mt-1">Share:</span>
                        <a href="https://www.linkedin.com/sharing/share-offsite/?url={{ urlencode(url()->current()) }}" target="_blank" class="text-xs font-semibold text-brand-muted hover:text-white transition">LinkedIn</a>
                        <a href="https://twitter.com/intent/tweet?url={{ urlencode(url()->current()) }}" target="_blank" class="text-xs font-semibold text-brand-muted hover:text-white transition">Twitter</a>
                    </div>
                </div>
            </div>

            {{-- Sidebar Column --}}
            <div class="lg:col-span-4 space-y-8">
                
                {{-- CTA Box --}}
                <div class="bg-gradient-to-r from-brand-blue/10 to-brand-black border border-brand-blue/20 rounded-2xl p-8 relative overflow-hidden shadow-xl">
                    <div class="absolute -top-16 -right-16 w-32 h-32 bg-brand-blue/10 rounded-full blur-xl pointer-events-none"></div>
                    <span class="font-grotesk text-brand-blue text-xs uppercase tracking-widest font-semibold block mb-2">Start a Project</span>
                    <h3 class="font-playfair text-xl font-bold text-white mb-4">Have an Idea? Let's Build It!</h3>
                    <p class="font-inter text-brand-muted text-sm leading-relaxed mb-6">We construct high-speed, SEO-optimized web systems and custom AI agents tailored to your business needs.</p>
                    <a href="{{ route('contact') }}" class="block text-center bg-brand-blue hover:bg-brand-blue-hover text-white font-semibold py-3 rounded-xl transition text-sm shadow-md shadow-brand-blue/20">
                        Get a Free Quote &rarr;
                    </a>
                </div>

                {{-- Recent Posts List --}}
                <div class="bg-brand-card border border-white/5 rounded-2xl p-8 space-y-6">
                    <h3 class="font-playfair text-lg font-bold text-white border-b border-white/5 pb-4">Other Articles</h3>
                    <div class="space-y-5">
                        @foreach($posts as $otherSlug => $otherPost)
                            @if($otherSlug !== $post['slug'])
                            <div class="group">
                                <span class="font-grotesk text-[10px] uppercase tracking-wider text-brand-blue font-bold block mb-1">
                                    {{ $otherPost['category'] }}
                                </span>
                                <a href="{{ route('blog.detail', $otherSlug) }}" class="font-playfair text-sm font-semibold text-white group-hover:text-brand-blue transition leading-snug block mb-1.5">
                                    {{ $otherPost['title'] }}
                                </a>
                                <span class="font-inter text-[11px] text-brand-muted">{{ $otherPost['date'] }}</span>
                            </div>
                            @endif
                        @endforeach
                    </div>
                </div>

            </div>

        </div>
    </div>
</section>

{{-- Custom CSS for raw HTML rendering inside article --}}
<style>
.blog-article h3 {
    font-family: 'Playfair Display', serif;
    font-size: 24px;
    font-weight: 700;
    color: #ffffff;
    margin-top: 36px;
    margin-bottom: 16px;
}
.blog-article p {
    margin-bottom: 20px;
    line-height: 1.8;
}
.blog-article ul {
    margin-bottom: 24px;
    padding-left: 20px;
    list-style-type: disc;
}
.blog-article li {
    margin-bottom: 8px;
    line-height: 1.7;
}
.blog-article strong {
    color: #ffffff;
    font-weight: 600;
}
.blog-article pre {
    background: rgba(13, 13, 26, 0.6);
    border: 1px solid rgba(255, 255, 255, 0.05);
    border-radius: 12px;
    padding: 20px;
    margin: 28px 0;
    overflow-x: auto;
}
.blog-article code {
    font-family: monospace;
    font-size: 14px;
    color: #a5b4fc;
}
</style>

@endsection
