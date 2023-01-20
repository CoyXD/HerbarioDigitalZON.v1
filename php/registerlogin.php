<!-- Header  -->
<?php require('../layout/header.php'); ?>



<div class="container__log">

    <!-- Form -->
    <div class="login_box">
        
        <?php
        include("../model/conexion.php");
        include("../controller/login_controller.php");

        ?>
        <img class="logo_log" src="../resource/img/ic_launcher_round.png" alt="" hidden>
        <h1>Iniciar sesion</h1>
        <form method="POST">
        <!-- usuario -->
        <label for="email">Correo</label>
        <input type="email" placeholder="Email" name="email" required>

            <!-- contraseña -->
            <label for="pass">Contraseña</label>
        <input type="password" placeholder="Contraseña" name="pass" required>

        <input type="submit" value="Log in" name="btnlog">

        <a href="../view/contacto.php">No recuerdo mi contraseña</a>
        </form>
    </div>
</div>




<!-- Footer -->
<?php require('../layout/footer.php'); ?>
