<?php
session_start();
if($_SESSION['correo_usuario']){
    session_destroy();



    ob_start();
      header("Location: ../index.php");
       ob_end_flush();



}
unset($_SESSION['correo_usuario']);
 ?>
