{{-- ==========================================================
    SECCIÓN 2: PRESENTATION (QUIÉNES SOMOS + COLLAGE)
    ========================================================== --}}

<section id="about-us" class="relative w-full py-16 lg:py-24 bg-ferro-background overflow-hidden" aria-label="Quiénes somos">
    
    {{-- PATRÓN DE CUADRÍCULA SUTIL EN TODA LA SECCIÓN --}}
    <div class="absolute inset-0 bg-[linear-gradient(to_right,#8080800C_1px,transparent_1px),linear-gradient(to_bottom,#8080800C_1px,transparent_1px)] bg-size-[24px_24px] pointer-events-none z-0"></div>
    
    {{-- DEGRADADO SUAVE ENCIMA DE LA CUADRÍCULA (Para que no opaque el texto) --}}
    <div class="absolute inset-0 bg-linear-to-b from-ferro-white/80 via-ferro-white/30 to-ferro-background/90 pointer-events-none z-0"></div>

    <div class="relative z-10 container mx-auto px-4 sm:px-6 lg:px-8 max-w-7xl">
        
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-24 items-start lg:items-center">

            {{-- COLUMNA IZQUIERDA: COLLAGE DE IMÁGENES SUPERPUESTAS --}}
            <div class="hidden lg:block relative h-130 lg:h-145 w-full">
                               
                {{-- IMAGEN CENTRAL (GIGANTE) --}}
                <div class="absolute top-0 -left-4 w-[calc(100%+2rem)] h-full rounded-2xl overflow-hidden shadow-[0_20px_50px_rgba(0,0,0,0.12)] z-10 border-[6px] border-ferro-white">
                    <img src="{{ asset('asset/sections/index-about/presentation-about/imagen-presentation.webp') }}" alt="Vista panorámica de la ferretería" class="w-full h-full object-cover grayscale-50 transition-all duration-700 hover:grayscale-0 image-loading" loading="lazy" decoding="async">
                </div>

                {{-- IMAGEN SUPERIOR IZQUIERDA (MÁS GRANDE Y MÁS ATRASADA) --}}
                <div class="absolute -top-8 -left-12 w-[52%] aspect-square rounded-2xl overflow-hidden shadow-[0_15px_40px_rgba(0,0,0,0.10)] z-20 border-[6px] border-ferro-white transform -rotate-2 hover:rotate-0 transition-transform duration-500">
                    <img src="{{ asset('asset/sections/index-about/presentation-about/imagen-presentation-dos.webp') }}" alt="Estantería de herramientas" class="w-full h-full object-cover hover:scale-105 transition-transform duration-500 image-loading" loading="lazy" decoding="async">
                </div>

                {{-- IMAGEN INFERIOR IZQUIERDA (MÁS PEQUEÑA Y MÁS ADELANTADA) --}}
                <div class="absolute bottom-6 -left-8 w-[38%] aspect-square rounded-2xl overflow-hidden shadow-[0_15px_40px_rgba(0,0,0,0.10)] z-20 border-[6px] border-ferro-white transform rotate-3 hover:rotate-0 transition-transform duration-500">
                    <img src="{{ asset('asset/sections/index-about/presentation-about/imagen-presentation-tres.webp') }}" alt="Maquinaria industrial" class="w-full h-full object-cover hover:scale-105 transition-transform duration-500 image-loading" loading="lazy" decoding="async">
                </div>

                {{-- CHAPA FLOTANTE DE AÑOS --}}
                <div class="absolute -right-12 bottom-5 z-30 bg-ferro-carbon-900 rounded-2xl p-5 pl-4 pr-10 shadow-[0_10px_30px_rgba(0,0,0,0.25)] border border-ferro-carbon-700/50 flex items-center gap-5 transform rotate-1 hover:rotate-0 transition-transform duration-300">
                    
                    {{-- Icono Premium: Diamante --}}
                    <div class="w-14 h-14 rounded-xl bg-ferro-yellow-500 flex items-center justify-center shadow-lg shadow-ferro-yellow-500/20 shrink-0">
                        <svg class="w-8 h-8 text-ferro-carbon-900" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 2L2 8.5l10 13.5 10-13.5L12 2zm0 3.5l6.5 4.3-2.5 3.7L12 6.5zM12 6.5L5.5 9.8l2.5 3.7L12 6.5z"/>
                        </svg>
                    </div>

                    {{-- Texto --}}
                    <div class="flex flex-col">
                        <span class="font-heading text-5xl font-black text-ferro-yellow-500 leading-none drop-shadow-md tracking-tighter">+5</span>
                        <span class="font-heading text-xs font-bold text-ferro-white tracking-widest uppercase mt-0.5">Años de trayectoria</span>
                    </div>
                </div>
            </div>

            {{-- COLUMNA DERECHA: TEXTO Y ESTADÍSTICAS --}}
            <div class="flex flex-col gap-6 relative z-10">
                
                {{-- Etiqueta y Título --}}
                <div>
                    <span class="inline-block text-ferro-yellow-500 font-heading font-bold text-xs uppercase tracking-widest mb-2 border-b-2 border-ferro-yellow-500 pb-1">¿ Quíen es Ferronova ?</span>
                    <h2 class="font-heading text-3xl sm:text-4xl lg:text-5xl font-bold text-ferro-carbon-900 tracking-tight leading-tight mt-2">
                        El respaldo profesional<br>que tu obra necesita
                    </h2>
                </div>

                {{-- Texto descriptivo --}}
                <div class="space-y-4 text-ferro-steel-600 font-body text-base leading-relaxed">
                    <p>
                        Somos una empresa dedicada a la venta y alquiler de herramientas, maquinaria y equipos industriales, con un enfoque especializado en clientes residenciales, corporativos, constructoras y contratistas.
                    </p>
                    <p>
                        Hoy combinamos un amplio inventario, tecnología de punta y un equipo de expertos para entregar soluciones a la medida de cada proyecto, impulsando la productividad y la seguridad en cada obra.
                    </p>
                </div>

                {{-- GRID DE 3 ESTADÍSTICAS --}}
                <div class="grid grid-cols-3 gap-4 mt-6 pt-6 border-t border-ferro-carbon-100/60">
                    
                    <div class="flex flex-col items-center text-center p-3 rounded-xl hover:bg-ferro-steel-50 transition-colors duration-300">
                        <span class="font-heading text-2xl sm:text-3xl font-bold text-ferro-carbon-900">+10K</span>
                        <span class="text-xs sm:text-sm text-ferro-steel-500 font-description mt-1">Referencias en stock</span>
                    </div>
                    
                    <div class="flex flex-col items-center text-center p-3 rounded-xl hover:bg-ferro-steel-50 transition-colors duration-300">
                        <span class="font-heading text-2xl sm:text-3xl font-bold text-ferro-carbon-900">98%</span>
                        <span class="text-xs sm:text-sm text-ferro-steel-500 font-description mt-1">Satisfacción clientes</span>
                    </div>
                    
                    <div class="flex flex-col items-center text-center p-3 rounded-xl hover:bg-ferro-steel-50 transition-colors duration-300">
                        <span class="font-heading text-2xl sm:text-3xl font-bold text-ferro-carbon-900">+500</span>
                        <span class="text-xs sm:text-sm text-ferro-steel-500 font-description mt-1">Clientes activos</span>
                    </div>

                </div>

            </div>
        </div>
    </div>
</section>