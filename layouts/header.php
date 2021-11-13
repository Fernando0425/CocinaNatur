<!DOCTYPE html>
<html lang="en">
<head>
    <title>Cocina Natur</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="CSS/CSSmenu.css">
</head>
<body>
<header class="header">
      <nav class="nav">
        <a href="Home.php" class="logo nav-link"><img src="images/Logo_negro.png" width="250" height="70"></a>
        <button class="nav-toggle" aria-label="Abrir menú">
          <i class="fas fa-bars"></i>
        </button>
        <ul class="nav-menu">
          <li class="nav-menu-item">
            <a href="Home.php" class="nav-menu-link nav-link">Inicio</a>
          </li>
          <li class="nav-menu-item">
            <a href="#" class="nav-menu-link nav-link">Menu</a>
          </li>
          <li class="nav-menu-item">
            <input type="text" name="Buscar" placeholder="Buscar">
          </li>
          <li class="nav-menu-item">
            <a href="#" class="logo nav-link"><img src="images/perfil.png"></a>
              <ul class="submenu">
						    <li><a href="#">Mi perfil</a></li>
						    <li><a href="MisRecetas.php">Mis recetas</a></li>
                <li><a href="#">Comentarios</a></li>
                <li><a href="./Controllers/desconectar.php">Cerrar Sesión</a></li>
					    </ul>
              <i class="fas fa-bars"></i>
            </button>
          </li>
        </ul>
      </nav>
    </header>
</body>
</html>