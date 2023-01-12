<?php 

include "../model/conexion.php";

$revisar = getimagesize($_FILES["imagenes"]["tmp_name"]);

if ($revisar !== false) {

    $imgContenido = addslashes(file_get_contents($_FILES["imagenes"]["tmp_name"]));
    $id_planta=$_POST["id_planta"];

    $sql=$conexion->query("INSERT INTO `img_plants`(`id_img`, `id_planta`, `imgs_plants`) VALUES (NULL,'$id_planta','$imgContenido')");

    if($sql==1){
        echo '<div class="alert alert-success">Registro de planta exitoso</div>';
        header("location:../php/gallery.php");
    }else{
        echo '<div class="alert alert-danger">Error en la carga de datos</div>';
    }

} else {
    echo '<div class="alert alert-warning">Error de imagen</div>';
    } 


?>