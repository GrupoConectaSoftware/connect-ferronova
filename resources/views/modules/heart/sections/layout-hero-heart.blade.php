{{-- ==========================================================
    SECCIÓN 1: HERO DE FAVORITOS
    ========================================================== --}}

<section class="relative z-10 w-full h-140 lg:h-162.5 overflow-hidden bg-ferro-carbon-900" aria-labelledby="heart-title">
    <figure class="absolute inset-0 w-full h-full">
        <img src="{{ asset('asset/sections/index-heart/imagen-heart.webp') }}" 
             alt="Herramientas y maquinaria favoritas" 
             class="w-full h-full object-cover opacity-60" loading="lazy" decoding="async">
        
        <div class="absolute inset-0 bg-linear-to-r from-ferro-steel-900/95 via-ferro-steel-900/70 to-transparent" aria-hidden="true"></div>
        <div class="absolute inset-0 bg-linear-to-t from-ferro-steel-900/90 via-transparent to-transparent" aria-hidden="true"></div>
    </figure>

    <div class="relative z-10 container mx-auto px-4 sm:px-6 lg:px-8 h-full flex items-center">
        <header class="max-w-2xl text-ferro-white space-y-6 pt-12 lg:pt-20">
            <hgroup>
                <div class="flex items-center gap-2 mb-4">
                    <span class="w-2 h-2 rounded-full bg-ferro-yellow-500"></span>
                    <span class="text-ferro-yellow-500 font-heading font-bold text-xs uppercase tracking-widest">Guarda tus favoritos</span>
                </div>

                <h1 id="heart-title" class="font-heading text-4xl sm:text-5xl lg:text-6xl font-bold leading-tight tracking-tight drop-shadow-sm">
                    Tus <span class="text-ferro-yellow-500">favoritos</span>
                </h1>
                <p class="mt-4 text-base sm:text-lg text-ferro-steel-300/90 font-description max-w-lg leading-relaxed">
                    Todas tus herramientas y maquinaria favoritas en un solo lugar.
                </p>
            </hgroup>
        </header>
    </div>
</section>