<!--
    ==========================================================
    COMPONENTE: TARJETA DE MARCA
    ==========================================================
    Muestra las marcas aliadas en un carrusel doble.
    ==========================================================
-->

<script setup>
import { ref } from 'vue'

/**
 * ==========================================================
 * DATOS DE MARCAS
 * ==========================================================
 */
const brands = ref([
    { id: 1, name: 'Walt', position: 1 },
    { id: 2, name: 'WeldMaster', position: 1 },
    { id: 3, name: 'AirForce', position: 1 },
    { id: 4, name: 'SafeLine', position: 1 },
    { id: 5, name: 'Hilti', position: 1 },
    { id: 6, name: 'Stanley', position: 1 },
    { id: 7, name: 'Truper', position: 1 },
    { id: 8, name: 'Karcher', position: 1 },
    { id: 9, name: 'NovaPower', position: 1 },
    { id: 10, name: 'Bosch', position: 1 },
    { id: 11, name: 'Makita', position: 1 },
    { id: 12, name: 'DeWalt', position: 1 },
    
    { id: 13, name: 'Walt', position: 2 },
    { id: 14, name: 'WeldMaster', position: 2 },
    { id: 15, name: 'AirForce', position: 2 },
    { id: 16, name: 'SafeLine', position: 2 },
    { id: 17, name: 'Hilti', position: 2 },
    { id: 18, name: 'Stanley', position: 2 },
    { id: 19, name: 'Truper', position: 2 },
    { id: 20, name: 'Karcher', position: 2 },
    { id: 21, name: 'NovaPower', position: 2 },
    { id: 22, name: 'Bosch', position: 2 },
    { id: 23, name: 'Makita', position: 2 },
    { id: 24, name: 'DeWalt', position: 2 },
])

/**
 * ==========================================================
 * FILTROS POR POSICIÓN
 * ==========================================================
 */
const topBrands = ref(brands.value.filter(b => b.position === 1))
const bottomBrands = ref(brands.value.filter(b => b.position === 2))

/**
 * ==========================================================
 * DUPLICAR MARCAS PARA EFECTO INFINITO
 * ==========================================================
 */
const duplicatedTop = ref([...topBrands.value, ...topBrands.value, ...topBrands.value])
const duplicatedBottom = ref([...bottomBrands.value, ...bottomBrands.value, ...bottomBrands.value])
</script>

<template>
    <div class="w-full overflow-hidden">
        
        <!-- FILA SUPERIOR (se mueve a la derecha) -->
        <div class="flex gap-12 sm:gap-16 md:gap-20 lg:gap-24 animate-scroll-right">
            <span 
                v-for="brand in duplicatedTop" 
                :key="brand.id + '-top'"
                class="text-ferro-steel-300 text-2xl sm:text-3xl md:text-4xl lg:text-7xl font-heading font-bold whitespace-nowrap tracking-wide hover:text-ferro-yellow-500 transition-colors duration-300"
            >
                {{ brand.name }}
            </span>
        </div>

        <!-- FILA INFERIOR (se mueve a la izquierda) -->
        <div class="flex gap-12 sm:gap-16 md:gap-20 lg:gap-24 mt-6 sm:mt-8 md:mt-10 animate-scroll-left">
            <span 
                v-for="brand in duplicatedBottom" 
                :key="brand.id + '-bottom'"
                class="text-ferro-steel-300 text-2xl sm:text-3xl md:text-4xl lg:text-7xl font-heading font-bold whitespace-nowrap tracking-wide hover:text-ferro-yellow-500 transition-colors duration-300"
            >
                {{ brand.name }}
            </span>
        </div>

    </div>
</template>

<style scoped>
/* ==========================================================
    ANIMACIONES INFINITAS
    ========================================================== */
@keyframes scroll-right {
    0% {
        transform: translateX(-33.33%);
    }
    100% {
        transform: translateX(0%);
    }
}

@keyframes scroll-left {
    0% {
        transform: translateX(0%);
    }
    100% {
        transform: translateX(-33.33%);
    }
}

.animate-scroll-right {
    animation: scroll-right 30s linear infinite;
    width: max-content;
}

.animate-scroll-left {
    animation: scroll-left 30s linear infinite;
    width: max-content;
}

/* ==========================================================
    PAUSA AL HOVER
    ========================================================== */
.animate-scroll-right:hover,
.animate-scroll-left:hover {
    animation-play-state: paused;
}
</style>