<?php 
require_once '../../conexion/conexion.php';
class fPatronal
{
	function visualizarFPatronal(){
		$conexion=new Conexion();
		$resultado=$conexion->conectar();
		$visualizar=$resultado->query("SELECT`fiestapatronal`.`idFiestaPatronal`,`Habitantes`.`Nombre`,`Habitantes`.`Apellidos`,`Sexo`.`sexo`,`Habitantes`.`FechaNacimiento`,`fiestapatronal`.`Cooperacion`,`Comunidad`.`Comunidad` FROM `fiestapatronal`\n"

    . "INNER JOIN `cabildo` ON `fiestapatronal`.Cabildo_idCabildo=cabildo.idCabildo\n"

    . "INNER JOIN habitantes ON fiestapatronal.Habitantes_idPersona=habitantes.idPersona\n"

    . "INNER JOIN `Sexo` ON `Habitantes`.`Sexo_idSexo`=`Sexo`.`idSexo`\n"

    . "INNER JOIN comunidad ON habitantes.Comunidad_idComunidad=comunidad.idComunidad\n"

    . "WHERE cabildo.Activo=1");
		return $visualizar;
		$conexion->cerrarConexion();
	}

}


 ?>