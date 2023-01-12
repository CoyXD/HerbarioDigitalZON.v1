<?php

session_start();

$session_i = $_SESSION['usuario'];

if ($session_i = null || $session_i = "") {
    include("../layout/header.php");
}else{
    include("../layout/header_adm.php");
}

?>
