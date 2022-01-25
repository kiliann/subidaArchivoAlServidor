<?php




class Metodos{

    function subirImagenes()
    {
        if (isset($_FILES['imagenes'])) {
            $dir_subida = "imagenes/";
            $fichero_subido = $dir_subida . $_FILES['imagenes']['name'];
            if (move_uploaded_file($_FILES['imagenes']['tmp_name'], $fichero_subido)) {
                echo " El fichero se subio correctamente";
            } else {
                echo "<p>Error al subir el fichero</p>";
            }
        }
    }
}