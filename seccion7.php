<head>
<head>
    <title><?php echo 'categorias'; ?></title>
    <link rel="shortcut icon" href="https://getbootstrap.com/2.0.2/assets/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="https://getbootstrap.com/2.0.2/assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="https://getbootstrap.com/2.0.2/assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="https://getbootstrap.com/2.0.2/assets/ico/apple-touch-icon-57-precomposed.png">
</head>
    <title><?php echo 'Dama y caballeros'; ?></title>
</head>
<CENTER><h1>Categorías  </h1><BR></CENTER>
<CENTER>
<?php
include 'conexion.php';
include 'clase.php';
$producto = login::mostrarProductos();
?>
</CENTER>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
.producto {
    margin-bottom: 20px;
    padding: 8px;
    border: 2px solid #ccc; 
    text-align: center; 
}
.producto img {
    display: block;
    margin: 0 auto; 
    width: 200PX; 
    height: auto; 
}
</style>


</head>
<center>
<body>
   <?php echo $producto; ?>
</body>
</center>

</html>