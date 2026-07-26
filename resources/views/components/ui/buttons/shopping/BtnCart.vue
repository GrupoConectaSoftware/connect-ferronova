<script setup>
import { computed, onBeforeUnmount, onMounted, ref } from 'vue'
import {
    CART_ADD_EVENT,
    CART_UPDATED_EVENT,
    readCart,
} from '../../../../../js/cart'

const props = defineProps({
    variant: { type: String, default: 'light' },
    product: { type: Object, required: true },
})

const cartItems = ref(readCart())
const productKey = computed(() =>
    String(props.product.key ?? `${props.product.type ?? 'product'}-${props.product.id}`),
)
const isInCart = computed(() =>
    cartItems.value.some((item) => item.key === productKey.value),
)

function addProduct() {
    window.dispatchEvent(new CustomEvent(CART_ADD_EVENT, {
        detail: { product: props.product },
    }))
}

function syncCart(event) {
    cartItems.value = event.detail?.items ?? readCart()
}

onMounted(() => window.addEventListener(CART_UPDATED_EVENT, syncCart))
onBeforeUnmount(() => window.removeEventListener(CART_UPDATED_EVENT, syncCart))
</script>

<template>
    <button
        type="button"
        class="inline-flex h-10 w-10 shrink-0 cursor-pointer items-center justify-center rounded-full transition-all duration-300 focus:outline-none focus-visible:ring-2 focus-visible:ring-ferro-yellow-500"
        :class="variant === 'overlay'
            ? isInCart
                ? 'bg-ferro-yellow-500 text-ferro-black shadow-md hover:bg-ferro-yellow-700'
                : 'bg-ferro-black text-ferro-white shadow-md hover:bg-ferro-carbon-700'
            : 'border border-ferro-carbon-100 bg-ferro-white text-ferro-carbon-900 shadow-md hover:bg-ferro-yellow-500'"
        :aria-label="isInCart ? 'Producto agregado al carrito' : 'Agregar al carrito'"
        :aria-pressed="isInCart"
        @click.stop="addProduct"
    >
        <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13 5.4 5M7 13l-2 4h14M9 21a1 1 0 100-2 1 1 0 000 2zm8 0a1 1 0 100-2 1 1 0 000 2z" />
        </svg>
    </button>
</template>
