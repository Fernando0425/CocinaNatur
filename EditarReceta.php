<?php include "layouts/header.php"; ?>
<?php 
    session_start();
    require 'Controllers/connect_db.php';
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
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="CSS/CSSañadir.css">
    <title>Añadir</title>
</head>
<body>

<div class="container">
    
    <div class="image">
     <form action="./Controllers/EditRecet.php" method="post" >   
        <img src="images/food.png">
        <div class="encabezado">
            <p>Nombre de la receta: </p>
            <p>Tiempo de preparacion: </p>
            <p>Dificultad: </p>
            <p>Categoria: </p>
        </div>
        
        <div class="inp">
            <input type="text" name="nombreReceta" value="<?php echo $nombre ?>"><br>
            <input type="text" name="tiempo" placeholder="0:00" value="<?php echo $tiempo ?>"><br>
            <select name="dificultad">
                <option value="Facil">Facil</option>
                <option value="Intermedio">Intermedio</option>
                <option value="Dificil">Dificil</option>
            </select>
            <select name="categoria">
                <option value="Comida Mexicana">Comida Mexicana</option>
                <option value="Vegetariana">Vegetariana</option>
                <option value="Niños">Niños</option>
                <option value="Postres">Postres</option>
                <option value="Bebidas">Bebidas</option>
                <option value="Desayunos">Desayunos</option>
                <option value="Cenas">Cenas</option>
                <option value="Oriental">Oriental</option>
                <option value="Otros">Otros</option>
            </select>
        </div>
    </div>

    <div class="contenido">
        <p>Ingredientes</p><br>
            <div contenteditable class="fake-textarea" oninput="document.querySelector('#ingredientes').textContent = this.innerText"><?php echo $ingredientes ?></div>
            <textarea id="ingredientes" name="ingredientes" style="display:none;"><?php echo $ingredientes ?></textarea>
        <br><p>Preparacion</p><br>
            <div contenteditable class="fake-textarea" oninput="document.querySelector('#preparacion').textContent = this.innerText"><?php echo $pasos ?></div>
            <textarea id="preparacion" name="preparacion" style="display:none;"><?php echo $pasos ?></textarea>
    </div>
    <div class="boton">
        <input type="submit" value="Guardar" >
    </div>
    <input type="text" name="id_receta" value="<?php echo $id_receta?>"style="display:none;">
    </form>
</div>
    
</body>
</html>