{{-- ==========================================================
    FOOTER: FERRANOVA
    ========================================================== --}}

<footer 
    class="w-full bg-ferro-carbon-900 relative overflow-hidden"
    role="contentinfo"
    aria-label="Pie de página de FERRANOVA"
>

    {{-- ==========================================================
        BANNER SUPERIOR CON IMAGEN DIFUMINADA
        ========================================================== --}}
    <div class="relative w-full h-48 sm:h-56 md:h-64 overflow-hidden">
        
        {{-- IMAGEN DE FONDO --}}
        <img 
            src="{{ asset('asset/sections/footer/imagenFerrofachada.png') }}" 
            alt="FERRANOVA - Fuerza industrial" 
            class="w-full h-full object-cover filter blur-[2px] scale-105"
            loading="lazy"
        >
        
        {{-- OVERLAY OSCURO PARA LEGIBILIDAD --}}
        <div class="absolute inset-0 bg-ferro-black/60"></div>
        
        {{-- DEGRADADO DIFUMINADO HACIA EL FOOTER --}}
        <div class="absolute bottom-0 left-0 w-full h-24 bg-linear-to-t from-ferro-carbon-900 to-transparent"></div>
        
        {{-- TEXTO ENCIMA DE LA IMAGEN --}}
        <div class="absolute inset-0 flex items-center justify-start px-6 sm:px-10 lg:px-16">
            <div class="max-w-xl">
                <span class="text-ferro-danger text-[10px] sm:text-xs font-description font-bold uppercase tracking-[0.2em]">
                    Fuerza industrial
                </span>
                <h2 class="text-xl sm:text-2xl md:text-3xl lg:text-4xl font-heading font-bold text-ferro-white leading-tight mt-1">
                    Tu aliado en <span class="text-ferro-yellow-500">construcción</span>
                </h2>
                <p class="text-ferro-steel-300 text-xs sm:text-sm font-body mt-1 max-w-md">
                    Venta y alquiler de herramientas, maquinaria y equipos industriales con respaldo profesional.
                </p>
            </div>
        </div>
    </div>

    {{-- ==========================================================
        CONTENIDO DEL FOOTER (TÍTULOS AMARILLO - TEXTOS BLANCO)
        ========================================================== --}}
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8 sm:py-10">

        {{-- FILA 1: COLUMNAS --}}
        <div class="grid grid-cols-2 sm:grid-cols-4 gap-6 sm:gap-8 pb-6 border-b border-ferro-carbon-700">

            {{-- NAVEGACIÓN --}}
            <div>
                <h4 class="text-[10px] sm:text-xs font-description font-bold text-ferro-yellow-500 uppercase tracking-[0.15em] mb-3" style="font-family: var(--font-description);">
                    Navegación
                </h4>
                <ul class="space-y-1.5 text-[11px] sm:text-xs text-ferro-white font-body">
                    <li><a href="#" class="hover:text-ferro-yellow-500 transition-colors">Inicio</a></li>
                    <li><a href="#" class="hover:text-ferro-yellow-500 transition-colors">Catálogo</a></li>
                    <li><a href="#" class="hover:text-ferro-yellow-500 transition-colors">Categorías</a></li>
                    <li><a href="#" class="hover:text-ferro-yellow-500 transition-colors">Por unidad</a></li>
                </ul>
            </div>

            {{-- COMPAÑÍA --}}
            <div>
                <h4 class="text-[10px] sm:text-xs font-description font-bold text-ferro-yellow-500 uppercase tracking-[0.15em] mb-3" style="font-family: var(--font-description);">
                    Compañía
                </h4>
                <ul class="space-y-1.5 text-[11px] sm:text-xs text-ferro-white font-body">
                    <li><a href="#" class="hover:text-ferro-yellow-500 transition-colors">Nosotros</a></li>
                    <li><a href="#" class="hover:text-ferro-yellow-500 transition-colors">Blog</a></li>
                    <li><a href="#" class="hover:text-ferro-yellow-500 transition-colors">Contacto</a></li>
                    <li><a href="#" class="hover:text-ferro-yellow-500 transition-colors">Panel admin</a></li>
                </ul>
            </div>

            {{-- CONTACTO --}}
            <div>
                <h4 class="text-[10px] sm:text-xs font-description font-bold text-ferro-yellow-500 uppercase tracking-[0.15em] mb-3" style="font-family: var(--font-description);">
                    Contacto
                </h4>
                <ul class="space-y-1.5 text-[11px] sm:text-xs text-ferro-white font-body">
                    <li class="flex items-start gap-1.5">
                        <svg class="w-3.5 h-3.5 text-ferro-yellow-500 shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                        </svg>
                        Cra 50 #12-34, Bogotá
                    </li>
                    <li class="flex items-center gap-1.5">
                        <svg class="w-3.5 h-3.5 text-ferro-yellow-500 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.948V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 7V5z"/>
                        </svg>
                        <a href="tel:6015550123" class="hover:text-ferro-yellow-500 transition-colors">(601) 555 0123</a>
                    </li>
                    <li class="flex items-center gap-1.5">
                        <svg class="w-3.5 h-3.5 text-ferro-yellow-500 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                        Lun-Sáb 7:00am – 6:00pm
                    </li>
                </ul>
            </div>

            {{-- NEWSLETTER + REDES --}}
            <div>
                <h4 class="text-[10px] sm:text-xs font-description font-bold text-ferro-yellow-500 uppercase tracking-[0.15em] mb-3" style="font-family: var(--font-description);">
                    Suscríbete
                </h4>
                <p class="text-[11px] sm:text-xs text-ferro-white/80 font-body mb-2">
                    Recibe ofertas y novedades.
                </p>
                <div class="flex items-stretch max-w-xs">
                    <input 
                        type="email" 
                        placeholder="Tu correo" 
                        class="flex-1 px-3 py-2 text-xs bg-ferro-carbon-800 border border-ferro-carbon-700 rounded-l-lg focus:outline-none focus:ring-1 focus:ring-ferro-yellow-500 text-ferro-white placeholder-ferro-white/40"
                    >
                    <button class="px-4 py-2 text-xs font-heading font-semibold bg-ferro-yellow-500 hover:bg-ferro-yellow-600 text-ferro-black rounded-r-lg transition-colors whitespace-nowrap">
                        Suscribir
                    </button>
                </div>

                {{-- REDES SOCIALES --}}
                <nav class="flex items-center gap-3 mt-3" aria-label="Redes sociales de FERRANOVA">
                    <a href="#" aria-label="Síguenos en Instagram" class="text-ferro-white/60 hover:text-ferro-yellow-500 transition-colors" title="Instagram">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true" role="img">
                            <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                        </svg>
                    </a>
                    <a href="#" aria-label="Síguenos en TikTok" class="text-ferro-white/60 hover:text-ferro-yellow-500 transition-colors" title="TikTok">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true" role="img">
                            <path d="M19.59 6.69a4.83 4.83 0 01-3.77-4.25V2h-3.45v13.67a2.89 2.89 0 01-2.88 2.5 2.89 2.89 0 01-2.89-2.89 2.89 2.89 0 012.89-2.89c.28 0 .54.04.79.1V9.01a6.33 6.33 0 00-.79-.05 6.34 6.34 0 00-6.34 6.34 6.34 6.34 0 006.34 6.34 6.34 6.34 0 006.33-6.34V8.69a8.18 8.18 0 004.78 1.52V6.75a4.85 4.85 0 01-1.01-.06z"/>
                        </svg>
                    </a>
                    <a href="#" aria-label="Envíanos un correo" class="text-ferro-white/60 hover:text-ferro-yellow-500 transition-colors" title="Correo electrónico">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true" role="img">
                            <path d="M24 5.457v13.909c0 .904-.732 1.636-1.636 1.636h-3.819V11.73L12 16.64l-6.545-4.91v9.273H1.636A1.636 1.636 0 010 19.366V5.457c0-2.023 2.309-3.178 3.927-1.964L5.455 4.64 12 9.548l6.545-4.91 1.528-1.145C21.69 2.28 24 3.434 24 5.457z"/>
                        </svg>
                    </a>
                    <a href="#" aria-label="Síguenos en X" class="text-ferro-white/60 hover:text-ferro-yellow-500 transition-colors" title="X (Twitter)">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true" role="img">
                            <path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-4.714-6.231-5.401 6.231H2.746l7.73-8.835L1.254 2.25H8.08l4.253 5.622 5.911-5.622z"/>
                        </svg>
                    </a>
                </nav>
            </div>

        </div>

        {{-- FILA 3: ENLACES LEGALES + COPYRIGHT --}}
        <div class="flex flex-col sm:flex-row items-center justify-between gap-3 pt-4">
            <div class="flex flex-wrap items-center justify-center gap-2 sm:gap-4 text-[10px] sm:text-xs text-ferro-white/60 font-body">
                <a href="#" class="hover:text-ferro-yellow-500 transition-colors">Términos y condiciones</a>
                <span class="text-ferro-carbon-600">·</span>
                <a href="#" class="hover:text-ferro-yellow-500 transition-colors">Política de privacidad</a>
                <span class="text-ferro-carbon-600">·</span>
                <a href="#" class="hover:text-ferro-yellow-500 transition-colors">Tratamiento de datos</a>
                <span class="text-ferro-carbon-600">·</span>
                <a href="#" class="hover:text-ferro-yellow-500 transition-colors">Política de garantías</a>
            </div>
            <p class="text-[9px] sm:text-[10px] text-ferro-white/40 font-body text-center">
                © {{ date('Y') }} FERRANOVA. Desarrollado en Grupo Conecta Software.
            </p>
        </div>

    </div>

</footer>