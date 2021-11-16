<?php
require 'connect_db.php';

session_start();
//Comprobacion de contraseña
if($_POST['actual_pass'] == $_SESSION['contrasena_usuario']){
    //Si es la misma contrseña
    if($_POST['new_pass'] == $_POST['confirm_pass']){
        //Confimar contraseña nueva
        $sql="UPDATE usuario SET nombre_usuario ='$_POST[new_name]', correo_usuario ='$_POST[new_email]', contrasena_usuario = '$_POST[new_pass]' WHERE id_usuario = '$_SESSION[id_usuario]'" ;

        $result=mysqli_query($conexion, $sql);

        if($result)
        {
            $_SESSION['nombre_usuario'] = $_POST['new_name']; 
            $_SESSION['correo_usuario'] = $_POST['new_email']; 
            $_SESSION['contrasena_usuario'] = $_POST['new_pass']; 
        }else
        {
            echo "Error de registro" .$sql . "<br>" .mysqli_error($conexion);
        }
        mysqli_close($conexion);

        ob_start();
        header("refresh:1,url=../Perfil.php");
        ob_end_flush();
    }else{
        echo '<script> alert("Confirma correctamente la nueva contraseña");
            window.location.href="../Perfil.php";
            </script>';
        }
    
}else{
    echo '<script> alert("Contraseña incorrecta");
     window.location.href="../Perfil.php";
     </script>';
}
//////////////////////////////
 ?>