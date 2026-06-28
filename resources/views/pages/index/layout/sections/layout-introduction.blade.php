{{-- ==========================================================
    SECCIÓN: INTRODUCCIÓN CON CARRUSEL DE FONDO
    ==========================================================
    Esta sección compone el hero principal de FERRANOVA.
    Incluye:
    - Carrusel de imágenes de fondo con transiciones suaves
    - Navegación principal (layout-nav)
    - Texto central con título, descripción y botones de acción
    ========================================================== --}}

<section 
    class="relative flex flex-col h-screen w-full overflow-hidden"
    aria-label="Introducción de FERRANOVA"
    role="region"
>

    {{-- ==========================================================
        CARRUSEL DE FONDO (IMÁGENES DE FONDO)
        ========================================================== --}}
    <div 
        class="absolute inset-0 z-0"
        x-data="{ current: 0 }"
        x-init="setInterval(() => { current = (current + 1) % 3 }, 5000)"
        aria-label="Carrusel de imágenes de fondo"
        role="img"
    >

        {{-- SLIDE 1 --}}
        <div 
            class="absolute inset-0 transition-opacity duration-2000ms"
            x-bind:class="current === 0 ? 'opacity-100' : 'opacity-0'"
            aria-hidden="true"
        >
            <img 
                src="{{ asset('asset/sections/introduction/imagenUnoIntroduccion.jpg') }}"
                class="w-full h-full object-cover" 
                alt="FERRANOVA - Herramientas industriales y maquinaria para construcción"
                loading="lazy"
            >
            <div class="absolute inset-0 bg-black/75"></div>
        </div>

        {{-- SLIDE 2 --}}
        <div 
            class="absolute inset-0 transition-opacity duration-2000ms"
            x-bind:class="current === 1 ? 'opacity-100' : 'opacity-0'"
            aria-hidden="true"
        >
            <img 
                src="{{ asset('asset/sections/introduction/imagenDosIntroduccion.jpg') }}"
                class="w-full h-full object-cover" 
                alt="FERRANOVA - Equipos industriales y soluciones para ferreterías"
                loading="lazy"
            >
            <div class="absolute inset-0 bg-black/75"></div>
        </div>

        {{-- SLIDE 3 --}}
        <div 
            class="absolute inset-0 transition-opacity duration-2000ms"
            x-bind:class="current === 2 ? 'opacity-100' : 'opacity-0'"
            aria-hidden="true"
        >
            <img 
                src="{{ asset('asset/sections/introduction/imagenTresIntroduccion.jpg') }}"
                class="w-full h-full object-cover" 
                alt="FERRANOVA - Materiales de construcción y suministros industriales"
                loading="lazy"
            >
            <div class="absolute inset-0 bg-black/75"></div>
        </div>

        {{-- ==========================================================
            INDICADORES (DOTS)
            ========================================================== --}}
        <div 
            class="absolute bottom-6 left-1/2 -translate-x-1/2 flex gap-2 z-10"
            role="tablist"
            aria-label="Controles del carrusel"
        >
            <button 
                @click="current = 0"
                x-bind:class="current === 0 ? 'bg-yellow-400 w-5' : 'bg-white/40 w-2'"
                class="h-1.5 rounded-full transition-all duration-500 cursor-pointer"
                role="tab"
                aria-label="Ir a la imagen 1"
                :aria-selected="current === 0 ? 'true' : 'false'"
                aria-selected="true"
            ></button>
            <button 
                @click="current = 1"
                x-bind:class="current === 1 ? 'bg-yellow-400 w-5' : 'bg-white/40 w-2'"
                class="h-1.5 rounded-full transition-all duration-500 cursor-pointer"
                role="tab"
                aria-label="Ir a la imagen 2"
                :aria-selected="current === 1 ? 'true' : 'false'"
                aria-selected="false"
            ></button>
            <button 
                @click="current = 2"
                x-bind:class="current === 2 ? 'bg-yellow-400 w-5' : 'bg-white/40 w-2'"
                class="h-1.5 rounded-full transition-all duration-500 cursor-pointer"
                role="tab"
                aria-label="Ir a la imagen 3"
                :aria-selected="current === 2 ? 'true' : 'false'"
                aria-selected="false"
            ></button>
        </div>
    </div>

    {{-- ==========================================================
        NAVEGACIÓN PRINCIPAL
        ========================================================== --}}
    <div class="relative z-20 w-full">
        @include('pages.index.layout.navegations.layout-nav')
    </div>

    {{-- ==========================================================
        CONTENIDO CENTRAL (TEXTO + BOTONES)
        ========================================================== --}}
    <div class="relative z-10 flex-1 flex items-center justify-center w-full">
        <div class="w-full max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            @include('pages.index.component.introduction.component-section-text')
        </div>
    </div>

</section>