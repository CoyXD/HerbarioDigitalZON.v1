<!-- Verificar inicio de sesion-->
<?php  require('../controller/usuariolog.php'); ?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Herbario Digital ZON</title>
    <link rel="icon" href="../resource/img/icon_herbario.jpg">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">
    <link href="../../resource/css/styles.css" rel="stylesheet">
  </head>



<body class="p-3 m-0 border-0 bd-example" style="background-color: #dcedc8;">

  <header>
    <nav class="navbar navbar-expand-lg bg-light">
      <div class="container-fluid">
        <a class="navbar-brand" style="color: #aabb97;">Herbario Digital ZON</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="../index.php">Inicio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Perfil</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Plantas
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="register_plant.php">Registrar</a></li>
                <li><a class="dropdown-item" href="../php/gallery.php">Galeria</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="registro_list.php">Administracion registro de plantas</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled">Administrador</a>
            </li>
          </ul>
          <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Buscar</button>
          </form>
        </div>
      </div>
    </nav>
    </header>

    
    <h1 class="text-center p-4" style="color: #616161;">Registro de plantas</h1>

    <div class="pagination justify-content-center">
        <form class="col-4 p-3" method="POST" enctype="multipart/form-data">
            <h3 class="text-center p4" style="font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif ;">Formulario de registro de la planta</h3>
                <?php
                include "../model/conexion.php";
                include "../controller/registro_planta.php";
                include "../controller/eliminar_planta.php";
                include "../controller/edit_planta.php";
                ?>
            <div class="mb-3">
                <label for="nombre_planta" class="form-label">Nombre de la Planta</label>
                <input type="text" class="form-control" name="nombre_planta"/>
            </div>
            <div class="mb-3">
                <label for="genero" class="form-label">Genero</label>
                <input type="text" class="form-control" name="genero"/>
            </div>
            <div class="mb-3">
                <label for="familia" class="form-label">Familia</label>
                <input type="text" class="form-control" name="familia"/>
            </div>
            <div class="mb-3">
                <label for="especie" class="form-label">Especie</label>
                <input type="text" class="form-control" name="especie"/>
            </div>
            <div class="mb-3">
                <label for="autor_especie" class="form-label">Autor especie</label>
                <input type="text" class="form-control" name="autor_especie"/>
            </div>
            <div class="mb-3">
                <label for="colector_ejemplar" class="form-label">Colector del ejemplar</label>
                <input type="text" class="form-control" name="colector_ejemplar"/>
            </div>
            <div class="mb-3">
                <label for="fecha_colecta" class="form-label">Fecha colecta</label>
                <input type="date" class="form-control" name="fecha_colecta"/>
            </div>
            <div class="mb-3">
                <label for="fecha_descripcion" class="form-label">Fecha descripcion</label>
                <input type="date" class="form-control" name="fecha_descripcion"/>
            </div>
            <div class="mb-3">
                <label for="pais" class="form-label">Pais</label>
                <input type="text" class="form-control" name="pais"/>
            </div>
            <div class="mb-3">
                <label for="estado" class="form-label">Estado</label>
                <input type="text" class="form-control" name="estado"/>
            </div>
            <div class="mb-3">
                <label for="municipio" class="form-label">Municipio</label>
                <input type="text" class="form-control" name="municipio"/>
            </div>
            <div class="mb-3">
                <label for="localidad" class="form-label">Localidad</label>
                <input type="text" class="form-control" name="localidad"/>
            </div>
            <div class="mb-3">
                <label for="img_planta" class="form-label">Foto de la Planta</label>
                <input type="file" class="form-control"  name="img_planta" accept="image/*" />
            </div>
            <div class="mb-3">
                <label  class="form-label">Visivilidad de la localidad de la planta</label>
            </div>
            <div class="mb-3">
                <input type="radio" id="green"  name="color"  value="Visible"/>
                <label for="green">Visible</label>
                <input type="radio" id="red" name="color"  value="No Visible"/>
                <label for="red">No Visible</label>
            </div>
            <button type="submit" class="btn btn-primary" name="btnregistrar" value="ok">Registrar</button>
            <button type="submit" class="btn btn-secondary" name="btncancel" value="ok">Cancelar</button>
        </form>
    </div>
</body>
</html>


