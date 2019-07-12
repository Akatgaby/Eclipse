<?php
/**
*	Clase para definir las plantillas de las páginas web del sitio público.
*/
class Feed
{
	public static function template_head($title)
	{
		session_start();
		ini_set('date.timezone', 'America/El_Salvador');
		print('
		<!DOCTYPE html>
		<!-- IDIOMA DE LA PÁGINA -->
		<html lang="es">
			<head>
				<!-- BEGIN: Head -->
				<!-- CARACTERES ESPECIALES -->
				<meta charset="UTF-8">
				<!-- TÍTULO DE LA VENTANA -->
				<title>Eclipse | '.$title.'</title>
				<!-- ÍCONO DE LA VENTANA -->
				<link rel="shortcut icon" type="image/x-icon" href="../../resources/img/ico.png">
				<!-- MATERIAL ICONS -->
				<link rel="stylesheet" type="text/css" href="../../resources/css/material-icons.css">
				<!-- MATERIALIZE.MIN -->
				<link rel="stylesheet" type="text/css" href="../../resources/css/materialize.min.css">
				<!-- FUENTE -->
				<link rel="stylesheet" type="text/css" href="../../resources/css/font.css">
				<!-- ESTILO -->
				<link rel="stylesheet" type="text/css" href="../../resources/css/style.css">
				<!-- END: Head-->
				<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
			</head>
		');
		// Se comprueba si existe una sesión para mostrar el menú de opciones, de lo contrario se muestra un menú vacío
		if (isset($_SESSION['idUsuario'])) {
			$filename = basename($_SERVER['PHP_SELF']);
			if ($filename != 'index.php' && $filename != 'register.php') {
				self::modals();
				print('
					<header>
						<div class="navbar-fixed">
							<nav class="black">
								<div class="brand-sidebar black">
									<a class="brand-logo">
										<img src="../../resources/img/ico.png" alt="ico-illusion" height="25">
										<span class="white-text">Eclipse</span>
									</a>
								</div>
								<div class="nav-wrapper">
									<a href="#" data-target="mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
									<ul class="right hide-on-med-and-down">
										<li><a href="productos.php"><i class="material-icons left">shopping_cart</i>Compras</a></li>
										<li><a href="productos.php"><i class="material-icons left">filter_vintage</i>Productos</a></li>
										<li><a href="categorias.php"><i class="material-icons left">favorite_border</i>Categorías</a></li>
										<li><a href="usuarios.php"><i class="material-icons left">group_add</i>Usuarios</a></li>
										<li><a href="main.php"><i class="material-icons left">home</i>Inicio</a></li>
										<li><a href="#" class="dropdown-trigger" data-target="dropdown"><i class="material-icons left">person</i>Cuenta: <b>'.$_SESSION['aliasUsuario'].'</b></a></li>
									</ul>
									<ul id="dropdown" class="dropdown-content">
										<li><a href="#mo" onclick="modalProfile()"><i class="material-icons">mode_edit</i>Perfil</a></li>
										<li><a href="#modal-password" class="modal-trigger"><i class="material-icons">lock</i>Clave</a></li>
										<li><a href="#" onclick="signOff()"><i class="material-icons">power_settings_new</i>Salir</a></li>
									</ul>
								</div>
							</nav>
						</div>
						<ul class="sidenav" id="mobile">
							<li><a href="main.php"><i class="material-icons left">home</i>Inicio</a></li>
							<li><a href="productos.php"><i class="material-icons left">shopping_cart</i>Compras</a></li>
							<li><a href="productos.php"><i class="material-icons left">filter_vintage</i>Productos</a></li>
							<li><a href="categorias.php"><i class="material-icons left">favorite_border</i>Categorías</a></li>
							<li><a href="usuarios.php"><i class="material-icons left">group_add</i>Usuarios</a></li>
							<li><a href="#" class="dropdown-trigger" data-target="dropdown-mobile"><i class="material-icons left">person</i>Cuenta: <b>'.$_SESSION['aliasUsuario'].'</b></a></li>
						</ul>
						<ul id="dropdown-mobile" class="dropdown-content">
							<li><a href="#" onclick="modalProfile()">Editar perfil</a></li>
							<li><a href="#modal-password" class="modal-trigger">Cambiar clave</a></li>
							<li><a href="#" onclick="signOff()">Salir</a></li>
						</ul>
					</header>
					<main class="container">
				');
				$filename = basename($_SERVER['PHP_SELF']);
				if ($filename != 'main.php') {
					print('<h3 class="center-align">'.$title.'</h3>');
				} else {
					print('<h3 class="center-align">Bienvenid@ de vuelta '.$_SESSION['Nombre'].'.</h3>');
				}		
				
			} else {
				header('location: main.php');
			}
		} else {
			$filename = basename($_SERVER['PHP_SELF']);
			if ($filename != 'index.php' && $filename != 'register.php') {
				header('location: index.php');
			} else {
				print('
				<!-- BEGIN: Navbar -->
				<header>
					<div class="navbar-fixed">
						<nav class="black">
							<div class="brand-sidebar black">
								<a class="brand-logo center">
									<img src="../../resources/img/ico.png" alt="ico-illusion" height="25">
									<span class="white-text">Eclipse</span>
								</a>
							</div>
						</nav>
					</div>
				</header>
			<!-- END: Navbar -->
				');
			}
		}
	}

	public static function template_footer($controller)
	{
		print('
		<!-- BEGIN: Footer -->
			<footer class="page-footer grey darken-4">
				<div class="container">
					<div class="row">
						<div class="col 16 s12">
							<h5 class="white-text">Eclipse: The magic garden. 🌷</h5>
							<p class="grey-text text-lighten-4">Venta de plantas de todo tipo ¡Y mucho más!</p>
						</div>
						<div class="col l4 offset-l2 s12">
							<h5 class="white-text">¡Contáctanos!</h5>
							<ul>
								<li><a class="grey-text text-lighten-3" href="https://www.facebook.com/">Facebook</a></li>
								<li><a class="grey-text text-lighten-3" href="https://www.instagram.com/">Instagram</a></li>
								<li><a class="grey-text text-lighten-3" href="https://www.twitter.com/">Twitter</a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="footer-copyright black">
					<div class="container">
					© 2019 Copyright Eclipse
					<a class="grey-text text-lighten-4 right">Todos los derechos reservados. 🌷</a>
					</div>
				</div>
			</footer>
		<!-- END: Footer -->
		
		<!-- SCRIPTS -->
			<script type="text/javascript" src="../../libraries/jquery-3.2.1.min.js"></script>
			<script type="text/javascript" src="../../libraries/materialize.min.js"></script>
			<script type="text/javascript" src="../../resources/js/sweetalert.min.js"></script>
			<script type="text/javascript" src="../../resources/js/'.$controller.'.js"></script>
		</body>
	</html>
		');
	}

	public static function modals()
	{
		print('');
	}

}
?>
