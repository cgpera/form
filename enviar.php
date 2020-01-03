<?php
ini_set("include_path", '/home/allbacte/php:' . ini_get("include_path") );
include("Mail.php"); # Archivo interno del servidor
$recipients = "cgpera@gmail.com"; # Mail del receptor del correo
$headers["From"] = "info@allbacter.com.ar"; # Cuenta de correo valida del dominio
$headers["To"] = "info@allbacter.com.ar"; # Destinatario del correo
$headers["Subject"] = "Prueba"; # Asunto de mail
$mailbody = "Hola esto es una prueba."; # Cuerpo del mail
$smtpinfo["host"] = "smtp.gmail.com"; # Servidor SMTP
$smtpinfo["port"] = "587";
$smtpinfo["auth"] = true;
$smtpinfo["username"] = "cgpera@gmail.com"; # Cuenta de correo para autentificar
$smtpinfo["password"] = "C@mell001"; # Clave de la cuenta de correo
$mail_object =&Mail::factory("smtp", $smtpinfo);
$mail_object->send($recipients, $headers, $mailbody);
echo "el correo fue enviado";
?>