<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8" collation utf8-spanish-ci>
 <title>Veterinaria Ros</title>
</head>
<body>
<?php 
$destino = "nob32_2@hotmail.com";
$asunto = "Formulario de contacto de www.veterinariaros.com.ar";
$message = "Hola David, este mensaje viene del sitio web de Veterinaria Ros";
$web = utf8_decode("\nRegresar a página principal: www.veterinariaros.com.ar");
$nombre = utf8_decode($_POST["nombre"]);
$apellido = utf8_decode($_POST["apellido"]);
$provincia = utf8_decode($_POST["provincia"]);
$localidad = utf8_decode($_POST["localidad"]);
$email = utf8_decode($_POST["email"]);
$domicilio = utf8_decode($_POST["domicilio"]);
$consulta = utf8_decode($_POST["message"]);
$contenido = "Nombre: " . $nombre . "\nApellido: " . $apellido . "\nProvincia: " . $provincia . "\nLocalidad: " . $localidad . "\nEmail: " . $email ."\nConsulta:" . $consulta  . $web;
mail($destino, $asunto, $contenido , $message);
header("Location:gracias.php");
?>
</body>
</html>


