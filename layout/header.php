<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0,
    minimum-scale=1.0">

    <!-- TITULO DE LA WEB -->
    <title>Herbario Digital ZON</title>

    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">

    <!-- GOOGLE FONTs -->
    <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">

    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

    <!-- ANIMATE CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">

    <!-- HOJAS DE ESTILO CSS -->
    <link rel="stylesheet" href="resource/css/styles.css">
    <link rel="stylesheet" href="../resource/css/styles.css">


    <!-- ICONO DEL HERBARIO -->
    <link rel="icon" href="../resource//img//icon_herbario.jpg">


    

</head>
<body>

<header>

    <div class="header-content">


        <!-- LOGO EN LA CABECERA DEL MENU -->
        <div class="logo-header">
            <h1>Herbario Digital  <b>ZON</b></h1>
            <img src="../resource/img/icon_herbario.jpg" alt="">
        </div>
        <!-- MENU PRINCIPAL -->
        <div class="container__menu">

            <div class="menu">
                <input type="checkbox" id="check__menu">
                <label for="check__menu" id="label__check">
                    <i class="fas fa-bars icon__menu"></i>
                </label>
                <nav>
                    <ul>
                        <li><a href="inicio.php" id="selected"></a></li>
                        <li><a href="inicio.php">Inicio</a></li>
                        <li><a href="info.php">??Quienes somos?</a></li>
                        <li><a href="galeria.php">Ejemplares</a></li>
                        <li><a href="contacto.php">Contacto</a></li>
                    </ul>
                    <!-- MODO CLARO/OBSCURO -->
                    <div class="modo">
                        <label for="toggle" id="label"><i class="fa-solid fa-moon"></i></label>
                        <input type="checkbox" id="toggle">
                    </div>
                </nav>
            </div>

        </div>

    </div>



</header>
