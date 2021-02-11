<?php

include "./php/acciones.php";
abrir_sesion();
include "./php/conexion.php";



?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Coche seleccionado</title>
    <link rel="stylesheet" href="fontawesome-free-5.11.2-web/css/all.min.css"><!--para icono hamburguesa-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css"><!--para slider-->
    <link rel="stylesheet" href="css/estilos.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script><!--para Jquery-->
    <script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script><!--para slider-->
    <script src="js/script.js"></script>
</head>
<body>
    <!--https://wireframe.cc/VsXebX-->

<?php

include "header.php";
if((isset($_GET["car"])) && isset(($_GET["yo"]))){
    $car = $_GET["car"];
    $yo = $_GET["yo"];

}

$sqlCar="SELECT  
vehiculo.marca as marca,
vehiculo.modelo as modelo,
vehiculo.plazas as plazas,
vehiculo.color as color,
vehiculo.combustible as combustible,
vehiculo.seguro as seguro,
vehiculo.precio as precio,
vehiculo.disponibilidad as disponibilidad,
vehiculo.foto_coche as foto_coche,
usuario.nombre as nombre,
usuario.email as email_propietario
FROM vehiculo, usuario 
where vehiculo.id_vehiculo = $car and
vehiculo.id_usuario = usuario.id_usuario";
$resultaCar = mysqli_query($conexion, $sqlCar);
$filaCar = mysqli_fetch_array($resultaCar, MYSQLI_BOTH); 

mysqli_free_result($resultaCar);


?>


<main class="contenidoSeleccionado">


    <section class="seleccionado row">

        <h2 class="col-12">Vehiculo seleccionado</h2>

        <div class="mitadSeleccionado col-12">
            <img src="images/bbdd/<?php echo $filaCar["foto_coche"];?>" alt="<?php echo $filaCar["marca"]." ".$filaCar["modelo"];?>">
            <h2><?php echo $filaCar["precio"]." €/Dia";?></h2>
        </div>
        <div class="mitadSeleccionado col-12">
            <h4>MARCA: <?php echo $filaCar["marca"];?></h4>
            <h4>MODELO: <?php echo $filaCar["modelo"];?></h4>
            <h4>PLAZAS: <?php echo $filaCar["plazas"];?></h4>
            <h4>COLOR: <?php echo $filaCar["color"];?></h4>
            <h4>COMBUSTIBLE: <?php echo $filaCar["combustible"];?></h4>
            <h4>SEGURO: <?php echo $filaCar["seguro"];?></h4>
            <h4>DISPONIBILIDAD: <?php echo $filaCar["disponibilidad"];?></h4>
            <h4>PROPIETARIO: <?php echo $filaCar["nombre"];?></h4>
            
        </div>
    </section>

    <section class="form_reserva row">
        <h2 class="col-12">Contacta con el propietario por email</h2>
        <h6 class="col-12">( Tiempo medio de respuesta 10 min )</h6>
        <form  class="col-12" action="./php/gracias.php" method="post">

            <?php
            $sqluser = "SELECT usuario.nombre as nombre,
            usuario.primer_apellido as apellido1,
            usuario.segundo_apellido as apellido2,
            usuario.email as email_usuario
            from usuario
            where usuario.id_usuario = $yo";

            $resuser = mysqli_query($conexion, $sqluser);
            $filauser = mysqli_fetch_array($resuser, MYSQLI_BOTH); 

            mysqli_free_result($resuser);

            ?>

        
            <h5>Usuario: <input type="text" name="nombre" value="<?php echo $filauser["nombre"];?>" id="nombre"></h5><br>
            <h5>De: <input type="email" name="email_usuario" value="<?php echo $filauser["email_usuario"];?>" id="email_usuario"></h5><br>
            <h5>Para: <input type="email" name="email_contacto" value="contacto@parmove.com" id="email_propietario"></h5><br>
            <textarea name="contenido" id="contenido" cols="30" rows="10" placeholder="Escribe el contenido del email" required></textarea><br>
            <input id="botonEnviar" type="submit" name="enviar" value="Enviar">
            
        </form>
    </section>
</main>



<?php

include "footer.php";
?>    

</body>
</html>