<?php

session_start();

if(isset($_SESSION['usuario'])){
  $usuarioingresado = $_SESSION['usuario'];
}else{
  header('location: registerlogin.php');
}

?>