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
                <span class="text-ferro-yellow-500 text-[10px] font-description font-bold uppercase tracking-[0.2em]" style="font-family: var(--font-description);">
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
        <div class="sm:max-h-[calc(3*300px+2rem)] sm:overflow-y-auto sm:pr-2"
             style="scrollbar-width: thin; scrollbar-color: #FACC15 #E5E7EB;"
        >
            <div id="scheduling-app">
                <card-scheduling-component></card-scheduling-component>
            </div>
        </div>

    </div>

</section>