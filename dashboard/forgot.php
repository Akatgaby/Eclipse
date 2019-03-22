<!DOCTYPE html>
<!-- IDIOMA DE LA PÁGINA -->
<html lang="es">
  <!-- BEGIN: Head -->
  <head>
    <!-- CARACTERES ESPECIALES -->
    <meta charset="UTF-8">
    <!-- TÍTULO DE LA VENTANA -->
    <title>Olvidé mi contraseña</title>
    <!-- ÍCONO DE LA VENTANA -->
    <link rel="shortcut icon" type="image/x-icon" href="img/icon.png">
    <!-- MATERIAL ICONS -->
    <link href="css/login/icon.css" rel="stylesheet">
    <!-- ESTILO DEL FORMULARIO -->
    <link rel="stylesheet" type="text/css" href="css/login/materialize.css">
    <!-- TAMAÑO DEL FORMULARIO -->
    <link rel="stylesheet" type="text/css" href="css/login/style.css">
    <!-- POSICIÓN Y BG -->
    <link rel="stylesheet" type="text/css" href="css/login/forgot.css">
  </head>
  <!-- END: Head-->

    <!-- BEGIN: Navbar -->
    <header>
      <nav class="black">
        <div class="brand-sidebar black">
          <h1 class="logo-wrapper">
            <a class="brand-logo center" href="">
              <img src="img/icon.png" alt="ico-illusion">
              <span class="white-text">Distribuidora Illusion</span>
            </a>
          </h1>
        </div>
      </nav>
    </header>
    <!-- END: Navbar -->

  <!-- END: Head-->
  <body class="vertical-layout page-header-light vertical-menu-collapsible vertical-menu-nav-light 1-column forgot-bg  blank-page blank-page" data-open="click" data-menu="vertical-menu-nav-dark" data-col="1-column">
    <div class="row">
      <div class="col s12">
        <div class="container">
        <div id="forgot-password" class="row">
          <div class="col s12 m6 l4 z-depth-4 offset-m4 card-panel border-radius-6 forgot-card">
            <form class="login-form">
              <div class="row">
                <div class="input-field col s12">
                  <h5 class="ml-4">Olvidé contraseña</h5>
                  <p class="ml-4">Se te enviará un enlace para que puedas cambiarla</p>
                </div>
              </div>
                <div class="row">
                  <div class="input-field col s12">
                    <i class="material-icons prefix pt-2">mail</i>
                    <input id="email" type="email">
                    <label for="email" class="center-align">Correo electrónico</label>
                  </div>
                </div>
                <div class="row">
                  <div class="input-field col s12">
                    <a href="password.php" class="btn waves-effect waves-light border-round black col s12 mb-1">Enviar</a>
                  </div>
                </div>
                <div class="row center">
                  <div class="input-field col s12">
                    <p class="margin medium-small"><a href="login.php">Volver</a></p>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

<!-- PLUGIN VENDOR: Funciona para los textarea dinámicos. -->
<script src="js/vendors.js" type="text/javascript"></script>
  
</body></html>