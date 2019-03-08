<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Distribuidora Illusion - Inicio</title>
    <link rel="shortcut icon" type="image/x-icon" href="img/icon.png">
    <link type="text/css" rel="stylesheet" href="./css/materialize.min.css">
    <link rel="stylesheet" href="./css/material-icons.css">
    <link type="text/css" rel="stylesheet" href="./css/page.css">
    
</head>


<body>
    <header>
        <nav class="teal">
            <div class="nav-wrapper">
                <div class="input-field search-field">
                    <input id="search" type="search" placeholder="Busca algún evento de tu interés" class="search white-text" required>
                    <label class="label-icon" for="search"><i class="material-icons white-text">search</i></label>
                </div>
                <ul class="right">
                    <li><a href="sass.html">Sass</a></li>
                    <li><a href="badges.html">Components</a></li>
                    <!-- Dropdown Trigger -->
                    <li><a class="dropdown-trigger" href="#!" data-target="dropdown1">Dropdown<i class="material-icons right">arrow_drop_down</i></a></li>
                </ul>
            </div>
        </nav>
        <ul id="slide-out" class="sidenav sidenav-fixed">
            <li>
                <div class="user-view">
                <div class="background">
                <img src="img/tab.png">
                </div>
                <a href="#user"><img class="circle" src="img/icon.png"></a>
                <a href="#name"><span class="white-text name">John Doe</span></a>
                <a href="#email"><span class="white-text email">jdandturk@gmail.com</span></a>
                </div>
            </li>
            <li><a href="#!"><i class="material-icons">cloud</i>First Link With Icon</a></li>
            <li><a href="#!">Second Link</a></li>
            <li><div class="divider"></div></li>
            <li><a class="subheader">Subheader</a></li>
            <li><a class="waves-effect" href="#!">Third Link With Waves</a></li>
        </ul>
     
    </header>

    <main>
    <div class="row">
        <!-- BEGIN: Carousel -->
        <div class="slider">
            <ul class="slides">
              <li>
                <img src="img/slider-1.jpg"> 
                <div class="caption center-align">
                  <h3>This is our big Tagline!</h3>
                  <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
                </div>
              </li>
              <li>
                  <img src="img/slider-2.jpg">  
                <div class="caption left-align">
                  <h3>Left Aligned Caption</h3>
                  <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
                </div>
              </li>
              <li>
                  <img src="img/slider-3.jpg"> 
                <div class="caption right-align">
                  <h3>Right Aligned Caption</h3>
                  <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
                </div>
              </li>
              <li>
                  <img src="img/slider-4.jpg"> 
                <div class="caption center-align">
                  <h3>This is our big Tagline!</h3>
                  <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
                </div>
              </li>
            </ul>
          </div>
        <!-- END: Carousel -->
        </div>
    </main>

    <!-- BEGIN: Footer -->
    <footer>
    </footer>
    <!-- END: Footer -->


    <script src="./js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="./js/materialize.min.js"></script>
    <script src="./js/init.js"></script>
    <script src="./js/plugins.js"></script>
    <script src="./js/vendors.js"></script>
    <script src="js/init-slider.js" type="text/javascript"></script>
</body>
</html>

