<?php
require 'connect_db.php';
session_start();

$sql="Insert into receta (id_usuario,nombre_receta,tiempo_receta,dificultad_receta,ingredientes_receta,pasos_receta) values ('".$_SESSION['id_usuario']."','".$_POST['nombreReceta']."','".$_POST['tiempo']."','".$_POST['dificultad']."','".$_POST['ingredientes']."','".$_POST['preparacion']."') " ;

$result=mysqli_query($conexion, $sql);

if($result)
{
  echo "Registo exitoso";
}else
{
    echo "Error de registro" .$sql . "<br>" .mysqli_error($conexion);
}
mysqli_close($conexion);

ob_start();
header("refresh:2,url=../MisRecetas.php");
ob_end_flush();
 ?>