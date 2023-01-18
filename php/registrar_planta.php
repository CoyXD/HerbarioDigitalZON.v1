<!-- Header - menu -->
<?php  require('../controller/session_header.php'); ?>

<?php  require('modal/subir_modal.php'); ?>

<section class="form-register-plant">
    <form method="POST" enctype="multipart/form-data" action="../controller/registro_planta.php">
    <h2>Registro de plantas</h2>
    <br>
    <label for="nombre_planta" class="form-label">Nombre de la Planta</label>
    <input type="text" class="form-control" name="nombre_planta"/>

    <label for="genero" class="form-label">Genero</label>
    <input type="text" class="form-control" name="genero"/>

    <label for="familia" class="form-label">Familia</label>
    <input type="text" class="form-control" name="familia"/>

    <label for="especie" class="form-label">Especie</label>
    <input type="text" class="form-control" name="especie"/>

    <label for="autor_especie" class="form-label">Autor especie</label>
    <input type="text" class="form-control" name="autor_especie"/>

    <label for="colector_ejemplar" class="form-label">Colector del ejemplar</label>
    <input type="text" class="form-control" name="colector_ejemplar"/>

    <label for="fecha_colecta" class="form-label">Fecha colecta</label>
    <input type="date" class="form-control" name="fecha_colecta"/>

    <label for="fecha_descripcion" class="form-label">Fecha descripcion</label>
    <input type="date" class="form-control" name="fecha_descripcion"/>

    <label for="pais" class="form-label">Pais</label>
    <input type="text" class="form-control" name="pais"/>

    <label for="estado" class="form-label">Estado</label>
    <input type="text" class="form-control" name="estado"/>

    <label for="municipio" class="form-label">Municipio</label>
    <input type="text" class="form-control" name="municipio"/>

    <label for="localidad" class="form-label">Localidad</label>
    <input type="text" class="form-control" name="localidad"/>

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


    <button type="submit" class="btn-primary" name="btnregistrar" value="ok" data-toggle="modal" data-target="#exampleModal">Registrar</button>
    <button type="submit" class="btn-secondary" name="btncancel" value="ok">Cancelar</button>

    </form>
    
</section>


<!-- Footer -->
<?php  require('../layout/footer.php'); ?>