{{-- ==========================================================
    PLANTILLA MAESTRA: FERRONOVA - CONTACTO
    ==========================================================
    Este es el archivo maestro que carga el layout completo
    de la página de contacto de FERRANOVA.
    Incluye:
    - Meta tags y SEO específicos para Contacto
    - Fuentes de Google (Space Grotesk, Inter, Plus Jakarta Sans)
    - Alpine.js para interactividad
    - Assets compilados con Vite (CSS + JS)
    - Navegación y Footer global, y las secciones de Contacto
    ========================================================== --}}

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contacto | FERRANOVA</title>
    <meta name="description" content="Cotizaciones a medida, asesoría técnica y alquiler de equipos. Comunícate con FERRANOVA y hablemos de tu proyecto.">
    <link rel="canonical" href="{{ url()->current() }}">
    <meta property="og:title" content="Contacto | FERRANOVA">
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
        @include('pages.index.layout.navegations.layout-nav')
    </div>

    {{-- 2. CONTENIDO PRINCIPAL --}}
    <main id="main-content" role="main" aria-label="Página de contacto FERRANOVA">

        {{-- Sección 1: Hero de Contacto --}}
        @include('pages.index.contact.sections.layout-hero-contact')

        {{-- Sección 2: Formulario o Información de Contacto --}}
        @include('pages.index.contact.sections.layout-form-contact')

        {{-- Sección 3: Formulario o Información de Contacto --}}
        @include('pages.index.contact.sections.layout map-contact')

    </main>

    {{-- 3. FOOTER GLOBAL --}}
    @include('pages.index.layout.footer.layout-footer')

</body>
</html>