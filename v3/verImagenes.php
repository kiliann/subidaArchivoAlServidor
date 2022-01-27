
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
    <a href="subirPdf.php">Subir PDF</a>
</nav>

<div class="contenido">
    <?php
    $metodos->leerFicheros("imagenes");
    ?>
</div>

</body>
</html>