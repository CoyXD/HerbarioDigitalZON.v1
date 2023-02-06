<!-- Header  -->
<?php require('../layout/header.php'); ?>


<div class="backgroun_log">

    

</div>

<div class="container_log" >


        <div class="wrapper">

        <?php
        include("../model/conexion.php");
        include("../controller/login_controller.php");
        ?>

                <div class="logo">
                    <img src="../resource/img/ic_launcher_round.png" alt="">
                </div>
                <div class="text-center mt-4 name">
                    Iniciar sesión
                </div>
                <form class="p-3 mt-3" method="POST">
                    <div class="form-field d-flex align-items-center">
                        <span class="far fa-user"></span>
                        <input type="email" name="email" id="userName" placeholder="Correo" >
                    </div>
                    <div class="form-field d-flex align-items-center">
                        <span class="fas fa-key"></span>
                        <input type="password" name="pass" id="pwd" placeholder="Contraseña" >
                    </div>
                    <button class="btn mt-3" type="submit" value="Log in" name="btnlog">Login</button>
                </form>
                <div class="text-center fs-6">
                    <a href="contacto.php">¿Olvidaste la contraseña?</a>
                </div>
        </div>
    </div>





<!-- Footer -->
<?php require('../layout/footer.php'); ?>