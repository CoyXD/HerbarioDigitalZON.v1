
<!-- Verificar inicio de sesion-->
<?php  require('../controller/usuariolog.php'); ?>

<?php

include "../model/conexion.php";

    $id=$_GET["id"];

?>




<form method="POST" action="../controller/up_img.php" enctype="multipart/form-data">
    <input type="text" name="nombre" placeholder="Nombre del archivo"> <br>
    <input type="file" name="imagenes" accept="image/*" multiple>
    <br>
    <input type="text" name="id_planta" value="<?php echo $id?>" hidden>

    <input type="submit" name="subir" value="enviar" >

    
</form>


<div class="galeria">
    <h1>Imagenes subidas:</h1>
    <br>

    <?php
        $sql = $conexion->query("SELECT *FROM img_plants WHERE id_planta=$id");

        foreach ($sql as $value){
        ?>

            <img src="data:image/*;base64, <?php echo base64_encode($value['imgs_plants']); ?>" width="200">

       <?php }
    ?>
</div>
    




</body>
</html>