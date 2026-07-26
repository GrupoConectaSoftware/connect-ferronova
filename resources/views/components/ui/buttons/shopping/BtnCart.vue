<script setup>
import { CART_ADD_EVENT } from '../../../../../js/cart'

const props = defineProps({
    variant: { type: String, default: 'light' },
    product: { type: Object, required: true },
})

function addProduct() {
    window.dispatchEvent(new CustomEvent(CART_ADD_EVENT, {
        detail: { product: props.product },
    }))
}
</script>

<template>
    <button
        type="button"
        class="inline-flex h-10 w-10 shrink-0 cursor-pointer items-center justify-center rounded-full transition-all duration-300 focus:outline-none focus-visible:ring-2 focus-visible:ring-ferro-yellow-500"
        :class="variant === 'overlay'
            ? 'bg-ferro-black text-ferro-white shadow-md hover:bg-ferro-carbon-700'
            : 'border border-ferro-carbon-100 bg-ferro-white text-ferro-carbon-900 shadow-md hover:bg-ferro-yellow-500'"
        aria-label="Agregar al carrito"
        @click.stop="addProduct"
    >
        <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13 5.4 5M7 13l-2 4h14M9 21a1 1 0 100-2 1 1 0 000 2zm8 0a1 1 0 100-2 1 1 0 000 2z" />
        </svg>
    </button>
</template>
