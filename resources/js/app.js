/**
 * ==========================================================
 * BOOTSTRAP LARAVEL
 * ==========================================================
 * Carga las configuraciones base de Laravel.
 */
import './bootstrap';

/**
 * ==========================================================
 * VUE 3
 * ==========================================================
 */
import { createApp } from 'vue';

/**
 * ==========================================================
 * ALPINE.JS
 * ==========================================================
 */
import Alpine from 'alpinejs';
window.Alpine = Alpine;

/**
 * ==========================================================
 * COMPONENTES VUE
 * ==========================================================
 */
import CardStatisticComponent from '../views/ui/card-statistic-component.vue';
import CardProductComponent from '../views/ui/card-product-component.vue';
import CardCategoryComponent from '../views/ui/card-category-component.vue';
import CardAdvantageComponent from '../views/ui/card-advantage-component.vue';

/**
 * ==========================================================
 * APP 1: ESTADÍSTICAS
 * ==========================================================
 * Se monta en el elemento con id "stats-app".
 * Muestra las métricas clave de FERRANOVA.
 */
const statsApp = createApp({});
statsApp.component('card-statistic-component', CardStatisticComponent);
statsApp.mount('#stats-app');

/**
 * ==========================================================
 * APP 2: PRODUCTOS DESTACADOS
 * ==========================================================
 * Se monta en el elemento con id "featured-app".
 * Muestra el carrusel de productos recomendados.
 */
const featuredApp = createApp({});
featuredApp.component('card-product-component', CardProductComponent);
featuredApp.mount('#featured-app');

/**
 * ==========================================================
 * APP 3: CATEGORÍAS DESTACADAS
 * ==========================================================
 * Se monta en el elemento con id "categories-app".
 * Muestra el carrusel de categorías con imagen de fondo.
 */
const categoriesApp = createApp({});
categoriesApp.component('card-category-component', CardCategoryComponent);
categoriesApp.mount('#categories-app');

/**
 * ==========================================================
 * APP 4: VENTAJAS Y BENEFICIOS
 * ==========================================================
 * Se monta en el elemento con id "advantages-app".
 * Muestra las ventajas competitivas de FERRANOVA.
 */
const advantagesApp = createApp({});
advantagesApp.component('card-advantage-component', CardAdvantageComponent);
advantagesApp.mount('#advantages-app');

/**
 * ==========================================================
 * INICIAR ALPINE
 * ==========================================================
 * Alpine se inicia después de Vue para evitar conflictos
 * y asegurar que las directivas x-data, x-show, etc.
 * funcionen correctamente.
 */
Alpine.start();

/**
 * ==========================================================
 * DEBUG (CONSOLA)
 * ==========================================================
 * Mensaje de confirmación para saber que todo cargó bien.
 */
console.log('🚀 FERRANOVA - Vue + Alpine cargados correctamente');