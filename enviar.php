<?php

// Llamando a los campos
$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$telefono = $_POST['telefono'];
$mensaje = $_POST['mensaje'];

// Datos para el correo
$destinatario = "esteban.salazar.p@gmail.com";
$asunto = "Contacto desde nuestra web";

$mensaje2 = "De: $nombre \n";
$mensaje2 .= "Correo: $correo \n";
$mensaje2 .= "Telefono: $telefono \n";
$mensaje2 .= "Mensaje: $mensaje";

// Enviando Mensaje
mail($destinatario, $asunto, $mensaje2);
header('Location:mensaje_envio.html');

?>
