@php
    $documentTitle = 'Política de garantías';
    $documentDescription = 'Lineamientos para solicitar revisión de productos y gestionar garantías mediante los canales de atención de FERRANOVA.';
    $documentNotice = 'Cada solicitud se evalúa según el producto, sus condiciones de uso, la información de compra y la cobertura informada al momento de la venta.';
    $legalSections = [
        ['id' => 'cobertura', 'title' => 'Cobertura', 'paragraphs' => ['La garantía cubre defectos atribuibles al producto dentro del periodo informado en la compra, sujeto a diagnóstico y condiciones del fabricante o proveedor.'], 'items' => []],
        ['id' => 'solicitud', 'title' => 'Cómo solicitarla', 'paragraphs' => ['Comunícate con atención al cliente e incluye la información necesaria para identificar la compra y analizar el caso.'], 'items' => ['Número de pedido, factura o comprobante.', 'Descripción clara de la novedad.', 'Fotografías o videos cuando sean necesarios.', 'Datos de contacto actualizados.']],
        ['id' => 'revision', 'title' => 'Proceso de revisión', 'paragraphs' => ['FERRANOVA confirmará la recepción de la solicitud, indicará si el producto debe ser enviado o inspeccionado y comunicará el resultado del diagnóstico.'], 'items' => []],
        ['id' => 'exclusiones', 'title' => 'Situaciones no cubiertas', 'paragraphs' => ['La cobertura puede no aplicar cuando se evidencie desgaste normal, uso inadecuado, instalación incorrecta, golpes, humedad, alteraciones o reparaciones no autorizadas.'], 'items' => []],
        ['id' => 'soluciones', 'title' => 'Soluciones disponibles', 'paragraphs' => ['Según el diagnóstico y la cobertura aplicable, la solución podrá incluir reparación, cambio, reposición de piezas u otra alternativa informada al cliente.'], 'items' => []],
        ['id' => 'transporte', 'title' => 'Entrega y transporte', 'paragraphs' => ['Las condiciones de recolección, envío y costos asociados se informarán para cada caso antes de recibir el producto.'], 'items' => []],
    ];
@endphp

@include('modules.legal.layouts.legal-document')

