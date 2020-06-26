<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

 <div>
 	<h1>Formulario de Registro </h1>
 </div>

   <form  >

   	<table>
   		<tr> 
   			<td> <label> Documento</label>
   			</td>

   			<td><input type="number" name="documento" id="documento" placeholder="Documento" required="Obligatorio">

   			</td>

   		</tr>

   			<tr> 
   			<td> <label> Nombres</label>
   			</td>

   			<td><input type="text" name="nombres" id="nombres" placeholder="Nombres" required="">

   			</td>

   		</tr>

   		<tr> <td><input type="button" name="Crear" value="Crear" id="Crear" class="enviar"></td>

   	   </tr>



   	</table>
   	

   </form>


   <div class="respuesta"></div>

<script src="../js/jquery-2.1.0.min.js"></script>
<script>
$(".enviar").click(function(e) {
  e.preventDefault();
  var Crear = $("#Crear").val(), documento=$("#documento").val(),
  nombres= $("#nombres").val(),
 

  //"nombre del parámetro POST":valor (el cual es el objeto guardado en las variables de arriba)
  datos = {"Crear":Crear,"documento":documento, "nombres":nombres};

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



</body>
</html>