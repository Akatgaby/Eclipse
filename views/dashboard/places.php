
<?php
require_once('../../core/helpers/dashboard.php');
Dashboard::headerTemplate('Instituciones');
?>
<div class="row">
    <!-- Formulario de búsqueda -->
    <form method="post" id="form-search">
        <div class="input-field col s6 m4">
            <i class="material-icons prefix">search</i>
            <input id="buscar" type="text" name="busqueda"/>
            <label for="buscar">Buscador</label>
        </div>
        <div class="input-field col s6 m4">
            <button type="submit" class="btn-floating btn waves-effect waves-light light-green"><i class="material-icons">check</i></button>
        </div>
    </form>
    <!-- Botón para abrir ventana de nuevo registro -->
    <div class="input-field center-align col s12 m4">
        <a href="#modal-create" class="btn-floating btn waves-effect waves-light blue lighten-3 tooltipped modal-trigger" data-position="left" data-tooltip="Agregar nuevo carrera">
            <i class="material-icons">add</i>
        </a>
    </div>
</div>
<!-- Tabla para mostrar los registros existentes -->
<table class="highlight">
    <thead>
        <tr>
            <th>Nombre de la institución</th>
            <th>Dirección del lugar</th>
            <th>Acción</th>
        </tr>
    </thead>
    <tbody id="tbody-read">
    </tbody>
</table>
<!-- Ventana para crear un nuevo registro -->
<div id="modal-create" class="modal">
    <div class="modal-content">
        <h4 class="center-align">Crear categoría</h4>
        <form method="post" id="form-create" enctype="multipart/form-data">
            <div class="row">
                <div class="input-field col s12 m6">
                    <i class="material-icons prefix">note_add</i>
                    <input id="create_nombre" type="text" name="create_nombre" class="validate" required/>
                    <label for="create_nombre">Nombre</label>
                </div>
                <div class="input-field col s12 m6">
                    <i class="material-icons prefix">description</i>
                    <input id="create_descripcion" type="text" name="create_descripcion" class="validate"/>
                    <label for="create_descripcion">Descripción</label>
                </div>
            </div>
            <div class="row center-align">
                <a href="#" class="btn waves-effect grey tooltipped modal-close" data-tooltip="Cancelar"><i class="material-icons">cancel</i></a>
                <button type="submit" class="btn waves-effect blue tooltipped" data-tooltip="Crear"><i class="material-icons">save</i></button>
            </div>
        </form>
    </div>
</div>
<!-- Ventana para modificar un registro existente -->
<div id="modal-update" class="modal">
    <div class="modal-content">
        <h4 class="center-align">Modificar categoría</h4>
        <form method="post" id="form-update" enctype="multipart/form-data">
            <input type="hidden" id="id_categoria" name="id_categoria"/>
            <input type="hidden" id="imagen_categoria" name="imagen_categoria"/>
            <div class="row">
                <div class="input-field col s12 m6">
                    <i class="material-icons prefix">note_add</i>
                    <input id="update_nombre" type="text" name="update_nombre" class="validate" required/>
                    <label for="update_nombre">Nombre</label>
                </div>
                <div class="input-field col s12 m6">
                    <i class="material-icons prefix">description</i>
                    <input id="update_descripcion" type="text" name="update_descripcion" class="validate"/>
                    <label for="update_descripcion">Descripción</label>
                </div>
            </div>
            <div class="row center-align">
                <a href="#" class="btn waves-effect grey tooltipped modal-close" data-tooltip="Cancelar"><i class="material-icons">cancel</i></a>
                <button type="submit" class="btn waves-effect blue tooltipped" data-tooltip="Modificar"><i class="material-icons">save</i></button>
            </div>
        </form>
    </div>
</div>
<?php
Dashboard::footerTemplate('to_school.js');
?>
