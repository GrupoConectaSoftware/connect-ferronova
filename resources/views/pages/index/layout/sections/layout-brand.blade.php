{{-- ==========================================================
    SECCIÓN: MARCAS ALIADAS
    ========================================================== --}}

<section 
    class="w-full py-12 sm:py-16 bg-ferro-background border-y border-ferro-carbon-100/30"
    aria-label="Marcas aliadas"
    role="region"
>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        {{-- ENCABEZADO --}}
        <div class="text-center max-w-2xl mx-auto mb-8 sm:mb-10">
            <span class="text-ferro-danger text-[10px] sm:text-xs font-description font-bold uppercase tracking-[0.2em]" style="font-family: var(--font-description);">
                Confianza
            </span>
            <h2 class="text-2xl sm:text-3xl font-bold text-ferro-carbon-900 mt-1" style="font-family: var(--font-heading);">
                Marcas <span class="text-ferro-yellow-500">aliadas</span>
            </h2>
            <p class="text-ferro-steel-500 text-sm mt-1" style="font-family: var(--font-body);">
                Las mejores marcas del sector industrial trabajan con nosotros.
            </p>
        </div>

        {{-- COMPONENTE VUE --}}
        <div id="brand-app">
            <card-brand-component></card-brand-component>
        </div>

    </div>

</section>