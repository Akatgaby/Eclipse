<?php
require_once('../../resources/tabs/tab-dashboard.php');
dashboard::headerTemplate('Categorías');
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
                <li><a class="grey lighten-3"><i class="material-icons">filter_vintage</i>Categorías</a></li>
                <li><a href="service.php"><i class="material-icons">local_cafe</i>Atención</a></li>
            <li><div class="divider"></div></li>
            <li><a class="subheader">Configuración</a></li>
                <li><a href="account.php"><i class="material-icons">settings</i>Ajustes de la cuenta</a></li>
                <li><a href="users.php"><i class="material-icons">people</i>Usuarios del sistema</a></li>
                <li><a href="../login.php"><i class="material-icons">power_settings_new</i>Cerrar Sesión</a></li>
            <div class="user-view center">
                <h6 class="white-text">.</h6>
            </div>
        </ul>
    </header>

    <main>
    <!-- MANTENIMIENTO -->
    <div class="row">
    <h2 class="header">Categorías</h2>
        <!-- AGREGAR -->
        <div class="card horizontal col s11">
            <div class="card-image">
                <img src="../img/categorie-template.png">
            </div>
            <div class="card-stacked">
                <div class="row margin center">
                  <div class="input-field col s11">
                    <i class="material-icons prefix pt-2">bookmark</i>
                    <input id="username" placeholder="Ingrese una categoría" type="text">
                  </div>
                </div>
                <div class="card-action">
                <a href="#!">Agregar</a>
                </div>
            </div>
        </div>

        <!-- BÚSQUEDA -->
        <div class="center">
          <form method="post" id="form-search">
            <div class="input-field col s12 m4 l8">
              <i class="material-icons prefix">search</i>
              <input id="buscar" type="text" name="busqueda"/>
              <label for="buscar">Buscar</label>
            </div>
          </form>
        </div>

    </div>
    <!-- DATAGRIDVIEW: Tabla de datos -->
    <table>
        <thead>
          <tr>
              <th>Acción</th>
              <th>Código</th>
              <th>Categoría</th>
          </tr>
        </thead>

        <tbody>
          <tr>
          <td>
            <a class="btn-floating btn-small waves-effect waves-light light-green accent-2">
              <i class="material-icons">create</i>
            </a>
            <a class="btn-floating btn-small waves-effect waves-light red">
              <i class="material-icons">delete</i>
              </a>
          </td>

            <td>20190001</td>
            <td>Baby Shower</td>
          </tr>
          <tr>
          <td>
              <a class="btn-floating btn-small waves-effect waves-light light-green accent-2">
                <i class="material-icons">create</i>
              </a>
              <a class="btn-floating btn-small waves-effect waves-light red">
                <i class="material-icons">delete</i>
              </a>
            </td>
            <td>20190002</td>
            <td>Boda</td>
          </tr>
          <tr>
            <td>
              <a class="btn-floating btn-small waves-effect waves-light light-green accent-2">
                <i class="material-icons">create</i>
              </a>
              <a class="btn-floating btn-small waves-effect waves-light red">
                <i class="material-icons">delete</i>
              </a>
            </td>
            <td>20190003</td>
            <td>Fiesta infantil</td>
          </tr>
          <tr>
          </tr>
        </tbody>
      </table>

    </main>

    <!-- BEGIN: Footer -->
    <footer>
    </footer>
    <!-- END: Footer -->

  <?php
  dashboard::scripts();
  ?>


