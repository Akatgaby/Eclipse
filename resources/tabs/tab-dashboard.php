<?php
class dashboard
{
	public static function headerTemplate($title)
	{
		print('
		<!DOCTYPE html>
		<!-- IDIOMA DE LA PÁGINA -->
		<html lang="es">
		  <!-- BEGIN: Head -->
		  <head>
			<!-- CARACTERES ESPECIALES -->
			<meta charset="UTF-8">
			<!-- TÍTULO DE LA VENTANA -->
			<title>'.$title.'</title>
			<!-- ÍCONO DE LA VENTANA -->
			<link rel="shortcut icon" type="image/x-icon" href="../img/icon.png">
			<!-- MATERIAL ICONS -->
			<link href="../css/login/icon.css" rel="stylesheet">
			<!-- ESTILO DEL FORMULARIO -->
			<link rel="stylesheet" type="text/css" href="../css/login/materialize.css">
			<!-- TAMAÑO DEL FORMULARIO -->
			<link rel="stylesheet" type="text/css" href="../css/login/style.css">
			<!-- LUGAR DEL FORMULARIO -->
			<link rel="stylesheet" type="text/css" href="../css/login/login.css">
			<!-- NAVBAR -->
			<link rel="stylesheet" type="text/css" href="../css/home/page.css">
			<!-- .MIN -->
			<link rel="stylesheet" type="text/css" href="../css/home/materialize.min.css">
		  </head>
		  <!-- END: Head-->

		  <!-- BEGIN: Navbar -->
		  <header>
			  <nav class="black">
				<div class="brand-sidebar black">
				  <h1 class="logo-wrapper center">
					<a class="brand-logo" href="">
					  <img src="../img/icon.png" alt="ico-illusion">
					  <span class="white-text">Distribuidora Illusion</span>
					</a>
				  </h1>
				</div>
			</header>
			<!-- END: Navbar -->
		');
	}

	public static function scripts()
	{
		print('
		<script src="js/home/jquery-3.3.1.min.js"></script>
		<script src="js/home/materialize.min.js"></script>
		<script src="js/home/init.js"></script>
		<script src="js/home/plugins.js"></script>
		<script src="js/home/vendors.js"></script>
		<!-- PLUGIN VENDOR: Funciona para los textarea dinámicos. -->
		<script src="../js/vendors.js" type="text/javascript"></script>
	</body>
	</html>
		');
	}
}