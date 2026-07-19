<div
    x-data="{ visible: false }"
    x-cloak
    x-init="$nextTick(() => Array.from($el.querySelectorAll('[id$=-app] > * > *')).forEach((item, index) => { item.style.transitionDelay = (index * 100) + 'ms'; item.classList.add('opacity-0', 'translate-y-10', 'scale-95', 'transition-all', 'duration-700', 'ease-out') }))"
    x-intersect="visible = true; $nextTick(() => Array.from($el.querySelectorAll('[id$=-app] > * > *')).forEach((item) => { item.classList.remove('opacity-0', 'translate-y-10', 'scale-95'); item.classList.add('opacity-100', 'translate-y-0', 'scale-100') }))"
    :class="visible ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-10'"
    class="transition-all duration-700 ease-out"
>
{{-- ==========================================================
    SECCIÓN 3: TIME (LÍNEA DE TRAYECTORIA - RETOQUE FINAL)
    ========================================================== --}}

<section class="relative w-full py-20 lg:py-28 bg-[#0e1624] overflow-hidden" aria-label="Nuestra trayectoria">
    
    {{-- DEGRADADO SUAVE PARA DIFUMINAR LA ENTRADA Y SALIDA --}}
    <div class="absolute inset-x-0 top-0 h-32 bg-linear-to-b from-ferro-background via-ferro-background/80 to-transparent pointer-events-none z-10"></div>
    <div class="absolute inset-x-0 bottom-0 h-32 bg-linear-to-t from-ferro-background via-ferro-background/80 to-transparent pointer-events-none z-10"></div>

    <div class="relative z-10 container mx-auto px-4 sm:px-6 lg:px-8 max-w-7xl">
        
        {{-- ENCABEZADO --}}
        <div class="text-center max-w-3xl mx-auto mb-12 lg:mb-16">
            <span class="inline-block text-ferro-yellow-500 font-heading font-bold text-xs uppercase tracking-widest mb-3 border-b-2 border-ferro-yellow-500 pb-1">Nuestra historia</span>
            <h2 class="font-heading text-4xl sm:text-5xl lg:text-6xl font-bold text-ferro-white tracking-tight leading-tight">
                Una trayectoria que respalda <br><span class="text-ferro-yellow-500">cada obra</span>
            </h2>
        </div>

        {{-- CONTENEDOR DE LA LÍNEA DE TIEMPO --}}
        <div class="relative z-10 w-full max-w-6xl mx-auto flex flex-wrap lg:flex-nowrap items-start lg:items-center justify-center gap-8 lg:gap-4">
            
            {{-- Línea de base (Acero industrial) --}}
            <div class="hidden lg:block absolute left-0 right-0 top-[50%] h-0.5 bg-ferro-steel-500/20 z-0 -translate-y-1/2"></div>

            {{-- ==========================================================
                HITO 2021
                ========================================================== --}}
            <div class="relative z-10 flex flex-col items-center w-[45%] sm:w-[30%] lg:w-auto group max-w-56 lg:max-w-56 cursor-pointer">
                <div class="relative flex flex-col items-center mb-4 lg:mb-6">
                    <div class="font-heading text-3xl lg:text-4xl font-bold text-ferro-white/80 group-hover:text-ferro-yellow-500 transition-colors duration-300 tracking-tight">2021</div>
                    <div class="absolute -bottom-4 lg:-bottom-6 left-1/2 -translate-x-1/2 w-3 h-3 rounded-full bg-ferro-yellow-500 shadow-[0_0_15px_rgba(250,204,21,0.4)] group-hover:shadow-[0_0_25px_rgba(250,204,21,0.8)] transition-all duration-300 ring-4 ring-[#0b1320]"></div>
                </div>
                
                <div class="w-full bg-[#0b1320]/80 backdrop-blur-sm border border-ferro-white/10 rounded-xl p-5 text-center transition-all duration-300 group-hover:bg-[#0b1320]/90 group-hover:border-ferro-yellow-500/20 group-hover:-translate-y-1 shadow-lg shadow-ferro-black/20 h-full flex flex-col justify-center min-h-35">
                    <h4 class="font-heading text-sm font-bold text-ferro-yellow-500 mb-1 uppercase tracking-wide">Fundación</h4>
                    <p class="text-[13px] text-ferro-white/80 font-description leading-relaxed group-hover:text-ferro-white transition-colors duration-300">
                        Nace FERRANOVA con una bodega y 200 referencias iniciales.
                    </p>
                </div>
            </div>

            {{-- ==========================================================
                HITO 2022
                ========================================================== --}}
            <div class="relative z-10 flex flex-col items-center w-[45%] sm:w-[30%] lg:w-auto group max-w-56 lg:max-w-56 cursor-pointer">
                <div class="relative flex flex-col items-center mb-4 lg:mb-6">
                    <div class="font-heading text-3xl lg:text-4xl font-bold text-ferro-white/80 group-hover:text-ferro-yellow-500 transition-colors duration-300 tracking-tight">2022</div>
                    <div class="absolute -bottom-4 lg:-bottom-6 left-1/2 -translate-x-1/2 w-3 h-3 rounded-full bg-ferro-yellow-500 shadow-[0_0_15px_rgba(250,204,21,0.4)] group-hover:shadow-[0_0_25px_rgba(250,204,21,0.8)] transition-all duration-300 ring-4 ring-[#0b1320]"></div>
                </div>
                <div class="w-full bg-[#0b1320]/80 backdrop-blur-sm border border-ferro-white/10 rounded-xl p-5 text-center transition-all duration-300 group-hover:bg-[#0b1320]/90 group-hover:border-ferro-yellow-500/20 group-hover:-translate-y-1 shadow-lg shadow-ferro-black/20 h-full flex flex-col justify-center min-h-35">
                    <h4 class="font-heading text-sm font-bold text-ferro-yellow-500 mb-1 uppercase tracking-wide">Expansión</h4>
                    <p class="text-[13px] text-ferro-white/80 font-description leading-relaxed group-hover:text-ferro-white transition-colors duration-300">
                        Lanzamiento del servicio de alquiler de maquinaria pesada.
                    </p>
                </div>
            </div>

            {{-- ==========================================================
                HITO 2023
                ========================================================== --}}
            <div class="relative z-10 flex flex-col items-center w-[45%] sm:w-[30%] lg:w-auto group max-w-56 lg:max-w-56 cursor-pointer">
                <div class="relative flex flex-col items-center mb-4 lg:mb-6">
                    <div class="font-heading text-3xl lg:text-4xl font-bold text-ferro-white/80 group-hover:text-ferro-yellow-500 transition-colors duration-300 tracking-tight">2023</div>
                    <div class="absolute -bottom-4 lg:-bottom-6 left-1/2 -translate-x-1/2 w-3 h-3 rounded-full bg-ferro-yellow-500 shadow-[0_0_15px_rgba(250,204,21,0.4)] group-hover:shadow-[0_0_25px_rgba(250,204,21,0.8)] transition-all duration-300 ring-4 ring-[#0b1320]"></div>
                </div>
                <div class="w-full bg-[#0b1320]/80 backdrop-blur-sm border border-ferro-white/10 rounded-xl p-5 text-center transition-all duration-300 group-hover:bg-[#0b1320]/90 group-hover:border-ferro-yellow-500/20 group-hover:-translate-y-1 shadow-lg shadow-ferro-black/20 h-full flex flex-col justify-center min-h-35">
                    <h4 class="font-heading text-sm font-bold text-ferro-yellow-500 mb-1 uppercase tracking-wide">Crecimiento</h4>
                    <p class="text-[13px] text-ferro-white/80 font-description leading-relaxed group-hover:text-ferro-white transition-colors duration-300">
                        Superamos los 500 clientes empresariales activos.
                    </p>
                </div>
            </div>

            {{-- ==========================================================
                HITO 2024
                ========================================================== --}}
            <div class="relative z-10 flex flex-col items-center w-[45%] sm:w-[30%] lg:w-auto group max-w-56 lg:max-w-56 cursor-pointer">
                <div class="relative flex flex-col items-center mb-4 lg:mb-6">
                    <div class="font-heading text-3xl lg:text-4xl font-bold text-ferro-white/80 group-hover:text-ferro-yellow-500 transition-colors duration-300 tracking-tight">2024</div>
                    <div class="absolute -bottom-4 lg:-bottom-6 left-1/2 -translate-x-1/2 w-3 h-3 rounded-full bg-ferro-yellow-500 shadow-[0_0_15px_rgba(250,204,21,0.4)] group-hover:shadow-[0_0_25px_rgba(250,204,21,0.8)] transition-all duration-300 ring-4 ring-[#0b1320]"></div>
                </div>
                <div class="w-full bg-[#0b1320]/80 backdrop-blur-sm border border-ferro-white/10 rounded-xl p-5 text-center transition-all duration-300 group-hover:bg-[#0b1320]/90 group-hover:border-ferro-yellow-500/20 group-hover:-translate-y-1 shadow-lg shadow-ferro-black/20 h-full flex flex-col justify-center min-h-35">
                    <h4 class="font-heading text-sm font-bold text-ferro-yellow-500 mb-1 uppercase tracking-wide">Consolidación</h4>
                    <p class="text-[13px] text-ferro-white/80 font-description leading-relaxed group-hover:text-ferro-white transition-colors duration-300">
                        Apertura de centro logístico y cobertura nacional.
                    </p>
                </div>
            </div>

            {{-- ==========================================================
                HITO 2026 (DESTACADO, MISMO ANCHO Y SHADOW SUAVE)
                ========================================================== --}}
            <div class="relative z-10 flex flex-col items-center w-[45%] sm:w-[30%] lg:w-auto group max-w-56 lg:max-w-56 cursor-pointer">
                <div class="relative flex flex-col items-center mb-4 lg:mb-6">
                    <div class="font-heading text-4xl lg:text-5xl font-bold text-ferro-yellow-500 drop-shadow-[0_0_10px_rgba(250,204,21,0.3)] tracking-tight">2026</div>
                    <div class="absolute -bottom-4 lg:-bottom-6 left-1/2 -translate-x-1/2 w-4 h-4 rounded-full bg-ferro-yellow-500 shadow-[0_0_10px_rgba(250,204,21,0.4)] ring-4 ring-ferro-yellow-500/20"></div>
                </div>
                <div class="w-full bg-[#0b1320]/90 backdrop-blur-sm border-2 border-ferro-yellow-500/60 rounded-xl p-6 text-center shadow-[0_0_15px_rgba(250,204,21,0.08)] transition-all duration-300 group-hover:shadow-[0_0_25px_rgba(250,204,21,0.15)] group-hover:-translate-y-1 h-full flex flex-col justify-center min-h-35">
                    <h4 class="font-heading text-[15px] font-bold text-ferro-yellow-500 mb-2 uppercase tracking-wide">Innovación</h4>
                    <p class="text-[14px] text-ferro-white/90 font-description leading-relaxed">
                        +10.000 productos y plataforma digital corporativa con inteligencia de stock en tiempo real.
                    </p>
                </div>
            </div>

        </div>
    </div>
</section>
</div>
