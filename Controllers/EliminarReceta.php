<?php
require 'connect_db.php';

session_start();

$sql="DELETE FROM receta WHERE id_receta= $_GET[id]";

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