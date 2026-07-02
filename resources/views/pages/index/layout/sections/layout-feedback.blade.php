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
            <span class="text-ferro-yellow-500 text-[10px] font-description font-bold uppercase tracking-[0.2em]" style="font-family: var(--font-description);">
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