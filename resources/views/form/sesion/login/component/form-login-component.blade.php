<section aria-labelledby="login-title">
    <header class="mb-5">
        <span class="font-description text-[10px] font-bold uppercase tracking-[0.2em] text-ferro-yellow-700">Acceso seguro</span>
        <h1 id="login-title" class="mt-1 font-heading text-3xl font-bold tracking-tight text-ferro-carbon-900">
            Bienvenido de nuevo
        </h1>
        <p class="mt-1 font-body text-xs leading-relaxed text-ferro-steel-500">
            Ingresa tus credenciales para continuar.
        </p>
    </header>

    <form class="space-y-3.5">
        <div>
            <label for="login-email" class="block font-body text-sm font-semibold text-ferro-carbon-700">Correo electrónico</label>
            <input
                id="login-email"
                name="email"
                type="email"
                autocomplete="email"
                placeholder="correo@empresa.com"
                required
                class="mt-1.5 w-full rounded-xl border border-ferro-carbon-100 bg-ferro-steel-100/70 px-4 py-2 font-body text-sm text-ferro-carbon-900 outline-none transition-all duration-200 placeholder:text-ferro-steel-500 focus:border-ferro-yellow-500 focus:bg-ferro-white focus:ring-4 focus:ring-ferro-yellow-500/15"
            >
        </div>

        <div>
            <div class="flex items-center justify-between gap-4">
                <label for="login-password" class="font-body text-sm font-semibold text-ferro-carbon-700">Contraseña</label>
                <a href="{{ route('password.request') }}" class="font-body text-xs font-semibold text-ferro-yellow-700 transition-colors hover:text-ferro-yellow-900">¿Olvidaste tu contraseña?</a>
            </div>
            <input
                id="login-password"
                name="password"
                type="password"
                autocomplete="current-password"
                placeholder="••••••••"
                required
                class="mt-1.5 w-full rounded-xl border border-ferro-carbon-100 bg-ferro-steel-100/70 px-4 py-2 font-body text-sm text-ferro-carbon-900 outline-none transition-all duration-200 placeholder:text-ferro-steel-500 focus:border-ferro-yellow-500 focus:bg-ferro-white focus:ring-4 focus:ring-ferro-yellow-500/15"
            >
        </div>

        <label class="inline-flex cursor-pointer items-center gap-2.5 font-body text-sm text-ferro-steel-500">
            <input name="remember" type="checkbox" class="h-4 w-4 rounded border-ferro-carbon-300 text-ferro-yellow-500 focus:ring-ferro-yellow-500">
            Recordarme
        </label>

        <div id="login-action-app">
            <btn-login></btn-login>
        </div>
    </form>

    <div class="my-4 flex items-center gap-4" aria-hidden="true">
        <span class="h-px flex-1 bg-ferro-carbon-100"></span>
        <span class="font-body text-[10px] font-semibold uppercase tracking-wider text-ferro-steel-500">o continúa con</span>
        <span class="h-px flex-1 bg-ferro-carbon-100"></span>
    </div>

    <div id="login-google-app">
        <btn-google></btn-google>
    </div>

    <p class="mt-4 text-center font-body text-xs text-ferro-steel-500">
        ¿Aún no tienes cuenta?
        <a href="{{ route('register') }}" class="font-semibold text-ferro-yellow-700 transition-colors hover:text-ferro-yellow-900">Regístrate aquí</a>
    </p>
</section>
