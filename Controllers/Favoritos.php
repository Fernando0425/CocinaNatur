<?php
require 'connect_db.php';
session_start();

$sql="Insert into favoritos_usuario (id_usuario, id_receta) values ('".$_SESSION['id_usuario']."','".$_GET['id']."')" ;

$result=mysqli_query($conexion, $sql);

if($result)
{
}else
{
    echo "Error de registro" .$sql . "<br>" .mysqli_error($conexion);
}
mysqli_close($conexion);

ob_start();
header("refresh:1,url=../RecetaPage.php?id=".$_GET['id']."");
ob_end_flush();
 ?>