{{-- ==========================================================
    COMPONENTE: TEXTO PRINCIPAL DE INTRODUCCIÓN
    ========================================================== --}}

<div class="absolute inset-0 flex items-center justify-center px-4 sm:px-6 pt-8 sm:pt-12
            lg:inset-auto lg:absolute lg:top-1/2 lg:left-10 lg:transform lg:-translate-y-1/2 lg:flex lg:items-start lg:justify-start lg:px-0 lg:mt-8">

    {{-- CONTENEDOR: en mobile/tablet ocupa todo el ancho, en desktop solo el tamaño del texto --}}
    <div class="flex flex-col items-center lg:items-start text-center lg:text-left w-full lg:w-auto max-w-full lg:max-w-none">

        {{-- BADGE --}}
        <div class="flex items-center gap-2 mb-3 sm:mb-4">
            <span class="w-1.5 h-1.5 rounded-full bg-ferro-yellow-500 animate-pulse"></span>
            <span class="text-ferro-yellow-500 text-[9px] sm:text-[10px] font-semibold uppercase tracking-[0.2em]">
                Líderes en soluciones industriales
            </span>
        </div>

        {{-- TÍTULO --}}
        <h1 class="font-heading font-bold text-ferro-white leading-tight
                   text-2xl sm:text-3xl md:text-4xl lg:text-5xl">
            Herramientas y maquinaria
            <span class="text-ferro-yellow-500">para construir en grande.</span>
        </h1>

        {{-- DESCRIPCIÓN --}}
        <p class="mt-3 sm:mt-4 text-ferro-steel-300 font-body leading-relaxed
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
                <svg class="w-3 h-3 sm:w-3.5 sm:h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                </svg>
                Agendar maquinaria
            </a>
        </div>

    </div>

</div>