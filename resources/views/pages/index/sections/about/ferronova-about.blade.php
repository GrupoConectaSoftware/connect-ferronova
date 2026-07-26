{{-- ==========================================================
    PLANTILLA MAESTRA: FERRONOVA - SOBRE NOSOTROS (ABOUT)
    ==========================================================
    Este es el archivo maestro que carga el layout completo
    de la página de información corporativa y trayectoria
    de FERRANOVA.
    Incluye:
    - Meta tags y SEO específicos para Sobre Nosotros
    - Fuentes de Google (Space Grotesk, Inter, Plus Jakarta Sans)
    - Alpine.js para interactividad
    - Assets compilados con Vite (CSS + JS)
    - Navegación y Footer global, y las secciones de About
    ========================================================== --}}

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sobre Nosotros | FERRANOVA</title>
    <meta name="description" content="Conoce la trayectoria, misión, visión y el equipo de FERRANOVA. Tu aliado industrial en herramientas y maquinaria.">
    <link rel="canonical" href="{{ url()->current() }}">
    <meta property="og:title" content="Sobre Nosotros | FERRANOVA">
    <meta property="og:image" content="{{ asset('asset/logos/logoOficial.png') }}">

    {{-- FUENTES Y SCRIPTS --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300;400;500;600;700&family=Inter:wght@300;400;500;600;700&family=Plus+Jakarta+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-ferro-background text-ferro-carbon-700 font-body antialiased">

    {{-- 1. NAVEGACIÓN GLOBAL --}}
    <div class="relative z-20 w-full">
        @include('pages.layouts.navegations.layout-nav')
    </div>

    {{-- 2. CONTENIDO PRINCIPAL --}}
    <main id="main-content" role="main" aria-label="Sobre nosotros FERRANOVA">

        {{-- Sección 1: Hero --}}
        @include('pages.index.sections.about.sections.layout-hero-about')

        {{-- Sección 2: Presentation (Quiénes somos) --}}
        @include('pages.index.sections.about.sections.layout-presentation-about')

        {{-- Sección 3: Time (Línea de trayectoria) --}}
        @include('pages.index.sections.about.sections.layout-time-about')

        {{-- Sección 4: Values (Bento grid) --}}
        @include('pages.index.sections.about.sections.layout-values-about')

        {{-- Sección 5: Services (Misión y Visión) --}}
        @include('pages.index.sections.about.sections.layout-services')

        {{-- Sección 6: Split (Imagen grande + info) --}}
        @include('pages.index.sections.about.sections.layout-split-about')

        {{-- Sección 7: Teams (Equipo de trabajo) --}}
        @include('pages.index.sections.about.sections.layout-teams-layout')

    </main>

    {{-- 3. FOOTER GLOBAL --}}
    @include('pages.layouts.footer.layout-footer')

</body>
</html>
