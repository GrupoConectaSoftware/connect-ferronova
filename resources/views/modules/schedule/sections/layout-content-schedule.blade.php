<section class="relative py-14 sm:py-20 lg:py-24" aria-labelledby="schedule-form-title">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="mb-10 max-w-2xl">
            <span class="font-description text-[10px] font-bold uppercase tracking-[0.2em] text-ferro-yellow-700">
                Reserva en pocos pasos
            </span>
            <h2 id="schedule-form-title" class="mt-2 font-heading text-2xl font-bold text-ferro-carbon-900 sm:text-3xl">
                Configura tu <span class="text-ferro-yellow-700">servicio</span>
            </h2>
            <p class="mt-3 font-body text-sm leading-6 text-ferro-steel-500">
                Revisa el equipo seleccionado y completa los datos para recibir atención personalizada.
            </p>
        </div>

        <div class="grid items-start gap-8 lg:grid-cols-[minmax(0,0.92fr)_minmax(0,1.08fr)] lg:gap-12">
            {{-- Información del servicio --}}
            <article class="overflow-hidden rounded-3xl bg-ferro-white shadow-[0_18px_55px_rgba(15,23,42,0.08)]">
                <div class="relative aspect-[16/11] overflow-hidden bg-ferro-steel-100">
                    <img
                        :src="service.image"
                        :alt="service.name"
                        class="image-loading h-full w-full object-cover transition-transform duration-700 hover:scale-[1.03]"
                        loading="lazy"
                        decoding="async"
                    >
                    <div class="absolute inset-x-0 bottom-0 h-28 bg-linear-to-t from-ferro-black/65 to-transparent"></div>
                    <span class="absolute bottom-5 left-5 rounded-full bg-ferro-yellow-500 px-3 py-1.5 font-description text-[10px] font-bold uppercase tracking-wider text-ferro-carbon-900">
                        Disponible para alquiler
                    </span>
                </div>

                <div class="p-6 sm:p-8">
                    <div class="flex items-start justify-between gap-5">
                        <div>
                            <p class="font-description text-[10px] font-bold uppercase tracking-[0.18em] text-ferro-steel-500">
                                Equipo seleccionado
                            </p>
                            <h3 class="mt-2 font-heading text-xl font-bold leading-tight text-ferro-carbon-900 sm:text-2xl" x-text="service.name"></h3>
                        </div>
                        <span class="flex h-11 w-11 shrink-0 items-center justify-center rounded-full bg-ferro-yellow-100 text-ferro-yellow-900">
                            <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.61l-.318.158a6 6 0 01-3.86.61l-1.549-.31a2 2 0 00-1.806.503M8 4h8l-1 5H9L8 4zm1 5l-3 11m9-11l3 11M6 20h12"/>
                            </svg>
                        </span>
                    </div>

                    <p class="mt-4 font-body text-sm leading-7 text-ferro-steel-500" x-text="service.description"></p>

                    <div class="mt-7 grid grid-cols-3 gap-2 sm:gap-3">
                        <template x-for="option in durations" :key="option.value">
                            <button
                                type="button"
                                @click="duration = option.value"
                                :class="duration === option.value
                                    ? 'bg-ferro-carbon-900 text-ferro-white ring-ferro-carbon-900'
                                    : 'bg-ferro-steel-100 text-ferro-carbon-700 ring-transparent hover:bg-ferro-yellow-100'"
                                class="rounded-2xl px-2 py-3 text-center ring-1 transition-all duration-200"
                            >
                                <span class="block font-description text-[9px] font-bold uppercase tracking-wider" x-text="option.shortLabel"></span>
                                <span
                                    class="mt-1 block font-heading text-xs font-bold sm:text-sm"
                                    x-text="formatPrice(service.price * option.multiplier)"
                                ></span>
                            </button>
                        </template>
                    </div>

                    <div class="mt-7 flex items-center gap-3 border-t border-ferro-steel-100 pt-6">
                        <span class="flex h-9 w-9 items-center justify-center rounded-full bg-ferro-steel-100 text-ferro-carbon-700">
                            <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                        </span>
                        <p class="font-body text-xs leading-5 text-ferro-steel-500">
                            Equipo revisado y listo para operar. La disponibilidad final se confirma con un asesor.
                        </p>
                    </div>
                </div>
            </article>

            {{-- Formulario de reserva --}}
            <div class="rounded-3xl bg-ferro-white p-6 shadow-[0_18px_55px_rgba(15,23,42,0.08)] sm:p-8 lg:p-10">
                <div class="flex items-center gap-4">
                    <span class="flex h-12 w-12 shrink-0 items-center justify-center rounded-2xl bg-ferro-yellow-500 text-ferro-carbon-900">
                        <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M8 7V3m8 4V3M5 11h14M5 5h14a2 2 0 012 2v12a2 2 0 01-2 2H5a2 2 0 01-2-2V7a2 2 0 012-2z"/>
                        </svg>
                    </span>
                    <div>
                        <h3 class="font-heading text-xl font-bold text-ferro-carbon-900">Datos de la reserva</h3>
                        <p class="mt-1 font-body text-xs text-ferro-steel-500">Completa la información para continuar.</p>
                    </div>
                </div>

                <form class="mt-8 space-y-6" @submit.prevent="submitSchedule()" novalidate>
                    <button
                        type="button"
                        @click="openCalendar()"
                        class="group flex w-full items-center justify-between gap-4 rounded-2xl bg-ferro-carbon-900 p-4 text-left text-ferro-white transition-all duration-300 hover:bg-ferro-carbon-800 sm:p-5"
                    >
                        <span class="flex min-w-0 items-center gap-4">
                            <span class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-ferro-yellow-500 text-ferro-carbon-900">
                                <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M8 7V3m8 4V3M5 11h14M5 5h14a2 2 0 012 2v12a2 2 0 01-2 2H5a2 2 0 01-2-2V7a2 2 0 012-2z"/>
                                </svg>
                            </span>
                            <span class="min-w-0">
                                <span class="block font-description text-[10px] font-bold uppercase tracking-[0.16em] text-ferro-yellow-500">
                                    Calendario de disponibilidad
                                </span>
                                <span
                                    class="mt-1 block truncate font-body text-xs capitalize text-ferro-steel-300 sm:text-sm"
                                    x-text="formatSelectedDate(selectedDate)"
                                ></span>
                            </span>
                        </span>
                        <span class="shrink-0 font-heading text-xs font-bold text-ferro-white transition-colors group-hover:text-ferro-yellow-500">
                            Ver calendario
                        </span>
                    </button>

                    <div class="grid gap-5 sm:grid-cols-2">
                        <label class="block">
                            <span class="font-description text-xs font-semibold text-ferro-carbon-700">Fecha del servicio</span>
                            <span class="relative mt-2 block">
                                <input
                                    type="date"
                                    x-model="selectedDate"
                                    :min="minDate"
                                    required
                                    class="w-full rounded-xl border-0 bg-ferro-steel-100 px-4 py-3.5 font-body text-sm text-ferro-carbon-900 outline-none ring-1 ring-transparent transition focus:bg-ferro-white focus:ring-ferro-yellow-500"
                                >
                            </span>
                        </label>

                        <label class="block">
                            <span class="font-description text-xs font-semibold text-ferro-carbon-700">Hora disponible</span>
                            <select
                                x-model="selectedTime"
                                required
                                class="mt-2 w-full rounded-xl border-0 bg-ferro-steel-100 px-4 py-3.5 font-body text-sm text-ferro-carbon-900 outline-none ring-1 ring-transparent transition focus:bg-ferro-white focus:ring-ferro-yellow-500"
                            >
                                <option value="">Selecciona una hora</option>
                                <template x-for="hour in availableHours" :key="hour">
                                    <option :value="hour" x-text="hour"></option>
                                </template>
                            </select>
                        </label>
                    </div>

                    <fieldset>
                        <legend class="font-description text-xs font-semibold text-ferro-carbon-700">Duración del alquiler</legend>
                        <div class="mt-2 grid grid-cols-3 gap-2 sm:gap-3">
                            <template x-for="option in durations" :key="option.value">
                                <label
                                    :class="duration === option.value
                                        ? 'bg-ferro-yellow-500 text-ferro-carbon-900 ring-ferro-yellow-500'
                                        : 'bg-ferro-steel-100 text-ferro-steel-500 ring-transparent hover:bg-ferro-yellow-100'"
                                    class="cursor-pointer rounded-xl px-2 py-3 text-center ring-1 transition-all"
                                >
                                    <input type="radio" class="sr-only" name="duration" :value="option.value" x-model="duration">
                                    <span class="font-description text-[10px] font-bold sm:text-xs" x-text="option.label"></span>
                                </label>
                            </template>
                        </div>
                    </fieldset>

                    <div class="grid gap-5 sm:grid-cols-2">
                        <label class="block">
                            <span class="font-description text-xs font-semibold text-ferro-carbon-700">Nombre completo</span>
                            <input
                                type="text"
                                x-model="contactName"
                                autocomplete="name"
                                placeholder="Tu nombre"
                                required
                                class="mt-2 w-full rounded-xl border-0 bg-ferro-steel-100 px-4 py-3.5 font-body text-sm text-ferro-carbon-900 outline-none ring-1 ring-transparent transition placeholder:text-ferro-steel-500 focus:bg-ferro-white focus:ring-ferro-yellow-500"
                            >
                        </label>

                        <label class="block">
                            <span class="font-description text-xs font-semibold text-ferro-carbon-700">Teléfono</span>
                            <input
                                type="tel"
                                x-model="contactPhone"
                                autocomplete="tel"
                                inputmode="tel"
                                placeholder="300 000 0000"
                                required
                                class="mt-2 w-full rounded-xl border-0 bg-ferro-steel-100 px-4 py-3.5 font-body text-sm text-ferro-carbon-900 outline-none ring-1 ring-transparent transition placeholder:text-ferro-steel-500 focus:bg-ferro-white focus:ring-ferro-yellow-500"
                            >
                        </label>
                    </div>

                    <p
                        x-cloak
                        x-show="attempted && !canSubmit"
                        x-transition
                        class="rounded-xl bg-ferro-yellow-100 px-4 py-3 font-body text-xs font-medium text-ferro-yellow-900"
                        role="alert"
                    >
                        Completa la fecha, hora y datos de contacto para enviar la solicitud.
                    </p>

                    <div class="rounded-2xl bg-ferro-carbon-900 p-5 text-ferro-white sm:flex sm:items-center sm:justify-between">
                        <div>
                            <p class="font-description text-[10px] font-bold uppercase tracking-[0.16em] text-ferro-steel-300">
                                Total estimado
                            </p>
                            <p class="mt-1 font-heading text-2xl font-bold" x-text="formatPrice(totalPrice)"></p>
                        </div>
                        <p class="mt-2 max-w-48 font-body text-[10px] leading-4 text-ferro-steel-300 sm:mt-0 sm:text-right">
                            Valor sujeto a disponibilidad, transporte y condiciones del servicio.
                        </p>
                    </div>

                    <button
                        type="submit"
                        class="inline-flex min-h-13 w-full items-center justify-center gap-3 rounded-xl bg-ferro-whatsapp px-6 py-4 font-heading text-sm font-bold text-ferro-white shadow-[0_10px_25px_rgba(37,211,102,0.22)] transition-all duration-300 hover:bg-ferro-success focus:outline-none focus-visible:ring-2 focus-visible:ring-ferro-whatsapp focus-visible:ring-offset-2 active:scale-[0.98]"
                    >
                        <svg class="h-5 w-5 shrink-0" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.075-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.095 3.2 5.076 4.487.709.306 1.262.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.981.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.002-5.45 4.437-9.884 9.892-9.884a9.81 9.81 0 017.021 2.91 9.83 9.83 0 012.9 7.026c-.003 5.45-4.437 9.884-9.929 9.884m8.413-18.297A11.82 11.82 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.14 1.588 5.945L.057 24l6.305-1.654a11.9 11.9 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.82 11.82 0 00-3.48-8.413z"/>
                        </svg>
                        Cotizar y reservar por WhatsApp
                    </button>

                    <a
                        href="{{ route('contact') }}"
                        class="inline-flex min-h-12 w-full items-center justify-center gap-2 rounded-xl bg-ferro-steel-100 px-6 py-3.5 font-heading text-sm font-bold text-ferro-carbon-900 transition-colors hover:bg-ferro-steel-300 focus:outline-none focus-visible:ring-2 focus-visible:ring-ferro-yellow-500 focus-visible:ring-offset-2"
                    >
                        <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M8 10h8M8 14h5m8-2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                        Solicitar cotización detallada
                    </a>
                </form>
            </div>
        </div>
    </div>

    {{-- Modal de calendario y disponibilidad --}}
    <div
        x-cloak
        x-show="calendarOpen"
        @keydown.escape.window="closeCalendar()"
        class="fixed inset-0 z-[100] flex items-end justify-center p-0 sm:items-center sm:p-6"
        role="dialog"
        aria-modal="true"
        aria-labelledby="availability-calendar-title"
    >
        <div
            x-show="calendarOpen"
            x-transition:enter="transition-opacity duration-300"
            x-transition:enter-start="opacity-0"
            x-transition:enter-end="opacity-100"
            x-transition:leave="transition-opacity duration-200"
            x-transition:leave-start="opacity-100"
            x-transition:leave-end="opacity-0"
            class="absolute inset-0 bg-ferro-black/70 backdrop-blur-sm"
            @click="closeCalendar()"
            aria-hidden="true"
        ></div>

        <div
            x-show="calendarOpen"
            x-transition:enter="transition duration-300 ease-out"
            x-transition:enter-start="translate-y-8 opacity-0 scale-95"
            x-transition:enter-end="translate-y-0 opacity-100 scale-100"
            x-transition:leave="transition duration-200 ease-in"
            x-transition:leave-start="translate-y-0 opacity-100 scale-100"
            x-transition:leave-end="translate-y-8 opacity-0 scale-95"
            @click.stop
            class="relative max-h-[92vh] w-full overflow-y-auto rounded-t-3xl bg-ferro-white p-5 shadow-2xl sm:max-w-2xl sm:rounded-3xl sm:p-8"
        >
            <div class="flex items-start justify-between gap-5">
                <div>
                    <span class="font-description text-[10px] font-bold uppercase tracking-[0.2em] text-ferro-yellow-700">
                        Agenda FERRANOVA
                    </span>
                    <h3 id="availability-calendar-title" class="mt-1 font-heading text-xl font-bold text-ferro-carbon-900 sm:text-2xl">
                        Selecciona una fecha
                    </h3>
                    <p class="mt-2 font-body text-xs leading-5 text-ferro-steel-500">
                        Consulta la disponibilidad estimada del equipo antes de enviar tu solicitud.
                    </p>
                </div>
                <button
                    type="button"
                    @click="closeCalendar()"
                    class="flex h-10 w-10 shrink-0 items-center justify-center rounded-full bg-ferro-steel-100 text-ferro-carbon-900 transition-colors hover:bg-ferro-yellow-500"
                    aria-label="Cerrar calendario"
                >
                    <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                    </svg>
                </button>
            </div>

            <div class="mt-7 rounded-2xl bg-ferro-steel-100 p-3 sm:p-5">
                <div class="flex items-center justify-between">
                    <button
                        type="button"
                        @click="changeMonth(-1)"
                        :disabled="!canGoToPreviousMonth"
                        class="flex h-10 w-10 items-center justify-center rounded-full bg-ferro-white text-ferro-carbon-900 transition-colors hover:bg-ferro-yellow-500 disabled:cursor-not-allowed disabled:opacity-30"
                        aria-label="Mes anterior"
                    >
                        <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
                        </svg>
                    </button>
                    <h4 class="font-heading text-base font-bold capitalize text-ferro-carbon-900" x-text="calendarTitle"></h4>
                    <button
                        type="button"
                        @click="changeMonth(1)"
                        class="flex h-10 w-10 items-center justify-center rounded-full bg-ferro-white text-ferro-carbon-900 transition-colors hover:bg-ferro-yellow-500"
                        aria-label="Mes siguiente"
                    >
                        <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                        </svg>
                    </button>
                </div>

                <div class="mt-5 grid grid-cols-7 gap-1 text-center sm:gap-2">
                    <template x-for="weekday in ['Lun', 'Mar', 'Mié', 'Jue', 'Vie', 'Sáb', 'Dom']" :key="weekday">
                        <span class="py-2 font-description text-[9px] font-bold uppercase tracking-wide text-ferro-steel-500" x-text="weekday"></span>
                    </template>

                    <template x-for="day in calendarDays" :key="day.key">
                        <div class="aspect-square">
                            <template x-if="day.empty">
                                <span class="block h-full w-full"></span>
                            </template>
                            <template x-if="!day.empty">
                                <button
                                    type="button"
                                    @click="selectCalendarDate(day)"
                                    :disabled="day.disabled"
                                    :aria-label="`${day.day} de ${calendarTitle}: ${day.status === 'booked' ? 'agendado' : day.status === 'limited' ? 'poca disponibilidad' : 'disponible'}`"
                                    :class="day.selected
                                        ? 'bg-ferro-carbon-900 text-ferro-white ring-2 ring-ferro-yellow-500 ring-offset-2'
                                        : day.status === 'booked'
                                            ? 'bg-ferro-steel-300/60 text-ferro-steel-500 line-through'
                                            : day.status === 'limited'
                                                ? 'bg-ferro-yellow-100 text-ferro-yellow-900 hover:bg-ferro-yellow-500'
                                                : 'bg-ferro-white text-ferro-carbon-900 hover:bg-ferro-carbon-900 hover:text-ferro-white'"
                                    class="relative flex h-full w-full items-center justify-center rounded-xl font-heading text-xs font-bold transition-all duration-200 sm:text-sm"
                                >
                                    <span x-text="day.day"></span>
                                    <span
                                        x-show="!day.selected"
                                        :class="day.status === 'booked'
                                            ? 'bg-ferro-steel-500'
                                            : day.status === 'limited'
                                                ? 'bg-ferro-yellow-700'
                                                : 'bg-ferro-success'"
                                        class="absolute bottom-1.5 h-1 w-1 rounded-full sm:h-1.5 sm:w-1.5"
                                    ></span>
                                </button>
                            </template>
                        </div>
                    </template>
                </div>
            </div>

            <div class="mt-5 flex flex-wrap gap-x-5 gap-y-2">
                <span class="inline-flex items-center gap-2 font-body text-[10px] text-ferro-steel-500">
                    <span class="h-2 w-2 rounded-full bg-ferro-success"></span>
                    Disponible
                </span>
                <span class="inline-flex items-center gap-2 font-body text-[10px] text-ferro-steel-500">
                    <span class="h-2 w-2 rounded-full bg-ferro-yellow-700"></span>
                    Poca disponibilidad
                </span>
                <span class="inline-flex items-center gap-2 font-body text-[10px] text-ferro-steel-500">
                    <span class="h-2 w-2 rounded-full bg-ferro-steel-500"></span>
                    Agendado
                </span>
            </div>

            <div
                x-show="selectedDate"
                class="mt-5 flex items-center justify-between gap-4 rounded-xl bg-ferro-yellow-100 px-4 py-3"
            >
                <div>
                    <span class="block font-description text-[9px] font-bold uppercase tracking-wider text-ferro-yellow-900">Fecha seleccionada</span>
                    <span class="mt-0.5 block font-body text-xs font-semibold capitalize text-ferro-carbon-900" x-text="formatSelectedDate(selectedDate)"></span>
                </div>
                <button type="button" @click="closeCalendar()" class="shrink-0 font-heading text-xs font-bold text-ferro-carbon-900">
                    Confirmar
                </button>
            </div>
        </div>
    </div>
</section>
