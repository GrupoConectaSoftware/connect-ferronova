<section
    class="relative isolate min-h-[26rem] overflow-hidden bg-ferro-carbon-900 sm:min-h-[30rem]"
    aria-labelledby="schedule-title"
>
    <img
        src="{{ asset('asset/sections/index-homepages/agenda/imagen-agenda.webp') }}"
        alt="Maquinaria industrial disponible para alquiler en FERRANOVA"
        class="image-loading absolute inset-0 h-full w-full object-cover"
        loading="lazy"
        decoding="async"
    >
    <div class="absolute inset-0 bg-linear-to-r from-ferro-black via-ferro-black/80 to-ferro-black/35"></div>
    <div class="absolute inset-0 bg-linear-to-t from-ferro-black/70 via-transparent to-transparent"></div>

    <div class="relative mx-auto flex min-h-[26rem] max-w-7xl items-end px-4 pb-16 pt-20 sm:min-h-[30rem] sm:px-6 sm:pb-20 lg:px-8">
        <div
            x-cloak
            x-init="$nextTick(() => $el.classList.remove('opacity-0', 'translate-y-6'))"
            class="max-w-3xl translate-y-6 opacity-0 transition-all duration-700 ease-out"
        >
            <a
                href="{{ route('home') }}"
                class="mb-7 inline-flex items-center gap-2 font-description text-xs font-semibold text-ferro-white/80 transition-colors hover:text-ferro-yellow-500"
            >
                <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
                </svg>
                Volver al inicio
            </a>

            <span class="block w-fit rounded-full bg-ferro-yellow-500 px-4 py-2 font-description text-[10px] font-bold uppercase tracking-[0.2em] text-ferro-carbon-900 sm:text-xs">
                Agenda tu alquiler
            </span>

            <h1 id="schedule-title" class="mt-5 font-heading text-4xl font-bold leading-[1.05] text-ferro-white sm:text-5xl lg:text-6xl">
                Reserva de <span class="text-ferro-yellow-500">maquinaria</span>
            </h1>

            <p class="mt-5 max-w-2xl font-body text-sm leading-7 text-ferro-steel-300 sm:text-base">
                Selecciona el equipo, el día y la hora. Cotiza y reserva al instante.
            </p>
        </div>
    </div>
</section>
