<?php
session_start();

require("connect_db.php");
$username=$_POST['Correo'];
$pass=$_POST['Contrasena'];
$_SESSION['username']=$username;


$sql=mysqli_query($conexion, "SELECT id_usuario, nombre_usuario, correo_usuario, contrasena_usuario from usuario where correo_usuario='$username'");

if($f=mysqli_fetch_assoc($sql)){
  if ($pass==$f['contrasena_usuario']) {
    $_SESSION['id_usuario']=$f['id_usuario'];
    $_SESSION['nombre_usuario']=$f['nombre_usuario'];
    $_SESSION['correo_usuario']=$f['correo_usuario'];
    $_SESSION['contrasena_usuario']=$f['contrasena_usuario'];
    


      echo "<script>location.href='../Home.php'</script>";
    


  }else
  {
    echo '<script>alert("Contraseña Incorrecta")</script>';
    echo "<script>location.href='../index.php'</script>";
  }
}


 ?>