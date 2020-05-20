<?php 
require_once '../../conexion/conexion.php';
class cabildo
{
	function visualizarCabildo(){
		$conexion=new Conexion();
		$resultado=$conexion->conectar();
		$visualizar=$resultado->query("SELECT cabildo.Agente,cabildo.Suplente,cabildo.Secretario,cabildo.FechaIngreso,cabildo.Activo FROM `cabildo` WHERE 1 ");
		return $visualizar;
		$conexion->cerrarConexion();
	}

}
 ?>