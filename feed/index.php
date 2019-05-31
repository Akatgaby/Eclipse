<!DOCTYPE html>
<!-- IDIOMA DE LA PÁGINA -->
<html lang="es">
    <head>
        <!-- BEGIN: Head -->
        <!-- CARACTERES ESPECIALES -->
        <meta charset="UTF-8">
        <!-- TÍTULO DE LA VENTANA -->
        <title>Distribuidora Illussion | Iniciar Sesión</title>
        <!-- ÍCONO DE LA VENTANA -->
        <link rel="shortcut icon" type="image/x-icon" href="../files/img/ico.png">
        <!-- MATERIAL ICONS -->
        <link rel="stylesheet" type="text/css" href="../files/css/material-icons.css">
        <!-- MATERIALIZE.MIN -->
        <link rel="stylesheet" type="text/css" href="../files/css/materialize.min.css">
        <!-- FUENTE -->
        <link rel="stylesheet" type="text/css" href="../files/css/font.css">
        <!-- ESTILO -->
        <link rel="stylesheet" type="text/css" href="../files/css/style.css">
        <!-- END: Head-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>
    
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

    <body class="Aki">
        <div class="row">
            <div class="col s12">
                <div id="LoginStyle">
                    <div class="col s12 m6 l4 z-depth-4 card-panel border-radius-6 Card">
                        <form method="post" id="login-form">
                            <div class="row margin">
                                <div class="input-field col s12">
                                    <h5>Iniciar Sesión</h5>
                                </div>
                            </div>
                            <div class="row margin">
                                <div class="input-field col s12">
                                    <i class="material-icons black-text prefix pt-2">person_outline</i>
                                    <input id="username" type="text" name="username" class="validate" required/>
                                    <label for="username">Nombre de usuario</label>
                                </div>
                            </div>
                            <div class="row margin">
                                <div class="input-field col s12">
                                    <i class="material-icons black-text prefix pt-2">lock_outline</i>
                                    <input id="password" type="password" name="password" class="validate" required/>
                                    <label for="password">Contraseña</label>
                                </div>
                            </div>
                            <div class="row margin">
                                <div class="input-field col s12">
                                    <button type="submit" class="btn waves-effect waves-light black col s12 border-round tooltipped"
                                    data-tooltip="Ingresar">Entrar</button>
                                </div>
                            </div>
                            <div class="row margin center">
                                <div class="input-field col s12">
                                    <p class="margin medium-small"><a href="forget.php">Olvidé mi contraseña</a></p>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    <!-- PLUGIN: Funciona para los TextBox dinámicos. -->
    <script src="../files/js/plugin.js" type="text/javascript"></script>
    <!-- CONTROLADOR. -->
    <script src="../core/controllers/index.js" type="text/javascript"></script>
    </body>
</html>