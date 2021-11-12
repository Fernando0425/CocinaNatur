<?php


//creacion de conexion al servidor

$conexion= mysqli_connect("localhost","root","","cocina_nature",3306);

//validar conexion
if($conexion-> connect_errno)
{
  die("Conexion fallida a la base: (.$conexion.mysqli_connect_error().").$conexion->mysqli_connect_error();
}

 ?>
