<?php
//creacion de conexion al servidor
$conexion= mysqli_connect("localhost","root","","cocina_nature",3306);
//validar conexion
if(!$conexion)
{
  die("Conexion fallida al servidor".mysqli_connect_error());
}

$sql="Insert into usuario (nombre_usuario,correo_usuario,contrasena_usuario) values ('".$_POST['Nombre']."','".$_POST['Correo']."','".$_POST['Contrasena']."') " ;

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
header("refresh:2,url=../index.php");
ob_end_flush();
 ?>