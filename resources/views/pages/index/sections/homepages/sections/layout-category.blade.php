<div
    x-data="{ visible: false }"
    x-cloak
    x-init="$nextTick(() => Array.from($el.querySelectorAll('[id$=-app] > * > *')).forEach((item, index) => { item.style.transitionDelay = (index * 100) + 'ms'; item.classList.add('opacity-0', 'translate-y-10', 'scale-95', 'transition-all', 'duration-700', 'ease-out') }))"
    x-intersect="visible = true; $nextTick(() => Array.from($el.querySelectorAll('[id$=-app] > * > *')).forEach((item) => { item.classList.remove('opacity-0', 'translate-y-10', 'scale-95'); item.classList.add('opacity-100', 'translate-y-0', 'scale-100') }))"
    :class="visible ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-10'"
    class="transition-all duration-700 ease-out"
>
{{-- ==========================================================
    SECCIÓN: CATEGORÍAS DESTACADAS
    ========================================================== --}}

<section 
    class="w-full py-12 sm:py-16 bg-ferro-background"
    aria-label="Categorías destacadas"
    role="region"
>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        {{-- ENCABEZADO --}}
        <div class="flex flex-col sm:flex-row items-start sm:items-end justify-between mb-8">
            <div>
                <span class="text-ferro-danger text-[10px] font-description font-bold uppercase tracking-[0.2em]" style="font-family: var(--font-description);">
                    Categorías
                </span>
                <h2 class="text-2xl sm:text-3xl font-bold text-ferro-carbon-900 mt-1" style="font-family: var(--font-heading);">
                    Categorías destacadas
                </h2>
                <p class="text-ferro-steel-500 text-sm mt-1" style="font-family: var(--font-body);">
                    Encuentra rápido lo que tu obra necesita.
                </p>
            </div>

            {{-- CONTROLES DEL CARRUSEL (SOLO DESKTOP) --}}
            <div class="hidden lg:flex gap-2 mt-4 sm:mt-0" 
                 x-data="{ 
                     scrollContainer: null, 
                     init() { 
                         this.scrollContainer = document.getElementById('carrusel-categories') 
                     } 
                 }">
                <button 
                    @click="scrollContainer.scrollBy({ left: -200, behavior: 'smooth' })"
                    class="w-10 h-10 rounded-full bg-ferro-white border border-ferro-carbon-100 hover:bg-ferro-yellow-500 hover:border-ferro-yellow-500 hover:text-ferro-black text-ferro-steel-500 transition-all duration-200 flex items-center justify-center shadow-sm"
                    aria-label="Desplazar a la izquierda"
                >
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
                    </svg>
                </button>
                <button 
                    @click="scrollContainer.scrollBy({ left: 200, behavior: 'smooth' })"
                    class="w-10 h-10 rounded-full bg-ferro-white border border-ferro-carbon-100 hover:bg-ferro-yellow-500 hover:border-ferro-yellow-500 hover:text-ferro-black text-ferro-steel-500 transition-all duration-200 flex items-center justify-center shadow-sm"
                    aria-label="Desplazar a la derecha"
                >
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                    </svg>
                </button>
            </div>
        </div>

        {{-- CARRUSEL --}}
        <div 
            id="carrusel-categories"
            class="flex gap-4 sm:gap-5 overflow-x-auto pb-4 snap-x snap-mandatory scroll-smooth"
            style="scrollbar-width: none; -ms-overflow-style: none;"
        >
            <style>
                #carrusel-categories::-webkit-scrollbar {
                    display: none;
                }
            </style>

            {{-- COMPONENTE VUE --}}
            <div id="categories-app" class="flex gap-4 sm:gap-5">
                <card-category-component></card-category-component>
            </div>
        </div>

    </div>

</section>
</div>
