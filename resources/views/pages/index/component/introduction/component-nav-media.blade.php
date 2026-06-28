{{-- ==========================================================
    COMPONENTE: REDES SOCIALES + CARRUSEL DE TEXTOS PROMOCIONALES
    ==========================================================
    Muestra las redes sociales de FERRANOVA y un carrusel
    automático de mensajes promocionales. En mobile se
    muestran textos cortos y en desktop textos completos.
    ========================================================== --}}

<aside 
    class="flex flex-row sm:flex-col lg:flex-row items-center justify-between sm:justify-normal lg:justify-normal w-full bg-ferro-carbon-900 px-3 sm:px-4 py-2 text-xs overflow-hidden gap-2 sm:gap-0"
    aria-label="Redes sociales y promociones"
    role="complementary"
>

    {{-- ==========================================================
        REDES SOCIALES (SIEMPRE VISIBLES)
        ========================================================== --}}
    <nav class="flex items-center gap-3 sm:pr-4 sm:border-r border-ferro-steel-700 shrink-0" aria-label="Redes sociales de FERRANOVA">
        
        {{-- Instagram --}}
        <a href="#" 
           aria-label="Síguenos en Instagram" 
           class="text-ferro-steel-300 hover:text-ferro-yellow-500 transition-colors"
           title="Instagram"
        >
            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true" role="img">
                <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
            </svg>
        </a>

        {{-- TikTok --}}
        <a href="#" 
           aria-label="Síguenos en TikTok" 
           class="text-ferro-steel-300 hover:text-ferro-yellow-500 transition-colors"
           title="TikTok"
        >
            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true" role="img">
                <path d="M19.59 6.69a4.83 4.83 0 01-3.77-4.25V2h-3.45v13.67a2.89 2.89 0 01-2.88 2.5 2.89 2.89 0 01-2.89-2.89 2.89 2.89 0 012.89-2.89c.28 0 .54.04.79.1V9.01a6.33 6.33 0 00-.79-.05 6.34 6.34 0 00-6.34 6.34 6.34 6.34 0 006.34 6.34 6.34 6.34 0 006.33-6.34V8.69a8.18 8.18 0 004.78 1.52V6.75a4.85 4.85 0 01-1.01-.06z"/>
            </svg>
        </a>

        {{-- Gmail --}}
        <a href="#" 
           aria-label="Envíanos un correo" 
           class="text-ferro-steel-300 hover:text-ferro-yellow-500 transition-colors"
           title="Correo electrónico"
        >
            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true" role="img">
                <path d="M24 5.457v13.909c0 .904-.732 1.636-1.636 1.636h-3.819V11.73L12 16.64l-6.545-4.91v9.273H1.636A1.636 1.636 0 010 19.366V5.457c0-2.023 2.309-3.178 3.927-1.964L5.455 4.64 12 9.548l6.545-4.91 1.528-1.145C21.69 2.28 24 3.434 24 5.457z"/>
            </svg>
        </a>

        {{-- X (Twitter) --}}
        <a href="#" 
           aria-label="Síguenos en X" 
           class="text-ferro-steel-300 hover:text-ferro-yellow-500 transition-colors"
           title="X (Twitter)"
        >
            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true" role="img">
                <path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-4.714-6.231-5.401 6.231H2.746l7.73-8.835L1.254 2.25H8.08l4.253 5.622 5.911-5.622zm-1.161 17.52h1.833L7.084 4.126H5.117z"/>
            </svg>
        </a>
    </nav>

    {{-- ==========================================================
        CARRUSEL DE TEXTOS PROMOCIONALES
        ========================================================== --}}
    <div 
        class="flex-1 overflow-hidden sm:mx-4 w-full sm:w-auto" 
        x-data="{
            items: [
                'Tornillería y fijaciones por unidad: compra exactamente lo que necesitas',
                'Nuevos equipos certificados: taladros, pulidoras y compresores con garantía',
                'Precios especiales para cuentas empresariales y contratistas',
                'Despacho nacional directo a tu obra en menos de 48 horas',
                'Más de 10,000 referencias en stock permanente: herramientas manuales, eléctricas y materiales',
                'Alquiler de maquinaria pesada por día, semana o mes: andamios, mezcladoras',
                'Pedidos corporativos con facturación electrónica y crédito a 30 días',
                'Atención técnica especializada: asesores que conocen cada herramienta'
            ],
            itemsMobile: [
                'Tornillería y fijaciones por unidad',
                'Equipos certificados con garantía',
                'Precios especiales para empresas',
                'Despacho nacional en 48 horas',
                'Más de 10,000 referencias en stock',
                'Alquiler de maquinaria pesada',
                'Pedidos corporativos con crédito',
                'Atención técnica especializada'
            ],
            current: 0,
            visible: true,
            init() {
                setInterval(() => {
                    this.visible = false
                    setTimeout(() => {
                        this.current = (this.current + 1) % this.items.length
                        this.visible = true
                    }, 500)
                }, 4000)
            }
        }"
        aria-label="Carrusel de promociones"
    >
        
        {{-- Texto para mobile --}}
        <p 
            x-text="itemsMobile[current]"
            x-bind:class="visible ? 'translate-x-0 opacity-100' : 'translate-x-full opacity-0'"
            class="sm:hidden text-ferro-yellow-500 font-body text-left transition-all duration-500 ease-in-out transform truncate"
            aria-live="polite"
        >
        </p>
        
        {{-- Texto para desktop --}}
        <p 
            x-text="items[current]"
            x-bind:class="visible ? 'translate-x-0 opacity-100' : 'translate-x-full opacity-0'"
            class="hidden sm:block text-ferro-yellow-500 font-body text-center sm:text-left transition-all duration-500 ease-in-out transform truncate"
            aria-live="polite"
        >
        </p>
    </div>

    {{-- ==========================================================
        INFORMACIÓN DE CONTACTO (SOLO DESKTOP)
        ========================================================== --}}
    <address class="hidden lg:flex items-center gap-4 pl-4 border-l border-ferro-steel-700 shrink-0 not-italic">
        
        {{-- Dirección --}}
        <span class="flex items-center gap-1.5 text-ferro-steel-300 whitespace-nowrap">
            <svg class="w-3.5 h-3.5 text-ferro-yellow-500 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
            </svg>
            Cra 50 #12-34, Bogotá
        </span>

        {{-- Horario --}}
        <span class="flex items-center gap-1.5 text-ferro-steel-300 whitespace-nowrap">
            <svg class="w-3.5 h-3.5 text-ferro-yellow-500 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
            </svg>
            Lun-Sáb 7:00am – 6:00pm
        </span>

        {{-- Teléfono --}}
        <span class="flex items-center gap-1.5 text-ferro-steel-300 whitespace-nowrap">
            <svg class="w-3.5 h-3.5 text-ferro-yellow-500 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.948V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 7V5z"/>
            </svg>
            <a href="tel:6015550123" class="hover:text-ferro-yellow-500 transition-colors">(601) 555 0123</a>
        </span>
    </address>

</aside>