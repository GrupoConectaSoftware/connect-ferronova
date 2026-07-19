<div
    x-data="{ visible: false }"
    x-cloak
    x-init="$nextTick(() => Array.from($el.querySelectorAll('[id$=-app] > * > *')).forEach((item, index) => { item.style.transitionDelay = (index * 100) + 'ms'; item.classList.add('opacity-0', 'translate-y-10', 'scale-95', 'transition-all', 'duration-700', 'ease-out') }))"
    x-intersect="visible = true; $nextTick(() => Array.from($el.querySelectorAll('[id$=-app] > * > *')).forEach((item) => { item.classList.remove('opacity-0', 'translate-y-10', 'scale-95'); item.classList.add('opacity-100', 'translate-y-0', 'scale-100') }))"
    :class="visible ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-10'"
    class="transition-all duration-700 ease-out"
>
{{-- ==========================================================
    SECCIÓN: CONTENIDO DEL CATÁLOGO
    FERRANOVA — v7 FINAL · Acordeón (Solo 1 abierta a la vez)
    ========================================================== --}}

<section id="catalog-content" class="w-full px-2 py-4 lg:py-6 bg-ferro-background" aria-label="Catálogo de productos"
     x-data="{
         search: '',
         sortBy: 'relevance',
         filterType: 'all',
         filterModalOpen: false,

         priceMin: '',
         priceMax: '',
         pricePresets: [
             { label: 'Menos de $50',  min: 0,   max: 50   },
             { label: '$50 – $150',    min: 50,  max: 150  },
             { label: '$150 – $500',   min: 150, max: 500  },
             { label: 'Más de $500',   min: 500, max: null },
         ],

         showAllBrands: false,
         brands: [
             { id: 'makita',  name: 'Makita',  count: 24, checked: false },
             { id: 'dewalt',  name: 'DeWalt',  count: 18, checked: false },
             { id: 'bosch',   name: 'Bosch',   count: 12, checked: false },
             { id: 'stanley', name: 'Stanley', count: 8,  checked: false },
             { id: 'truper',  name: 'Truper',  count: 14, checked: false },
             { id: 'irwin',   name: 'Irwin',   count: 6,  checked: false },
         ],

         showAllCategories: false,
         categories: [
             { id: 'electricas',  name: 'Herramientas Eléctricas',  count: 45,  checked: false },
             { id: 'tornilleria', name: 'Ferretería & Tornillería', count: 120, checked: false },
             { id: 'seguridad',   name: 'Seguridad Industrial',     count: 22,  checked: false },
             { id: 'pesada',      name: 'Maquinaria Pesada',        count: 15,  checked: false },
             { id: 'medicion',    name: 'Instrumentos de Medición', count: 9,   checked: false },
         ],

         showAllProductTypes: false,
         productTypes: [
             { id: 'venta', name: 'Venta Directa', count: 180, checked: false },
             { id: 'alquiler', name: 'Alquiler', count: 22, checked: false },
             { id: 'repuestos', name: 'Repuestos', count: 15, checked: false },
             { id: 'servicios', name: 'Servicios', count: 8, checked: false },
         ],

         showAllRatings: false,
         ratings: [
             { id: '5', name: '5 Estrellas', count: 40, checked: false },
             { id: '4', name: '4+ Estrellas', count: 25, checked: false },
             { id: '3', name: '3+ Estrellas', count: 10, checked: false },
         ],

         showAllConditions: false,
         conditions: [
             { id: 'nuevo', name: 'Nuevo', count: 150, checked: false },
             { id: 'usado', name: 'Usado', count: 30, checked: false },
             { id: 'reacondicionado', name: 'Reacondicionado', count: 12, checked: false },
         ],

         inStockOnly: false,
         sections: { united: false, heavy: false, scheduling: false },

         applyPricePreset(preset) {
             if (this.priceMin === preset.min && this.priceMax === preset.max) {
                 this.priceMin = ''; this.priceMax = '';
             } else {
                 this.priceMin = preset.min; this.priceMax = preset.max;
             }
         },

         get activeFilterCount() {
             return this.brands.filter(b => b.checked).length
                 + this.categories.filter(c => c.checked).length
                 + this.productTypes.filter(p => p.checked).length
                 + this.ratings.filter(r => r.checked).length
                 + this.conditions.filter(c => c.checked).length
                 + (this.priceMin !== '' ? 1 : 0)
                 + (this.priceMax !== '' ? 1 : 0)
                 + (this.inStockOnly ? 1 : 0);
         },

         get activeFilterChips() {
             const chips = [];
             this.brands.forEach(b => { if (b.checked) chips.push({ scope: 'brand', id: b.id, label: b.name }); });
             this.categories.forEach(c => { if (c.checked) chips.push({ scope: 'category', id: c.id, label: c.name }); });
             this.productTypes.forEach(p => { if (p.checked) chips.push({ scope: 'type', id: p.id, label: p.name }); });
             this.ratings.forEach(r => { if (r.checked) chips.push({ scope: 'rating', id: r.id, label: r.name }); });
             this.conditions.forEach(c => { if (c.checked) chips.push({ scope: 'condition', id: c.id, label: c.name }); });
             if (this.priceMin !== '' || this.priceMax !== '') {
                 const min = this.priceMin !== '' ? `$${this.priceMin}` : '$0';
                 const max = this.priceMax !== '' ? `$${this.priceMax}` : '+';
                 chips.push({ scope: 'price', id: 'price', label: `${min} – ${max}` });
             }
             if (this.inStockOnly) chips.push({ scope: 'stock', id: 'stock', label: 'En stock' });
             return chips;
         },

         removeChip(chip) {
             if (chip.scope === 'brand') this.brands.find(b => b.id === chip.id).checked = false;
             if (chip.scope === 'category') this.categories.find(c => c.id === chip.id).checked = false;
             if (chip.scope === 'type') this.productTypes.find(p => p.id === chip.id).checked = false;
             if (chip.scope === 'rating') this.ratings.find(r => r.id === chip.id).checked = false;
             if (chip.scope === 'condition') this.conditions.find(c => c.id === chip.id).checked = false;
             if (chip.scope === 'price') { this.priceMin = ''; this.priceMax = ''; }
             if (chip.scope === 'stock') this.inStockOnly = false;
         },

         clearFilters() {
             this.brands.forEach(b => b.checked = false);
             this.categories.forEach(c => c.checked = false);
             this.productTypes.forEach(p => p.checked = false);
             this.ratings.forEach(r => r.checked = false);
             this.conditions.forEach(c => c.checked = false);
             this.priceMin = ''; this.priceMax = ''; this.inStockOnly = false; this.search = '';
         },

         // NUEVA LÓGICA DE ACORDEÓN (Solo 1 abierta a la vez + Toggle)
         toggleSection(key) {
             // Si la sección que toqué ya estaba abierta, cierro todo.
             if (this.sections[key]) {
                 this.sections = { united: false, heavy: false, scheduling: false };
             } else {
                 // Si estaba cerrada, cierro todas y abro solo la que toqué.
                 this.sections = { united: false, heavy: false, scheduling: false };
                 this.sections[key] = true;
             }

             // Mantenemos el resize para que los componentes Vue se acomoden
             if (this.sections[key]) {
                 setTimeout(() => window.dispatchEvent(new Event('resize')), 350);
             }
         },
     }"
     x-init="
         // El selector de arriba también respeta la regla de solo 1 abierta
         $watch('filterType', value => {
             this.sections = { united: false, heavy: false, scheduling: false };
             if (value !== 'all') {
                 this.sections[value] = true;
             }
         });
     "
