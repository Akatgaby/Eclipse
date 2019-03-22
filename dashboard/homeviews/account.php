<?php
require_once('../../resources/tabs/tab-dashboard.php');
dashboard::headerTemplate('Mi cuenta');
?>

<body>
    <header>
        <ul id="slide-out" class="sidenav sidenav-fixed">
            <div class="user-view center">
                <h4>Administrador</h4>
                <h6 class="white-text">.</h6>
            </div>
            <li><div class="divider"></div></li>
            <li><a class="subheader">Información</a></li>
                <li><a href="index.php"><i class="material-icons">format_list_bulleted</i>Inicio</a></li>
                <li><a href="news.php"><i class="material-icons">import_contacts</i>Novedades</a></li>
                <li><a href="charts.php"><i class="material-icons">insert_chart</i>Estadísticas</a></li>
            <li><div class="divider"></div></li>
            <li><a class="subheader">Mantenimiento</a></li>
                <li><a href="events.php"><i class="material-icons">info</i>Eventos</a></li>
                <li><a href="inventory.php"><i class="material-icons">palette</i>Inventario</a></li>
                <li><a href="reservations.php"><i class="material-icons">query_builder</i>Reservaciones</a></li>
                <li><a href="rooms.php"><i class="material-icons">room</i>Salones</a></li>
                <li><a href="cats.php"><i class="material-icons">filter_vintage</i>Categorías</a></li>
                <li><a href="service.php"><i class="material-icons">local_cafe</i>Atención</a></li>
            <li><div class="divider"></div></li>
            <li><a class="subheader">Configuración</a></li>
                <li><a class="grey lighten-3"><i class="material-icons">settings</i>Ajustes de la cuenta</a></li>
                <li><a href="users.php"><i class="material-icons">people</i>Usuarios del sistema</a></li>
                <li><a href="../login.php"><i class="material-icons">power_settings_new</i>Cerrar Sesión</a></li>
            <div class="user-view center">
                <h6 class="white-text">.</h6>
            </div>
        </ul>
    </header>

    <main>
    </main>

    <!-- BEGIN: Footer -->
    <footer>
    </footer>
    <!-- END: Footer -->

  <?php
  dashboard::scripts();
  ?>