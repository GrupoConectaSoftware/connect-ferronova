{{-- ==========================================================
    SECCIÓN: VALORES CORPORATIVOS
    FERRANOVA · ERP Industrial para Ferreterías
    Sistema visual: catálogo técnico — iconos a medida.
    ========================================================== --}}

<section class="relative w-full py-20 lg:py-32 bg-ferro-background overflow-hidden" aria-label="Valores corporativos">

    {{-- Fondo: cuadrícula de plano técnico, muy sutil --}}
    <div class="absolute inset-0 bg-[linear-gradient(to_right,#0F172A07_1px,transparent_1px),linear-gradient(to_bottom,#0F172A07_1px,transparent_1px)] bg-size-[44px_44px] pointer-events-none z-0"></div>

    <div class="relative z-10 container mx-auto px-4 sm:px-6 lg:px-8 max-w-full">
        
        {{-- CONTENEDOR INTERNO PARA ALINEAR EL TEXTO --}}
        <div class="max-w-360 mx-auto">

            {{-- ENCABEZADO --}}
            <div class="max-w-2xl mb-10">
                <span class="inline-flex items-center gap-2 text-ferro-carbon-500 font-mono font-medium text-[11px] uppercase tracking-[0.25em] mb-5">
                    <span class="w-6 h-px bg-ferro-yellow-500"></span>
                    Lo que nos define
                </span>
                <h2 class="font-heading text-4xl sm:text-5xl lg:text-6xl font-bold text-ferro-carbon-900 tracking-tight leading-[1.05] mb-4">
                    Valores <span class="text-ferro-yellow-500">corporativos</span>
                </h2>
                <p class="font-description text-ferro-steel-500 text-base lg:text-lg leading-relaxed">
                    Cuatro compromisos y una trayectoria que respaldan cada entrega, cada asesoría y cada obra que confía en nosotros.
                </p>
            </div>

            {{-- Regla técnica: transición tipo cinta métrica --}}
            <div class="h-6 mb-10 lg:mb-14 bg-[repeating-linear-gradient(90deg,#0F172A_0,#0F172A_1px,transparent_1px,transparent_40px)] opacity-[0.08]"></div>

            {{-- BENTO GRID · 12 COLUMNAS × 3 FILAS (8 CONTENEDORES) --}}
            <div class="grid grid-cols-1 lg:grid-cols-12 lg:grid-rows-3 gap-5 lg:gap-6 lg:auto-rows-fr">

                {{-- CELDA 1 · HERO — IMAGEN INDUSTRIAL — col-span-5 row-span-2 --}}
                <div class="relative lg:col-span-5 lg:row-span-2 rounded-[28px] overflow-hidden shadow-[0_20px_50px_-15px_rgba(15,23,42,0.35)] group min-h-95 lg:min-h-0">
                    <img src="{{ asset('asset/sections/index-nosotros/value-about/imagen-value.png') }}"
                         alt="Bodega FERRANOVA"
                         class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 ease-out group-hover:scale-105 grayscale-25 group-hover:grayscale-0">

                    <div class="absolute inset-0 bg-linear-to-t from-ferro-carbon-900/85 via-ferro-carbon-900/10 to-transparent"></div>

                    {{-- Esquinas técnicas · visor de referencia --}}
                    <div class="absolute top-5 left-5 w-6 h-6 border-t-2 border-l-2 border-ferro-white/40"></div>
                    <div class="absolute top-5 right-5 w-6 h-6 border-t-2 border-r-2 border-ferro-white/40"></div>
                    <span class="absolute top-7 right-9 font-mono text-[10px] tracking-widest text-ferro-white/50 uppercase">Ref. inventario</span>

                    <div class="absolute bottom-7 lg:bottom-8 left-7 lg:left-8 right-7 lg:right-8 text-ferro-white">
                        <span class="inline-block bg-ferro-yellow-500 text-ferro-black font-heading font-bold text-xs uppercase tracking-widest px-3 py-1 rounded-full mb-3">
                            +10.000 SKU activos
                        </span>
                        <h3 class="font-heading text-2xl lg:text-3xl font-bold leading-tight mb-2">
                            El inventario que tu obra necesita
                        </h3>
                        <p class="font-description text-sm text-ferro-steel-100/75 mb-4 max-w-xs">
                            Herramienta, ferretería industrial y equipo de seguridad, listos para despachar.
                        </p>
                        <a href="#" class="inline-flex items-center gap-1.5 font-heading font-bold text-sm text-ferro-yellow-500 hover:text-ferro-white transition-colors">
                            Ver catálogo completo
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3" /></svg>
                        </a>
                    </div>
                </div>

                {{-- CELDA 2 · VALOR - CALIDAD (Icono: Estrella de Certificación) — col-span-3 row-span-1 --}}
                <div class="lg:col-span-3 lg:row-span-1 bg-ferro-white rounded-[28px] p-7 ring-1 ring-ferro-carbon-900/5 shadow-[0_1px_2px_rgba(15,23,42,0.04),0_16px_32px_-16px_rgba(15,23,42,0.10)] hover:-translate-y-1 hover:shadow-[0_1px_2px_rgba(15,23,42,0.04),0_24px_40px_-16px_rgba(15,23,42,0.14)] transition-all duration-300 flex flex-col justify-between min-h-40 lg:min-h-0">
                    <div class="flex items-start justify-between">
                        <svg class="w-8 h-8 text-ferro-carbon-900" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M12 2.25l2.6 5.27 5.82.85-4.21 4.1 1 5.8L12 15.9l-5.21 2.37 1-5.8-4.21-4.1 5.82-.85L12 2.25z" />
                        </svg>
                        <span class="font-mono text-[10px] uppercase tracking-widest text-ferro-steel-500">Ref. Cal</span>
                    </div>
                    <div>
                        <h4 class="font-heading text-lg font-bold text-ferro-carbon-900 mb-1.5">Calidad certificada</h4>
                        <p class="text-sm text-ferro-steel-500 font-description leading-relaxed">
                            Solo trabajamos con marcas certificadas y fabricantes con respaldo internacional.
                        </p>
                    </div>
                </div>

                {{-- CELDA 3 · VALOR - TRAYECTORIA (Icono: Rayo) — col-span-4 row-span-1 --}}
                <div class="lg:col-span-4 lg:row-span-1 bg-ferro-yellow-500 rounded-[28px] p-7 shadow-[0_16px_32px_-12px_rgba(250,204,21,0.5)] flex flex-col justify-between text-ferro-black min-h-40 lg:min-h-0">
                    <span class="font-mono text-[11px] uppercase tracking-[0.2em] text-ferro-black/60">Trayectoria</span>
                    <div>
                        <div class="flex items-center gap-3 mb-2">
                            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M13 10V3L4 14h7v7l9-11h-7z" />
                            </svg>
                            <span class="font-heading text-3xl font-black tracking-tight leading-none">Sólida</span>
                        </div>
                        <p class="font-description text-sm text-ferro-black/70 leading-snug max-w-65">
                            Más de media década de operación ininterrumpida en el sector industrial colombiano.
                        </p>
                    </div>
                </div>

                {{-- CELDA 4 · VALOR - SERVICIO (Icono: Auriculares) — col-span-4 row-span-1 --}}
                <div class="lg:col-span-4 lg:row-span-1 bg-ferro-carbon-900 rounded-[28px] p-7 shadow-[0_16px_32px_-16px_rgba(2,6,23,0.5)] hover:-translate-y-1 transition-all duration-300 flex flex-col justify-between min-h-42.5 lg:min-h-0">
                    <div class="flex items-start justify-between">
                        <svg class="w-8 h-8 text-ferro-yellow-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m0 12.75h3.75m-3.75 0a3.75 3.75 0 01-3.75-3.75v-3.75A3.75 3.75 0 018.25 3h.75m0 12.75h3.75m-3.75 0v1.5A3.75 3.75 0 0111.25 21h3.75" />
                        </svg>
                        <span class="font-mono text-[10px] uppercase tracking-widest text-ferro-steel-500">Ref. Srv</span>
                    </div>
                    <div>
                        <h4 class="font-heading text-lg font-bold text-ferro-white mb-1.5">Servicio experto</h4>
                        <p class="text-sm text-ferro-steel-300 font-description leading-relaxed">
                            Asesoría técnica humana y cercana en cada proyecto, sin intermediarios ni respuestas automáticas.
                        </p>
                    </div>
                </div>

                {{-- CELDA 5 · VALOR - CONFIANZA (Icono: Escudo) — col-span-3 row-span-1 --}}
                <div class="lg:col-span-3 lg:row-span-1 bg-ferro-white rounded-[28px] p-7 ring-1 ring-ferro-carbon-900/5 shadow-[0_1px_2px_rgba(15,23,42,0.04),0_16px_32px_-16px_rgba(15,23,42,0.10)] hover:-translate-y-1 hover:shadow-[0_1px_2px_rgba(15,23,42,0.04),0_24px_40px_-16px_rgba(15,23,42,0.14)] transition-all duration-300 flex flex-col justify-between min-h-42.5 lg:min-h-0">
                    <div class="flex items-start justify-between">
                        <svg class="w-8 h-8 text-ferro-carbon-900" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M9 12.75L11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285z" />
                        </svg>
                        <span class="font-mono text-[10px] uppercase tracking-widest text-ferro-steel-500">Ref. Cnf</span>
                    </div>
                    <div>
                        <h4 class="font-heading text-lg font-bold text-ferro-carbon-900 mb-1.5">Confianza real</h4>
                        <p class="text-sm text-ferro-steel-500 font-description leading-relaxed">
                            Garantía y respaldo documentado en cada entrega, cumpliendo siempre lo prometido.
                        </p>
                    </div>
                </div>

                {{-- CELDA 6 · VALOR - ESCALABILIDAD (Icono: Edificio) — col-span-3 row-span-1 --}}
                <div class="lg:col-span-3 lg:row-span-1 bg-ferro-white rounded-[28px] p-7 ring-1 ring-ferro-carbon-900/5 shadow-[0_1px_2px_rgba(15,23,42,0.04),0_16px_32px_-16px_rgba(15,23,42,0.10)] hover:-translate-y-1 hover:shadow-[0_1px_2px_rgba(15,23,42,0.04),0_24px_40px_-16px_rgba(15,23,42,0.14)] transition-all duration-300 flex flex-col justify-between min-h-42.5 lg:min-h-0">
                    <div class="flex items-start justify-between">
                        <svg class="w-8 h-8 text-ferro-carbon-900" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M3.75 21h16.5M3.75 3h16.5M12 21v-9m0 0V6m0 6h6m-6 0H6" />
                        </svg>
                        <span class="font-mono text-[10px] uppercase tracking-widest text-ferro-steel-500">Ref. Esc</span>
                    </div>
                    <div>
                        <h4 class="font-heading text-lg font-bold text-ferro-carbon-900 mb-1.5">Escalamos con vos</h4>
                        <p class="text-sm text-ferro-steel-500 font-description leading-relaxed">
                            De la remodelación residencial a la obra civil de gran formato, sin cambiar de proveedor.
                        </p>
                    </div>
                </div>

                {{-- CELDA 7 · VALOR - COMPROMISO (Icono: Corazón) — col-span-3 row-span-1 --}}
                <div class="lg:col-span-3 lg:row-span-1 bg-ferro-white rounded-[28px] p-7 ring-1 ring-ferro-carbon-900/5 shadow-[0_1px_2px_rgba(15,23,42,0.04),0_16px_32px_-16px_rgba(15,23,42,0.10)] hover:-translate-y-1 hover:shadow-[0_1px_2px_rgba(15,23,42,0.04),0_24px_40px_-16px_rgba(15,23,42,0.14)] transition-all duration-300 flex flex-col justify-between min-h-42.5 lg:min-h-0">
                    <div class="flex items-start justify-between">
                        <svg class="w-8 h-8 text-ferro-carbon-900" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                        </svg>
                        <span class="font-mono text-[10px] uppercase tracking-widest text-ferro-steel-500">Ref. Com</span>
                    </div>
                    <div>
                        <h4 class="font-heading text-lg font-bold text-ferro-carbon-900 mb-1.5">Compromiso total</h4>
                        <p class="text-sm text-ferro-steel-500 font-description leading-relaxed">
                            Nuestro equipo está comprometido con el éxito de tu proyecto de principio a fin.
                        </p>
                    </div>
                </div>

                {{-- CELDA 8 · CIERRE (CTA) — col-span-6 row-span-1 --}}
                <div class="lg:col-span-6 lg:row-span-1 bg-ferro-carbon-900 rounded-[28px] p-7 lg:p-8 shadow-[0_16px_32px_-16px_rgba(2,6,23,0.5)] flex flex-col sm:flex-row sm:items-center sm:justify-between gap-5 min-h-35 lg:min-h-0">
                    <div>
                        <h4 class="font-heading text-xl lg:text-2xl font-bold text-ferro-white mb-1.5">¿Listo para tu próxima obra?</h4>
                        <p class="text-sm text-ferro-steel-300 font-description leading-relaxed max-w-sm">
                            Habla con un asesor certificado y arma tu pedido en minutos.
                        </p>
                    </div>
                    <a href="#" class="inline-flex items-center justify-center gap-2 bg-ferro-yellow-500 text-ferro-black font-heading font-bold text-sm px-5 py-3 rounded-full whitespace-nowrap hover:bg-ferro-yellow-300 transition-colors duration-300 shrink-0">
                        Hablar con un asesor
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3" /></svg>
                    </a>
                </div>

            </div>
        </div>
    </div>
</section>