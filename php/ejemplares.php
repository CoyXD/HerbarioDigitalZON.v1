<!-- Añadir header -->
<?php  require('../controller/session_header.php'); ?>

<!-- Verificar inicio de sesion-->
<?php  require('../controller/usuariolog.php'); ?>


<div class="search_bar">

<label class="form-label">Palabra a buscar instantaneo</label>
            <input onkeyup="buscar_ahora($('#buscar_1').val());" type="text" class="form-control" id="buscar_1" name="buscar_1">

</div>

<!-- Tarjeta en bucle para todos los datos ya registrados -->
<div class="container-cards">
        <?php 
            include("../model/conexion.php");

            $plantasr = mysqli_query($conexion,"SELECT * FROM plants");
            while ($row = mysqli_fetch_assoc($plantasr)){
        ?>
            <div class="cardd">
                <div class="cover__card">
                    <a href="plant.php?id=<?php echo $row['id_planta']; ?>"><img src="data:image/*;base64, <?php echo base64_encode($row['img_planta'])?>" alt="" class="imagen"></a>
                </div>
                <h2><?php echo $row['genero'].' '. $row['especie'].' '. $row['familia'] ?></h2>
                <p>Pais: <?php echo $row['pais'] ?></p>
                <p>Estado: <?php echo $row['estado'] ?></p>
                <p>Municipio: <?php echo $row['municipio'] ?></p>
                <p>Localidad: <?php echo $row['localidad'] ?></p>
                <hr>
                <div class="footer__card">
                    <h3 class="user__name">Autor: <?php echo $row['autor_especie'] ?></h3>
                    <i><?php echo $row['fecha_colecta'] ?></i>
                </div>
                <a href="plant.php?id=<?php echo $row['id_planta']; ?>">Mas informacion</a>
                <div>
                <a href="modificar_planta.php?id='<?php echo $row['id_planta']; ?>'" class="btn btn-small btn-warning"><i class="fa-solid fa-pen"></i></a>
                <a href="../controller/eliminar_planta.php?id='<?php echo $row['id_planta']; ?>'" class="btn btn-small btn-danger"><i class="fa-solid fa-trash"></i></a>
                <a href="upload_imgs.php?id=<?php echo $row['id_planta']; ?>" class="btn btn-small btn-dark"><i class="fa-solid fa-image"></i></a>

                </div>
            </div>


        <?php 
        }
        ?>


    </div>
















<!-- Añadir footer -->
<?php require('../layout/footer.php'); ?>