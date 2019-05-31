<!DOCTYPE html>
<!-- IDIOMA DE LA PÁGINA -->
<html lang="es">
    <head>
        <!-- BEGIN: Head -->
        <!-- CARACTERES ESPECIALES -->
        <meta charset="UTF-8">
        <!-- TÍTULO DE LA VENTANA -->
        <title>Distribuidora Illussion | Registro</title>
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

    <body class='Aki'>
        <div class="row margin">
            <div class="col s12">
                <div id="RegisterStyle" class="row">
                    <div class="col s12 m6 l4 z-depth-4 card-panel border-radius-6 Card">
                        <form class="register-form" method="post">
                            <div class="row margin">
                                <div class="input-field col s12 m6">
                                    <h5 class="ml-4">Registrarse</h5>
                                </div>
                            </div>
                            <div class="row margin">
                                <div class="input-field col s12 m6">
                                    <i class="material-icons black-text prefix">person_outline</i>
                                    <input id="name" type="text" name="first_name" class="validate" required>
                                    <label for="name" class="center-align">Nombre</label>
                                </div>
                                <div class="input-field col s12 m6">
                                    <i class="material-icons black-text prefix">person</i>
                                    <input id="lastname" type="text" name="last_name" class="validate" required>
                                    <label for="lastname" class="center-align">Apellido</label>
                                </div>
                                <div class="input-field col s12 m6">
                                    <i class="material-icons black-text prefix">email</i>
                                    <input id="email" type="text" name="e_mail" class="validate" required>
                                    <label for="email" class="center-align">Correo Electrónico</label>
                                </div>
                                <div class="input-field col s12 m6">
                                    <i class="material-icons black-text prefix">insert_emoticon</i>
                                    <input id="username" type="text" name="user_name" class="validate" required>
                                    <label for="username" class="center-align">Nombre de usuario</label>
                                </div>
                                <div class="input-field col s12 m6">
                                    <i class="material-icons black-text prefix">lock_outline</i>
                                    <input id="password" type="password" name="pass_word" class="validate" required>
                                    <label for="password" class="">Contraseña</label>
                                </div>
                                <div class="input-field col s12 m6">
                                    <i class="material-icons black-text prefix">replay</i>
                                    <input id="repeat" type="password" name="second_pass" class="validate" required>
                                    <label for="repeat" class="">Repite la contraseña</label>
                                </div>
                            </div>
                            <div class="row margin">
                                <div class="input-field col s12 center">
                                    <button type="submit" class="btn waves-effect waves-light black border-round tooltipped"
                                    data-tooltip="Registrar">Registrarme</button>
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
    <script src="../core/controllers/register.js" type="text/javascript"></script>
    </body>
</html>