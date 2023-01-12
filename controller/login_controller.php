<?php


session_start();
if (isset($_SESSION['usuario'])) {
    header("location:administrador.php");
}

if (!empty($_POST["btnlog"])) {
    if (empty($_POST["email"]) and empty($_POST["pass"])) {
        echo "los campos estan vacios";
    } else {
        $email=$_POST["email"];
        $clave=$_POST["pass"];

        $sql = $conexion->query("SELECT * FROM usuarios WHERE correo='$email' and pass='$clave'");
        $nr = mysqli_num_rows($sql);


        if (!isset($_SESSION['usuario'])) {

            if($nr == 1){


                if ($datos=$sql->fetch_object()) {
                    $_SESSION['usuario'] = $email;
                    header("location:administrador.php");
                } else {
                    echo "Acceso denegado";
                }
            }else if($nr == 0){
                echo "usuario no existe";
            }
            
        }
        

    }
    
}

?>