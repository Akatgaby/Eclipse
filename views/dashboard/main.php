<?php
require_once('../../core/helpers/dashboard.php');
Dashboard::headerTemplate('Bienvenido');
?>
<div class="row">
    <h4 class="center-align green-text" id="greeting"></h4>
</div>
<!-- BEGIN: Carousel -->

        <h6 class="center-align black-text">Presione el botón verde de la esquina para consultar las estadísticas del sistema.</h6>
        <div class="carousel">
            <a class="carousel-item" href="#one!"><img src="../../resources/img/flowers/O1.jpg"></a>
            <a class="carousel-item" href="#two!"><img src="../../resources/img/flowers/O2.jpg"></a>
            <a class="carousel-item" href="#three!"><img src="../../resources/img/flowers/O3.jpg"></a>
            <a class="carousel-item" href="#four!"><img src="../../resources/img/flowers/O4.jpg"></a>
            <a class="carousel-item" href="#five!"><img src="../../resources/img/flowers/O5.jpg"></a>
            <a class="carousel-item" href="#six!"><img src="../../resources/img/flowers/O6.jpg"></a>
            <a class="carousel-item" href="#seven!"><img src="../../resources/img/flowers/O7.jpg"></a>
            <a class="carousel-item" href="#eight!"><img src="../../resources/img/flowers/O8.jpg"></a>
            <a class="carousel-item" href="#nine!"><img src="../../resources/img/flowers/O9.jpg"></a>
            <a class="carousel-item" href="#nine!"><img src="../../resources/img/flowers/1O.jpg"></a>
      
</div>
<!-- END: Carousel -->

<!-- BEGIN: Profile Button -->
<div class="fixed-action-btn">
    <a class="btn-floating btn-large light-green tooltipped" data-position="left" data-tooltip="Gráficos y reportes">
        <i class="large material-icons">content_paste</i>
    </a>
    <ul>
        <li><a href="" class="btn-floating red lighten-4 tooltipped" data-position="top" data-tooltip="Facturas"><i class="material-icons">free_breakfast</i></a></li>
        <li><a href="" class="btn-floating red lighten-3 tooltipped" data-position="top" data-tooltip="Ventas"><i class="material-icons">gesture</i></a></li>
        <li><a href="graficos.php" class="btn-floating red lighten-2 tooltipped" data-position="top" data-tooltip="Productos"><i class="material-icons">grade</i></a></li>
        <li><a href="" class="btn-floating red lighten-1 tooltipped" data-position="top" data-tooltip="Reportes"><i class="material-icons">insert_drive_file</i></a></li>
    </ul>
</div>
<!-- END: Profile Button -->
<?php
Dashboard::footerTemplate('main.js');
?>