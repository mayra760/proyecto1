<?php
$seccion = "seccion1"; 
$seccion = "seccion3";
$seccion = "seccion4"; 
$seccion = "seccion7"; 

if( isset( $_GET[ 'seccion' ] ) ){
  $seccion = $_GET[ 'seccion' ];
}

//echo $seccion;

include( "plantilla.php" );
?>
