<?php
//Recibimos los campos del formulario
// if(isset($_POST["nombre"]) && isset($_POST["correo"]) && isset($_POST['asunto']) && isset($_POST["comentario"]) ){
$nombre=$_POST['nombre'];
$correo=$_POST['correo'];
$telefono=$_POST['telefono'];
$mensaje=$_POST['mensaje'];

$header = 'From: '.$correo . "\r\n";
$header .= "X-Mailer: PHP/" . phpversion() .  "\r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

/* $mensaje = "Mensaje enviado por " . $nombre .  ",\r\n";
$mensaje .= "Su email es: " . $correo .  "\r\n";
$mensaje .= "Mensaje: " .$_POST['mensaje'] .  "\r\n";
$mensaje .= "Enviado el " . date('d/m/Y', time());
 */
//Acomodamos todo para darle orden al cuerpo del mensaje
$texto_mensaje="El usuario ".$nombre." dijo: \n".$mensaje." \n
Puedes contactarlo a su correo: ".$correo;
if(mail("info@allbacter.com.ar",$telefono, utf8_decode($mensaje), $header)){
echo "Su mensaje se ha enviado! Nos pondremos en contacto contigo.";
sleep(3);
header("Location: index4.html");
}
// }
?>
