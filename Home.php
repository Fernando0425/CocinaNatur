<?php include "layouts/header.php"; ?>
<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="CSS/CSShome.css">
    <title>Inicio</title>
</head>
<body>

    <div class="box">
        <img src="images/inicio.png">
    </div>

    <div class="recetspace">
    <?php include "layouts/recet.php"; ?>
    </div>
</body>
</html>
