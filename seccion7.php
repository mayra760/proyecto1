<head>
<head>
    <title><?php echo 'carrito de compras'; ?></title>
    <link rel="shortcut icon" href="https://getbootstrap.com/2.0.2/assets/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="https://getbootstrap.com/2.0.2/assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="https://getbootstrap.com/2.0.2/assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="https://getbootstrap.com/2.0.2/assets/ico/apple-touch-icon-57-precomposed.png">
</head>
    <title><?php echo 'Dama y caballeros'; ?></title>
<style>

    .producto {
    width: 800px; 
    float: left;
}

</style>
</head>
<CENTER><h1>ROPA PARA TODA LA FAMILIA</h1><BR></CENTER>
<CENTER>
<?php
include 'conexion.php';
$sql = "SELECT * FROM tb_productos";
$consulta = $conexion->query($sql);

if ($consulta->num_rows > 0) {
    while ($row= $consulta->fetch_assoc()) {
        echo "<div class='producto'>";
        echo "<img src='" . $row['ruta_img'] . "' alt='" . $row['nombre_producto'] . "' width='100'>"; 
        echo "<p><strong>" . $row['nombre_producto'] . "</strong></p>"; 
        echo "<p><strong>Precio: $</strong>" . $row['precio'] . "</p>";
        echo "<p><strong>Detalles:</strong> ". $row['detalles']. "</p>";
        echo '<a href="carrito.php?id=' . $row['id_producto'] . '" class="btn btn-success">Agregar al carrito</a><br><br><br>';
        echo "</div>";
    }
} else {
    echo "No hay productos disponibles.";
}
?>

</CENTER>
