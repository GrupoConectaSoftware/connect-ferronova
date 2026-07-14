<!--
    ==========================================================
    COMPONENTE: TARJETA DE MIEMBRO DEL EQUIPO (CARD-TEAM)
    ==========================================================
-->

<script setup>
import { ref } from 'vue'

// Arreglo de 6 miembros del equipo (misma imagen para maqueta)
const teamMembers = ref([
    {
        name: 'Carlos Gómez',
        role: 'Operador de Ventas',
        text: 'El que hace realidad los sueños constructivos. Su misión es garantizar que cada pedido llegue a tu obra en tiempo récord.',
        image: 'asset/sections/index-nosotros/teams-about/imagen-teams.png'
    },
    {
        name: 'Laura Martínez',
        role: 'Gerente de Alquiler y Ventas',
        text: 'Apasionada por encontrar la maquinaria perfecta para cada desafío en tu obra, brindando soluciones a la medida.',
        image: 'asset/sections/index-nosotros/teams-about/imagen-teams.png'
    },
    {
        name: 'Andrés Rojas',
        role: 'Jefe de Logística y Suministros',
        text: 'Garantizando que cada suministro esté en tu puerta cuando más lo necesitas, sin importar el tamaño del pedido.',
        image: 'asset/sections/index-nosotros/teams-about/imagen-teams.png'
    },
    {
        name: 'Valentina Sánchez',
        role: 'Atención al Cliente',
        text: 'Con una sonrisa y una solución para cada consulta, porque sabemos que tu confianza es el motor de nuestra empresa.',
        image: 'asset/sections/index-nosotros/teams-about/imagen-teams.png'
    },
    {
        name: 'Jorge Pérez',
        role: 'Jefe de Mantenimiento',
        text: 'El experto que mantiene nuestra flota y maquinaria en perfecto estado, para que tú solo te preocupes de construir.',
        image: 'asset/sections/index-nosotros/teams-about/imagen-teams.png'
    },
    {
        name: 'María Herrera',
        role: 'Asesora Técnica',
        text: 'La mente detrás de cada solución técnica. Te ayuda a elegir el equipo exacto para tu proyecto con precisión quirúrgica.',
        image: 'asset/sections/index-nosotros/teams-about/imagen-teams.png'
    }
])
</script>

<template>
    <div class="flex gap-4 sm:gap-6 w-full">
        <!-- 
            Renderizamos cada miembro del equipo con un :key único.
            Usamos index para asegurar que Vue no se confunda al renderizar.
        -->
        <div 
            v-for="(member, index) in teamMembers" 
            :key="'team-' + index"
            class="relative w-65 lg:w-75 h-100 lg:h-105 rounded-lg overflow-hidden bg-ferro-white shadow-lg shadow-ferro-carbon-900/10 shrink-0 snap-center"
        >
            <img :src="member.image" :alt="member.name" class="w-full h-full object-cover">
            
            <div class="absolute inset-0 bg-linear-to-t from-ferro-carbon-900/85 via-ferro-carbon-900/30 to-transparent"></div>
            
            <div class="absolute bottom-6 lg:bottom-7 left-6 lg:left-7 right-6 lg:right-7 text-ferro-white">
                <h4 class="font-heading text-lg lg:text-xl font-bold tracking-tight mb-0.5">{{ member.name }}</h4>
                <p class="font-description text-xs text-ferro-steel-300 leading-snug">{{ member.role }}</p>
                <p class="font-description text-[11px] text-ferro-steel-400/80 mt-2 leading-relaxed line-clamp-2">
                    {{ member.text }}
                </p>
            </div>
        </div>
    </div>
</template>