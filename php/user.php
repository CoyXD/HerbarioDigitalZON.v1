<!-- Header  -->
<?php  require('../controller/session_header.php'); ?>

<?php

session_start();

if(isset($_SESSION['usuario'])){
  $usuarioingresado = $_SESSION['usuario'];
  
}else{
  header('location: registerlogin.php');
}

?>

<div class="container__perfil">
  
  <div class="info_perfil">
    <?php echo "Correo:".$usuarioingresado; ?>
    <form method="POST" action="config/close_user.php">

        <input type="submit" value="Cerrar sesión" name="btncerrar" />

    </form>
  </div>
</div>





<!-- Añadir footer -->
<?php require('../layout/footer.php'); ?>