<?php 

include("../model/conexion.php");


$por_pagina=20;

if(isset($_GET['pagina']))
    $pagina=$_GET['pagina'];

else 
{
    $pagina=1;
}


$empieza=($pagina-1) * $por_pagina;

$buscardor = mysqli_query($conexion, "SELECT * FROM plants WHERE nombre_comun  LIKE LOWER('%".$_POST["buscar"]."%') OR especie LIKE LOWER ('%".$_POST["buscar"]."%') LIMIT $empieza,$por_pagina" ); 
$numero = mysqli_num_rows($buscardor); ?>


<h5>Resultados encontrados (<?php echo $numero; ?>):</h5>
<div class="container-cards">

    <?php while($resultado = mysqli_fetch_assoc($buscardor)){ ?>


        <div class="card">
            <div class="cover__card">
                <a href="planta.php?id=<?php echo $resultado['id_planta']; ?>"><img src="data:image/*;base64, <?php echo base64_encode($resultado['img_planta'])?>" alt="" class="imagen"></a>
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
            <p><a href="planta.php?id=<?php echo $resultado['id_planta']; ?>">Mas informacion</a></p>
        </div>
</div>
<?php } ?>

<div>
            
            <!--paginacion-->



            <?php 


            $query="SELECT * FROM  plants WHERE nombre_comun  LIKE LOWER('%".$_POST["buscar"]."%') OR especie LIKE LOWER ('%".$_POST["buscar"]."%')";
            $resultado=mysqli_query($conexion,$query);


            $total_registros=mysqli_num_rows($resultado);
            $total_paginas=ceil($total_registros/$por_pagina);


            echo"<center><a class='paginas' href='especimenes.php?pagina=1'>"  .'Primera'. "</a>";

            for($i=1;  $i<=$total_paginas;   $i++)

            {

            echo"<a class='paginas' href='especimenes.php?pagina=".$i."'> ".$i." </a> ";


            }

            echo"<a class='paginas' href='especimenes.php?pagina=$total_paginas'>"  .'Ultima'. "</a></center>";




            ?>

        </div>