>
    <div class="mx-auto px-2 sm:px-4 max-w-[1600px]">

        {{-- ENCABEZADO --}}
        <div class="flex flex-col lg:flex-row lg:items-center justify-between gap-3 mb-5">
            <div>
                <h2 class="font-heading text-2xl sm:text-3xl lg:text-4xl font-bold text-ferro-carbon-900 tracking-tight">
                    Nuestro <span class="text-ferro-yellow-500">Catálogo</span>
                </h2>
                <p class="text-ferro-steel-500 text-sm mt-0.5 max-w-xl">Explora, filtra y encuentra todo lo que necesitas para tu obra.</p>
            </div>

            <div class="flex flex-wrap items-center gap-2 w-full lg:w-auto">
                <label class="relative w-full sm:w-56 lg:w-64">
                    <span class="sr-only">Buscar</span>
                    <svg class="w-4 h-4 absolute left-3 top-1/2 -translate-y-1/2 text-ferro-steel-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-4.35-4.35M17 11a6 6 0 11-12 0 6 6 0 0112 0z"/></svg>
                    <input x-model.debounce.300ms="search" type="text" placeholder="Buscar..."
                           class="w-full pl-9 pr-3 py-2 text-sm bg-ferro-white border border-ferro-carbon-100/60 rounded-lg focus:outline-none shadow-sm transition-all">
                </label>

                <select x-model="sortBy"
                        class="w-full sm:w-auto px-3 py-2 text-sm bg-ferro-white border border-ferro-carbon-100/60 rounded-lg focus:outline-none shadow-sm cursor-pointer text-ferro-carbon-900">
                    <option value="relevance">Relevancia</option>
                    <option value="price_asc">Menor precio</option>
                    <option value="price_desc">Mayor precio</option>
                    <option value="name_asc">A–Z</option>
                </select>

                <select x-model="filterType"
                        class="w-full sm:w-auto px-3 py-2 text-sm bg-ferro-white border border-ferro-carbon-100/60 rounded-lg focus:outline-none shadow-sm cursor-pointer text-ferro-carbon-900">
                    <option value="all">Todo</option>
                    <option value="united">Por Unidad</option>
                    <option value="heavy">Maquinaria</option>
                    <option value="scheduling">Agendamiento</option>
                </select>

                <button @click="filterModalOpen = true"
                        class="lg:hidden relative flex items-center justify-center gap-1 px-3 py-2 bg-ferro-carbon-900 rounded-lg shadow-sm text-ferro-white text-sm font-semibold shrink-0">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M10.5 6h9.75M10.5 6a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM3.75 6h2.25M6 18h9.75M6 18a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM17.25 18h3M13.5 12h7.5M13.5 12a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM3.75 12h2.25"/></svg>
                    <span class="hidden sm:inline">Filtrar</span>
                    <span x-show="activeFilterCount > 0" x-text="activeFilterCount"
                          class="absolute -top-1.5 -right-1.5 bg-ferro-yellow-500 text-ferro-carbon-900 text-[10px] font-bold rounded-full w-4.5 h-4.5ex items-center justify-center"></span>
                </button>
            </div>
        </div>

        {{-- CHIPS DE FILTROS ACTIVOS --}}
        <div x-show="activeFilterChips.length > 0" class="flex flex-wrap items-center gap-2 mb-4">
            <template x-for="chip in activeFilterChips" :key="chip.scope + chip.id">
                <button @click="removeChip(chip)"
                        class="flex items-center gap-1 pl-2.5 pr-1.5 py-1 bg-ferro-white border border-ferro-carbon-100/70 rounded-full text-xs font-medium text-ferro-carbon-700 hover:border-ferro-carbon-900/40 hover:text-ferro-carbon-900 shadow-sm transition-colors">
                    <span x-text="chip.label"></span>
                    <svg class="w-3 h-3 text-ferro-steel-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/></svg>
                </button>
            </template>
            <button @click="clearFilters()" class="text-xs font-bold text-ferro-steel-500 hover:text-ferro-carbon-900 underline underline-offset-2 transition-colors">
                Limpiar todo
            </button>
        </div>

        {{-- LAYOUT PRINCIPAL --}}
        <div class="lg:flex lg:items-stretch lg:gap-2">

            {{-- SIDEBAR DE FILTROS (25%) --}}
            <aside class="hidden lg:block lg:w-[25%] lg:min-w-62.5 lg:self-stretch">
                <div class="sticky top-4 h-full bg-ferro-white rounded-xl p-5 shadow-[0_2px_16px_rgba(0,0,0,0.04)] border border-ferro-carbon-100/40">

                    <div class="flex items-center justify-between mb-4 pb-3 border-b border-ferro-carbon-100/40">
                        <div class="flex items-center gap-2">
                            <svg class="w-5 h-5 text-ferro-carbon-900" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.75"><path stroke-linecap="round" stroke-linejoin="round" d="M10.5 6h9.75M10.5 6a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM3.75 6h2.25M6 18h9.75M6 18a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM17.25 18h3M13.5 12h7.5M13.5 12a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM3.75 12h2.25"/></svg>
                            <h4 class="font-heading text-base font-bold text-ferro-carbon-900">Filtros</h4>
                        </div>
                        <button @click="clearFilters()" x-show="activeFilterCount > 0"
                                class="text-[10px] font-bold text-ferro-steel-500 hover:text-ferro-yellow-600 uppercase tracking-wider transition-colors">Limpiar</button>
                    </div>

                    {{-- PRECIO --}}
                    <div class="mb-5">
                        <h5 class="text-[11px] font-bold text-ferro-carbon-900 uppercase tracking-wider mb-2">Rango de precio</h5>
                        <div class="flex items-center gap-2">
                            <label class="relative w-full"><span class="absolute left-2.5 top-1/2 -translate-y-1/2 text-[10px] text-ferro-steel-400 font-bold">$</span><input type="number" x-model.number="priceMin" placeholder="Mín" class="w-full pl-5 pr-2 py-1.5 text-xs border border-ferro-carbon-100/60 rounded-lg bg-ferro-white focus:outline-none transition-all"></label>
                            <span class="text-ferro-steel-400 text-xs">—</span>
                            <label class="relative w-full"><span class="absolute left-2.5 top-1/2 -translate-y-1/2 text-[10px] text-ferro-steel-400 font-bold">$</span><input type="number" x-model.number="priceMax" placeholder="Máx" class="w-full pl-5 pr-2 py-1.5 text-xs border border-ferro-carbon-100/60 rounded-lg bg-ferro-white focus:outline-none transition-all"></label>
                        </div>
                        <div class="flex flex-wrap gap-1.5 mt-2">
                            <template x-for="preset in pricePresets" :key="preset.label">
                                <button type="button" @click="applyPricePreset(preset)"
                                        :class="priceMin === preset.min && priceMax === preset.max ? 'bg-ferro-carbon-900 border-ferro-carbon-900 text-ferro-white' : 'bg-ferro-white border-ferro-carbon-100/70 text-ferro-steel-500 hover:border-ferro-carbon-900/40 hover:text-ferro-carbon-900'"
                                        class="px-2.5 py-1 rounded-full border text-[10px] font-semibold transition-colors" x-text="preset.label"></button>
                            </template>
                        </div>
                    </div>

                    <div class="h-px bg-ferro-carbon-100/50 mb-4"></div>

                    {{-- MARCAS --}}
                    <div class="mb-4">
                        <h5 class="text-[11px] font-bold text-ferro-carbon-900 uppercase tracking-wider mb-2">Marcas</h5>
                        <div class="flex flex-wrap gap-1.5">
                            <template x-for="brand in (showAllBrands ? brands : brands.slice(0, 5))" :key="brand.id">
                                <button type="button" @click="brand.checked = !brand.checked"
                                        :class="brand.checked ? 'bg-ferro-carbon-900 border-ferro-carbon-900 text-ferro-white' : 'bg-ferro-white border-ferro-carbon-100/70 text-ferro-carbon-700 hover:border-ferro-carbon-900/40 hover:text-ferro-carbon-900'"
                                        class="inline-flex items-center gap-1 px-2.5 py-1 rounded-full border text-[10px] font-semibold transition-colors">
                                    <span x-text="brand.name"></span>
                                    <span :class="brand.checked ? 'text-ferro-steel-300' : 'text-ferro-steel-400'" class="tabular-nums" x-text="brand.count"></span>
                                </button>
                            </template>
                        </div>
                        <button x-show="brands.length > 5" @click="showAllBrands = !showAllBrands" class="mt-1.5 text-[10px] font-bold text-ferro-carbon-900 hover:text-ferro-yellow-600 flex items-center gap-0.5 transition-colors">
                            <span x-text="showAllBrands ? 'Ver menos' : `+${brands.length - 5}`"></span>
                            <svg class="w-3 h-3 transition-transform" :class="showAllBrands ? 'rotate-180' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/></svg>
                        </button>
                    </div>

                    <div class="h-px bg-ferro-carbon-100/50 mb-4"></div>

                    {{-- CATEGORÍAS --}}
                    <div class="mb-4">
                        <h5 class="text-[11px] font-bold text-ferro-carbon-900 uppercase tracking-wider mb-2">Categorías</h5>
                        <div class="flex flex-wrap gap-1.5">
                            <template x-for="category in (showAllCategories ? categories : categories.slice(0, 4))" :key="category.id">
                                <button type="button" @click="category.checked = !category.checked"
                                        :class="category.checked ? 'bg-ferro-carbon-900 border-ferro-carbon-900 text-ferro-white' : 'bg-ferro-white border-ferro-carbon-100/70 text-ferro-carbon-700 hover:border-ferro-carbon-900/40 hover:text-ferro-carbon-900'"
                                        class="inline-flex items-center gap-1 px-2.5 py-1 rounded-full border text-[10px] font-semibold transition-colors">
                                    <span x-text="category.name"></span>
                                    <span :class="category.checked ? 'text-ferro-steel-300' : 'text-ferro-steel-400'" class="tabular-nums" x-text="category.count"></span>
                                </button>
                            </template>
                        </div>
                        <button x-show="categories.length > 4" @click="showAllCategories = !showAllCategories" class="mt-1.5 text-[10px] font-bold text-ferro-carbon-900 hover:text-ferro-yellow-600 flex items-center gap-0.5 transition-colors">
                            <span x-text="showAllCategories ? 'Ver menos' : `+${categories.length - 4}`"></span>
                            <svg class="w-3 h-3 transition-transform" :class="showAllCategories ? 'rotate-180' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/></svg>
                        </button>
                    </div>

                    <div class="h-px bg-ferro-carbon-100/50 mb-4"></div>

                    {{-- TIPO --}}
                    <div class="mb-4">
                        <h5 class="text-[11px] font-bold text-ferro-carbon-900 uppercase tracking-wider mb-2">Tipo</h5>
                        <div class="flex flex-wrap gap-1.5">
                            <template x-for="type in (showAllProductTypes ? productTypes : productTypes.slice(0, 3))" :key="type.id">
                                <button type="button" @click="type.checked = !type.checked"
                                        :class="type.checked ? 'bg-ferro-carbon-900 border-ferro-carbon-900 text-ferro-white' : 'bg-ferro-white border-ferro-carbon-100/70 text-ferro-carbon-700 hover:border-ferro-carbon-900/40 hover:text-ferro-carbon-900'"
                                        class="inline-flex items-center gap-1 px-2.5 py-1 rounded-full border text-[10px] font-semibold transition-colors">
                                    <span x-text="type.name"></span>
                                    <span :class="type.checked ? 'text-ferro-steel-300' : 'text-ferro-steel-400'" class="tabular-nums" x-text="type.count"></span>
                                </button>
                            </template>
                        </div>
                        <button x-show="productTypes.length > 3" @click="showAllProductTypes = !showAllProductTypes" class="mt-1.5 text-[10px] font-bold text-ferro-carbon-900 hover:text-ferro-yellow-600 flex items-center gap-0.5 transition-colors">
                            <span x-text="showAllProductTypes ? 'Ver menos' : `+${productTypes.length - 3}`"></span>
                            <svg class="w-3 h-3 transition-transform" :class="showAllProductTypes ? 'rotate-180' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/></svg>
                        </button>
                    </div>

                    <div class="h-px bg-ferro-carbon-100/50 mb-4"></div>

                    {{-- VALORACIÓN --}}
                    <div class="mb-4">
                        <h5 class="text-[11px] font-bold text-ferro-carbon-900 uppercase tracking-wider mb-2">Valoración</h5>
                        <div class="flex flex-wrap gap-1.5">
                            <template x-for="rating in (showAllRatings ? ratings : ratings.slice(0, 2))" :key="rating.id">
                                <button type="button" @click="rating.checked = !rating.checked"
                                        :class="rating.checked ? 'bg-ferro-carbon-900 border-ferro-carbon-900 text-ferro-white' : 'bg-ferro-white border-ferro-carbon-100/70 text-ferro-carbon-700 hover:border-ferro-carbon-900/40 hover:text-ferro-carbon-900'"
                                        class="inline-flex items-center gap-1 px-2.5 py-1 rounded-full border text-[10px] font-semibold transition-colors">
                                    <span x-text="rating.name"></span>
                                    <span :class="rating.checked ? 'text-ferro-steel-300' : 'text-ferro-steel-400'" class="tabular-nums" x-text="rating.count"></span>
                                </button>
                            </template>
                        </div>
                        <button x-show="ratings.length > 2" @click="showAllRatings = !showAllRatings" class="mt-1.5 text-[10px] font-bold text-ferro-carbon-900 hover:text-ferro-yellow-600 flex items-center gap-0.5 transition-colors">
                            <span x-text="showAllRatings ? 'Ver menos' : `+${ratings.length - 2}`"></span>
                            <svg class="w-3 h-3 transition-transform" :class="showAllRatings ? 'rotate-180' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/></svg>
                        </button>
                    </div>

                    <div class="h-px bg-ferro-carbon-100/50 mb-4"></div>

                    {{-- CONDICIÓN --}}
                    <div class="mb-4">
                        <h5 class="text-[11px] font-bold text-ferro-carbon-900 uppercase tracking-wider mb-2">Condición</h5>
                        <div class="flex flex-wrap gap-1.5">
                            <template x-for="condition in (showAllConditions ? conditions : conditions.slice(0, 2))" :key="condition.id">
                                <button type="button" @click="condition.checked = !condition.checked"
                                        :class="condition.checked ? 'bg-ferro-carbon-900 border-ferro-carbon-900 text-ferro-white' : 'bg-ferro-white border-ferro-carbon-100/70 text-ferro-carbon-700 hover:border-ferro-carbon-900/40 hover:text-ferro-carbon-900'"
                                        class="inline-flex items-center gap-1 px-2.5 py-1 rounded-full border text-[10px] font-semibold transition-colors">
                                    <span x-text="condition.name"></span>
                                    <span :class="condition.checked ? 'text-ferro-steel-300' : 'text-ferro-steel-400'" class="tabular-nums" x-text="condition.count"></span>
                                </button>
                            </template>
                        </div>
                        <button x-show="conditions.length > 2" @click="showAllConditions = !showAllConditions" class="mt-1.5 text-[10px] font-bold text-ferro-carbon-900 hover:text-ferro-yellow-600 flex items-center gap-0.5 transition-colors">
                            <span x-text="showAllConditions ? 'Ver menos' : `+${conditions.length - 2}`"></span>
                            <svg class="w-3 h-3 transition-transform" :class="showAllConditions ? 'rotate-180' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/></svg>
                        </button>
                    </div>

                    <div class="h-px bg-ferro-carbon-100/50 mb-4"></div>

                    {{-- STOCK --}}
                    <label class="flex items-center justify-between cursor-pointer group">
                        <span class="text-sm font-medium text-ferro-carbon-700 group-hover:text-ferro-carbon-900 transition-colors">Solo con stock</span>
                        <button type="button" role="switch" :aria-checked="inStockOnly.toString()" @click="inStockOnly = !inStockOnly"
                                :class="inStockOnly ? 'bg-ferro-yellow-500' : 'bg-ferro-steel-200'"
                                class="relative inline-flex h-5 w-9 items-center rounded-full transition-colors shrink-0 focus:outline-none">
                            <span :class="inStockOnly ? 'translate-x-4' : 'translate-x-0.5'" class="inline-block h-4 w-4 transform rounded-full bg-ferro-white shadow transition-transform"></span>
                        </button>
                    </label>
                </div>
            </aside>

            {{-- COLUMNA DERECHA: ACORDEÓN DE PRODUCTOS (75%) --}}
            <div class="mt-4 flex min-h-96 min-w-0 flex-1 flex-col space-y-3 lg:mt-0 lg:w-[75%]">

                {{-- Sección 1: UNIDAD --}}
                <div x-show="filterType === 'all' || filterType === 'united'" class="bg-ferro-white rounded-2xl border transition-colors"
                     :class="sections.united ? 'border-ferro-yellow-500/60 shadow-md' : 'border-ferro-carbon-100/40 shadow-sm'">
                    {{-- ACTUALIZADO: toggleSection('united') --}}
                    <button type="button" @click="toggleSection('united')" :aria-expanded="sections.united.toString()" aria-controls="panel-united"
                            class="w-full flex items-center justify-between gap-3 px-4 sm:px-5 py-3.5 text-left rounded-2xl hover:bg-ferro-steel-50/40 transition-colors">
                        <span class="flex items-center gap-3 min-w-0">
                            <span class="w-8 h-8 shrink-0 rounded-xl bg-ferro-yellow-500/15 flex items-center justify-center">
                                <svg class="w-4 h-4 text-ferro-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M20 7h-4a4 4 0 00-8 0H4a2 2 0 00-2 2v10a2 2 0 002 2h16a2 2 0 002-2V9a2 2 0 00-2-2z"/></svg>
                            </span>
                            <span class="font-heading text-base font-bold text-ferro-carbon-900 truncate">Productos por Unidad</span>
                            <span class="text-sm text-ferro-steel-500 font-medium shrink-0">(150)</span>
                        </span>
                        <svg class="w-5 h-5 text-ferro-carbon-500 transition-transform duration-300 shrink-0" :class="sections.united ? 'rotate-180' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/></svg>
                    </button>

                    <div id="panel-united" class="grid transition-[grid-template-rows] duration-300 ease-in-out" :class="sections.united ? 'grid-rows-[1fr]' : 'grid-rows-[0fr]'">
                        <div class="overflow-hidden">
                            <div class="px-4 sm:px-5 pb-5 pt-0.5 border-t border-ferro-carbon-100/40">
                                <div id="united-products-app"><card-united-component layout="catalog"></card-united-component></div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Sección 2: GRAN ESCALA --}}
                <div x-show="filterType === 'all' || filterType === 'heavy'" class="bg-ferro-white rounded-2xl border transition-colors"
                     :class="sections.heavy ? 'border-ferro-yellow-500/60 shadow-md' : 'border-ferro-carbon-100/40 shadow-sm'">
                    {{-- ACTUALIZADO: toggleSection('heavy') --}}
                    <button type="button" @click="toggleSection('heavy')" :aria-expanded="sections.heavy.toString()" aria-controls="panel-heavy"
                            class="w-full flex items-center justify-between gap-3 px-4 sm:px-5 py-3.5 text-left rounded-2xl hover:bg-ferro-steel-50/40 transition-colors">
                        <span class="flex items-center gap-3 min-w-0">
                            <span class="w-8 h-8 shrink-0 rounded-xl bg-ferro-yellow-500/15 flex items-center justify-center">
                                <svg class="w-4 h-4 text-ferro-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9"/></svg>
                            </span>
                            <span class="font-heading text-base font-bold text-ferro-carbon-900 truncate">Maquinaria & Gran Escala</span>
                            <span class="text-sm text-ferro-steel-500 font-medium shrink-0">(42)</span>
                        </span>
                        <svg class="w-5 h-5 text-ferro-carbon-500 transition-transform duration-300 shrink-0" :class="sections.heavy ? 'rotate-180' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/></svg>
                    </button>

                    <div id="panel-heavy" class="grid transition-[grid-template-rows] duration-300 ease-in-out" :class="sections.heavy ? 'grid-rows-[1fr]' : 'grid-rows-[0fr]'">
                        <div class="overflow-hidden">
                            <div class="px-4 sm:px-5 pb-5 pt-0.5 border-t border-ferro-carbon-100/40">
                                <div id="heavy-products-app"><card-product-component layout="catalog"></card-product-component></div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Sección 3: AGENDAMIENTO --}}
                <div x-show="filterType === 'all' || filterType === 'scheduling'" class="bg-ferro-white rounded-2xl border transition-colors"
                     :class="sections.scheduling ? 'border-ferro-yellow-500/60 shadow-md' : 'border-ferro-carbon-100/40 shadow-sm'">
                    {{-- ACTUALIZADO: toggleSection('scheduling') --}}
                    <button type="button" @click="toggleSection('scheduling')" :aria-expanded="sections.scheduling.toString()" aria-controls="panel-scheduling"
                            class="w-full flex items-center justify-between gap-3 px-4 sm:px-5 py-3.5 text-left rounded-2xl hover:bg-ferro-steel-50/40 transition-colors">
                        <span class="flex items-center gap-3 min-w-0">
                            <span class="w-8 h-8 shrink-0 rounded-xl bg-ferro-yellow-500/15 flex items-center justify-center">
                                <svg class="w-4 h-4 text-ferro-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                            </span>
                            <span class="font-heading text-base font-bold text-ferro-carbon-900 truncate">Agendamiento (Alquiler)</span>
                            <span class="text-sm text-ferro-steel-500 font-medium shrink-0">(18)</span>
                        </span>
                        <svg class="w-5 h-5 text-ferro-carbon-500 transition-transform duration-300 shrink-0" :class="sections.scheduling ? 'rotate-180' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/></svg>
                    </button>

                    <div id="panel-scheduling" class="grid transition-[grid-template-rows] duration-300 ease-in-out" :class="sections.scheduling ? 'grid-rows-[1fr]' : 'grid-rows-[0fr]'">
                        <div class="overflow-hidden">
                            <div class="px-4 sm:px-5 pb-5 pt-0.5 border-t border-ferro-carbon-100/40">
                                <div id="scheduling-app"><card-scheduling-component layout="catalog"></card-scheduling-component></div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    {{-- DRAWER DE FILTROS — MÓVIL --}}
    <div x-show="filterModalOpen" class="fixed inset-0 z-50 lg:hidden" role="dialog" aria-modal="true" aria-label="Filtros">
        <div x-show="filterModalOpen"
             x-transition:enter="transition-opacity ease-out duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
             x-transition:leave="transition-opacity ease-in duration-200" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"
             class="absolute inset-0 bg-ferro-carbon-900/60 backdrop-blur-sm" @click="filterModalOpen = false"></div>

        <div x-show="filterModalOpen"
             x-transition:enter="transition ease-out duration-300" x-transition:enter-start="translate-x-full" x-transition:enter-end="translate-x-0"
             x-transition:leave="transition ease-in duration-200" x-transition:leave-start="translate-x-0" x-transition:leave-end="translate-x-full"
             class="absolute right-0 top-0 h-full w-[85%] max-w-sm bg-ferro-white shadow-2xl flex flex-col">

            <div class="flex items-center justify-between p-4 border-b border-ferro-carbon-100/40 shrink-0">
                <h4 class="font-heading text-lg font-bold text-ferro-carbon-900">Filtros <span x-show="activeFilterCount > 0" x-text="`(${activeFilterCount})`" class="text-ferro-steel-500 font-medium text-base"></span></h4>
                <button @click="filterModalOpen = false" class="p-2 -mr-2 text-ferro-steel-500 hover:text-ferro-carbon-900"><svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/></svg></button>
            </div>

            <div class="p-5 overflow-y-auto flex-1 custom-scrollbar">
                <div class="mb-5">
                    <h5 class="text-[11px] font-bold text-ferro-carbon-900 uppercase tracking-wider mb-2">Rango de precio</h5>
                    <div class="flex items-center gap-2"><label class="relative w-full"><span class="absolute left-2.5 top-1/2 -translate-y-1/2 text-[10px] text-ferro-steel-400 font-bold">$</span><input type="number" x-model.number="priceMin" placeholder="Mín" class="w-full pl-5 pr-2 py-1.5 text-xs border border-ferro-carbon-100/60 rounded-lg bg-ferro-white focus:outline-none transition-all"></label><span class="text-ferro-steel-400 text-xs">—</span><label class="relative w-full"><span class="absolute left-2.5 top-1/2 -translate-y-1/2 text-[10px] text-ferro-steel-400 font-bold">$</span><input type="number" x-model.number="priceMax" placeholder="Máx" class="w-full pl-5 pr-2 py-1.5 text-xs border border-ferro-carbon-100/60 rounded-lg bg-ferro-white focus:outline-none transition-all"></label></div>
                    <div class="flex flex-wrap gap-1.5 mt-2">
                        <template x-for="preset in pricePresets" :key="preset.label">
                            <button type="button" @click="applyPricePreset(preset)" :class="priceMin === preset.min && priceMax === preset.max ? 'bg-ferro-carbon-900 border-ferro-carbon-900 text-ferro-white' : 'bg-ferro-white border-ferro-carbon-100/70 text-ferro-steel-500 hover:border-ferro-carbon-900/40 hover:text-ferro-carbon-900'" class="px-2.5 py-1 rounded-full border text-[10px] font-semibold transition-colors" x-text="preset.label"></button>
                        </template>
                    </div>
                </div>
                <div class="h-px bg-ferro-carbon-100/50 mb-4"></div>
                <div class="mb-4">
                    <h5 class="text-[11px] font-bold text-ferro-carbon-900 uppercase tracking-wider mb-2">Marcas</h5>
                    <div class="flex flex-wrap gap-1.5">
                        <template x-for="brand in brands" :key="brand.id">
                            <button type="button" @click="brand.checked = !brand.checked" :class="brand.checked ? 'bg-ferro-carbon-900 border-ferro-carbon-900 text-ferro-white' : 'bg-ferro-white border-ferro-carbon-100/70 text-ferro-carbon-700'" class="inline-flex items-center gap-1 px-2.5 py-1 rounded-full border text-[10px] font-semibold transition-colors"><span x-text="brand.name"></span><span :class="brand.checked ? 'text-ferro-steel-300' : 'text-ferro-steel-400'" class="tabular-nums" x-text="brand.count"></span></button>
                        </template>
                    </div>
                </div>
                <div class="h-px bg-ferro-carbon-100/50 mb-4"></div>
                <div class="mb-4">
                    <h5 class="text-[11px] font-bold text-ferro-carbon-900 uppercase tracking-wider mb-2">Categorías</h5>
                    <div class="flex flex-wrap gap-1.5">
                        <template x-for="category in categories" :key="category.id">
                            <button type="button" @click="category.checked = !category.checked" :class="category.checked ? 'bg-ferro-carbon-900 border-ferro-carbon-900 text-ferro-white' : 'bg-ferro-white border-ferro-carbon-100/70 text-ferro-carbon-700'" class="inline-flex items-center gap-1 px-2.5 py-1 rounded-full border text-[10px] font-semibold transition-colors"><span x-text="category.name"></span><span :class="category.checked ? 'text-ferro-steel-300' : 'text-ferro-steel-400'" class="tabular-nums" x-text="category.count"></span></button>
                        </template>
                    </div>
                </div>
                <div class="h-px bg-ferro-carbon-100/50 mb-4"></div>
                <label class="flex items-center justify-between cursor-pointer group">
                    <span class="text-sm font-medium text-ferro-carbon-700">Solo con stock</span>
                    <button type="button" role="switch" :aria-checked="inStockOnly.toString()" @click="inStockOnly = !inStockOnly" :class="inStockOnly ? 'bg-ferro-yellow-500' : 'bg-ferro-steel-200'" class="relative inline-flex h-5 w-9 items-center rounded-full transition-colors shrink-0"><span :class="inStockOnly ? 'translate-x-4' : 'translate-x-0.5'" class="inline-block h-4 w-4 transform rounded-full bg-ferro-white shadow transition-transform"></span></button>
                </label>
            </div>

            <div class="p-4 border-t border-ferro-carbon-100/40 flex items-center gap-3 shrink-0">
                <button @click="clearFilters()" class="px-4 py-3 text-sm font-bold text-ferro-carbon-700 hover:text-ferro-carbon-900 transition-colors">Limpiar</button>
                <button @click="filterModalOpen = false" class="flex-1 py-3 rounded-xl bg-ferro-carbon-900 text-ferro-white text-sm font-bold hover:bg-ferro-carbon-700 transition-colors">Ver resultados <span x-show="activeFilterCount > 0" x-text="`(${activeFilterCount})`"></span></button>
            </div>
        </div>
    </div>

    <style>
        [x-cloak] { display: none !important; }
        .custom-scrollbar { scrollbar-width: thin; scrollbar-color: #D4D4D8 transparent; }
        .custom-scrollbar::-webkit-scrollbar { width: 6px; height: 6px; }
        .custom-scrollbar::-webkit-scrollbar-track { background: transparent; }
        .custom-scrollbar::-webkit-scrollbar-thumb { background: #D4D4D8; border-radius: 10px; }
        .custom-scrollbar::-webkit-scrollbar-thumb:hover { background: #A1A1AA; }
    </style>
</section>
</div>
