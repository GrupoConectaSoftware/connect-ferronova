<div
    x-data="{ visible: false }"
    x-cloak
    x-init="$nextTick(() => Array.from($el.querySelectorAll('[id$=-app] > * > *')).forEach((item, index) => { item.style.transitionDelay = (index * 100) + 'ms'; item.classList.add('opacity-0', 'translate-y-10', 'scale-95', 'transition-all', 'duration-700', 'ease-out') }))"
    x-intersect="visible = true; $nextTick(() => Array.from($el.querySelectorAll('[id$=-app] > * > *')).forEach((item) => { item.classList.remove('opacity-0', 'translate-y-10', 'scale-95'); item.classList.add('opacity-100', 'translate-y-0', 'scale-100') }))"
    :class="visible ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-10'"
    class="transition-all duration-700 ease-out"
>
{{-- ==========================================================
    SECCIÓN: VIDEO DE FONDO CON MENSAJE CORPORATIVO
    ========================================================== --}}

<section 
    class="relative w-full h-screen overflow-hidden bg-ferro-black"
    aria-label="Video institucional FERRANOVA"
    role="region"
>

    {{-- ==========================================================
        VIDEO DE FONDO (CON OPACIDAD Y OVERLAY)
        ========================================================== --}}
    <div class="absolute inset-0 w-full h-full">
        <video 
            autoplay
            muted
            loop
            playsinline
            class="w-full h-full object-cover opacity-25"
            aria-label="Video de construcción y maquinaria industrial"
        >
            <source src="{{ asset('asset/videos/video_invitacion.mp4') }}" type="video/mp4">
            {{-- Fallback --}}
            <div class="w-full h-full bg-ferro-carbon-900 flex items-center justify-center text-ferro-white">
                <p>Tu navegador no soporta videos.</p>
            </div>
        </video>
        
        {{-- OVERLAY NEGRO EXTRA --}}
        <div class="absolute inset-0 bg-ferro-black/60"></div>
    </div>

    {{-- ==========================================================
        CONTENIDO CENTRAL
        ========================================================== --}}
    <div class="relative z-10 flex items-center justify-center w-full h-full px-4 sm:px-6 lg:px-8">
        
        <div class="max-w-4xl mx-auto text-center">

            {{-- BADGE --}}
            <div class="flex items-center justify-center gap-2 mb-4 sm:mb-6">
                <span class="w-2 h-2 rounded-full bg-ferro-yellow-500 animate-pulse"></span>
                <span class="text-ferro-yellow-500 text-[10px] sm:text-xs font-description font-bold uppercase tracking-[0.25em]">
                    Soluciones para grandes proyectos
                </span>
            </div>

            {{-- TÍTULO --}}
            <h1 class="font-heading font-bold text-ferro-white leading-tight
                       text-3xl sm:text-4xl md:text-5xl lg:text-6xl">
                Construye <span class="text-ferro-yellow-500">a gran escala</span>
            </h1>

            {{-- DESCRIPCIÓN --}}
            <p class="mt-4 sm:mt-6 text-ferro-steel-300 font-body leading-relaxed
                      text-sm sm:text-base md:text-lg max-w-2xl mx-auto">
                Equipos, maquinaria y asesoría para proyectos de gran envergadura.
                Ventas corporativas, alquiler de flota y logística especializada
                para obras de alto impacto.
            </p>

            {{-- BOTONES --}}
            <div class="mt-6 sm:mt-8 flex flex-wrap gap-3 sm:gap-4 justify-center">
                <a href="{{ route('contact') }}"
                   class="bg-ferro-yellow-500 hover:bg-ferro-yellow-700 text-ferro-black
                          px-6 sm:px-8 py-3 sm:py-3.5 rounded-lg
                          text-sm sm:text-base font-heading font-bold
                          transition-all duration-200 whitespace-nowrap">
                    Cotizar proyecto →
                </a>

                <a href="{{ route('projects') }}"
                   class="bg-ferro-white/10 hover:bg-ferro-white/20 text-ferro-white
                          border border-ferro-white/20 hover:border-ferro-white/40
                          px-6 sm:px-8 py-3 sm:py-3.5 rounded-lg
                          text-sm sm:text-base font-heading font-semibold
                          transition-all duration-200 flex items-center gap-2
                          backdrop-blur-sm whitespace-nowrap">
                    <svg class="w-4 h-4 sm:w-5 sm:h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z"/>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                    Ver proyectos
                </a>
            </div>

            {{-- INDICADOR DE SCROLL --}}
            <div class="absolute bottom-6 left-1/2 -translate-x-1/2 flex flex-col items-center gap-1 text-ferro-steel-400 text-[10px] font-description font-semibold uppercase tracking-[0.15em] animate-bounce">
                <span>Desplaza</span>
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"/>
                </svg>
            </div>

        </div>
    </div>

</section>
</div>
