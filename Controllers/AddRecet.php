<?php
require 'connect_db.php';
session_start();

$sql="Insert into receta (id_usuario,nombre_receta,tipo_receta,tiempo_receta,dificultad_receta,ingredientes_receta,pasos_receta) values ('".$_SESSION['id_usuario']."','".$_POST['nombreReceta']."','".$_POST['categoria']."','".$_POST['tiempo']."','".$_POST['dificultad']."','".$_POST['ingredientes']."','".$_POST['preparacion']."') " ;

$result=mysqli_query($conexion, $sql);

if($result)
{
}else
{
    echo "Error de registro" .$sql . "<br>" .mysqli_error($conexion);
}
mysqli_close($conexion);

ob_start();
header("refresh:1,url=../MisRecetas.php");
ob_end_flush();
 ?>