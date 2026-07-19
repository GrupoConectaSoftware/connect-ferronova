<div
    x-data="{ visible: false }"
    x-cloak
    x-init="$nextTick(() => Array.from($el.querySelectorAll('[id$=-app] > * > *')).forEach((item, index) => { item.style.transitionDelay = (index * 100) + 'ms'; item.classList.add('opacity-0', 'translate-y-10', 'scale-95', 'transition-all', 'duration-700', 'ease-out') }))"
    x-intersect="visible = true; $nextTick(() => Array.from($el.querySelectorAll('[id$=-app] > * > *')).forEach((item) => { item.classList.remove('opacity-0', 'translate-y-10', 'scale-95'); item.classList.add('opacity-100', 'translate-y-0', 'scale-100') }))"
    :class="visible ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-10'"
    class="transition-all duration-700 ease-out"
>
{{-- ==========================================================
    SECCIÓN 3: TODOS LOS POSTS DEL BLOG
    ========================================================== --}}

<section class="w-full py-12 lg:py-16 bg-ferro-background" aria-label="Todos los artículos del blog">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 max-w-7xl">
        <div class="mb-4">
            <h2 class="font-heading text-3xl font-bold text-ferro-carbon-900 tracking-tight">Todos los artículos</h2>
        </div>
        <div id="all-blog-app" class="w-full">
            <card-blog mode="grid"></card-blog>
        </div>
    </div>
</section>
</div>
