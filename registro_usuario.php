<?php 
include "./php/acciones.php";
abrir_sesion();
require "./php/conexion.php";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registro_usuario</title>
    <link rel="stylesheet" href="fontawesome-free-5.11.2-web/css/all.min.css"><!--para icono hamburguesa-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css"><!--para slider-->
    <link rel="stylesheet" href="css/estilos.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script><!--para Jquery-->
    <script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script><!--para slider-->
    <script src="js/script.js"></script>
</head>
<body>
    <!--https://wireframe.cc/5Js0cV-->
<?php
include "header.php";
?>

<main class="contenidoRegistroUsuario">

<div>
    <h4>RELLENA TODOS LOS CAMPOS DEL FORMULARIO PARA DARTE DE ALTA COMO USUARIO</h4>
    <h6>(Accederás a la plataforma con el email y password que introduzcas)</h6>
    
    
    <form action="php/gestion_registro_usuario.php" method="POST" id="form_r_u"><br>
        <ul>
            <li>Nombre <input type="text" name="nombre" id="nombreForm" required></li>
            <li>Primer Apellido <input type="text" name="primer_apellido" id="primerApellidoForm" required></li>
            <li>Segundo Apellido <input type="text" name="segundo_apellido" id="segundoApellidoForm" required></li>
            <li>Fecha de Nacimiento <input type="date" name="fecha_nacimiento" id="FechanacForm" required></li>
            <li>Nº de Carnet <input type="number" name="numero_carnet" id="numeroCarnetForm" required></li>
            <li>Fecha de Caducidad <input type="date" name="fecha_caducidad" id="fechaCadForm" required></li>
            <li>Dirección <input type="text" name="direccion" id="direccionForm" required></li>
            <li>Email <input type="email" name="email" id="emailRegistro" required></li>
            <li>Password <input type="password" name="password1" id="password1" required></li>
            <li>Repite Password <input type="password" name="password2" id="password2" required></li>
            <li><input type="submit" value="Registrarme" id="btn_registro"></li>

        </ul>
        
        
    </form>
</div>

</main>


<?php
include "footer.php";
?>
</body>
</html>