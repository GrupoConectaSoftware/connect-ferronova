{{-- ==========================================================
    SECCIÓN 6: SPLIT (IMAGEN 50vw / 100vh - SIN PADDING)
    ========================================================== --}}

{{-- ELIMINAMOS CUALQUIER PADDING, MARGEN O CONTENEDOR CENTRALIZADO --}}
<section class="relative w-full min-h-screen bg-ferro-background overflow-hidden">
    
    <div class="flex flex-col lg:flex-row w-full min-h-screen">

        {{-- COLUMNA IZQUIERDA: IMAGEN (50vw EXACTO, 100vh EXACTO) --}}
        <div class="w-full lg:w-[50vw] h-screen p-0 m-0 bg-ferro-steel-900 relative shrink-0">
            <img src="{{ asset('asset/sections/index-nosotros/split-about/imagen-split.png') }}" 
                 alt="Vista industrial de FERRANOVA" 
                 class="w-full h-full object-cover">
        </div>

        {{-- COLUMNA DERECHA: TEXTO Y MISIÓN/VISIÓN --}}
        <div class="w-full lg:flex-1 min-h-screen bg-ferro-white p-8 lg:p-14 xl:p-5 flex flex-col justify-center">
            
            {{-- ENCABEZADO --}}
            <div class="mb-8 lg:mb-12 max-w-lg">
                <span class="inline-flex items-center gap-2 text-ferro-carbon-500 font-mono font-medium text-[11px] uppercase tracking-[0.25em] mb-5">
                    <span class="w-6 h-px bg-ferro-yellow-500"></span>
                    El valor de FERRANOVA
                </span>
                <h2 class="font-heading text-4xl lg:text-5xl font-bold text-ferro-carbon-900 tracking-tight leading-[1.05] mb-4">
                    Más que una <br><span class="text-ferro-yellow-500">ferretería</span>
                </h2>
                <p class="font-description text-ferro-steel-500 text-base lg:text-lg leading-relaxed">
                    Nuestra ventaja competitiva no está solo en el inventario. Está en la forma en que entendemos tu obra y te acompañamos en cada paso.
                </p>
            </div>

            {{-- MISIÓN Y VISIÓN --}}
            <div class="grid grid-cols-1 gap-6 lg:gap-8 max-w-lg">
                
                {{-- MISIÓN --}}
                <div class="flex items-start gap-4">
                    <div class="w-12 h-12 rounded-2xl bg-ferro-steel-100 text-ferro-carbon-900 flex items-center justify-center shrink-0 mt-0.5">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M3.75 13.5l10.5-11.25L12 10.5h8.25L9.75 21.75 12 13.5H3.75z" />
                        </svg>
                    </div>
                    <div>
                        <h4 class="font-heading text-lg font-bold text-ferro-carbon-900 mb-1 tracking-tight">Misión</h4>
                        <p class="text-sm text-ferro-steel-500 font-description leading-relaxed">
                            Proveer a la construcción y la manufactura con herramientas y maquinaria de la más alta calidad, respaldados por una asesoría experta y un servicio logístico eficiente.
                        </p>
                    </div>
                </div>

                {{-- VISIÓN --}}
                <div class="flex items-start gap-4">
                    <div class="w-12 h-12 rounded-2xl bg-ferro-steel-100 text-ferro-carbon-900 flex items-center justify-center shrink-0 mt-0.5">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                    </div>
                    <div>
                        <h4 class="font-heading text-lg font-bold text-ferro-carbon-900 mb-1 tracking-tight">Visión</h4>
                        <p class="text-sm text-ferro-steel-500 font-description leading-relaxed">
                            Ser la plataforma industrial líder en Colombia, destacándonos por la innovación, la excelencia en el servicio y la confianza inquebrantable de nuestros aliados.
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>