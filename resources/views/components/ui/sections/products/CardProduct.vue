<script setup>
import { computed, ref } from 'vue'
import BtnVisualizar from '../../buttons/view/BtnVisualizar.vue'
import BtnCart from '../../buttons/shopping/BtnCart.vue'
import BtnHeart from '../../buttons/heart/BtnHeart.vue'
import BtnWhatsapp from '../../buttons/quote/BtnWhatsapp.vue'

const props = defineProps({
    layout: { type: String, default: 'catalog' },
})

const products = ref([
    { id: 1, name: 'Taladro percutor inalámbrico 20V', description: 'Motor brushless, dos baterías y maletín.', price: 489000, originalPrice: 629000, discount: 22, image: '/asset/sections/index-homepages/productos/imagen-producto.webp' },
    { id: 2, name: 'Esmeril angular 7” 2200W', description: 'Alto torque y guarda antichispas.', price: 359000, originalPrice: 420000, discount: 15, image: '/asset/sections/index-homepages/productos/imagen-producto.webp' },
    { id: 3, name: 'Sierra circular 9¼” industrial', description: 'Disco de 235 mm y base de aluminio.', price: 712000, originalPrice: null, discount: null, image: '/asset/sections/index-homepages/productos/imagen-producto.webp' },
    { id: 4, name: 'Martillo demoledor SDS Max', description: 'Potencia de 1700W y 65J de impacto.', price: 1899000, originalPrice: 2149000, discount: 12, image: '/asset/sections/index-homepages/productos/imagen-producto.webp' },
    { id: 5, name: 'Compresor de aire 50L 2HP', description: 'Tanque horizontal para uso profesional.', price: 1159000, originalPrice: 1299000, discount: 11, image: '/asset/sections/index-homepages/productos/imagen-producto.webp' },
    { id: 6, name: 'Generador eléctrico 3500W', description: 'Motor a gasolina y arranque manual.', price: 2399000, originalPrice: 2799000, discount: 14, image: '/asset/sections/index-homepages/productos/imagen-producto.webp' },
])

const isCarousel = computed(() => props.layout === 'carousel')
const formatPrice = (value) => new Intl.NumberFormat('es-CO', { style: 'currency', currency: 'COP', minimumFractionDigits: 0 }).format(value)
</script>

<template>
    <div
        :class="isCarousel
            ? 'flex w-max min-w-full gap-4 overflow-visible snap-x snap-mandatory sm:gap-6'
            : 'flex w-full snap-x snap-mandatory gap-4 overflow-x-auto overscroll-x-contain pb-3 sm:grid sm:grid-cols-2 sm:overflow-visible sm:pb-0 lg:grid-cols-3 lg:gap-5'"
    >
        <article
            v-for="product in products"
            :key="product.id"
            :class="isCarousel
                ? 'w-[75vw] max-w-72.5 shrink-0 snap-start sm:w-70'
                : 'w-[82vw] max-w-sm shrink-0 snap-start sm:w-auto sm:max-w-none sm:min-w-0'"
            class="ferro-card-entrance group flex h-full flex-col rounded-2xl border border-ferro-carbon-100/50 bg-ferro-white p-5 shadow-sm transition-colors duration-300 hover:border-ferro-yellow-500/40"
        >
            <div class="relative mb-4 aspect-4/3 overflow-hidden rounded-xl bg-ferro-steel-100">
                <img :src="product.image" :alt="product.name" class="h-full w-full object-cover image-loading" loading="lazy" decoding="async">
                <div class="absolute right-3 top-3 z-10 flex origin-top-right scale-100 flex-col gap-2 opacity-100 transition-all duration-300 lg:scale-90 lg:opacity-0 lg:group-hover:scale-100 lg:group-hover:opacity-100">
                        <BtnHeart
                            variant="overlay"
                            :product="{ ...product, key: `product-${product.id}`, type: 'product', brand: 'FERRANOVA' }"
                        />
                        <BtnCart variant="overlay" :product="product" />
                        <BtnWhatsapp />
                </div>
                <span class="absolute left-3 top-3 rounded-full bg-ferro-yellow-500 px-2.5 py-1 text-[10px] font-bold uppercase tracking-wider text-ferro-black">Recomendado</span>
                <span v-if="product.discount" class="absolute bottom-3 left-3 rounded-full bg-ferro-danger px-2.5 py-1 text-[10px] font-bold text-white">-{{ product.discount }}%</span>
            </div>

            <div class="flex flex-1 flex-col">
                <h3 class="min-h-11 line-clamp-2 font-heading text-base font-bold leading-snug text-ferro-carbon-900">{{ product.name }}</h3>
                <p class="mt-1 line-clamp-2 flex-1 font-body text-xs leading-relaxed text-ferro-steel-500">{{ product.description }}</p>
                <div class="mt-4 flex flex-wrap items-baseline gap-x-2 border-t border-ferro-carbon-100/50 pt-3">
                    <span class="font-heading text-xl font-bold tracking-tight text-ferro-carbon-900">{{ formatPrice(product.price) }}</span>
                    <span v-if="product.originalPrice" class="text-xs text-ferro-steel-400 line-through">{{ formatPrice(product.originalPrice) }}</span>
                </div>
                <BtnVisualizar class="mt-4" />
            </div>
        </article>
    </div>
</template>
