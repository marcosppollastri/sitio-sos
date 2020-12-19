<?php

$name = $_POST['name'];
$lastname = $_POST['lastname']
$visitor_email = $_POST['email'];

$email_from = 'daniela_williams@hotmail.com';

$email_subject = "Alguien se quiere comunicar con Shark";

$email_body = "Nombre: $name.\n".
                "Apellido: $lastname.\n".
                    "Correo: $visitor_email.\n";


$to = "dani.elen.williams@gmail.com";

$headers = "From: $email_from \r\n";

mail($to,$email_subject,$email_body,$headers);

header("Location: menu_html.html");

?>