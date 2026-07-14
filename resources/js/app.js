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
import CardSchedulingComponent from '../views/ui/card-scheduling-component.vue';
import CardBrandComponent from '../views/ui/card-brand-component.vue';
import CardFeedbackComponent from '../views/ui/card-feedback-component.vue';
import CardUnitedComponent from '../views/ui/card-united-component.vue';
import CardTeamComponent from '../views/ui/card-team-component.vue';

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
 * APP 5: AGENDAMIENTO / ALQUILER
 * ==========================================================
 * Se monta en el elemento con id "scheduling-app".
 * Muestra el catálogo de equipos para alquiler.
 */
const schedulingApp = createApp({});
schedulingApp.component('card-scheduling-component', CardSchedulingComponent);
schedulingApp.mount('#scheduling-app');

/**
 * ==========================================================
 * APP 6: MARCAS ALIADAS
 * ==========================================================
 */
const brandApp = createApp({});
brandApp.component('card-brand-component', CardBrandComponent);
brandApp.mount('#brand-app');

/**
 * ==========================================================
 * APP 7: RESEÑAS VERIFICADAS
 * ==========================================================
 */
const feedbackApp = createApp({});
feedbackApp.component('card-feedback-component', CardFeedbackComponent);
feedbackApp.mount('#feedback-app');


/**
 * ==========================================================
 * APP 8: PRODUCTOS POR UNIDAD
 * ==========================================================
 */
const unitedProductsApp = createApp({});
unitedProductsApp.component('card-united-component', CardUnitedComponent);
unitedProductsApp.mount('#united-products-app')


/**
 * ==========================================================
 * APP 9: CARRUSEL DE EQUIPO (MONTAJE DE LA CARD)
 * ==========================================================
 */
const teamApp = createApp({});
teamApp.component('card-team-component', CardTeamComponent);
teamApp.mount('#team-card-app');


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
console.log('FERRANOVA - Vue + Alpine cargados correctamente');