<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $documentTitle }} | FERRANOVA</title>
    <meta name="description" content="{{ $documentDescription }}">
    <link rel="canonical" href="{{ url()->current() }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@400;500;600;700&family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-ferro-background font-body text-ferro-carbon-700 antialiased">
    <header class="border-b border-ferro-carbon-100 bg-ferro-white">
        <div class="container mx-auto flex max-w-7xl items-center justify-between px-4 py-5 sm:px-6 lg:px-8">
            <a href="{{ route('home') }}" class="font-heading text-sm font-bold tracking-[0.18em] text-ferro-carbon-900">FERRANOVA</a>
            <nav class="flex items-center gap-5 text-xs font-semibold text-ferro-steel-500" aria-label="Navegación legal">
                <a href="{{ route('home') }}" class="transition-colors hover:text-ferro-yellow-700">Inicio</a>
                <a href="{{ route('contact') }}" class="transition-colors hover:text-ferro-yellow-700">Contacto</a>
            </nav>
        </div>
    </header>

    <main>
        <section class="bg-ferro-carbon-900">
            <div class="container mx-auto max-w-7xl px-4 py-14 sm:px-6 sm:py-18 lg:px-8">
                <button type="button" onclick="history.length > 1 ? history.back() : window.location.assign('{{ route('home') }}')" class="inline-flex items-center gap-2 text-sm font-semibold text-ferro-steel-300 transition-colors hover:text-ferro-white">
                    <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m15 18-6-6 6-6"/></svg>
                    Volver atrás
                </button>
                <span class="mt-10 block text-xs font-bold uppercase tracking-[0.2em] text-ferro-yellow-500">Información para clientes</span>
                <h1 class="mt-4 max-w-4xl font-heading text-4xl font-bold tracking-tight text-ferro-white sm:text-5xl">{{ $documentTitle }}</h1>
                <p class="mt-5 max-w-3xl text-sm leading-7 text-ferro-steel-300">{{ $documentDescription }}</p>
            </div>
        </section>

        <div class="border-b border-ferro-carbon-100 bg-ferro-white">
            <nav class="container mx-auto flex max-w-7xl gap-2 overflow-x-auto px-4 py-4 sm:px-6 lg:px-8" aria-label="Documentos legales">
                <a href="{{ route('legal.terms') }}" class="shrink-0 rounded-full px-4 py-2 text-xs font-semibold transition-colors {{ request()->routeIs('legal.terms') ? 'bg-ferro-yellow-500 text-ferro-black' : 'bg-ferro-steel-100 text-ferro-steel-500 hover:text-ferro-carbon-900' }}">Términos</a>
                <a href="{{ route('legal.privacy') }}" class="shrink-0 rounded-full px-4 py-2 text-xs font-semibold transition-colors {{ request()->routeIs('legal.privacy') ? 'bg-ferro-yellow-500 text-ferro-black' : 'bg-ferro-steel-100 text-ferro-steel-500 hover:text-ferro-carbon-900' }}">Privacidad</a>
                <a href="{{ route('data.treatment') }}" class="shrink-0 rounded-full px-4 py-2 text-xs font-semibold transition-colors {{ request()->routeIs('data.treatment') ? 'bg-ferro-yellow-500 text-ferro-black' : 'bg-ferro-steel-100 text-ferro-steel-500 hover:text-ferro-carbon-900' }}">Tratamiento de datos</a>
                <a href="{{ route('legal.warranty') }}" class="shrink-0 rounded-full px-4 py-2 text-xs font-semibold transition-colors {{ request()->routeIs('legal.warranty') ? 'bg-ferro-yellow-500 text-ferro-black' : 'bg-ferro-steel-100 text-ferro-steel-500 hover:text-ferro-carbon-900' }}">Garantías</a>
            </nav>
        </div>

        <div class="container mx-auto grid max-w-7xl gap-10 px-4 py-12 sm:px-6 lg:grid-cols-[250px_1fr] lg:px-8 lg:py-16">
            <aside class="h-fit lg:sticky lg:top-6">
                <p class="text-[10px] font-bold uppercase tracking-[0.18em] text-ferro-steel-500">En esta página</p>
                <nav class="mt-4 flex flex-col gap-1.5" aria-label="Contenido del documento">
                    @foreach ($legalSections as $section)
                        <a href="#{{ $section['id'] }}" class="rounded-lg px-3 py-2 text-sm text-ferro-steel-500 transition-colors hover:bg-ferro-yellow-500/10 hover:text-ferro-carbon-900">{{ $loop->iteration }}. {{ $section['title'] }}</a>
                    @endforeach
                </nav>
            </aside>

            <article class="min-w-0">
                <div class="mb-10 rounded-2xl bg-ferro-yellow-500/10 p-5 text-sm leading-7 text-ferro-carbon-700">{{ $documentNotice }}</div>
                <div class="space-y-12">
                    @foreach ($legalSections as $section)
                        <section id="{{ $section['id'] }}" class="scroll-mt-8">
                            <h2 class="font-heading text-2xl font-bold tracking-tight text-ferro-carbon-900">{{ $loop->iteration }}. {{ $section['title'] }}</h2>
                            @foreach ($section['paragraphs'] as $paragraph)
                                <p class="mt-4 text-sm leading-7 text-ferro-steel-500">{{ $paragraph }}</p>
                            @endforeach
                            @if (!empty($section['items']))
                                <ul class="mt-4 list-disc space-y-2 pl-5 text-sm leading-7 text-ferro-steel-500">
                                    @foreach ($section['items'] as $item)
                                        <li>{{ $item }}</li>
                                    @endforeach
                                </ul>
                            @endif
                        </section>
                    @endforeach
                </div>

                <div class="mt-14 flex flex-col gap-4 border-t border-ferro-carbon-100 pt-8 sm:flex-row sm:items-center sm:justify-between">
                    <p class="text-xs text-ferro-steel-500">Última actualización: {{ now()->format('d/m/Y') }}</p>
                    <a href="{{ route('contact') }}" class="inline-flex w-fit rounded-xl bg-ferro-carbon-900 px-5 py-3 text-sm font-bold text-ferro-white transition-colors hover:bg-ferro-carbon-700">¿Tienes dudas? Contáctanos</a>
                </div>
            </article>
        </div>
    </main>

    @include('layouts.footer.layout-footer')
</body>
</html>
