{{-- ==========================================================
    COMPONENTE: RESUMEN DEL PEDIDO
    ========================================================== --}}

<aside class="w-full min-w-0 rounded-2xl bg-ferro-white p-6 shadow-sm lg:p-8" aria-labelledby="order-summary-title">
    <h3 id="order-summary-title" class="mb-6 font-heading text-xl font-bold tracking-tight text-ferro-carbon-900">
        Resumen del pedido
    </h3>

    <div class="space-y-3 font-body text-sm">
        <div class="flex justify-between text-ferro-carbon-700">
            <span>Subtotal</span>
            <span class="font-medium text-ferro-carbon-900" x-text="formatPrice(subtotal)"></span>
        </div>
        <div class="flex justify-between text-ferro-carbon-700">
            <span>Envío estimado</span>
            <span class="font-medium text-ferro-carbon-900" x-text="formatPrice(shippingCost)"></span>
        </div>
    </div>

    <div class="mt-5 border-t border-ferro-carbon-100/40 pt-4">
        <div class="flex justify-between text-lg font-bold tracking-tight text-ferro-carbon-900">
            <span>Total</span>
            <span x-text="formatPrice(total)"></span>
        </div>
    </div>

    {{-- Acciones Vue independientes y reutilizables --}}
    <div class="mt-6 flex flex-col gap-3">
        <div id="checkout-whatsapp-app">
            <btn-checkout-whatsapp></btn-checkout-whatsapp>
        </div>

        <div id="online-payment-app">
            <btn-online-payment></btn-online-payment>
        </div>
    </div>

    <div class="mt-4 text-center">
        <a
            href="{{ route('category') }}"
            class="text-xs font-semibold text-ferro-steel-500 transition-colors hover:text-ferro-carbon-900"
        >
            Seguir comprando
        </a>
    </div>

    <div class="mt-6 flex items-center justify-center gap-2 border-t border-ferro-carbon-100/20 pt-4 text-[10px] text-ferro-steel-400">
        <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m9 12.75 2.25 2.25L15 9.75m-3-7.036A11.959 11.959 0 0 1 3.598 6 11.99 11.99 0 0 0 3 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285Z" />
        </svg>
        <span>Compra protegida · Pasarela 100% segura</span>
    </div>
</aside>
