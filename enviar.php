<?php
$destinatario = "antolini.martin@gmail.com";
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$mensaje = $_POST['mensaje'];
$asunto = "Mensaje desde tu sitio web";

$contenido = "Nombre: $nombre\n";
$contenido .= "Email: $email\n\n";
$contenido .= "Mensaje:\n$mensaje\n";

$headers = "From: $nombre <$email>";

mail($destinatario, $asunto, $contenido, $headers);

header("Location: confirmacion.html");
?>
