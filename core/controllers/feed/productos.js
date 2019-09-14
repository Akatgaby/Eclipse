$(document).ready(function () {
    showProducts();
})

// Constantes para establecer las rutas y parámetros de comunicación con la API
const api = '../../core/api/dashboard/productos.php?action=';
const categorias = '../../core/api/dashboard/categorias.php?action=read';
const carrito = '../../core/api/feed/carrito.php?action=';

// Función para llenar tabla con los datos de los registros
function fillTable(rows) {
    let content = '';
    // Se recorren las filas para armar el cuerpo de la tabla y se utiliza comilla invertida para escapar los caracteres especiales
    rows.forEach(function (row) {
        (row.estado_producto == 1) ? icon = 'visibility' : icon = 'visibility_off';
        content += `
        <div class="col s12 m12">
        <div class="card center">
        <div class="card-image waves-effect waves-block waves-light">
             <img class="activator" src="../../resources/img/files/${row.plant_picture}">
         </div>
         <div class="card-content">
             <span class="card-title activator grey-text text-darken-4">${row.plant_name}</span>
         </div>
         <div class="card-reveal">
             <span class="card-title grey-text text-darken-4">${row.flowerpot}<i class="material-icons right">close</i></span>
             <p>${row.plant_descript}</p>
             <p>${row.type_name}</p>
             <p>${row.plant_price}</p>
             <input type="hidden" id="id_planta" name="id_planta" value="${row.plant_id}"/>
             <div class="input-field col s12">
                <i class="material-icons black-text prefix pt-2">add_shopping_cart</i>
                <input id="cantidad" type="number" name="cantidad" min="1" max="999" class="validate" autocomplete="off" required/>
                <label for="cantidad">Cantidad a llevar</label>
             </div>
             <a onclick="addCarrito()" type="submit" class="btn-floating btn-small waves-effect waves-light light-green accent-2 tooltipped" data-tooltip="Agregar al carrito">
                <i class="material-icons">add</i>
            </a>
         </div>
         </div>
        </div>
        `;
    });
    $('#readProducts').html(content);
    $('.materialboxed').materialbox();
    $('.tooltipped').tooltip();
}
function showProducts() {
    $.ajax({
        url: api + 'read',
        type: 'POST',
        data: null,
        datatype: 'JSON'
    })
        .done(function (response) {
            if (isJSONString(response)) {
                const result = JSON.parse(response);
                if (!result.status) {

                }
                fillTable(result.dataset)
            } else {
                console.log(response);
            }
        })
}

function addCarrito(){
    event.preventDefault();
    $.ajax({
        url: carrito + 'createCar',
        type: 'post',
        data: {
            id_disco :  $('#id_planta').val(),
            cantidad : $('#cantidad').val()
        },
        datatype: 'json'
    })
    .done(function(response){
        //Se verifica si la respuesta de la API es una cadena JSON, sino se muestra el resultado en consola
        if (isJSONString(response)) {
            const result = JSON.parse(response);
            //Se comprueba si el resultado es satisfactorio, sino se muestra la excepción
            if (result.status) {
                if (result.status) {
                    sweetAlert(1, 'Agregado al carrito', 'carrito.php');
                } else {
                    sweetAlert(2, result.exception, null);
                }
            } else {
                sweetAlert(2, result.exception, null);
            }
        } else {
            console.log(response);
        }
    })
    .fail(function(jqXHR){
        //Se muestran en consola los posibles errores de la solicitud AJAX
        console.log('Error: ' + jqXHR.status + ' ' + jqXHR.statusText);
    });
}