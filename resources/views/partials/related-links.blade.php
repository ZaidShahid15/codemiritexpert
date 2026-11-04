@if (!empty($relatedLinks))
    <section class="py-16 bg-brand-dark/40 border-t border-white/5">
        <div class="max-w-6xl mx-auto px-6">
            <div class="flex items-center gap-3 mb-8">
                <span class="w-2 h-2 rounded-full bg-brand-blue"></span>
                <h3 class="font-playfair text-2xl font-bold text-white">Related Resources &amp; Solutions</h3>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-5">
                @foreach ($relatedLinks as $link)
                    <a href="{{ route($link['route'], $link['params'] ?? []) }}"
                       class="group bg-brand-card/90 border border-white/5 hover:border-brand-blue/40 rounded-2xl p-6 transition-all duration-300 hover:-translate-y-1 flex items-center justify-between gap-4 shadow-lg">
                        <span class="font-inter text-sm font-medium text-white group-hover:text-brand-blue transition">
                            {{ $link['anchor'] ?? $link['title'] ?? '' }}
                        </span>
                        <span class="w-8 h-8 rounded-full bg-brand-blue/10 group-hover:bg-brand-blue text-brand-blue group-hover:text-white flex items-center justify-center text-xs transition-colors shrink-0">
                            &rarr;
                        </span>
                    </a>
                @endforeach
            </div>
        </div>
    </section>
@endif
