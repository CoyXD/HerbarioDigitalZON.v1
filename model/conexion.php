<?php

$Chost = "localhost";
$Cuser = "root";
$Cpass = "";
$Cdb = "herbariodigitalitsz";

$conexion = new mysqli($Chost, $Cuser, $Cpass, $Cdb);

if ($conexion->connect_errno) {
    die("Ha ocurrido un error");
}



?>