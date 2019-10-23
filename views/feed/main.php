<?php
require_once('../../core/helpers/feed.php');
Feed::headerTemplate('Bienvenido');
?>
<body class="cyan lighten-5">
    <body>
        <div class="card">
            <div class="card-image">
                <img src="../../resources/img/O1.png" class="animated fadeIn">
            </div>
        </div>
        <div class="row">
            <div class="center">
            </div>
            <div class="row">
                <div class="col s12 m6" id="content-information">
                    <div class="center">
                        <span>
                            <div class="chip blue white-text" id="chip-information">Oferta académica</div>
                        </span>
                        <div class="row" id="objectives">
                            <div class="col s12 m6 offset-m3">
                                <div class="card">
                                    <div class="card-content">
                                        <div class="center">
                                            <i class="material-icons green-text">bookmark_border</i>
                                        </div>
                                        <span class="black-text">Explora las carreras que tenemos disponibles para los estudiates que deseen aplicar.</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col s12 m6" id="content-information">
                    <div class="center">
                        <span>
                            <div class="chip blue white-text" id="chip-information">Servicios</div>
                        </span>
                        <div class="row" id="objectives">
                            <div class="col s12 m6 offset-m3">
                                <div class="card">
                                    <div class="card-content">
                                        <div class="center">
                                            <i class="material-icons green-text">computer</i>
                                        </div>
                                        <span class="black-text">La universidad realiza una labor orientada a despertar y promover el desarrollo integral de la persona.</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col s12 m6" id="content-information">
                    <div class="center">
                        <span>
                            <div class="chip blue white-text" id="chip-information">Estudiantes</div>
                        </span>
                        <div class="row" id="objectives">
                            <div class="col s12 m6 offset-m3">
                                <div class="card">
                                    <div class="card-content">
                                        <div class="center">
                                            <i class="material-icons green-text">school</i>
                                        </div>
                                        <span class="black-text">En cada opción cuentan con los conocimientos, habilidades y actitudes básicas que le permiten insertarse al campo laboral respectivo.</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col s12 m6" id="content-information">
                    <div class="center">
                        <span>
                            <div class="chip blue white-text" id="chip-information">Nuevo ingreso</div>
                        </span>
                        <div class="row" id="objectives">
                            <div class="col s12 m6 offset-m3">
                                <div class="card">
                                    <div class="card-content">
                                        <div class="center">
                                            <i class="material-icons green-text">group_add</i>
                                        </div>
                                        <span class="black-text">A los nuevos postulantes poder realizar el proceso de registro para agilizar la inscripción a las diferentes carreras que ofrecemos.</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
<?php
Feed::footerTemplate('main.js');
?>