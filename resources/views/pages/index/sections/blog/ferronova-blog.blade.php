{{-- ==========================================================
    PLANTILLA MAESTRA: FERRANOVA - BLOG
    ========================================================== --}}

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog | FERRANOVA</title>
    <meta name="description" content="Guías prácticas, consejos técnicos y tendencias para tus proyectos industriales y de construcción.">
    <link rel="canonical" href="{{ url()->current() }}">
    <meta property="og:title" content="Blog | FERRANOVA">
    <meta property="og:image" content="{{ asset('asset/logos/logoOficial.png') }}">

    {{-- FUENTES Y SCRIPTS --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300;400;500;600;700&family=Inter:wght@300;400;500;600;700&family=Plus+Jakarta+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-ferro-background text-ferro-carbon-700 font-body antialiased">

    {{-- NAVEGACIÓN --}}
    <div class="relative z-20 w-full">
        @include('pages.layouts.navegations.layout-nav')
    </div>

    {{-- CONTENIDO PRINCIPAL --}}
    <main id="main-content" role="main" aria-label="Blog FERRANOVA">

        {{-- Sección 1: Hero del Blog --}}
        @include('pages.index.sections.blog.sections.layout-hero-blog')

        {{-- Sección 2: Último Post (Modo 'featured') --}}
        @include('pages.index.sections.blog.sections.layout-last-blog')

        {{-- Sección 3: Todos los Posts (Modo 'grid') --}}
        @include('pages.index.sections.blog.sections.layout-content-blog')

    </main>

    {{-- FOOTER --}}
    @include('pages.layouts.footer.layout-footer')

</body>
</html>
