{{-- ==========================================================
    SECCIÓN: INTRODUCCIÓN CON CARRUSEL DE FONDO
    ========================================================== --}}

<section class="relative flex flex-col h-screen w-full overflow-hidden" aria-label="Introducción de FERRANOVA"
    role="region">

    {{-- CARRUSEL DE FONDO --}}
    <div class="absolute inset-0 z-0" x-data="{ current: 0 }" x-init="setInterval(() => { current = (current + 1) % 3 }, 5000)">
        {{-- SLIDE 1 --}}
        <div class="absolute inset-0 transition-opacity duration-2000ms"
            x-bind:class="current === 0 ? 'opacity-100' : 'opacity-0'">
            <img src="{{ asset('asset/sections/index-homepages/introduction/imagenUnoIntroduccion.webp') }}"
                class="w-full h-full object-cover image-loading" alt="FERRANOVA - Herramientas industriales" loading="lazy" decoding="async">
            <div class="absolute inset-0 bg-black/75"></div>
        </div>

        {{-- SLIDE 2 --}}
        <div class="absolute inset-0 transition-opacity duration-2000ms"
            x-bind:class="current === 1 ? 'opacity-100' : 'opacity-0'">
            <img src="{{ asset('asset/sections/index-homepages/introduction/imagenDosIntroduccion.webp') }}"
                class="w-full h-full object-cover image-loading" alt="FERRANOVA - Equipos industriales" loading="lazy" decoding="async">
            <div class="absolute inset-0 bg-black/75"></div>
        </div>

        {{-- SLIDE 3 --}}
        <div class="absolute inset-0 transition-opacity duration-2000ms"
            x-bind:class="current === 2 ? 'opacity-100' : 'opacity-0'">
            <img src="{{ asset('asset/sections/index-homepages/introduction/imagenTresIntroduccion.webp') }}"
                class="w-full h-full object-cover image-loading" alt="FERRANOVA - Materiales de construcción" loading="lazy" decoding="async">
            <div class="absolute inset-0 bg-black/75"></div>
        </div>

        {{-- DOTS --}}
        <div class="absolute bottom-6 left-1/2 -translate-x-1/2 flex gap-2 z-10">
            <button @click="current = 0" x-bind:class="current === 0 ? 'bg-yellow-400 w-5' : 'bg-white/40 w-2'"
                class="h-1.5 rounded-full transition-all duration-500 cursor-pointer"
                aria-label="Ir a la imagen 1"></button>
            <button @click="current = 1" x-bind:class="current === 1 ? 'bg-yellow-400 w-5' : 'bg-white/40 w-2'"
                class="h-1.5 rounded-full transition-all duration-500 cursor-pointer"
                aria-label="Ir a la imagen 2"></button>
            <button @click="current = 2" x-bind:class="current === 2 ? 'bg-yellow-400 w-5' : 'bg-white/40 w-2'"
                class="h-1.5 rounded-full transition-all duration-500 cursor-pointer"
                aria-label="Ir a la imagen 3"></button>
        </div>
    </div>

    {{-- CONTENIDO CENTRAL --}}
    <div class="relative z-10 flex-1 flex items-center justify-center w-full">
        <div class="w-full max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            
            {{-- ==========================================================
            COMPONENTE: TEXTO PRINCIPAL DE INTRODUCCIÓN
            ========================================================== --}}
            <div
                class="absolute inset-0 flex items-center justify-center px-4 sm:px-6 pt-8 sm:pt-14
            lg:inset-auto lg:absolute lg:top-1/2 lg:left-10 lg:transform lg:-translate-y-1/2 lg:flex lg:items-start lg:justify-start lg:px-0 lg:mt-8">

                {{-- CONTENEDOR: en mobile/tablet ocupa todo el ancho, en desktop solo el tamaño del texto --}}
                <div
                    class="flex flex-col items-center lg:items-start text-center lg:text-left w-full lg:w-auto max-w-full lg:max-w-none">

                    {{-- BADGE --}}
                    <div class="flex items-center gap-2 mb-3 sm:mb-4">
                        <span class="w-1.5 h-1.5 rounded-full bg-ferro-yellow-500 animate-pulse"></span>
                        <span
                            class="text-ferro-yellow-500 text-[9px] sm:text-[10px] font-semibold uppercase tracking-[0.2em]">
                            Líderes en soluciones industriales
                        </span>
                    </div>

                    {{-- TÍTULO --}}
                    <h1
                        class="font-heading font-bold text-ferro-white leading-tight
                   text-2xl sm:text-3xl md:text-4xl lg:text-5xl">
                        Herramientas y maquinaria
                        <span class="text-ferro-yellow-500">para construir en grande.</span>
                    </h1>

                    {{-- DESCRIPCIÓN --}}
                    <p
                        class="mt-3 sm:mt-4 text-ferro-steel-300 font-body leading-relaxed
                  text-sm sm:text-base">
                        Venta y alquiler de herramientas, equipos industriales y materiales
                        de construcción con respaldo profesional.
                    </p>

                    {{-- BOTONES --}}
                    <div class="mt-5 sm:mt-6 flex flex-wrap gap-2 sm:gap-3 justify-center lg:justify-start">
                        <a href="#"
                            class="bg-ferro-yellow-500 hover:bg-ferro-yellow-700 text-ferro-black
                      px-4 sm:px-5 py-2 sm:py-2.5 rounded-lg
                      text-xs sm:text-sm font-heading font-bold
                      transition-all duration-200 whitespace-nowrap">
                            Ver catálogo →
                        </a>

                        <a href="#"
                            class="bg-ferro-white/10 hover:bg-ferro-white/20 text-ferro-white
                      border border-ferro-white/20 hover:border-ferro-white/40
                      px-4 sm:px-5 py-2 sm:py-2.5 rounded-lg
                      text-xs sm:text-sm font-heading font-semibold
                      transition-all duration-200 flex items-center gap-1.5 sm:gap-2
                      backdrop-blur-sm whitespace-nowrap">
                            <svg class="w-3 h-3 sm:w-3.5 sm:h-3.5" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                            </svg>
                            Agendar maquinaria
                        </a>
                    </div>

                </div>

            </div>

        </div>
    </div>

</section>
