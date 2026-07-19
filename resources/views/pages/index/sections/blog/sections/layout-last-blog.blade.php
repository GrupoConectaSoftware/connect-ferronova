<div
    x-data="{ visible: false }"
    x-cloak
    x-init="$nextTick(() => Array.from($el.querySelectorAll('[id$=-app] > * > *')).forEach((item, index) => { item.style.transitionDelay = (index * 100) + 'ms'; item.classList.add('opacity-0', 'translate-y-10', 'scale-95', 'transition-all', 'duration-700', 'ease-out') }))"
    x-intersect="visible = true; $nextTick(() => Array.from($el.querySelectorAll('[id$=-app] > * > *')).forEach((item) => { item.classList.remove('opacity-0', 'translate-y-10', 'scale-95'); item.classList.add('opacity-100', 'translate-y-0', 'scale-100') }))"
    :class="visible ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-10'"
    class="transition-all duration-700 ease-out"
>
{{-- ==========================================================
    SECCIÓN 2: ÚLTIMO POST DEL BLOG
    ========================================================== --}}

<section id="blog-content" class="w-full py-16 lg:py-20 bg-ferro-background" aria-label="Último artículo">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 max-w-6xl">
        <div class="mb-6">
            <span class="text-ferro-yellow-500 text-[10px] font-description font-bold uppercase tracking-[0.2em]">Recién publicado</span>
            <h2 class="font-heading text-3xl font-bold text-ferro-carbon-900 tracking-tight mt-1">Artículo destacado</h2>
        </div>
        <div id="last-blog-app" class="w-full">
            <card-blog mode="featured"></card-blog>
        </div>
    </div>
</section>
</div>
