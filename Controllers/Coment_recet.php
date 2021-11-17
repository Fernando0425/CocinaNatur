<?php
require 'connect_db.php';
session_start();

$sql="INSERT INTO comentarios_receta (id_receta, id_usuario, nombre_usuario , comentarios_comentario) VALUES('$_POST[id_receta]','$_SESSION[id_usuario]','$_SESSION[nombre_usuario]','$_POST[comentario]')"  ;

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