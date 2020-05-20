<?php 
	$id=$_POST['id'];
	require_once '../../modelo/perfil.php';
	$admin = new Administrador();
	$resultado=$admin->visualizarAdministrador($id);
	echo $resultado;

 ?>