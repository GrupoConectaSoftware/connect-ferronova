{{-- ==========================================================
    PLANTILLA MAESTRA: FERRONOVA - CATÁLOGO
    ==========================================================
    Este es el archivo maestro que carga el layout completo
    de la página de catálogo de FERRANOVA.
    Incluye:
    - Meta tags y SEO específicos para Catálogo
    - Fuentes de Google (Space Grotesk, Inter, Plus Jakarta Sans)
    - Alpine.js para interactividad
    - Assets compilados con Vite (CSS + JS)
    - Navegación y Footer global, y las secciones de Catálogo
    ========================================================== --}}

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Catálogo | FERRANOVA</title>
    <meta name="description" content="Explora el catálogo de FERRANOVA. Filtra, busca y previsualiza cada producto como en una tienda profesional.">
    <link rel="canonical" href="{{ url()->current() }}">
    <meta property="og:title" content="Catálogo | FERRANOVA">
    <meta property="og:image" content="{{ asset('asset/logos/logoOficial.png') }}">

    {{-- FUENTES Y SCRIPTS --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300;400;500;600;700&family=Inter:wght@300;400;500;600;700&family=Plus+Jakarta+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-ferro-background text-ferro-carbon-700 font-body antialiased">

    {{-- 1. NAVEGACIÓN GLOBAL --}}
    <div class="relative z-20 w-full">
        @include('pages.index.layouts.navegations.layout-nav')
    </div>

    {{-- 2. CONTENIDO PRINCIPAL --}}
    <main id="main-content" role="main" aria-label="Catálogo de productos FERRANOVA">

        {{-- Sección 1: Hero de Catálogo --}}
        @include('pages.index.sections.category.sections.layout-hero-category')

        {{-- Sección 2: Contenido del Catálogo (Categorías o Productos) --}}
        @include('pages.index.sections.category.sections.layout-content-category')

    </main>

    {{-- 3. FOOTER GLOBAL --}}
    @include('pages.index.layouts.footer.layout-footer')

</body>
</html>