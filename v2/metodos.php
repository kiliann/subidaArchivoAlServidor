<?php




class Metodos{
    //Realizamos un metodo para subir las images
    function subirImagenes()
    {
        //Aqui vemos si exite File(archivo)
        if (isset($_FILES['imagenes'])) {
            //esta es la ruta donde se subiran los archivo, en este caso imagenes.
            $dir_subida = "imagenes/";
            //aqui juntaos la ruta con el nombre del fichero
            $fichero_subido = $dir_subida . $_FILES['imagenes']['name'];
            //con esta funcion subimos el fichero al servidor, controlando que no de falla y comunicarlo al cliente.
            if (move_uploaded_file($_FILES['imagenes']['tmp_name'], $fichero_subido)) {
                echo " El fichero se subio correctamente";
            } else {
                echo "<p>Error al subir el fichero</p>";
            }
        }
    }

    function leerFicheros($ruta){
        $fichero1= opendir($ruta);
        echo "<ul>";
        while(($archivos = readdir($fichero1)) ) {
            echo "<li>".$archivos."</li>";
            //echo "<img src=imagenes/$archivos>";

        }
        echo "</ul>";
        closedir($fichero1);
    }
    function mostrarImagenes($ruta){
        $fichero1= opendir($ruta);

        while(($archivos = readdir($fichero1)) ) {

            echo "<img src=imagenes/$archivos>";

        }

        closedir($fichero1);
    }


    function subidaControladaImagenes()
    {
        if (isset($_FILES['imagenes'])) {
            $archivo = $_FILES['imagenes']['name'];
            //Si el archivo contiene algo y es diferente de vacio
            if (isset($archivo) && $archivo != "") {
                //Obtenemos algunos datos necesarios sobre el archivo
                $tipo = $_FILES['imagenes']['type'];
                $tamano = $_FILES['imagenes']['size'];
                $temp = $_FILES['imagenes']['tmp_name'];
                //Se comprueba si el archivo a cargar es correcto observando su extensión y tamaño
                if (!((strpos($tipo, "gif") || strpos($tipo, "jpeg") || strpos($tipo, "jpg") || strpos($tipo, "png")) && ($tamano < 2000000))) {
                    echo '<div><b>Error. La extensión o el tamaño de los archivos no es correcta.<br/>
        - Se permiten archivos .gif, .jpg, .png. y de 200 kb como máximo.</b></div>';
                } else {
                    //Si la imagen es correcta en tamaño y tipo
                    //Se intenta subir al servidor
                    if (move_uploaded_file($temp, 'imagenes/' . $archivo)) {
                        //Cambiamos los permisos del archivo a 777 para poder modificarlo posteriormente
                        //chmod('images/'.$archivo, 0777);
                        //Mostramos el mensaje de que se ha subido co éxito
                        echo '<div><b>Se ha subido correctamente la imagen.</b></div>';
                        //Mostramos la imagen subida
                        echo '<p><img src="imagenes/' . $archivo . '"></p>';
                    } else {
                        //Si no se ha podido subir la imagen, mostramos un mensaje de error
                        echo '<div><b>Ocurrió algún error al subir el fichero. No pudo guardarse.</b></div>';
                    }
                }
            }
        }
    }



}