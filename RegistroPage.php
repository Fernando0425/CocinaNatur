<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" type="text/css" href="CSS/CSS.css">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registro</title>
</head>
<body>
  <div class="fondo">
    <div class="Registro">
      <form action ="./Controllers/register_user.php" method="post">
        <h2>Registrarse</h2>
        <p>Nombre<input type="text" name="Nombre"></p>
        <p>Correo Electronico<input type="text" name="Correo"></p>
        <p>Contraseña<input type="password" name="Contrasena"></p>
        <p>Confirmar Contraseña<input type="password" name="Confirm"></p>
      
    </div>
    <div class ="Boton">
      <input type="submit" class="submit" value="Registrarse">
      </form>
      <a href="./index.php"><input type="submit" class="submit" value="Atras"></a>
    </div>
  </div>
</body>
</html>