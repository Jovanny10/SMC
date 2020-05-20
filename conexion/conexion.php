<?php 
class Conexion
{
	public $conexion;
	public function conectar(){
		$this->conexion=new mysqli("localhost","root","","sanmiguel");
		if($this->conexion->connect_error){
			die("Problemas con la conexion");
		}

		mysqli_query($this->conexion,"SET NAMES 'utf8'");
		return $this->conexion;
	}


	public function cerrarConexion(){
		$this->conexion->close();
	}

}

 ?>