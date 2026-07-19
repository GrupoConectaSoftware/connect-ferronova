<div
    x-data="{ visible: false }"
    x-cloak
    x-init="$nextTick(() => Array.from($el.querySelectorAll('[id$=-app] > * > *')).forEach((item, index) => { item.style.transitionDelay = (index * 100) + 'ms'; item.classList.add('opacity-0', 'translate-y-10', 'scale-95', 'transition-all', 'duration-700', 'ease-out') }))"
    x-intersect="visible = true; $nextTick(() => Array.from($el.querySelectorAll('[id$=-app] > * > *')).forEach((item) => { item.classList.remove('opacity-0', 'translate-y-10', 'scale-95'); item.classList.add('opacity-100', 'translate-y-0', 'scale-100') }))"
    :class="visible ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-10'"
    class="transition-all duration-700 ease-out"
>
{{-- ==========================================================
    SECCIÓN 2: CONTENIDO DE PROYECTOS (FILTROS + VUE)
    ========================================================== --}}

<section id="projects-grid" class="w-full py-16 lg:py-24 bg-ferro-background" aria-label="Listado de proyectos">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 max-w-6xl">
        
        <div class="flex flex-col md:flex-row md:items-end justify-between gap-4 mb-8">
            <div>
                <h2 class="font-heading text-3xl sm:text-4xl font-bold text-ferro-carbon-900 tracking-tight">
                    Nuestros <span class="text-ferro-yellow-500">proyectos</span>
                </h2>
                <p class="text-ferro-steel-500 text-sm mt-1">Cada obra es una historia de confianza y calidad.</p>
            </div>

            {{-- FILTROS SENCILLOS --}}
            <div class="flex flex-col sm:flex-row items-start sm:items-center gap-3 w-full md:w-auto">
                <div class="relative w-full sm:w-64">
                    <input type="text" placeholder="Buscar proyecto..." 
                           class="w-full px-4 py-2.5 bg-ferro-white border border-ferro-carbon-100/60 rounded-xl text-sm focus:outline-none focus:border-ferro-yellow-500 shadow-sm transition-all">
                </div>
                <select class="w-full sm:w-auto px-4 py-2.5 bg-ferro-white border border-ferro-carbon-100/60 rounded-xl text-sm focus:outline-none focus:border-ferro-yellow-500 shadow-sm transition-all cursor-pointer">
                    <option value="Todos">Todas las obras</option>
                    <option value="Obra civil">Obra civil</option>
                    <option value="Industrial">Industrial</option>
                    <option value="Infraestructura">Infraestructura</option>
                    <option value="Comercial">Comercial</option>
                    <option value="Energía">Energía</option>
                </select>
            </div>
        </div>

        {{-- PUNTO DE MONTAJE DEL COMPONENTE VUE --}}
        <div id="projects-app" class="w-full">
            <card-projects></card-projects>
        </div>

    </div>
</section>
</div>
