<?php
$to = "cgpera@gmail.com";
$subject = "My subject";
$txt = "Hello world!";
$headers = "From: cgpera@gmail.com" . "\r\n" .
"CC: ";

mail($to,$subject,$txt,$headers);
?>