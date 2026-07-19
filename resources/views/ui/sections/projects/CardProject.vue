<!--
    ==========================================================
    COMPONENTE: TARJETA DE PROYECTO (GALERÍA DESCRIPTIVA)
    ==========================================================
-->

<script setup>
import { ref, computed } from 'vue'

const projects = ref([
    {
        id: 1,
        title: 'Residencial Los Pinos',
        client: 'Constructora ARQ S.A.',
        category: 'Obra civil',
        year: '2024',
        status: 'Completado',
        description: 'Suministro completo de acero estructural, tuberías de cobre, grifería industrial y sistema de bombeo para el complejo de 8 torres.',
        image: '/asset/sections/index-projects/projects/imagen-project.webp',
    },
    {
        id: 2,
        title: 'Planta Industrial Metálica',
        client: 'Ingeniería S.A.S.',
        category: 'Industrial',
        year: '2023',
        status: 'Completado',
        description: 'Provisión de equipos de soldadura industrial, motobombas de alta presión, y tubería para el sistema de enfriamiento.',
        image: '/asset/sections/index-projects/projects/imagen-project.webp',
    },
    {
        id: 3,
        title: 'Edificio Torre 360',
        client: 'Constructora Alianza',
        category: 'Infraestructura',
        year: '2025',
        status: 'En proceso',
        description: 'Suministro de material eléctrico, canaletas, iluminación LED industrial y sistemas de seguridad perimetral.',
        image: '/asset/sections/index-projects/projects/imagen-project.webp',
    },
    {
        id: 4,
        title: 'Centro Comercial Plaza Norte',
        client: 'Grupo Inmobiliario Alpha',
        category: 'Comercial',
        year: '2023',
        status: 'Completado',
        description: 'Instalación completa de sistemas de iluminación, cableado estructurado, y equipos de seguridad.',
        image: '/asset/sections/index-projects/projects/imagen-project.webp',
    },
    {
        id: 5,
        title: 'Puente Vial del Sur',
        client: 'Consorcio Vial S.A.',
        category: 'Infraestructura vial',
        year: '2024',
        status: 'Completado',
        description: 'Suministro de acero de refuerzo, pernos de anclaje de alta resistencia y sistemas de iluminación vial LED.',
        image: '/asset/sections/index-projects/projects/imagen-project.webp',
    },
    {
        id: 6,
        title: 'Planta de Energía Solar',
        client: 'Energía Limpia S.A.S.',
        category: 'Energía',
        year: '2025',
        status: 'En proceso',
        description: 'Provisión de estructura metálica, cableado subterráneo de alta tensión y sistemas de puesta a tierra.',
        image: '/asset/sections/index-projects/projects/imagen-project.webp',
    }
])

// Filtros (para más adelante)
const searchQuery = ref('')
const selectedCategory = ref('Todos')

const filteredProjects = computed(() => {
    let result = projects.value
    if (searchQuery.value) {
        result = result.filter(p => p.title.toLowerCase().includes(searchQuery.value.toLowerCase()))
    }
    if (selectedCategory.value !== 'Todos') {
        result = result.filter(p => p.category === selectedCategory.value)
    }
    return result
})
</script>

<template>
    <div class="flex flex-col gap-8 w-full">
        <div v-for="project in filteredProjects" :key="project.id" class="group bg-ferro-white rounded-2xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 border border-ferro-carbon-100/40 hover:border-ferro-yellow-500/30 flex flex-col md:flex-row w-full">
            
            <!-- IMAGEN -->
            <div class="relative w-full md:w-[40%] lg:w-[35%] aspect-16/10aspect-square lg:aspect-4/3 overflow-hidden bg-ferro-steel-100 shrink-0">
                <img :src="project.image" :alt="project.title" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105" loading="lazy" decoding="async">
                <div class="absolute top-4 right-4 bg-ferro-yellow-500 text-ferro-black text-[10px] font-bold px-3 py-1 rounded-full uppercase tracking-wider">
                    {{ project.status }}
                </div>
            </div>

            <!-- CONTENIDO (Sin botón, solo galería descriptiva) -->
            <div class="p-6 md:p-8 flex flex-col flex-1 justify-center">
                <h3 class="font-heading text-2xl font-bold text-ferro-carbon-900 mb-1 tracking-tight">{{ project.title }}</h3>
                <p class="text-xs text-ferro-steel-400 font-medium mb-2 uppercase tracking-wider">{{ project.client }}</p>
                <p class="text-sm text-ferro-steel-500 leading-relaxed mb-3">{{ project.description }}</p>
                <div class="flex items-center gap-4 text-xs text-ferro-steel-400 font-description border-t border-ferro-carbon-100/40 pt-3">
                    <span>{{ project.year }}</span>
                    <span class="w-1 h-1 rounded-full bg-ferro-steel-300"></span>
                    <span>{{ project.category }}</span>
                </div>
            </div>
        </div>
    </div>
</template>