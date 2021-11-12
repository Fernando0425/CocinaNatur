<?php require 'Controllers/consult_recet.php';?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="CSS/CSSrecet.css">
</head>
<body>
        <?php foreach($query as $row){ ?>
        <a href="RecetaPage.php?id=<?php echo $row['id_receta'] ?>"><div class="recet">
            <img src="images/food.png">
            <p><?php echo $row['nombre_receta']; ?></p>
        </div></a>
        <?php } ?>
</body>
</html>