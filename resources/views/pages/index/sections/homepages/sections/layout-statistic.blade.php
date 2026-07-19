{{-- Sección de prueba: animación de entrada con Alpine Intersect. --}}
<section
    x-data="{ visible: false }"
    x-intersect="visible = true"
    x-cloak
    :class="visible ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-10'"
    class="w-full border-t border-ferro-steel-700 bg-ferro-steel-900 py-8 transition-all duration-700 ease-out sm:py-5"
    aria-label="Estadísticas de FERRANOVA"
    role="region"
>
    <div class="mx-auto max-w-5xl px-4 sm:px-6">
        <div
            id="stats-app"
            role="list"
            aria-label="Lista de estadísticas de FERRANOVA"
        >
            <card-statistic-component></card-statistic-component>
        </div>
    </div>
</section>
