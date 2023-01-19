<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0,
    minimum-scale=1.0">
    <title>Herbario Digital ZON</title>
    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="resource/css/styles.css">
    <link rel="stylesheet" href="../resource/css/styles.css">
    <script src="https://kit.fontawesome.com/807a30de48.js" crossorigin="anonymous"></script>
    
</head>
<body>

<header>

    <div class="header-content">

        <div class="logo-header">
            <h1>Herbario Digital<b>ZON</b></h1>
            <img src="../resource/img/icon_herbario.jpg" alt="">
        </div>

        <div class="container__menu">

            <div class="menu">
                <input type="checkbox" id="check__menu">
                <label for="check__menu" id="label__check">
                    <i class="fas fa-bars icon__menu"></i>
                </label>
                <nav>
                    <ul>
                        <li><a href="../php/administrador.php" id="selected"></a></li>
                        <li><a href="administrador.php">Administrador</a></li>
                        <li><a href="registrar_planta.php">Agregar ejemplar</a></li>
                        <li><a href="subirxmlsx.php">Importar de Excel</a></li>
                    </ul>
                </nav>
            </div>

        </div>

</header>
