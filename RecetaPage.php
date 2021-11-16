<?php include "layouts/header.php"; ?>
<?php
    require 'Controllers/connect_db.php';
    session_start();
    $id_receta = $_GET['id'];

    $consultar = "SELECT * FROM receta WHERE id_receta='$id_receta'";
    $query = mysqli_query($conexion,$consultar);
    $array = mysqli_fetch_array($query);

    foreach($query as $row){
        $id = $row['id_usuario'];
        $nombre = $row['nombre_receta'];
        $tiempo = $row['tiempo_receta'];
        $dificultad = $row['dificultad_receta'];
        $calificacion =$row['calificacion_receta'];
        $ingredientes = $row['ingredientes_receta'];
        $pasos = $row['pasos_receta'];
    }

    $consultar = "SELECT * FROM comentarios_receta WHERE id_receta='$id_receta'";
    $query = mysqli_query($conexion,$consultar);
    $array = mysqli_fetch_array($query);

    if($_SESSION['id_usuario'] == $id){
        $permiso = "bock";
    }else{
        $permiso = "none";
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="CSS/CSSpagerecet.css">
    <title><?php echo $nombre;?></title>
</head>
    <div class="container">
        <div class="imagen">
            <img src="images/food.png";>
        </div>
        
        <div class="encabezado" >
            <p id="NR"><?php echo $nombre;?></p><br>
            <p id="TR">Tiempo de preparacion: <?php echo $tiempo;?></p>
            <p id="TR">Dificultad: <?php echo $dificultad;?></p>
            <p id="TR">Calificacion: <?php echo $calificacion;?></p>
        </div>

        <div class="editar"style="display:<?php echo $permiso;?>;">
            <a href="EditarReceta.php?id=<?php echo $id_receta?>"><input type="submit" value="Editar"></a>
        </div>
        <div class="eliminar"style="display:<?php echo $permiso;?>;">
            <a href="./Controllers/EliminarReceta.php?id=<?php echo $id_receta?>"><input type="submit" value="Eliminar"></a>
        </div>

        <div class="comentarios">
            <p id="coment">Comentarios</p>
            <?php foreach($query as $row){ ?>
                <div class="perfil"><img src="images/perfil.png">
                    <div class="com"><p><?php echo $row['comentarios_comentario']?></p></div>
                </div>
            <?php } ?>
            <form action="./Controllers/Coment_recet.php" method="post">
            <div class="comentar">
                <input type="text" placeholder="Escribe algo..." name="comentario">
                <input type="text" name="id_receta" value="<?php echo $id_receta?>"style="display:none;">
                <input id="enviar"type="submit" class="submit" value="Enviar">
            </div>
            </form>
            
        </div>

        <div class="linea2"><hr size="800" whith="10" color="black"></div>

        <div class= linea><hr size="10" color="black"></div>

        <div class="ingredientes">
            <p>Ingredientes</p>
            <p id="ingredientesText"><?php echo nl2br($ingredientes);?></p>
        </div>

        <div class="contenido">
            <p>Preparacion</p>
            <p id="contenidoText"><?php echo nl2br($pasos);?></p>
        </div>

    </div>

<body>
    
</body>
</html>