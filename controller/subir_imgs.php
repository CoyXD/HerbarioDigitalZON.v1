<?php

include '../model/conexion.php';



if (isset($_POST['subir'])) {
    
    foreach ($_FILES['imagenes']['tmp_name'] as $key => $value){
        
        if (file_exists($_FILES['imagenes']['tmp_name'][$key])) {

            $revisar = getimagesize($_FILES["imagenes"]["tmp_name"]);

            if (move_uploaded_file($_FILES['imagenes']['tmp_name'][$key], 'imagenes/'.$_FILES['imagenes']['name'][$key])) {
                echo "La imagen se ha suvido";

                $id_planta=$_POST["id_planta"];

                $ruta = addslashes(file_get_contents($_FILES['imagenes']['name'][$key]));

                $sql = $conexion->query("INSERT INTO `img_plants`(`id_img`, `id_planta`, `imgs_plants`) VALUES (NULL,'$id_planta','$ruta')");
            }
        }
    }

}


?>