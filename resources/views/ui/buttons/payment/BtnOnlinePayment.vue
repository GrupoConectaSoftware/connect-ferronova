<script setup>
import { computed, onBeforeUnmount, onMounted, ref } from 'vue'
import { CART_UPDATED_EVENT, readCart } from '../../../../js/cart'

const items = ref(readCart())
const isDisabled = computed(() => items.value.length === 0)

function syncCart(event) {
    items.value = event.detail?.items ?? readCart()
}

onMounted(() => window.addEventListener(CART_UPDATED_EVENT, syncCart))
onBeforeUnmount(() => window.removeEventListener(CART_UPDATED_EVENT, syncCart))
</script>

<template>
    <button
        type="button"
        :disabled="isDisabled"
        class="flex w-full items-center justify-center gap-2 rounded-xl bg-ferro-carbon-900 py-3.5 text-sm font-bold text-ferro-white shadow-[0_4px_14px_rgba(15,23,42,0.20)] transition-all duration-300"
        :class="isDisabled
            ? 'cursor-not-allowed opacity-55'
            : 'cursor-pointer hover:bg-ferro-carbon-800 hover:shadow-[0_6px_18px_rgba(15,23,42,0.28)]'"
    >
        <svg class="h-5 w-5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
            <rect x="2.5" y="5" width="19" height="14" rx="2.5" stroke-width="1.8" />
            <path stroke-linecap="round" stroke-width="1.8" d="M3 9.5h18M6.5 15h3" />
        </svg>
        <span>Pagar en línea</span>
    </button>
</template>
