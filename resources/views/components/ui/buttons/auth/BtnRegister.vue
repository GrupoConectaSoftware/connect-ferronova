<script setup>
defineProps({
    text: { type: String, default: 'Crear cuenta' },
})
</script>

<template>
    <button
        type="submit"
        name="register"
        class="inline-flex w-full items-center justify-center gap-2 rounded-xl bg-ferro-yellow-500 px-6 py-3 font-heading text-sm font-bold text-ferro-black transition-all duration-300 ease-out hover:bg-ferro-yellow-300 focus:outline-none focus-visible:ring-2 focus-visible:ring-ferro-yellow-500 focus-visible:ring-offset-2 active:scale-95"
    >
        <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v6m3-3h-6m-3 7a7 7 0 00-7-7H4a7 7 0 00-1 14h10M8.5 9a4 4 0 100-8 4 4 0 000 8z" />
        </svg>
        {{ text }}
    </button>
</template>
