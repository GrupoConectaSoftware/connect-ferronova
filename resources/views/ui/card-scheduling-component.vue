<!--
    ==========================================================
    COMPONENTE: TARJETA DE AGENDAMIENTO
    ==========================================================
    Muestra una tarjeta con imagen, nombre, descripción,
    precios por hora/día/semana y botón "Visualizar producto".
    ==========================================================
-->

<script setup>
import { ref } from 'vue'

/**
 * ==========================================================
 * DATOS DE EQUIPOS PARA ALQUILER (20 EQUIPOS)
 * ==========================================================
 */
const rentals = ref([
    {
        id: 1,
        name: 'Cimentera 350L',
        description: 'Mezcladora de concreto a gasolina',
        prices: [
            { label: 'Hora', value: 15000 },
            { label: 'Día', value: 95000 },
            { label: 'Semana', value: 450000 },
        ],
        image: 'asset/rentals/cimentera.jpg',
    },
    {
        id: 2,
        name: 'Compactadora vibratoria',
        description: 'Plancha compactadora 100kg',
        prices: [
            { label: 'Hora', value: 20000 },
            { label: 'Día', value: 120000 },
            { label: 'Semana', value: 550000 },
        ],
        image: 'asset/rentals/compactadora.jpg',
    },
    {
        id: 3,
        name: 'Cortadora de piso',
        description: 'Disco diamante 18"',
        prices: [
            { label: 'Hora', value: 25000 },
            { label: 'Día', value: 140000 },
            { label: 'Semana', value: 650000 },
        ],
        image: 'asset/rentals/cortadora-piso.jpg',
    },
    {
        id: 4,
        name: 'Andamio tubular 6m',
        description: 'Andamio modular con ruedas',
        prices: [
            { label: 'Hora', value: 12000 },
            { label: 'Día', value: 85000 },
            { label: 'Semana', value: 380000 },
        ],
        image: 'asset/rentals/andamio.jpg',
    },
    {
        id: 5,
        name: 'Taladro demoledor SDS Max',
        description: '65J de impacto, maletín incluido',
        prices: [
            { label: 'Hora', value: 18000 },
            { label: 'Día', value: 110000 },
            { label: 'Semana', value: 500000 },
        ],
        image: 'asset/rentals/taladro-demoledor.jpg',
    },
    {
        id: 6,
        name: 'Compresor portátil 8L',
        description: 'Silencioso, ideal para trabajos rápidos',
        prices: [
            { label: 'Hora', value: 10000 },
            { label: 'Día', value: 65000 },
            { label: 'Semana', value: 280000 },
        ],
        image: 'asset/rentals/compresor.jpg',
    },
    {
        id: 7,
        name: 'Motobomba 6HP 2"',
        description: 'Bomba centrífuga de alta capacidad',
        prices: [
            { label: 'Hora', value: 15000 },
            { label: 'Día', value: 90000 },
            { label: 'Semana', value: 420000 },
        ],
        image: 'asset/rentals/motobomba.jpg',
    },
    {
        id: 8,
        name: 'Cargador frontal 1.2m³',
        description: 'Motor diesel, brazo articulado',
        prices: [
            { label: 'Hora', value: 75000 },
            { label: 'Día', value: 450000 },
            { label: 'Semana', value: 2100000 },
        ],
        image: 'asset/rentals/cargador-frontal.jpg',
    },
    {
        id: 9,
        name: 'Mini excavadora 2.5 ton',
        description: 'Motor Yanmar, desplazamiento hidrostático',
        prices: [
            { label: 'Hora', value: 85000 },
            { label: 'Día', value: 520000 },
            { label: 'Semana', value: 2400000 },
        ],
        image: 'asset/rentals/mini-excavadora.jpg',
    },
    {
        id: 10,
        name: 'Grúa horquilla 1.5 ton',
        description: 'Capacidad elevadora 1500kg, altura 3.5m',
        prices: [
            { label: 'Hora', value: 65000 },
            { label: 'Día', value: 380000 },
            { label: 'Semana', value: 1800000 },
        ],
        image: 'asset/rentals/grua-horquilla.jpg',
    },
    {
        id: 11,
        name: 'Sierra de mesa 1800W',
        description: 'Hoja 254mm, guía paralela ajustable',
        prices: [
            { label: 'Hora', value: 22000 },
            { label: 'Día', value: 130000 },
            { label: 'Semana', value: 580000 },
        ],
        image: 'asset/rentals/sierra-mesa.jpg',
    },
    {
        id: 12,
        name: 'Pulidora orbital 450W',
        description: 'Velocidad variable para acabados finos',
        prices: [
            { label: 'Hora', value: 12000 },
            { label: 'Día', value: 70000 },
            { label: 'Semana', value: 300000 },
        ],
        image: 'asset/rentals/pulidora-orbital.jpg',
    },
    {
        id: 13,
        name: 'Nivel láser autonivelante 360°',
        description: 'Líneas horizontales y verticales de alta precisión',
        prices: [
            { label: 'Hora', value: 18000 },
            { label: 'Día', value: 105000 },
            { label: 'Semana', value: 480000 },
        ],
        image: 'asset/rentals/nivel-laser.jpg',
    },
    {
        id: 14,
        name: 'Carretilla de carga 200 kg',
        description: 'Estructura reforzada con ruedas neumáticas',
        prices: [
            { label: 'Hora', value: 8000 },
            { label: 'Día', value: 45000 },
            { label: 'Semana', value: 190000 },
        ],
        image: 'asset/rentals/carretilla.jpg',
    },
    {
        id: 15,
        name: 'Hidrolavadora 1800 PSI',
        description: 'Ideal para limpieza industrial y automotriz',
        prices: [
            { label: 'Hora', value: 14000 },
            { label: 'Día', value: 82000 },
            { label: 'Semana', value: 360000 },
        ],
        image: 'asset/rentals/hidrolavadora.jpg',
    },
    {
        id: 16,
        name: 'Escalera multipropósito aluminio 4x4',
        description: 'Capacidad de carga hasta 150 kg',
        prices: [
            { label: 'Hora', value: 9000 },
            { label: 'Día', value: 50000 },
            { label: 'Semana', value: 220000 },
        ],
        image: 'asset/rentals/escalera.jpg',
    },
    {
        id: 17,
        name: 'Soldador inverter 200A',
        description: 'Tecnología IGBT para electrodos 6013 y 7018',
        prices: [
            { label: 'Hora', value: 16000 },
            { label: 'Día', value: 95000 },
            { label: 'Semana', value: 420000 },
        ],
        image: 'asset/rentals/soldador.jpg',
    },
    {
        id: 18,
        name: 'Generador eléctrico 3500W',
        description: 'Motor a gasolina, arranque manual',
        prices: [
            { label: 'Hora', value: 30000 },
            { label: 'Día', value: 180000 },
            { label: 'Semana', value: 850000 },
        ],
        image: 'asset/rentals/generador.jpg',
    },
    {
        id: 19,
        name: 'Trompo mezclador 5 pies³',
        description: 'Motor eléctrico, capacidad 140L',
        prices: [
            { label: 'Hora', value: 20000 },
            { label: 'Día', value: 120000 },
            { label: 'Semana', value: 550000 },
        ],
        image: 'asset/rentals/trompo-mezclador.jpg',
    },
    {
        id: 20,
        name: 'Cortadora de cerámica 1200W',
        description: 'Disco diamante, corte en seco y húmedo',
        prices: [
            { label: 'Hora', value: 18000 },
            { label: 'Día', value: 105000 },
            { label: 'Semana', value: 480000 },
        ],
        image: 'asset/rentals/cortadora-ceramica.jpg',
    },
])

