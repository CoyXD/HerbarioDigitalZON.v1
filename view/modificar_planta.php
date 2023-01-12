<?php

include "../model/conexion.php";

    $id=$_GET["id"];

    $sql=$conexion->query(" SELECT * FROM `plants` WHERE ID_planta=$id");


    include("header/header.php");


?>

            <input type="hidden" name="id" value="<?= $_GET["id"]?>" >
                <?php
                

                include "../controller/edit_planta.php";
                while($datos=$sql->fetch_object()){?>
                <form class="col-4 p-3" method="POST" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Nombre comun</label>
                        <input type="text" class="form-control" name="nombre_planta" value="<?= $datos->nombre_comun?>">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Genero de la Planta</label>
                        <input type="text" class="form-control" name="genero" value="<?= $datos->genero?>">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Familia de la Planta</label>
                        <input type="text" class="form-control" name="familia" value="<?= $datos->familia?>">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Especie de la Planta</label>
                        <input type="text" class="form-control" name="especie" value="<?= $datos->especie?>">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Autor de la Planta</label>
                        <input type="text" class="form-control" name="autor_especie" value="<?= $datos->autor_especie?>"> 
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Colector de la Planta</label>
                        <input type="text" class="form-control" name="colector_ejemplar" value="<?= $datos->colector_nombre?>">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Fecha de colecta</label>
                        <input type="date" class="form-control" name="fecha_colecta" value="<?= $datos->fecha_colecta?>">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Fecha de descripcion</label>
                        <input type="date" class="form-control" name="fecha_descripcion" value="<?= $datos->fecha_descripcion?>">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Pais</label>
                        <input type="text" class="form-control" name="pais" value="<?= $datos->pais?>">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Estado</label>
                        <input type="text" class="form-control" name="estado" value="<?= $datos->estado?>">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Municipio</label>
                        <input type="text" class="form-control" name="municipio" value="<?= $datos->municipio?>">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">localizacion de la Planta</label>
                        <input type="text" class="form-control" name="localidad" value="<?= $datos->localidad?>">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Foto de la Planta</label>
                        <input type="file" class="form-control"  name="img_planta" accept="image/*">
                    </div>


                    <button type="submit" class="btn btn-primary" name="btnredit" value="ok">Guardar</button>
                </form>
                <?php }

                ?>
        </form>



        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>