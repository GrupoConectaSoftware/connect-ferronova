/**
 * ==========================================================
 * BOOTSTRAP LARAVEL
 * ==========================================================
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
 * Nota: si usas x-collapse y x-cloak en el layout del catálogo,
 * asegúrate de tener instalado y registrado el plugin @alpinejs/collapse:
 *   npm install @alpinejs/collapse
 */
import Alpine from 'alpinejs';
import collapse from '@alpinejs/collapse';
import intersect from '@alpinejs/intersect';
window.Alpine = Alpine;
Alpine.plugin(collapse);
Alpine.plugin(intersect);

/**
 * ==========================================================
 * COMPONENTES VUE
 * ==========================================================
 */
import CardStatisticComponent from '../views/ui/sections/statistic/CardStatistic.vue';
import CardProductComponent from '../views/ui/sections/products/CardProduct.vue';
import CardCategoryComponent from '../views/ui/sections/category/CardCategory.vue';
import CardAdvantageComponent from '../views/ui/sections/advantage/CardAdvantage.vue';
import CardSchedulingComponent from '../views/ui/sections/products/CardScheduling.vue';
import CardBrandComponent from '../views/ui/sections/brand/CardBrand.vue';
import CardFeedbackComponent from '../views/ui/sections/feedback/CardFeedback.vue';
import CardUnitedComponent from '../views/ui/sections/products/CardUnited.vue';
import CardTeamComponent from '../views/ui/sections/teams/CardTeam.vue';
import BtnLogin from '../views/ui/buttons/auth/BtnLogin.vue';
import BtnRegister from '../views/ui/buttons/auth/BtnRegister.vue';
import BtnGoogle from '../views/ui/buttons/auth/BtnGoogle.vue';
import CardProjects from '../views/ui/sections/projects/CardProject.vue';
import CardBlog from '../views/ui/sections/blog/CardBlog.vue';

/**
 * Pequeño helper: monta una app Vue en un id solo si ese id
 * existe en la página actual. Evita errores en consola en las
 * rutas donde una sección determinada no está presente, y evita
 * "Failed to mount app: mount target selector returned null".
 */
function mountIfPresent(id, componentName, component) {
    if (!document.querySelector(id)) return;
    const app = createApp({});
    app.component(componentName, component);
    app.mount(id);
}

/**
 * ==========================================================
 * APP 1: ESTADÍSTICAS — #stats-app
 * ==========================================================
 */
mountIfPresent('#stats-app', 'card-statistic-component', CardStatisticComponent);

/**
 * ==========================================================
 * APP 2: PRODUCTOS DESTACADOS (home) — #featured-app
 * ==========================================================
 */
mountIfPresent('#featured-app', 'card-product-component', CardProductComponent);

/**
 * ==========================================================
 * APP 2b: MAQUINARIA & GRAN ESCALA (catálogo) — #heavy-products-app
 * ==========================================================
 */
mountIfPresent('#heavy-products-app', 'card-product-component', CardProductComponent);

/**
 * ==========================================================
 * APP 3: CATEGORÍAS DESTACADAS — #categories-app
 * ==========================================================
 */
mountIfPresent('#categories-app', 'card-category-component', CardCategoryComponent);

/**
 * ==========================================================
 * APP 4: VENTAJAS Y BENEFICIOS — #advantages-app
 * ==========================================================
 */
mountIfPresent('#advantages-app', 'card-advantage-component', CardAdvantageComponent);

/**
 * ==========================================================
 * APP 5: AGENDAMIENTO / ALQUILER — #scheduling-app
 * ==========================================================
 */
mountIfPresent('#scheduling-app', 'card-scheduling-component', CardSchedulingComponent);

/**
 * ==========================================================
 * APP 6: MARCAS ALIADAS — #brand-app
 * ==========================================================
 */
mountIfPresent('#brand-app', 'card-brand-component', CardBrandComponent);

/**
 * ==========================================================
 * APP 7: RESEÑAS VERIFICADAS — #feedback-app
 * ==========================================================
 */
mountIfPresent('#feedback-app', 'card-feedback-component', CardFeedbackComponent);

/**
 * ==========================================================
 * APP 8: PRODUCTOS POR UNIDAD (catálogo) — #united-products-app
 * ==========================================================
 */
mountIfPresent('#united-products-app', 'card-united-component', CardUnitedComponent);

/**
 * ==========================================================
 * APP 9: CARRUSEL DE EQUIPO (SOBRE NOSOTROS) — #team-card-app
 * ==========================================================
 * CORREGIDO: Se agregó el montaje de CardTeamComponent porque faltaba.
 */
mountIfPresent('#team-card-app', 'card-team-component', CardTeamComponent);

/**
 * ==========================================================
 * APP 10: PROYECTOS — #projects-app
 * ==========================================================
 */
mountIfPresent('#projects-app', 'card-projects', CardProjects);

/**
 * ==========================================================
 * APP 11: BLOG (ÚLTIMO POST) — #last-blog-app
 * ==========================================================
 */
mountIfPresent('#last-blog-app', 'card-blog', CardBlog);

/**
 * ==========================================================
 * APP 12: BLOG (TODOS LOS POSTS) — #all-blog-app
 * ==========================================================
 */
mountIfPresent('#all-blog-app', 'card-blog', CardBlog);

/**
 * ==========================================================
 * BOTONES DE AUTENTICACIÓN
 * ==========================================================
 */
mountIfPresent('#login-action-app', 'btn-login', BtnLogin);
mountIfPresent('#register-action-app', 'btn-register', BtnRegister);
mountIfPresent('#login-google-app', 'btn-google', BtnGoogle);
mountIfPresent('#register-google-app', 'btn-google', BtnGoogle);

/**
 * ==========================================================
 * INICIAR ALPINE
 * ==========================================================
 * Alpine se inicia después de Vue para evitar conflictos.
 */
Alpine.start();

console.log('FERRANOVA - Vue + Alpine cargados correctamente');
