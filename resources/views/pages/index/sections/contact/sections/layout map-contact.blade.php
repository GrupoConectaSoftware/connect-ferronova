<div
    x-data="{ visible: false }"
    x-cloak
    x-init="$nextTick(() => Array.from($el.querySelectorAll('[id$=-app] > * > *')).forEach((item, index) => { item.style.transitionDelay = (index * 100) + 'ms'; item.classList.add('opacity-0', 'translate-y-10', 'scale-95', 'transition-all', 'duration-700', 'ease-out') }))"
    x-intersect="visible = true; $nextTick(() => Array.from($el.querySelectorAll('[id$=-app] > * > *')).forEach((item) => { item.classList.remove('opacity-0', 'translate-y-10', 'scale-95'); item.classList.add('opacity-100', 'translate-y-0', 'scale-100') }))"
    :class="visible ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-10'"
    class="transition-all duration-700 ease-out"
>
{{-- ==========================================================
    SECCIÓN 3: MAPA (ENCUÉNTRANOS)
    ==========================================================
    ANCHO COMPLETO · MAPA SATÉLITE · RELIEVE SUTIL
    ========================================================== --}}

<section class="relative w-full py-8 lg:py-10 bg-ferro-background overflow-hidden" aria-label="Ubicación de FERRANOVA">

    {{-- ENCABEZADO (Dentro del container con padding) --}}
    <div class="relative z-10 container mx-auto px-4 sm:px-6 lg:px-8 max-w-7xl mb-8 lg:mb-10">
        <div class="max-w-3xl">
            <h2 class="font-heading text-3xl sm:text-4xl lg:text-5xl font-bold text-ferro-carbon-900 tracking-tight leading-tight">
                Encuéntranos
            </h2>
            <p class="text-ferro-steel-500 font-description text-base lg:text-lg mt-2 max-w-2xl leading-relaxed">
                Estamos ubicados en el corazón industrial de Bogotá, con fácil acceso desde las principales vías de la ciudad. 
                Contamos con un amplio parqueadero y una zona de carga y descarga para garantizar una logística rápida y segura en cada visita o despacho.
            </p>
        </div>
    </div>

    {{-- MAPA (100% ANCHO, VISTA SATÉLITE) --}}
    <div class="relative w-full h-95 sm:h-145 lg:hlg:hl14:2xl shadow-ferro-carbon-900/10 border border-ferro-carbon-100/20">
        
        {{-- Google Maps Iframe (Modo Satélite) --}}
        <iframe 
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3976.964094789832!2d-74.07779832403643!3d4.629421043292908!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f9a2e3b5c9b2f%3A0x7b8f0e0d0f0f0f0f!2sBogot%C3%A1%2C%20Colombia!5e0!3m2!1ses!2sco!4v1715000000000!5m2!1ses!2sco&maptype=satellite" 
            width="100%" 
            height="100%" 
            style="border:0;" 
            allowfullscreen="" 
            loading="lazy" 
            referrerpolicy="no-referrer-when-downgrade"
            title="Mapa satélite de ubicación de FERRANOVA en Bogotá"
        ></iframe>

    </div>

</section>
</div>
