$(document).ready(function () {
    showTable();
})

//Constante para establecer la ruta y parámetros de comunicación con la API
const apiCarrito = '../../core/api/feed/carrito.php?action=';

//Función para llenar tabla con los datos de los registros
function fillTable(rows) {
    let content = '';
    let carrito = 0;
    //Se recorren las filas para armar el cuerpo de la tabla y se utiliza comilla invertida para escapar los caracteres especiales
    rows.forEach(function (row) {
        carrito = row.car_id;
        content += `
        <tr>
        <td>${row.plant_name}</td>
        <td>${row.count}</td>
        <td>${row.plant_price}</td>
        <td>${row.total}</td>
        <td>
            <a href="#" onclick="confirmDelete(${row.details_id})" class="btn-floating btn-small waves-effect waves-light red tooltipped" data-tooltip="Eliminar">
            <i class="material-icons">delete</i>
        </a>
        </td>
    </tr>
        `;
    });
    $('#tbody-read').html(content);
    $('.tooltipped').tooltip();
    $('#ats').html(`<button onclick="shoppp(${carrito})" class="btn waves-effect purple tooltipped" data-tooltip="Crear"><i class="material-icons">shopping</i>Comprar</button>`);

}

//Función para obtener y mostrar los registros disponibles
function showTable() {
    $.ajax({
        url: apiCarrito + 'readCompra',
        type: 'post',
        data: null,
        datatype: 'json'
    })
        .done(function (response) {
            //Se verifica si la respuesta de la API es una cadena JSON, sino se muestra el resultado en consola
            if (isJSONString(response)) {
                const result = JSON.parse(response);
                //Se comprueba si el resultado es satisfactorio, sino se muestra la excepción
                if (!result.status) {
                    sweetAlert(4, result.exception, null);
                }
                fillTable(result.dataset);
            } else {
                console.log(response);
            }
        })
        .fail(function (jqXHR) {
            //Se muestran en consola los posibles errores de la solicitud AJAX
            console.log('Error: ' + jqXHR.status + ' ' + jqXHR.statusText);
        });
}

//Función para eliminar un registro seleccionado
function confirmDelete(id) {
    swal({
        title: 'Advertencia',
        text: '¿Quiere eliminar la compra?',
        icon: 'warning',
        buttons: ['Cancelar', 'Aceptar'],
        closeOnClickOutside: false,
        closeOnEsc: false
    })
        .then(function (value) {
            if (value) {
                $.ajax({
                    url: apiCarrito + 'deleteCompra',
                    type: 'post',
                    data: {
                        id_Compra: id
                    },
                    datatype: 'json'
                })
                    .done(function (response) {
                        //Se verifica si la respuesta de la API es una cadena JSON, sino se muestra el resultado en consola
                        if (isJSONString(response)) {
                            const result = JSON.parse(response);
                            //Se comprueba si el resultado es satisfactorio, sino se muestra la excepción
                            if (result.status) {
                                if (result.status == 1) {
                                    sweetAlert(1, 'Compra eliminada correctamente', null);
                                } else if (result.status == 2) {
                                    sweetAlert(3, 'Compra eliminada. ' + result.exception, null);
                                }
                                showTable();
                            } else {
                                sweetAlert(2, result.exception, null);
                            }
                        } else {
                            console.log(response);
                        }
                    })
                    .fail(function (jqXHR) {
                        //Se muestran en consola los posibles errores de la solicitud AJAX
                        console.log('Error: ' + jqXHR.status + ' ' + jqXHR.statusText);
                    });
            }
        });
}

function shoppp(id) {
    swal({
        title: 'Advertencia',
        text: '¿Quiere finalizar la compra?',
        icon: 'warning',
        buttons: ['Cancelar', 'Aceptar'],
        closeOnClickOutside: false,
        closeOnEsc: false
    })
        .then(function (value) {
            if (value) {
                $.ajax({
                    url: apiCarrito + 'shoppp',
                    type: 'post',
                    data: {
                        id_Compra: id
                    },
                    datatype: 'json'
                })
                    .done(function (response) {
                        //Se verifica si la respuesta de la API es una cadena JSON, sino se muestra el resultado en consola
                        if (isJSONString(response)) {
                            const result = JSON.parse(response);
                            //Se comprueba si el resultado es satisfactorio, sino se muestra la excepción
                            if (result.status) {
                                sweetAlert(1, 'Compra finalizada correctamente', 'main.php');
                            } else {
                                sweetAlert(2, result.exception, null);
                            }
                        } else {
                            console.log(response);
                        }
                    })
                    .fail(function (jqXHR) {
                        //Se muestran en consola los posibles errores de la solicitud AJAX
                        console.log('Error: ' + jqXHR.status + ' ' + jqXHR.statusText);
                    });
            }
        });
}