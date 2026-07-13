{{-- ==========================================================
    COMPONENTE: FORMULARIO DE REGISTRO
    ==========================================================
    Solo el formulario de registro de nuevos usuarios.
    ========================================================== --}}

<div>

    {{-- ENCABEZADO --}}
    <div class="mb-4">
        <h2 class="text-2xl font-heading font-bold text-ferro-carbon-900" style="font-family: var(--font-heading);">
            Crear cuenta
        </h2>
        <p class="text-ferro-steel-500 text-sm font-body mt-0.5" style="font-family: var(--font-body);">
            Regístrate para acceder a todos los beneficios.
        </p>
    </div>

    {{-- FORMULARIO --}}
    <form class="space-y-3">

        {{-- NOMBRE COMPLETO --}}
        <div>
            <label for="name" class="block text-sm font-medium text-ferro-carbon-700 font-body" style="font-family: var(--font-body);">
                Nombre completo
            </label>
            <input 
                type="text" 
                id="name" 
                name="name" 
                placeholder="Tu nombre completo" 
                class="mt-1 w-full px-4 py-2 border border-ferro-carbon-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-ferro-yellow-500 focus:border-transparent text-sm bg-ferro-white text-ferro-carbon-900 placeholder-ferro-steel-400 transition-all"
                required
            >
        </div>

        {{-- CORREO --}}
        <div>
            <label for="email" class="block text-sm font-medium text-ferro-carbon-700 font-body" style="font-family: var(--font-body);">
                Correo electrónico
            </label>
            <input 
                type="email" 
                id="email" 
                name="email" 
                placeholder="correo@empresa.com" 
                class="mt-1 w-full px-4 py-2 border border-ferro-carbon-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-ferro-yellow-500 focus:border-transparent text-sm bg-ferro-white text-ferro-carbon-900 placeholder-ferro-steel-400 transition-all"
                required
            >
        </div>

        {{-- CONTRASEÑA --}}
        <div>
            <label for="password" class="block text-sm font-medium text-ferro-carbon-700 font-body" style="font-family: var(--font-body);">
                Contraseña
            </label>
            <input 
                type="password" 
                id="password" 
                name="password" 
                placeholder="********" 
                class="mt-1 w-full px-4 py-2 border border-ferro-carbon-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-ferro-yellow-500 focus:border-transparent text-sm bg-ferro-white text-ferro-carbon-900 placeholder-ferro-steel-400 transition-all"
                required
            >
        </div>

        {{-- BOTÓN REGISTRARSE --}}
        <button 
            type="submit" 
            name="register"
            class="w-full bg-ferro-yellow-500 hover:bg-ferro-yellow-600 text-ferro-black font-heading font-bold py-2 rounded-lg transition-all duration-200 text-sm"
            style="font-family: var(--font-heading);"
        >
            Registrarse
        </button>

    </form>

    {{-- SEPARADOR --}}
    <div class="flex items-center gap-4 my-4">
        <span class="flex-1 h-px bg-ferro-carbon-200"></span>
        <span class="text-[10px] text-ferro-steel-400 font-body uppercase tracking-wider" style="font-family: var(--font-body);">o continúa con</span>
        <span class="flex-1 h-px bg-ferro-carbon-200"></span>
    </div>

    {{-- BOTÓN GOOGLE --}}
    <button class="w-full flex items-center justify-center gap-2 px-4 py-2 border border-ferro-carbon-200 rounded-lg hover:bg-ferro-steel-50 transition-colors duration-200 text-sm font-medium text-ferro-carbon-700 font-body" style="font-family: var(--font-body);">
        <svg class="w-5 h-5" viewBox="0 0 24 24" fill="currentColor">
            <path d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92a5.06 5.06 0 01-2.2 3.32v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.1z" fill="#4285F4"/>
            <path d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z" fill="#34A853"/>
            <path d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z" fill="#FBBC05"/>
            <path d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z" fill="#EA4335"/>
        </svg>
        Continuar con Google
    </button>

    {{-- ENLACE A LOGIN --}}
    <p class="text-center text-sm text-ferro-steel-500 font-body mt-4" style="font-family: var(--font-body);">
        ¿Ya tienes cuenta? 
        <a href="{{ route('login') }}" class="text-ferro-yellow-500 hover:text-ferro-yellow-700 font-medium transition-colors">
            Inicia sesión
        </a>
    </p>

</div>