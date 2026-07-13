{{-- HERO PREMIUM --}}
<section class="relative z-10 w-full h-140 lg:h-162.5 overflow-hidden bg-ferro-carbon-900" aria-labelledby="hero-title">
    <figure class="absolute inset-0 w-full h-full">
        <img src="{{ asset('asset/sections/index-unidad/unidad/presentacion-unidad.jpg') }}"
             alt="Fondo de tornillería industrial"
             class="w-full h-full object-cover opacity-60" loading="lazy" decoding="async">
        
        {{-- Degradado 100% Negro (Sin azul) --}}
        <div class="absolute inset-0 bg-linear-to-r from-ferro-steel-900/95 via-ferro-steel-900/70 to-transparent" aria-hidden="true"></div>
        <div class="absolute inset-0 bg-linear-to-t from-ferro-steel-900/90 via-transparent to-transparent" aria-hidden="true"></div>
    </figure>

    <div class="relative z-10 container mx-auto px-4 sm:px-6 lg:px-8 h-full flex items-center">
        <header class="max-w-2xl text-ferro-white space-y-6 pt-12 lg:pt-20">
            <hgroup>
                <h1 id="hero-title" class="font-heading text-4xl sm:text-5xl lg:text-6xl font-bold leading-tight tracking-tight drop-shadow-sm">
                    Productos <span class="text-ferro-yellow-500">por unidad</span>
                </h1>
                <p class="mt-4 text-base sm:text-lg text-ferro-steel-300/90 font-description max-w-lg leading-relaxed">
                    Tornillos, tuercas, arandelas, clavos y fijaciones sueltas. Compra exactamente lo que tu proyecto necesita.
                </p>
            </hgroup>

            <nav aria-label="Acciones del catálogo" class="flex flex-wrap gap-4 pt-2">
                <a href="#catalogo-unidad" class="bg-ferro-yellow-500 hover:bg-ferro-yellow-600 text-ferro-black font-medium px-6 py-3 rounded-xl transition-all duration-300 shadow-lg shadow-ferro-yellow-500/25">
                    Explorar catálogo
                </a>
                <a href="https://wa.me/573184111790" target="_blank" rel="noopener noreferrer" class="border border-ferro-carbon-100/20 hover:border-ferro-yellow-500 text-ferro-white hover:text-ferro-yellow-500 font-medium px-6 py-3 rounded-xl transition-all duration-300 flex items-center gap-2 bg-ferro-carbon-900/40 backdrop-blur-sm">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
                    Cotizar por WhatsApp
                </a>
            </nav>
        </header>
    </div>
</section>

