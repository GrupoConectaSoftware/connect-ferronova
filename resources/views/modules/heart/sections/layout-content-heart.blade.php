{{-- ==========================================================
    SECCIÓN 2: CONTENIDO DE FAVORITOS
    ========================================================== --}}

<section class="w-full bg-ferro-background py-16 lg:py-24" aria-label="Lista de productos favoritos">
    <div class="container mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div id="favorites-list-app">
            <favorite-list catalog-url="{{ route('category') }}"></favorite-list>
        </div>
    </div>
</section>
