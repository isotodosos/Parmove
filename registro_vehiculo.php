<?php

include "./php/acciones.php";
abrir_sesion();
include "./php/conexion.php"

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Datos de tu vehículo</title>
    <link rel="stylesheet" href="fontawesome-free-5.11.2-web/css/all.min.css"><!--para icono hamburguesa-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css"><!--para slider-->
    <link rel="stylesheet" href="css/estilos.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script><!--para Jquery-->
    <script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script><!--para slider-->
    <script src="js/script.js"></script>
</head>
<body>
    <!--https://wireframe.cc/CsJea0-->
<?php
include "header.php";
include "php/insertar_vehiculo.php";
include "php/editar_vehiculo.php";
include "php/borrar_vehiculo.php";



if(isset($_GET["id"])){
    $identificador = $_GET["id"];
}
$respuesta = "";
if(isset($_GET["respuesta"])){
    $respuesta = "¡¡¡¡ ".$_GET["respuesta"]." !!!!";
}

$disabledINS="";
$disabledEDIT="";
$disabledBORR="";
    //////////////temporalmente
    $sql = "SELECT usuario.id_usuario as id_usuario,
     usuario.nombre as nombre,
      vehiculo.id_vehiculo as id_vehiculo,
       vehiculo.marca as marca,
        vehiculo.modelo as modelo,
         vehiculo.plazas as plazas,
          vehiculo.color as color,
           vehiculo.combustible as combustible,
            vehiculo.seguro as seguro,
             vehiculo.precio as precio,
              vehiculo.disponibilidad as disponibilidad,
               vehiculo.foto_coche as foto,
                zona.id_zona as id_zona,
                 zona.nombre_zona as nombre_zona,
                  tipo.id_tipo as id_tipo,
                   tipo.dimension as dimension
                    FROM usuario, vehiculo, zona, tipo
                     WHERE usuario.id_usuario = vehiculo.id_usuario
                      AND vehiculo.id_zona = zona.id_zona
                       AND vehiculo.id_tipo = tipo.id_tipo
                       AND usuario.id_usuario = '$identificador'";

    $resultado = mysqli_query($conexion,$sql);
   

    if (!$resultado) {

        die("no hay resultado de la consulta" . mysqli_error($conexion));

    } 
    else {
        
        $login = mysqli_fetch_array($resultado, MYSQLI_BOTH);
        if($login!=""){
            $disabledINS = "disabled";
            }
        else{
            $disabledEDIT = "disabled";
            $disabledBORR = "disabled";
        }    
        mysqli_free_result($resultado);

    }




?>


<main class="contenido_Registro_V">

    <h4 id="respuesta"><?php echo  $respuesta ;?></h4><br>
    <h2>Rellena los campos como quieras que aparezca tu coche en la plataforma</h2>
    <div class="row">
        <div class=" col-6 titulos">
            <h4>Marca  </h4>
            <h4>Modelo  </h4>
            <h4>Nº Plazas  </h4>
            <h4>Color  </h4>
            <h4>Combustible  </h4>
            <h4>Seguro  </h4>
            <h4>Precio (€/día) </h4>
            <h4>Disponibilidad  </h4>
            <h4>Zona  </h4>
            <h4>Tipo  </h4>
            
            
        </div>
        <div class=" col-6 formulario">
            <form class=" col-6 formulario" action="<?php $_SERVER["PHP_SELF"]?>" enctype="multipart/form-data" method="post" id="formRegistro_vehiculo">
            
                <input type="hidden" name="id_usuario" value="<?php echo $_GET["id"];?>" id="id_usuario" >
                <input type="hidden" name="id_vehiculo" value="<?php echo $login["id_vehiculo"];?>" id="id_vehiculo" >   
                <input type="text" name="marca" value="<?php echo $login["marca"];?>" id="marcaRegistroVehiculo" placeholder="Marca" required><br>
                <input type="text" name="modelo" value="<?php echo $login["modelo"];?>" id="modelo" placeholder="Modelo" required><br>
                <input type="text" name="plazas" value="<?php echo $login["plazas"];?>" id="plazas" placeholder="Nº Plazas" required><br>
                <input type="text" name="color" value="<?php echo $login["color"];?>" id="color" placeholder="Color" required><br>
                <input type="text" name="combustible" value="<?php echo $login["combustible"];?>" id="combustible" placeholder="Combustible" required><br>
                <input type="text" name="seguro" value="<?php echo $login["seguro"];?>" id="seguro" placeholder="Seguro" required><br>
                <input type="number" name="precio" value="<?php echo $login["precio"];?>" id="precio" placeholder="Precio €/día" required><br>
                <input type="text" name="disponibilidad" value="<?php echo $login["disponibilidad"];?>" id="disponibilidad" placeholder="Disponibilidad" required><br>
                <select name="zona_parla" id="zona_parla">
                            <option value="<?php echo $login["id_zona"];?>" required><?php echo $login["nombre_zona"];?></option>
                            <!--Empezamos con el bucle-->
                            <?php
                            $sql2 = "SELECT * FROM zona";
                            $resultado2 = mysqli_query($conexion, $sql2);
                            while ($filazona = mysqli_fetch_array($resultado2, MYSQLI_BOTH)) {
                            ?>
                                <option value="<?php echo $filazona["id_zona"]; ?>"><?php echo $filazona["nombre_zona"]; ?></option>
                            <?php
                            } //cierra while

                            mysqli_free_result($resultado2);
                            
                            ?>
                            <!--terminamos con el bucle   -->
                </select><br>
                <select name="tipo_vehiculo" id="tipo_vehiculo">
                            <option value="<?php echo $login["id_tipo"];?>" required><?php echo $login["dimension"]; ?></option>
                            <!--Empezamos con el bucle-->
                            <?php
                            $sql3 = "SELECT * FROM tipo";
                            $resultado3 = mysqli_query($conexion, $sql3);
                            while ($filatipo = mysqli_fetch_array($resultado3, MYSQLI_BOTH)) {
                            ?>
                                <option value="<?php echo $filatipo["id_tipo"]; ?>"><?php echo $filatipo["dimension"]; ?></option>
                            <?php
                            } //cierra while

                            mysqli_free_result($resultado3);
                           
                            ?>
                            <!--terminamos con el bucle   -->
                </select><br><br>
        </div>
        <div class="col-12 foto">
                <h4>Foto</h4>
                <input type="image" name="foto_vehiculo" src="<?php echo "images/bbdd/".$login["foto"];?>" alt="<?php echo $login["marca"]." ".$login["modelo"];?>" id="fotoRU"><br>
                <input type="file" name="foto" id="foto" required><br><br>
        </div>  

        <div class="col-12 botones">       
                
                <input type="submit" value="INSERTAR" name="insertar" id="insertar" <?php echo $disabledINS?>>
                <input type="submit" value="EDITAR" name="editar" id="editar" <?php echo $disabledEDIT?>>
                <input type="submit" value="BORRAR" name="borrar" id="borrar" <?php echo $disabledBORR?>>
                

            </form>
        </div> 
    </div>

    

</main>
<?php

include "footer.php";
?>    

</body>
</html>