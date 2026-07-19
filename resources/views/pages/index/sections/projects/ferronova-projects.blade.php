{{-- ==========================================================
    PLANTILLA MAESTRA: FERRANOVA - PROYECTOS
    ========================================================== --}}

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Proyectos | FERRANOVA</title>
    <meta name="description" content="Descubre los proyectos de construcción e industrial donde FERRANOVA ha sido aliado estratégico.">
    <link rel="canonical" href="{{ url()->current() }}">
    <meta property="og:title" content="Proyectos | FERRANOVA">
    <meta property="og:image" content="{{ asset('asset/logos/logoOficial.png') }}">

    {{-- FUENTES Y SCRIPTS --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300;400;500;600;700&family=Inter:wght@300;400;500;600;700&family=Plus+Jakarta+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-ferro-background text-ferro-carbon-700 font-body antialiased">

    {{-- NAVEGACIÓN --}}
    <div class="relative z-20 w-full">
        @include('pages.index.layouts.navegations.layout-nav')
    </div>

    {{-- CONTENIDO PRINCIPAL --}}
    <main id="main-content" role="main" aria-label="Proyectos FERRANOVA">

        {{-- Sección 1: Hero de Proyectos --}}
        @include('pages.index.sections.projects.sections.layout-hero-projects')

        {{-- Sección 2: Contenido (Filtros + Punto de montaje Vue) --}}
        @include('pages.index.sections.projects.sections.layout-content-projects')

    </main>

    {{-- FOOTER --}}
    @include('pages.index.layouts.footer.layout-footer')

</body>
</html>