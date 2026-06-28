{{-- ==========================================================
    COMPONENTE: TEXTO PRINCIPAL DE INTRODUCCIÓN
    ==========================================================
    Muestra el mensaje central de FERRANOVA con título,
    descripción, un badge de "Líderes en soluciones industriales"
    y dos botones de acción (Catálogo y Agendar maquinaria).
    ========================================================== --}}

<div 
    class="absolute inset-0 z-10 flex items-center"
    aria-label="Presentación de FERRANOVA"
    role="banner"
>

    <div class="w-full max-w-7xl mx-auto px-6 sm:px-10 lg:px-20">

        {{-- ==========================================================
            BADGE: "LÍDERES EN SOLUCIONES INDUSTRIALES"
            ========================================================== --}}
        <div class="flex items-center justify-center lg:justify-start gap-2 mb-3 sm:mb-4">
            {{-- Indicador visual (punto animado) --}}
            <span 
                class="w-1.5 h-1.5 rounded-full bg-ferro-yellow-500 animate-pulse"
                aria-hidden="true"
            ></span>
            <span 
                class="text-ferro-yellow-500 text-[9px] sm:text-[10px] font-semibold uppercase tracking-[0.2em]"
                aria-label="Líderes en soluciones industriales"
            >
                Líderes en soluciones industriales
            </span>
        </div>

        {{-- ==========================================================
            TÍTULO PRINCIPAL
            ========================================================== --}}
        <h1 
            class="font-heading font-bold text-ferro-white leading-tight text-center lg:text-left
                   text-xl sm:text-3xl md:text-4xl lg:text-4xl xl:text-5xl
                   max-w-65 sm:max-w-sm md:max-w-md lg:max-w-lg
                   mx-auto lg:mx-0"
        >
            Herramientas y maquinaria
            <span class="text-ferro-yellow-500"> para construir en grande.</span>
        </h1>

        {{-- ==========================================================
            DESCRIPCIÓN
            ========================================================== --}}
        <p 
            class="mt-3 sm:mt-4 text-ferro-steel-300 font-body leading-relaxed text-center lg:text-left
                  text-[11px] sm:text-xs md:text-sm
                  max-w-55 sm:max-w-xs md:max-w-sm
                  mx-auto lg:mx-0"
        >
            Venta y alquiler de herramientas, equipos industriales y materiales
            de construcción con respaldo profesional.
        </p>

        {{-- ==========================================================
            BOTONES DE ACCIÓN
            ========================================================== --}}
        <div class="mt-5 sm:mt-6 flex flex-wrap gap-2 sm:gap-3 justify-center lg:justify-start">
            
            {{-- Botón: Ver catálogo --}}
            <a 
                href="#"
                class="bg-ferro-yellow-500 hover:bg-ferro-yellow-700 text-ferro-black
                       px-4 sm:px-5 py-2 sm:py-2.5 rounded-lg
                       text-[11px] sm:text-xs font-heading font-bold
                       transition-all duration-200 whitespace-nowrap"
                aria-label="Ver catálogo de productos"
                title="Ver catálogo de productos"
            >
                Ver catálogo →
            </a>

            {{-- Botón: Agendar maquinaria --}}
            <a 
                href="#"
                class="bg-ferro-white/10 hover:bg-ferro-white/20 text-ferro-white
                       border border-ferro-white/20 hover:border-ferro-white/40
                       px-4 sm:px-5 py-2 sm:py-2.5 rounded-lg
                       text-[11px] sm:text-xs font-heading font-semibold
                       transition-all duration-200 flex items-center gap-1.5 sm:gap-2
                       backdrop-blur-sm whitespace-nowrap"
                aria-label="Agendar maquinaria"
                title="Agendar maquinaria"
            >
                {{-- Ícono de calendario (accesible) --}}
                <svg 
                    class="w-3 h-3 sm:w-3.5 sm:h-3.5" 
                    fill="none" 
                    stroke="currentColor" 
                    viewBox="0 0 24 24"
                    aria-hidden="true"
                    role="img"
                >
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                </svg>
                Agendar maquinaria
            </a>
        </div>

    </div>

</div>