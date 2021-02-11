<?php

require "conexion.php";



$nickname = $_POST["nombre"];
$nickname1 = $_POST["primer_apellido"];
$nickname2 = $_POST["segundo_apellido"];
$fechanac = $_POST["fecha_nacimiento"];
$numerocarnet = $_POST["numero_carnet"];
$fechacarnet = $_POST["fecha_caducidad"];
$direccion = $_POST["direccion"];
$username = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$password = $_POST["password1"];
$encriptada_pass = password_hash($password , PASSWORD_BCRYPT);

$sql = "INSERT INTO `usuario`(`id_usuario`, `nombre`, `primer_apellido`, `segundo_apellido`, `fecha_nacimiento`, `carnet_conducir`, `fecha_caducidad`, `direccion`, `email`, `password`) 
VALUES (NULL,'$nickname','$nickname1','$nickname2','$fechanac',$numerocarnet,'$fechacarnet','$direccion','$username','$encriptada_pass')";

$resultado = mysqli_query($conexion, $sql);
if (!$resultado) {

    die("no hay resultado de la consulta" . mysqli_error($conexion));

} else {
    
    header("Location:../login.php");
}





?>