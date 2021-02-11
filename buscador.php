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
    <title>Buscador Front</title>
    <link rel="stylesheet" href="fontawesome-free-5.11.2-web/css/all.min.css"><!--para icono hamburguesa-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css"><!--para slider-->
    <link rel="stylesheet" href="css/estilos.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script><!--para Jquery-->
    <script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script><!--para slider-->
    <script src="js/script.js"></script>
</head>
<body>
    <!--https://wireframe.cc/uHRGXE-->

<?php

include "header.php";




if(isset($_POST["buscar"])){
    $zona = $_POST["filtroZona"];
    $tipo = $_POST["filtroTipo"];
   
    
}else{
    $zona = "sin_zona";
    $tipo = "sin_tipo";
   
    
    
}

?>

<main class="contenidoBuscadorG">

    <h2>Encuentra el coche que más te interese utilizando nuestros filtros</h2>

    
    
    <form action="<?php $_SERVER["PHP_SELF"]?>" method="POST" class="row">
        <div class="filtrosGestor col-12">
            <select name="filtroZona" id="filtroZona">
                <option value="sin_zona">Selecciona Zona de Parla</option>
                <!--Empezamos con el bucle-->
                <?php
                
                $sqlZona = "SELECT * FROM zona";
                $resultadoZona = mysqli_query($conexion, $sqlZona);
                while ($filaZona = mysqli_fetch_array($resultadoZona, MYSQLI_BOTH)) {
                ?>
                    <option value="<?php echo $filaZona["id_zona"]; ?>"><?php echo $filaZona["nombre_zona"]; ?></option>
                <?php
                } //cierra while

                mysqli_free_result($resultadoZona);
                //mysqli_close($conexion);
                ?>
                <!--terminamos con el bucle   -->
            </select>
        </div>
        
        <div class="filtrosGestor col-12">
            <select name="filtroTipo" id="filtroTipo">
                <option value="sin_tipo">Selecciona Tipo de coche</option>
                <!--Empezamos con el bucle-->
                <?php
                $sqlTipo = "SELECT * FROM tipo";
                $resultadoTipo = mysqli_query($conexion, $sqlTipo);
                while ($filaTipo = mysqli_fetch_array($resultadoTipo, MYSQLI_BOTH)) {
                ?>
                    <option value="<?php echo $filaTipo["id_tipo"]; ?>"><?php echo $filaTipo["dimension"]; ?></option>
                <?php
                } //cierra while

                mysqli_free_result($resultadoTipo);
                //mysqli_close($conexion);
                ?>
                <!--terminamos con el bucle   -->
            </select>
        </div>
        
        <div class="col-12">
        

            <input type="submit" value="Buscar" name="buscar">
        </div>
        
        
    </form>
    

    <section class="tableroCromos row">

        <?php
           $sqlFiltroG= buscar_filtrando($zona,$tipo);

           $resFiltroG = mysqli_query($conexion, $sqlFiltroG);
          
           if (!$resFiltroG) {
           
               die("no hay ningun resultado de la consulta" . mysqli_error());
           } else {
           
               //Empezamos con el bucle
           
               while ($filaFiltroG = mysqli_fetch_array($resFiltroG, MYSQLI_BOTH)) {
        
        ?>

       <div class="cromosBG col-12 row">
            <a href="login.php" class="col-12 row" >
                <div class="fotoCromo col-12">
                    <img src="images/bbdd/<?php echo $filaFiltroG["foto_coche"]; ?>" alt="<?php echo $filaFiltroG["marca"]." ".$filaFiltroG["modelo"]; ?>">
                </div>
                <div class="etiqueta col-12">
                    
                    <h3><?php echo $filaFiltroG["marca"]." ".$filaFiltroG["modelo"];?></h3>
                    <h3><?php echo $filaFiltroG["precio"]. " "."€/dia";?></h3>

                </div>

            </a> 
        </div>
        <?php
        }//final del while
        }//final del else
        mysqli_free_result($resFiltroG);
        ?> 
        
    
    </section>
    



</main>







<?php

include "footer.php";
?>    

</body>
</html>