<?php
include("../Modelo/user_model.php");

$us= new Usuario();
if(isset($_POST["Crear"])){

$nombre=$_POST["nombre"];
$correo=$_POST["correo"];
$clave=$_POST["clave"];
$clave1=$_POST["clave1"];

if($clave1 == $clave){

  $respuesta=$us->registrar($nombre, $correo, $clave);

if($respuesta>0){


$mensaje="Registro con Éxito";
$datos= array('nombre' => $nombre, 'correo' => $correo, 'clave' => $clave,  'mensaje' => $mensaje);

echo json_encode($datos, JSON_FORCE_OBJECT);


}

 else{

 $mensaje="No se Registro con Éxito";
 $datos= array('mensaje'=>$mensaje);
echo json_encode($datos, JSON_FORCE_OBJECT);

}

}
else{
  $mensaje="Las contraseñas no coinciden";
 $datos= array('mensaje'=>$mensaje);
echo json_encode($datos, JSON_FORCE_OBJECT);

}







}else{

    if (isset($_POST["Consultar"])) {

      $texto_buscar=$_POST["busqueda"];

      $res=$us->consultar($texto_buscar);

      while ( $filas=$res->fetch_object()) {
      	
     /*  echo $filas->documento;
       echo $filas->nombres."<br>";*/

  $datos = array('documento' => $filas->documento,'nombres'=>$filas->nombres."<br>");

      echo json_encode($datos, JSON_FORCE_OBJECT);


      }

    


    	
    }



}








?>