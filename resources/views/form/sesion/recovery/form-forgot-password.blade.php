<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recuperar contraseña | FERRANOVA</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@400;500;600;700&family=Inter:wght@400;500;600&family=Plus+Jakarta+Sans:wght@400;500;600&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="min-h-screen bg-ferro-background font-body text-ferro-carbon-700 antialiased">
    <main class="grid min-h-screen lg:grid-cols-[0.9fr_1.1fr]">
        <section class="flex items-center justify-center px-5 py-10 sm:px-8 lg:px-12">
            <div class="w-full max-w-md">
                <a href="{{ route('login') }}" class="inline-flex items-center gap-2 text-sm font-semibold text-ferro-steel-500 transition-colors hover:text-ferro-carbon-900">
                    <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m15 18-6-6 6-6"/></svg>
                    Volver al inicio de sesión
                </a>

                <div class="mt-10 flex h-14 w-14 items-center justify-center rounded-2xl bg-ferro-yellow-500/15 text-ferro-yellow-900">
                    <svg class="h-7 w-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M16.5 10.5V6.75a4.5 4.5 0 0 0-9 0v3.75m-.75 10.5h10.5A2.25 2.25 0 0 0 19.5 18.75v-6A2.25 2.25 0 0 0 17.25 10.5H6.75A2.25 2.25 0 0 0 4.5 12.75v6A2.25 2.25 0 0 0 6.75 21Z"/></svg>
                </div>

                <header class="mt-6">
                    <span class="text-[10px] font-bold uppercase tracking-[0.2em] text-ferro-yellow-700">Recuperación segura</span>
                    <h1 class="mt-2 font-heading text-3xl font-bold tracking-tight text-ferro-carbon-900">Recupera tu contraseña</h1>
                    <p class="mt-2 text-sm leading-relaxed text-ferro-steel-500">Ingresa el correo asociado a tu cuenta. Te enviaremos un código de verificación.</p>
                </header>

                <form action="{{ route('password.code') }}" method="GET" class="mt-8 space-y-5">
                    <div>
                        <label for="recovery-email" class="text-sm font-semibold text-ferro-carbon-700">Correo electrónico</label>
                        <input id="recovery-email" name="email" type="email" autocomplete="email" required placeholder="correo@empresa.com" class="mt-2 w-full rounded-xl border border-ferro-carbon-100 bg-ferro-white px-4 py-3 text-sm text-ferro-carbon-900 outline-none transition-all placeholder:text-ferro-steel-500 focus:border-ferro-yellow-500 focus:ring-4 focus:ring-ferro-yellow-500/15">
                    </div>
                    <button type="submit" class="flex w-full items-center justify-center gap-2 rounded-xl bg-ferro-yellow-500 px-6 py-3.5 text-sm font-bold text-ferro-black transition-colors hover:bg-ferro-yellow-700">
                        Enviar código
                        <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m9 18 6-6-6-6"/></svg>
                    </button>
                </form>

                <p class="mt-6 text-center text-xs text-ferro-steel-500">Por seguridad, el código tendrá una vigencia limitada.</p>
            </div>
        </section>

        <aside class="relative hidden overflow-hidden bg-ferro-carbon-900 lg:block">
            <div class="absolute inset-0 bg-[radial-gradient(circle_at_top_right,rgba(250,204,21,0.22),transparent_45%)]"></div>
            <div class="relative flex h-full flex-col justify-between p-14">
                <p class="font-heading text-sm font-bold tracking-[0.2em] text-ferro-yellow-500">FERRANOVA</p>
                <div class="max-w-lg">
                    <p class="font-heading text-4xl font-bold leading-tight text-ferro-white">Volver a tu cuenta debe ser <span class="text-ferro-yellow-500">simple y seguro.</span></p>
                    <p class="mt-4 text-sm leading-7 text-ferro-steel-300">Protegemos tus pedidos, cotizaciones y productos guardados durante todo el proceso.</p>
                </div>
                <p class="text-xs text-ferro-steel-500">© {{ date('Y') }} FERRANOVA</p>
            </div>
        </aside>
    </main>
</body>
</html>

