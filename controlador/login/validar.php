<?php 
class validacionLogin{
	public function validacion(){
		if(empty($_POST['Usuario']) && empty($_POST['Clave']) ){
			$errores[]="* Rellenar campos";
		}else
		if(empty($_POST['Usuario'])){
			$errores[]="* Ingresar Usuario";
		}else
		if(empty($_POST['Clave'])){
			$errores[]="* Ingresar Contraseña";
		}else{
			$usuario= $_POST['Usuario'];
			$clave = $_POST['Clave'];
			$this->busqueda($usuario,$clave);
		}

		if(isset($errores)){
			foreach ($errores as $error) {
			echo "$error";
			}
		}
	}

	public function busqueda($usuario,$clave){
		require_once '../../conexion/conexion.php';
		$instanciar=new Conexion();
		$cone=$instanciar->conectar();
		$consulta = "SELECT idtable1,Nombre,Apellidos,Usuario,Psw FROM `administrador` WHERE Usuario='$usuario' AND Psw = '$clave' AND Activo='1'";
		$resultado = $cone->query($consulta);
		if(mysqli_num_rows($resultado)>0){
			while($row=mysqli_fetch_array($resultado)){
				session_start();
				$_SESSION['id']=$row['idtable1'];
				$_SESSION['nombre']=$row['Nombre'];
				$_SESSION['fecha']=date('Y / m / d');
				echo 1;
			}
			
		}else{
			echo "No existe en la base de datos";
		}

	}


}


$validar = new validacionLogin();
$validar->validacion();




 ?>