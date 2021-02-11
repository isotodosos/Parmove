
<?php

include "./php/acciones.php";
abrir_sesion();

?>




<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inicio</title>
    <link rel="stylesheet" href="fontawesome-free-5.11.2-web/css/all.min.css"><!--para icono hamburguesa-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css"><!--para slider-->
    <link rel="stylesheet" href="css/estilos.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script><!--para JQuery-->
  <script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script><!--para slider-->
  <script src="js/script.js"></script>
    
</head>
<body>

<!--https://wireframe.cc/JDw9jw-->

<?php
include "header.php";
?>
<main class="contenidoInicio">
    <section class="slider">   
        <div class="bxslider">
            <div><img src="images/slider1.jpg" alt="Conductor"></div>
            <div><img src="images/slider2.jpg" alt="Coche por carretera"></div>
            <div><img src="images/slider3.jpg" alt="Vista ciudad"></div>
        </div>
        <div class="textobxslider">
            <h4>¿QUE ES PARMOVE?</h4>
            
            <p>Parmove  es un proyecto que se realiza en Parla para mejorar la movilidad vecinal. Parla es un municipio de la zona sur de la Comunidad de Madrid con mas de 130.000 habitantes. Parmove muestra como puedes disponer del modelo de coche que necesites, cuando lo necesites y además puedes elegirlos dependiendo de la zona de Parla que prefieras. Parmove es una solución práctica de nueva movilidad. 
                Entre todos los vecinos que vivimos en Parla seguro que encuentras el coche que necesitas cuando lo necesitas.  

            </p>
        </div>
        <br>
        <hr>
        <br>
    </section> 

    <section class="ventajas">

        <h4>¿QUE VENTAJAS OFRECE PARMOVE?</h4>
        <div class="row">
            <div class="cromoVentajas col-12">
                <img src="images/municipio.jpg" alt="Edificios de un barrio">
                <h5>CERCANO</h5>
                <p>Buscar el coche que necesitas teniendo en cuenta la cercania eleva la eficiencia del servicio. </p>
            </div>
            <div class="cromoVentajas col-12">
                <img src="images/acuerdo.jpg" alt="Acuerdo entre partes">
                <h5>FÁCIL</h5>
                <p>Regístrate, introduce tus datos y ya puedes empezar a disfrutar del coche que necesites cuando lo necesites.</p>
            </div>
            <div class="cromoVentajas col-12">
                <img src="images/espera.jpg" alt="Hombre esperando">
                <h5>RÁPIDO</h5>
                <p>Contacta con el propietario por mail y espera su respuesta de confirmación.</p>
            </div>
            <div class="cromoVentajas col-12">
                <img src="images/pago.jpg" alt="Pago efectivo">
                <h5>ECONÓMICO</h5>
                <p>Gana dinero cuando no uses tu coche como propietario y disfruta de un coche sin sus gastos extras como usuario</p>
            </div>
        </div>
        <br>
        <hr>
        <br>

    </section>

    <section class="funciona">

        <h4>¿CÓMO FUNCIONA PARMOVE?</h4>
        <div class="row">
            <div class="cromofunciona row col-12">
                <img src="images/retrovisor.jpg" alt="Imagen por retrovisor">
            </div>
            <div class="cromofunciona row col-12">
                <ol>
                    <li>Regístrate o inicia sesión</li>
                    <li>Encuentra el coche</li>
                    <li>Manda solicitud al propietario</li>
                    <li>Espera confirmación</li>
                    <li>Recoge tu coche</li>
                    <li>Devuelve tu coche</li>
                    <li>Haz un comentario de tu experiencia en las redes</li>
                </ol>
            </div>
        </div>
        <br>
        <hr>
        <br>

    </section>

    <section class="selecciona">
        <h4>¡¡BUSCA, ENCUENTRA Y RESERVA TU COCHE!!</h4>
        <div class="row">
            <div class="cromobusca row col-12">
                <div class="col-12">
                   <img src="images/ordenador.jpg" alt="Busqueda por ordenador">
                </div>
                <div class="col-12">
                   <a href="#">Busca por nuestros filtros</a>
                </div>
                
            </div>
            <div class="cromobusca row col-12">
                <div class="col-12">
                   <img src="images/elige.jpg" alt="Diferentes elecciones">
                </div>
                <div class="col-12">
                   <a href="#">Encuentra y elige lo que necesitas</a>
                </div>
                
            </div>
            <div class="cromobusca row col-12">
                <div class="col-12">
                   <img src="images/freedom.jpg" alt="Disfrutar viajando">
                </div>
                <div class="col-12">
                   <a href="#">Resérvalo y disfrútalo</a>
                </div>
                
            </div>
           
    </div>
    <br>
    <br>
    

    </section>

  
</main>

<?php
include "footer.php";
?>

    
</body>
</html>