<?php 
require_once '../../modelo/cabildo.php';
$c=new cabildo();
$resultado=$c->visualizarCabildo();
$tabla ="";
$id = 1;

while($row = mysqli_fetch_array($resultado)){
	$tabla.='{
				"id":"'.$id.'",
				"Agente":"'.$row['Agente'].'",
				"Suplente":"'.$row['Suplente'].'",
				"Secretario":"'.$row['Secretario'].'",
				"FechaIngreso":"'.$row['FechaIngreso'].'",
				"Activo":"'.$row['Activo'].'"

	},';
	$id++;
}

//Eliminamos la coma que sobra
	$tabla= substr($tabla,0, strlen($tabla)-1); 
	echo '{"data":['.$tabla.']}'; 



 ?>