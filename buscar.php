<?php


if(isset($_GET['query'])) {
  $query = $_GET['query'];
  include 'conexion.php';
  include 'clase.php';
  echo "Resultados de la búsqueda para: " . $query;
}
?>
