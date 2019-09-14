<?php
require_once('../../core/helpers/feed.php');
Feed::headerTemplate('Carrito de compras');
?>

<body class="Saki">
    <!-- Tabla para mostrar los registros existentes -->
    <table class="highlight centered white">
        <thead>
            <tr>
                <th>Producto</th>
                <th>Cantidad</th>
                <th>Precio</th>
                <th>Subtotal</th>
            </tr>
        </thead>
        <tbody id="tbody-read">
        </tbody>
    </table>
    <hr>
    <div class="row center-align" id="ats">
        
    </div>
    <?php
    Feed::footerTemplate('carrito.js');
    ?>