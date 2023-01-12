<?php
if (!empty($_POST["btnredit"])) {
    if (!empty($_POST["nombre_planta"]) and
        !empty($_POST["genero"]) and
        !empty($_POST["familia"]) and
        !empty($_POST["especie"]) and
        !empty($_POST["autor_especie"]) and
        !empty($_POST["colector_ejemplar"]) and
        !empty($_POST["fecha_colecta"]) and
        !empty($_POST["fecha_descripcion"]) and
        !empty($_POST["pais"]) and
        !empty($_POST["estado"]) and
        !empty($_POST["municipio"]) and
        !empty($_POST["localidad"])){
           
        $revisar = getimagesize($_FILES["img_planta"]["tmp_name"]);

            

            if ($revisar !== false) {

                $imgContenido = addslashes(file_get_contents($_FILES["img_planta"]["tmp_name"]));
                $nombre_planta=$_POST["nombre_planta"];
                $genero=$_POST["genero"];
                $familia=$_POST["familia"];
                $especie=$_POST["especie"];
                $autor_especie=$_POST["autor_especie"];
                $colector_ejemplar=$_POST["colector_ejemplar"];
                $fecha_colecta=$_POST["fecha_colecta"];
                $fecha_descripcion=$_POST["fecha_descripcion"];
                $pais=$_POST["pais"];
                $estado=$_POST["estado"];
                $municipio=$_POST["municipio"];
                $localidad=$_POST["localidad"];
    
                $sql=$conexion->query(" UPDATE `plants` SET `nombre_comun`='$nombre_planta',`genero`='$genero',`familia`='$familia',`especie`='$especie',`autor_especie`='$autor_especie',`colector_nombre`='$colector_ejemplar',`fecha_colecta`='$fecha_colecta',`fecha_descripcion`='$fecha_descripcion',`pais`='$pais',`estado`='$estado',`municipio`='$municipio',`localidad`='$localidad',`img_planta`='$imgContenido' WHERE ID_planta=$id ");
                if($sql==1){
                    echo '<div class="alert alert-success">Datos de planta actualizados</div>';
                    header("location:../php/registro_list.php");
                }else{
                    echo '<div class="alert alert-danger">Error en la carga de datos</div>';
                }

            } else {
                echo '<div class="alert alert-danger">Error en la actualizacion de datos</div>';
            }
    } else {
        echo '<div class="alert alert-warning">Alguno de los campos esta vacio</div>';
    }
    
}



?>