<?php

include "../model/conexion.php";

    $id=$_GET["id"];

?>
<!-- Header  -->
<?php require('../layout/header.php'); ?>


<input type="hidden" name="id" value="<?= $_GET["id"]?>" >


<!-- Cuerpo  -->
<?php
$sql = mysqli_query($conexion,"SELECT * FROM `plants` WHERE ID_planta=$id");
while ($row = $sql->fetch_object()){?>
<div class="container-plant">
    <article class="articulo-planta">
        <div class="container-img-planta">
            <a href="../view/img_full.php?id=<?php echo ($row->id_planta); ?>"><img src="data:image/*;base64, <?php echo base64_encode($row->img_planta)?>" alt="" /></a>
            
        </div>
        <div class="container-info-planta">
            <h1>Informacion de la planta</h1>
            <hr>
            <h2>Nombre: <?= $row->nombre_comun?></h2>
            <h2>Genero: <?= $row->genero?></h2>
            <h2>Familia: <?= $row->familia?></h2>
            <h2>Especie: <?= $row->especie?></h2>
            <h2>Autor: <?= $row->autor_especie?></h2>
            <h2>Colector del ejemplar: <?= $row->colector_nombre?></h2>
            <h2>Fecha de colecta: <?= $row->fecha_colecta?></h2>
            <h2>Fecha de descripcion: <?= $row->fecha_descripcion?> </h2>
            <h2>Pais: <?= $row->pais?></h2>
            <h2>Estado: <?= $row->estado?></h2>
            <h2>Municipio: <?= $row->municipio?></h2>
            <h2>Localidad: <?= $row->localidad_public?></h2>
        </div>

    <div class="galeria">
        <h1>Fotos del ejemplar:</h1>
        <br>


                <?php
                    $sql = $conexion->query("SELECT * FROM img_plants WHERE id_planta=$id");
                    foreach ($sql as $value){
 
                    ?>

                    
                <a href="tumb_img.php?id=<?php echo ($row->id_img); ?>"><img  src="data:image/*;base64, <?php echo base64_encode($value['imgs_plants']); ?>" class="img-thumbnail" alt="..."></a>

        <?php } ?>
        


    </div>

    <button onclick="window.history.back();">Volver atrás</button>
    

    </article>


</div>


<?php } ?>



<!-- Footer -->
<?php require('../layout/footer.php'); ?>

