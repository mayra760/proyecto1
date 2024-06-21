<?php

  //Podría haber código PHP pero se vería en todas las secciones.

?>

<!DOCTYPE html>
<html lang="en"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/estilo.css" rel="stylesheet">
    <link href="css/bootstrap-responsive.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="https://getbootstrap.com/2.0.2/assets/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="https://getbootstrap.com/2.0.2/assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="https://getbootstrap.com/2.0.2/assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="https://getbootstrap.com/2.0.2/assets/ico/apple-touch-icon-57-precomposed.png">
  </head>

  <body>

<div class="navbar navbar-fixed-top">
  <div class="navbar-inner">
    <div class="container">
      <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>
      <a class="brand" href="#">FASHION WORLD</a>
      <div class="nav-collapse collapse" style="height: 0px;">
        <ul class="nav">
          <li class="dropdown active">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Menú <b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a href="controlador.php?seccion=seccion7">Categorías</a></li>
              <li><a href="#">Tus favoritos</a></li>
              <li><a href="#">Carrito</a></li>
              <li><a href="#">Fechas especiales</a></li>
              <li><a href="#">Mi perfil</a></li>
              </ul>
          </li>
          <li><a href="controlador.php?seccion=seccion1">iniciar sesión</a></li>
          <li><a href="controlador.php?seccion=seccion2">Registrar</a></li>
          <li><a href="controlador.php?seccion=seccion3">Bienvenida</a></li>
          <li><a href="controlador.php?seccion=seccion4">Video</a></li>
          <li><a href="controlador.php?seccion=seccion5">contac</a></li>
          <li><a href="controlador.php?seccion=seccion6">usuarios registrados</a></li>
          <li><a href="https://www.sena.edu.co" target="blank">Ir al Sena</a></li>
        </ul>
      </div>
    </div>
  </div>
</div>

</body>
    



    <!-- Se declara un contenedor fila y después un contenedor columna. LAs columnas deben sumar 12, según la rejilla Bootstrap. -->
    <div class="container">
      
      <?php
        include( $seccion.".php" );

      ?>

    </div>

    <div class="container">
      <footer>
        <p>© Company 2024</p>
      </footer>
    </div>

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap-transition.js"></script>
    <script src="js/bootstrap-alert.js"></script>
    <script src="js/bootstrap-modal.js"></script>
    <script src="js/bootstrap-dropdown.js"></script>
    <script src="js/bootstrap-scrollspy.js"></script>
    <script src="js/bootstrap-tab.js"></script>
    <script src="js/bootstrap-tooltip.js"></script>
    <script src="js/bootstrap-popover.js"></script>
    <script src="js/bootstrap-button.js"></script>
    <script src="js/bootstrap-collapse.js"></script>
    <script src="js/bootstrap-carousel.js"></script>
    <script src="js/bootstrap-typeahead.js"></script>

<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-MW395SN41J"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());
        
          gtag('config', 'G-MW395SN41J');
        </script>

</body></html>