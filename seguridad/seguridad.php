<?php 

function verificarInicioDeSession(){
	if(empty($_SESSION['nombre'] and $_SESSION['id']and $_SESSION['fecha'])){
		session_destroy();
		header("location:../index.php");
	}

}

 ?>