<?php 
session_start();
require_once '../seguridad/seguridad.php';
verificarInicioDeSession();
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Bienvenido</title>
<!--===============================================================================================-->
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
<!--===============================================================================================-->
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../Libreria/css/bootstrap.min.css">
<!--===============================================================================================-->
	<script type="text/javascript" src="../Libreria/js/jquery-3.5.0.min.js"></script>
    <script type="text/javascript" src="../Libreria/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
    <!--Custon Scrollbar-->
    <link rel="stylesheet" type="text/css" href="../Libreria/malihu/jquery.mCustomScrollbar.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../Libreria/css/style.default.css" id="theme-stylesheet">
<!--===============================================================================================-->
    <!--Font awesome CSS-->
    <link rel="stylesheet" type="text/css" href="../Libreria/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" type="text/css" href="../Libreria/fontawesome/css/fontawesome.css">
    <link rel="stylesheet" type="text/css" href="../Libreria/fontawesome/css/brands.min.css">
    <link rel="stylesheet" type="text/css" href="../Libreria/fontawesome/css/solid.css">

<!--===============================================================================================-->
    <script type="text/javascript" src="../Libreria/popper/popper.min.js"></script>
<!--===============================================================================================-->
    
<!--===============================================================================================-->
    <!--Libreria para hacer funcionar mi mensaje modal-->
    <script type="text/javascript" src="../Libreria/js/bootstrap.js"></script>
<!--===============================================================================================-->
   	<!--Nos permite tener un estilo en todos los navegadores-->
    <link rel="stylesheet" type="text/css" href="../Libreria/css/normalize.css">
<!--===============================================================================================-->
	<!--Librería de datables-->
	<link rel="stylesheet" type="text/css" href="../Libreria/datatable/datatables.min.css">
	<script type="text/javascript" src="../Libreria/datatable/datatables.js"></script>

</head>
<body>
	<nav class="side-navbar">
		<div class="side-navbar-wrapper">
			<div class="sidenav-header-inner text-center p-3"><div class="fas fa-user-circle fa-3x"></div>
			    <h3 class="h3"><?php echo $_SESSION['nombre']; ?></h3><span class="text-danger">Administrador</span>	
			</div>
			<div class="sidenav-header-logo"><a href="index.php" class="brand-small text-center"> <strong><i class="fas fa-home"></i></strong></a></div>
		</div>
		<div class="main-menu">
			<h5 class="sidenav-heading">Menú</h5>

			<ul id="side-main-menu" class="side-menu list-unstyled">
				<li>
					<a href="index.php?carga=1" aria-expanded = "false"><i class="fas fa-user-cog"></i>Dashboard</a>
				</li>
				<li>
					<a href="index.php?carga=2" aria-expanded = "false"><i class="fas fa-user-cog"></i>Mi perfil</a>
				</li>
				<h5 class="sidenav-heading">FIESTA</h5>
				<li>
					<a href="index.php?carga=3" aria-expanded = "false"><i class="fas fa-folder-open"></i>Fiesta Patronal</a>
				</li>
				<li>
					<a href="index.php?carga=4" aria-expanded = "false"><i class="fas fa-folder-open"></i>2° Viernes</a>
				</li>
				<h5 class="sidenav-heading">CONSULTAS</h5>
				<li>
					<a href="index.php?carga=5" aria-expanded = "false"><i class="fas fa-folder-open"></i>Habitantes</a>
				</li>
				<li>
					<a href="index.php?carga=6" aria-expanded = "false"><i class="fas fa-folder-open"></i>Cabildo</a>
				</li>
			</ul>
		</div>
	</nav>

	<div class="page">
		<header class="header sticky-top">
			<nav class="navbar">
				<div class="container-fluid">
					<div class="navbar-holder d-flex align-items-center justify-content-between">
						<div class="navbar-header">
							<a href="#" id="toggle-btn" class="menu-btn"><!--Aquí se agrega el boton para minimizar-->
								<i class="fas fa-bars"></i>
							</a>
							<img src="../img/SanMiguel.png" width="100" align="center">
						</div>
						<div class=" text-danger font-weight-bold">
							fecha :
							<?php echo $_SESSION['fecha']; ?>
						</div>
						<ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center">
							<li class="nav-item"><a href="#" class="nav-link logout" data-toggle = "modal" data-target = "#cerrar"><span class="fas fa-power-off text-danger"></span> Salir</a></li><!--Se utiliza para salir del sistema-->	
						</ul>
					</div>
				</div>
			</nav>

		</header>
		<div class="modal fade" id="cerrar">
			<div class="modal-dialog" role = "document">
				<div class="modal-content text-center text-warning">
					<div class="modal-body">
						<i class="fas fa-info-circle fa-5x"></i>
						<h1 class="modal-title text-center text-dark" id="cerrar">Estas seguro ?</h1>
						<p class="text-center text-dark">Quieres salir del sistema y finalizar la sesión actual</p>
						<a class="btn btn-primary" href= "../seguridad/cerrarSession.php">si, Salir</a>
						<a class="btn btn-danger text-white" data-dismiss="modal">Cancelar</a>	
					</div>
				</div>
			</div>	
		</div>
		<section class="dashboard-counts section-padding">
			<div class="container-fluid">
				<div class="right_col" role="main">
					<?php 
						if(isset($_GET["carga"])){
							$consulta = $_GET["carga"];
							require_once '../controlador/paginas.php';
							$principal = new Paginas();
							$principal->cargarPaginas($consulta);
						}else{
					?>
					<div class="row justify-content-center" id="bienvenido">
						<div class="col-md-10">
							<div class="jumbotron jumbotron-fluid">
								<?php
								require_once 'dashboard.php';
								?>
							</div>
						</div>
					</div>
					<?php 
						}
					?>
				</div>
			</div>
		</section>
		<footer class="main-footer">
			<div class="conainer-fluid">
				<div class="row">
					<div class="col-sm-10">
						<p>El mejor modo de predecir el futuro es inventándolo. –Alan Key</p>
					</div>
					<div class="col-sm-2 text-right">
						<p>Equipo Mundo virtual</p>
					</div>
				</div>
			</div>
		</footer>
	</div>
	<script type="text/javascript" src="../Libreria/malihu/jquery.mCustomScrollbar.concat.min.js"></script>
	<!--Nos permite ocultar el navbar-->
	<script type="text/javascript" src="../Libreria/front.js"></script>
</body>
</html>