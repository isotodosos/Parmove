<?php

include "./php/acciones.php";
abrir_sesion();

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bienvenido</title>
    <link rel="stylesheet" href="fontawesome-free-5.11.2-web/css/all.min.css"><!--para icono hamburguesa-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css"><!--para slider-->
    <link rel="stylesheet" href="css/estilos.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script><!--para JQuery-->
  <script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script><!--para slider-->
  <script src="js/script.js"></script>
</head>
<body>
    <!--https://wireframe.cc/QUQre0-->

<?php
include "header.php";
?> 
<main class="contenidoBienvenido"> 


    
    <h1>Bienvenid@ <?php echo $_SESSION["username"];?> ¿Que quieres hacer ahora?</h1>
    
    <div class="row">
        <div class="cromobienvenido col-12">
            <a href="registro_vehiculo.php?id=<?php echo $_SESSION["id"];?>"><img src="images/autos-2688161_1280.jpg" alt="Diferentes coches"></a>
            <a href="registro_vehiculo.php?id=<?php echo $_SESSION["id"];?>"><h4>Registrar o modificar tu vehículo</h4></a>
        </div>
        <div class="cromobienvenido col-12">
            <a href="buscador_gestor.php?id=<?php echo $_SESSION["id"];?>"><img src="images/driving-2732934_1280.jpg" alt="Conduciendo coche"></a>
            <a href="buscador_gestor.php?id=<?php echo $_SESSION["id"];?>"><h4>Alquilar un vehículo</h4></a>
        </div>
        
        

    </div>
</main> 
<?php
include "footer.php";
?>    
</body>
</html>