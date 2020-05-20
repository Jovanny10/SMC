<?php 
require_once '../../modelo/cuaresma.php';

$instanciar = new cuaresma();
$resultado = $instanciar->visualizar2Viernes();
$tabla ="";
$id = 1;

while($row = mysqli_fetch_array($resultado)){
	$tabla.='{
				"id":"'.$id.'",
				"Nombre":"'.$row['Nombre'].'",
				"Apellidos":"'.$row['Apellidos'].'",
				"Sexo":"'.$row['Sexo'].'",
				"FechaNacimiento":"'.$row['FechaNacimiento'].'",
				"Comunidad":"'.$row['Comunidad'].'",
				"Cooperacion":"$'.$row['Cooperacion'].'"

	},';
	$id++;
}

//Eliminamos la coma que sobra
	$tabla= substr($tabla,0, strlen($tabla)-1); 
	echo '{"data":['.$tabla.']}'; 

 ?>