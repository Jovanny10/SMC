<?php 
class validacionPerfil{
	public function validacion(){
		if(empty($_POST['usuarioEdit']) && empty($_POST['pswEdit'])){
			$errores[]="* Rellenar campos";	
		}else
		if(empty($_POST['usuarioEdit'])){
			$errores[]="* Ingresar usuario";	
		}else
		if(empty($_POST['pswEdit'])){
			$errores[]="* Ingresar Contraseña";
		}else{
			$id=$_POST['id'];
			$usuario= $_POST['usuarioEdit'];
			$clave = $_POST['pswEdit'];
			$this->busqueda($usuario,$clave,$id);
		}

		if (isset($errores)) {
			foreach ($errores as $error){
				echo "$error";
			}
		}
	}


	public function busqueda($usuario,$clave,$id){
		require_once '../../conexion/conexion.php';
		$instanciar=new Conexion();
		$cone=$instanciar->conectar();
		$sql="SELECT idtable1,Nombre,Apellidos,Usuario,Psw,Activo FROM `administrador` WHERE Usuario='$usuario' AND Psw='$clave' AND Activo='1'";
		$resultado=mysqli_query($cone,$sql);
		$contar=mysqli_num_rows($resultado);
		if($contar== 0){
			$sql="UPDATE `administrador` SET `Usuario`='$usuario',`Psw`='$clave' WHERE idtable1='$id' ";
			$resultado=mysqli_query($cone,$sql);

			echo "Actualizado";
		}else{
			
			echo "Existe";

		}
	}
	
}

$instanciar = new validacionPerfil();
$instanciar->validacion();



 ?>