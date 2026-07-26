<script setup>
import { computed, ref } from 'vue'
import BtnVisualizar from '../../buttons/view/BtnVisualizar.vue'
import BtnCart from '../../buttons/shopping/BtnCart.vue'
import BtnHeart from '../../buttons/heart/BtnHeart.vue'
import BtnWhatsapp from '../../buttons/quote/BtnWhatsapp.vue'

const props = defineProps({ layout: { type: String, default: 'catalog' } })
const products = ref([
    { id: 1, name: 'Tornillo drywall 1”', description: 'Punta fina y acabado fosfatado.', unitPrice: 80, boxPrice: 7000, boxQuantity: 100, image: '/asset/sections/index-united/producto/imagen-unidad.webp' },
    { id: 2, name: 'Tornillo autoperforante 5/8”', description: 'Cabeza hexagonal zincada.', unitPrice: 120, boxPrice: 11000, boxQuantity: 100, image: '/asset/sections/index-united/producto/imagen-unidad.webp' },
    { id: 3, name: 'Arandela plana 1/4”', description: 'Acero galvanizado de alta resistencia.', unitPrice: 60, boxPrice: 5500, boxQuantity: 100, image: '/asset/sections/index-united/producto/imagen-unidad.webp' },
    { id: 4, name: 'Clavo de acero 2”', description: 'Cabeza plana para construcción general.', unitPrice: 50, boxPrice: 4500, boxQuantity: 100, image: '/asset/sections/index-united/producto/imagen-unidad.webp' },
    { id: 5, name: 'Tuerca hexagonal M6', description: 'Acero inoxidable para uso industrial.', unitPrice: 45, boxPrice: 3800, boxQuantity: 100, image: '/asset/sections/index-united/producto/imagen-unidad.webp' },
    { id: 6, name: 'Perno hexagonal 1/2”', description: 'Grado 5 con alta resistencia mecánica.', unitPrice: 180, boxPrice: 16000, boxQuantity: 100, image: '/asset/sections/index-united/producto/imagen-unidad.webp' },
])
const isCarousel = computed(() => props.layout === 'carousel')
const formatPrice = (value) => new Intl.NumberFormat('es-CO', { style: 'currency', currency: 'COP', minimumFractionDigits: 0 }).format(value)
</script>

<template>
    <div :class="isCarousel ? 'flex w-max min-w-full gap-4' : 'grid grid-cols-1 gap-4 sm:grid-cols-2 lg:grid-cols-3 lg:gap-5'">
        <article v-for="product in products" :key="product.id" :class="isCarousel ? 'w-[75vw] max-w-72.5 shrink-0 snap-start sm:w-70' : 'min-w-0'" class="ferro-card-entrance group flex h-full flex-col rounded-2xl border border-ferro-carbon-100/50 bg-ferro-white p-5 shadow-sm transition-colors duration-300 hover:border-ferro-yellow-500/40">
            <div class="relative mb-4 aspect-4/3 overflow-hidden rounded-xl bg-ferro-steel-100">
                <img :src="product.image" :alt="product.name" class="h-full w-full object-cover image-loading" loading="lazy" decoding="async">
                <div class="absolute right-3 top-3 z-10 hidden origin-top-right flex-col gap-2 opacity-0 scale-90 transition-all duration-300 lg:flex lg:group-hover:scale-100 lg:group-hover:opacity-100">
                    <BtnHeart variant="overlay" />
                    <BtnCart variant="overlay" :product="product" />
                    <BtnWhatsapp />
                </div>
                <span class="absolute left-3 top-3 rounded-full bg-ferro-yellow-500 px-2.5 py-1 text-[10px] font-bold uppercase tracking-wider text-ferro-black">Por unidad</span>
            </div>
            <div class="flex flex-1 flex-col">
                <h3 class="min-h-11 line-clamp-2 font-heading text-base font-bold leading-snug text-ferro-carbon-900">{{ product.name }}</h3>
                <p class="mt-1 line-clamp-2 flex-1 font-body text-xs leading-relaxed text-ferro-steel-500">{{ product.description }}</p>
                <div class="mt-4 space-y-2 border-t border-ferro-carbon-100/50 pt-3">
                    <div class="grid grid-cols-[1fr_auto] items-baseline gap-3"><span class="text-[10px] font-bold uppercase tracking-wider text-ferro-steel-500">Unidad</span><span class="text-right font-heading text-lg font-bold tabular-nums text-ferro-carbon-900">{{ formatPrice(product.unitPrice) }}</span></div>
                    <div class="grid grid-cols-[1fr_auto] items-baseline gap-3"><span class="text-[10px] font-bold uppercase tracking-wider text-ferro-steel-500">Caja x{{ product.boxQuantity }}</span><span class="text-right font-heading text-base font-semibold tabular-nums text-ferro-yellow-600">{{ formatPrice(product.boxPrice) }}</span></div>
                </div>
                <BtnVisualizar class="mt-4" text="Ver Detalle" />
            </div>
        </article>
    </div>
</template>
