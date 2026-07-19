<!--
    ==========================================================
    COMPONENTE: TARJETA DE BLOG (CardBlog)
    ==========================================================
-->

<script setup>
import { ref, computed } from 'vue'

// Array de posts del Blog (Todos usan la misma imagen)
const posts = ref([
    {
        id: 1,
        title: 'Cómo elegir el taladro correcto para tu obra',
        excerpt: 'Guía completa para escoger entre percutor, rotomartillo e inalámbrico según el material y el tipo de trabajo.',
        category: 'Herramientas',
        date: '12 May 2026',
        readTime: '6 min',
        image: '/asset/sections/index-blog/blog/imagen-blog.webp'
    },
    {
        id: 2,
        title: 'Seguridad en trabajos de altura: lo esencial',
        excerpt: 'Normativa, equipos certificados y buenas prácticas para proteger a tu equipo en construcciones verticales.',
        category: 'Seguridad',
        date: '04 May 2026',
        readTime: '8 min',
        image: '/asset/sections/index-blog/blog/imagen-blog.webp'
    },
    {
        id: 3,
        title: 'Alquilar o comprar maquinaria: ¿qué conviene?',
        excerpt: 'Analizamos costos, mantenimiento y rentabilidad para tu proyecto de construcción.',
        category: 'Alquileres',
        date: '28 Abr 2026',
        readTime: '5 min',
        image: '/asset/sections/index-blog/blog/imagen-blog.webp'
    },
    {
        id: 4,
        title: 'Mantenimiento preventivo de motobombas',
        excerpt: 'Consejos clave para alargar la vida útil de tus equipos de bombeo y evitar fallos en obra.',
        category: 'Consejos técnicos',
        date: '20 Abr 2026',
        readTime: '4 min',
        image: '/asset/sections/index-blog/blog/imagen-blog.webp'
    },
    {
        id: 5,
        title: 'Tendencias en iluminación LED industrial',
        excerpt: 'Ahorro energético, durabilidad y mejores prácticas para iluminar espacios de trabajo.',
        category: 'Noticias',
        date: '12 Abr 2026',
        readTime: '3 min',
        image: '/asset/sections/index-blog/blog/imagen-blog.webp'
    },
    {
        id: 6,
        title: 'Cómo elegir el compresor de aire ideal',
        excerpt: 'Desde el tanque hasta la potencia, te explicamos qué tener en cuenta antes de comprar.',
        category: 'Maquinaria',
        date: '05 Abr 2026',
        readTime: '7 min',
        image: '/asset/sections/index-blog/blog/imagen-blog.webp'
    },
    {
        id: 7,
        title: 'Concreto: tipos y usos en la construcción',
        excerpt: 'Guía básica sobre los diferentes tipos de concreto y sus aplicaciones en obra.',
        category: 'Construcción',
        date: '30 Mar 2026',
        readTime: '6 min',
        image: '/asset/sections/index-blog/blog/imagen-blog.webp'
    }
])

// Props que recibirá desde el Blade
const props = defineProps({
    mode: {
        type: String,
        default: 'grid' // 'featured' (último post) o 'grid' (todos los posts)
    }
})

// Filtro por categoría (para usar en el layout-content-blog)
const selectedCategory = ref('Todos')

const categories = computed(() => {
    const cats = posts.value.map(p => p.category)
    return ['Todos', ...new Set(cats)]
})

const filteredPosts = computed(() => {
    if (selectedCategory.value === 'Todos') return posts.value
    return posts.value.filter(p => p.category === selectedCategory.value)
})

// Para el modo 'featured' (último post), siempre mostramos el primero del array filtrado
const featuredPost = computed(() => {
    return filteredPosts.value[0] || null
})

// Para el modo 'grid' (todos los posts), mostramos el resto (desde el índice 1)
const gridPosts = computed(() => {
    return filteredPosts.value.slice(1)
})
</script>

