<script setup>
const props = defineProps({
    text: {
        type: String,
        default: 'Visualizar Producto',
    },
    product: {
        type: Object,
        default: null,
    },
    href: {
        type: String,
        default: '',
    },
})

function visualize() {
    if (!props.product || !props.href) return

    localStorage.setItem('ferro_view_product', JSON.stringify(props.product))
    window.location.assign(props.href)
}
</script>

<template>
    <button
        type="button"
        class="inline-flex w-full items-center justify-center gap-2 rounded-xl bg-ferro-carbon-900 px-6 py-3 font-heading text-xs font-semibold text-ferro-white transition-all duration-300 ease-out hover:bg-ferro-carbon-700 focus:outline-none focus-visible:ring-2 focus-visible:ring-ferro-yellow-500 focus-visible:ring-offset-2 active:scale-95 sm:text-sm"
        @click="visualize"
    >
        <svg class="h-5 w-5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
        </svg>
        <slot>{{ text }}</slot>
    </button>
</template>
