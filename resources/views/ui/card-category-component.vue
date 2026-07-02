<!--
    ==========================================================
    COMPONENTE: TARJETA DE CATEGORÍA
    ==========================================================
    Muestra una tarjeta con imagen de fondo y texto superpuesto.
    ==========================================================
-->

<script setup>
import { ref } from 'vue'

/**
 * ==========================================================
 * DATOS DE CATEGORÍAS (20 CATEGORÍAS)
 * ==========================================================
 */
const categories = ref([
    {
        id: 1,
        name: 'Herramientas eléctricas',
        image: 'asset/categories/herramientas-electricas.jpg',
        count: 1240,
    },
    {
        id: 2,
        name: 'Herramientas manuales',
        image: 'asset/categories/herramientas-manuales.jpg',
        count: 880,
    },
    {
        id: 3,
        name: 'Seguridad industrial',
        image: 'asset/categories/seguridad-industrial.jpg',
        count: 640,
    },
    {
        id: 4,
        name: 'Equipos de construcción',
        image: 'asset/categories/equipos-construccion.jpg',
        count: 410,
    },
    {
        id: 5,
        name: 'Materiales eléctricos',
        image: 'asset/categories/materiales-electricos.jpg',
        count: 320,
    },
    {
        id: 6,
        name: 'Tornillería y fijaciones',
        image: 'asset/categories/tornilleria.jpg',
        count: 560,
    },
    {
        id: 7,
        name: 'Maquinaria pesada',
        image: 'asset/categories/maquinaria-pesada.jpg',
        count: 180,
    },
    {
        id: 8,
        name: 'Pinturas y acabados',
        image: 'asset/categories/pinturas-acabados.jpg',
        count: 290,
    },
    {
        id: 9,
        name: 'Jardinería y paisajismo',
        image: 'asset/categories/jardineria-paisajismo.jpg',
        count: 150,
    },
    {
        id: 10,
        name: 'Equipos de medición',
        image: 'asset/categories/equipos-medicion.jpg',
        count: 210,
    },
    {
        id: 11,
        name: 'Cerrajería y candados',
        image: 'asset/categories/cerrajeria-candados.jpg',
        count: 95,
    },
    {
        id: 12,
        name: 'Iluminación industrial',
        image: 'asset/categories/iluminacion-industrial.jpg',
        count: 130,
    },
    {
        id: 13,
        name: 'Equipos de soldadura',
        image: 'asset/categories/equipos-soldadura.jpg',
        count: 75,
    },
    {
        id: 14,
        name: 'Andamios y estructuras',
        image: 'asset/categories/andamios-estructuras.jpg',
        count: 60,
    },
    {
        id: 15,
        name: 'Bombas y motobombas',
        image: 'asset/categories/bombas-motobombas.jpg',
        count: 110,
    },
    {
        id: 16,
        name: 'Mangueras y conexiones',
        image: 'asset/categories/mangueras-conexiones.jpg',
        count: 200,
    },
    {
        id: 17,
        name: 'Abrasivos y discos',
        image: 'asset/categories/abrasivos-discos.jpg',
        count: 140,
    },
    {
        id: 18,
        name: 'Organización y almacenaje',
        image: 'asset/categories/organizacion-almacenaje.jpg',
        count: 85,
    },
    {
        id: 19,
        name: 'Aire comprimido',
        image: 'asset/categories/aire-comprimido.jpg',
        count: 50,
    },
    {
        id: 20,
        name: 'Equipos de elevación',
        image: 'asset/categories/equipos-elevacion.jpg',
        count: 45,
    },
])
</script>

<template>
    <div 
        v-for="category in categories" 
        :key="category.id"
        class="snap-start shrink-0 w-56 sm:w-64 md:w-72 lg:w-80"
    >
        <div class="relative aspect-4/3 rounded-xl overflow-hidden shadow-sm hover:shadow-lg transition-all duration-300 group cursor-pointer">
            
            <!-- IMAGEN DE FONDO -->
            <img 
                :src="category.image" 
                :alt="category.name"
                class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105"
                loading="lazy"
            />

            <!-- OVERLAY OSCURO -->
            <div class="absolute inset-0 bg-linear-to-t from-ferro-black/70 via-ferro-black/20 to-transparent"></div>

            <!-- TEXTO SUPERPUESTO -->
            <div class="absolute inset-0 flex flex-col justify-end p-5 sm:p-6 md:p-7">
                <h3 class="text-base sm:text-lg md:text-xl font-heading font-bold text-ferro-white leading-tight">
                    {{ category.name }}
                </h3>
                <p class="text-xs sm:text-sm text-ferro-steel-300 font-body mt-1">
                    {{ category.count.toLocaleString('es-CO') }} productos
                </p>
            </div>

        </div>
    </div>
</template>