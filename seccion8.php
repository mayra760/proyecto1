<head>
    <title><?php echo 'detalles'; ?></title>
    <link rel="shortcut icon" href="https://getbootstrap.com/2.0.2/assets/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="https://getbootstrap.com/2.0.2/assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="https://getbootstrap.com/2.0.2/assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="https://getbootstrap.com/2.0.2/assets/ico/apple-touch-icon-57-precomposed.png">
</head>

</head>
    <title><?php echo 'ver detalles'; ?></title>
</head>
<center>
<?php

include 'conexion.php';

if (isset($_GET['detalles'])) {
    $detalles = $_GET['detalles'];
    $sql = "SELECT * FROM tb_productos WHERE detalles = '$detalles'";
    $consulta = $conexion->query($sql);
    if ($consulta->num_rows > 0) {
        $fila = $consulta->fetch_assoc();
        echo "<p>" . $fila['detalles'] . "</p>";
    }
} 

?>
</center>

