<?php

if (isset($_POST["insertar"])){

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

    if ($_FILES["foto"]["type"] == "image/jpeg") {

        if ($_FILES["foto"]["size"] < 3145728) {
            move_uploaded_file($_FILES["foto"]["tmp_name"], "images/bbdd/".$_FILES["foto"]["name"]);


        
            $sql4 = "INSERT INTO vehiculo ( id_vehiculo, marca, modelo, plazas,color,
             combustible, seguro, precio, disponibilidad, foto_coche, id_usuario,
             id_zona, id_tipo) VALUES (NULL,'$marca','$modelo',$plazas,'$color',
            '$combustible','$seguro',$precio,'$disponibilidad','$foto', $id_usuario, $zona_parla, $tipo_vehiculo)";
             
           
      
            $resultado4 = mysqli_query($conexion, $sql4);
            if (!$resultado4) {

                die( 
                 
                    
                    "no hay resultado de la consulta" . mysqli_error($conexion));

            } else {
                unset($_POST["insertar"]);
               
               header("Location:".$_SERVER["PHP_SELF"]."?respuesta=Datos guardados en nuestra BBDD&id=$id_usuario");

               mysqli_free_result($resultado4);
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


?>