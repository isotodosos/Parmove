<?php

if (isset($_POST["borrar"])){

    $id_vehiculo = $_POST["id_vehiculo"];
   

    $sql6 = "DELETE FROM vehiculo WHERE vehiculo.id_vehiculo = $id_vehiculo";
    
    
            
                
            
        
    $resultado6 = mysqli_query($conexion, $sql6);
    if (!$resultado6) {

        die("no hay resultado de la consulta" . mysqli_error($conexion));

    }
    else {
    // unset($_POST["insertar"]);
        
        header("Location:".$_SERVER["PHP_SELF"]."?respuesta=Datos borrados de nuestra BBDD&id=$id_usuario");

        mysqli_free_result($resultado5);
        mysqli_close($conexion);
    }



}
?>