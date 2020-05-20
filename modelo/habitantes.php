<?php 
require_once '../../conexion/conexion.php';
class habitantes
{
	function visualizarHabitantes(){
		$conexion=new Conexion();
		$resultado=$conexion->conectar();
		$visualizar=$resultado->query("SELECT habitantes.idPersona,habitantes.Nombre,habitantes.Apellidos,sexo.Sexo,habitantes.FechaNacimiento,comunidad.Comunidad FROM habitantes INNER JOIN sexo ON habitantes.Sexo_idSexo=sexo.idSexo INNER JOIN comunidad ON comunidad.idComunidad=habitantes.Comunidad_idComunidad");
		return $visualizar;
		$conexion->cerrarConexion();
	}

}




 ?>