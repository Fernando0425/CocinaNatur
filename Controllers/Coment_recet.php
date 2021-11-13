<?php
require 'connect_db.php';
session_start();

$sql="INSERT INTO comentarios_receta (id_receta, comentarios_comentario, id_usuario) VALUES('$_POST[id_receta]','$_POST[comentario]','$_SESSION[id_usuario]')"  ;

$result=mysqli_query($conexion, $sql);

if($result)
{
}else
{
    echo "Error de registro" .$sql . "<br>" .mysqli_error($conexion);
}
mysqli_close($conexion);

header("refresh:1,url=../RecetaPage.php?id=".$_POST['id_receta']."");
 ?>