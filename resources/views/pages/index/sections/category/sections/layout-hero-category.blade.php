<div x-cloak x-init="$el.classList.remove('opacity-0')"
    class="opacity-0 transition-opacity duration-500 ease-out">
{{-- ==========================================================
    SECCIÓN 1: HERO DE CATÁLOGO
    ========================================================== --}}

<section class="relative z-10 w-full h-140 lg:h-162.5 overflow-hidden bg-ferro-carbon-900" aria-labelledby="catalog-title">
    <figure class="absolute inset-0 w-full h-full">
        {{-- La imagen de la bodega/estantería que enviaste --}}
        <img src="{{ asset('asset/sections/index-homepages/category/imagen-category.webp') }}"
             alt="Bodega de herramientas y maquinaria FERRANOVA" 
             class="w-full h-full object-cover opacity-60 image-loading" loading="lazy" decoding="async">
        
        {{-- Degradado 100% Negro (El de siempre, sin azul) --}}
        <div class="absolute inset-0 bg-linear-to-r from-ferro-steel-900/95 via-ferro-steel-900/70 to-transparent" aria-hidden="true"></div>
        <div class="absolute inset-0 bg-linear-to-t from-ferro-steel-900/90 via-transparent to-transparent" aria-hidden="true"></div>
    </figure>

    <div class="relative z-10 container mx-auto px-4 sm:px-6 lg:px-8 h-full flex items-center">
        <header class="max-w-2xl text-ferro-white space-y-6 pt-12 lg:pt-30">
            <hgroup>
                {{-- Badge amarillo --}}
                <div class="flex items-center gap-2 mb-4">
                    <span class="w-2 h-2 rounded-full bg-ferro-yellow-500"></span>
                    <span class="text-ferro-yellow-500 font-heading font-bold text-xs uppercase tracking-widest">Tienda</span>
                </div>

                <h1 id="catalog-title" class="font-heading text-4xl sm:text-5xl lg:text-6xl font-bold leading-tight tracking-tight drop-shadow-sm">
                    Catálogo de <span class="text-ferro-yellow-500">productos</span>
                </h1>
                <p class="mt-4 text-base sm:text-lg text-ferro-steel-300/90 font-description max-w-lg leading-relaxed">
                    Filtra, busca y previsualiza cada producto como en una tienda profesional.
                </p>
            </hgroup>

            <nav aria-label="Acciones del catálogo" class="flex flex-wrap gap-4 pt-2">
                <a href="#catalog-content" class="bg-ferro-yellow-500 hover:bg-ferro-yellow-600 text-ferro-black font-medium px-6 py-3 rounded-xl transition-all duration-300 transform hover:scale-105 shadow-lg shadow-ferro-yellow-500/25">
                    Explorar catálogo
                </a>
                <a href="https://wa.me/573184111790" target="_blank" rel="noopener noreferrer" class="border border-ferro-carbon-100/20 hover:border-ferro-yellow-500 text-ferro-white hover:text-ferro-yellow-500 font-medium px-6 py-3 rounded-xl transition-all duration-300 flex items-center gap-2 bg-ferro-carbon-900/40 backdrop-blur-sm">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
                    Cotizar por WhatsApp
                </a>
            </nav>
        </header>
    </div>
</section>
</div>
