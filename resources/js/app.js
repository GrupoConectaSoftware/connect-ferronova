import './bootstrap';
import { createApp } from 'vue';
import CardStatisticComponent from '../views/ui/card-statistic-component.vue';

// Alpine.js local
import Alpine from 'alpinejs';
window.Alpine = Alpine;

// Vue
const app = createApp({});
app.component('card-statistic-component', CardStatisticComponent);
app.mount('#stats-app');

// Iniciar Alpine
Alpine.start();