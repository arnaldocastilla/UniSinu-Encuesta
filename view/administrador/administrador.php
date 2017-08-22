<?php
require '../../model/Conexion.php';
//print_r($_SESSION);
if( !(isset($_SESSION["ingresar"]) and !$_SESSION["ingresar"]=="yes") and $_SESSION["id_rol"]!=1 )
{
	header("Location: ".Conexion::ruta().Conexion::path()."Login");exit();
}

?> 
<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset= "UTF-8"/>
		<link rel="stylesheet" href="<?php echo Conexion::ruta()?>public/css/vida.css">
		<link href="<?php echo Conexion::ruta()?>public/css/bootstrap.min.css" rel="stylesheet"/>
		<link rel="icon" type="image/png" href="<?php echo Conexion::ruta()?>public/img/ico.png" />
		<title>..:: Administrador | <?php echo $_SESSION["nombre"] ?> ::..</title> <!-- Titulo de la Pagina -->
	</head>
	<body >
		<img src="<?php echo Conexion::ruta()?>public/img/logo_unisinu.png" lang="center">
		<div id="contenido">
			<header>
				<?php include 'menu.php'; ?>
			</header>
		</div>
		<script type="text/javascript" src="<?php echo Conexion::ruta()?>public/js/jquery.js"></script>	
		<script type="text/javascript" src="<?php echo Conexion::ruta()?>public/js/administrador.js"></script>
	</body>
</html>