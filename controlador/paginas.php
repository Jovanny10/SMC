<?php 
class Paginas
{
	public function cargarPaginas($pagina){
		switch($pagina){
			case '1':
				require_once '../vista/dashboard.php';
				break;
			case '2':
				//Perfil
				require_once '../vista/perfil.php';
				break;
			case '3':
				require_once '../vista/fiestaPatronal.php';
				//Fiesta patronal
				break;
			case '4':
				require_once '../vista/segundoViernes.php';
				//Fiesta 2° Viernes
				break;
			case '5':
				require_once '../vista/habitantes.php';
				//Consulta habitantes
				break;
			case '6':
				require_once '../vista/cabildo.php';
				//Consulta agentes
				break;
		}
	}
	
}




 ?>