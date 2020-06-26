
<!DOCTYPE html>
<html>
<head>
	<title>Busqueda</title>
</head>
<body>
  <div>


  	<!-- action="../Control/Control_usuario.php" method="post" -->
  	  <form >
  	  	  <input type="text" name="busqueda" id="busqueda" required="" placeholder="Digite Campo de Busqueda por documento">

  	  	  <input type="submit" name="Consultar" value="Consultar" id="Consultar" class="enviar">

  	  </form>




  </div>
<div class="respuesta">
	<script type="text/javascript"	src="../js/jquery-2.1.0.min.js">
		
	</script>

	<script >
		
    $(".enviar").click(function(e) {
  e.preventDefault();
  var Consultar = $("#Consultar").val(), busqueda=$("#busqueda").val(),
 
 

  
  datos = {"Consultar":Consultar,"busqueda":busqueda};

  $.ajax({
    url: "../Control/Control_usuario.php",
    type: "POST",
    data: datos
  }).done(function(respuesta){
    
      console.log(JSON.stringify(respuesta));

      var documento = respuesta.documento,
      nombres = respuesta.nombres,mensaje= respuesta.mensaje
      

      $(".respuesta").html(
        JSON.stringify("<div class='alert alert-primary'>"+respuesta+"</div>", null, 2));
    
  });
});
</script>





	



</div>


</body>
</html>
