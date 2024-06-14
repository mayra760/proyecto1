<?php
        $conexion = mysqli_connect("localhost", "root", "", "pruebita1");
        
        if(!$conexion){
            die("error de conexion:".mysqli_connect_error());
        } 