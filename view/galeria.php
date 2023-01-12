<!-- Añadir header -->
<?php require('../layout/header.php'); ?>

<!-- Efectos de cuadrados moviendose de fondo -->
<div class="container__background-triangle">
    <div class="triangle triangle1"></div>
    <div class="triangle triangle2"></div>
    <div class="triangle triangle3"></div>
</div>


<!-- Tarjeta en bucle para todos los datos ya registrados -->


    <div class="container-cards">
        <?php 

        $por_pagina=20;

        if(isset($_GET['pagina']))
            $pagina=$_GET['pagina'];

        else 
        {
            $pagina=1;
        }


        $empieza=($pagina-1) * $por_pagina;

            include("../model/conexion.php");
            $plantasr = mysqli_query($conexion,"SELECT * FROM plants LIMIT $empieza,$por_pagina");
            while ($row = mysqli_fetch_assoc($plantasr)){
        ?>
        <div class="card">
            <div class="cover__card">
            <a href="planta.php?id=<?php echo $row['id_planta']; ?>"><img src="data:image/*;base64, <?php echo base64_encode($row['img_planta'])?>" alt="" class="imagen"></a>
            </div>
            <h2><?php echo $row['genero'].' '. $row['especie'].' '. $row['familia'] ?></h2>
            <p>Pais: <?php echo $row['pais'] ?></p>
            <p>Estado: <?php echo $row['estado'] ?></p>
            <hr>
            <div class="footer__card">
                <h3 class="user__name">Autor: <?php echo $row['autor_especie'] ?></h3>
                <i><?php echo $row['fecha_colecta'] ?></i>
            </div>
            <a href="planta.php?id=<?php echo $row['id_planta']; ?>">Mas informacion</a>
        </div>
        <?php 
        }
        ?>

<div>
            
            <!--paginacion-->



            <?php 


            $query="SELECT * FROM  plants";
            $resultado=mysqli_query($conexion,$query);


            $total_registros=mysqli_num_rows($resultado);
            $total_paginas=ceil($total_registros/$por_pagina);


            echo"<center><a class='paginas' href='galeria.php?pagina=1'>"  .'Anterior'. "</a>";

            for($i=1;  $i<=$total_paginas;   $i++)

            {

            echo"<a class='paginas' href='galeria.php?pagina=".$i."'> ".$i." </a> ";


            }

            echo"<a class='paginas' href='galeria.php?pagina=$total_paginas'>"  .'Siguiente'. "</a></center>";




            ?>

        </div>


    </div>

<!-- Añadir footer -->

<?php require('../layout/footer.php'); ?>