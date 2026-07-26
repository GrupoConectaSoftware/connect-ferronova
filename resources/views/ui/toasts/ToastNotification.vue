<script setup>
import { onBeforeUnmount, onMounted, ref } from 'vue'
import { TOAST_EVENT } from '../../../js/cart'

const toasts = ref([])
let nextId = 0
const timers = new Map()

function dismiss(id) {
    const index = toasts.value.findIndex((toast) => toast.id === id)
    if (index !== -1) toasts.value.splice(index, 1)
    clearTimeout(timers.get(id))
    timers.delete(id)
}

function showToast(event) {
    const id = ++nextId
    const detail = event.detail ?? {}

    toasts.value.push({
        id,
        title: detail.title ?? 'Operación exitosa',
        message: detail.message ?? 'Producto agregado al carrito.',
    })

    timers.set(id, window.setTimeout(() => dismiss(id), 5000))
}

onMounted(() => window.addEventListener(TOAST_EVENT, showToast))

onBeforeUnmount(() => {
    window.removeEventListener(TOAST_EVENT, showToast)
    timers.forEach((timer) => clearTimeout(timer))
})
</script>

<template>
    <div
        class="pointer-events-none fixed right-3 top-3 z-[100] flex w-[calc(100%-1.5rem)] max-w-sm flex-col gap-3 sm:right-5 sm:top-5"
        aria-live="polite"
        aria-atomic="false"
    >
        <TransitionGroup
            enter-active-class="transition-all duration-300 ease-out"
            enter-from-class="-translate-x-12 opacity-0"
            enter-to-class="translate-x-0 opacity-100"
            leave-active-class="transition-all duration-300 ease-in"
            leave-from-class="translate-x-0 opacity-100"
            leave-to-class="-translate-x-12 opacity-0"
            move-class="transition-transform duration-300"
        >
            <article
                v-for="toast in toasts"
                :key="toast.id"
                class="pointer-events-auto flex items-start gap-3 rounded-2xl border border-ferro-carbon-100 bg-ferro-white p-4 shadow-xl shadow-ferro-carbon-900/15"
                role="status"
            >
                <span class="flex h-10 w-10 shrink-0 items-center justify-center rounded-full bg-ferro-success text-ferro-white">
                    <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="m5 13 4 4L19 7" />
                    </svg>
                </span>

                <div class="min-w-0 flex-1 pt-0.5">
                    <p class="font-heading text-sm font-bold text-ferro-carbon-900">{{ toast.title }}</p>
                    <p class="mt-0.5 text-xs leading-relaxed text-ferro-steel-500">{{ toast.message }}</p>
                </div>

                <button
                    type="button"
                    class="rounded-full p-1 text-ferro-steel-400 transition-colors hover:bg-ferro-steel-100 hover:text-ferro-carbon-900 focus:outline-none focus-visible:ring-2 focus-visible:ring-ferro-yellow-500"
                    aria-label="Cerrar notificación"
                    @click="dismiss(toast.id)"
                >
                    <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18 18 6M6 6l12 12" />
                    </svg>
                </button>
            </article>
        </TransitionGroup>
    </div>
</template>

