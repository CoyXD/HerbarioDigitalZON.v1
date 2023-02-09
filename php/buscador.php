<?php 

include("../model/conexion.php");



$buscardor = mysqli_query($conexion, "SELECT * FROM plants WHERE nombre_comun  LIKE LOWER('%".$_POST["buscar"]."%') OR especie LIKE LOWER ('%".$_POST["buscar"]."%')" ); 
$numero = mysqli_num_rows($buscardor); ?>

<div class="result">
    <h5>Resultados  encontrados (<?php echo $numero; ?>):</h5>
</div>


    <?php while($resultado = mysqli_fetch_assoc($buscardor)){ ?>
        <div class="cardd">
            <div class="cover__card">
                <a href="plant.php?id=<?php echo $resultado['id_planta']; ?>"><img src="data:image/*;base64, <?php echo base64_encode($resultado['img_planta'])?>" alt="" class="imagen"></a>
            </div>
            <h2><?php echo $resultado['genero'].' '. $resultado['especie'].' '. $resultado['familia'] ?></h2>
            <p>Pais: <?php echo $resultado['pais'] ?></p>
            <p>Estado: <?php echo $resultado['estado'] ?></p>
            <p>Municipio: <?php echo $resultado['municipio'] ?></p>
            <hr>
            <div class="footer__card">
                <h3 class="user__name">Autor: <?php echo $resultado['autor_especie'] ?></h3>
                <i><?php echo $resultado['fecha_colecta'] ?></i>
            </div>
                <p><a href="plant.php?id=<?php echo $resultado['id_planta']; ?>">Mas informacion</a></p>
                <div>
                    <a href="modificar_planta.php?id='<?php echo $row['id_planta']; ?>'" class="btn btn-small btn-warning"><i class="fa-solid fa-pen"></i></a>
                    <a href="../controller/eliminar_planta.php?id='<?php echo $row['id_planta']; ?>'" class="btn btn-small btn-danger"><i class="fa-solid fa-trash"></i></a>
                    <a href="upload_imgs.php?id=<?php echo $row['id_planta']; ?>" class="btn btn-small btn-dark"><i class="fa-solid fa-image"></i></a>
                </div>
            </div>

<?php } ?>
