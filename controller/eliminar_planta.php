<?php

include("../model/conexion.php");

if (!empty($_GET["id"])) {
    $id=$_GET["id"];
    $sql=$conexion->query("DELETE FROM `plants` WHERE ID_planta=$id ");

    if ($sql==1) {
        echo '<div class="alert alert-success">Registro eliminado satisfactoriamente</div>';
        header("location:../php/registro_list.php");
    } else {
        echo '<div class="alert alert-danger">Error de servidor</div>';
    }
    
}

?>