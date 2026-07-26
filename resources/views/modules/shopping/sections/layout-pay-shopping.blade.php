{{-- ==========================================================
    SECCIÓN 2: CONTENIDO DEL CARRITO (VERSIÓN MELO)
    ========================================================== --}}
<section class="w-full bg-ferro-background py-16 lg:py-24" aria-label="Contenido del carrito de compras">
    <div class="container mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">

        {{-- Grid principal con el estado del carrito --}}
        <div class="flex w-full flex-col items-start gap-8 lg:flex-row lg:gap-12" x-data="cartPage">

            {{-- COLUMNA IZQUIERDA (LISTA DE PRODUCTOS O VACÍO) --}}
            <div class="flex w-full shrink-0 flex-col gap-4 lg:w-[66%]">

                {{-- ESTADO VACÍO (Con fondo suave y toque de amarillo) --}}
                <div
                    x-show="items.length === 0"
                    x-cloak
                    class="flex min-h-100 w-full flex-col items-center justify-center rounded-2xl from-ferro-yellow-500/5 to-ferro-white p-10 text-center"
                >
                    <div class="mb-5 flex h-16 w-16 shrink-0 items-center justify-center rounded-full bg-ferro-yellow-500/10 backdrop-blur-sm">
                        <svg class="h-7 w-7 text-ferro-yellow-200" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 0 0-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 0 0-16.536-1.84M7.5 14.25 5.106 5.272M6 20.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Zm12.75 0a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z" />
                        </svg>
                    </div>
                    <h4 class="mb-1 font-heading text-xl font-bold tracking-tight text-ferro-carbon-900">Tu carrito está vacío</h4>
                    <p class="mb-6 text-sm leading-relaxed text-ferro-steel-500">Agrega productos del catálogo para comenzar.</p>
                    <a
                        href="{{ route('category') }}"
                        class="inline-flex cursor-pointer items-center gap-2 whitespace-nowrap rounded-xl bg-ferro-yellow-500 px-6 py-3 text-sm font-medium text-ferro-black transition-colors duration-200 hover:bg-ferro-yellow-600 hover:scale-105 active:scale-95"
                    >
                        <span>Ir al catálogo</span>
                        <svg class="h-4 w-4 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m17 8 4 4m0 0-4 4m4-4H3" />
                        </svg>
                    </a>
                </div>

                {{-- LISTA DE PRODUCTOS (Hover con fondo suave) --}}
                <template x-if="items.length > 0">
                    <div class="flex w-full flex-col gap-4">
                        <template x-for="item in items" :key="item.key">
                            <article class="group relative flex items-center gap-4 rounded-2xl bg-ferro-white p-4 transition-all duration-300 hover:bg-ferro-steel-50/50 sm:gap-6 sm:p-5">

                                {{-- IMAGEN --}}
                                <div class="h-20 w-20 shrink-0 overflow-hidden rounded-xl bg-ferro-steel-100 sm:h-24 sm:w-24">
                                    <img :src="item.image" :alt="item.name" class="h-full w-full object-cover" loading="lazy" decoding="async">
                                </div>

                                {{-- INFO --}}
                                <div class="min-w-0 flex-1">
                                    <p class="mb-0.5 text-[10px] font-bold uppercase tracking-wider text-ferro-steel-500" x-text="item.brand"></p>
                                    <h4 class="truncate font-heading text-base font-bold text-ferro-carbon-900 tracking-tight" x-text="item.name"></h4>
                                    <p class="mt-1 text-xs text-ferro-steel-500" x-text="formatPrice(item.price) + ' c/u'"></p>
                                </div>

                                {{-- CANTIDAD (Más integrado) --}}
                                <div class="flex shrink-0 items-center gap-1 rounded-xl bg-ferro-steel-50 px-2 py-1">
                                    <button type="button" @click="updateQty(item.key, -1)" class="flex h-8 w-8 items-center justify-center rounded-lg text-ferro-carbon-700 transition-colors hover:bg-ferro-white">−</button>
                                    <span class="w-6 text-center text-sm font-bold text-ferro-carbon-900" x-text="item.qty"></span>
                                    <button type="button" @click="updateQty(item.key, 1)" class="flex h-8 w-8 items-center justify-center rounded-lg text-ferro-carbon-700 transition-colors hover:bg-ferro-white">+</button>
                                </div>

                                {{-- PRECIO --}}
                                <div class="hidden shrink-0 text-right sm:block">
                                    <p class="text-lg font-bold text-ferro-carbon-900" x-text="formatPrice(item.price * item.qty)"></p>
                                </div>

                                {{-- ELIMINAR --}}
                                <button
                                    type="button"
                                    @click="removeItem(item.key)"
                                    class="absolute right-3 top-3 text-ferro-steel-400 transition-colors hover:text-ferro-danger lg:static lg:ml-2"
                                    aria-label="Eliminar producto"
                                >
                                    <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                                    </svg>
                                </button>
                            </article>
                        </template>
                    </div>
                </template>
            </div>

            {{-- COLUMNA DERECHA (RESUMEN DEL PEDIDO) --}}
            <div class="w-full shrink-0 lg:w-[33%]">
                @include('modules.shopping.components.component-pay-shopping')
            </div>
        </div>
    </div>
</section>
