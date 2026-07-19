{{-- ==========================================================
    LAYOUT: REGISTRO DE FERRANOVA
    ==========================================================
    Estructura dividida en 50% formulario y 50% imagen (derecha).
    Imagen oculta en mobile y tablet.
    ========================================================== --}}

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrarse - FERRANOVA</title>

    {{-- FUENTES --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300;400;500;600;700&family=Inter:wght@300;400;500;600;700&family=Plus+Jakarta+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    {{-- VITE --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-ferro-background text-ferro-carbon-700 font-body antialiased overflow-hidden h-screen">

    <main class="h-screen w-full flex flex-col lg:flex-row overflow-hidden">
        
        {{-- ==========================================================
            LADO IZQUIERDO: FORMULARIO (50%)
            EN MOBILE/TABLET OCUPA EL 100%
            ========================================================== --}}
        <div class="order-1 flex h-full w-full items-center justify-center overflow-hidden bg-ferro-white px-5 py-3 sm:px-8 lg:w-1/2 lg:px-12">
            <div class="w-full max-w-sm">
                
                {{-- BOTÓN VOLVER (visible en todas las pantallas) --}}
                <div class="mb-2">
                    <a 
                        href="{{ route('home') }}" 
                        class="inline-flex items-center gap-2 text-ferro-steel-500 hover:text-ferro-yellow-500 transition-colors text-sm font-medium font-body"
                        style="font-family: var(--font-body);"
                    >
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
                        </svg>
                        Volver al inicio
                    </a>
                </div>

                {{-- ==========================================================
                    COMPONENTE: FORMULARIO DE REGISTRO
                    ========================================================== --}}
                @include('pages.form.sesion.register.component.form-register-component')

            </div>
        </div>

        {{-- ==========================================================
            LADO DERECHO: IMAGEN (50%)
            SOLO VISIBLE EN PANTALLAS GRANDES (lg)
            ========================================================== --}}
        <div class="hidden lg:flex lg:w-1/2 relative overflow-hidden bg-ferro-black order-2">
            
            {{-- IMAGEN DE FONDO --}}
            <img 
                src="{{ asset('asset/form/register/imagen-register.jpg') }}" 
                alt="FERRANOVA - Registrarse" 
                class="w-full h-full object-cover opacity-40"
                loading="lazy" decoding="async">
            
            {{-- OVERLAY OSCURO --}}
            <div class="absolute inset-0 bg-linear-to-t from-ferro-black/90 via-ferro-black/40 to-transparent"></div>

            {{-- CONTENIDO SOBRE LA IMAGEN --}}
            <div class="absolute inset-0 flex flex-col justify-between p-10 lg:p-16">
                
                {{-- LOGO OFICIAL + TEXTO --}}
                <div>
                    
                    <p class="text-ferro-steel-300 text-sm font-body mt-1" style="font-family: var(--font-body);">
                        Tu fuerza industrial.
                    </p>
                </div>

                {{-- TEXTO CENTRAL --}}
                <div class="max-w-md">
                    <h2 class="text-3xl lg:text-4xl font-heading font-bold text-ferro-white leading-tight" style="font-family: var(--font-heading);">
                        Únete a la <span class="text-ferro-yellow-500">fuerza industrial</span>
                    </h2>
                    <p class="text-ferro-steel-300 text-sm font-body mt-3" style="font-family: var(--font-body);">
                        Crea tu cuenta y accede a herramientas, cotizaciones y beneficios exclusivos para empresas y contratistas.
                    </p>
                    
                    {{-- ESTADÍSTICAS RÁPIDAS --}}
                    <div class="flex gap-6 mt-6">
                        <div>
                            <span class="text-ferro-yellow-500 text-xl font-heading font-bold">+10.000</span>
                            <p class="text-ferro-steel-300 text-xs font-body">Productos</p>
                        </div>
                        <div>
                            <span class="text-ferro-yellow-500 text-xl font-heading font-bold">+500</span>
                            <p class="text-ferro-steel-300 text-xs font-body">Empresas</p>
                        </div>
                        <div>
                            <span class="text-ferro-yellow-500 text-xl font-heading font-bold">+60</span>
                            <p class="text-ferro-steel-300 text-xs font-body">Proyectos</p>
                        </div>
                    </div>
                </div>

                {{-- FOOTER DE LA IMAGEN --}}
                <div class="text-ferro-steel-500 text-xs font-body">
                    <span>© {{ date('Y') }} FERRANOVA. Todos los derechos reservados.</span>
                </div>
            </div>
        </div>

    </main>

</body>
</html>
