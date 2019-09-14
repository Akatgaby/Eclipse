$(document).ready(function()
{
    showTable();
})

//Constante para establecer la ruta y parámetros de comunicación con la API
const apiCarrito = '../../core/api/carrito.php?site=public&action=';

//Función para llenar tabla con los datos de los registros
function fillTable(rows)
{
    let content = '';
    //Se recorren las filas para armar el cuerpo de la tabla y se utiliza comilla invertida para escapar los caracteres especiales
    rows.forEach(function(row){
        content += `
            <tr>
                <td>
                    <section class="row">
                        <section class="col s12 m6 l6">
                            <img class="imgalbum right" src="../../resources/img/discos/${row.imagen_Disco}" alt="">
                        </section>
                        <section class="col s12 m6 l6">
                        <p><u>Album:</u> ${row.nombre_Disco}</p>
                        <p><u>Artista:</u> ${row.nombre_Artista}</p>
                        </section>
                    </section>
                </td>
                <td class="center-align"> ${row.cantidad}</td>
                <td class="center-align"> $${row.precio_Disco}</td>
                <td class="center-align">
                <a href="#" onclick="confirmDelete(${row.id_Compra})" class="btn-floating btn-large waves-effect waves-light  blue-grey lighten-2 tooltipped" data-tooltip="Eliminar"><i class="material-icons">delete</i></a></td>
            </tr>
        `;
    });
    $('#tbody-read').html(content);
    $('.tooltipped').tooltip();
}

//Función para obtener y mostrar los registros disponibles
function showTable()
{
    $.ajax({
        url: apiCarrito + 'readCompra',
        type: 'post',
        data: null,
        datatype: 'json'
    })
    .done(function(response){
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
    .fail(function(jqXHR){
        //Se muestran en consola los posibles errores de la solicitud AJAX
        console.log('Error: ' + jqXHR.status + ' ' + jqXHR.statusText);
    });
}


//Función para eliminar un registro seleccionado
function confirmDelete(id)
{
    swal({
        title: 'Advertencia',
        text: '¿Quiere eliminar la compra?',
        icon: 'warning',
        buttons: ['Cancelar', 'Aceptar'],
        closeOnClickOutside: false,
        closeOnEsc: false
    })
    .then(function(value){
        if (value) {
            $.ajax({
                url: apiCarrito + 'deleteCompra',
                type: 'post',
                data:{
                    id_Compra: id
                },
                datatype: 'json'
            })
            .done(function(response){
                //Se verifica si la respuesta de la API es una cadena JSON, sino se muestra el resultado en consola
                if (isJSONString(response)) {
                    const result = JSON.parse(response);
                    //Se comprueba si el resultado es satisfactorio, sino se muestra la excepción
                    if (result.status) {
                        if (result.status == 1) {
                            sweetAlert(1, 'Compra eliminada correctamente', null);
                        } else if(result.status == 2) {
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
            .fail(function(jqXHR){
                //Se muestran en consola los posibles errores de la solicitud AJAX
                console.log('Error: ' + jqXHR.status + ' ' + jqXHR.statusText);
            });
        }
    });
}


function confirmarCierre() {
    //le doy un tiempo a la funcion cerrar sesion para que el usuario tenga un tiempo para confirmar, sino lo hizo en el tiempo se cerrara la sesion automaticamente
    var cerrar = setTimeout(cerrarSesion,5000);//5 segs de prueba
    alertify.confirm(
        'Cierre de Sesión',
        'Su Sesión Expirara, presione OK para prolongar la Sesión 60 segundos', 
        function(){
            //si presiona OK
            clearTimeout(cerrar); //elimino el tiempo a la funcion cerrarSesion
            clearTimeout(temp); //elimino el tiempo a la funcion confirmarCierre
            temp = setTimeout(confirmarCierre, 5000); //y aca le doy un nuevo tiempo a la funcion confirmarCierre (5 segs)
            alertify.success('Su sesión ha sido prolongada 60 segundos');
        },
        function(){
            
            cerrarSesion(); //si presiono Cancel, pues ejecuta la funcion cerrarSesion y posteriormente la cierra.
        }
    );
}

function cerrarSesion() {
    location.href = apiAccount + 'logout';
}

// se llamará a la función que confirmar Cierre después de 10 segundos
var temp = setTimeout(confirmarCierre, 10000);

// hacemos que al pulsar en los botones de Alertify no se propaguen los eventos
$("body").on("click", ".ajs-button", function(e) {
  e.stopPropagation();
});

// cuando se detecte actividad en cualquier parte de la app
$( document ).on('click keyup keypress keydown blur change', function(e) {
    // borrar el temporizador de la funcion confirmarCierre
    clearTimeout(temp);
    // y volver a iniciarlo con 10segs
    temp = setTimeout(confirmarCierre,10000);
    console.log('actividad detectada');
});