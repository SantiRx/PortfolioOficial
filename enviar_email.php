<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recoge los datos del formulario
    $email = $_POST["Email"];
    $nombre = $_POST["Nombre"];
    $consulta = $_POST["pedido"];

    // Dirección de correo a la que se enviará el mensaje
    $destinatario = "developers.st4r@gmail.com";

    // Asunto del correo
    $asunto = "Nuevo mensaje de contacto desde tu sitio web";

    // Construye el cuerpo del mensaje
    $mensaje = "Nuevo mensaje de contacto:\n\n";
    $mensaje .= "Nombre: $nombre\n";
    $mensaje .= "Email: $email\n";
    $mensaje .= "Consulta: $consulta\n";

    // Cabeceras del correo
    $cabeceras = "From: $email\r\nReply-To: $email\r\n";

    // Intenta enviar el correo
    if (mail($destinatario, $asunto, $mensaje, $cabeceras)) {
        echo "¡El mensaje se ha enviado con éxito!";
    } else {
        echo "Hubo un problema al enviar el mensaje. Por favor, inténtalo de nuevo más tarde.";
    }
}
?>
