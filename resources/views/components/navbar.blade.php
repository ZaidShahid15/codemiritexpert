<nav x-data="{ open: false }"
     style="position: fixed; top: 0; left: 0; right: 0; z-index: 9999; display: flex; justify-content: center; padding: 16px 16px 0; pointer-events: none;">

    <div style="
        width: 100%;
        max-width: 1100px;
        background: rgba(10, 10, 22, 0.92);
        backdrop-filter: blur(20px);
        -webkit-backdrop-filter: blur(20px);
        border: 1px solid rgba(255,255,255,0.10);
        border-radius: 20px;
        box-shadow: 0 8px 32px rgba(0,0,0,0.5), 0 0 0 1px rgba(255,255,255,0.04) inset;
        padding: 10px 20px;
        pointer-events: auto;
    ">
        <div class="flex items-center justify-between gap-4">

            {{-- Logo --}}
            <a href="{{ route('home') }}" class="flex items-center gap-3 flex-shrink-0 group">
                <div style="
                    width: 52px;
                    height: 52px;
                    border-radius: 14px;
                    overflow: hidden;
                    border: 1px solid rgba(255,255,255,0.10);
                    background: transparent;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    transition: box-shadow 0.3s ease, border-color 0.3s ease;
                " class="logo-wrap">
                    <img src="{{ asset('images/logo.png') }}"
                         alt="Codemir IT Experts"
                         fetchpriority="high"
                         style="
                             width: 100%;
                             height: 100%;
                             object-fit: contain;
                             mix-blend-mode: screen;
                             filter: brightness(1.1) contrast(1.05);
                         ">
                </div>
            </a>

            {{-- Desktop Nav --}}
            <ul class="hidden md:flex items-center gap-1 font-inter text-sm font-medium text-brand-muted">
                @foreach([
                    ['label' => 'Home',         'route' => 'home'],
                    ['label' => 'Services',     'route' => 'services'],
                    ['label' => 'AI Solutions', 'route' => 'ai-solutions'],
                    ['label' => 'Our Work',     'route' => 'work'],
                    ['label' => 'Blog',         'route' => 'blog'],
                    ['label' => 'About',        'route' => 'about'],
                    ['label' => 'Contact',      'route' => 'contact'],
                ] as $nav)
                <li>
                    <a href="{{ route($nav['route']) }}"
                       class="relative px-4 py-2 rounded-xl transition-all duration-200 hover:text-white hover:bg-white/5
                              {{ request()->routeIs($nav['route']) ? 'text-white bg-white/5' : '' }}">
                        {{ $nav['label'] }}
                        @if(request()->routeIs($nav['route']))
                        <span class="absolute bottom-1 left-1/2 -translate-x-1/2 w-1 h-1 bg-brand-blue rounded-full"></span>
                        @endif
                    </a>
                </li>
                @endforeach
            </ul>

            {{-- CTA Button --}}
            <a href="{{ route('contact') }}"
               class="hidden md:inline-flex items-center gap-2 bg-brand-blue hover:bg-brand-blue-hover text-white text-sm font-semibold px-5 py-2.5 rounded-xl transition-all duration-200 flex-shrink-0 shadow-lg shadow-brand-blue/20">
                Get a Quote →
            </a>

            {{-- Mobile Toggle --}}
            <button @click="open = !open"
                    class="md:hidden text-white w-9 h-9 flex items-center justify-center rounded-xl hover:bg-white/5 transition">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path x-show="!open" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                    <path x-show="open"  stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                </svg>
            </button>
        </div>

        {{-- Mobile Menu --}}
        <div x-show="open"
             x-transition:enter="transition ease-out duration-200"
             x-transition:enter-start="opacity-0 -translate-y-2"
             x-transition:enter-end="opacity-100 translate-y-0"
             x-transition:leave="transition ease-in duration-150"
             x-transition:leave-start="opacity-100 translate-y-0"
             x-transition:leave-end="opacity-0 -translate-y-2"
             class="md:hidden mt-3 pt-3 border-t border-white/5 flex flex-col gap-1 font-inter text-sm">
            @foreach([
                ['label' => 'Home',         'route' => 'home'],
                ['label' => 'Services',     'route' => 'services'],
                ['label' => 'AI Solutions', 'route' => 'ai-solutions'],
                ['label' => 'Our Work',     'route' => 'work'],
                ['label' => 'Blog',         'route' => 'blog'],
                ['label' => 'About',        'route' => 'about'],
                ['label' => 'Contact',      'route' => 'contact'],
            ] as $nav)
            <a href="{{ route($nav['route']) }}"
               class="block px-4 py-2.5 rounded-xl text-brand-muted hover:text-white hover:bg-white/5 transition
                      {{ request()->routeIs($nav['route']) ? 'text-white bg-white/5' : '' }}">
                {{ $nav['label'] }}
            </a>
            @endforeach
            <a href="{{ route('contact') }}"
               class="mt-2 block bg-brand-blue text-white text-center py-3 rounded-xl font-semibold hover:bg-brand-blue-hover transition">
                Get a Quote →
            </a>
        </div>
    </div>
</nav>

<style>
.logo-wrap:hover {
    box-shadow: 0 0 18px rgba(59, 130, 246, 0.35), 0 0 0 1px rgba(59,130,246,0.25);
    border-color: rgba(59,130,246,0.35) !important;
}
</style>
