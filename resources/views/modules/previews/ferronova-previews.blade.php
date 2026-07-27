<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detalle del producto | FERRANOVA</title>
    <meta name="description" content="Consulta la información, precio y disponibilidad de productos FERRANOVA.">
    <link rel="canonical" href="{{ url()->current() }}">
    <meta property="og:title" content="Detalle del producto | FERRANOVA">
    <meta property="og:image" content="{{ asset('asset/logos/logoOficial.png') }}">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300;400;500;600;700&family=Inter:wght@300;400;500;600;700&family=Plus+Jakarta+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-ferro-background font-body text-ferro-carbon-700 antialiased">


    <main
        x-data="{
            product: null,
            activeTab: 'description',
            init() {
                try {
                    this.product = JSON.parse(localStorage.getItem('ferro_view_product') || 'null')
                } catch {
                    this.product = null
                }
            },
            formatPrice(value) {
                return new Intl.NumberFormat('es-CO', {
                    style: 'currency',
                    currency: 'COP',
                    minimumFractionDigits: 0
                }).format(Number(value) || 0)
            },
            get productKey() {
                if (!this.product) return ''
                return String(this.product.key || `${this.product.type || 'product'}-${this.product.id}`)
            },
            get isFavorite() {
                return this.$store.favorites.items.some(item => item.key === this.productKey)
            },
            get isInCart() {
                return this.$store.cart.items.some(item => item.key === this.productKey)
            },
            addToCart() {
                if (!this.product) return
                window.dispatchEvent(new CustomEvent('ferro:add-to-cart', {
                    detail: { product: this.product }
                }))
            },
            toggleFavorite() {
                if (!this.product) return
                window.dispatchEvent(new CustomEvent('ferro:toggle-favorite', {
                    detail: { product: this.product }
                }))
            },
            get whatsappUrl() {
                if (!this.product) return '#'
                const message = `Hola FERRANOVA, quiero cotizar ${this.product.name}.`
                return `https://wa.me/573184111790?text=${encodeURIComponent(message)}`
            }
        }"
        class="min-h-screen pt-6 sm:pt-8 lg:pt-10"
        aria-label="Detalle del producto"
    >
        <div class="container mx-auto max-w-7xl px-4 pb-16 sm:px-6 lg:px-8 lg:pb-24">
            <button
                type="button"
                class="inline-flex items-center gap-2 px-1 py-2 text-sm font-semibold text-ferro-steel-500 transition-colors hover:text-ferro-carbon-900 focus:outline-none focus-visible:ring-2 focus-visible:ring-ferro-yellow-500"
                aria-label="Volver a la página anterior"
                @click="history.length > 1 ? history.back() : window.location.assign('{{ route('category') }}')"
            >
                <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m15 18-6-6 6-6" />
                </svg>
                Volver atrás
            </button>

            <nav class="mb-8 mt-4 flex min-w-0 items-center gap-2 text-sm" aria-label="Migas de pan">
                <a href="{{ route('home') }}" class="shrink-0 font-medium text-ferro-steel-500 transition-colors hover:text-ferro-yellow-700">Inicio</a>
                <svg class="h-3.5 w-3.5 shrink-0 text-ferro-steel-300" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m9 18 6-6-6-6" />
                </svg>
                <a href="{{ route('category') }}" class="shrink-0 font-medium text-ferro-steel-500 transition-colors hover:text-ferro-yellow-700">Catálogo</a>
                <svg class="h-3.5 w-3.5 shrink-0 text-ferro-steel-300" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m9 18 6-6-6-6" />
                </svg>
                <span class="min-w-0 truncate font-semibold text-ferro-carbon-900" x-text="product?.name || 'Producto'"></span>
            </nav>

            <section
                x-show="!product"
                x-cloak
                class="flex min-h-96 flex-col items-center justify-center rounded-3xl border border-dashed border-ferro-carbon-100 bg-ferro-white p-8 text-center shadow-sm"
            >
                <div class="mb-5 flex h-16 w-16 items-center justify-center rounded-full bg-ferro-yellow-500/10 text-ferro-yellow-700">
                    <svg class="h-8 w-8" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.7" d="M3 3h18v18H3zM8 8h8m-8 4h5m-5 4h3" />
                    </svg>
                </div>
                <h1 class="font-heading text-2xl font-bold text-ferro-carbon-900">No encontramos un producto seleccionado</h1>
                <p class="mt-2 max-w-md text-sm leading-relaxed text-ferro-steel-500">
                    Regresa al catálogo y selecciona “Visualizar producto” para consultar todos sus detalles.
                </p>
                <a href="{{ route('category') }}" class="mt-6 rounded-xl bg-ferro-yellow-500 px-6 py-3 text-sm font-bold text-ferro-black transition-colors hover:bg-ferro-yellow-700">
                    Volver al catálogo
                </a>
            </section>

            <template x-if="product">
                <div>
                    <section class="overflow-hidden rounded-3xl bg-transparent">
                        <div class="grid gap-0 lg:grid-cols-[1.02fr_0.98fr]">
                            <div class="relative min-h-90 sm:min-h-125 lg:min-h-155">
                                <div class="absolute left-4 top-4 z-10 flex flex-wrap gap-2 sm:left-5 sm:top-5">
                                    <span class="rounded-full bg-ferro-carbon-900 px-3 py-1.5 text-[10px] font-bold uppercase tracking-wider text-ferro-white">
                                        FERRANOVA
                                    </span>
                                    <span
                                        x-show="product.discount"
                                        class="rounded-full bg-ferro-danger px-3 py-1.5 text-[10px] font-bold uppercase tracking-wider text-ferro-white"
                                        x-text="`-${product.discount}%`"
                                    ></span>
                                </div>

                                <img
                                    :src="product.image"
                                    :alt="product.name"
                                    class="h-full min-h-90 w-full rounded-3xl object-cover sm:min-h-125 lg:min-h-155"
                                    loading="eager"
                                    decoding="async"
                                >

                                <div class="absolute bottom-4 right-4 rounded-full bg-ferro-white/90 px-3 py-1.5 text-[10px] font-semibold text-ferro-steel-500 shadow-sm backdrop-blur sm:bottom-5 sm:right-5">
                                    Imagen de referencia
                                </div>
                            </div>

                            <div class="flex flex-col p-6 sm:p-8 lg:p-10">
                                <div class="flex items-center justify-between gap-4">
                                    <span
                                        class="rounded-full bg-ferro-yellow-500/15 px-3 py-1 text-[10px] font-bold uppercase tracking-wider text-ferro-yellow-900"
                                        x-text="product.type === 'unit' ? 'Venta por unidad' : 'Producto industrial'"
                                    ></span>
                                    <span class="text-xs font-medium text-ferro-steel-500" x-text="`SKU: FN-${String(product.id).padStart(4, '0')}`"></span>
                                </div>

                                <h1 class="mt-5 font-heading text-3xl font-bold leading-tight tracking-tight text-ferro-carbon-900 sm:text-4xl" x-text="product.name"></h1>
                                <p class="mt-4 text-sm leading-7 text-ferro-steel-500 sm:text-base" x-text="product.description"></p>

                                <div class="my-7 h-px bg-ferro-carbon-100/60"></div>

                                <div x-show="product.type !== 'unit'">
                                    <div class="flex flex-wrap items-end gap-x-3 gap-y-1">
                                        <span class="font-heading text-4xl font-bold tracking-tight text-ferro-carbon-900" x-text="formatPrice(product.price)"></span>
                                        <span x-show="product.originalPrice" class="pb-1 text-sm text-ferro-steel-500 line-through" x-text="formatPrice(product.originalPrice)"></span>
                                    </div>
                                    <p class="mt-2 text-xs font-semibold text-ferro-success">Disponible para despacho</p>
                                </div>

                                <div x-show="product.type === 'unit'" class="grid grid-cols-1 gap-3 sm:grid-cols-2">
                                    <div class="py-2">
                                        <span class="text-[10px] font-bold uppercase tracking-wider text-ferro-steel-500">Precio por unidad</span>
                                        <p class="mt-1 font-heading text-2xl font-bold text-ferro-carbon-900" x-text="formatPrice(product.unitPrice)"></p>
                                    </div>
                                    <div class="py-2 sm:pl-4">
                                        <span class="text-[10px] font-bold uppercase tracking-wider text-ferro-steel-500" x-text="`Caja x${product.boxQuantity}`"></span>
                                        <p class="mt-1 font-heading text-2xl font-bold text-ferro-carbon-900" x-text="formatPrice(product.boxPrice)"></p>
                                    </div>
                                </div>

                                <div class="mt-8 grid gap-3 sm:grid-cols-2">
                                    <button
                                        type="button"
                                        class="flex items-center justify-center gap-2 rounded-xl px-5 py-3.5 text-sm font-bold shadow-sm transition-all"
                                        :class="isInCart
                                            ? 'bg-ferro-yellow-500 text-ferro-black'
                                            : 'bg-ferro-carbon-900 text-ferro-white hover:bg-ferro-carbon-700'"
                                        @click="addToCart"
                                    >
                                        <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13 5.4 5M7 13l-2 4h14" />
                                        </svg>
                                        <span x-text="isInCart ? 'Agregado al carrito' : 'Agregar al carrito'"></span>
                                    </button>

                                    <button
                                        type="button"
                                        class="flex items-center justify-center gap-2 rounded-xl border px-5 py-3.5 text-sm font-bold transition-all"
                                        :class="isFavorite
                                            ? 'border-ferro-yellow-500 bg-ferro-yellow-500 text-ferro-black'
                                            : 'border-ferro-carbon-100 bg-ferro-white text-ferro-carbon-900 hover:border-ferro-yellow-500'"
                                        @click="toggleFavorite"
                                    >
                                        <svg class="h-5 w-5" :fill="isFavorite ? 'currentColor' : 'none'" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733C11.285 4.126 9.623 3 7.687 3 5.1 3 3 5.015 3 7.5c0 7.22 9 12 9 12s9-4.78 9-12Z" />
                                        </svg>
                                        <span x-text="isFavorite ? 'Guardado en favoritos' : 'Agregar a favoritos'"></span>
                                    </button>
                                </div>

                                <a
                                    :href="whatsappUrl"
                                    target="_blank"
                                    rel="noopener noreferrer"
                                    class="mt-3 flex items-center justify-center gap-2 rounded-xl bg-[#25D366] px-5 py-3.5 text-sm font-bold text-white transition-colors hover:bg-[#20bd5a]"
                                >
                                    <svg class="h-5 w-5 shrink-0" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                        <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 0 0-3.48-8.413Z" />
                                    </svg>
                                    Cotizar por WhatsApp
                                </a>

                                <div class="mt-8 grid grid-cols-3 gap-2 border-t border-ferro-carbon-100/60 pt-6 text-center">
                                    <div>
                                        <p class="font-heading text-sm font-bold text-ferro-carbon-900">Nacional</p>
                                        <span class="text-[10px] text-ferro-steel-500">Cobertura de envío</span>
                                    </div>
                                    <div class="border-x border-ferro-carbon-100">
                                        <p class="font-heading text-sm font-bold text-ferro-carbon-900">Seguro</p>
                                        <span class="text-[10px] text-ferro-steel-500">Compra protegida</span>
                                    </div>
                                    <div>
                                        <p class="font-heading text-sm font-bold text-ferro-carbon-900">Soporte</p>
                                        <span class="text-[10px] text-ferro-steel-500">Asesoría experta</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                    <section class="mt-8 rounded-3xl bg-transparent px-1 py-6 sm:px-0 sm:py-8">
                        <div class="flex gap-6 overflow-x-auto border-b border-ferro-carbon-100">
                            <button
                                type="button"
                                class="whitespace-nowrap border-b-2 px-1 pb-4 text-sm font-bold transition-colors"
                                :class="activeTab === 'description' ? 'border-ferro-yellow-500 text-ferro-carbon-900' : 'border-transparent text-ferro-steel-500'"
                                @click="activeTab = 'description'"
                            >
                                Descripción
                            </button>
                            <button
                                type="button"
                                class="whitespace-nowrap border-b-2 px-1 pb-4 text-sm font-bold transition-colors"
                                :class="activeTab === 'purchase' ? 'border-ferro-yellow-500 text-ferro-carbon-900' : 'border-transparent text-ferro-steel-500'"
                                @click="activeTab = 'purchase'"
                            >
                                Compra y entrega
                            </button>
                        </div>

                        <div class="pt-6 text-sm leading-7 text-ferro-steel-500 sm:text-base">
                            <div x-show="activeTab === 'description'">
                                <h2 class="font-heading text-xl font-bold text-ferro-carbon-900">Información del producto</h2>
                                <p class="mt-3 max-w-4xl" x-text="product.description"></p>
                                <p class="mt-3 max-w-4xl">
                                    Producto seleccionado para uso profesional, con acompañamiento comercial y disponibilidad sujeta a inventario.
                                </p>
                            </div>
                            <div x-show="activeTab === 'purchase'" x-cloak>
                                <h2 class="font-heading text-xl font-bold text-ferro-carbon-900">Proceso de compra</h2>
                                <p class="mt-3 max-w-4xl">
                                    Agrégalo al carrito para preparar tu pedido o solicita una cotización por WhatsApp. Nuestro equipo confirmará existencias, forma de pago y tiempo estimado de entrega.
                                </p>
                            </div>
                        </div>
                    </section>
                </div>
            </template>
        </div>
    </main>

    @include('layouts.footer.layout-footer')
</body>
</html>
