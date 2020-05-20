<?php 
require_once '../modelo/dashboard.php';
$habitantes=new Contenido();
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Dashboard</title>
	<link rel="stylesheet" type="text/css" href="../Libreria/css/dashboard.css">
</head>
<body>
	<div class="row">
		<div class="col-md">
			<h1 class="text-center bg-danger text-white">San Miguel Copala</h1>
		</div>
	</div>
	
	<div class="row">
		<div class="col-xl-4 col-sm-6 mb-4">
			<div class="propiedades card text-dark">
				<div class="card-body">
					<div class="row">
						<div class="col-md-3">
							<i class="fas fa-folder fa-3x"></i>
						</div>
						<div class="col-md-9 text-right">
							<div class="fa-2x"><?php echo $habitantes->visualizarHabitantes(); ?></div>
						</div>
					</div>
				</div>
				<div class="card-footer text-white clearfix small z-1 text-center" style="background-color: #588ec8">
					<h5>Habitantes</h5>
				</div>
			</div>
		</div>

		<div class="col-xl-4 col-sm-6 mb-4">
			<div class="propiedades card text-dark">
				<div class="card-body">
					<div class="row">
						<div class="col-md-3">
							<i class="fas fa-chalkboard-teacher fa-3x"></i>
						</div>
						<div class="col-md-9 text-right">
							<div class="fa-2x"><?php echo $habitantes->visualizarHombres(); ?></div>
						</div>
					</div>
				</div>
				<div class="card-footer text-white clearfix small z-2 text-center" style="background-color: #41b95d">
						<h4>Hombres</h4>
				</div>
			</div>
		</div>

		<div class="col-xl-4 col-sm-6 mb-4">
			<div class="propiedades card text-dark">
				<div class="card-body">
						<div class="row">
						<div class="col-md-3">
							<i class="fas fa-folder fa-3x"></i>
						</div>
						<div class="col-md-9 text-right">
							<div class="fa-2x"><?php echo $habitantes->visualizarMujeres(); ?></div>
						</div>
					</div>
				</div>
				<div class="card-footer text-white clearfix small z-1 text-center" style="background-color: #e8b92d">
						<h4>Mujeres</h4>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md">
			<h1 class="text-center bg-danger text-white">Bienvenido </h1>
		</div>
	</div>

</body>
</html>