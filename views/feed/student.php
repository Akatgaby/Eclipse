<?php
require_once('../../core/helpers/feed.php');
Feed::headerTemplate('Datos del estudiante');
?>

<body class="cyan lighten-5">
    <div class="card">
        <div class="card-image">
            <img src="../../resources/img/O1.png" class="animated fadeIn">
        </div>
    </div>
    <div class="row margin">
        <div class="col s12">
            <div id="AkiStyle" class="row">
                <div class="col s12 z-depth-4 card-panel border-radius-6 Card">
                    <form method="post" id="form-aki">
                        <div class="input-field col s12">
                            <h5 class="ml-4 black-text center">Datos del estudiante</h5>
                            <p class="center">Los siguientes datos una vez registrados no pueden modificarse.</p>
                        </div>
                        <div class="row margin">
                            <div class="input-field col s12 m6">
                                <i class="material-icons black-text prefix">place</i>
                                <input id="place" type="text" name="place" class="validate" autocomplete="off" required />
                                <label for="place" class="center-align">Institución de procedencia</label>
                            </div>
                            <div class="input-field col s12 m6">
                                <i class="material-icons black-text prefix">security</i>
                                <input id="option" type="text" name="option" class="validate" autocomplete="off" required />
                                <label for="option" class="center-align">Opción bachillerato</label>
                            </div>
                            <div class="input-field col s12 m6">
                                <i class="material-icons black-text prefix">star</i>
                                <input id="init" type="number" name="init" class="validate" autocomplete="off" required />
                                <label for="init" class="center-align">Año inicio</label>
                            </div>
                            <div class="input-field col s12 m6">
                                <i class="material-icons black-text prefix">star_border</i>
                                <input id="ending" type="number" name="ending" class="validate" autocomplete="off" required />
                                <label for="ending" class="center-align">Año finalización</label>
                            </div>
                            <div class="input-field col s12 m6">
                                <i class="material-icons black-text prefix">call</i>
                                <input id="clave1" type="number" name="clave1" class="validate" autocomplete="off" required />
                                <label for="clave1" class="">Proporcione un número de teléfono</label>
                            </div>
                            <div class="input-field col s12 m6">
                                <i class="material-icons black-text prefix">call_end</i>
                                <input id="clave2" type="number" name="clave2" class="validate" autocomplete="off" />
                                <label for="clave2" class="">Proporcione un segundo número de teléfono</label>
                            </div>
                            <div class="input-field col s12 m6">
                                <i class="material-icons black-text prefix">brightness_low</i>
                                <input id="antibirth" type="date" name="antibirth" class="validate" autocomplete="off" required />
                                <label for="antibirth" class="center-align">Fecha de nacimiento</label>
                            </div>
                            <div class="input-field col s12 m6">
                                <i class="material-icons black-text prefix">class</i>
                                <input id="cat" type="text" name="cat" class="validate" autocomplete="off" required />
                                <label for="cat" class="center-align">Carrera</label>
                            </div>
                            <div class="input-field col s12 m6">
                                <i class="material-icons black-text prefix">assignment_ind</i>
                                <input id="dui" type="number" name="dui" class="validate" autocomplete="off" required />
                                <label for="dui" class="center-align">DUI</label>
                            </div>
                            <div class="input-field col s12 m6">
                                <i class="material-icons black-text prefix">assignment</i>
                                <input id="nit" type="number" name="nit" class="validate" autocomplete="off" required />
                                <label for="nit" class="">NIT</label>
                            </div>
                            <div class="input-field col s12 m6">
                                <i class="material-icons black-text prefix">assistant</i>
                                <input id="nie" type="number" name="nie" class="validate" autocomplete="off" required />
                                <label for="nie" class="center-align">NIE</label>
                            </div>
                            <div class="file-field input-field col s12 m6">
                                <div class="btn waves-effect blue">
                                    <span><i class="material-icons">image</i></span>
                                    <input id="create_archivo" type="file" name="create_archivo" required />
                                </div>
                                <div class="file-path-wrapper">
                                    <input type="text" class="file-path validate" placeholder="Seleccione una imagen de 500x500" />
                                </div>
                            </div>
                        </div>
                        <div class="row margin">
                            <div class="input-field col s12 center">
                                <button type="submit" class="btn waves-effect waves-light blue lighten-4 black-text border-round">Guardar</button>
                                <button type="submit" class="btn waves-effect waves-light blue lighten-4 black-text border-round">Finalizar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php
    Feed::footerTemplate('main.js');
    ?>