<head>
    <title><?php echo"saludo"; ?></title>
</head>
<?php
if(!isset($_SESSION)) session_start();
if(!isset($_SESSION['nombre']) || $_SESSION['nombre'] === '') {
    header("location: out.php");
    exit;
}
$nombre = $_SESSION['nombre']; 
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido</title>
    <style>
        h1 {
            color: black;
        } 
    </style>
</head>

<body>
    <h1><center>Bienvenid@ <?php echo $nombre; ?></center></h1>
</body>

</html>





