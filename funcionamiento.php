<?php

include "./php/acciones.php";
abrir_sesion();
include "./php/conexion.php"

?>



<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Funcionamiento</title>
    <link rel="stylesheet" href="fontawesome-free-5.11.2-web/css/all.min.css"><!--para icono hamburguesa-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css"><!--para slider-->
    <link rel="stylesheet" href="css/estilos.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script><!--para Jquery-->
    <script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script><!--para slider-->
    <script src="js/script.js"></script>
</head>
<body>
    <!--https://wireframe.cc/Uht1L9-->

<?php
include "header.php";
?>

<main class="contenidoFuncionamiento">

    <section class="row">
        <h2 class="col-12">¿Cómo funciona?</h2>
        <div class="col-12 row">
            <ul class="col-12">
                <li>1. Regístrate ó inicia sesión</li>
                <li>2. Pon tu coche en alquiler ó Encuentra un coche para alquilar</li>
                <li>3. Manda una solicitud de alquiler por mail al propietario</li>
                <li>4. Espera confirmación (tiempo medio de espera 10min)</li>
                <li>5. Recoge tu coche de alquiler y disfruta de la experiencia</li>
                <li>6. Devuelve tu coche de alquiler y deja tu comentario de la experiencia en redes</li>
            </ul>
        </div>
        <br>
        <hr>
    </section>


    <section class="row">
        <h2 class="col-12">Reglas entre usuarios</h2>
        <div class="col-12 row">
            <div class=" marco col-12 row usuario">
                <div class="marcousuarios col-12">
                    <img src="images/usuarios.jpg" alt="Multitud de usuarios">
                </div>
                <div class="marcousuarios row col-12">
                    
                    <div class="col-12">
                        <h4 class="col-12">USUARIOS</h4>
                        <p>Dejarán foto de dni y carnet de conducir</p>
                        <p>Firmarán el contrato de préstamo del vehiculo</p>
                        <p>Dejarán la garantía que se indique en el contrato</p>
                        <p>Devolverán el depósito de combustible igual que estaba en la entrega</p>
                        <p>Realizarán el pago pactado en la entrega</p>
                    </div>
                    
                </div>
            </div>
            <div class="marco col-12 row propietario">
                <div class="marcopropietarios col-12">
                    <img src="images/propietarios.jpg" alt="Coche propietario">
                </div>
                <div class="marcopropietarios row col-12">
                    
                    <div class="col-12">
                        <h4 class="col-12">PROPIETARIOS</h4>
                        <p>Entregarán el coche limpio y en buenas condiciones</p>
                        <p>Deberá tener todos los papeles en regla junto al pago del seguro</p>
                        <p>Dejarán fotografiar el estado del coche en la entrega</p>
                        <p>Devolverán la garantía al finalizar si el coche esta en iguales condiciones</p>
                    </div>
                    
                </div>
            </div>
            
        </div>
        <hr>
        
    </section>
   


    <section class="row">
        <h2 class="col-12">Zonas de Parla</h2>
        <div class="col-12 row">
            <div class="mitadmapa col-12">
                <img src="images/mapa_zonas_parla.jpg" alt="Mapa zonas de Parla">
            </div>
            <div class="mitadmapa col-12">
                <ul>
                    <li>ZONA NOROESTE: Casco viejo, La Fuente, La Granja, La Laguna, El Nido y Villajuventus I</li>
                    <li>ZONA NORESTE: Barrio 2001, Centro (Calle Pinto y alrededores Casa de la Cultura), San Román y Villajuventus II</li>
                    <li>ZONA SUROESTE: Fuentebella, San Fermín (Incluye el Leguario), La Ermita Y Parque Inlasa</li>
                    <li>ZONA SURESTE: Las Américas y Pryconsa(Zona Reyes y barrio de la libertad)</li>
                    <li>ZONA ESTE: Parla Este</li>
                </ul>
            </div>
        </div>
    </section>

</main>


<?php

include "footer.php";
?>    
</body>
</html>