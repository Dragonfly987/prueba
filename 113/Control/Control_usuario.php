<?php
include("../Model/Modelo_usuario.php");

$us= new Usuario();
if(isset($_POST["Crear"])){

$documento=$_POST["documento"];
$nombres=$_POST["nombres"];

$respuesta=$us->registrar($documento,$nombres);

if($respuesta>0){


$mensaje="Registro con Éxito";
$datos= array('documento' => $documento, 'nombres' => $nombres,'mensaje' => $mensaje);

echo json_encode($datos, JSON_FORCE_OBJECT);


}

 else{

 $mensaje="No se Registro con Éxito";
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