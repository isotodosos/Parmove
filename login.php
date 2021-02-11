<?php 
include "./php/acciones.php";
abrir_sesion();
require "./php/conexion.php";
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registro</title>
    <link rel="stylesheet" href="fontawesome-free-5.11.2-web/css/all.min.css"><!--para icono hamburguesa-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css"><!--para slider-->
    <link rel="stylesheet" href="css/estilos.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script><!--para Jquery-->
    <script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script><!--para slider-->
    <script src="js/script.js"></script>
</head>
<body>
    <!--https://wireframe.cc/itxiv6-->

<?php
include "header.php";
$respuesta ="";
if(isset($_GET["mensaje"])){
$respuesta = $_GET["mensaje"];
}
?>

<main class="contieneLogin">
    
    <div>

        <h4>LOG IN</h4>
        <form action="./php/gestion_login.php" method="POST" id="form_registro">

            <input type="email" name="username" id="username" placeholder="Email" required><br>
            <input type="password" name="password" id="password" placeholder="Contraseña" required><br>
            <input type="submit" value="Acceder" id="btn_loguin">
            <p>Si aun no estás registrado hazlo <a href="registro_usuario.php">aquí</a> </p>

        </form>

        <p class="respuesta"><?php echo $respuesta;?></p>  

    </div>
</main>


<?php
include "footer.php";
?>
</body>
</html>