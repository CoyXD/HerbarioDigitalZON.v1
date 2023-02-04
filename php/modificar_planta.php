<?php

include "../model/conexion.php";

    $id=$_GET["id"];

    $sql=$conexion->query(" SELECT * FROM `plants` WHERE ID_planta=$id");

?>

<!-- Añadir header -->
<?php  require('../controller/session_header.php'); ?>

<!-- Verificar inicio de sesion-->
<?php  require('../controller/usuariolog.php'); ?>

            <input type="hidden" name="id" value="<?= $_GET["id"]?>" >
                <?php
                

                include "../controller/edit_planta.php";
                while($datos=$sql->fetch_object()){?>

                    <section class="form-register-plant">
                        <form method="POST" enctype="multipart/form-data">
                        <h2>Actualizar Planta</h2>
                        <br>
                        <label for="nombre_planta" class="form-label">Nombre de la Planta</label>
                        <input type="text" class="form-control" name="nombre_planta" value="<?= $datos->nombre_comun?>"/>

                        <label for="genero" class="form-label">Genero</label>
                        <input type="text" class="form-control" name="genero" value="<?= $datos->genero?>"/>

                        <label for="familia" class="form-label">Familia</label>
                        <input type="text" class="form-control" name="familia" value="<?= $datos->familia?>"/>

                        <label for="especie" class="form-label">Especie</label>
                        <input type="text" class="form-control" name="especie" value="<?= $datos->especie?>"/>

                        <label for="autor_especie" class="form-label">Autor especie</label>
                        <input type="text" class="form-control" name="autor_especie" value="<?= $datos->autor_especie?>"/>

                        <label for="colector_ejemplar" class="form-label">Colector del ejemplar</label>
                        <input type="text" class="form-control" name="colector_ejemplar" value="<?= $datos->colector_nombre?>"/>

                        <label for="fecha_colecta" class="form-label">Fecha colecta</label>
                        <input type="date" class="form-control" name="fecha_colecta" value="<?= $datos->fecha_colecta?>"/>

                        <label for="fecha_descripcion" class="form-label">Fecha descripcion</label>
                        <input type="date" class="form-control" name="fecha_descripcion" value="<?= $datos->fecha_descripcion?>"/>

                        <label for="pais" class="form-label">Pais</label>
                        <input type="text" class="form-control" name="pais" value="<?= $datos->pais?>"/>

                        <label for="estado" class="form-label">Estado</label>
                        <input type="text" class="form-control" name="estado" value="<?= $datos->estado?>"/>

                        <label for="municipio" class="form-label">Municipio</label>
                        <input type="text" class="form-control" name="municipio" value="<?= $datos->municipio?>"/>

                        <label for="localidad" class="form-label">Localidad</label>
                        <input type="text" class="form-control" name="localidad" value="<?= $datos->localidad?>"/>

                        <label for="img_planta" class="form-label">Foto de la Planta</label>
                        <input type="file" class="form-control"  name="img_planta" accept="image/*" />

                        <label  class="form-label">Visivilidad de la localidad de la planta</label>
                        <br>
                        <div class="visibilidad">
                            <label for="green">Visible</label>
                            <input type="radio" id="green"  name="vis"  value="Visible" class="select"/>
                            <label for="red">No Visible</label>
                            <input type="radio" id="red" name="novis"  value="No Visible" class="select"/>
                        </div>


                        <button type="submit" class="btn-primary" name="btnredit" value="ok">Actualizar</button>
                        <button type="submit" class="btn-secondary" name="btncancel" value="ok">Cancelar</button>

                        </form>
                        
                    </section>

                <?php }
                ?>


        <!-- Footer -->
<?php  require('../layout/footer.php'); ?>