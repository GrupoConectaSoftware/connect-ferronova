<div
    x-data="{ visible: false }"
    x-cloak
    x-init="$nextTick(() => Array.from($el.querySelectorAll('[id$=-app] > * > *')).forEach((item, index) => { item.style.transitionDelay = (index * 100) + 'ms'; item.classList.add('opacity-0', 'translate-y-10', 'scale-95', 'transition-all', 'duration-700', 'ease-out') }))"
    x-intersect="visible = true; $nextTick(() => Array.from($el.querySelectorAll('[id$=-app] > * > *')).forEach((item) => { item.classList.remove('opacity-0', 'translate-y-10', 'scale-95'); item.classList.add('opacity-100', 'translate-y-0', 'scale-100') }))"
    :class="visible ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-10'"
    class="transition-all duration-700 ease-out"
>
{{-- ==========================================================
    SECCIÓN: VENTAJAS Y BENEFICIOS
    ========================================================== --}}

<section 
    class="w-full py-12 sm:py-16 md:py-20 bg-ferro-carbon-900"
    aria-label="Ventajas y beneficios"
    role="region"
>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        {{-- ENCABEZADO --}}
        <div class="text-center max-w-2xl mx-auto mb-10 sm:mb-12 md:mb-14">
            <span class="text-ferro-yellow-500 text-[10px] sm:text-xs font-description font-bold uppercase tracking-[0.2em]" style="font-family: var(--font-description);">
                Ventajas y beneficios
            </span>
            <h2 class="text-2xl sm:text-3xl md:text-4xl font-bold text-white mt-2" style="font-family: var(--font-heading);">
                La ventaja de trabajar con <span class="text-ferro-yellow-500">expertos</span>
            </h2>
        </div>

        {{-- COMPONENTE VUE (GRID) --}}
        <div id="advantages-app">
            <card-advantage-component></card-advantage-component>
        </div>

    </div>

</section>
</div>
