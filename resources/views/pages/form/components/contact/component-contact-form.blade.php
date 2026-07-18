{{-- ==========================================================
    COMPONENTE: FORMULARIO DE CONTACTO
    ========================================================== --}}

<form action="#" method="POST" class="w-full space-y-5">

    {{-- FILA 1: NOMBRE + EMPRESA --}}
    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
        <div>
            <label for="name" class="block text-sm font-medium text-ferro-carbon-900 mb-1.5 font-heading">
                Nombre
            </label>
            <input type="text" id="name" name="name" placeholder="Tu nombre" 
                   class="w-full px-4 py-3 bg-ferro-steel-100/80 border border-ferro-carbon-100/50 rounded-xl text-ferro-carbon-900 text-sm focus:outline-none focus:border-ferro-yellow-500 transition-all placeholder:text-ferro-steel-400 font-body">
        </div>
        <div>
            <label for="company" class="block text-sm font-medium text-ferro-carbon-900 mb-1.5 font-heading">
                Empresa <span class="text-ferro-steel-400 text-xs font-normal">(Opcional)</span>
            </label>
            <input type="text" id="company" name="company" placeholder="Tu empresa" 
                   class="w-full px-4 py-3 bg-ferro-steel-100/80 border border-ferro-carbon-100/50 rounded-xl text-ferro-carbon-900 text-sm focus:outline-none focus:border-ferro-yellow-500 transition-all placeholder:text-ferro-steel-400 font-body">
        </div>
    </div>

    {{-- FILA 2: TELÉFONO + CORREO --}}
    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
        <div>
            <label for="phone" class="block text-sm font-medium text-ferro-carbon-900 mb-1.5 font-heading">
                Teléfono
            </label>
            <input type="tel" id="phone" name="phone" placeholder="+57 300 000 0000" 
                   class="w-full px-4 py-3 bg-ferro-steel-100/80 border border-ferro-carbon-100/50 rounded-xl text-ferro-carbon-900 text-sm focus:outline-none focus:border-ferro-yellow-500 transition-all placeholder:text-ferro-steel-400 font-body">
        </div>
        <div>
            <label for="email" class="block text-sm font-medium text-ferro-carbon-900 mb-1.5 font-heading">
                Correo
            </label>
            <input type="email" id="email" name="email" placeholder="correo@empresa.com" 
                   class="w-full px-4 py-3 bg-ferro-steel-100/80 border border-ferro-carbon-100/50 rounded-xl text-ferro-carbon-900 text-sm focus:outline-none focus:border-ferro-yellow-500 transition-all placeholder:text-ferro-steel-400 font-body">
        </div>
    </div>

    {{-- FILA 3: ASUNTO (SELECT) --}}
    <div>
        <label for="subject" class="block text-sm font-medium text-ferro-carbon-900 mb-1.5 font-heading">
            Asunto
        </label>
        <select id="subject" name="subject" 
                class="w-full px-4 py-3 bg-ferro-steel-100/80 border border-ferro-carbon-100/50 rounded-xl text-ferro-carbon-900 text-sm focus:outline-none focus:border-ferro-yellow-500 transition-all font-body appearance-none bg-[url('data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTIiIGhlaWdodD0iOCIgdmlld0JveD0iMCAwIDEyIDgiIGZpbGw9Im5vbmUiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PHBhdGggZD0iTTEgMS41TDYgNi41TDExIDEuNSIgc3Ryb2tlPSIjNjQ3NDhCIiBzdHJva2Utd2lkdGg9IjIiIHN0cm9rZS1saW5lY2FwPSJyb3VuZCIgc3Ryb2tlLWxpbmVqb2luPSJyb3VuZCIvPjwvc3ZnPg==')] bg-no-repeat bg-position-[right_1rem_center] bg-size-[12px_8px]">
            <option value="">Selecciona un asunto</option>
            <option value="cotizacion">Cotización de productos</option>
            <option value="alquiler">Alquiler de equipos</option>
            <option value="asesoria">Asesoría técnica</option>
            <option value="otros">Otros</option>
        </select>
    </div>

    {{-- FILA 4: MENSAJE --}}
    <div>
        <label for="message" class="block text-sm font-medium text-ferro-carbon-900 mb-1.5 font-heading">
            Mensaje
        </label>
        <textarea id="message" name="message" rows="4" placeholder="¿En qué podemos ayudarte?" 
                  class="w-full px-4 py-3 bg-ferro-steel-100/80 border border-ferro-carbon-100/50 rounded-xl text-ferro-carbon-900 text-sm focus:outline-none focus:border-ferro-yellow-500 transition-all placeholder:text-ferro-steel-400 font-body resize-none"></textarea>
    </div>

    {{-- BOTÓN DE ENVÍO (CON HOVER PREMIUM) --}}
    <button type="submit" 
            class="w-full bg-ferro-yellow-500 hover:bg-ferro-yellow-600 cursor-pointer text-ferro-black font-bold text-sm py-3.5 rounded-xl transition-all duration-300 flex items-center justify-center gap-2 shadow-lg shadow-ferro-yellow-500/25 hover:shadow-xl hover:shadow-ferro-yellow-500/40 hover:scale-[1.01] hover:-translate-y-0.5 active:scale-95 font-heading">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M6 12L3.269 3.126A59.768 59.768 0 0121.485 12 59.77 59.77 0 013.27 20.876L5.999 12zm0 0h7.5" /></svg>
        Enviar mensaje
    </button>

</form>