/**
 * ==========================================================
 * HELPERS
 * ==========================================================
 */
const formatPrice = (value) => {
    return new Intl.NumberFormat('es-CO', {
        style: 'currency',
        currency: 'COP',
        minimumFractionDigits: 0,
    }).format(value)
}
</script>

<template>
    <!--
        ==========================================================
        MOBILE: SCROLL HORIZONTAL (1 FILA)
        DESKTOP: GRID CON SCROLL VERTICAL OCULTO
        ==========================================================
    -->
    <div class="flex sm:grid sm:grid-cols-2 lg:grid-cols-3 gap-4 sm:gap-6 overflow-x-auto sm:overflow-y-auto sm:overflow-x-hidden pb-4 sm:pb-0 snap-x snap-mandatory sm:snap-none"
         style="scrollbar-width: none; -ms-overflow-style: none; max-height: calc(3 * 280px + 2rem);">
        
        <div 
            v-for="rental in rentals" 
            :key="rental.id"
            class="snap-start shrink-0 w-64 sm:w-auto sm:min-w-0"
        >
            <div class="bg-ferro-white rounded-xl shadow-sm hover:shadow-lg transition-all duration-300 overflow-hidden border border-ferro-carbon-100/30 group h-full flex flex-col max-w-sm sm:max-w-none">
                
                <!-- IMAGEN -->
                <div class="relative aspect-4/3 bg-ferro-steel-50 overflow-hidden">
                    <img 
                        :src="rental.image" 
                        :alt="rental.name"
                        class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105"
                        loading="lazy"
                    />
                    <div class="absolute top-3 left-3">
                        <span class="text-[10px] font-description font-bold uppercase tracking-wider px-2 py-0.5 rounded-full bg-ferro-yellow-500 text-ferro-black">
                            Alquiler
                        </span>
                    </div>
                </div>

                <!-- CONTENIDO -->
                <div class="p-4 sm:p-5 flex-1 flex flex-col">
                    <h3 class="text-sm sm:text-base font-heading font-bold text-ferro-carbon-900 line-clamp-1">
                        {{ rental.name }}
                    </h3>
                    <p class="text-[11px] sm:text-xs text-ferro-steel-500 font-body mt-0.5 line-clamp-2 flex-1">
                        {{ rental.description }}
                    </p>
                    
                    <!-- PRECIOS (3: Hora, Día, Semana) -->
                    <div class="mt-3 grid grid-cols-3 gap-1.5">
                        <div 
                            v-for="price in rental.prices" 
                            :key="price.label"
                            class="bg-ferro-steel-50 rounded-lg px-2 py-1.5 text-center"
                        >
                            <span class="text-[8px] sm:text-[9px] text-ferro-steel-400 font-body uppercase tracking-wider block">
                                {{ price.label }}
                            </span>
                            <span class="text-xs sm:text-sm font-heading font-bold text-ferro-carbon-900">
                                {{ formatPrice(price.value) }}
                            </span>
                        </div>
                    </div>

                    <!-- BOTÓN VISUALIZAR PRODUCTO -->
                    <button class="mt-3 w-full bg-ferro-carbon-900 hover:bg-ferro-carbon-700 text-ferro-white text-xs sm:text-sm font-heading font-semibold py-2.5 rounded-lg transition-colors duration-200 flex items-center justify-center gap-2">
                        <svg class="w-4 h-4 sm:w-5 sm:h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                        </svg>
                        Visualizar producto
                    </button>
                </div>

            </div>
        </div>
    </div>
</template>