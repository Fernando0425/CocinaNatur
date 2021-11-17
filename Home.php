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

    <div class="container">
        <div class="quien">
            <p id="titulo">¿Quiénes Somos?</p>
            <p>Cocina Natur es una aplicación donde podrás encontrar una gran variedad de recetas, además de compartir las tuyas con el resto de la comunidad.</p>
        </div>

        <div class="objetivo-container">
            <div class="objetivo">
                <p class="titulos">Objetivo</p>
                <p class="texto">Nuestro propósito es crear una comunidad la cual consultar recetas y compartir nuevas con el resto de la comunidad Cocina Natur.</p>
            </div>
        </div>

        <div class="MV-container">
            <div class="mision">
                <p class="titulos">Mision</p>
                <p class="texto">Aplicación de formación gastronómica que busca dinamizar la experiencia diaria en la cocina, con un enfoque de fácil empleo fomentando un cambio positivo en la alimentación de nuestra comunidad fomentando la preparación de alimentos y bebidas para con esto lograr disminuir la compra de platillos nocivos para la salud.</p>
            </div>
            <div class="vision">
                <p class="titulos">Visión</p>
                <p class="texto">Llegar a un mayor numero de personas y proporcionar múltiples herramientas prácticas mediante la combinación de ingredientes con alto valor nutricional, transformando los tiempos de comida en hábitos y estilos de vida saludables.</p>
            </div>
        </div><br><br>
    </div>
    <br><br>
    <div class="recetspace">
    <div class="menu"><p>¡Echa un vistazo!<p></div>
        <?php include "layouts/recet.php"; ?>
    </div><br><br>

    <footer>
        <div class="abajo">
            <div class="contactos">
                <div class="text"><p>Contáctanos</p></div><br>
                <div contenteditable class="fake-textarea"></div>
                <input type="submit" value="Enviar">
            </div>
            <div class="redes">
                <div class="text"><p>Redes sociales</p></div><br>
                <img src="images/redes.png">
            </div>
        </div>
        <p id="foot">Cocina Natur 2021 © Todos los derechos reservados.</p>
        <p id="foot">Políticas de Privacidad           Términos de Referencia</p>
    </footer> 
</body>
</html>
