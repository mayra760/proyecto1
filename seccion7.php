
<head>
<title><?php echo 'categorias'; ?></title>  
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="Flatfy Free Flat and Responsive HTML5 Template ">
    <meta name="author" content="">


    <link href="css1/bootstrap.min.css" rel="stylesheet">
 
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Arvo:400,700' rel='stylesheet' type='text/css'>
	
    <link href="css1/general.css" rel="stylesheet">
    <link href="css1/custom.css" rel="stylesheet">
	<link href="css1/owl.carousel.css" rel="stylesheet">
    <link href="css1/owl.theme.css" rel="stylesheet">
	<link href="css1/style.css" rel="stylesheet">
	<link href="css1/animate.css" rel="stylesheet">
	<link rel="stylesheet" href="css1/magnific-popup.css"> 
	<link rel="shortcut icon" href="https://getbootstrap.com/2.0.2/assets/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="https://getbootstrap.com/2.0.2/assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="https://getbootstrap.com/2.0.2/assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="https://getbootstrap.com/2.0.2/assets/ico/apple-touch-icon-57-precomposed.png">
	
	<script src="js/modernizr-2.8.3.min.js"></script> 

</head>

<body id="home">
	<div id="preloader">
		<div id="status"></div>
	</div>
	
    <div class="intro-header">
		<div class="col-xs-12 text-center abcen1">
			<center><h3 class="h1_home wow fadeIn" data-wow-delay="0.4s">CATEGORIAS</h3>
			<h4 class="h3_home wow fadeIn" data-wow-delay="0.6s">ROPA Y ACCESORIOS PARA TODOS</h4><center>
		</div>    
		<div class="col-xs-12 text-center abcen wow fadeIn">
			<div class="button_down "> 
				<a class="imgcircle wow bounceInUp" data-wow-duration="1.5s"  href="#whatis"> <img class="img_scroll" src="img/icon/circle.png" alt=""> </a>
			</div>
		</div>
    </div>
	<nav class="navbar-default" role="navigation">
    <CENTER>
		<div class="container">
			<div class="navbar-header">
                <button class="navbar-brand" href="#">Bienvenida</button>
			</div>
		</div>
        </CENTER>
	</nav> 
	
	<div id="whatis" class="content-section-b" style="border-top: 0">
		<div class="container">
        <CENTER>
			<div class="col-md-6 col-md-offset-3 text-center wrap_title">
				<h2></h2>
				<p class="lead" style="margin-top:0">Aqui puedes ver las categorias que te vamos a brindar</p>
			</div>
            </CENTER>

<div>
<CENTER>
<?php
include 'conexion.php';
include 'clase.php';
$producto = login::mostrarProductos();
?>
</CENTER>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
.producto {
    margin-bottom: 20px;
    padding: 15px;
    border: 1px solid;
    text-align: center; 
    display: inline-block; 
    margin-right: 10px;

}
.producto img { 
    margin: 1px; 
    width: 140px;
    height: 130px;
}
</style>



</head>
<center>
<body>
   <?php echo $producto; ?><br>
</body>
</center>