<template>
    <!-- ==========================================================
        MODO: ÚLTIMO POST (Featured)
        ========================================================== -->
    <div v-if="mode === 'featured' && featuredPost" class="w-full">
        <div class="group bg-ferro-white rounded-2xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 border border-ferro-carbon-100/40 hover:border-ferro-yellow-500/30 flex flex-col md:flex-row h-full">
            <div class="relative w-full md:w-[50%] aspect-16/10aspect-square overflow-hidden bg-ferro-steel-100 shrink-0">
                <img :src="featuredPost.image" :alt="featuredPost.title" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105" loading="lazy" decoding="async">
                <div class="absolute top-4 left-4 bg-ferro-yellow-500 text-ferro-black text-[10px] font-bold px-3 py-1 rounded-full uppercase tracking-wider">
                    {{ featuredPost.category }}
                </div>
            </div>
            <div class="p-6 md:p-8 flex flex-col flex-1 justify-center">
                <h3 class="font-heading text-2xl md:text-3xl font-bold text-ferro-carbon-900 mb-2 tracking-tight">{{ featuredPost.title }}</h3>
                <p class="text-sm text-ferro-steel-500 leading-relaxed mb-4">{{ featuredPost.excerpt }}</p>
                <div class="flex items-center gap-4 text-xs text-ferro-steel-400 font-description border-t border-ferro-carbon-100/40 pt-3 mb-4">
                    <span>{{ featuredPost.date }}</span>
                    <span class="w-1 h-1 rounded-full bg-ferro-steel-300"></span>
                    <span>{{ featuredPost.readTime }}</span>
                </div>
                <div class="flex flex-wrap gap-3">
                    <button class="flex items-center gap-2 bg-ferro-carbon-900 hover:bg-ferro-carbon-700 text-ferro-white text-sm font-medium px-5 py-2.5 rounded-lg transition-colors duration-200">
                        Leer artículo <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                    </button>
                    <button class="flex items-center gap-2 bg-ferro-whatsapp hover:bg-ferro-whatsapp/80 text-white text-sm font-medium px-5 py-2.5 rounded-lg transition-colors duration-200">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
                        Compartir
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- ==========================================================
        MODO: TODOS LOS POSTS (Grid - 3 columnas)
        ========================================================== -->
    <div v-if="mode === 'grid'" class="w-full">
        <!-- Filtros tipo chips (igual que en la imagen de referencia) -->
        <div class="flex flex-wrap items-center gap-2.5 mb-8 pb-4 border-b border-ferro-carbon-100/40">
            <button
                v-for="cat in categories"
                :key="cat"
                @click="selectedCategory = cat"
                :class="selectedCategory === cat ? 'bg-ferro-yellow-500 text-ferro-black' : 'bg-ferro-white border border-ferro-carbon-100/60 text-ferro-carbon-700 hover:border-ferro-yellow-500/50'"
                class="px-4 py-2 text-xs font-semibold rounded-full transition-all shadow-sm hover:shadow-md">
                {{ cat }}
            </button>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <div v-for="post in gridPosts" :key="post.id" class="group bg-ferro-white rounded-2xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 border border-ferro-carbon-100/40 hover:border-ferro-yellow-500/30 flex flex-col h-full">
                <div class="relative aspect-16/10 overflow-hidden bg-ferro-steel-100">
                    <img :src="post.image" :alt="post.title" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105" loading="lazy" decoding="async">
                    <div class="absolute top-3 left-3 bg-ferro-carbon-900 text-ferro-white text-[10px] font-bold px-2.5 py-1 rounded-full uppercase tracking-wider">
                        {{ post.category }}
                    </div>
                </div>
                <div class="p-5 flex flex-col flex-1">
                    <h3 class="font-heading text-lg font-bold text-ferro-carbon-900 mb-1.5 tracking-tight">{{ post.title }}</h3>
                    <p class="text-sm text-ferro-steel-500 leading-relaxed mb-3 flex-1">{{ post.excerpt }}</p>
                    <div class="flex items-center justify-between text-xs text-ferro-steel-400 font-description border-t border-ferro-carbon-100/40 pt-3 mt-auto">
                        <div class="flex items-center gap-3">
                            <span>{{ post.date }}</span>
                            <span class="w-1 h-1 rounded-full bg-ferro-steel-300"></span>
                            <span>{{ post.readTime }}</span>
                        </div>
                        <button class="flex items-center gap-1 text-ferro-yellow-600 hover:text-ferro-yellow-700 transition-colors">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.368 2.684 3 3 0 00-5.368-2.684z"/></svg>
                            Compartir
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
