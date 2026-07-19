<script setup>
defineProps({
    variant: { type: String, default: 'light' },
})
</script>

<template>
    <button
        type="button"
        class="inline-flex h-10 w-10 shrink-0 cursor-pointer items-center justify-center rounded-full transition-all duration-300 focus:outline-none focus-visible:ring-2 focus-visible:ring-ferro-yellow-500"
        :class="variant === 'overlay'
            ? 'bg-ferro-black text-ferro-white shadow-md hover:bg-ferro-carbon-700'
            : 'border border-ferro-carbon-100 bg-ferro-white text-ferro-carbon-900 shadow-md hover:bg-ferro-yellow-500'"
        aria-label="Agregar a favoritos"
    >
        <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 016.364 0L12 7.636l1.318-1.318a4.5 4.5 0 116.364 6.364L12 20.364l-7.682-7.682a4.5 4.5 0 010-6.364z" />
        </svg>
    </button>
</template>
