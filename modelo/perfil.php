<?php 
require_once '../../conexion/conexion.php';
class Administrador{
	function visualizarAdministrador($id){
		$conexion =new Conexion();
		$resultado=$conexion->conectar();
		$visualizar=$resultado->query("SELECT idtable1,Nombre,Apellidos,Usuario,Psw,Activo FROM `administrador` WHERE idtable1='$id' AND Activo='1'");
		$array = $visualizar->fetch_assoc();
		$json=json_encode($array);
		return $json;
	}
}


 ?>