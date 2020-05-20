<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Index</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="Libreria/css/bootstrap.min.css">
	<script type="text/javascript" src="Libreria/js/jquery-3.5.0.min.js"></script>
	<script type="text/javascript" src="Libreria/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="controlador/login/validar.js"></script>

</head>
<body style="background-color:#041535;">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-sm-5">
					<h1 class="font-weight-bold text-white text-center p-4">San Miguel</h1>
					 
					<div class="form-group">
						<label class="font-weight-bold font-italic text-white">Usuario</label>
						<input type="" name="usuario" id="usuario" class="form-control" placeholder="Ingresar usuario" autocomplete="off" required>
					</div>
					<div class="form-group">
						<label class="font-weight-bold font-italic text-white">Contraseña</label>
						<input type="password" name="clave" id="clave" class="form-control" placeholder="********" autocomplete="off" required="true">
					</div>
					<input type="button" name="enviar" value="Enviar" class="btn btn-primary" onclick="enviar($('#usuario').val(),$('#clave').val());">
					<div class="d-flex justify-content-center text-danger font-weight-bold" id="resultado">

					</div>
									
			</div>
		</div>
	</div>
	
</body>
</html>