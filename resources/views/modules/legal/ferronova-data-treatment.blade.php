@php
    $documentTitle = 'Tratamiento de datos personales';
    $documentDescription = 'Conoce cómo recopilamos, utilizamos y protegemos la información que entregas al crear una cuenta o utilizar nuestros servicios.';
    $documentNotice = 'Esta política aplica al tratamiento de información de clientes, visitantes y usuarios naturales de los canales digitales de FERRANOVA.';
    $legalSections = [
        ['id' => 'responsable', 'title' => 'Responsable del tratamiento', 'paragraphs' => ['FERRANOVA es responsable del tratamiento de los datos recopilados mediante formularios, módulos de compra y canales de atención.'], 'items' => []],
        ['id' => 'datos', 'title' => 'Datos recopilados', 'paragraphs' => ['Podemos solicitar información de identificación, contacto, entrega y datos relacionados con pedidos, favoritos, cotizaciones o solicitudes.'], 'items' => []],
        ['id' => 'finalidades', 'title' => 'Finalidades', 'paragraphs' => ['La información se utiliza para administrar la cuenta y prestar los servicios solicitados.'], 'items' => ['Procesar pedidos y cotizaciones.', 'Brindar soporte y responder consultas.', 'Proteger la plataforma y prevenir fraude.', 'Enviar comunicaciones cuando exista autorización.']],
        ['id' => 'derechos', 'title' => 'Derechos del titular', 'paragraphs' => ['Puedes conocer, actualizar, rectificar o solicitar la eliminación de tus datos y presentar consultas relacionadas con su tratamiento.'], 'items' => []],
        ['id' => 'seguridad', 'title' => 'Seguridad y conservación', 'paragraphs' => ['Aplicamos medidas razonables de protección y conservamos la información durante el tiempo necesario para las finalidades informadas.'], 'items' => []],
        ['id' => 'consultas', 'title' => 'Consultas y solicitudes', 'paragraphs' => ['Puedes utilizar el formulario de contacto e indicar que tu solicitud está relacionada con protección de datos personales.'], 'items' => []],
    ];
@endphp

@include('modules.legal.layouts.legal-document')
