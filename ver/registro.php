<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de CO2BON</title>
    <link href="../help/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <link href="../help/assets/css/style.css" rel="stylesheet"> 
   <link rel="stylesheet" href="../css/estilo.css">
   
</head>
<body>
<div  class="img1">
    <a href="../ver/index.html">
<img src="../img/logo.jpeg" alt="CO2BON">
</a>

</div>
<!-- action="../Control/user_control.php" method="post" -->
<form >

    <section class="form-register">
        <h1> Crear cuenta</h1>
        <a>Tu nombre</a><input class="controls" type="text" name="nombre" id="nombre" placeholder="Nombre y Apellido" require="">
 
    <a>Correo electronico</a><input class="controls" type="text" name="correo" id="correo"  placeholder="" require="">
 
    <a>Contraseña</a><input minlength="6" class="controls" type="password" minlength="6"name="clave" id="clave" placeholder="Como mínimo 6 caracteres" require="">
    
<a>Vuelve a escribir la contraseña</a><input class="controls" type="password" name="clave1" id="clave1" placeholder="" require="">
   
  
    <nav class="boton">
    <input  name="Crear" class="registrar" type="submit" value="Crear"  id="Crear">
    </nav>
 
    
    </form>

    </section> 
    <section class="form-register1">
    <p>¿Ya tienes una cuenta?<a href="../ver/iniciar_sesion.php"> Iniciar sesión </a></p>
   <br>
    <p>Al crear una cuenta, aceptas las<span> <a href="#">Condiciones de Uso</a> y el <a href="#">Aviso de Privacidad</a> </span>de CO2BON</p>
    
    
    
    </section> 
    <div class="respuesta"></div>
   
<script src="../js/jquery-2.1.0.min.js"></script>
<script>
$(".registrar").click(function(e) {
  e.preventDefault();
  var Crear = $("#Crear").val(), nombre=$("#nombre").val(),
  correo= $("#correo").val(), clave=$("#clave").val(),
 clave1= $("#clave1").val(),
 

  //"nombre del parámetro POST":valor (el cual es el objeto guardado en las variables de arriba)
  datos = {"Crear":Crear,"nombre":nombre, "correo":correo, "clave":clave, "clave1":clave1};

  $.ajax({
    url: "../Control/user_control.php",
    type: "POST",
    data: datos
  }).done(function(respuesta){
    
      console.log(JSON.stringify(respuesta));

      var nombre = respuesta.nombre,
      correo = respuesta.correo,mensaje= respuesta.mensaje,
      clave = respuesta.clave
      

      $(".respuesta").html(
        JSON.stringify("<div class='alert alert-primary'>"+respuesta+"</div>", null, 2));
    
  });
});
</script>

  <div id="preloader"></div> 


 <script src="../help/assets/js/main.js"></script>  
</body>
</html>