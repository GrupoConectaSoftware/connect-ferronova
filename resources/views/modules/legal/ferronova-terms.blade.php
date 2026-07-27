@php
    $documentTitle = 'Términos y condiciones';
    $documentDescription = 'Reglas de uso de los canales digitales, solicitudes comerciales, compras y servicios ofrecidos por FERRANOVA.';
    $documentNotice = 'Al utilizar el sitio o enviar una solicitud aceptas estos términos en lo aplicable a tu interacción como cliente.';
    $legalSections = [
        ['id' => 'alcance', 'title' => 'Alcance', 'paragraphs' => ['Estos términos regulan el acceso y uso del sitio web, la creación de cuentas y las solicitudes relacionadas con productos, cotizaciones y servicios.'], 'items' => []],
        ['id' => 'cuenta', 'title' => 'Cuenta del cliente', 'paragraphs' => ['El cliente debe suministrar información veraz, mantener sus credenciales protegidas y notificarnos cualquier uso no autorizado de su cuenta.'], 'items' => []],
        ['id' => 'informacion', 'title' => 'Información de productos', 'paragraphs' => ['Las imágenes son de referencia. Precios, inventario, características y disponibilidad pueden requerir confirmación comercial antes de cerrar una compra.'], 'items' => []],
        ['id' => 'pedidos', 'title' => 'Pedidos y cotizaciones', 'paragraphs' => ['Agregar un producto al carrito o solicitar una cotización no garantiza reserva de inventario. El pedido se confirma cuando FERRANOVA valida disponibilidad, entrega y forma de pago.'], 'items' => []],
        ['id' => 'uso', 'title' => 'Uso adecuado', 'paragraphs' => ['No está permitido afectar la seguridad del sitio, suplantar identidades, automatizar solicitudes abusivas o utilizar el servicio para actividades ilícitas.'], 'items' => []],
        ['id' => 'cambios', 'title' => 'Cambios y contacto', 'paragraphs' => ['Podemos actualizar estos términos para reflejar cambios operativos o del servicio. Las consultas pueden realizarse mediante nuestros canales oficiales.'], 'items' => []],
    ];
@endphp

@include('modules.legal.layouts.legal-document')

