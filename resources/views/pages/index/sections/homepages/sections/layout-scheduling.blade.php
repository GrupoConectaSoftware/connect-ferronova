<div
    x-data="{ visible: false }"
    x-cloak
    x-init="$nextTick(() => Array.from($el.querySelectorAll('[id$=-app] > * > *')).forEach((item, index) => { item.style.transitionDelay = (index * 100) + 'ms'; item.classList.add('opacity-0', 'translate-y-10', 'scale-95', 'transition-all', 'duration-700', 'ease-out') }))"
    x-intersect="visible = true; $nextTick(() => Array.from($el.querySelectorAll('[id$=-app] > * > *')).forEach((item) => { item.classList.remove('opacity-0', 'translate-y-10', 'scale-95'); item.classList.add('opacity-100', 'translate-y-0', 'scale-100') }))"
    :class="visible ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-10'"
    class="transition-all duration-700 ease-out"
>
{{-- ==========================================================
    SECCIÓN: AGENDAMIENTO / ALQUILER DE EQUIPOS
    ========================================================== --}}

<section 
    class="w-full py-12 sm:py-16 bg-ferro-background"
    aria-label="Equipos para alquilar"
    role="region"
>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        {{-- ENCABEZADO --}}
        <div class="flex flex-col sm:flex-row items-start sm:items-end justify-between mb-8">
            <div>
                <span class="text-ferro-danger text-[10px] font-description font-bold uppercase tracking-[0.2em]" style="font-family: var(--font-description);">
                    Agendamiento
                </span>
                <h2 class="text-2xl sm:text-3xl font-bold text-ferro-carbon-900 mt-1" style="font-family: var(--font-heading);">
                    Equipos para <span class="text-ferro-yellow-500">alquilar</span>
                </h2>
                <p class="text-ferro-steel-500 text-sm mt-1" style="font-family: var(--font-body);">
                    Maquinaria profesional para tu obra, por hora, día, semana o mes.
                </p>
            </div>
            
        </div>

        {{-- ==========================================================
            COMPONENTE VUE
            ==========================================================
            - Mobile: scroll horizontal (1 fila)
            - Desktop: grid con altura limitada (2 filas + mitad de la tercera)
            ========================================================== --}}
        <div class="w-full">
            <div id="scheduling-app">
                <card-scheduling-component layout="catalog"></card-scheduling-component>
            </div>
        </div>

    </div>

</section>
</div>
