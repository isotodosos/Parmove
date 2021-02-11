<?php
    include "./acciones.php";
    abrir_sesion();

/////Funcionalidad de cerrar_sesion.php

    session_destroy();

    header("Location:../inicio.php");
    exit;


?>