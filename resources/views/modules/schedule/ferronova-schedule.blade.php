<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Agendamiento de servicios | FERRANOVA</title>
    <meta
        name="description"
        content="Agenda el alquiler de maquinaria industrial FERRANOVA y solicita tu reserva directamente por WhatsApp."
    >
    <link rel="canonical" href="{{ url()->current() }}">
    <meta property="og:title" content="Agendamiento de servicios | FERRANOVA">
    <meta property="og:description" content="Selecciona tu equipo, fecha, hora y duración para cotizar tu alquiler.">
    <meta property="og:image" content="{{ asset('asset/sections/index-homepages/agenda/imagen-agenda.webp') }}">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Plus+Jakarta+Sans:wght@400;500;600;700&family=Space+Grotesk:wght@400;500;600;700&display=swap"
        rel="stylesheet"
    >
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <script>
        window.scheduleApp = () => ({
            service: {
                id: 1,
                name: 'Mezcladora de concreto 350L',
                description: 'Equipo de alto rendimiento con motor a gasolina, ideal para mezclas uniformes y trabajo continuo en obra.',
                price: 15000,
                image: @js(asset('asset/sections/index-homepages/agenda/imagen-agenda.webp')),
                prices: {
                    hour: 15000,
                    day: 95000,
                    week: 450000,
                },
            },
            selectedDate: '',
            selectedTime: '',
            duration: 'day',
            contactName: '',
            contactPhone: '',
            attempted: false,
            minDate: '',
            calendarOpen: false,
            calendarCursor: new Date(),
            availableHours: [
                '07:00', '08:00', '09:00', '10:00', '11:00', '12:00',
                '13:00', '14:00', '15:00', '16:00', '17:00',
            ],
            durations: [
                { value: 'hour', label: 'Por hora', shortLabel: 'Hora', multiplier: 1 },
                { value: 'day', label: 'Por día', shortLabel: 'Día', multiplier: 8 },
                { value: 'week', label: 'Por semana', shortLabel: 'Semana', multiplier: 40 },
            ],
            init() {
                const now = new Date();
                const localDate = new Date(now.getTime() - (now.getTimezoneOffset() * 60000));
                this.minDate = localDate.toISOString().split('T')[0];
                this.calendarCursor = new Date(now.getFullYear(), now.getMonth(), 1);

                try {
                    const stored = JSON.parse(localStorage.getItem('ferro_view_product') || 'null');

                    if (stored?.type !== 'rental') return;

                    const priceMap = Object.fromEntries(
                        (stored.prices || []).map((item) => [
                            this.durationKey(item.label),
                            Number(item.value),
                        ]),
                    );

                    this.service = {
                        id: stored.id,
                        name: stored.name,
                        description: stored.description,
                        image: stored.image,
                        price: priceMap.hour || Number(stored.price) || 15000,
                        prices: {
                            hour: priceMap.hour || Number(stored.price) || 15000,
                            day: priceMap.day || (Number(stored.price) * 8),
                            week: priceMap.week || (Number(stored.price) * 40),
                        },
                    };
                } catch (error) {
                    console.warn('No fue posible recuperar el equipo seleccionado.', error);
                }
            },
            durationKey(label) {
                const normalized = String(label || '')
                    .normalize('NFD')
                    .replace(/[\u0300-\u036f]/g, '')
                    .toLowerCase();

                if (normalized.includes('semana')) return 'week';
                if (normalized.includes('dia')) return 'day';
                return 'hour';
            },
            get calendarTitle() {
                return new Intl.DateTimeFormat('es-CO', {
                    month: 'long',
                    year: 'numeric',
                }).format(this.calendarCursor);
            },
            get calendarDays() {
                const year = this.calendarCursor.getFullYear();
                const month = this.calendarCursor.getMonth();
                const firstDay = new Date(year, month, 1);
                const lastDay = new Date(year, month + 1, 0);
                const mondayOffset = (firstDay.getDay() + 6) % 7;
                const cells = Array.from({ length: mondayOffset }, (_, index) => ({
                    key: `empty-${index}`,
                    empty: true,
                }));

                for (let day = 1; day <= lastDay.getDate(); day += 1) {
                    const date = new Date(year, month, day);
                    const localDate = new Date(date.getTime() - (date.getTimezoneOffset() * 60000));
                    const value = localDate.toISOString().split('T')[0];
                    const isPast = value < this.minDate;
                    const isSunday = date.getDay() === 0;
                    let status = 'available';

                    if (isPast || isSunday || day % 7 === 0) {
                        status = 'booked';
                    } else if (day % 5 === 0 || day % 6 === 0) {
                        status = 'limited';
                    }

                    cells.push({
                        key: value,
                        empty: false,
                        day,
                        value,
                        status,
                        disabled: isPast || status === 'booked',
                        selected: this.selectedDate === value,
                    });
                }

                return cells;
            },
            get canGoToPreviousMonth() {
                const today = new Date();
                const currentMonth = new Date(today.getFullYear(), today.getMonth(), 1);
                return this.calendarCursor > currentMonth;
            },
            openCalendar() {
                if (this.selectedDate) {
                    const [year, month] = this.selectedDate.split('-').map(Number);
                    this.calendarCursor = new Date(year, month - 1, 1);
                }
                this.calendarOpen = true;
                document.body.classList.add('overflow-hidden');
            },
            closeCalendar() {
                this.calendarOpen = false;
                document.body.classList.remove('overflow-hidden');
            },
            changeMonth(offset) {
                const next = new Date(
                    this.calendarCursor.getFullYear(),
                    this.calendarCursor.getMonth() + offset,
                    1,
                );
                const today = new Date();
                const currentMonth = new Date(today.getFullYear(), today.getMonth(), 1);

                if (next < currentMonth) return;
                this.calendarCursor = next;
            },
            selectCalendarDate(day) {
                if (day.disabled || day.empty) return;
                this.selectedDate = day.value;
                this.closeCalendar();
            },
            formatSelectedDate(value) {
                if (!value) return 'Aún no has seleccionado una fecha';
                const [year, month, day] = value.split('-').map(Number);
                return new Intl.DateTimeFormat('es-CO', {
                    weekday: 'long',
                    day: 'numeric',
                    month: 'long',
                    year: 'numeric',
                }).format(new Date(year, month - 1, day));
            },
            get durationLabel() {
                return this.durations.find((item) => item.value === this.duration)?.label || 'Por día';
            },
            get totalPrice() {
                const selected = this.durations.find((item) => item.value === this.duration);
                return Number(this.service.price) * (selected?.multiplier || 1);
            },
            get canSubmit() {
                return Boolean(
                    this.selectedDate &&
                    this.selectedTime &&
                    this.contactName.trim() &&
                    this.contactPhone.trim(),
                );
            },
            get whatsappUrl() {
                const message = [
                    'Hola FERRANOVA, quiero agendar el siguiente servicio:',
                    `Servicio: ${this.service.name}`,
                    `Fecha: ${this.selectedDate}`,
                    `Hora: ${this.selectedTime}`,
                    `Duración: ${this.durationLabel}`,
                    `Contacto: ${this.contactName.trim()} - ${this.contactPhone.trim()}`,
                ].join('\n');

                return `https://wa.me/573184111790?text=${encodeURIComponent(message)}`;
            },
            submitSchedule() {
                this.attempted = true;
                if (!this.canSubmit) return;

                window.open(this.whatsappUrl, '_blank', 'noopener,noreferrer');
            },
            formatPrice(value) {
                return new Intl.NumberFormat('es-CO', {
                    style: 'currency',
                    currency: 'COP',
                    maximumFractionDigits: 0,
                }).format(value);
            },
        });
    </script>
</head>

<body class="bg-ferro-background font-body text-ferro-carbon-700 antialiased">
    <div class="relative z-50 w-full">
        @include('layouts.navegations.layout-nav')
    </div>

    <main
        id="main-content"
        x-data="scheduleApp()"
        x-init="init()"
        role="main"
        aria-label="Agendamiento de servicios FERRANOVA"
    >
        @include('modules.schedule.sections.layout-hero-schedule')
        @include('modules.schedule.sections.layout-content-schedule')
    </main>

    @include('layouts.footer.layout-footer')
</body>
</html>
