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

/**
 * ==========================================================
 * APP 1: ESTADÍSTICAS
 * ==========================================================
 */
const statsApp = createApp({});
statsApp.component('card-statistic-component', CardStatisticComponent);
statsApp.mount('#stats-app');

/**
 * ==========================================================
 * APP 2: PRODUCTOS DESTACADOS
 * ==========================================================
 */
const featuredApp = createApp({});
featuredApp.component('card-product-component', CardProductComponent);
featuredApp.mount('#featured-app');

/**
 * ==========================================================
 * APP 3: CATEGORÍAS DESTACADAS
 * ==========================================================
 */
const categoriesApp = createApp({});
categoriesApp.component('card-category-component', CardCategoryComponent);
categoriesApp.mount('#categories-app');

/**
 * ==========================================================
 * INICIAR ALPINE
 * ==========================================================
 */
Alpine.start();

console.log('🚀 FERRANOVA - Vue + Alpine cargados correctamente');