<!--
    ==========================================================
    COMPONENTE: TARJETA DE RESEÑA (CARRUSEL INFINITO)
    ==========================================================
    Carrusel suave, infinito y automático.
    Diseño profesional con comillas decorativas.
    ==========================================================
-->

<script setup>
import { ref } from 'vue'

/**
 * ==========================================================
 * DATOS DE RESEÑAS
 * ==========================================================
 */
const feedbacks = ref([
    {
        id: 1,
        name: 'Carlos Méndez',
        role: 'Director de Operaciones · Construcción Andina S.A.S.',
        rating: 5,
        comment: 'Equipos siempre disponibles y entrega puntual en obra. El asesoramiento técnico nos ahorró tiempo y dinero.',
    },
    {
        id: 2,
        name: 'Laura Restrepo',
        role: 'Ingeniera Civil · Ingeniería LR',
        rating: 5,
        comment: 'El catálogo es enorme y los precios para empresa son muy competitivos. El servicio de alquiler es impecable.',
    },
    {
        id: 3,
        name: 'Andrés Gómez',
        role: 'Contratista General · Independiente',
        rating: 5,
        comment: 'Compro mis herramientas aquí desde hace años. Calidad certificada y respaldo en garantía real.',
    },
    {
        id: 4,
        name: 'María Fernanda Rojas',
        role: 'Gerente de Compras · Grupo Constructor BC',
        rating: 5,
        comment: 'Su plataforma de cotización es rápida y el equipo de atención empresarial es muy profesional.',
    },
    {
        id: 5,
        name: 'Jorge Eduardo Torres',
        role: 'Supervisor de Obra · Construcciones el Pilar',
        rating: 5,
        comment: 'El alquiler de maquinaria pesada es muy práctico. Equipos en excelente estado y logística eficiente.',
    },
])

/**
 * ==========================================================
 * DUPLICAR PARA EFECTO INFINITO
 * ==========================================================
 */
const duplicatedFeedbacks = ref([...feedbacks.value, ...feedbacks.value, ...feedbacks.value])

/**
 * ==========================================================
 * HELPERS
 * ==========================================================
 */
const getInitials = (name) => {
    return name.split(' ').map(word => word[0]).join('').toUpperCase().slice(0, 2)
}

const getRatingStars = (rating) => {
    return '★'.repeat(rating) + '☆'.repeat(5 - rating)
}
</script>

<template>
    <div class="w-full overflow-hidden relative">
        
        <!-- ==========================================================
            CARRUSEL INFINITO
            ========================================================== -->
        <div 
            class="flex gap-4 sm:gap-6 animate-scroll-feedback"
            style="width: max-content;"
        >
            <div 
                v-for="feedback in duplicatedFeedbacks" 
                :key="feedback.id + '-feedback'"
                class="w-72 sm:w-80 md:w-96 shrink-0"
            >
                <div class="bg-ferro-white rounded-2xl p-6 sm:p-7 border border-ferro-carbon-100/10 shadow-sm hover:shadow-md transition-all duration-300 h-full relative">
                    
                    <!-- COMILLAS DECORATIVAS -->
                    <div class="absolute -top-1 right-3 text-ferro-yellow-500/20 font-heading text-6xl sm:text-7xl leading-none select-none">
                        "
                    </div>

                    <!-- ENCABEZADO -->
                    <div class="flex items-start gap-3 relative z-10">
                        <div class="w-10 h-10 rounded-full bg-ferro-yellow-500/10 flex items-center justify-center text-ferro-yellow-500 font-heading font-semibold text-sm shrink-0">
                            {{ getInitials(feedback.name) }}
                        </div>
                        <div class="min-w-0">
                            <h4 class="text-sm font-heading font-medium text-ferro-carbon-900 truncate">
                                {{ feedback.name }}
                            </h4>
                            <p class="text-[10px] text-ferro-steel-400 font-body truncate">
                                {{ feedback.role }}
                            </p>
                        </div>
                    </div>

                    <!-- CALIFICACIÓN -->
                    <div class="mt-3 relative z-10">
                        <span class="text-ferro-yellow-500 text-sm font-heading">
                            {{ getRatingStars(feedback.rating) }}
                        </span>
                    </div>

                    <!-- COMENTARIO (más claro) -->
                    <p class="mt-2 text-xs text-ferro-steel-500 font-body leading-relaxed line-clamp-3 relative z-10">
                        {{ feedback.comment }}
                    </p>

                </div>
            </div>
        </div> 

    </div>
</template>

<style scoped>
/* ==========================================================
    ANIMACIÓN INFINITA SUAVE
    ========================================================== */
@keyframes scroll-feedback {
    0% {
        transform: translateX(0);
    }
    100% {
        transform: translateX(-33.33%);
    }
}

.animate-scroll-feedback {
    animation: scroll-feedback 30s linear infinite;
}

/* ==========================================================
    PAUSA AL HOVER
    ========================================================== */
.animate-scroll-feedback:hover {
    animation-play-state: paused;
}
</style>