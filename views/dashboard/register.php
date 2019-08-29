<?php
require_once('../../core/helpers/dashboard.php');
Dashboard::headerTemplate('Registrar primer usuario');
?>
<body class='Aki'>
    <div class="row margin">
        <div class="col s12">
            <div id="RegisterStyle" class="row">
                <div class="col s12 m6 l4 z-depth-4 card-panel border-radius-6 Card">
                    <form method="post" id="form-register">
                        <div class="row margin">
                            <div class="input-field col s12 m6">
                                <h5 class="ml-4 black-text">Registrarse</h5>
                            </div>
                        </div>
                        <div class="row margin">
                            <div class="input-field col s12 m6">
                                <i class="material-icons black-text prefix">person_outline</i>
                                <input id="nombres" type="text" name="nombres" class="validate" autocomplete="off" required/>
                                <label for="nombres" class="center-align">Nombre</label>
                            </div>
                            <div class="input-field col s12 m6">
                                <i class="material-icons black-text prefix">person</i>
                                <input id="apellidos" type="text" name="apellidos" class="validate" autocomplete="off" required/>
                                <label for="apellidos" class="center-align">Apellido</label>
                            </div>
                            <div class="input-field col s12 m6">
                                <i class="material-icons black-text prefix">email</i>
                                <input id="correo" type="email" name="correo" class="validate" autocomplete="off" required/>
                                <label for="correo" class="center-align">Correo Electrónico</label>
                            </div>
                            <div class="input-field col s12 m6">
                                <i class="material-icons black-text prefix">insert_emoticon</i>
                                <input id="alias" type="text" name="alias" class="validate" autocomplete="off" required/>
                                <label for="alias" class="center-align">Nombre de usuario</label>
                            </div>
                            <div class="input-field col s12 m6">
                                <i class="material-icons black-text prefix">lock_outline</i>
                                <input id="clave1" type="password" name="clave1" class="validate" autocomplete="off" required/>
                                <label for="clave1" class="">Contraseña</label>
                            </div>
                            <div class="input-field col s12 m6">
                                <i class="material-icons black-text prefix">replay</i>
                                <input id="clave2" type="password" name="clave2" class="validate" autocomplete="off" required/>
                                <label for="clave2" class="">Repite la contraseña</label>
                            </div>
                        </div>
                        <div class="g-recaptcha" data-sitekey="6LcJbLUUAAAAAEnCdA77nqxbBffbvN0L2ZzGSQtF"></div>
                        <div class="row margin">
                            <div class="input-field col s12 center">
                                <button type="submit" class="btn waves-effect waves-light black border-round tooltipped" data-tooltip="Registrar">Registrarme</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
<script src="https://www.google.com/recaptcha/api.js?render=6LcJbLUUAAAAAEnCdA77nqxbBffbvN0L2ZzGSQtF"></script>
<script src="../../resources/js/captcha.js"></script>
<?php
Dashboard::footerTemplate('register.js');
?>