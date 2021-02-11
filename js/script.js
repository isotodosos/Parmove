$(function(){

    /////////////////////////////////////////   BARRA DE NAVEGACIÓN    ////////////////////////////////////
   
    // Función del icono hamburguesa

    $("#barras").click(function() {

        $(".lista").toggle();
        
       
             
    });
   
    //  Si la primera vez que se carga la pantalla es menor de 768 se tiene que ocultar ya que en estilos viene como display block.    

    if($(window).width()<750){
        $(".lista").hide();
         
        
    };

    // Esta función es para que ocurra algo cada vez que cambia el tamaño de la pantalla.

    $(window).resize(function() {
        if($(window).width()>750){
            $(".lista").show();
          
       
        }
        else if($(window).width()<751){
            $(".lista").hide();
           
          
        }
        else{}
    });    


   ///////////////////////// SLIDER   //////////////////////
   $('.bxslider').bxSlider();




   ///////////////////////// log in and log out   //////////////////////

    if($("#linkLog a").text()=="LOG OUT"){
   
     $("#linkLog a").attr("href", "./php/cerrar_sesion.php");
     $("#linkGestor").show();

   
    }else{
   
     $("#linkLog a").attr("href", "login.php");
     $("#linkGestor").hide();

    }

   /////////////////////////   comprobador de campos registro usuario  //////////////////
   $("#form_r_u").submit(function(){

        if($("#nombreForm").val() ==""){
            alert("El nombre no puede estar vacio");
            return false;
        }
        if($("#primerApellidoForm").val() =="" ){
            alert("El Primer Apellido no puede estar vacio");
            return false;
        }
        if($("#segundoApellidoForm").val() =="" ){
            alert("El Segundo Apellido no puede estar vacio");
            return false;
        }
       
        if($("#direccionForm").val() ==""){
            alert("La dirección no puede estar vacia");
            return false;
        }
        if($("#emailRegistro").val().indexOf('@',0)==-1 || $("#emailRegistro").val().indexOf('.',0)==-1){
            alert("El Email es incorrecto");
            return false;
        }
        if(($("#password1").val()=="") || ($("#password2").val()=="")){
            alert("Los campos Password no pueden estar vacios");
            return false;
        }
        
        if($("#password1").val() != $("#password2").val()){
            alert("Las contraseñas no coinciden!!!!!");
            return false;
                
        }
        if($("#password1").val() == $("#password2").val()){
               
        }
        
    })

    
    
    
   
   
    ///////////////////////// Gestor Editar coche //////////////////////////
    $("#editar").click(function (e) {
        $("#foto").attr("required", false);
        if(!confirm("¿Seguro que quieres guardar los cambios?")){
            e.preventDefault();
           
            
               
        }
        
       
        
    })

    ///////////////////////// Gestor Borrar coche //////////////////////////
    $("#borrar").click(function (e) {
        

        $("#foto").attr("required", false);
        if(!confirm("¿Seguro que quieres eliminar el vehïculo de Parmove?")){
            e.preventDefault();
            
               
        }
        
    })

    


    
  









});