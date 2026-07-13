<!--
    ==========================================================
    COMPONENTE: TARJETA DE PRODUCTO POR UNIDAD (UNITED)
    ==========================================================
    - 15 Productos mockeados.
    - Misma imagen unificada.
    - Botón de VISUALIZAR (sin compras).
    - Precio por Unidad y Precio por Caja.
    - Scroll horizontal en móviles / Grid en escritorio.
-->

<script setup>
import { ref } from 'vue'

const products = ref([
    {
        id: 1,
        name: 'Tornillo drywall 1"',
        description: 'Punta fina, fosfatado. Ideal para fijación de placas de yeso.',
        unitPrice: 80,
        boxPrice: 7000,
        boxQuantity: 100,
        image: 'asset/sections/index-unidad/producto/imagen-unidad.png',
    },
    {
        id: 2,
        name: 'Tornillo autoperforante 5/8"',
        description: 'Cabeza hexagonal, zincado. Para metal y madera.',
        unitPrice: 120,
        boxPrice: 11000,
        boxQuantity: 100,
        image: 'asset/sections/index-unidad/producto/imagen-unidad.png',
    },
    {
        id: 3,
        name: 'Arandela plana 1/4"',
        description: 'Acero galvanizado. Distribuye la carga de la fijación.',
        unitPrice: 60,
        boxPrice: 5500,
        boxQuantity: 100,
        image: 'asset/sections/index-unidad/producto/imagen-unidad.png',
    },
    {
        id: 4,
        name: 'Arandela de presión 3/8"',
        description: 'Acero templado. Evita el aflojamiento por vibración.',
        unitPrice: 90,
        boxPrice: 8000,
        boxQuantity: 100,
        image: 'asset/sections/index-unidad/producto/imagen-unidad.png',
    },
    {
        id: 5,
        name: 'Clavo de acero 2"',
        description: 'Cabeza plana, acabado liso. Para construcción general.',
        unitPrice: 50,
        boxPrice: 4500,
        boxQuantity: 100,
        image: 'asset/sections/index-unidad/producto/imagen-unidad.png',
    },
    {
        id: 6,
        name: 'Tuerca hexágonal M6',
        description: 'Acero inoxidable. Uso industrial y automotriz.',
        unitPrice: 45,
        boxPrice: 3800,
        boxQuantity: 100,
        image: 'asset/sections/index-unidad/producto/imagen-unidad.png',
    },
    {
        id: 7,
        name: 'Perno hexágonal 1/2"',
        description: 'Grado 5, zincado. Alta resistencia mecánica.',
        unitPrice: 180,
        boxPrice: 16000,
        boxQuantity: 100,
        image: 'asset/sections/index-unidad/producto/imagen-unidad.png',
    },
    {
        id: 8,
        name: 'Taco de expansión 3/8"',
        description: 'Nylon reforzado. Para anclajes en concreto y ladrillo.',
        unitPrice: 110,
        boxPrice: 9500,
        boxQuantity: 100,
        image: 'asset/sections/index-unidad/producto/imagen-unidad.png',
    },
    {
        id: 9,
        name: 'Tornillo cabeza avellanada 2"',
        description: 'Acero inoxidable, ideal para ensamble de muebles.',
        unitPrice: 95,
        boxPrice: 8200,
        boxQuantity: 100,
        image: 'asset/sections/index-unidad/producto/imagen-unidad.png',
    },
    {
        id: 10,
        name: 'Arandela grower 1/2"',
        description: 'Resistente, evita el giro de tuercas en maquinaria pesada.',
        unitPrice: 75,
        boxPrice: 6400,
        boxQuantity: 100,
        image: 'asset/sections/index-unidad/producto/imagen-unidad.png',
    },
    {
        id: 11,
        name: 'Perno hexágonal 3/4"',
        description: 'Grado 8, ideal para estructuras de acero.',
        unitPrice: 280,
        boxPrice: 25500,
        boxQuantity: 100,
        image: 'asset/sections/index-unidad/producto/imagen-unidad.png',
    },
    {
        id: 12,
        name: 'Tuerca ciega M8',
        description: 'Inoxidable, acabado redondeado. Uso estético y estructural.',
        unitPrice: 55,
        boxPrice: 4800,
        boxQuantity: 100,
        image: 'asset/sections/index-unidad/producto/imagen-unidad.png',
    },
    {
        id: 13,
        name: 'Clavo de acero 4"',
        description: 'Cabeza de gota de sebo. Para unión de maderas gruesas.',
        unitPrice: 110,
        boxPrice: 9900,
        boxQuantity: 100,
        image: 'asset/sections/index-unidad/producto/imagen-unidad.png',
    },
    {
        id: 14,
        name: 'Taco químico 12mm',
        description: 'Anclaje de alta resistencia para concreto y roca.',
        unitPrice: 220,
        boxPrice: 19500,
        boxQuantity: 100,
        image: 'asset/sections/index-unidad/producto/imagen-unidad.png',
    },
    {
        id: 15,
        name: 'Tornillo autoperforante 3"',
        description: 'Punta broca, zincado amarillo. Para lámina y metal.',
        unitPrice: 160,
        boxPrice: 14500,
        boxQuantity: 100,
        image: 'asset/sections/index-unidad/producto/imagen-unidad.png',
    }
])

