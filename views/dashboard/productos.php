<?php
require_once('../../core/helpers/dashboard.php');
Dashboard::headerTemplate('Administrar productos');
?>
<div class="row">
    <!-- Formulario de búsqueda -->
    <form method="post" id="form-search">
        <div class="input-field col s12">
            <i class="material-icons prefix">search</i>
            <input id="buscar" type="text" name="busqueda"/>
            <label for="buscar">Buscador</label>
        </div>
        <div class="input-field col s12 center">
            <button type="submit" class="btn-floating btn waves-effect waves-light green"><i class="material-icons">check</i></button>
        </div>
        <div class="input-field center-align col s12 center">
        <a onclick="modalCreate()" class="btn-floating btn waves-effect waves-light red lighten-3 tooltipped" data-position="left" data-tooltip="Agregar una producto">
            <i class="material-icons">add</i>
        </a>
    </div>
    </form>
    <!-- Botón para abrir ventana de nuevo registro -->
</div>
<!-- Tabla para mostrar los registros existentes -->
<table class="highlight responsive-table">
    <thead>
        <tr>
            <th>Imagen</th>
            <th>.</th>
            <th>Producto</th>
            <th>Categoría</th>
            <th>Descripción</th>
            <th>Precio</th>
            <th>Cantidad</th>
            <th>Adicionales</th>
            <th>Acción</th>
        </tr>
    </thead>
    <tbody id="tbody-read">
    </tbody>
</table>
<!-- Ventana para crear un nuevo registro -->
<div id="modal-create" class="modal">
    <div class="modal-content">
        <h4 class="center-align">Agregar plantas nuevas</h4>
        <form method="post" id="form-create" enctype="multipart/form-data">
            <div class="row">
                <div class="input-field col s12 m6">
                    <i class="material-icons prefix">note_add</i>
                    <input id="create_nombre" type="text" name="create_nombre" class="validate" required />
                    <label for="create_nombre">Nombre</label>
                </div>
                <div class="input-field col s12 m6">
                    <i class="material-icons prefix">shopping_cart</i>
                    <input id="create_precio" type="number" name="create_precio" class="validate" max="999.99" min="0.01" step="any" required />
                    <label for="create_precio">Precio ($)</label>
                </div>
                <div class="input-field col s12 m6">
                    <i class="material-icons prefix">description</i>
                    <input id="create_descripcion" type="text" name="create_descripcion" class="validate" required />
                    <label for="create_descripcion">Descripción</label>
                </div>
                <div class="input-field col s12 m6">
                    <i class="material-icons prefix">description</i>
                    <input id="create_existencia" type="number" name="create_existencia" class="validate" required />
                    <label for="create_existencia">Existencia</label>
                </div>
                <div class="input-field col s12 m6">
                    <i class="material-icons prefix">description</i>
                    <input id="create_maceta" type="text" name="create_maceta" class="validate" required />
                    <label for="create_maceta">Maceta</label>
                </div>
                <div class="input-field col s12 m6">
                    <select id="create_categoria" name="create_categoria">
                    </select>
                    <label>Categoría</label>
                </div>
                <div class="file-field input-field col s12 m6">
                    <div class="btn waves-effect">
                        <span><i class="material-icons">image</i></span>
                        <input id="create_archivo" type="file" name="create_archivo" required />
                    </div>
                    <div class="file-path-wrapper">
                        <input type="text" class="file-path validate" placeholder="Seleccione una imagen de 500x500" />
                    </div>
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
        <h4 class="center-align">Modificar producto</h4>
        <form method="post" id="form-update" enctype="multipart/form-data">
            <input type="hidden" id="id_producto" name="id_producto" />
            <input type="hidden" id="imagen_producto" name="imagen_producto" />
            <div class="row">
                <div class="input-field col s12 m6">
                    <i class="material-icons prefix">note_add</i>
                    <input id="update_nombre" type="text" name="update_nombre" class="validate" required />
                    <label for="update_nombre">Nombre</label>
                </div>
                <div class="input-field col s12 m6">
                    <i class="material-icons prefix">shopping_cart</i>
                    <input id="update_precio" type="number" name="update_precio" class="validate" min="0.01" max="999.99" step="any" required />
                    <label for="update_precio">Precio ($)</label>
                </div>
                <div class="input-field col s12 m6">
                    <i class="material-icons prefix">description</i>
                    <input id="update_descripcion" type="text" name="update_descripcion" class="validate" required />
                    <label for="update_descripcion">Descripción</label>
                </div>
                <div class="input-field col s12 m6">
                    <select id="update_categoria" name="update_categoria">
                    </select>
                    <label>Categoría</label>
                </div>
                <div class="file-field input-field col s12 m6">
                    <div class="btn waves-effect">
                        <span><i class="material-icons">image</i></span>
                        <input id="update_archivo" type="file" name="update_archivo" />
                    </div>
                    <div class="file-path-wrapper">
                        <input class="file-path validate" type="text" placeholder="Seleccione una imagen de 500x500" />
                    </div>
                </div>
                <div class="col s12 m6">
                    <p>
                        <div class="switch">
                            <span>Estado:</span>
                            <label>
                                <i class="material-icons">visibility_off</i>
                                <input id="update_estado" type="checkbox" name="update_estado" />
                                <span class="lever"></span>
                                <i class="material-icons">visibility</i>
                            </label>
                        </div>
                    </p>
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
Dashboard::footerTemplate('productos.js');
?>