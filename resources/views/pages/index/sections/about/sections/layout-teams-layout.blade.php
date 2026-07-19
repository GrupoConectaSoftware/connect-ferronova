<div
    x-data="{ visible: false }"
    x-cloak
    x-init="$nextTick(() => Array.from($el.querySelectorAll('[id$=-app] > * > *')).forEach((item, index) => { item.style.transitionDelay = (index * 100) + 'ms'; item.classList.add('opacity-0', 'translate-y-10', 'scale-95', 'transition-all', 'duration-700', 'ease-out') }))"
    x-intersect="visible = true; $nextTick(() => Array.from($el.querySelectorAll('[id$=-app] > * > *')).forEach((item) => { item.classList.remove('opacity-0', 'translate-y-10', 'scale-95'); item.classList.add('opacity-100', 'translate-y-0', 'scale-100') }))"
    :class="visible ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-10'"
    class="transition-all duration-700 ease-out"
>
{{-- ==========================================================
    SECCIÓN 7: TEAMS (CARRUSEL DE EQUIPO)
    El layout contiene el carrusel (Alpine) y monta el componente Vue.
    ========================================================== --}}

<section class="w-full py-12 sm:py-16 lg:py-20 bg-ferro-background overflow-hidden" aria-label="Nuestro equipo" role="region">

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        {{-- ENCABEZADO --}}
        <div class="flex flex-col sm:flex-row items-start sm:items-end justify-between mb-8 lg:mb-12">
            <div>
                <span class="text-ferro-yellow-500 text-[10px] font-description font-bold uppercase tracking-[0.2em]" style="font-family: var(--font-description);">
                    El alma de FERRANOVA
                </span>
                <h2 class="text-2xl sm:text-3xl lg:text-4xl font-bold text-ferro-carbon-900 mt-1 tracking-tight" style="font-family: var(--font-heading);">
                    Nuestro <span class="text-ferro-yellow-500">equipo</span>
                </h2>
                <p class="text-ferro-steel-500 text-sm mt-1 max-w-lg" style="font-family: var(--font-body);">
                    Conoce a las personas que hacen posible que cada herramienta, cada asesoría y cada entrega sea un éxito.
                </p>
            </div>

            {{-- CONTROLES DEL CARRUSEL (SOLO DESKTOP) --}}
            <div class="hidden lg:flex gap-2 mt-4 sm:mt-0" 
                 x-data="{ 
                     scrollContainer: null, 
                     init() { 
                         this.scrollContainer = document.getElementById('carrusel-teams') 
                     } 
                 }">
                <button 
                    @click="scrollContainer.scrollBy({ left: -320, behavior: 'smooth' })"
                    class="w-10 h-10 rounded-full bg-ferro-white border border-ferro-carbon-100 hover:bg-ferro-yellow-500 hover:border-ferro-yellow-500 hover:text-ferro-black text-ferro-steel-500 transition-all duration-200 flex items-center justify-center shadow-sm"
                    aria-label="Desplazar a la izquierda">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
                    </svg>
                </button>
                <button 
                    @click="scrollContainer.scrollBy({ left: 320, behavior: 'smooth' })"
                    class="w-10 h-10 rounded-full bg-ferro-white border border-ferro-carbon-100 hover:bg-ferro-yellow-500 hover:border-ferro-yellow-500 hover:text-ferro-black text-ferro-steel-500 transition-all duration-200 flex items-center justify-center shadow-sm"
                    aria-label="Desplazar a la derecha">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                    </svg>
                </button>
            </div>
        </div>

        {{-- CARRUSEL (SCROLL HORIZONTAL NATIVO) --}}
        <div 
            id="carrusel-teams"
            class="flex gap-4 sm:gap-6 overflow-x-auto pb-4 snap-x snap-mandatory scroll-smooth"
            style="scrollbar-width: none; -ms-overflow-style: none;"
        >
            <style>
                #carrusel-teams::-webkit-scrollbar { display: none; }
            </style>

            {{-- PUNTO DE MONTAJE DEL COMPONENTE VUE --}}
            <div id="team-card-app" class="flex gap-4 sm:gap-6">
                <card-team-component></card-team-component>
            </div>
        </div>

    </div>
</section>
</div>
