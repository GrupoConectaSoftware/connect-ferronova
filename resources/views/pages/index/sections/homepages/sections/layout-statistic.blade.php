{{-- ==========================================================
    SECCIÓN: ESTADÍSTICAS FERRANOVA
    ==========================================================
    Muestra las métricas clave de FERRANOVA en un grid
    responsivo. En mobile usa 2 columnas, en tablet 3,
    en desktop 4 o más según el contenido.
    Los datos se manejan desde el componente Vue (card-statistic-component.vue)
    ========================================================== --}}

<section 
    class="bg-ferro-steel-900 w-full py-8 sm:py-5 border-t border-ferro-steel-700"
    aria-label="Estadísticas de FERRANOVA"
    role="region"
>

    <div class="max-w-5xl mx-auto px-4 sm:px-6">

        {{-- ==========================================================
            COMPONENTE VUE (ESTADÍSTICAS)
            ========================================================== --}}
        <div 
            id="stats-app"
            role="list"
            aria-label="Lista de estadísticas de FERRANOVA"
        >
            {{-- Componente Vue que renderiza las stats --}}
            <card-statistic-component></card-statistic-component>
        </div>

    </div>

</section>