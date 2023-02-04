<!-- Añadir header -->
<?php require('../layout/header.php'); ?>

<?php include("../model/conexion.php"); ?>

<div class="container__gallery">
    <div class="col-12">

        <div class="container__busqueda">

            <!-- <label class="form-label">Palabra a buscar</label> -->
            <input type="text" class="form-control" id="buscar" name="buscar" hidden>

            <label class="form-label">Palabra a buscar instantaneo</label>
            <input onkeyup="buscar_ahora($('#buscar_1').val());" type="text" class="form-control" id="buscar_1" name="buscar_1">

        </div>
        <button  class="btn btn-success" onclick="buscar_ahora($('#buscar').val());">Buscar</button>

        
            <div>
                <div id="datos_buscador" class="container-cards"></div>
            </div>
        
    </div>
</div>





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