<?php

require "conexion.php";

$username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_EMAIL);
$password = $_POST["password"];

$sql= "SELECT usuario.email , usuario.password, usuario.nombre, usuario.id_usuario  
FROM usuario
WHERE usuario.email = '$username'";

$resultado = mysqli_query($conexion,$sql);

if (!$resultado) {

    die("no hay resultado de la consulta" . mysqli_error($conexion));

} else {
    
    $login = mysqli_fetch_array($resultado, MYSQLI_BOTH);

        if(!password_verify($password, $login["password"])){
            header("Location: ../login.php?mensaje=¡¡¡Email o Contraseña incorrecta!!!");
        }
        else{

        

            session_start();
            $_SESSION["username"] = $login["nombre"];
            $_SESSION["id"] = $login["id_usuario"];
            header("Location: ../bienvenido.php");
        }
      

}
?>