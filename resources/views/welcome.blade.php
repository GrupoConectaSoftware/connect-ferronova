<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>FERRANOVA - Color Test</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-ferro-background p-8">

    <h1 class="text-4xl font-bold text-ferro-carbon-900 mb-8">Test de Paleta</h1>

    {{-- CONSTRUCTION --}}
    <div class="mb-4">
        <p class="text-ferro-steel-500 mb-2">ferro-construction</p>
        <div class="flex gap-2">
            <div class="w-16 h-16 bg-ferro-construction-100"></div>
            <div class="w-16 h-16 bg-ferro-construction-300"></div>
            <div class="w-16 h-16 bg-ferro-construction-500"></div>
            <div class="w-16 h-16 bg-ferro-construction-700"></div>
            <div class="w-16 h-16 bg-ferro-construction-900"></div>
        </div>
    </div>

    {{-- GOLD --}}
    <div class="mb-4">
        <p class="text-ferro-steel-500 mb-2">ferro-gold</p>
        <div class="flex gap-2">
            <div class="w-16 h-16 bg-ferro-gold-100"></div>
            <div class="w-16 h-16 bg-ferro-gold-300"></div>
            <div class="w-16 h-16 bg-ferro-gold-500"></div>
            <div class="w-16 h-16 bg-ferro-gold-700"></div>
            <div class="w-16 h-16 bg-ferro-gold-900"></div>
        </div>
    </div>

    {{-- CARBON --}}
    <div class="mb-4">
        <p class="text-ferro-steel-500 mb-2">ferro-carbon</p>
        <div class="flex gap-2">
            <div class="w-16 h-16 bg-ferro-carbon-100"></div>
            <div class="w-16 h-16 bg-ferro-carbon-300"></div>
            <div class="w-16 h-16 bg-ferro-carbon-500"></div>
            <div class="w-16 h-16 bg-ferro-carbon-700"></div>
            <div class="w-16 h-16 bg-ferro-carbon-900"></div>
        </div>
    </div>

    {{-- STATUS --}}
    <div class="mb-4">
        <p class="text-ferro-steel-500 mb-2">Status</p>
        <div class="flex gap-2">
            <div class="w-16 h-16 bg-ferro-success"></div>
            <div class="w-16 h-16 bg-ferro-danger"></div>
            <div class="w-16 h-16 bg-ferro-warning"></div>
            <div class="w-16 h-16 bg-ferro-info"></div>
        </div>
    </div>

</body>
</html>