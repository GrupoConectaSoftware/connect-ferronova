<div
    x-data="{ visible: false }"
    x-cloak
    x-init="$nextTick(() => Array.from($el.querySelectorAll('[id$=-app] > * > *')).forEach((item, index) => { item.style.transitionDelay = (index * 100) + 'ms'; item.classList.add('opacity-0', 'translate-y-10', 'scale-95', 'transition-all', 'duration-700', 'ease-out') }))"
    x-intersect="visible = true; $nextTick(() => Array.from($el.querySelectorAll('[id$=-app] > * > *')).forEach((item) => { item.classList.remove('opacity-0', 'translate-y-10', 'scale-95'); item.classList.add('opacity-100', 'translate-y-0', 'scale-100') }))"
    :class="visible ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-10'"
    class="transition-all duration-700 ease-out"
>
{{-- ==========================================================
    SECCIÓN: ATENCIÓN EMPRESARIAL
    ========================================================== --}}

<section 
    class="w-full py-16 sm:py-20 lg:py-28 bg-ferro-carbon-900 relative overflow-hidden"
    aria-label="Atención empresarial"
    role="region"
>

    {{-- DETALLE DECORATIVO (línea sutil) --}}
    <div class="absolute top-0 left-0 w-full h-1 bg-linear-to-r from-transparent via-ferro-yellow-500/30 to-transparent"></div>

    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10">

        {{-- BADGE SUAVE --}}
        <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full border0 mb-5">
            <span class="text-ferro-yellow-500 text-[10px] sm:text-xs font-description font-medium uppercase tracking-[0.15em]" style="font-family: var(--font-description);">
                Atención empresarial
            </span>
        </div>

        {{-- TÍTULO --}}
        <h2 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-heading font-bold text-ferro-white leading-tight" style="font-family: var(--font-heading);">
            ¿Listo para impulsar tu <span class="text-ferro-yellow-500">próximo proyecto</span>?
        </h2>

        {{-- DESCRIPCIÓN --}}
        <p class="mt-4 sm:mt-5 text-ferro-steel-300 font-body leading-relaxed max-w-xl mx-auto text-sm sm:text-base" style="font-family: var(--font-body);">
            Solicita una cotización a medida o agenda una asesoría técnica sin compromiso.
            <span class="block sm:inline text-ferro-steel-400 text-xs sm:text-sm mt-1 sm:mt-0">
                Nuestro equipo está listo para ayudarte.
            </span>
        </p>

        {{-- BOTONES --}}
        <div class="mt-7 sm:mt-9 flex flex-wrap gap-3 sm:gap-4 justify-center">
            
            {{-- Botón principal: WhatsApp --}}
            <a href="https://wa.me/573184111790?text=Hola%20FERRANOVA!%20Quiero%20cotizar%20mi%20proyecto"
               target="_blank"
               rel="noopener noreferrer"
               class="inline-flex items-center gap-2 bg-ferro-yellow-500 hover:bg-ferro-yellow-600 text-ferro-black px-7 sm:px-9 py-3 sm:py-3.5 rounded-lg text-sm sm:text-base font-heading font-bold transition-all duration-200 hover:scale-[1.02] shadow-lg shadow-ferro-yellow-500/10"
            >
                <svg class="w-4 h-4 sm:w-5 sm:h-5" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/>
                </svg>
                Cotizar por WhatsApp
            </a>

            {{-- Botón secundario --}}
            <a href="{{ route('about') }}"
               class="inline-flex items-center gap-1.5 bg-ferro-white/5 hover:bg-ferro-white/10 text-ferro-white border border-ferro-white/10 hover:border-ferro-white/20 px-6 sm:px-8 py-3 sm:py-3.5 rounded-lg text-sm sm:text-base font-heading font-medium transition-all duration-200 backdrop-blur-sm"
            >
                Ver más beneficios
                <svg class="w-4 h-4 sm:w-5 sm:h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                </svg>
            </a>

        </div>

        {{-- LÍNEA DECORATIVA INFERIOR --}}
        <div class="mt-10 sm:mt-12 flex items-center justify-center gap-3 text-ferro-steel-300 text-xs font-body">
            <span class="w-8 h-px bg-ferro-steel-300"></span>
            <span>Sin compromiso · Asesoría técnica · Cotización a medida</span>
            <span class="w-8 h-px bg-ferro-steel-300"></span>
        </div>

    </div>

</section>
</div>
