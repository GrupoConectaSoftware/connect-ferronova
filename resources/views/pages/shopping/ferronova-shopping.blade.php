{{-- ==========================================================
    PLANTILLA MAESTRA: FERRANOVA - CARRITO DE COMPRAS
    ========================================================== --}}

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Carrito de compras | FERRANOVA</title>
    <meta name="description" content="Revisa tus productos y solicita la cotización final por WhatsApp.">
    <link rel="canonical" href="{{ url()->current() }}">
    <meta property="og:title" content="Carrito de compras | FERRANOVA">
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
    <main id="main-content" role="main" aria-label="Carrito de compras FERRANOVA">

        {{-- Sección 1: Hero --}}
        @include('pages.shopping.sections.layout-hero-shopping')

        {{-- Sección 2: Contenido del Carrito --}}
        @include('pages.shopping.sections.layout-pay-shopping')

    </main>

    {{-- FOOTER --}}
    @include('pages.layouts.footer.layout-footer')

</body>
</html>