<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificar código | FERRANOVA</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@400;500;600;700&family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="min-h-screen bg-ferro-background font-body text-ferro-carbon-700 antialiased">
    <main class="flex min-h-screen items-center justify-center px-5 py-10">
        <section class="w-full max-w-lg rounded-3xl bg-ferro-white p-6 shadow-[0_20px_60px_rgba(15,23,42,0.08)] sm:p-10" aria-labelledby="code-title">
            <a href="{{ route('password.request') }}" class="inline-flex items-center gap-2 text-sm font-semibold text-ferro-steel-500 hover:text-ferro-carbon-900">
                <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m15 18-6-6 6-6"/></svg>
                Cambiar correo
            </a>

            <div class="mt-8 flex h-14 w-14 items-center justify-center rounded-2xl bg-ferro-yellow-500 text-ferro-black">
                <svg class="h-7 w-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M21.75 9v.906a2.25 2.25 0 0 1-1.183 1.981l-7.5 4.09a2.25 2.25 0 0 1-2.134 0l-7.5-4.09A2.25 2.25 0 0 1 2.25 9.906V9m19.5 0A2.25 2.25 0 0 0 19.5 6.75h-15A2.25 2.25 0 0 0 2.25 9m19.5 0v8.25A2.25 2.25 0 0 1 19.5 19.5h-15a2.25 2.25 0 0 1-2.25-2.25V9"/></svg>
            </div>

            <header class="mt-6">
                <span class="text-[10px] font-bold uppercase tracking-[0.2em] text-ferro-yellow-700">Paso 2 de 3</span>
                <h1 id="code-title" class="mt-2 font-heading text-3xl font-bold tracking-tight text-ferro-carbon-900">Revisa tu correo</h1>
                <p class="mt-2 text-sm leading-relaxed text-ferro-steel-500">
                    Enviamos un código de seis dígitos a <strong class="text-ferro-carbon-900">{{ request('email', 'tu correo registrado') }}</strong>.
                </p>
            </header>

            <form action="{{ route('password.reset.form') }}" method="GET" class="mt-8 space-y-5">
                <input type="hidden" name="email" value="{{ request('email') }}">
                <div>
                    <label for="verification-code" class="text-sm font-semibold text-ferro-carbon-700">Código de verificación</label>
                    <input id="verification-code" name="code" type="text" inputmode="numeric" autocomplete="one-time-code" pattern="[0-9]{6}" maxlength="6" required placeholder="000000" class="mt-2 w-full rounded-xl border border-ferro-carbon-100 bg-ferro-steel-100/70 px-4 py-4 text-center font-heading text-2xl font-bold tracking-[0.45em] text-ferro-carbon-900 outline-none transition-all placeholder:text-ferro-steel-300 focus:border-ferro-yellow-500 focus:bg-ferro-white focus:ring-4 focus:ring-ferro-yellow-500/15">
                </div>
                <button type="submit" class="w-full rounded-xl bg-ferro-carbon-900 px-6 py-3.5 text-sm font-bold text-ferro-white transition-colors hover:bg-ferro-carbon-700">Verificar código</button>
            </form>

            <p class="mt-6 text-center text-xs text-ferro-steel-500">
                ¿No recibiste el código?
                <a href="{{ route('password.request') }}" class="font-bold text-ferro-yellow-700 hover:text-ferro-yellow-900">Solicitar uno nuevo</a>
            </p>
        </section>
    </main>
</body>
</html>

