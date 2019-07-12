// Constante para establecer la ruta y parámetros de comunicación con la API
const api = '../../core/api/dashboard/productos.php?action=';

// Función para graficar la cantidad de productos por categoría
function graficoCategorias()
{
    $.ajax({
        url: api + 'cantidadProductosCategoria',
        type: 'post',
        data: null,
        datatype: 'json'
    })
    .done(function(response){
        // Se verifica si la respuesta de la API es una cadena JSON, sino se muestra el resultado en consola
        if (isJSONString(response)) {
            const result = JSON.parse(response);
            // Se comprueba si el resultado es satisfactorio, sino se remueve la etiqueta canvas
            if (result.status) {
                let categorias = [];
                let cantidad = [];
                result.dataset.forEach(function(row){
                    categorias.push(row.type_name);
                    cantidad.push(row.cantidad);
                });
                barGraph('chart', type_name, cantidad, 'Cantidad de productos', 'Cantidad de productos por categoría')
            } else {
                $('#chart').remove();
            }
        } else {
            console.log(response);
        }
    })
    .fail(function(jqXHR){
        // Se muestran en consola los posibles errores de la solicitud AJAX
        console.log('Error: ' + jqXHR.status + ' ' + jqXHR.statusText);
    });
}
