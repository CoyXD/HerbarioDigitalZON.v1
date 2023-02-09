<!-- Añadir header -->
<?php require('../layout/header.php'); ?>
<!-- Barra de busqueda -->
<div class="search_bar">
    <div class="col-12">
        <div class="container__busqueda">

            <!-- <label class="form-label">Palabra a buscar</label> -->
            <input type="text" class="form-control" id="buscar" name="buscar" hidden>

            <label class="form-label">Busqueda instantanea de ejemplar</label>
            <input onkeyup="buscar_ahora($('#buscar_1').val());" type="text" class="form-control" id="buscar_1" name="buscar_1">

        </div>
        <button  class="btn btn-success" onclick="buscar_ahora($('#buscar').val());">Refrescar</button>
        <a href="galeria.php"><button class="btn btn-success">Ver ejemplares por página</button></a>
    </div>
</div>
<!-- Resultados de busqueda -->
<div class="container-cards">
    <div id="datos_buscador" class="container-cards"></div>
</div>

<!-- script de busqueda -->
<script type="text/javascript">
        function buscar_ahora(buscar) {
        var parametros = {"buscar":buscar};
        $.ajax({
        data:parametros,
        type: 'POST',
        url: 'buscador.php',
        success: function(data) {
        document.getElementById("datos_buscador").innerHTML = data;
        }
        });
        }
     //   buscar_ahora();
</script>

<!-- Añadir footer -->
<?php require('../layout/footer.php'); ?>