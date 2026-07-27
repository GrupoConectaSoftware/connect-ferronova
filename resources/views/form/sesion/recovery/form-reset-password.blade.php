<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nueva contraseña | FERRANOVA</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@400;500;600;700&family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="min-h-screen bg-ferro-background font-body text-ferro-carbon-700 antialiased">
    <main class="flex min-h-screen items-center justify-center px-5 py-10">
        <section
            x-data="{ password: '', confirmation: '', showPassword: false }"
            class="w-full max-w-lg rounded-3xl bg-ferro-white p-6 shadow-[0_20px_60px_rgba(15,23,42,0.08)] sm:p-10"
            aria-labelledby="reset-title"
        >
            <span class="text-[10px] font-bold uppercase tracking-[0.2em] text-ferro-yellow-700">Paso 3 de 3</span>
            <h1 id="reset-title" class="mt-2 font-heading text-3xl font-bold tracking-tight text-ferro-carbon-900">Crea una nueva contraseña</h1>
            <p class="mt-2 text-sm leading-relaxed text-ferro-steel-500">Utiliza una contraseña distinta a las anteriores y fácil de recordar solo para ti.</p>

            <form
                class="mt-8 space-y-5"
                @submit.prevent="if (password === confirmation && password.length >= 8) window.location.assign('{{ route('login') }}')"
            >
                <input type="hidden" name="email" value="{{ request('email') }}">
                <input type="hidden" name="code" value="{{ request('code') }}">

                <div>
                    <label for="new-password" class="text-sm font-semibold text-ferro-carbon-700">Nueva contraseña</label>
                    <input id="new-password" x-model="password" :type="showPassword ? 'text' : 'password'" autocomplete="new-password" minlength="8" required placeholder="Mínimo 8 caracteres" class="mt-2 w-full rounded-xl border border-ferro-carbon-100 bg-ferro-steel-100/70 px-4 py-3 text-sm text-ferro-carbon-900 outline-none focus:border-ferro-yellow-500 focus:bg-ferro-white focus:ring-4 focus:ring-ferro-yellow-500/15">
                </div>
                <div>
                    <label for="password-confirmation" class="text-sm font-semibold text-ferro-carbon-700">Confirmar contraseña</label>
                    <input id="password-confirmation" x-model="confirmation" :type="showPassword ? 'text' : 'password'" autocomplete="new-password" minlength="8" required placeholder="Repite tu contraseña" class="mt-2 w-full rounded-xl border border-ferro-carbon-100 bg-ferro-steel-100/70 px-4 py-3 text-sm text-ferro-carbon-900 outline-none focus:border-ferro-yellow-500 focus:bg-ferro-white focus:ring-4 focus:ring-ferro-yellow-500/15">
                    <p x-show="confirmation && password !== confirmation" x-cloak class="mt-2 text-xs font-medium text-ferro-danger">Las contraseñas no coinciden.</p>
                </div>

                <label class="inline-flex cursor-pointer items-center gap-2 text-xs text-ferro-steel-500">
                    <input type="checkbox" x-model="showPassword" class="h-4 w-4 rounded border-ferro-carbon-300 text-ferro-yellow-500 focus:ring-ferro-yellow-500">
                    Mostrar contraseñas
                </label>

                <button type="submit" :disabled="password.length < 8 || password !== confirmation" class="w-full rounded-xl bg-ferro-yellow-500 px-6 py-3.5 text-sm font-bold text-ferro-black transition-all hover:bg-ferro-yellow-700 disabled:cursor-not-allowed disabled:opacity-50">
                    Guardar nueva contraseña
                </button>
            </form>
        </section>
    </main>
</body>
</html>

