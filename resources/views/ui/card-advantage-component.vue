<!--
    ==========================================================
    COMPONENTE: TARJETA DE VENTAJA
    ==========================================================
    Muestra una tarjeta con icono, título y descripción.
    Fondo azul industrial, iconos profesionales SVG.
    ==========================================================
-->

<script setup>
import { ref } from 'vue'

/**
 * ==========================================================
 * DATOS DE VENTAJAS
 * ==========================================================
 */
const advantages = ref([
    {
        id: 1,
        icon: 'M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z',
        title: 'Asesoría especializada',
        description: 'Equipo técnico que te guía según tu proyecto y presupuesto.',
    },
    {
        id: 2,
        icon: 'M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10',
        title: 'Amplio inventario',
        description: 'Más de 10.000 productos de las mejores marcas del sector.',
    },
    {
        id: 3,
        icon: 'M13 10V3L4 14h7v7l9-11h-7z',
        title: 'Entregas rápidas',
        description: 'Despacho a obra y cobertura nacional con seguimiento.',
    },
    {
        id: 4,
        icon: 'M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z',
        title: 'Herramientas certificadas',
        description: 'Calidad garantizada y normas de seguridad industrial.',
    },
    {
        id: 5,
        icon: 'M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z',
        title: 'Equipos profesionales',
        description: 'Maquinaria para uso intensivo y exigente en obra.',
    },
    {
        id: 6,
        icon: 'M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z',
        title: 'Atención empresarial',
        description: 'Cuentas corporativas, crédito y cotizaciones a medida.',
    },
])
</script>

<template>
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 sm:gap-8">
        <div 
            v-for="advantage in advantages" 
            :key="advantage.id"
            class="bg-white/10 backdrop-blur-sm rounded-2xl p-6 sm:p-7 border border-white/10 hover:border-ferro-yellow-500/30 transition-all duration-300 group hover:bg-white/15"
        >
            <!-- ICONO -->
            <div class="w-12 h-12 sm:w-14 sm:h-14 rounded-full bg-ferro-yellow-500/20 flex items-center justify-center mb-4 group-hover:bg-ferro-yellow-500/30 transition-colors duration-300">
                <svg 
                    class="w-6 h-6 sm:w-7 sm:h-7 text-ferro-yellow-500 group-hover:scale-110 transition-transform duration-300" 
                    fill="none" 
                    stroke="currentColor" 
                    viewBox="0 0 24 24"
                    stroke-width="1.5"
                >
                    <path stroke-linecap="round" stroke-linejoin="round" :d="advantage.icon" />
                </svg>
            </div>

            <!-- TÍTULO -->
            <h3 class="text-base sm:text-lg font-heading font-bold text-white">
                {{ advantage.title }}
            </h3>

            <!-- DESCRIPCIÓN -->
            <p class="mt-2 text-sm sm:text-base text-white/70 font-body leading-relaxed">
                {{ advantage.description }}
            </p>

        </div>
    </div>
</template>