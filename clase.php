<?php
class login{
    public static function registrar($documento,$nombre,$apellido,$correo,$contraseña,$fecha){
        include ('conexion.php');
        $sql = "insert into tb_usuarios(documento,nombre,apellido,correo,contraseña,fecha) value ('$documento','$nombre','$apellido','$correo','$contraseña','$fecha')";
        $consulta = $conexion->query($sql);
        if($consulta){
            header("location:controlador.php?seccion=seccion6");
        }
    }

        public static function autenticar($nombre,$contraseña){
            require("conexion.php");
            $salida ="";
            $sql ="SELECT count(*) from tb_usuarios ";
            $sql .= "where nombre='$nombre' and contraseña='$contraseña'";
            $resultado = $conexion->query($sql);
            while($fila=$resultado->fetch_array()){
                $salida = $fila[0];
            }
            $conexion->close();
            return $salida; 
        }   

    public static function mostrar(){
        include ('conexion.php');
        $salida= "";
        $sql = "select * from tb_usuarios;";
        $consulta = $conexion ->query($sql);
        while($fila = $consulta->fetch_assoc())
        {
            $salida.=$fila['nombre']."<br>";
            $salida.=$fila['apellido']."<br>";
            $salida.=$fila['correo']."<br>";
            $salida.=$fila['contraseña']."<br> <br>";
            $salida.=$fila['documento']."<br> <br>";
            $salida.=$fila['fecha']."<br> <br>";
        }
        return $salida;  
    }

    public static function agregarpro($id_producto){
        include 'conexion.php';
        $salida = "";
    
        if(isset($_GET['id']) && is_numeric($_GET['id'])){
            $id_producto = $_GET['id']; 
            $id_producto = intval($id_producto);
    
            $sql_pro = "SELECT * FROM tb_productos WHERE id_producto = $id_producto";
            $consulta_pro = $conexion->query($sql_pro);
    
            if($consulta_pro->num_rows == 1){
                $producto = $consulta_pro->fetch_assoc();
                $nombre_producto = $producto['nombre_producto'];
                $precio_unitario = $producto['precio'];
                $documento = 8;
    
                $sql_insert = "INSERT INTO tb_carrito(documento, nombre_producto, cantidad, precio) VALUES ('$documento', '$nombre_producto', 8, '$precio_unitario')";
    
                if($conexion->query($sql_insert) == TRUE){
                    echo "producto agregado al carrito correctamente";
                } else {
                    echo "error al agregar el producto o producto existente " . $conexion->error;
                }
            } else {
                echo "producto no encontrado";
            }
        } else {
            echo "id no valida";
        }
        return $salida;
    }
    
    public static function mostraCarrito(){
        include 'conexion.php';
        $salida="";
        $sql_carrito="SELECT * FROM tb_usuarios";
        $consulta_carrito=$conexion->query($sql_carrito);

        if ($consulta_carrito->num_rows>0){
            while($producto=$consulta_carrito->fetch_assoc()){
                $salida.= "producto: ". $producto['nombre_producto']."<br>";
                $salida.= "cantidad : ". $producto['cantidad'];
                $salida.= "precio unitario: " . $producto['precio']. "<br>";
            }
        }else{
            $salida= "el carrito esta vacio";
        }
        return $salida;
    }

}
