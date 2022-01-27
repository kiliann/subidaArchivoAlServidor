<?php
require_once "metodos.php";
$metodos = new Metodos();
?><!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Subida de Archivos</title>
    <link type="text/css" rel="stylesheet" href="css/reset.css">
    <link type="text/css" rel="stylesheet" href="css/estilo.css">

</head>
<body>

<nav>
    <a href="index.php">Subir Imágenes</a>
    <a href="verNombreImagenes.php"> Ver nombre de la imagen</a>
    <a href="verImagenes.php">Ver Imágenes</a>
</nav>
<div class="contenido">
    <div>
        <h1>Subir Imagenes</h1><br/>
        <form method="post" enctype="multipart/form-data" action="#">
            <label>Subier Imagenes</label>
            <!-- <input name="nombre" type="text" placeholder="Nombre de la Imagen" required><br/>-->
            <input type="file" name="imagenes"><br/>
            <input type="submit" id="submit" value="Subir">
        </form>


<?php

$metodos->subirImagenes();
?>
    </div>
</div>
</body>
</html>