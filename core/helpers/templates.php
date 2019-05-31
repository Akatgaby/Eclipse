<?php
/**
*	Clase para definir las plantillas de las páginas web del sitio privado.
*/
class Dashboard
{
    public static function headerTemplate($title, $css)
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
                <title>Distribuidora Illussion | '.$title.'</title>
                <!-- ÍCONO DE LA VENTANA -->
                <link rel="shortcut icon" type="image/x-icon" href="../files/img/ico.png">
                <!-- MATERIAL ICONS -->
                <link rel="stylesheet" type="text/css" href="../files/css/material-icons.css">
                <!-- MATERIALIZE.MIN -->
                <link rel="stylesheet" type="text/css" href="../files/css/materialize.min.css">
                <!-- FUENTE -->
                <link rel="stylesheet" type="text/css" href="../files/css/font.css">
                <!-- ESTILO -->
                <link rel="stylesheet" type="text/css" href="../files/css/'.$css.'.css">
                <!-- END: Head-->
                <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
            </head>
        ');
        // Se comprueba si existe una sesión para mostrar el menú de opciones, de lo contrario se muestra un menú vacío
		if (isset($_SESSION['log'])) {
			$filename = basename($_SERVER['PHP_SELF']);
			if ($filename != 'index.php' && $filename != 'register.php') {
				self::modals();
                print('');
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
                        <nav class="black">
                            <div class="brand-sidebar black">
                                <a class="brand-logo center">
                                    <img src="../files/img/ico.png" alt="ico-illusion" height="25">
                                    <span class="white-text">Illussion Party Supplies</span>
                                </a>
                            </div>
                        </nav>
                    </header>
                <!-- END: Navbar -->
				');
			}
		}
    }

}
?>