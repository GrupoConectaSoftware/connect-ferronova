<div
    x-data="{ visible: false }"
    x-cloak
    x-init="$nextTick(() => Array.from($el.querySelectorAll('[id$=-app] > * > *')).forEach((item, index) => { item.style.transitionDelay = (index * 100) + 'ms'; item.classList.add('opacity-0', 'translate-y-10', 'scale-95', 'transition-all', 'duration-700', 'ease-out') }))"
    x-intersect="visible = true; $nextTick(() => Array.from($el.querySelectorAll('[id$=-app] > * > *')).forEach((item) => { item.classList.remove('opacity-0', 'translate-y-10', 'scale-95'); item.classList.add('opacity-100', 'translate-y-0', 'scale-100') }))"
    :class="visible ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-10'"
    class="transition-all duration-700 ease-out"
>
{{-- ==========================================================
    SECCIÓN 2: CONTACTO (INFORMACIÓN + FORMULARIO)
    ==========================================================
    VERSIÓN FINAL: EQUILIBRADA, SIN SOMBRAS (EXCEPTO WPP)
    ========================================================== --}}

<section class="w-full py-16 lg:py-24 bg-ferro-background" aria-label="Información y formulario de contacto">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 max-w-7xl">
        
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12 items-stretch">

            {{-- ==========================================================
                COLUMNA IZQUIERDA (5 COLUMNAS): INFORMACIÓN + HORARIOS
                ========================================================== --}}
            <div class="lg:col-span-5 flex flex-col gap-4">

                {{-- Tarjeta 1: Dirección (SIN BORDE, SIN SOMBRA) --}}
                <div class="flex-1 flex items-start gap-4 p-5 rounded-2xl min-h-30 bg-ferro-white">
                    <div class="w-12 h-12 rounded-xl bg-ferro-steel-100/80 text-ferro-carbon-900 flex items-center justify-center shrink-0">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                            <path d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                        </svg>
                    </div>
                    <div>
                        <h4 class="font-heading text-base font-bold text-ferro-carbon-900 mb-0.5 tracking-tight">Visítanos</h4>
                        <p class="text-sm text-ferro-steel-500 font-description leading-relaxed">
                            Cra 50 #12-34, Bogotá, Colombia<br>
                            <span class="text-xs text-ferro-steel-400">Centro logístico</span>
                        </p>
                    </div>
                </div>

                {{-- Tarjeta 2: Teléfono (SIN BORDE, SIN SOMBRA) --}}
                <div class="flex-1 flex items-start gap-4 p-5 rounded-2xl min-h-30 bg-ferro-white">
                    <div class="w-12 h-12 rounded-xl bg-ferro-steel-100/80 text-ferro-carbon-900 flex items-center justify-center shrink-0">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.41c-.31.49-.873.56-1.302.273a18.6 18.6 0 01-5.245-5.245c-.286-.428-.217-.992.273-1.302l1.41-.97c.363-.27.528-.733.417-1.173l-1.106-4.423a1.125 1.125 0 00-1.091-.852H5.25A2.25 2.25 0 003 6.75z" />
                        </svg>
                    </div>
                    <div>
                        <h4 class="font-heading text-base font-bold text-ferro-carbon-900 mb-0.5 tracking-tight">Llámanos</h4>
                        <p class="text-sm text-ferro-steel-500 font-description leading-relaxed">
                            <strong class="text-ferro-carbon-900">(601) 555 0123</strong><br>
                            <span class="text-xs text-ferro-steel-400">+57 310 000 0000</span>
                        </p>
                    </div>
                </div>

                {{-- Tarjeta 3: Correo (SIN BORDE, SIN SOMBRA) --}}
                <div class="flex-1 flex items-start gap-4 p-5 rounded-2xl min-h-30 bg-ferro-white">
                    <div class="w-12 h-12 rounded-xl bg-ferro-steel-100/80 text-ferro-carbon-900 flex items-center justify-center shrink-0">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" />
                        </svg>
                    </div>
                    <div>
                        <h4 class="font-heading text-base font-bold text-ferro-carbon-900 mb-0.5 tracking-tight">Escríbenos</h4>
                        <p class="text-sm text-ferro-steel-500 font-description leading-relaxed">
                            ventas@ferronova.com<br>
                            <span class="text-xs text-ferro-steel-400">Respuesta en 24h hábiles</span>
                        </p>
                    </div>
                </div>

                {{-- Tarjeta 4: Horarios (SIN BORDE, SIN SOMBRA) --}}
                <div class="flex-1 flex items-start gap-4 p-5 rounded-2xl min-h-30 bg-ferro-white">
                    <div class="w-12 h-12 rounded-xl bg-ferro-steel-100/80 text-ferro-carbon-900 flex items-center justify-center shrink-0">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M12 6v6l4 2" />
                            <circle cx="12" cy="12" r="10" />
                        </svg>
                    </div>
                    <div>
                        <h4 class="font-heading text-base font-bold text-ferro-carbon-900 mb-0.5 tracking-tight">Horarios</h4>
                        <p class="text-sm text-ferro-steel-500 font-description leading-relaxed">
                            <strong class="text-ferro-carbon-900">Lun - Sáb</strong> 7:00am – 6:00pm<br>
                            <span class="text-xs text-ferro-steel-400">Atención presencial y virtual</span>
                        </p>
                    </div>
                </div>

                {{-- Tarjeta 5: WhatsApp (CON SOMBRA Y FONDO VERDE) --}}
                <a href="https://wa.me/573184111790" target="_blank" 
                   class="flex-1 flex items-center gap-4 bg-ferro-whatsapp p-5 rounded-2xl shadow-md shadow-ferro-whatsapp/15 text-white transition-transform hover:scale-[1.02] hover:shadow-lg active:scale-95 min-h-30">
                    <div class="w-12 h-12 rounded-full bg-white/10 flex items-center justify-center backdrop-blur-sm shrink-0">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/>
                        </svg>
                    </div>
                    <div>
                        <h4 class="font-heading text-base font-bold mb-0.5">Respuesta inmediata</h4>
                        <p class="text-sm text-white/80 font-description leading-relaxed">
                            Cotiza en minutos por WhatsApp.
                        </p>
                    </div>
                </a>

            </div>

            {{-- ==========================================================
                COLUMNA DERECHA (7 COLUMNAS): FORMULARIO
                ========================================================== --}}
            <div class="lg:col-span-7">
                <div class="bg-ferro-white rounded-2xl p-6 lg:p-8 shadow-[0_2px_16px_rgba(0,0,0,0.04)] border border-ferro-carbon-100/30 hover:shadow-[0_4px_24px_rgba(0,0,0,0.06)] transition-all duration-300 h-full">
                    
                    {{-- Encabezado del formulario --}}
                    <div class="mb-6">
                        <h3 class="font-heading text-2xl font-bold text-ferro-carbon-900 tracking-tight">Envíanos un mensaje</h3>
                        <p class="text-ferro-steel-500 text-sm font-description mt-1">
                            Completa el formulario y nuestro equipo te contactará a la brevedad.
                        </p>
                    </div>

                    {{-- INCLUSIÓN DEL FORMULARIO COMPONENTE --}}
                    <div class="w-full">
                        @include('pages.form.components.contact.component-contact-form')
                    </div>

                    {{-- Nota informativa sutil --}}
                    <div class="mt-4 flex items-center gap-2 text-ferro-steel-400 text-xs font-description">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285z" /></svg>
                        <span>Respondemos en menos de 24 horas hábiles</span>
                    </div>

                </div>
            </div>

        </div>
    </div>
</section>
</div>
