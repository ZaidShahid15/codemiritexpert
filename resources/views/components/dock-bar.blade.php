{{-- ============================================================
     FLOATING BOTTOM DOCK BAR — All inline styles, no Tailwind build needed
     ============================================================ --}}

<div id="codemir-dock">
    <div id="codemir-dock-inner">

        {{-- Home --}}
        <a href="{{ route('home') }}" class="dock-btn {{ request()->routeIs('home') ? 'dock-active-blue' : '' }}" title="Home">
            <svg width="20" height="20" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
                <path stroke-linecap="round" stroke-linejoin="round"
                      d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
            </svg>
            <span class="dock-tip">Home</span>
        </a>

        {{-- Services --}}
        <a href="{{ route('services') }}" class="dock-btn {{ request()->routeIs('services') ? 'dock-active-purple' : '' }}" title="Services">
            <svg width="20" height="20" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
                <path stroke-linecap="round" stroke-linejoin="round"
                      d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"/>
            </svg>
            <span class="dock-tip">Services</span>
        </a>

        {{-- Our Work --}}
        <a href="{{ route('work') }}" class="dock-btn {{ request()->routeIs('work') ? 'dock-active-green' : '' }}" title="Our Work">
            <svg width="20" height="20" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
                <path stroke-linecap="round" stroke-linejoin="round"
                      d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
            </svg>
            <span class="dock-tip">Our Work</span>
        </a>

        <div class="dock-divider"></div>

        {{-- WhatsApp --}}
        <a href="https://wa.me/923001234567" target="_blank" rel="noopener" class="dock-btn" title="WhatsApp" id="dock-whatsapp">
            <svg width="20" height="20" fill="currentColor" viewBox="0 0 24 24">
                <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/>
            </svg>
            <span class="dock-tip">WhatsApp</span>
        </a>

        {{-- About --}}
        <a href="{{ route('about') }}" class="dock-btn {{ request()->routeIs('about') ? 'dock-active-amber' : '' }}" title="About">
            <svg width="20" height="20" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
                <path stroke-linecap="round" stroke-linejoin="round"
                      d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
            </svg>
            <span class="dock-tip">About</span>
        </a>

        {{-- Contact --}}
        <a href="{{ route('contact') }}" class="dock-btn {{ request()->routeIs('contact') ? 'dock-active-blue' : '' }}" title="Contact">
            <svg width="20" height="20" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
                <path stroke-linecap="round" stroke-linejoin="round"
                      d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
            </svg>
            <span class="dock-tip">Contact</span>
        </a>

    </div>
</div>

<style>
/* ── Dock wrapper: fixed at bottom center ── */
#codemir-dock {
    position: fixed;
    bottom: 24px;
    left: 0;
    right: 0;
    display: flex;
    justify-content: center;
    pointer-events: none;   /* let clicks pass through to page outside the pill */
    z-index: 9999;
    animation: dockRise 0.7s cubic-bezier(0.34, 1.56, 0.64, 1) both;
    animation-delay: 0.5s;
    opacity: 0;
    /* NO transform on the wrapper — avoids overflow bug */
}

#codemir-dock > #codemir-dock-inner {
    pointer-events: auto;   /* re-enable clicks on the pill itself */
}

@keyframes dockRise {
    from { opacity: 0; transform: translateY(30px); }
    to   { opacity: 1; transform: translateY(0);    }
}

/* ── Inner pill ── */
#codemir-dock-inner {
    display: flex;
    align-items: center;
    gap: 6px;
    padding: 10px 14px;
    background: rgba(13, 13, 26, 0.92);
    backdrop-filter: blur(24px);
    -webkit-backdrop-filter: blur(24px);
    border: 1px solid rgba(255, 255, 255, 0.10);
    border-radius: 999px;
    box-shadow:
        0 8px 32px rgba(0, 0, 0, 0.6),
        0 0 0 1px rgba(255,255,255,0.04) inset;
}

/* ── Each icon button ── */
.dock-btn {
    position: relative;
    display: flex;
    align-items: center;
    justify-content: center;
    width: 44px;
    height: 44px;
    border-radius: 50%;
    background: rgba(255, 255, 255, 0.06);
    color: rgba(255, 255, 255, 0.55);
    text-decoration: none;
    transition: transform 0.2s cubic-bezier(0.34,1.56,0.64,1),
                background 0.2s ease,
                color 0.2s ease,
                box-shadow 0.2s ease;
}

.dock-btn:hover {
    transform: scale(1.18) translateY(-2px);
    background: rgba(255, 255, 255, 0.12);
    color: #ffffff;
}

.dock-btn:active {
    transform: scale(0.95);
}

/* ── Active states with color glow ── */
.dock-active-blue  { background: rgba(59,  130, 246, 0.18); color: #3b82f6; box-shadow: 0 0 0 1px rgba(59,130,246,0.35); }
.dock-active-purple{ background: rgba(139, 92,  246, 0.18); color: #8b5cf6; box-shadow: 0 0 0 1px rgba(139,92,246,0.35); }
.dock-active-green { background: rgba(16,  185, 129, 0.18); color: #10b981; box-shadow: 0 0 0 1px rgba(16,185,129,0.35); }
.dock-active-amber { background: rgba(245, 158, 11,  0.18); color: #f59e0b; box-shadow: 0 0 0 1px rgba(245,158,11,0.35);  }

/* ── WhatsApp green on hover ── */
#dock-whatsapp:hover { color: #25d366; background: rgba(37, 211, 102, 0.12); }

/* ── Divider ── */
.dock-divider {
    width: 1px;
    height: 24px;
    background: rgba(255,255,255,0.1);
    margin: 0 4px;
    flex-shrink: 0;
}

/* ── Tooltip ── */
.dock-tip {
    position: absolute;
    bottom: calc(100% + 10px);
    left: 50%;
    transform: translateX(-50%) translateY(6px);
    background: rgba(10, 10, 22, 0.96);
    color: #fff;
    font-size: 11px;
    font-family: 'Inter', sans-serif;
    font-weight: 500;
    letter-spacing: 0.03em;
    padding: 5px 12px;
    border-radius: 8px;
    border: 1px solid rgba(255,255,255,0.08);
    white-space: nowrap;
    pointer-events: none;
    opacity: 0;
    transition: opacity 0.18s ease, transform 0.18s ease;
    z-index: 10000;
}

.dock-btn:hover .dock-tip {
    opacity: 1;
    transform: translateX(-50%) translateY(0);
}

/* ── Tooltip arrow ── */
.dock-tip::after {
    content: '';
    position: absolute;
    top: 100%;
    left: 50%;
    transform: translateX(-50%);
    border: 5px solid transparent;
    border-top-color: rgba(10, 10, 22, 0.96);
}
</style>
