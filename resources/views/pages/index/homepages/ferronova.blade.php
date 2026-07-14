{{-- ==========================================================
    PLANTILLA PRINCIPAL: FERRONOVA - ERP INDUSTRIAL
    ==========================================================
    Este es el archivo maestro que carga el layout completo
    de la página de inicio de FERRANOVA.
    Incluye:
    - Meta tags y SEO básico
    - Fuentes de Google (Space Grotesk, Inter, Plus Jakarta Sans)
    - Alpine.js para interactividad
    - Assets compilados con Vite (CSS + JS)
    - Sección de introducción con carrusel
    ========================================================== --}}

<!DOCTYPE html>
<html lang="es">
<head>
    {{-- ==========================================================
        META TAGS BÁSICOS
        ========================================================== --}}
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    {{-- ==========================================================
        TÍTULO Y SEO
        ========================================================== --}}
    <title>FERRANOVA - ERP Industrial para Ferreterías y Construcción</title>
    <meta name="description" content="FERRANOVA es el ERP especializado para ferreterías y suministros industriales. Gestiona inventario, ventas, compras, clientes y maquinaria en una sola plataforma.">
    <meta name="keywords" content="ERP ferretería, software industrial, gestión de inventario, ventas, compras, maquinaria, construcción">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="{{ url()->current() }}">

    {{-- ==========================================================
        OPEN GRAPH (REDES SOCIALES)
        ========================================================== --}}
    <meta property="og:title" content="FERRANOVA - ERP Industrial para Ferreterías y Construcción">
    <meta property="og:description" content="Gestiona inventario, ventas, compras, clientes y maquinaria en una sola plataforma. El ERP especializado para ferreterías y suministros industriales.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:image" content="{{ asset('asset/logos/logoOficial.png') }}">

    {{-- ==========================================================
        FUENTES DE GOOGLE
        ========================================================== --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300;400;500;600;700&family=Inter:wght@300;400;500;600;700&family=Plus+Jakarta+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    {{-- ==========================================================
        ALPINE.JS (INTERACTIVIDAD)
        ========================================================== --}}
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    {{-- ==========================================================
        ASSETS COMPILADOS CON VITE
        ========================================================== --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body class="bg-ferro-background text-ferro-carbon-700 font-body antialiased">

    {{-- ==========================================================
        CONTENIDO PRINCIPAL
        ========================================================== --}}
    <main role="main" aria-label="Contenido principal de FERRANOVA">

        
            {{-- NAVEGACIÓN --}}
            <div class="relative z-20 w-full">
                @include('pages.index.layout.navegations.layout-nav')
            </div>

            {{-- Sección de introducción: Span de badges (Textos promocionales), span de redes soaciales ,menu de navegacion, carrusel de imagenes --}}
            @include('pages.index.homepages.sections.layout-hero')
            
            {{-- Sección de estadísticas: 4 cards con datos de la empresa --}}
            @include('pages.index.homepages.sections.layout-statistic')

            {{-- Sección de recomendaciones: cards con productos recomendados --}}
            @include('pages.index.homepages.sections.layout-recommended')

            {{-- Sección de invitacion: se compone de n video y texto relacional encima para empresas grandes --}}
            @include('pages.index.homepages.sections.layout-invitation')

            {{-- Sección de categorías: carrusel de categorias --}}
            @include('pages.index.homepages.sections.layout-category')

            {{-- Sección de ventajas: carrusel de ventajas --}}
            @include('pages.index.homepages.sections.layout-advantages')

            {{-- Sección de agendamiento: carrusel de equipos para alquilar --}}
            @include('pages.index.homepages.sections.layout-scheduling')

            {{-- Sección de CTA: invitación a cotizar o agendar asesoría --}}
            @include('pages.index.homepages.sections.layout-cta')

            {{-- Sección de marcas aliadas: carrusel de logos de marcas --}}
            @include('pages.index.homepages.sections.layout-brand')

            {{-- Sección de reseñas verificadas: carrusel de reseñas de clientes --}}
            @include('pages.index.homepages.sections.layout-feedback')

            {{-- Sección de footer: links de navegación, redes sociales, copyright --}}
            @include('pages.index.layout.footer.layout-footer')
    </main>

    {{-- ==========================================================
        SCRIPTS ADICIONALES (SI LOS HUBIERA)
        ========================================================== --}}

</body>
</html>