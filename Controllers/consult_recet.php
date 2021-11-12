<?php
require 'connect_db.php';

$consultar = "SELECT * FROM receta";
$query = mysqli_query($conexion,$consultar);
$array = mysqli_fetch_array($query);
?>