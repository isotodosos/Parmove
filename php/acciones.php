<?php


////////  ESTADO DE LA SESIÓN  ///////

function abrir_sesion(){

    if(session_status() != PHP_SESSION_ACTIVE){
        session_start();
        global $estado;
        $estado = "LOG IN";
        

        }
    if(isset($_SESSION["username"])){

    
        $estado = "LOG OUT";
        
    }

}


function buscar_filtrando($zona,$tipo){

    

    if($zona =="sin_zona" && $tipo =="sin_tipo"){
        $nueva_zona ="";
        $nuevo_tipo="";
    }

    else{
        if($zona == "sin_zona" && $tipo != "sin_tipo"){
            $nueva_zona ="";
            $nuevo_tipo=" WHERE vehiculo.id_tipo = $tipo";

            
        }
        else if($zona != "sin_zona" && $tipo == "sin_tipo"){
            $nueva_zona =" WHERE vehiculo.id_zona = $zona";
            $nuevo_tipo ="";

        }
        else if($zona != "sin_zona" && $tipo != "sin_tipo"){
            $nueva_zona =" WHERE vehiculo.id_zona = $zona";
            $nuevo_tipo =" AND vehiculo.id_tipo = $tipo";

        }
    }

    $sql = "SELECT vehiculo.id_vehiculo AS id_vehiculo, 
    vehiculo.foto_coche AS foto_coche,
    vehiculo.marca AS marca, 
    vehiculo.modelo AS modelo, 
    vehiculo.precio AS precio 
    
    FROM vehiculo
    
    
    
    $nueva_zona 
    
    $nuevo_tipo";
    
    

        
    return $sql;
        
}







?>