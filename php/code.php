<?php
$to = "recetariovip@gmail.com";
$subject = "Suscripcion a RecetarioVIP";
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$terminos = $_POST['terminos'];


$message = "
<html>
<head>
<title>Formulario de contacto</title>
</head>
<body>
<h1>Informacion de contacto</h1>
<p>Nombre y apellido: $nombre </p> 
<p>Email: $email </p> 
</body>
</html>";
 echo 'Thanks';
mail($to, $subject, $message, $headers);
?>

