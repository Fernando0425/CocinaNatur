<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" type="text/css" href="CSS/CSS.css">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Inicio Sesión</title>
</head>
<body>
  <div class="fondo">
    <div class="InicioSesion">
      <form action="./Controllers/user.php" method="post">
        <h2>Iniciar sesion</h2>
        <p>Correo<input type="text" name="Correo"></p>
        <p>Contraseña<input type="password" name="Contrasena"></p>
      
    </div>

    <div class ="Boton">
      <input type="submit" class="submit" value="Entrar">
      </form>
      <a href="./RegistroPage.php"><input type="submit" class="submit" value="Registrarse" ></a>
    </div>
  </div>
</body>
</html>
