<?php

if (isset($_POST["editar"])){

    $id_vehiculo = $_POST["id_vehiculo"];
    $id_usuario = $_POST["id_usuario"];
    $marca = $_POST["marca"];
    $modelo = $_POST["modelo"];
    $plazas = $_POST["plazas"];
    $color = $_POST["color"];
    $combustible = $_POST["combustible"];
    $seguro = $_POST["seguro"];
    $precio = $_POST["precio"];
    $disponibilidad = $_POST["disponibilidad"];
    $zona_parla = $_POST["zona_parla"];
    $tipo_vehiculo = $_POST["tipo_vehiculo"];
    $foto = $_FILES["foto"]["name"];

    


    if($foto == ""){

        $sql5 = "UPDATE vehiculo
        SET marca = '$marca', 
        modelo = '$modelo', 
        plazas = $plazas, 
        color = '$color', 
        combustible = '$combustible', 
        seguro = '$seguro',
        precio = $precio,
        disponibilidad = '$disponibilidad',
        
        id_usuario = $id_usuario,
        id_zona = $zona_parla,
        id_tipo = $tipo_vehiculo
        WHERE vehiculo.id_vehiculo = $id_vehiculo";
        
        
                
                    
                
            
        $resultado5 = mysqli_query($conexion, $sql5);
        if (!$resultado5) {

            die("no hay resultado de la consulta" . mysqli_error($conexion));

        }
        else {
        // unset($_POST["insertar"]);
            
            header("Location:".$_SERVER["PHP_SELF"]."?respuesta=Datos cambiados en nuestra BBDD&id=$id_usuario");

            mysqli_free_result($resultado5);
            mysqli_close($conexion);
        }


    }

   else{
        if ($_FILES["foto"]["type"] == "image/jpeg") {

            if ($_FILES["foto"]["size"] < 3145728) {
                move_uploaded_file($_FILES["foto"]["tmp_name"], "images/bbdd/".$_FILES["foto"]["name"]);


                $sql5 = "UPDATE vehiculo
                SET marca = '$marca', 
                modelo = '$modelo', 
                plazas = $plazas, 
                color = '$color', 
                combustible = '$combustible', 
                seguro = '$seguro',
                precio = $precio,
                disponibilidad = '$disponibilidad',
                foto_coche = '$foto',
                id_usuario = $id_usuario,
                id_zona = $zona_parla,
                id_tipo = $tipo_vehiculo
                WHERE vehiculo.id_vehiculo = $id_vehiculo";
                
                
                        
                            
                        
                    
                $resultado5 = mysqli_query($conexion, $sql5);
                if (!$resultado5) {
            
                    die( 
                        
                        
                        "no hay resultado de la consulta" . mysqli_error($conexion));
            
                } else {
                // unset($_POST["insertar"]);
                    
                    header("Location:".$_SERVER["PHP_SELF"]."?respuesta=Datos cambiados en nuestra BBDD&id=$id_usuario");
            
                    mysqli_free_result($resultado5);
                    mysqli_close($conexion);
                }


            
            
            
        
            
            } //tamaño
            else {
                echo "<br>";
                echo "El archivo es mayor de 3M!";
            }

        } //imagen jpg
        else {
            echo "El archivo no es un pdf o un jpeg";
            die();
        }
    }

   
}//final del primer isset editar
    










?>