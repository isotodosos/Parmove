



<?php

//ini_set( 'display_errors', 1 );
//error_reporting( E_ALL );



$nombre = $_POST["nombre"];
$from = $_POST["email_usuario"];
$to = $_POST["email_contacto"];
$subject = "Alquiler de coche Parmove";
$message = $_POST["contenido"];
$headers = "From:" . $to;

//ini_set ("sendmail_from", $from);
ini_set ("smtp_port", 25);
mail($from,$subject,$message, $headers);

echo $nombre. " ". "tu mensaje ha sido enviado. El propietario se pondrá en contacto contigo en breves momentos";

?>