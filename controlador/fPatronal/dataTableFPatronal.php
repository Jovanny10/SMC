<?php 
require_once '../../modelo/fPatronal.php';
$instanciar = new fPatronal();
$resultado=$instanciar->visualizarFPatronal();
$tabla ="";
$id = 1;

while($row = mysqli_fetch_array($resultado)){
	$tabla.='{
				"id":"'.$id.'",
				"Nombre":"'.$row['Nombre'].'",
				"Apellidos":"'.$row['Apellidos'].'",
				"Sexo":"'.$row['sexo'].'",
				"FechaNacimiento":"'.$row['FechaNacimiento'].'",
				"Cooperacion":"'.$row['Comunidad'].'",
				"Comunidad":"$'.$row['Cooperacion'].'"

	},';
	$id++;
}

//Eliminamos la coma que sobra
	$tabla= substr($tabla,0, strlen($tabla)-1); 
	echo '{"data":['.$tabla.']}'; 


 ?>