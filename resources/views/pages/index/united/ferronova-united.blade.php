{{-- ==========================================================
    PLANTILLA PRINCIPAL: FERRONOVA - POR UNIDAD (UNITED)
    ==========================================================
    Este es el archivo maestro que carga el layout completo
    de la página de ventas por unidad (tornillos, arandelas, etc.)
    de FERRANOVA.
    Incluye:
    - Meta tags y SEO específicos para Por Unidad
    - Fuentes de Google (Space Grotesk, Inter, Plus Jakarta Sans)
    - Alpine.js para interactividad
    - Assets compilados con Vite (CSS + JS)
    - Navegación y Footer global, y la sección de ventas por unidad
    ========================================================== --}}

<!DOCTYPE html>
<html lang="es">

<head>
    {{-- META TAGS BÁSICOS --}}
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- TÍTULO Y SEO (Adaptado para Por Unidad) --}}
    <title>FERRANOVA - Ventas Por Unidad</title>
    <meta name="description"
        content="Compra tornillos, tuercas, arandelas, clavos y fijaciones por unidad en FERRANOVA. Calidad industrial certificada para tus proyectos de construcción y mantenimiento.">
    <meta name="keywords"
        content="tornillos por unidad, arandelas, ferretería por unidad, suministros industriales, pernos, tuercas">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="{{ url()->current() }}">

    {{-- OPEN GRAPH (REDES SOCIALES) --}}
    <meta property="og:title" content="Por Unidad | FERRANOVA - Tornillería y Suministros Industriales">
    <meta property="og:description"
        content="Compra exactamente lo que necesitas, sin desperdicios. Calidad FERRANOVA por unidad.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:image" content="{{ asset('asset/logos/logoOficial.png') }}">

    {{-- FUENTES DE GOOGLE --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300;400;500;600;700&family=Inter:wght@300;400;500;600;700&family=Plus+Jakarta+Sans:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">

    {{-- ALPINE.JS (INTERACTIVIDAD) --}}
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    {{-- ASSETS COMPILADOS CON VITE --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-ferro-background text-ferro-carbon-700 font-body antialiased">

    {{-- NAVEGACIÓN --}}
    <div class="relative z-20 w-full">
        @include('pages.index.layout.navegations.layout-nav')
    </div>

    {{-- ==========================================================
        CONTENIDO PRINCIPAL
        ========================================================== --}}
    <main id="main-content" role="main" aria-label="Módulo de productos por unidad de FERRANOVA">

        {{-- ==========================================================
            SECCIÓN 1: HERO PREMIUM (100% NEGRO/CARBÓN, SIN AZUL)
            ========================================================== --}}
        <section class="relative z-10 w-full h-140 lg:h-162.5 overflow-hidden bg-ferro-carbon-900"
            aria-labelledby="hero-title">

            {{-- FONDO CON IMAGEN Y DEGRADADO --}}
            <figure class="absolute inset-0 w-full h-full">
                <img src="{{ asset('asset/sections/index-unidad/unidad/presentacion-unidad.jpg') }}"
                    alt="Fondo de tornillería, tuercas y suministros industriales"
                    class="w-full h-full object-cover opacity-60" loading="lazy" decoding="async">

                {{-- Capas de degradado 100% NEGRO PROFUNDO (Carbon puro) --}}
                <div class="absolute inset-0 bg-linear-to-r from-ferro-steel-900/95 via-ferro-steel-900/70 to-transparent"
                    aria-hidden="true"></div>
                <div class="absolute inset-0 bg-linear-to-t from-ferro-steel-900/90 via-transparent to-transparent"
                    aria-hidden="true"></div>
            </figure>

            {{-- CONTENIDO DEL HERO --}}
            <div class="relative z-10 container mx-auto px-4 sm:px-6 lg:px-8 h-full flex items-center">
                <header class="max-w-2xl text-ferro-white space-y-6 pt-12 lg:pt-20">

                    {{-- TÍTULO Y SUBTÍTULO --}}
                    <hgroup>
                        <h1 id="hero-title"
                            class="font-heading text-4xl sm:text-5xl lg:text-6xl font-bold leading-tight tracking-tight drop-shadow-sm">
                            Productos <span class="text-ferro-yellow-500">por unidad</span>
                        </h1>
                        <p
                            class="mt-4 text-base sm:text-lg text-ferro-steel-300/90 font-description max-w-lg leading-relaxed">
                            Tornillos, tuercas, arandelas, clavos y fijaciones sueltas. Compra exactamente lo que tu
                            proyecto necesita, sin desperdicios y con la mejor calidad industrial certificada.
                        </p>
                    </hgroup>

                    {{-- ACCIONES --}}
                    <nav aria-label="Acciones del catálogo por unidad" class="flex flex-wrap gap-4 pt-2">
                        <a href="#catalogo-unidad"
                            class="bg-ferro-yellow-500 hover:bg-ferro-yellow-600 text-ferro-black font-medium px-6 py-3 rounded-xl transition-all duration-300 transform hover:scale-105 shadow-lg shadow-ferro-yellow-500/25">
                            Explorar catálogo
                        </a>
                        <a href="https://wa.me/573184111790" target="_blank" rel="noopener noreferrer"
                            class="border border-ferro-carbon-100/20 hover:border-ferro-yellow-500 text-ferro-white hover:text-ferro-yellow-500 font-medium px-6 py-3 rounded-xl transition-all duration-300 flex items-center gap-2 bg-ferro-carbon-900/40 backdrop-blur-sm">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path
                                    d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z" />
                            </svg>
                            Cotizar por WhatsApp
                        </a>
                    </nav>
                </header>
            </div>
        </section>

        {{-- ==========================================================
            SECCIÓN 2: CONTENEDOR DE FONDO CON CUADRÍCULA (DEBAJO DEL HERO)
            ========================================================== --}}
        <div class="relative w-full bg-ferro-background" aria-hidden="true">
            {{-- Patrón de cuadrícula sutil y suave --}}
            <div
                class="absolute inset-0 bg-[linear-gradient(to_right,#80808008_1px,transparent_1px),linear-gradient(to_bottom,#80808008_1px,transparent_1px)] bg-size-[24px_24px] pointer-events-none">
            </div>
            {{-- 
                CAPA DE BENEFICIOS (TARJETAS FLOTANTES)
                Esta capa está dentro del contenedor blanco, pero sube gracias al -mt-16.
                Así se monta sobre la unión del hero y el fondo blanco.
            --}}
            <section class="relative z-10 -mt-16 sm:-mt-20 pb-12" aria-label="Ventajas de comprar por unidad">
                <div class="container mx-auto px-4 sm:px-6 lg:px-8 relative">
                    <ul class="grid grid-cols-1 md:grid-cols-3 gap-6 lg:gap-8 max-w-5xl mx-auto list-none p-0">

                        {{-- Beneficio 1 --}}
                        <li class="h-full cursor-pointer">
                            <article
                                class="group relative bg-ferro-white rounded-2xl p-6 lg:p-8 shadow-[0_8px_30px_rgba(0,0,0,0.04)] border border-ferro-carbon-100/60 hover:border-ferro-yellow-500/40 transition-all duration-500 hover:shadow-[0_20px_40px_rgba(0,0,0,0.08)] hover:-translate-y-2 h-full flex flex-col overflow-hidden">

                                {{-- Brillo sutil interno en hover --}}
                                <div
                                    class="absolute inset-0 bg-linear-to-br from-ferro-yellow-500/5 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500 pointer-events-none">
                                </div>

                                <div
                                    class="relative w-14 h-14 rounded-2xl bg-linear-to-br from-ferro-carbon-900 to-ferro-black text-ferro-yellow-500 flex items-center justify-center mb-4 shadow-lg shadow-ferro-carbon-900/10 group-hover:shadow-ferro-yellow-500/20 group-hover:scale-110 transition-all duration-300">
                                    <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                        stroke-width="1.5" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M21 7.5l-9-5.25L3 7.5m18 0l-9 5.25m9-5.25v9l-9 5.25M3 7.5l9 5.25M3 7.5v9l9 5.25m0-9v9" />
                                    </svg>
                                </div>
                                <h3
                                    class="relative font-heading text-lg font-bold text-ferro-carbon-900 mb-2 tracking-tight">
                                    Sin desperdicio</h3>
                                <p class="relative text-ferro-steel-600 text-sm font-description leading-relaxed">Paga
                                    solo las
                                    piezas que usas. Evita sobrecostos y reduce el desperdicio en tu obra o taller.</p>
                            </article>
                        </li>

                        {{-- Beneficio 2 --}}
                        <li class="h-full cursor-pointer">
                            <article
                                class="group relative bg-ferro-white rounded-2xl p-6 lg:p-8 shadow-[0_8px_30px_rgba(0,0,0,0.04)] border border-ferro-carbon-100/60 hover:border-ferro-yellow-500/40 transition-all duration-500 hover:shadow-[0_20px_40px_rgba(0,0,0,0.08)] hover:-translate-y-2 h-full flex flex-col overflow-hidden">

                                {{-- Brillo sutil interno en hover --}}
                                <div
                                    class="absolute inset-0 bg-linear-to-br from-ferro-yellow-500/5 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500 pointer-events-none">
                                </div>

                                <div
                                    class="relative w-14 h-14 rounded-2xl bg-linear-to-br from-ferro-carbon-900 to-ferro-black text-ferro-yellow-500 flex items-center justify-center mb-4 shadow-lg shadow-ferro-carbon-900/10 group-hover:shadow-ferro-yellow-500/20 group-hover:scale-110 transition-all duration-300">
                                    <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                        stroke-width="1.5" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M12 6v12m-3-2.818l.879.659c1.171.879 3.07.879 4.242 0 1.172-.879 1.172-2.303 0-3.182C13.536 12.219 12.768 12 12 12c-.725 0-1.45-.22-2.003-.659-1.106-.879-1.106-2.303 0-3.182s2.9-.879 4.006 0l.879.659" />
                                    </svg>
                                </div>
                                <h3
                                    class="relative font-heading text-lg font-bold text-ferro-carbon-900 mb-2 tracking-tight">
                                    Precio transparente
                                </h3>
                                <p class="relative text-ferro-steel-600 text-sm font-description leading-relaxed">Valor
                                    claro por
                                    unidad y por bulto. Sin letras chiquitas ni cobros ocultos en tu facturación.</p>
                            </article>
                        </li>

                        {{-- Beneficio 3 --}}
                        <li class="h-full cursor-pointer">
                            <article
                                class="group relative bg-ferro-white rounded-2xl p-6 lg:p-8 shadow-[0_8px_30px_rgba(0,0,0,0.04)] border border-ferro-carbon-100/60 hover:border-ferro-yellow-500/40 transition-all duration-500 hover:shadow-[0_20px_40px_rgba(0,0,0,0.08)] hover:-translate-y-2 h-full flex flex-col overflow-hidden">

                                {{-- Brillo sutil interno en hover --}}
                                <div
                                    class="absolute inset-0 bg-linear-to-br from-ferro-yellow-500/5 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500 pointer-events-none">
                                </div>

                                <div
                                    class="relative w-14 h-14 rounded-2xl bg-linear-to-br from-ferro-carbon-900 to-ferro-black text-ferro-yellow-500 flex items-center justify-center mb-4 shadow-lg shadow-ferro-carbon-900/10 group-hover:shadow-ferro-yellow-500/20 group-hover:scale-110 transition-all duration-300">
                                    <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                        stroke-width="1.5" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                                    </svg>
                                </div>
                                <h3
                                    class="relative font-heading text-lg font-bold text-ferro-carbon-900 mb-2 tracking-tight">
                                    Compra mixta</h3>
                                <p class="relative text-ferro-steel-600 text-sm font-description leading-relaxed">
                                    Combina unidades
                                    de distintas referencias en un solo pedido. Simplifica tu logística y ahorra tiempo.
                                </p>
                            </article>
                        </li>

                    </ul>
                </div>
            </section>
        </div>

        {{-- ==========================================================
            SECCIÓN 3: CATÁLOGO DE PRODUCTOS (COMPONENTE)
            ========================================================== --}}
        <section id="catalogo-unidad" class="py-12 lg:py-16 bg-ferro-background" aria-labelledby="catalogo-title">
            <div class="container mx-auto px-4 sm:px-6 lg:px-8">

                {{-- Aquí se importa tu componente --}}
                @include('pages.index.united.section.layout-product-united')
            </div>
        </section>

    </main>

    {{-- Sección de footer: links de navegación, redes sociales, copyright --}}
    @include('pages.index.layout.footer.layout-footer')

</body>

</html>
