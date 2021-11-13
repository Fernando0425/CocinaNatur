<?php include "layouts/header.php"; ?>
<?php
    require 'Controllers/connect_db.php';
    session_start();

    $consultar = "SELECT * FROM receta WHERE id_usuario='$_SESSION[id_usuario]'";
    $query = mysqli_query($conexion,$consultar);
    $array = mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="CSS/CSSrecet.css">
    <title>Mis Receta</title>
</head>
<body>

    <div class="resetspace">
        <a href="AñadirReceta.php"><div class="recet">
                <img src="images/Añadir.png">
                <p>Añadir Receta</p>
            </div></a>

        <?php foreach($query as $row){ ?>
            <a href="RecetaPage.php?id=<?php echo $row['id_receta'] ?>"><div class="recet">
                <img src="images/food.png">
                <p><?php echo $row['nombre_receta']; ?></p>
            </div></a>
        <?php } ?>
    </div>

</body>
</html>