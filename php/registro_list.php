<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">
    <title>Herbario Digital ZON</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">
    <link href="../resource/css/styles.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous"></head>
    <script src="https://kit.fontawesome.com/807a30de48.js" crossorigin="anonymous"></script>
  </head>

<body class="p-3 m-0 border-0 bd-example" style="background-color: #dcedc8;">  
  <header>

    <!-- NavBar index -->

    <nav class="navbar navbar-expand-lg bg-light">
          <div class="container-fluid">
            <a class="navbar-brand" href="#">Herbario Digital ZON</a>
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
                    <li><a class="dropdown-item" href="gallery.php">Galeria</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="#">Administracion registro de plantas</a></li>
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


  <div class="col-16 p-20" >
          <table class="table">
              <thead>
                  <tr>
                      <th scope="col" style="font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif ;">ID</th>
                      <th scope="col" style="font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif ;">Nombre comun</th>
                      <th scope="col" style="font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif ;">Genero</th>
                      <th scope="col" style="font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif ;">Familia</th>
                      <th scope="col" style="font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif ;">Especie</th>
                      <th scope="col" style="font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif ;">Autor especie</th>
                      <th scope="col" style="font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif ;">Nombre del colector</th>
                      <th scope="col" style="font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif ;">Fecha de colecta</th>
                      <th scope="col" style="font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif ;">Fecha de descripcion</th>
                      <th scope="col" style="font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif ;">Pais</th>
                      <th scope="col" style="font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif ;">Estado</th>
                      <th scope="col" style="font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif ;">Municipio</th>
                      <th scope="col" style="font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif ;">Localidad</th>
                      <th scope="col" style="font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif ;">Imagen principal</th>
                      <th scope="col" style="font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif ;">Acciones</th>
                  </tr>
              </thead>
              <tbody>
                  <?php
                      include "../model/conexion.php";
                      $sql=$conexion->query(" select * from plants");
                      while($row=$sql->fetch_object()){
                          echo "<tr>";
                              echo "<td>".$row->id_planta."</td>";
                              echo "<td>".$row->nombre_comun."</td>";
                              echo "<td>".$row->genero."</td>";
                              echo "<td>".$row->familia."</td>";
                              echo "<td>".$row->especie."</td>";
                              echo "<td>".$row->autor_especie."</td>";
                              echo "<td>".$row->colector_nombre."</td>";
                              echo "<td>".$row->fecha_colecta."</td>";
                              echo "<td>".$row->fecha_descripcion."</td>";
                              echo "<td>".$row->pais."</td>";
                              echo "<td>".$row->estado."</td>";
                              echo "<td>".$row->municipio."</td>";
                              echo "<td>".$row->localidad."</td>";
                              echo "<td> <img src='data:image/*;base64,". base64_encode($row->img_planta)."' width=150/></td>";
                              echo "<td>";
                              echo "<a href='../view/modificar_planta.php?id=".$row->id_planta."' class='btn btn-small btn-warning'><i class='fa-solid fa-pen-to-square'></i></a>";
                              echo "<a onclick='return eliminar()' href='../controller/eliminar_planta.php?id=".$row->id_planta."'class='btn btn-small btn-danger'><i class='fa-solid fa-trash'></i></a>";
                              echo "<a href='../view/modificar_planta.php?id=".$row->id_planta."' class='btn btn-small btn-primary'><i class='fa-solid fa-image'></i></a>";
                              echo "</td>";
                          echo "</tr>";
                          ?>
                      <?php }
                  ?>

<Script>function eliminar(){ var respuesta=confirm("Estas seguro de eliminar el registro?"); return respuesta }</Script>
              </tbody>
          </table>
</body>
</html>