<!-- ==========================================================
    COMPONENTE: ESTADÍSTICAS FERRANOVA
    ==========================================================
    Muestra las métricas en un grid automático
    ========================================================== -->

<script setup>
import { ref } from 'vue'

// ==========================================================
// DATOS DE ESTADÍSTICAS
// ==========================================================
// Agrega más objetos aquí para que se rendericen
// automáticamente en el grid.
const stats = ref([
    { id: 1, value: '+10.000', label: 'Productos en catálogo' },
    { id: 2, value: '+500',    label: 'Clientes empresariales' },
    { id: 3, value: '+200',    label: 'Equipos para alquiler' },
    { id: 4, value: '+5',      label: 'Años de experiencia' },
    // Agrega más stats aquí y el grid se ajustará automáticamente
    // { id: 5, value: '+1000', label: 'Proyectos completados' },
])
</script>

<template>
    
    <!-- ==========================================================
        GRID RESPONSIVE
        ==========================================================
        - grid-cols-2: 2 columnas en mobile
        - sm:grid-cols-3: 3 columnas en tablet
        - lg:grid-cols-4: 4 columnas en desktop
        ========================================================== -->
    <div 
        class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 gap-4 sm:gap-6 lg:gap-0"
        role="list"
    >
        <!-- ==========================================================
            ITERAR SOBRE CADA ESTADÍSTICA
            ========================================================== -->
        <div
            v-for="(stat, index) in stats"
            :key="stat.id"
            class="flex flex-col items-center justify-center py-6 px-2 sm:px-4 relative"
            :class="[
                // Bordes SOLO en desktop (lg)
                // Entre columnas, excepto en la última de cada fila (múltiplos de 4)
                'lg:border-r lg:border-ferro-gold-500/15',
                'lg:last:border-r-0',
                'lg:nth-[4n]:border-r-0'
            ]"
            role="listitem"
        >
            <!-- Valor numérico (amarillo FERRANOVA) -->
            <span 
                class="text-ferro-yellow-500 text-2xl sm:text-3xl md:text-4xl font-heading font-bold leading-tight"
                :aria-label="'Valor: ' + stat.value"
            >
                {{ stat.value }}
            </span>

            <!-- Etiqueta descriptiva (gris acero) -->
            <span 
                class="text-ferro-steel-300 text-[9px] sm:text-[10px] md:text-[11px] font-description font-semibold uppercase tracking-widest mt-1 text-center"
                :aria-label="stat.label"
            >
                {{ stat.label }}
            </span>
        </div>
    </div>
</template>