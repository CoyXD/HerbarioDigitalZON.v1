<?php

include "../model/conexion.php";

$id=$_GET["id"];

$plantasr = mysqli_query($conexion,"SELECT * FROM plants WHERE ID_planta=$id");
            while ($row = mysqli_fetch_assoc($plantasr)){
?>
<img src="data:image/*;base64, <?php echo base64_encode($row['img_planta'])?>" alt="" class="imagen">


<?php } ?>