<?php


session_start();
if (isset($_SESSION['usuario'])) {
    header("location:administrador.php");
}

if (!empty($_POST["btnlog"])) {
    if (empty($_POST["email"])){
        echo '<div class="alert alert-warning" role="alert">Correo vacío!</div>';

    }else {
        if (empty($_POST["pass"])) {
            echo '<div class="alert alert-warning" role="alert">contraseña vacía!</div>';
        } else {

        
        $email=$_POST["email"];
        $clave=$_POST["pass"];

        $sql = $conexion->query("SELECT * FROM usuarios WHERE correo='$email' and pass='$clave'");
        $nr = mysqli_num_rows($sql);


        if (!isset($_SESSION['usuario'])) {

            if($nr == 1){


                if ($datos=$sql->fetch_object()) {

                    
                    $_SESSION['usuario'] = $email;
                    header("location:../php/administrador.php");
                } else {
                    echo "Acceso denegado";
                }
            }else if($nr == 0){
                echo '<div class="alert alert-danger" role="alert">El usuario no existe!</div>';
            }
            
        }
        

    }
    
}
}

?>