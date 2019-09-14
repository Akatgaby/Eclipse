<?php
require_once('../../core/helpers/feed.php');
Feed::headerTemplate('Bienvenido');
?>
<body class="Saki">
    <div class="row">
        <h4 class="center-align purple-text" id="greeting"></h4>
    </div>
    <!-- BEGIN: Carousel -->

    <h6 class="center-align black-text">Presione el botón verde de la esquina para configurar su perfil.</h6>
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
    <?php
    Feed::footerTemplate('main.js');
    ?>