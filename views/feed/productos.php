<?php
require_once('../../core/helpers/feed.php');
Feed::headerTemplate('Lista de plantas');
?>
<body class="Saki">
    <div class="row white">
        <!-- Formulario de búsqueda -->
        <form method="post" id="form-search">
            <div class="input-field col s12 center">
                <i class="material-icons prefix">search</i>
                <input id="buscar" type="text" name="busqueda" />
                <label for="buscar">Buscador</label>
            </div>
            <div class="input-field col s12 center">
                <button type="submit" class="btn-floating btn waves-effect waves-light green tooltiped" data-tooltip="Buscar"><i class="material-icons">check</i></button>
            </div>
        </form>
    </div>

        <!-- BEGIN: Who -->
            <div class="row" id="readProducts">

            </div>
    <!-- END: Who-->

    <?php
    Feed::footerTemplate('productos.js');
    ?>