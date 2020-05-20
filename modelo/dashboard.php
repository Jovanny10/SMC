<?php 
require_once '../conexion/conexion.php';
class Contenido{
	public function visualizarHabitantes(){
		$conexion=new Conexion();
		$resultado=$conexion->conectar();
		$visualizar=$resultado->query("SELECT COUNT(idPersona) AS cantidad FROM `habitantes` WHERE 1");
		$cantidad=mysqli_fetch_row($visualizar);
		return $cantidad[0];
		$conexion->cerrarConexion();
	}

	public function visualizarHombres(){
		$conexion=new Conexion();
		$resultado=$conexion->conectar();
		$visualizar=$resultado->query("SELECT COUNT(idPersona) AS cantidad FROM `habitantes` INNER JOIN sexo ON habitantes.Sexo_idSexo=sexo.idSexo WHERE sexo.Sexo='Hombre'");
		$cantidad=mysqli_fetch_row($visualizar);
		return $cantidad[0];
		$conexion->cerrarConexion();
	}

	public function visualizarMujeres(){
		$conexion=new Conexion();
		$resultado=$conexion->conectar();
		$visualizar=$resultado->query("SELECT COUNT(idPersona) AS cantidad FROM `habitantes` INNER JOIN sexo ON habitantes.Sexo_idSexo=sexo.idSexo WHERE sexo.Sexo='Mujer'");
		$cantidad=mysqli_fetch_row($visualizar);
		return $cantidad[0];
		$conexion->cerrarConexion();
	}
}


 ?>