<?php

$name = $_POST['nombre'];
$correo = $_POST['correo'];
$edad = $_POST['edad'];
$mensaje = $_POST['mensaje'];

$header = 'From' . $correo . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$message = "este mensaje fue enviado por: " . $name . " \r\n";
$message .= "su email es: " . $correo . " \r\n";
$message .="Su edad es: " . $edad . " \r\n";
$message .= "mensaje:" . $_POST['mensaje'] . " \r\n";
$message .="enviado el:" .date('d/m/y', time()) . " \r\n";

$para = 'olverasfercho@gmail.com';
$asunto = 'asunto del mensaje';

mail($para, $asunto, utf8_decode($mensaje), $header);

header("Location:index.php");
?>
