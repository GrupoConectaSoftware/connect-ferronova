{{-- ==========================================================
    LAYOUT: LOGIN DE FERRANOVA
    ========================================================== --}}

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar sesión - FERRANOVA</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300;400;500;600;700&family=Inter:wght@300;400;500;600;700&family=Plus+Jakarta+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-ferro-background text-ferro-carbon-700 font-body antialiased overflow-hidden h-screen">

    <main class="h-screen w-full flex flex-col lg:flex-row overflow-hidden">
        
        {{-- ==========================================================
            LADO IZQUIERDO: IMAGEN (50%)
            SOLO VISIBLE EN PANTALLAS GRANDES (lg)
            ========================================================== --}}
        <div class="hidden lg:flex lg:w-1/2 relative overflow-hidden bg-ferro-black">
            
            <img 
                src="{{ asset('asset/form/login/imagen-login.jpg') }}" 
                alt="FERRANOVA - Iniciar sesión" 
                class="w-full h-full object-cover opacity-40"
                loading="lazy"
            >
            
            <div class="absolute inset-0 bg-linear-to-t from-ferro-black/90 via-ferro-black/40 to-transparent"></div>

            <div class="absolute inset-0 flex flex-col justify-between p-10 lg:p-16">
                
                <div>
                    <img 
                        src="{{ asset('asset/logos/logoOficial.png') }}" 
                        alt="FERRANOVA" 
                        class="h-12 w-auto object-contain"
                        loading="lazy"
                    >
                    <p class="text-ferro-steel-300 text-sm font-body mt-1" style="font-family: var(--font-body);">
                        Tu fuerza industrial.
                    </p>
                </div>

                <div class="max-w-md">
                    <h2 class="text-3xl lg:text-4xl font-heading font-bold text-ferro-white leading-tight" style="font-family: var(--font-heading);">
                        Gestiona tu <span class="text-ferro-yellow-500">negocio</span> desde cualquier lugar
                    </h2>
                    <p class="text-ferro-steel-300 text-sm font-body mt-3" style="font-family: var(--font-body);">
                        Accede a tu cuenta para gestionar pedidos, favoritos, cotizaciones y cuentas empresariales.
                    </p>
                    
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
                            <span class="text-ferro-yellow-500 text-xl font-heading font-bold">4.9★</span>
                            <p class="text-ferro-steel-300 text-xs font-body">Calificación</p>
                        </div>
                    </div>
                </div>

                <div class="text-ferro-steel-500 text-xs font-body">
                    <span>© {{ date('Y') }} FERRANOVA. Todos los derechos reservados.</span>
                </div>
            </div>
        </div>

        {{-- ==========================================================
            LADO DERECHO: FORMULARIO (50%)
            EN MOBILE/TABLET OCUPA EL 100%
            ========================================================== --}}
        <div class="w-full lg:w-1/2 flex items-center justify-center px-6 py-6 sm:px-10 lg:px-12 bg-ferro-white overflow-y-auto">
            <div class="w-full max-w-md py-2">
                
                {{-- BOTÓN VOLVER (visible en todas las pantallas) --}}
                <div class="mb-4">
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

                @include('pages.form.sesion.login.component.form-login-component')

            </div>
        </div>

    </main>

</body>
</html>