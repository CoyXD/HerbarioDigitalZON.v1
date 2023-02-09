<?php 

include("../model/conexion.php");



$buscardor = mysqli_query($conexion, "SELECT * FROM plants WHERE nombre_comun  LIKE LOWER('%".$_POST["buscar"]."%') OR especie LIKE LOWER ('%".$_POST["buscar"]."%')" ); 
$numero = mysqli_num_rows($buscardor); ?>

    <?php while($resultado = mysqli_fetch_assoc($buscardor)){ ?>
        <div class="cardd">
            <div class="cover__card">
                <a href="plant.php?id=<?php echo $resultado['id_planta']; ?>"><img src="data:image/*;base64, <?php echo base64_encode($resultado['img_planta'])?>" alt="" class="imagen"></a>
            </div>
            <h2><?php echo $resultado['genero'].' '. $resultado['especie'].' '. $resultado['familia'] ?></h2>
            <p>País: <?php echo $resultado['pais'] ?></p>
            <p>Estado: <?php echo $resultado['estado'] ?></p>
            <p>Municipio: <?php echo $resultado['municipio'] ?></p>
            <hr>
            <div class="footer__card">
                <h3 class="user__name">Autor: <?php echo $resultado['autor_especie'] ?></h3>
                <i><?php echo $resultado['fecha_colecta'] ?></i>
            </div>
            <p><a href="planta.php?id=<?php echo $resultado['id_planta']; ?>">Mas información</a></p>
        </div>
<?php } ?>
