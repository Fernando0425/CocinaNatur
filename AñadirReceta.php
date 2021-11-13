<?php include "layouts/header.php"; ?>
<?php session_start();?>
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
     <form action="./Controllers/AddRecet.php" method="post" >   
        <img src="images/food.png">
        <div class="encabezado">
            <p>Nombre de la receta: </p>
            <p>Tiempo de preparacion: </p>
            <p>Dificultad: </p>
        </div>
    
        <div class="inp">
            <input type="text" name="nombreReceta"><br>
            <input type="text" name="tiempo" placeholder="0:00"><br>
            <select name="dificultad">
                <option value="Facil">Facil</option>
                <option value="Intermedio">Intermedio</option>
                <option value="Dificil">Dificil</option>
            </select>
        </div>
    </div>


    <div class="contenido">
        <p>Ingredientes</p><br>
            <div contenteditable class="fake-textarea" oninput="document.querySelector('#ingredientes').textContent = this.innerText"></div>
            <textarea id="ingredientes" name="ingredientes" style="display:none;"></textarea>
        <br><p>Preparacion</p><br>
            <div contenteditable class="fake-textarea" oninput="document.querySelector('#preparacion').textContent = this.innerText"></div>
            <textarea id="preparacion" name="preparacion" style="display:none;"></textarea>
    </div>
    <div class="boton">
        <input type="submit" value="Guardar">
    </div>
    </form>
</div>
    
</body>
</html>