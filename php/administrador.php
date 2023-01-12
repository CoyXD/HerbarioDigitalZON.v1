<!-- Header - menu -->
<?php  require('../controller/session_header.php'); ?>

<?php  require('../controller/usuariolog.php'); ?>





<!-- Banner -->

<div class="container-cover">
    <div class="container-info-cover">
      <h1>¡Herbario Digital ZON!</h1>
      <p>Decubre un mundo nuevo de plantas en la zona.</p>
   </div>
</div>


<!-------------- Opciones  ------------------->

  <!-- Perfil -->
<div class="container-cards">
  <div class="card">
    <div class="cover__card">
    <a href="user.php"><img src="../resource/img/perfil.png" alt=""></a>
    </div>
    <h2>Perfil</h2>
  </div>

  <!-- Registro -->
  <div class="card">
    <div class="cover__card">
    <a href="registrar_planta.php"><img src="../resource/img/3201052.png" alt=""></a>
    </div>
    <h2>Registrar plantas</h2>

  </div>


  <!-- Administracion de planta -->

  <div class="card">
    <div class="cover__card">
    <a href="gallery.php"><img src="../resource/img/1713277.png" alt=""></a>
    </div>
    <h2>Administracion de plantas</h2>

  </div>

    <!-- Subir Exel -->

    <div class="card">
    <div class="cover__card">
    <a href="subirxmlsx.php"><img src="../resource/img/exel.png" alt=""></a>
    </div>
    <h2>Importar datos de Exel</h2>

  </div>


</div>



<!-- Footer -->
<?php  require('../layout/footer.php'); ?>