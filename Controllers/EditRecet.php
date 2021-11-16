<?php
require 'connect_db.php';

session_start();

$sql="UPDATE receta SET nombre_receta ='$_POST[nombreReceta]', tiempo_receta ='$_POST[tiempo]', dificultad_receta = '$_POST[dificultad]' ,ingredientes_receta = '$_POST[ingredientes]',pasos_receta ='$_POST[preparacion]' WHERE id_receta = '$_POST[id_receta]'" ;

$result=mysqli_query($conexion, $sql);

if($result)
{
}else
{
    echo "Error de registro" .$sql . "<br>" .mysqli_error($conexion);
}
mysqli_close($conexion);

ob_start();
header("refresh:1,url=../RecetaPage.php?id=".$_POST['id_receta']."");
ob_end_flush();
 ?>