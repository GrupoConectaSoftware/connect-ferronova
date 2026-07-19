<section id="catalogo-unidad" class="w-full py-12 lg:py-16 bg-ferro-background" aria-labelledby="catalogo-title">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 max-w-7xl">
        
        {{-- ENCABEZADO: TÍTULO + BUSCADOR --}}
        <div class="flex flex-col sm:flex-row sm:items-end justify-between gap-4 mb-6 lg:mb-8">
            <div>
                <h2 id="catalogo-title" class="font-heading text-2xl sm:text-3xl lg:text-4xl font-bold text-ferro-carbon-900 tracking-tight">
                    Catálogo <span class="text-ferro-yellow-500">por unidad</span>
                </h2>
                <p class="mt-1 text-ferro-steel-500 text-sm font-description">Encuentra la pieza exacta para tu proyecto.</p>
            </div>
            
            {{-- BUSCADOR --}}
            <div class="relative w-full sm:w-72 lg:w-80 group">
                <div class="absolute inset-y-0 left-0 pl-3.5 flex items-center pointer-events-none">
                    <svg class="w-5 h-5 text-ferro-steel-400 transition-colors duration-200 group-focus-within:text-ferro-yellow-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                    </svg>
                </div>
                <input type="text" 
                       placeholder="Buscar fijación, tornillo, arandela..." 
                       class="w-full pl-11 pr-4 py-3 text-sm font-body text-ferro-carbon-900 bg-ferro-white border border-ferro-carbon-100/60 rounded-xl focus:outline-none focus:ring-2 focus:ring-ferro-yellow-500/30 focus:border-ferro-yellow-500 shadow-sm transition-all placeholder:text-ferro-steel-400">
            </div>
        </div>

        {{-- FILTROS RÁPIDOS POR CATEGORÍA (DESLIZABLES EN MÓVIL) --}}
        <div class="flex items-center gap-2.5 mb-8 lg:mb-10 pb-2 overflow-x-auto flex-nowrap snap-x snap-mandatory scroll-smooth no-scrollbar">
            <button class="snap-center shrink-0 px-4 py-2 bg-ferro-carbon-900 text-ferro-white text-xs font-semibold rounded-full shadow-sm shadow-ferro-carbon-900/10 transition-all font-heading">
                Todos
            </button>
            <button class="snap-center shrink-0 px-4 py-2 bg-ferro-white border border-ferro-carbon-100/60 hover:border-ferro-yellow-500/50 text-ferro-carbon-700 hover:text-ferro-carbon-900 text-xs font-medium rounded-full transition-all shadow-sm hover:shadow-md font-body">
                Tornillos
            </button>
            <button class="snap-center shrink-0 px-4 py-2 bg-ferro-white border border-ferro-carbon-100/60 hover:border-ferro-yellow-500/50 text-ferro-carbon-700 hover:text-ferro-carbon-900 text-xs font-medium rounded-full transition-all shadow-sm hover:shadow-md font-body">
                Arandelas
            </button>
            <button class="snap-center shrink-0 px-4 py-2 bg-ferro-white border border-ferro-carbon-100/60 hover:border-ferro-yellow-500/50 text-ferro-carbon-700 hover:text-ferro-carbon-900 text-xs font-medium rounded-full transition-all shadow-sm hover:shadow-md font-body">
                Tuercas & Pernos
            </button>
            <button class="snap-center shrink-0 px-4 py-2 bg-ferro-white border border-ferro-carbon-100/60 hover:border-ferro-yellow-500/50 text-ferro-carbon-700 hover:text-ferro-carbon-900 text-xs font-medium rounded-full transition-all shadow-sm hover:shadow-md font-body">
                Clavos & Fijaciones
            </button>

            {{-- SELECT DE ORDENAMIENTO (Solo escritorio) --}}
            <div class="ml-auto hidden sm:block shrink-0 pl-4 border-l border-ferro-carbon-100/40">
                <select class="bg-transparent text-ferro-steel-500 text-sm font-body font-medium border-0 focus:ring-0 cursor-pointer hover:text-ferro-carbon-900 transition-colors">
                    <option>Ordenar</option>
                    <option>Precio: Menor a Mayor</option>
                    <option>Precio: Mayor a Menor</option>
                    <option>Nombre: A-Z</option>
                </select>
            </div>
        </div>

        {{-- PUNTO DE MONTAJE DEL COMPONENTE VUE (BOLSA CON SCROLL INFINITO OCULTO) --}}
        <div id="united-products-app" class="w-full sm:max-h-175 lg:max-h-150 sm:overflow-y-auto no-scrollbar">
            <card-united-component layout="catalog"></card-united-component>
        </div>

    </div>
</section>

<style>
/* Clase para ocultar la barra de scroll en los filtros móviles y en la bolsa de productos */
.no-scrollbar::-webkit-scrollbar {
    display: none;
}
.no-scrollbar {
    -ms-overflow-style: none;
    scrollbar-width: none;
}
</style>