const formattedPrice = (value) => {
    if (!value) return ''
    return new Intl.NumberFormat('es-CO', {
        style: 'currency',
        currency: 'COP',
        minimumFractionDigits: 0,
    }).format(value)
}
</script>

<template>
    <!-- 
        CONTENEDOR PRINCIPAL
        Móvil: Flex row (deslizable). 
        Escritorio: Grid (columnas fijas).
    -->
    <div class="flex overflow-x-auto gap-4 px-1 py-2 snap-x snap-mandatory scroll-smooth no-scrollbar sm:grid sm:grid-cols-2 lg:grid-cols-4 sm:gap-6 sm:overflow-visible sm:px-0">
        
        <div v-for="product in products" :key="product.id"
            class="min-w-[85%] sm:min-w-0 shrink-0 sm:flex-shrink-auto snap-center bg-ferro-white rounded-2xl shadow-[0_4px_20px_rgba(0,0,0,0.03)] hover:shadow-[0_20px_40px_rgba(0,0,0,0.07)] transition-all duration-300 border border-ferro-carbon-100/40 hover:border-ferro-yellow-500/30 p-4 sm:p-5 flex flex-col h-full">

            <!-- IMAGEN -->
            <div class="relative aspect-square bg-ferro-steel-50/50 rounded-xl overflow-hidden mb-4 border border-ferro-carbon-100/20">
                <img 
                    :src="product.image" 
                    :alt="product.name"
                    class="w-full h-full object-cover transition-transform duration-500 hover:scale-105"
                    loading="lazy"
                />
            </div>

            <!-- CONTENIDO -->
            <div class="flex flex-col flex-1">
                
                <!-- NOMBRE -->
                <h3 class="text-base sm:text-lg font-bold text-ferro-carbon-900 line-clamp-1 font-heading tracking-tight">
                    {{ product.name }}
                </h3>

                <!-- DESCRIPCIÓN -->
                <p class="text-xs sm:text-sm text-ferro-steel-500 mt-1 line-clamp-2 font-body leading-relaxed">
                    {{ product.description }}
                </p>

                <!-- PRECIOS (UNIDAD Y CAJA) -->
                <div class="mt-4 space-y-1 border-t border-ferro-carbon-100/20 pt-3">
                    <div class="flex justify-between items-baseline">
                        <span class="text-[10px] sm:text-xs text-ferro-steel-500 font-medium font-body uppercase tracking-wide">Unidad:</span>
                        <span class="text-base sm:text-lg font-bold text-ferro-carbon-900 font-heading">
                            {{ formattedPrice(product.unitPrice) }}
                        </span>
                    </div>
                    
                    <div class="flex justify-between items-baseline">
                        <span class="text-[10px] sm:text-xs text-ferro-steel-500 font-medium font-body uppercase tracking-wide">
                            Caja (x{{ product.boxQuantity }}):
                        </span>
                        <span class="text-sm sm:text-base font-semibold text-ferro-yellow-600 font-heading">
                            {{ formattedPrice(product.boxPrice) }}
                        </span>
                    </div>
                </div>

                <!-- BOTÓN ÚNICO: VISUALIZAR -->
                <button
                    class="mt-4 w-full bg-ferro-carbon-900 hover:bg-ferro-carbon-800 text-ferro-white text-sm font-semibold py-2.5 sm:py-3 rounded-xl transition-all duration-300 flex items-center justify-center gap-2 font-heading shadow-[0_4px_14px_0_rgba(2,6,23,0.15)] hover:shadow-[0_8px_20px_0_rgba(2,6,23,0.25)] hover:-translate-y-0.5 active:scale-95">
                    <svg class="w-4 h-4 sm:w-5 sm:h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                    </svg>
                    <span class="xs:inline">Visualizar Producto</span>
                </button>

            </div>
        </div>
    </div>
</template>

<style scoped>
/* Ocultar la barra de scroll nativa de los navegadores para que se vea limpio */
.no-scrollbar::-webkit-scrollbar {
    display: none;
}
.no-scrollbar {
    -ms-overflow-style: none;
    scrollbar-width: none;
}
</style>