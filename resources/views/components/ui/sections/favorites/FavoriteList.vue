<script setup>
import { computed, onBeforeUnmount, onMounted, ref } from 'vue'
import BtnVisualizar from '../../buttons/view/BtnVisualizar.vue'
import {
    FAVORITES_UPDATED_EVENT,
    readFavorites,
    removeFavorite,
} from '../../../../../js/favorites'

defineProps({
    catalogUrl: { type: String, required: true },
})

const favorites = ref(readFavorites())
const search = ref('')

const filteredFavorites = computed(() => {
    const term = search.value.trim().toLocaleLowerCase('es')
    if (!term) return favorites.value

    return favorites.value.filter((item) =>
        [item.name, item.brand, item.description]
            .some((value) => String(value).toLocaleLowerCase('es').includes(term)),
    )
})

const formatPrice = (value, compact = false) => new Intl.NumberFormat('es-CO', {
    style: 'currency',
    currency: 'COP',
    minimumFractionDigits: 0,
    ...(compact ? { notation: 'compact', maximumFractionDigits: 1 } : {}),
}).format(value)

function syncFavorites(event) {
    favorites.value = event.detail?.items ?? readFavorites()
}

function remove(key) {
    favorites.value = removeFavorite(key)
}

onMounted(() => window.addEventListener(FAVORITES_UPDATED_EVENT, syncFavorites))
onBeforeUnmount(() => window.removeEventListener(FAVORITES_UPDATED_EVENT, syncFavorites))
</script>

<template>
    <div>
        <header class="mb-8 flex flex-col justify-between gap-5 sm:flex-row sm:items-end">
            <div>
                <span class="text-xs font-bold uppercase tracking-[0.2em] text-ferro-yellow-700">Tu selección</span>
                <h2 class="mt-2 font-heading text-2xl font-bold tracking-tight text-ferro-carbon-900 sm:text-3xl">
                    Mis <span class="text-ferro-yellow-500">favoritos</span>
                </h2>
                <p class="mt-1 text-sm text-ferro-steel-500">
                    {{ favorites.length === 1 ? 'Tienes 1 producto guardado' : `Tienes ${favorites.length} productos guardados` }}
                </p>
            </div>

            <label v-if="favorites.length" class="relative block w-full sm:w-72">
                <span class="sr-only">Buscar en favoritos</span>
                <svg class="pointer-events-none absolute left-3.5 top-1/2 h-4 w-4 -translate-y-1/2 text-ferro-steel-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m21 21-4.35-4.35m1.35-5.65a7 7 0 1 1-14 0 7 7 0 0 1 14 0Z" />
                </svg>
                <input
                    v-model.trim="search"
                    type="search"
                    placeholder="Buscar en favoritos..."
                    class="w-full rounded-xl border border-ferro-carbon-100 bg-ferro-white py-3 pl-10 pr-4 text-sm text-ferro-carbon-900 shadow-sm transition-colors placeholder:text-ferro-steel-500 focus:border-ferro-yellow-500 focus:outline-none"
                >
            </label>
        </header>

        <div
            v-if="!favorites.length"
            class="flex min-h-105 flex-col items-center justify-center rounded-3xl border border-dashed border-ferro-carbon-100 bg-ferro-white/70 p-8 text-center"
        >
            <div class="mb-5 flex h-18 w-18 items-center justify-center rounded-full bg-ferro-yellow-500/10 text-ferro-yellow-700">
                <svg class="h-9 w-9" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733C11.285 4.126 9.623 3 7.687 3 5.1 3 3 5.015 3 7.5c0 7.22 9 12 9 12s9-4.78 9-12Z" />
                </svg>
            </div>
            <h3 class="font-heading text-xl font-bold text-ferro-carbon-900">Aún no tienes favoritos</h3>
            <p class="mt-2 max-w-md text-sm leading-relaxed text-ferro-steel-500">
                Explora el catálogo y guarda las herramientas, productos o equipos que quieras revisar después.
            </p>
            <a :href="catalogUrl" class="mt-6 inline-flex cursor-pointer items-center gap-2 rounded-xl bg-ferro-yellow-500 px-6 py-3 text-sm font-bold text-ferro-black transition-colors hover:bg-ferro-yellow-700">
                Explorar catálogo
            </a>
        </div>

        <div v-else-if="!filteredFavorites.length" class="rounded-2xl border border-ferro-carbon-100 bg-ferro-white p-10 text-center">
            <p class="font-heading font-bold text-ferro-carbon-900">No encontramos coincidencias</p>
            <button type="button" class="mt-2 text-sm font-semibold text-ferro-yellow-700 hover:text-ferro-yellow-900" @click="search = ''">
                Limpiar búsqueda
            </button>
        </div>

        <div v-else class="grid grid-cols-1 gap-5 sm:grid-cols-2 lg:grid-cols-3">
            <article
                v-for="item in filteredFavorites"
                :key="item.key"
                class="group flex min-w-0 flex-col overflow-hidden rounded-2xl border border-ferro-carbon-100/60 bg-ferro-white shadow-sm transition-all duration-300 hover:-translate-y-1 hover:border-ferro-yellow-500/40 hover:shadow-lg"
            >
                <div class="relative aspect-4/3 overflow-hidden bg-ferro-steel-100">
                    <img :src="item.image" :alt="item.name" class="h-full w-full object-cover transition-transform duration-500 group-hover:scale-105" loading="lazy" decoding="async">
                    <span
                        v-if="item.type !== 'rental'"
                        class="absolute left-3 top-3 rounded-full bg-ferro-yellow-500 px-2.5 py-1 text-[10px] font-bold uppercase tracking-wider text-ferro-black"
                    >
                        {{ item.brand }}
                    </span>
                    <button
                        type="button"
                        class="absolute right-3 top-3 flex h-10 w-10 items-center justify-center rounded-full bg-ferro-yellow-500 text-ferro-black shadow-md transition-all duration-300 hover:scale-105 hover:bg-ferro-danger hover:text-ferro-white"
                        aria-label="Eliminar de favoritos"
                        @click="remove(item.key)"
                    >
                        <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path d="m12 21.35-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09A5.99 5.99 0 0 1 16.5 3C19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35Z" />
                        </svg>
                    </button>
                </div>

                <div class="flex flex-1 flex-col p-5">
                    <h3 class="line-clamp-2 min-h-11 font-heading text-base font-bold leading-snug text-ferro-carbon-900">{{ item.name }}</h3>
                    <p class="mt-1 line-clamp-2 flex-1 text-xs leading-relaxed text-ferro-steel-500">{{ item.description }}</p>

                    <div v-if="item.type === 'rental' && item.prices.length" class="mt-5 grid grid-cols-3 gap-2">
                        <div v-for="price in item.prices" :key="price.label" class="rounded-lg bg-ferro-steel-100 px-2 py-2.5 text-center">
                            <span class="block text-[9px] font-bold uppercase tracking-wide text-ferro-steel-500">{{ price.label }}</span>
                            <span class="mt-0.5 block font-heading text-xs font-bold text-ferro-carbon-900">{{ formatPrice(price.value, true) }}</span>
                        </div>
                    </div>

                    <div v-else class="mt-4 border-t border-ferro-carbon-100/50 pt-4">
                        <p class="font-heading text-xl font-bold tracking-tight text-ferro-carbon-900">{{ formatPrice(item.price) }}</p>
                    </div>

                    <BtnVisualizar class="mt-4" :text="item.type === 'rental' ? 'Ver Disponibilidad' : 'Visualizar Producto'" />
                </div>
            </article>
        </div>
    </div>
</template>
