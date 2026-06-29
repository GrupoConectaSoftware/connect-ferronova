{{-- ==========================================================
    SECCIÓN: INTRODUCCIÓN CON CARRUSEL DE FONDO
    ========================================================== --}}

<section 
    class="relative flex flex-col h-screen w-full overflow-hidden"
    aria-label="Introducción de FERRANOVA"
    role="region"
>

    {{-- CARRUSEL DE FONDO --}}
    <div 
        class="absolute inset-0 z-0"
        x-data="{ current: 0 }"
        x-init="setInterval(() => { current = (current + 1) % 3 }, 5000)"
    >
        {{-- SLIDE 1 --}}
        <div 
            class="absolute inset-0 transition-opacity duration-2000ms"
            x-bind:class="current === 0 ? 'opacity-100' : 'opacity-0'"
        >
            <img 
                src="{{ asset('asset/sections/introduction/imagenUnoIntroduccion.jpg') }}"
                class="w-full h-full object-cover" 
                alt="FERRANOVA - Herramientas industriales"
                loading="lazy"
            >
            <div class="absolute inset-0 bg-black/75"></div>
        </div>

        {{-- SLIDE 2 --}}
        <div 
            class="absolute inset-0 transition-opacity duration-2000ms"
            x-bind:class="current === 1 ? 'opacity-100' : 'opacity-0'"
        >
            <img 
                src="{{ asset('asset/sections/introduction/imagenDosIntroduccion.jpg') }}"
                class="w-full h-full object-cover" 
                alt="FERRANOVA - Equipos industriales"
                loading="lazy"
            >
            <div class="absolute inset-0 bg-black/75"></div>
        </div>

        {{-- SLIDE 3 --}}
        <div 
            class="absolute inset-0 transition-opacity duration-2000ms"
            x-bind:class="current === 2 ? 'opacity-100' : 'opacity-0'"
        >
            <img 
                src="{{ asset('asset/sections/introduction/imagenTresIntroduccion.jpg') }}"
                class="w-full h-full object-cover" 
                alt="FERRANOVA - Materiales de construcción"
                loading="lazy"
            >
            <div class="absolute inset-0 bg-black/75"></div>
        </div>

        {{-- DOTS --}}
        <div class="absolute bottom-6 left-1/2 -translate-x-1/2 flex gap-2 z-10">
            <button @click="current = 0"
                    x-bind:class="current === 0 ? 'bg-yellow-400 w-5' : 'bg-white/40 w-2'"
                    class="h-1.5 rounded-full transition-all duration-500 cursor-pointer"
                    aria-label="Ir a la imagen 1"></button>
            <button @click="current = 1"
                    x-bind:class="current === 1 ? 'bg-yellow-400 w-5' : 'bg-white/40 w-2'"
                    class="h-1.5 rounded-full transition-all duration-500 cursor-pointer"
                    aria-label="Ir a la imagen 2"></button>
            <button @click="current = 2"
                    x-bind:class="current === 2 ? 'bg-yellow-400 w-5' : 'bg-white/40 w-2'"
                    class="h-1.5 rounded-full transition-all duration-500 cursor-pointer"
                    aria-label="Ir a la imagen 3"></button>
        </div>
    </div>

    {{-- NAVEGACIÓN --}}
    <div class="relative z-20 w-full">
        @include('pages.index.layout.navegations.layout-nav')
    </div>

    {{-- CONTENIDO CENTRAL --}}
    <div class="relative z-10 flex-1 flex items-center justify-center w-full">
        <div class="w-full max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            @include('pages.index.component.sections.introduction.component-section-text')
        </div>
    </div>

</section>