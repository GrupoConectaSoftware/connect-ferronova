/**
 * ==========================================================
 * BOOTSTRAP LARAVEL
 * ==========================================================
 * Carga las configuraciones base de Laravel y el
 * autoloading de componentes.
 */
import './bootstrap';

/**
 * ==========================================================
 * VUE 3 - CORE
 * ==========================================================
 * Importa createApp para inicializar las aplicaciones Vue.
 */
import { createApp } from 'vue';

/**
 * ==========================================================
 * ALPINE.JS
 * ==========================================================
 * Alpine se usa para interactividad ligera (menú móvil,
 * carruseles, etc.). Se expone globalmente como window.Alpine.
 */
import Alpine from 'alpinejs';
window.Alpine = Alpine;

/**
 * ==========================================================
 * COMPONENTES VUE
 * ==========================================================
 * Importa los componentes que se usarán en las distintas
 * aplicaciones Vue montadas en el frontend.
 */
import CardStatisticComponent from '../views/ui/card-statistic-component.vue';
import CardProductComponent from '../views/ui/card-product-component.vue';

/**
 * ==========================================================
 * APP 1: ESTADÍSTICAS
 * ==========================================================
 * Se monta en el elemento con id "stats-app".
 * Usa el componente de tarjetas de estadísticas.
 */
const statsApp = createApp({});
statsApp.component('card-statistic-component', CardStatisticComponent);
statsApp.mount('#stats-app');

/**
 * ==========================================================
 * APP 2: PRODUCTOS DESTACADOS
 * ==========================================================
 * Se monta en el elemento con id "featured-app".
 * Usa el componente de tarjeta de producto (con lista filtrada).
 */
const featuredApp = createApp({});
featuredApp.component('card-product-component', CardProductComponent);
featuredApp.mount('#featured-app');

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