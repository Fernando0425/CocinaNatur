<?php include "layouts/header.php"; 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="CSS/CSSperfil.css">
    <title>Perfil</title>
</head>
<body>
    <div class="container">
        <form action="./Controllers/EditPerfil.php" method="post">
            <div class="arriba">
                <div class="top">
                    <p id="titulo">Datos Personales</p>
                    <p>Nombre</p>
                    <p>Correo Electronico</p>
                </div>

                <div class="top-input">
                    <input type="text" name="new_name" value="<?php echo $_SESSION['nombre_usuario']?>">
                    <input type="text" name="new_email" value="<?php echo $_SESSION['correo_usuario']?>">
                </div>
            </div>

            <div class="arriba">
                <div class="top">
                    <p id="titulo">Cambiar contreseña</p>
                    <p>Contraseña actual</p>
                    <p>Nueva contraseña</p>
                    <p>Confirmar contraseña</p>
                </div>

                <div class="top-input">
                    <input type="password" name="actual_pass" value="">
                    <input type="password" name="new_pass" value="">
                    <input type="password" name="confirm_pass" value="">
                </div>
            </div>

            <div class="boton">
                <input type="submit" value="Guardar">
            </div>
        </form>
    </div>
    
</body>
</html>