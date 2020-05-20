<?php 
$id=$_SESSION['id'];
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Perfil</title>
	<link rel="stylesheet" type="text/css" href="../Libreria/css/perfil.css">
</head>
<body>
	<div class="row justify-content-center	">
		<div class="col-md-4">
			<div class="card">
				<h3 class="card-header text-center text-white bg-dark">Mi perfil</h3>
				<div class="card-header">
					<div class="text-center">
						<i class="fas fa-user-circle fa-8x"></i>
					</div>
					<div class="form-group">
						<h3 class="text-center"><?php echo $_SESSION['nombre']; ?></h3>
					</div>
					<div class="row">
						<button class="form-control text-white">Bienvenid@</button>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-8">
			<div class="row justify-content-center">
				<div class="col-md-10">
					<form id="formulario_perfil">
						<div class="form-group">
							<h2>Datos personales</h2>
						</div>
						<div class="form-group">
							<input type="hidden" name="id" id="id" value="<?php echo $id; ?>">
						</div>
						<div class="form-group">
							<label class="label-control text-dark">Nombre</label>
							<input type="text" name="nombre" id="nombre" class="form-control" disabled="">
						</div>
						<div class="form-group">
							<div class="row">
								<div class="col-sm-12">
									<label class="label-control text-dark">Apellidos</label>
									<input type="text" name="apellidos" id="apellidos" class="form-control" disabled="">
								</div>
								 
							</div>
						</div>
						<div class="form-group">
							<label class="label-control">Usuario</label>
							<input type="text" name="usuario" id="usuario" class="form-control" disabled="">
						</div>
						<div class="form-group">
							<label class="label-control">Contraseña</label>
							<input type="password" name="psw" id="psw" class="form-control" disabled="">
						</div>
						<div class="form-group">
							<p class="btn btn-primary text-right" data-toggle="modal" data-target="#Editar"><i class="fas fa-ellipsis-h"></i>Editar</p>
						</div>
					</form>
					<!--Modal para editar perfil-->
					<div class="modal fade" id="Editar">
						<div class="modal-dialog" role="document">
							<div class="modal-content">
								<form action="" method="POST">
									<div class="modal-header">
										<h2 class="modal-title"><i class="fas fa-edit"></i>Editar</h2>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden = "true" class = "text-danger">&times;</span>
										</button>
									</div>
									<div class="modal-body">
										<div class="row">
											<div class="form-group">
												<input type="hidden" name="id" id="id" value="<?php echo $id; ?>">
											</div>
											<div class="col-sm-12">
												<label for="#" class="text-dark">Usuario</label>
												<input type="text" name="usuarioEdit" id="usuarioEdit" class="form-control">
											</div>
											<div class="col-sm-12">
												<label for="#" class="text-dark">Contraseña</label>
												<input type="text" name="pswEdit" id="pswEdit" class="form-control">
											</div>
											<div class="col-sm-12 text-center font-weight-bold text-danger" id="resultado">
											</div>
										</div>
									</div>
									<div class="modal-footer">
										<div class="mCerrar btn btn-defaul" data-dismiss="modal">Cerrar</div>
										<button class="mGuardar btn btn-primary" name="submit" id="Aceptar" type="submit">Guardar</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script type="text/javascript" src="../controlador/perfil/visualizarPerfil.js"></script>
	<script type="text/javascript" src="../controlador/perfil/editarPerfil.js"></script>
</body>
</html>