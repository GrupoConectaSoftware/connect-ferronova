{{-- ==========================================================
    PLANTILLA PRINCIPAL: FERRANOVA - ERP INDUSTRIAL
    ========================================================== --}}

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FERRONOVA - ERP Industrial para Ferreterías y Construcción</title>
    <meta name="description" content="FERRANOVA es el ERP especializado para ferreterías y suministros industriales. Gestiona inventario, ventas, compras, clientes y maquinaria en una sola plataforma.">
    <meta name="keywords" content="ERP ferretería, software industrial, gestión de inventario, ventas, compras, maquinaria, construcción">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="{{ url()->current() }}">
    <meta property="og:title" content="FERRANOVA - ERP Industrial para Ferreterías y Construcción">
    <meta property="og:description" content="Gestiona inventario, ventas, compras, clientes y maquinaria en una sola plataforma. El ERP especializado para ferreterías y suministros industriales.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:image" content="{{ asset('asset/logos/logoOficial.png') }}">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300;400;500;600;700&family=Inter:wght@300;400;500;600;700&family=Plus+Jakarta+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-ferro-background text-ferro-carbon-700 font-body antialiased">


    {{-- 1. NAVEGACIÓN GLOBAL --}}
    <div class="relative z-20 w-full">
        @include('pages.index.layouts.navegations.layout-nav')
    </div>

    {{-- ==========================================================
        CONTENIDO PRINCIPAL
        ========================================================== --}}
    <main role="main" aria-label="Contenido principal de FERRANOVA">

        {{-- SECCIÓN 1: HERO + NAV --}}
        {{-- El Nav ya está incluido dentro de este layout --}}
        @include('pages.index.sections.homepages.sections.layout-introduction')
        
        {{-- SECCIÓN 2: ESTADÍSTICAS --}}
        @include('pages.index.sections.homepages.sections.layout-statistic')

        {{-- SECCIÓN 3: RECOMENDADOS --}}
        @include('pages.index.sections.homepages.sections.layout-recommended')

        {{-- SECCIÓN 4: INVITACIÓN --}}
        @include('pages.index.sections.homepages.sections.layout-invitation')

        {{-- SECCIÓN 5: CATEGORÍAS --}}
        @include('pages.index.sections.homepages.sections.layout-category')

        {{-- SECCIÓN 6: VENTAJAS --}}
        @include('pages.index.sections.homepages.sections.layout-advantages')

        {{-- SECCIÓN 7: AGENDAMIENTO --}}
        @include('pages.index.sections.homepages.sections.layout-scheduling')

        {{-- SECCIÓN 8: CTA --}}
        @include('pages.index.sections.homepages.sections.layout-cta')

        {{-- SECCIÓN 9: MARCAS --}}
        @include('pages.index.sections.homepages.sections.layout-brand')

        {{-- SECCIÓN 10: RESEÑAS --}}
        @include('pages.index.sections.homepages.sections.layout-feedback')

    </main>

    {{-- ==========================================================
        FOOTER
        ========================================================== --}}
    @include('pages.index.layouts.footer.layout-footer')

</body>
</html>
