@php
    $documentTitle = 'Política de privacidad';
    $documentDescription = 'Explicamos cómo protegemos la privacidad de quienes navegan, crean una cuenta o interactúan con FERRANOVA.';
    $documentNotice = 'Trabajamos para recopilar únicamente la información necesaria y utilizarla de manera transparente y segura.';
    $legalSections = [
        ['id' => 'informacion', 'title' => 'Información recopilada', 'paragraphs' => ['Podemos recibir información que entregas en formularios y datos técnicos básicos generados al utilizar el sitio.'], 'items' => ['Datos de identificación y contacto.', 'Información de pedidos, favoritos y cotizaciones.', 'Datos técnicos necesarios para seguridad y funcionamiento.']],
        ['id' => 'uso', 'title' => 'Cómo utilizamos la información', 'paragraphs' => ['La usamos para prestar servicios, responder solicitudes, personalizar la experiencia, proteger la plataforma y cumplir obligaciones aplicables.'], 'items' => []],
        ['id' => 'cookies', 'title' => 'Almacenamiento local y cookies', 'paragraphs' => ['El sitio puede utilizar almacenamiento local y tecnologías similares para conservar el carrito, favoritos, preferencias y datos necesarios para la sesión.'], 'items' => []],
        ['id' => 'terceros', 'title' => 'Proveedores y terceros', 'paragraphs' => ['La información podrá ser procesada por proveedores que apoyen servicios tecnológicos, pagos, comunicaciones o entregas, bajo condiciones de confidencialidad y seguridad.'], 'items' => []],
        ['id' => 'seguridad', 'title' => 'Seguridad', 'paragraphs' => ['Aplicamos medidas razonables para reducir riesgos de acceso, pérdida o modificación no autorizada. Ningún sistema digital puede garantizar riesgo cero.'], 'items' => []],
        ['id' => 'opciones', 'title' => 'Tus opciones', 'paragraphs' => ['Puedes actualizar información de tu cuenta, gestionar preferencias y comunicarte con nosotros para consultas sobre privacidad.'], 'items' => []],
    ];
@endphp

@include('modules.legal.layouts.legal-document')

