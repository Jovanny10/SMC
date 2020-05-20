<?php 
require_once '../../modelo/habitantes.php';
$i =new habitantes();
$resultado = $i->visualizarHabitantes();
$tabla ="";
$id = 1;

while($row = mysqli_fetch_array($resultado)){
	$tabla.='{
				"id":"'.$id.'",
				"Nombre":"'.$row['Nombre'].'",
				"Apellidos":"'.$row['Apellidos'].'",
				"Sexo":"'.$row['Sexo'].'",
				"FechaNacimiento":"'.$row['FechaNacimiento'].'",
				"Comunidad":"'.$row['Comunidad'].'"

	},';
	$id++;
}

//Eliminamos la coma que sobra
	$tabla= substr($tabla,0, strlen($tabla)-1); 
	echo '{"data":['.$tabla.']}'; 


?>
