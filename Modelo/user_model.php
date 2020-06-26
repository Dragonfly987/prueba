<?php
include("../config/Conexion.php");

Class usuario{


function usuario(){



}


function registrar($nombre, $correo, $clave ){

$sql="insert into usuario(nombre, correo, clave) values('".$nombre."','".$correo."','".$clave."')";

return ejecutarConsulta($sql);




}


public function consultar($texto){

	$texto="%".$texto."%";

 $sql="select * from usuario where nombres like('".$texto."' ) ";

 return ejecutarConsulta($sql);


}









}







?>