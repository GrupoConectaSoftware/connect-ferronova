<script setup>
import { computed, ref } from 'vue'
import BtnVisualizar from '../../buttons/view/BtnVisualizar.vue'
import BtnHeart from '../../buttons/heart/BtnHeart.vue'
import BtnWhatsapp from '../../buttons/quote/BtnWhatsapp.vue'

const props = defineProps({ layout: { type: String, default: 'catalog' } })
const rentals = ref([
    { id: 1, name: 'Mezcladora de concreto 350L', description: 'Motor a gasolina para trabajo pesado.', prices: [{ label: 'Hora', value: 15000 }, { label: 'Día', value: 95000 }, { label: 'Semana', value: 450000 }], image: '/asset/sections/index-homepages/agenda/imagen-agenda.webp' },
    { id: 2, name: 'Plancha compactadora 100kg', description: 'Compactación eficiente de terrenos.', prices: [{ label: 'Hora', value: 20000 }, { label: 'Día', value: 120000 }, { label: 'Semana', value: 550000 }], image: '/asset/sections/index-homepages/agenda/imagen-agenda.webp' },
    { id: 3, name: 'Cortadora de concreto 18”', description: 'Disco diamante para corte profesional.', prices: [{ label: 'Hora', value: 25000 }, { label: 'Día', value: 140000 }, { label: 'Semana', value: 650000 }], image: '/asset/sections/index-homepages/agenda/imagen-agenda.webp' },
    { id: 4, name: 'Andamio modular', description: 'Estructura reforzada con ruedas y freno.', prices: [{ label: 'Hora', value: 12000 }, { label: 'Día', value: 85000 }, { label: 'Semana', value: 380000 }], image: '/asset/sections/index-homepages/agenda/imagen-agenda.webp' },
    { id: 5, name: 'Martillo demoledor 1700W', description: 'Potencia industrial con 65J de impacto.', prices: [{ label: 'Hora', value: 18000 }, { label: 'Día', value: 110000 }, { label: 'Semana', value: 500000 }], image: '/asset/sections/index-homepages/agenda/imagen-agenda.webp' },
    { id: 6, name: 'Generador eléctrico 3500W', description: 'Equipo silencioso para trabajos continuos.', prices: [{ label: 'Hora', value: 30000 }, { label: 'Día', value: 180000 }, { label: 'Semana', value: 850000 }], image: '/asset/sections/index-homepages/agenda/imagen-agenda.webp' },
])
const isCarousel = computed(() => props.layout === 'carousel')
const formatPrice = (value) => new Intl.NumberFormat('es-CO', { style: 'currency', currency: 'COP', notation: 'compact', maximumFractionDigits: 1 }).format(value)
</script>

<template>
    <div :class="isCarousel ? 'flex w-max min-w-full gap-4 overflow-visible snap-x snap-mandatory sm:gap-6' : 'flex w-full snap-x snap-mandatory gap-4 overflow-x-auto overscroll-x-contain pb-3 sm:grid sm:grid-cols-2 sm:overflow-visible sm:pb-0 lg:grid-cols-3 lg:gap-5'">
        <article v-for="rental in rentals" :key="rental.id" :class="isCarousel ? 'w-[75vw] max-w-72.5 shrink-0 snap-start sm:w-70' : 'w-[82vw] max-w-sm shrink-0 snap-start sm:w-auto sm:max-w-none sm:min-w-0'" class="ferro-card-entrance group flex h-full flex-col overflow-hidden rounded-2xl border border-ferro-carbon-100/50 bg-ferro-white shadow-sm transition-colors duration-300 hover:border-ferro-yellow-500/40">
            <div class="relative aspect-4/3 overflow-hidden bg-ferro-steel-100">
                <img :src="rental.image" :alt="rental.name" class="h-full w-full object-cover image-loading" loading="lazy" decoding="async">
                <div class="absolute right-3 top-3 z-10 flex origin-top-right scale-100 flex-col gap-2 opacity-100 transition-all duration-300 lg:scale-90 lg:opacity-0 lg:group-hover:scale-100 lg:group-hover:opacity-100">
                    <BtnHeart
                        variant="overlay"
                        :product="{ ...rental, key: `rental-${rental.id}`, type: 'rental', price: rental.prices[1].value, brand: 'Alquiler por día' }"
                    />
                    <BtnWhatsapp />
                </div>
            </div>
            <div class="flex flex-1 flex-col p-5">
                <h3 class="min-h-11 line-clamp-2 font-heading text-base font-bold leading-snug text-ferro-carbon-900">{{ rental.name }}</h3>
                <p class="mt-1 line-clamp-2 flex-1 font-body text-xs leading-relaxed text-ferro-steel-500">{{ rental.description }}</p>
                <div class="mt-5 grid grid-cols-3 gap-2 pt-1">
                    <div v-for="price in rental.prices" :key="price.label" class="rounded-lg px-2 py-2.5 text-center">
                        <span class="block text-[9px] font-bold uppercase tracking-wide text-ferro-steel-500">{{ price.label }}</span>
                        <span class="mt-0.5 block font-heading text-xs font-bold text-ferro-carbon-900">{{ formatPrice(price.value) }}</span>
                    </div>
                </div>
                <BtnVisualizar class="mt-4" text="Ver Disponibilidad" />
            </div>
        </article>
    </div>
</template>
