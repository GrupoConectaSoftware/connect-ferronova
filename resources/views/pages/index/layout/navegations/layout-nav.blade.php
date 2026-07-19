{{-- ==========================================================
    COMPONENTE: MENÚ DE NAVEGACIÓN PRINCIPAL
    ==========================================================
    Contiene el header completo de FERRANOVA con:
    - Badge de cotización
    - Redes sociales y carrusel de promociones
    - Logo, buscador, favoritos, carrito, ingresar
    - Menú de navegación desktop
    - Overlay mobile con buscador, enlaces, redes y contacto
    - Comportamiento fixed: se oculta al bajar y aparece al subir
    ========================================================== --}}

<header
    class="w-full bg-white border-b border-ferro-carbon-100 fixed top-0 left-0 z-50 transition-transform duration-300"
    x-data="{
        mobileMenu: false,
        lastScroll: 0,
        hidden: false,
        init() {
            window.addEventListener('scroll', () => {
                const currentScroll = window.pageYOffset || document.documentElement.scrollTop
                if (currentScroll > this.lastScroll && currentScroll > 80) {
                    // Scroll hacia abajo - ocultar header
                    this.hidden = true
                } else {
                    // Scroll hacia arriba - mostrar header
                    this.hidden = false
                }
                this.lastScroll = currentScroll
            })
        }
    }" x-bind:class="hidden ? '-translate-y-full' : 'translate-y-0'" role="banner"
    aria-label="Encabezado principal de FERRANOVA">

    {{-- ==========================================================
        BADGE DE COTIZACIÓN
        ========================================================== --}}
    {{-- ==========================================================
    COMPONENTE: BADGE DE COTIZACIÓN INMEDIATA
    ==========================================================
    Muestra un aviso de cotización con un botón de WhatsApp
    visible solo en desktop.
    ========================================================== --}}

    <aside
        class="badge badge-primary flex flex-col sm:flex-row items-center justify-between gap-3 px-4 sm:px-6 py-3 bg-ferro-gold-300 w-full"
        aria-label="Aviso de cotización inmediata" role="complementary">

        {{-- ==========================================================
        TEXTO DE LA PREGUNTA
        ========================================================== --}}
        <div class="font text-sm text-ferro-steel-900 text-center sm:text-left block w-full sm:w-auto">
            {{-- Texto visible solo en mobile --}}
            <p class="sm:hidden font-body text-center text-xs sm:text-sm">
                ¿Cotización inmediata? Contáctanos ahora mismo
            </p>
            {{-- Texto visible en tablet y desktop --}}
            <p class="hidden sm:inline font-body text-xs sm:text-sm">
                ¿Necesitas una cotización inmediata? Comunícate ahora con nuestro equipo...
            </p>
        </div>

        {{-- ==========================================================
        BOTÓN DE WHATSAPP (SOLO EN DESKTOP)
        ========================================================== --}}
        <a href="https://wa.me/573184111790?text=Hola%20FERRANOVA!%20Quiero%20cotizar%20herramientas" target="_blank"
            rel="noopener noreferrer"
            class="hidden sm:inline-flex items-center gap-1 px-3 py-1.5 rounded-lg bg-ferro-steel-900 hover:bg-ferro-whatsapp text-ferro-white text-[10px] sm:text-xs transition-all duration-300 border border-ferro-gold-500/30 hover:border-ferro-whatsapp group whitespace-nowrap shrink-0"
            aria-label="Cotizar por WhatsApp" title="Cotizar por WhatsApp">

            {{-- Ícono de WhatsApp (accesible) --}}
            <svg class="w-2.5 h-2.5 sm:w-3 sm:h-3 group-hover:scale-110 transition-transform duration-300"
                fill="currentColor" viewBox="0 0 24 24" aria-hidden="true" role="img">
                <path
                    d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z" />
            </svg>

            {{-- Texto del botón (responsive) --}}
            <span class="hidden xs:inline text-[10px] sm:text-xs">Cotizar</span>
            <span class="hidden sm:inline">Ahora Mismo en WhatsApp</span>

            {{-- Badge de disponibilidad --}}
            <span
                class="hidden sm:inline-block text-[8px] sm:text-[10px] font-description font-bold text-ferro-whatsapp bg-white px-1.5 py-0.5 ml-1 rounded-full animate-pulse group-hover:text-white group-hover:bg-ferro-whatsapp/20 transition-colors duration-300">
                ● Disponible
            </span>
        </a>

    </aside>

    {{-- ==========================================================
        REDES SOCIALES + CARRUSEL DE PROMOCIONES
        ========================================================== --}}
    {{-- ==========================================================
    COMPONENTE: REDES SOCIALES + CARRUSEL DE TEXTOS PROMOCIONALES
    ==========================================================
    Muestra las redes sociales de FERRANOVA y un carrusel
    automático de mensajes promocionales. En mobile se
    muestran textos cortos y en desktop textos completos.
    ========================================================== --}}

    <aside
        class="flex flex-row sm:flex-col lg:flex-row items-center justify-between sm:justify-normal lg:justify-normal w-full bg-ferro-carbon-900 px-3 sm:px-4 py-2 text-xs overflow-hidden gap-2 sm:gap-0"
        aria-label="Redes sociales y promociones" role="complementary">

        {{-- ==========================================================
        REDES SOCIALES (SIEMPRE VISIBLES)
        ========================================================== --}}
        <nav class="flex items-center gap-3 sm:pr-4 sm:border-r border-ferro-steel-700 shrink-0"
            aria-label="Redes sociales de FERRANOVA">

            {{-- Instagram --}}
            <a href="#" aria-label="Síguenos en Instagram"
                class="text-ferro-steel-300 hover:text-ferro-yellow-500 transition-colors" title="Instagram">
                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true" role="img">
                    <path
                        d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z" />
                </svg>
            </a>

            {{-- TikTok --}}
            <a href="#" aria-label="Síguenos en TikTok"
                class="text-ferro-steel-300 hover:text-ferro-yellow-500 transition-colors" title="TikTok">
                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true" role="img">
                    <path
                        d="M19.59 6.69a4.83 4.83 0 01-3.77-4.25V2h-3.45v13.67a2.89 2.89 0 01-2.88 2.5 2.89 2.89 0 01-2.89-2.89 2.89 2.89 0 012.89-2.89c.28 0 .54.04.79.1V9.01a6.33 6.33 0 00-.79-.05 6.34 6.34 0 00-6.34 6.34 6.34 6.34 0 006.34 6.34 6.34 6.34 0 006.33-6.34V8.69a8.18 8.18 0 004.78 1.52V6.75a4.85 4.85 0 01-1.01-.06z" />
                </svg>
            </a>

            {{-- Gmail --}}
            <a href="#" aria-label="Envíanos un correo"
                class="text-ferro-steel-300 hover:text-ferro-yellow-500 transition-colors" title="Correo electrónico">
                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true" role="img">
                    <path
                        d="M24 5.457v13.909c0 .904-.732 1.636-1.636 1.636h-3.819V11.73L12 16.64l-6.545-4.91v9.273H1.636A1.636 1.636 0 010 19.366V5.457c0-2.023 2.309-3.178 3.927-1.964L5.455 4.64 12 9.548l6.545-4.91 1.528-1.145C21.69 2.28 24 3.434 24 5.457z" />
                </svg>
            </a>

            {{-- X (Twitter) --}}
            <a href="#" aria-label="Síguenos en X"
                class="text-ferro-steel-300 hover:text-ferro-yellow-500 transition-colors" title="X (Twitter)">
                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true" role="img">
                    <path
                        d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-4.714-6.231-5.401 6.231H2.746l7.73-8.835L1.254 2.25H8.08l4.253 5.622 5.911-5.622zm-1.161 17.52h1.833L7.084 4.126H5.117z" />
                </svg>
            </a>
        </nav>

        {{-- ==========================================================
        CARRUSEL DE TEXTOS PROMOCIONALES
        ========================================================== --}}
        <div class="flex-1 overflow-hidden sm:mx-4 w-full sm:w-auto" x-data="{
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
            aria-label="Carrusel de promociones">

            {{-- Texto para mobile --}}
            <p x-text="itemsMobile[current]"
                x-bind:class="visible ? 'translate-x-0 opacity-100' : 'translate-x-full opacity-0'"
                class="sm:hidden text-ferro-yellow-500 font-body text-left transition-all duration-500 ease-in-out transform truncate"
                aria-live="polite">
            </p>

            {{-- Texto para desktop --}}
            <p x-text="items[current]"
                x-bind:class="visible ? 'translate-x-0 opacity-100' : 'translate-x-full opacity-0'"
                class="hidden sm:block text-ferro-yellow-500 font-body text-center sm:text-left transition-all duration-500 ease-in-out transform truncate"
                aria-live="polite">
            </p>
        </div>

        {{-- ==========================================================
        INFORMACIÓN DE CONTACTO (SOLO DESKTOP)
        ========================================================== --}}
        <address class="hidden lg:flex items-center gap-4 pl-4 border-l border-ferro-steel-700 shrink-0 not-italic">

            {{-- Dirección --}}
            <span class="flex items-center gap-1.5 text-ferro-steel-300 whitespace-nowrap">
                <svg class="w-3.5 h-3.5 text-ferro-yellow-500 shrink-0" fill="none" stroke="currentColor"
                    viewBox="0 0 24 24" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                </svg>
                Cra 50 #12-34, Bogotá
            </span>

            {{-- Horario --}}
            <span class="flex items-center gap-1.5 text-ferro-steel-300 whitespace-nowrap">
                <svg class="w-3.5 h-3.5 text-ferro-yellow-500 shrink-0" fill="none" stroke="currentColor"
                    viewBox="0 0 24 24" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                Lun-Sáb 7:00am – 6:00pm
            </span>

            {{-- Teléfono --}}
            <span class="flex items-center gap-1.5 text-ferro-steel-300 whitespace-nowrap">
                <svg class="w-3.5 h-3.5 text-ferro-yellow-500 shrink-0" fill="none" stroke="currentColor"
                    viewBox="0 0 24 24" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.948V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 7V5z" />
                </svg>
                <a href="tel:6015550123" class="hover:text-ferro-yellow-500 transition-colors">(601) 555 0123</a>
            </span>
        </address>

    </aside>

    {{-- ==========================================================
        MENÚ PRINCIPAL
        ========================================================== --}}
    <nav class="max-w-7xl mx-auto px-4 sm:px-6 z-50" aria-label="Navegación principal">

        {{-- FILA 1: LOGO + BÚSQUEDA + ICONOS --}}
        <div class="flex items-center justify-between py-3 border-b border-ferro-carbon-100">

            {{-- LOGO --}}
            <a href="/" class="shrink" aria-label="Volver al inicio de FERRANOVA">
                <img src="{{ asset('asset/logos/logoOficial.png') }}" alt="FERRANOVA - ERP Industrial"
                    class="h-8 sm:h-10 md:h-12 w-auto object-contain image-loading" loading="lazy" decoding="async">
            </a>

            {{-- BARRA DE BÚSQUEDA (solo desktop) --}}
            <div class="hidden md:flex items-center flex-1 max-w-xl mx-4 lg:mx-8" role="search"
                aria-label="Búsqueda de productos">
                <input type="text" placeholder="Buscar herramientas, equipos, tornillería..."
                    class="w-full px-4 py-2.5 border border-ferro-steel-300 rounded-l-lg focus:outline-none text-sm bg-ferro-steel-50"
                    aria-label="Campo de búsqueda">
                <button
                    class="bg-ferro-yellow-500 hover:bg-ferro-yellow-600 text-ferro-black px-5 py-3 rounded-r-lg transition-colors flex items-center justify-center cursor-pointer"
                    aria-label="Realizar búsqueda" title="Buscar">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                    </svg>
                </button>
            </div>

            {{-- ICONOS DE ACCIÓN --}}
            <div class="flex items-center gap-3 sm:gap-4">

                {{-- Favoritos --}}
                <a href="#" class="text-ferro-steel-700 hover:text-ferro-yellow-500 transition-colors relative"
                    aria-label="Favoritos (0)" title="Favoritos">
                    <svg class="w-5 h-5 sm:w-6 sm:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                    </svg>
                    <span
                        class="absolute -top-1 -right-1 bg-ferro-yellow-500 text-ferro-black text-[10px] font-bold w-4 h-4 rounded-full flex items-center justify-center">0</span>
                </a>

                {{-- Carrito --}}
                <a href="#" class="text-ferro-steel-700 hover:text-ferro-yellow-500 transition-colors relative"
                    aria-label="Carrito de compras (0)" title="Carrito de compras">
                    <svg class="w-5 h-5 sm:w-6 sm:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                    </svg>
                    <span
                        class="absolute -top-1 -right-1 bg-ferro-yellow-500 text-ferro-black text-[10px] font-bold w-4 h-4 rounded-full flex items-center justify-center">0</span>
                </a>

                {{-- Ingresar (solo desktop) --}}
                <a href="{{ route('login') }}"
                    class="hidden sm:flex items-center gap-1.5 text-ferro-steel-700 hover:text-ferro-yellow-500 transition-colors"
                    aria-label="Iniciar sesión" title="Iniciar sesión">
                    <svg class="w-5 h-5 sm:w-6 sm:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                    </svg>
                    <span class="hidden sm:inline text-sm font-medium">Ingresar</span>
                </a>

                {{-- Botón hamburguesa (mobile) --}}
                <button @click="mobileMenu = !mobileMenu"
                    class="md:hidden text-ferro-steel-700 hover:text-ferro-yellow-500 transition-colors cursor-pointer p-1"
                    aria-label="Abrir menú de navegación" aria-expanded="false"
                    :aria-expanded="mobileMenu ? 'true' : 'false'">
                    {{-- Ícono de hamburguesa --}}
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" x-show="!mobileMenu" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M6 18L18 6M6 6l12 12" x-show="mobileMenu" style="display: none;" />
                    </svg>
                </button>
            </div>
        </div>

        {{-- FILA 2: OPCIONES + ADMIN (solo desktop) --}}
        <div class="hidden md:flex items-center justify-between py-2 mx-2 sm:mx-4">
            <div class="flex items-center gap-4 sm:gap-6 overflow-x-auto">
                <a href="{{ route('home') }}"
                    class="text-ferro-steel-700 hover:text-ferro-yellow-500 transition-colors text-xs sm:text-sm whitespace-nowrap font-medium">Inicio</a>
                <a href="{{ route('united') }}"
                    class="text-ferro-steel-700 hover:text-ferro-yellow-500 transition-colors text-xs sm:text-sm whitespace-nowrap font-medium hidden sm:inline">Por unidad</a>
                <a href="{{ route('category') }}"
                    class="text-ferro-steel-700 hover:text-ferro-yellow-500 transition-colors text-xs sm:text-sm whitespace-nowrap font-medium">Catálogo</a>
                <a href="#"
                    class="text-ferro-steel-700 hover:text-ferro-yellow-500 transition-colors text-xs sm:text-sm whitespace-nowrap font-medium hidden sm:inline">Proyectos</a>
                <a href="{{ route('about') }}"
                    class="text-ferro-steel-700 hover:text-ferro-yellow-500 transition-colors text-xs sm:text-sm whitespace-nowrap font-medium hidden md:inline">Nosotros</a>
                <a href="#"
                    class="text-ferro-steel-700 hover:text-ferro-yellow-500 transition-colors text-xs sm:text-sm whitespace-nowrap font-medium hidden lg:inline">Blog</a>
                <a href="{{ route('contact') }}"
                    class="text-ferro-steel-700 hover:text-ferro-yellow-500 transition-colors text-xs sm:text-sm whitespace-nowrap font-medium hidden lg:inline">Contacto</a>
            </div>
        </div>
    </nav>

    {{-- ==========================================================
        OVERLAY MOBILE (MENÚ DESPLEGABLE)
        ========================================================== --}}
    <div x-show="mobileMenu" x-transition:enter="transition ease-out duration-200"
        x-transition:enter-start="opacity-0 -translate-y-4" x-transition:enter-end="opacity-100 translate-y-0"
        x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100 translate-y-0"
        x-transition:leave-end="opacity-0 -translate-y-4"
        class="md:hidden bg-white border-t border-ferro-carbon-100 shadow-xl" role="navigation"
        aria-label="Menú móvil">

        <div class="px-4 py-5 space-y-5">

            {{-- Buscador mobile --}}
            <div class="flex items-center border border-ferro-steel-300 rounded-lg overflow-hidden shadow-sm"
                role="search">
                <input type="text" placeholder="Buscar productos..."
                    class="flex-1 px-4 py-2.5 text-sm focus:outline-none bg-ferro-steel-50"
                    aria-label="Buscar productos">
                <button
                    class="bg-ferro-yellow-500 hover:bg-ferro-yellow-600 text-ferro-black px-4 py-2.5 transition-colors cursor-pointer flex items-center justify-center"
                    aria-label="Realizar búsqueda">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                    </svg>
                </button>
            </div>

            {{-- Enlaces móvil --}}
            <div class="grid grid-cols-2 gap-2">
                <a href="{{ route('home') }}"
                    class="text-ferro-steel-700 hover:text-ferro-yellow-500 hover:bg-ferro-yellow-50 transition-colors text-sm font-medium py-2.5 px-3 border border-ferro-carbon-100 rounded-lg text-center">Inicio</a>
                <a href="{{ route('united') }}"
                    class="text-ferro-steel-700 hover:text-ferro-yellow-500 hover:bg-ferro-yellow-50 transition-colors text-sm font-medium py-2.5 px-3 border border-ferro-carbon-100 rounded-lg text-center">Por unidad</a>
                <a href="{{ route('category') }}"
                    class="text-ferro-steel-700 hover:text-ferro-yellow-500 hover:bg-ferro-yellow-50 transition-colors text-sm font-medium py-2.5 px-3 border border-ferro-carbon-100 rounded-lg text-center">Catálogo</a>
                <a href="#"
                    class="text-ferro-steel-700 hover:text-ferro-yellow-500 hover:bg-ferro-yellow-50 transition-colors text-sm font-medium py-2.5 px-3 border border-ferro-carbon-100 rounded-lg text-center">Proyectos</a>
                <a href="{{ route('about') }}"
                    class="text-ferro-steel-700 hover:text-ferro-yellow-500 hover:bg-ferro-yellow-50 transition-colors text-sm font-medium py-2.5 px-3 border border-ferro-carbon-100 rounded-lg text-center">Nosotros</a>
                <a href="#"
                    class="text-ferro-steel-700 hover:text-ferro-yellow-500 hover:bg-ferro-yellow-50 transition-colors text-sm font-medium py-2.5 px-3 border border-ferro-carbon-100 rounded-lg text-center">Blog</a>
                <a href="{{ route('contact') }}"
                    class="text-ferro-steel-700 hover:text-ferro-yellow-500 hover:bg-ferro-yellow-50 transition-colors text-sm font-medium py-2.5 px-3 border border-ferro-carbon-100 rounded-lg text-center">Contacto</a>
            </div>

            {{-- ACCESO RÁPIDO: INGRESAR + WHATSAPP --}}
            <div class="grid grid-cols-2 gap-3 pt-3 border-t border-ferro-carbon-100">
                <a href="#"
                    class="flex items-center justify-center gap-2 bg-ferro-steel-100 hover:bg-ferro-steel-200 text-ferro-steel-700 px-4 py-2.5 rounded-lg text-sm font-medium transition-colors">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                    </svg>
                    Ingresar
                </a>

                <a href="https://wa.me/573184111790" target="_blank"
                    class="flex items-center justify-center gap-2 bg-ferro-whatsapp hover:bg-ferro-whatsapp text-white px-4 py-2.5 rounded-lg text-sm font-medium transition-colors">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path
                            d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z" />
                    </svg>
                    WhatsApp
                </a>
            </div>

            {{-- REDES SOCIALES --}}
            <div class="flex items-center justify-center gap-6 pt-2 border-t border-ferro-carbon-100">
                <a href="#" class="text-ferro-steel-500 hover:text-ferro-yellow-500 transition-colors"
                    aria-label="Instagram">
                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path
                            d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069z" />
                    </svg>
                </a>
                <a href="#" class="text-ferro-steel-500 hover:text-ferro-yellow-500 transition-colors"
                    aria-label="TikTok">
                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path
                            d="M19.59 6.69a4.83 4.83 0 01-3.77-4.25V2h-3.45v13.67a2.89 2.89 0 01-2.88 2.5 2.89 2.89 0 01-2.89-2.89 2.89 2.89 0 012.89-2.89c.28 0 .54.04.79.1V9.01a6.33 6.33 0 00-.79-.05 6.34 6.34 0 00-6.34 6.34 6.34 6.34 0 006.34 6.34 6.34 6.34 0 006.33-6.34V8.69a8.18 8.18 0 004.78 1.52V6.75a4.85 4.85 0 01-1.01-.06z" />
                    </svg>
                </a>
                <a href="#" class="text-ferro-steel-500 hover:text-ferro-yellow-500 transition-colors"
                    aria-label="Gmail">
                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path
                            d="M24 5.457v13.909c0 .904-.732 1.636-1.636 1.636h-3.819V11.73L12 16.64l-6.545-4.91v9.273H1.636A1.636 1.636 0 010 19.366V5.457c0-2.023 2.309-3.178 3.927-1.964L5.455 4.64 12 9.548l6.545-4.91 1.528-1.145C21.69 2.28 24 3.434 24 5.457z" />
                    </svg>
                </a>
                <a href="#" class="text-ferro-steel-500 hover:text-ferro-yellow-500 transition-colors"
                    aria-label="X (Twitter)">
                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path
                            d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-4.714-6.231-5.401 6.231H2.746l7.73-8.835L1.254 2.25H8.08l4.253 5.622 5.911-5.622z" />
                    </svg>
                </a>
            </div>

            {{-- INFO DE CONTACTO --}}
            <address
                class="bg-linear-to-r from-ferro-steel-50 to-white rounded-xl p-4 space-y-2.5 text-xs text-ferro-steel-600 border border-ferro-carbon-100 shadow-sm not-italic">
                <div class="flex items-center gap-3">
                    <div class="w-8 h-8 rounded-full bg-ferro-yellow-500/10 flex items-center justify-center shrink-0">
                        <svg class="w-4 h-4 text-ferro-yellow-500" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                    </div>
                    <span class="font-medium">Cra 50 #12-34, Bogotá, Colombia</span>
                </div>
                <div class="flex items-center gap-3">
                    <div class="w-8 h-8 rounded-full bg-ferro-yellow-500/10 flex items-center justify-center shrink-0">
                        <svg class="w-4 h-4 text-ferro-yellow-500" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <span class="font-medium">Lun-Sáb 7:00am – 6:00pm</span>
                </div>
                <div class="flex items-center gap-3">
                    <div class="w-8 h-8 rounded-full bg-ferro-yellow-500/10 flex items-center justify-center shrink-0">
                        <svg class="w-4 h-4 text-ferro-yellow-500" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.948V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 7V5z" />
                        </svg>
                    </div>
                    <a href="tel:6015550123" class="font-medium hover:text-ferro-yellow-500 transition-colors">(601)
                        555 0123</a>
                </div>
            </address>

        </div>
    </div>

</header>
