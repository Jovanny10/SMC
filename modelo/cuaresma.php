<?php 
require_once '../../conexion/conexion.php';
class cuaresma
{
	function visualizar2Viernes(){
		$conexion=new Conexion();
		$resultado=$conexion->conectar();
		$visualizar=$resultado->query("SELECT id2Viernes,habitantes.Nombre,habitantes.Apellidos,sexo.Sexo,habitantes.FechaNacimiento,comunidad.Comunidad,`2viernes`.`Cooperacion` FROM `2viernes` INNER JOIN `Habitantes` ON `2viernes`.`Habitantes_idPersona`=habitantes.idPersona INNER JOIN sexo ON habitantes.Sexo_idSexo=sexo.idSexo INNER JOIN comunidad ON habitantes.Comunidad_idComunidad=comunidad.idComunidad INNER JOIN cabildo ON `2viernes`.`Cabildo_idCabildo`=cabildo.idCabildo WHERE Activo=1");
		return $visualizar;
		$conexion->cerrarConexion();
	}

}