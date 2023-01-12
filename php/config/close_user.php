<?php

if(isset($_POST['btncerrar'])){

    session_start();
    session_destroy();
    header('location: ../../view/inicio.php');
}

?>