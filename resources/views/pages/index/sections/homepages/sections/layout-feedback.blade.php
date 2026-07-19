<div
    x-data="{ visible: false }"
    x-cloak
    x-init="$nextTick(() => Array.from($el.querySelectorAll('[id$=-app] > * > *')).forEach((item, index) => { item.style.transitionDelay = (index * 100) + 'ms'; item.classList.add('opacity-0', 'translate-y-10', 'scale-95', 'transition-all', 'duration-700', 'ease-out') }))"
    x-intersect="visible = true; $nextTick(() => Array.from($el.querySelectorAll('[id$=-app] > * > *')).forEach((item) => { item.classList.remove('opacity-0', 'translate-y-10', 'scale-95'); item.classList.add('opacity-100', 'translate-y-0', 'scale-100') }))"
    :class="visible ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-10'"
    class="transition-all duration-700 ease-out"
>
{{-- ==========================================================
    SECCIÓN: RESEÑAS VERIFICADAS
    ========================================================== --}}

<section 
    class="w-full py-12 sm:py-16 md:py-20 bg-ferro-background"
    aria-label="Reseñas verificadas"
    role="region"
>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        {{-- ENCABEZADO --}}
        <div class="text-center max-w-2xl mx-auto mb-10 sm:mb-12">
            <span class="text-ferro-danger text-[10px] font-description font-bold uppercase tracking-[0.2em]" style="font-family: var(--font-description);">
                Reseñas verificadas
            </span>
            <h2 class="text-2xl sm:text-3xl md:text-4xl font-bold text-ferro-carbon-900 mt-1" style="font-family: var(--font-heading);">
                Lo que dicen <span class="text-ferro-yellow-500">nuestros clientes</span>
            </h2>
            <p class="text-ferro-steel-500 text-sm mt-1" style="font-family: var(--font-body);">
                Miles de proyectos respaldados por la confianza de empresas y contratistas.
            </p>
        </div>

        {{-- COMPONENTE VUE --}}
        <div id="feedback-app">
            <card-feedback-component></card-feedback-component>
        </div>

    </div>

</section>
</div>
