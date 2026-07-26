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
import {
    CART_ADD_EVENT,
    CART_UPDATED_EVENT,
    addToCart,
    cartCount,
    readCart,
    removeFromCart,
    updateCartQuantity,
} from './cart';

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
import CardStatisticComponent from '../views/components/ui/sections/statistic/CardStatistic.vue';
import CardProductComponent from '../views/components/ui/sections/products/CardProduct.vue';
import CardCategoryComponent from '../views/components/ui/sections/category/CardCategory.vue';
import CardAdvantageComponent from '../views/components/ui/sections/advantage/CardAdvantage.vue';
import CardSchedulingComponent from '../views/components/ui/sections/products/CardScheduling.vue';
import CardBrandComponent from '../views/components/ui/sections/brand/CardBrand.vue';
import CardFeedbackComponent from '../views/components/ui/sections/feedback/CardFeedback.vue';
import CardUnitedComponent from '../views/components/ui/sections/products/CardUnited.vue';
import CardTeamComponent from '../views/components/ui/sections/teams/CardTeam.vue';
import BtnLogin from '../views/components/ui/buttons/auth/BtnLogin.vue';
import BtnRegister from '../views/components/ui/buttons/auth/BtnRegister.vue';
import BtnGoogle from '../views/components/ui/buttons/auth/BtnGoogle.vue';
import CardProjects from '../views/components/ui/sections/projects/CardProject.vue';
import CardBlog from '../views/components/ui/sections/blog/CardBlog.vue';
import ToastNotification from '../views/components/ui/toasts/ToastNotification.vue';
import BtnCheckoutWhatsapp from '../views/components/ui/buttons/quote/BtnCheckoutWhatsapp.vue';
import BtnOnlinePayment from '../views/components/ui/buttons/payment/BtnOnlinePayment.vue';

window.addEventListener(CART_ADD_EVENT, (event) => {
    if (event.detail?.product) addToCart(event.detail.product, event.detail.quantity);
});

Alpine.store('cart', {
    items: readCart(),
    get count() {
        return cartCount(this.items);
    },
    init() {
        window.addEventListener(CART_UPDATED_EVENT, (event) => {
            this.items = event.detail.items;
        });
        window.addEventListener('storage', (event) => {
            if (event.key === 'ferro_cart') this.items = readCart();
        });
    },
    updateQuantity(key, delta) {
        this.items = updateCartQuantity(key, delta);
    },
    remove(key) {
        this.items = removeFromCart(key);
    },
});

Alpine.data('cartPage', () => ({
    get items() {
        return Alpine.store('cart').items;
    },
    get subtotal() {
        return this.items.reduce((sum, item) => sum + (item.price * item.qty), 0);
    },
    get shippingCost() {
        return this.items.length > 0 ? 25000 : 0;
    },
    get total() {
        return this.subtotal + this.shippingCost;
    },
    formatPrice(value) {
        return new Intl.NumberFormat('es-CO', {
            style: 'currency',
            currency: 'COP',
            minimumFractionDigits: 0,
        }).format(value);
    },
    updateQty(key, delta) {
        Alpine.store('cart').updateQuantity(key, delta);
    },
    removeItem(key) {
        Alpine.store('cart').remove(key);
    },
    get whatsappMessage() {
        const lines = this.items.map((item, index) =>
            `${index + 1}. ${item.name} (x${item.qty}) - ${this.formatPrice(item.price * item.qty)}`,
        );
        return encodeURIComponent([
            'Hola FERRANOVA, quiero finalizar mi pedido:',
            '',
            ...lines,
            '',
            `Subtotal: ${this.formatPrice(this.subtotal)}`,
            `Envío: ${this.formatPrice(this.shippingCost)}`,
            `Total: ${this.formatPrice(this.total)}`,
        ].join('\n'));
    },
    get whatsappLink() {
        return `https://wa.me/573184111790?text=${this.whatsappMessage}`;
    },
}));

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
mountIfPresent('#checkout-whatsapp-app', 'btn-checkout-whatsapp', BtnCheckoutWhatsapp);
mountIfPresent('#online-payment-app', 'btn-online-payment', BtnOnlinePayment);

const toastRoot = document.createElement('div');
toastRoot.id = 'toast-notification-app';
document.body.appendChild(toastRoot);
createApp(ToastNotification).mount(toastRoot);

/**
 * ==========================================================
 * INICIAR ALPINE
 * ==========================================================
 * Alpine se inicia después de Vue para evitar conflictos.
 */
Alpine.start();

console.log('FERRANOVA - Vue + Alpine cargados correctamente');
