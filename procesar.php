<?php
// Verificamos si el formulario fue enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recogemos los datos del formulario
    $nombre = htmlspecialchars(trim($_POST["nombre"]));
    $correo = htmlspecialchars(trim($_POST["correo"]));

    // Dirección de destino
    $destinatario = "santiagoarias2356@gmail.com";

    // Asunto del correo
    $asunto = "Nuevo mensaje del formulario";

    // Cuerpo del mensaje
    $mensaje = "Has recibido un nuevo mensaje desde el formulario:\n\n";
    $mensaje .= "Nombre: $nombre\n";
    $mensaje .= "Correo: $correo\n";

    // Cabeceras del correo
    $cabeceras = "From: santiagoarias2356@gmail.com\r\n";
    $cabeceras .= "Reply-To: $correo\r\n";
    $cabeceras .= "Content-Type: text/plain; charset=utf-8\r\n";

    // Envío del correo
    if (mail($destinatario, $asunto, $mensaje, $cabeceras)) {
        echo "Mensaje enviado correctamente.";
    } else {
        echo "Hubo un error al enviar el mensaje.";
    }
} else {
    // Si alguien accede directamente al archivo sin usar el formulario
    echo "Acceso no permitido.";
}
?>
