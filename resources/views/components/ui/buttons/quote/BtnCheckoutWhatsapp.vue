<script setup>
import { computed, onBeforeUnmount, onMounted, ref } from 'vue'
import { CART_UPDATED_EVENT, readCart } from '../../../../../js/cart'

const items = ref(readCart())

const formatPrice = (value) => new Intl.NumberFormat('es-CO', {
    style: 'currency',
    currency: 'COP',
    minimumFractionDigits: 0,
}).format(value)

const subtotal = computed(() =>
    items.value.reduce((total, item) => total + (item.price * item.qty), 0),
)
const shippingCost = computed(() => items.value.length > 0 ? 25000 : 0)
const total = computed(() => subtotal.value + shippingCost.value)
const isDisabled = computed(() => items.value.length === 0)

const whatsappLink = computed(() => {
    if (isDisabled.value) return undefined

    const products = items.value.map((item, index) =>
        `${index + 1}. ${item.name} (x${item.qty}) - ${formatPrice(item.price * item.qty)}`,
    )
    const message = [
        'Hola FERRANOVA, quiero finalizar mi pedido:',
        '',
        ...products,
        '',
        `Subtotal: ${formatPrice(subtotal.value)}`,
        `Envío: ${formatPrice(shippingCost.value)}`,
        `Total: ${formatPrice(total.value)}`,
    ].join('\n')

    return `https://wa.me/573184111790?text=${encodeURIComponent(message)}`
})

function syncCart(event) {
    items.value = event.detail?.items ?? readCart()
}

onMounted(() => window.addEventListener(CART_UPDATED_EVENT, syncCart))
onBeforeUnmount(() => window.removeEventListener(CART_UPDATED_EVENT, syncCart))
</script>

<template>
    <a
        :href="whatsappLink"
        :target="isDisabled ? undefined : '_blank'"
        :aria-disabled="isDisabled"
        :tabindex="isDisabled ? -1 : 0"
        rel="noopener noreferrer"
        class="flex w-full items-center justify-center gap-2 rounded-xl bg-[#25D366] py-3.5 text-sm font-bold text-ferro-white shadow-[0_4px_14px_rgba(37,211,102,0.24)] transition-all duration-300"
        :class="isDisabled
            ? 'pointer-events-none cursor-not-allowed opacity-55'
            : 'cursor-pointer hover:bg-[#20bd5a] hover:shadow-[0_6px_18px_rgba(37,211,102,0.32)]'"
    >
        <svg class="h-5 w-5 shrink-0" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
            <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 0 0-3.48-8.413Z" />
        </svg>
        <span>{{ isDisabled ? 'Agrega productos para continuar' : 'Finalizar por WhatsApp' }}</span>
    </a>
</template>
