{{-- ==========================================================
    SECCIÓN: LO MÁS SOLICITADO
    ========================================================== --}}

<section 
    class="w-full py-12 sm:py-16 bg-ferro-background"
    aria-label="Productos más solicitados"
    role="region"
>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        {{-- ENCABEZADO --}}
        <div class="flex flex-col sm:flex-row items-start sm:items-end justify-between mb-8">
            <div>
                <span class="text-ferro-danger text-[10px] font-description font-bold uppercase tracking-[0.2em]" style="font-family: var(--font-description);">
                    Lo más solicitado
                </span>
                <h2 class="text-2xl sm:text-3xl font-bold text-ferro-carbon-900 mt-1" style="font-family: var(--font-heading);">
                    Productos destacados
                </h2>
                <p class="text-ferro-steel-500 text-sm mt-1" style="font-family: var(--font-body);">
                    Previsualiza, cotiza o agrega al carro al instante.
                </p>
            </div>

            {{-- CONTROLES DEL CARRUSEL (SOLO DESKTOP) --}}
            <div class="hidden lg:flex gap-2 mt-4 sm:mt-0" 
                 x-data="{ 
                     scrollContainer: null, 
                     init() { 
                         this.scrollContainer = document.getElementById('carrusel-featured') 
                     } 
                 }">
                <button 
                    @click="scrollContainer.scrollBy({ left: -300, behavior: 'smooth' })"
                    class="w-10 h-10 rounded-full bg-ferro-white border border-ferro-carbon-100 hover:bg-ferro-yellow-500 hover:border-ferro-yellow-500 hover:text-ferro-black text-ferro-steel-500 transition-all duration-200 flex items-center justify-center shadow-sm"
                    aria-label="Desplazar a la izquierda"
                >
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
                    </svg>
                </button>
                <button 
                    @click="scrollContainer.scrollBy({ left: 300, behavior: 'smooth' })"
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
            id="carrusel-featured"
            class="flex gap-3 sm:gap-6 overflow-x-auto pb-4 snap-x snap-mandatory scroll-smooth"
            style="scrollbar-width: none; -ms-overflow-style: none;"
        >
            <style>
                #carrusel-featured::-webkit-scrollbar {
                    display: none;
                }
            </style>

            <div id="featured-app" class="flex gap-3 sm:gap-6">
                <card-product-component></card-product-component>
            </div>
        </div>

    </div>

</section>