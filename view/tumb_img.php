<?php

include "../model/conexion.php";

$id=$_GET["id"];

$sql = $conexion->query("SELECT * FROM img_plants WHERE id_img=$id");
            while ($row = mysqli_fetch_assoc($sql)){
?>
<img src="data:image/*;base64, <?php echo base64_encode($row['imgs_plants'])?>" alt="" class="imagen">


<?php } ?>