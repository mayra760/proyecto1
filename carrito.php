<?php
include 'conexion.php';

if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $id_producto = intval($_GET['id']);

    $sql_pro = "SELECT * FROM tb_productos WHERE id_producto = $id_producto";
    $consulta_pro = $conexion->query($sql_pro);

    if ($consulta_pro->num_rows == 1) {
        $producto = $consulta_pro->fetch_assoc();
        $nombre_producto = $producto['nombre_producto'];
        $precio_unitario = $producto['precio'];
        $documento = 0 ;
        $sql_insert = "INSERT INTO tb_carrito (documento, nombre_producto, cantidad, precio) VALUES ('$documento', '$nombre_producto', 1, '$precio_unitario')";
        if ($conexion->query($sql_insert) === TRUE) {
            echo "Producto agregado al carrito correctamente";
        }
    } 
}
?>
