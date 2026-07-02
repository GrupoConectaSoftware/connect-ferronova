<!--
    ==========================================================
    COMPONENTE: TARJETA DE PRODUCTO
    ==========================================================
-->

<script setup>
import { ref, computed } from 'vue'

const products = ref([
    {
        id: 1,
        name: 'Taladro percutor inalámbrico 20V',
        description: 'Brushless, 2 baterías, maquinaria',
        price: 489000,
        originalPrice: 829000,
        discount: 22,
        badge: {
            recomendado: true,
            descuento: false,
            promocion: false,
        },
        image: 'asset/sections/productos/imagen-producto.jpg',
    },
    {
        id: 2,
        name: 'Esmeril angular 7" 2200W',
        description: 'Alto torque, guarda antichispas',
        price: 359000,
        originalPrice: 420000,
        discount: 18,
        badge: {
            recomendado: true,
            descuento: false,
            promocion: false,
        },
        image: 'asset/sections/productos/imagen-producto.jpg',
    },
    {
        id: 3,
        name: 'Sierra circular 9¼" industrial',
        description: 'Disco 235mm, base aluminio',
        price: 712000,
        originalPrice: null,
        discount: null,
        badge: {
            recomendado: true,
            descuento: false,
            promocion: false,
        },
        image: 'asset/sections/productos/imagen-producto.jpg',
    },
    {
        id: 4,
        name: 'Kit seguridad industrial completo',
        description: 'Casco, gafas, guantes, chaleco',
        price: 159000,
        originalPrice: 199000,
        discount: 20,
        badge: {
            recomendado: true,
            descuento: false,
            promocion: false,
        },
        image: 'asset/sections/productos/imagen-producto.jpg',
    },
    {
        id: 5,
        name: 'Martillo demoledor SDS Max 1700W',
        description: '65J de impacto, maletín incluido',
        price: 1899000,
        originalPrice: 2149000,
        discount: 12,
        badge: {
            recomendado: true,
            descuento: false,
            promocion: false,
        },
        image: 'asset/sections/productos/imagen-producto.jpg',
    },
    {
        id: 6,
        name: 'Compresor de aire 50L 2HP',
        description: 'Tanque horizontal, uso profesional',
        price: 1159000,
        originalPrice: 1299000,
        discount: 11,
        badge: {
            recomendado: true,
            descuento: false,
            promocion: true,
        },
        image: 'asset/sections/productos/imagen-producto.jpg',
    },
    {
        id: 7,
        name: 'Generador eléctrico 3500W',
        description: 'Motor a gasolina, arranque manual',
        price: 2399000,
        originalPrice: 2799000,
        discount: 14,
        badge: {
            recomendado: true,
            descuento: false,
            promocion: true,
        },
        image: 'asset/sections/productos/imagen-producto.jpg',
    },
    {
        id: 8,
        name: 'Pulidora orbital 450W',
        description: 'Velocidad variable para acabados finos',
        price: 349000,
        originalPrice: null,
        discount: null,
        badge: {
            recomendado: true,
            descuento: false,
            promocion: false,
        },
        image: 'asset/sections/productos/imagen-producto.jpg',
    },
    {
        id: 9,
        name: 'Nivel láser autonivelante 360°',
        description: 'Líneas horizontales y verticales de alta precisión',
        price: 589000,
        originalPrice: 699000,
        discount: 16,
        badge: {
            recomendado: true,
            descuento: false,
            promocion: true,
        },
        image: 'asset/sections/productos/imagen-producto.jpg',
    },
    {
        id: 10,
        name: 'Carretilla de carga 200 kg',
        description: 'Estructura reforzada con ruedas neumáticas',
        price: 459000,
        originalPrice: null,
        discount: null,
        badge: {
            recomendado: true,
            descuento: false,
            promocion: false,
        },
        image: 'asset/sections/productos/imagen-producto.jpg',
    },
    {
        id: 11,
        name: 'Juego de llaves combinadas 25 piezas',
        description: 'Acero cromo vanadio de alta resistencia',
        price: 289000,
        originalPrice: null,
        discount: null,
        badge: {
            recomendado: true,
            descuento: false,
            promocion: false,
        },
        image: 'asset/sections/productos/imagen-producto.jpg',
    },
    {
        id: 12,
        name: 'Hidrolavadora 1800 PSI',
        description: 'Ideal para limpieza industrial y automotriz',
        price: 529000,
        originalPrice: 649000,
        discount: 19,
        badge: {
            recomendado: true,
            descuento: false,
            promocion: false,
        },
        image: 'asset/sections/productos/imagen-producto.jpg',
    },
    {
        id: 13,
        name: 'Escalera multipropósito aluminio 4x4',
        description: 'Capacidad de carga hasta 150 kg',
        price: 649000,
        originalPrice: 759000,
        discount: 15,
        badge: {
            recomendado: true,
            descuento: false,
            promocion: false,
        },
        image: 'asset/sections/productos/imagen-producto.jpg',
    },
    {
        id: 14,
        name: 'Soldador inverter 200A',
        description: 'Tecnología IGBT para electrodos 6013 y 7018',
        price: 699000,
        originalPrice: 849000,
        discount: 18,
        badge: {
            recomendado: true,
            descuento: false,
            promocion: false,
        },
        image: 'asset/sections/productos/imagen-producto.jpg',
    },
    {
        id: 15,
        name: 'Sierra de mesa 1800W',
        description: 'Hoja 254mm, guía paralela ajustable',
        price: 1499000,
        originalPrice: null,
        discount: null,
        badge: {
            recomendado: true,
            descuento: false,
            promocion: false,
        },
        image: 'asset/sections/productos/imagen-producto.jpg',
    },
    {
        id: 16,
        name: 'Taladro de columna 16mm',
        description: '5 velocidades, ajuste de profundidad',
        price: 879000,
        originalPrice: 999000,
        discount: 12,
        badge: {
            recomendado: true,
            descuento: false,
            promocion: true,
        },
        image: 'asset/sections/productos/imagen-producto.jpg',
    },
    {
        id: 17,
        name: 'Cizalla guillotina 6mm',
        description: 'Corte de lámina hasta 6mm de grosor',
        price: 2199000,
        originalPrice: null,
        discount: null,
        badge: {
            recomendado: true,
            descuento: false,
            promocion: false,
        },
        image: 'asset/sections/productos/imagen-producto.jpg',
    },
    {
        id: 18,
        name: 'Robot soldador MIG 220A',
        description: 'Inversor de alta eficiencia, chasis reforzado',
        price: 2799000,
        originalPrice: 3299000,
        discount: 15,
        badge: {
            recomendado: true,
            descuento: false,
            promocion: false,
        },
        image: 'asset/sections/productos/imagen-producto.jpg',
    },
    {
        id: 19,
        name: 'Cargador frontal 1.2m³',
        description: 'Motor diesel, pala con brazo articulado',
        price: 35990000,
        originalPrice: null,
        discount: null,
        badge: {
            recomendado: true,
            descuento: false,
            promocion: false,
        },
        image: 'asset/sections/productos/imagen-producto.jpg',
    },
    {
        id: 20,
        name: 'Compresor portátil 8L 1.5HP',
        description: 'Liviano y silencioso para trabajos rápidos',
        price: 399000,
        originalPrice: 489000,
        discount: 18,
        badge: {
            recomendado: true,
            descuento: false,
            promocion: false,
        },
        image: 'asset/sections/productos/imagen-producto.jpg',
    },
    {
        id: 21,
        name: 'Mini excavadora 2.5 toneladas',
        description: 'Motor Yanmar, desplazamiento hidrostático',
        price: 45990000,
        originalPrice: 51990000,
        discount: 12,
        badge: {
            recomendado: true,
            descuento: false,
            promocion: true,
        },
        image: 'asset/sections/productos/imagen-producto.jpg',
    },
    {
        id: 22,
        name: 'Motobomba 6HP 2"',
        description: 'Bomba centrífuga de alta capacidad',
        price: 789000,
        originalPrice: 899000,
        discount: 12,
        badge: {
            recomendado: true,
            descuento: false,
            promocion: false,
        },
        image: 'asset/sections/productos/imagen-producto.jpg',
    },
    {
        id: 23,
        name: 'Lijadora de banda 1500W',
        description: 'Bandas intercambiables, extracción de polvo',
        price: 459000,
        originalPrice: null,
        discount: null,
        badge: {
            recomendado: true,
            descuento: false,
            promocion: false,
        },
        image: 'asset/sections/productos/imagen-producto.jpg',
    },
    {
        id: 24,
        name: 'Alicates articulados 24"',
        description: 'Agarre de alta presión con ajuste rápido',
        price: 129000,
        originalPrice: 169000,
        discount: 24,
        badge: {
            recomendado: true,
            descuento: false,
            promocion: false,
        },
        image: 'asset/sections/productos/imagen-producto.jpg',
    },
    {
        id: 25,
        name: 'Grúa horquilla 1.5 toneladas',
        description: 'Capacidad elevadora 1500kg, altura 3.5m',
        price: 28990000,
        originalPrice: null,
        discount: null,
        badge: {
            recomendado: true,
            descuento: false,
            promocion: false,
        },
        image: 'asset/sections/productos/imagen-producto.jpg',
    },
    {
        id: 26,
        name: 'Inflador de neumáticos industrial 12V',
        description: 'Manómetro de alta precisión, auto apagado',
        price: 189000,
        originalPrice: 239000,
        discount: 21,
        badge: {
            recomendado: true,
            descuento: false,
            promocion: false,
        },
        image: 'asset/sections/productos/imagen-producto.jpg',
    },
    {
        id: 27,
        name: 'Torre de iluminación LED 200W',
        description: 'Plegable, ideal para construcción y eventos',
        price: 1599000,
        originalPrice: 1899000,
        discount: 16,
        badge: {
            recomendado: true,
            descuento: false,
            promocion: true,
        },
        image: 'asset/sections/productos/imagen-producto.jpg',
    },
    {
        id: 28,
        name: 'Cortadora de pavimento 15HP',
        description: 'Disco de 14", sistema de riego integrado',
        price: 6599000,
        originalPrice: null,
        discount: null,
        badge: {
            recomendado: true,
            descuento: false,
            promocion: false,
        },
        image: 'asset/sections/productos/imagen-producto.jpg',
    },
    {
        id: 29,
        name: 'Remachador de impacto neumático',
        description: 'Calibre 3/8", fácil operación',
        price: 849000,
        originalPrice: 989000,
        discount: 14,
        badge: {
            recomendado: true,
            descuento: false,
            promocion: false,
        },
        image: 'asset/sections/productos/imagen-producto.jpg',
    },
    {
        id: 30,
        name: 'Trompo mezclador 5 pies³',
        description: 'Motor eléctrico, capacidad 140L',
        price: 1899000,
        originalPrice: 2199000,
        discount: 14,
        badge: {
            recomendado: true,
            descuento: false,
            promocion: false,
        },
        image: 'asset/sections/productos/imagen-producto.jpg',
    },
])

