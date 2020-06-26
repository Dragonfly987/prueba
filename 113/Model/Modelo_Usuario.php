<?php
include("../config/Conexion.php");

Class Usuario{


function Usuario(){



}


function registrar($documento,$nombres){

$sql="insert into usuario(documento, nombres) values('".$documento."','".$nombres."')";

return ejecutarConsulta($sql);




}


public function consultar($texto){

	$texto="%".$texto."%";

 $sql="select * from usuario where nombres like('".$texto."' ) ";

 return ejecutarConsulta($sql);


}









}







?>