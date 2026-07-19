<script setup>
defineProps({
    text: { type: String, default: 'Continuar con Google' },
})
</script>

<template>
    <button
        type="button"
        class="flex w-full cursor-pointer items-center justify-center gap-3 rounded-xl border border-ferro-carbon-100 bg-ferro-white px-4 py-2 font-body text-xs font-semibold text-ferro-carbon-700 transition-all duration-200 hover:border-ferro-carbon-300 hover:bg-ferro-steel-100 focus:outline-none focus-visible:ring-2 focus-visible:ring-ferro-yellow-500"
    >
        <svg class="h-5 w-5 shrink-0" viewBox="0 0 24 24" aria-hidden="true">
            <path d="M21.6 12.23c0-.71-.06-1.4-.18-2.06H12v3.9h5.38a4.6 4.6 0 01-2 3.02v2.54h3.25c1.9-1.75 2.97-4.34 2.97-7.4z" fill="#4285F4" />
            <path d="M12 22c2.7 0 4.98-.9 6.63-2.37l-3.25-2.54c-.9.6-2.04.96-3.38.96-2.6 0-4.82-1.76-5.61-4.13H3.03v2.61A10 10 0 0012 22z" fill="#34A853" />
            <path d="M6.39 13.92A6.02 6.02 0 016.08 12c0-.67.11-1.32.31-1.92V7.47H3.03A10 10 0 002 12c0 1.63.39 3.16 1.03 4.53l3.36-2.61z" fill="#FBBC05" />
            <path d="M12 5.95c1.47 0 2.79.51 3.83 1.49l2.87-2.87A9.62 9.62 0 0012 2a10 10 0 00-8.97 5.47l3.36 2.61C7.18 7.71 9.4 5.95 12 5.95z" fill="#EA4335" />
        </svg>
        <span>{{ text }}</span>
    </button>
</template>
