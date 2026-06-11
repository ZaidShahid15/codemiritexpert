<section class="py-24 bg-brand-dark border-t border-white/5">
    <div class="max-w-4xl mx-auto px-6">
        <div class="text-center mb-16" data-aos="fade-up">
            <span class="font-grotesk text-brand-blue text-sm uppercase tracking-widest">Got Questions?</span>
            <h2 class="font-playfair text-4xl md:text-5xl font-bold text-white mt-3 mb-4">Frequently Asked Questions</h2>
            <p class="font-inter text-brand-muted text-lg">Everything you need to know about working with Codemir IT Experts.</p>
        </div>

        <div class="space-y-4" x-data="{ active: null }">
            @foreach($faqs as $index => $faq)
            <div class="bg-brand-card border border-white/5 rounded-xl overflow-hidden" data-aos="fade-up" data-aos-delay="{{ min($index * 50, 400) }}">
                <button @click="active === {{ $index }} ? active = null : active = {{ $index }}" 
                        class="w-full text-left px-6 py-5 flex items-center justify-between focus:outline-none hover:bg-white/5 transition">
                    <span class="font-playfair text-lg font-semibold text-white">{{ $faq['question'] }}</span>
                    <span class="text-brand-blue transform transition-transform duration-300" 
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
    </div>
</section>
