<script setup>
defineProps({
    text: { type: String, default: 'Iniciar sesión' },
})
</script>

<template>
    <button
        type="submit"
        class="inline-flex w-full items-center justify-center gap-2 rounded-xl bg-ferro-yellow-500 px-6 py-3 font-heading text-sm font-bold text-ferro-black transition-all duration-300 ease-out hover:bg-ferro-yellow-300 focus:outline-none focus-visible:ring-2 focus-visible:ring-ferro-yellow-500 focus-visible:ring-offset-2 active:scale-95"
    >
        <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12H3m0 0 4-4m-4 4 4 4m5-13h6a2 2 0 012 2v14a2 2 0 01-2 2h-6" />
        </svg>
        {{ text }}
    </button>
</template>