{{-- CONTENEDOR DE FONDO CON CUADRÍCULA Y BENEFICIOS --}}
<div class="relative w-full bg-ferro-background" aria-hidden="true">
    {{-- Patrón de cuadrícula sutil --}}
    <div class="absolute inset-0 bg-[linear-gradient(to_right,#80808008_1px,transparent_1px),linear-gradient(to_bottom,#80808008_1px,transparent_1px)] bg-size-[24px_24px] pointer-events-none"></div>
    
    {{-- BENEFICIOS (TARJETAS FLOTANTES) --}}
    <section class="relative z-10 -mt-16 sm:-mt-20 pb-16 lg:pb-20" aria-label="Ventajas de comprar por unidad">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 relative">
            <ul class="grid grid-cols-1 md:grid-cols-3 gap-6 lg:gap-8 max-w-5xl mx-auto list-none p-0">
                
                {{-- Beneficio 1: Sin desperdicio --}}
                <li class="h-full">
                    <article class="group relative bg-ferro-white rounded-2xl p-6 lg:p-8 shadow-[0_8px_30px_rgba(0,0,0,0.04)] border border-ferro-carbon-100/60 hover:border-ferro-yellow-500/40 transition-all duration-500 hover:shadow-[0_20px_40px_rgba(0,0,0,0.08)] hover:-translate-y-2 h-full flex flex-col overflow-hidden">
                        <div class="absolute inset-0 bg-linear-to-br from-ferro-yellow-500/5 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500 pointer-events-none"></div>
                        
                        {{-- Icono Premium: Caja abierta con detalle --}}
                        <div class="relative w-14 h-14 rounded-2xl bg-linear-to-br from-ferro-carbon-900 to-ferro-black text-ferro-yellow-500 flex items-center justify-center mb-4 shadow-lg shadow-ferro-carbon-900/10 group-hover:shadow-ferro-yellow-500/20 group-hover:scale-110 transition-all duration-300">
                            <svg class="w-7 h-7" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 16H5V5h14v14z"/>
                                <path d="M7 7h10v2H7zM7 11h10v2H7zM7 15h6v2H7z"/>
                            </svg>
                        </div>
                        <h3 class="relative font-heading text-lg font-bold text-ferro-carbon-900 mb-2 tracking-tight">Sin desperdicio</h3>
                        <p class="relative text-ferro-steel-600 text-sm font-description leading-relaxed">Paga solo las piezas que usas. Evita sobrecostos en tu obra y reduce el excedente.</p>
                    </article>
                </li>
                
                {{-- Beneficio 2: Precio transparente --}}
                <li class="h-full">
                    <article class="group relative bg-ferro-white rounded-2xl p-6 lg:p-8 shadow-[0_8px_30px_rgba(0,0,0,0.04)] border border-ferro-carbon-100/60 hover:border-ferro-yellow-500/40 transition-all duration-500 hover:shadow-[0_20px_40px_rgba(0,0,0,0.08)] hover:-translate-y-2 h-full flex flex-col overflow-hidden">
                        <div class="absolute inset-0 bg-linear-to-br from-ferro-yellow-500/5 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500 pointer-events-none"></div>
                        
                        {{-- Icono Premium: Etiqueta de precio sólida --}}
                        <div class="relative w-14 h-14 rounded-2xl bg-linear-to-br from-ferro-carbon-900 to-ferro-black text-ferro-yellow-500 flex items-center justify-center mb-4 shadow-lg shadow-ferro-carbon-900/10 group-hover:shadow-ferro-yellow-500/20 group-hover:scale-110 transition-all duration-300">
                            <svg class="w-7 h-7" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1.41 16.09V20h-2.67v-1.93c-1.71-.36-3.16-1.46-3.27-3.4h1.96c.1 1.05.82 1.87 2.65 1.87 1.96 0 2.4-.98 2.4-1.59 0-.83-.44-1.61-2.67-2.14-2.48-.6-4.18-1.62-4.18-3.67 0-1.72 1.39-2.84 3.11-3.21V4h2.67v1.95c1.86.45 2.79 1.86 2.85 3.39H14.3c-.05-1.11-.64-1.87-2.22-1.87-1.5 0-2.4.68-2.4 1.64 0 .84.65 1.39 2.67 1.91s4.18 1.39 4.18 3.91c-.01 1.83-1.38 2.83-3.12 3.16z"/>
                            </svg>
                        </div>
                        <h3 class="relative font-heading text-lg font-bold text-ferro-carbon-900 mb-2 tracking-tight">Precio transparente</h3>
                        <p class="relative text-ferro-steel-600 text-sm font-description leading-relaxed">Valor claro por unidad y por bulto. Sin letras chiquitas ni cobros ocultos en tu facturación.</p>
                    </article>
                </li>
                
                {{-- Beneficio 3: Compra mixta --}}
                <li class="h-full">
                    <article class="group relative bg-ferro-white rounded-2xl p-6 lg:p-8 shadow-[0_8px_30px_rgba(0,0,0,0.04)] border border-ferro-carbon-100/60 hover:border-ferro-yellow-500/40 transition-all duration-500 hover:shadow-[0_20px_40px_rgba(0,0,0,0.08)] hover:-translate-y-2 h-full flex flex-col overflow-hidden">
                        <div class="absolute inset-0 bg-linear-to-br from-ferro-yellow-500/5 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500 pointer-events-none"></div>
                        
                        {{-- Icono Premium: Carrito con trazo grueso y relleno sólido --}}
                        <div class="relative w-14 h-14 rounded-2xl bg-linear-to-br from-ferro-carbon-900 to-ferro-black text-ferro-yellow-500 flex items-center justify-center mb-4 shadow-lg shadow-ferro-carbon-900/10 group-hover:shadow-ferro-yellow-500/20 group-hover:scale-110 transition-all duration-300">
                            <svg class="w-7 h-7" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M7 18c-1.1 0-1.99.9-1.99 2S5.9 22 7 22s2-.9 2-2-.9-2-2-2zM1 2v2h2l3.6 7.59-1.35 2.45c-.16.28-.25.61-.25.96 0 1.1.9 2 2 2h12v-2H7.42c-.14 0-.25-.11-.25-.25l.03-.12.9-1.63h7.45c.75 0 1.41-.41 1.75-1.03l3.58-6.49c.08-.14.12-.31.12-.48 0-.55-.45-1-1-1H5.21l-.94-2H1zm16 16c-1.1 0-1.99.9-1.99 2s.89 2 1.99 2 2-.9 2-2-.9-2-2-2z"/>
                            </svg>
                        </div>
                        <h3 class="relative font-heading text-lg font-bold text-ferro-carbon-900 mb-2 tracking-tight">Compra mixta</h3>
                        <p class="relative text-ferro-steel-600 text-sm font-description leading-relaxed">Combina unidades de diferentes referencias en un solo pedido. Simplifica tu logística y ahorra tiempo.</p>
                    </article>
                </li>
                
            </ul>
        </div>
    </section>
</div>