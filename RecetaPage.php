<?php include "layouts/header.php"; ?>
<?php
    require 'Controllers/connect_db.php';
    $id = $_GET['id'];

    $consultar = "SELECT * FROM receta WHERE id_receta='$id'";
    $query = mysqli_query($conexion,$consultar);
    $array = mysqli_fetch_array($query);

    foreach($query as $row){
        $nombre = $row['nombre_receta'];
        $tiempo = $row['tiempo_receta'];
        $dificultad = $row['dificultad_receta'];
        $calificacion =$row['calificacion_receta'];
        $ingredientes = $row['ingredientes_receta'];
        $pasos = $row['pasos_receta'];
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="CSS/CSSpagerecet.css">
    <title>Receta Ejemplo</title>
</head>
    <div class="container">
        <div class="imagen">
            <img src="images/food.png";>
        </div>
        
        <div class="encabezado">
            <p id="NR"><?php echo $nombre;?></p><br>
            <p id="TR">Tiempo de preparacion: <?php echo $tiempo;?></p>
            <p id="TR">Dificultad: <?php echo $dificultad;?></p>
            <p id="TR">Calificacion: <?php echo $calificacion;?></p>
        </div>

        <div class="comentarios">
            <p>Comentarios</p>
            <div class="perfil"><img src="images/perfil.png">
                <div class="com"><p>Excelente receta bro</p></div>
            </div>
            <div class="comentar">
                <input type="text" placeholder="Escribe algo...">
                <input id="enviar"type="submit" class="submit" value="Enviar">
            </div>
            
        </div>

        <div class="linea2"><hr size="800" whith="10" color="black"></div>

        <div class= linea><hr size="10" color="black"></div>

        <div class="ingredientes">
            <p>Ingredientes</p>
            <p id="ingredientesText"><?php echo $ingredientes;?></p>
        </div>

        <div class="contenido">
            <p>Preparacion</p>
            <p id="contenidoText"><?php echo $pasos;?></p>
        </div>

    </div>

<body>
    
</body>
</html>