const filteredProducts = computed(() => {
    return products.value.filter(product => product.badge.recomendado === true)
})

const formattedPrice = (value) => {
    if (!value) return ''
    return new Intl.NumberFormat('es-CO', {
        style: 'currency',
        currency: 'COP',
        minimumFractionDigits: 0,
    }).format(value)
}

const getBadgeText = (badge) => {
    if (badge.recomendado) return 'Recomendado'
    if (badge.descuento) return 'Oferta'
    if (badge.promocion) return 'Promoción'
    return ''
}
</script>

<template>
    <div v-for="product in filteredProducts" :key="product.id" class="snap-start shrink-0">
        <div
            class="bg-ferro-white rounded-xl shadow-sm hover:shadow-md transition-all duration-300 p-4 sm:p-5 border border-ferro-carbon-100/50 flex flex-col h-full w-[75vw] sm:w-65 lg:w-70 max-w-70">

            <!-- ==========================================================
                IMAGEN
                ========================================================== -->
            <div class="relative aspect-square bg-ferro-steel-50 rounded-lg overflow-hidden mb-3">
                <img 
                    :src="product.image" 
                    :alt="product.name"
                    class="w-full h-full object-cover"
                    loading="lazy"
                />

                <!-- BADGES -->
                <div class="absolute top-2 left-2 flex flex-col gap-1">
                    <span
                        class="text-[9px] sm:text-[10px] font-description font-bold uppercase tracking-wider px-2 py-0.5 rounded-full bg-ferro-yellow-500 text-ferro-black"
                        style="font-family: var(--font-description);">
                        {{ getBadgeText(product.badge) }}
                    </span>
                    <span v-if="product.discount"
                        class="text-[9px] sm:text-[10px] font-description font-bold uppercase tracking-wider px-2 py-0.5 rounded-full bg-ferro-danger text-white"
                        style="font-family: var(--font-description);">
                        -{{ product.discount }}%
                    </span>
                </div>
            </div>

            <!-- NOMBRE -->
            <h3 class="text-sm sm:text-base font-semibold text-ferro-carbon-900 line-clamp-1"
                style="font-family: var(--font-heading);">
                {{ product.name }}
            </h3>

            <!-- DESCRIPCIÓN -->
            <p class="text-[11px] sm:text-xs text-ferro-steel-500 mt-0.5 line-clamp-2 flex-1"
                style="font-family: var(--font-body);">
                {{ product.description }}
            </p>

            <!-- PRECIO -->
            <div class="mt-3 flex items-baseline gap-2">
                <span class="text-lg sm:text-xl font-bold text-ferro-carbon-900"
                    style="font-family: var(--font-heading);">
                    {{ formattedPrice(product.price) }}
                </span>
                <span v-if="product.originalPrice" class="text-sm text-ferro-steel-400 line-through"
                    style="font-family: var(--font-heading);">
                    {{ formattedPrice(product.originalPrice) }}
                </span>
            </div>

            <!-- BOTÓN -->
            <button
                class="mt-3 w-full bg-ferro-carbon-900 hover:bg-ferro-carbon-700 text-ferro-white text-xs sm:text-sm font-semibold py-2.5 rounded-lg transition-colors duration-200 flex items-center justify-center gap-2"
                style="font-family: var(--font-heading);">
                <svg class="w-4 h-4 sm:w-5 sm:h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                </svg>
                Visualizar Producto
            </button>

        </div>
    </div>
</template>