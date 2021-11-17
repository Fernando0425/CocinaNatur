<?php include "layouts/header.php"; ?>
<?php
    require 'Controllers/connect_db.php';
    session_start();
    $categoria = $_GET['cate'];

    $consultar = "SELECT * FROM receta WHERE tipo_receta = '$categoria'";
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
    <title>Categoria</title>
</head>
<body class="body">
    <div class="resetspace">

        <div>
            <p id="titulo"><?php echo $categoria ?></p>
        </div>

        <?php foreach($query as $row){ ?>
            <a href="RecetaPage.php?id=<?php echo $row['id_receta'] ?>"><div class="recet">
                <img src="images/food.png">
                <p><?php echo $row['nombre_receta']; ?></p>
            </div></a>
        <?php } ?>
    </div>
    
</body>
</html>