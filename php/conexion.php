<?php

$host = "localhost";
$usuario="ivanproyecto";
$pass ="EeThrF8PecSwRKKU";
$bbdd ="parmove";
$conexion = mysqli_connect($host, $usuario, $pass, $bbdd);

if (!$conexion) {
    echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
    echo "<br>";
    echo "error de depuración: " . mysqli_connect_errno() . PHP_EOL;
    echo "<br>";
    echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
    exit;
}


?>