<?php
include('../model/conexion.php');
require_once('vendor/php-excel-reader/excel_reader2.php');
require_once('vendor/SpreadsheetReader.php');

if (isset($_POST["import"]))
{
    
$allowedFileType = ['application/vnd.ms-excel','text/xls','text/xlsx','application/vnd.openxmlformats-officedocument.spreadsheetml.sheet'];
  
  if(in_array($_FILES["file"]["type"],$allowedFileType)){

        $targetPath = 'subidas/'.$_FILES['file']['name'];
        move_uploaded_file($_FILES['file']['tmp_name'], $targetPath);
        
        $Reader = new SpreadsheetReader($targetPath);
        
        $sheetCount = count($Reader->sheets());
        for($i=0;$i<$sheetCount;$i++)
        {
            
            $Reader->ChangeSheet($i);
            
            foreach ($Reader as $Row)
            {
          
                $nombrecomun = "";
                if(isset($Row[9])) {
                    $nombrecomun = mysqli_real_escape_string($conexion,$Row[9]);
                }
                
                $genero = "";
                if(isset($Row[3])) {
                    $genero = mysqli_real_escape_string($conexion,$Row[3]);
                }
				
                $familia = "";
                if(isset($Row[2])) {
                    $familia = mysqli_real_escape_string($conexion,$Row[2]);
                }
				
                $especie = "";
                if(isset($Row[4])) {
                    $especie = mysqli_real_escape_string($conexion,$Row[4]);
                }

                $autor_especie = "";
                if(isset($Row[5])) {
                    $autor_especie = mysqli_real_escape_string($conexion,$Row[5]);
                }

                $colector_ejemplar = "";
                if(isset($Row[26])) {
                    $colector_nombre = mysqli_real_escape_string($conexion,$Row[26]);
                }

                $fecha_colecta = "";
                if(isset($Row[32])) {
                    $fecha_colecta = mysqli_real_escape_string($conexion,$Row[32]);
                }

                $fecha_descripcion = "";
                if(isset($Row[38])) {
                    $fecha_desc = mysqli_real_escape_string($conexion,$Row[38]);
                }

                $pais = "";
                if(isset($Row[10])) {
                    $pais = mysqli_real_escape_string($conexion,$Row[10]);
                }

                $estado = "";
                if(isset($Row[11])) {
                    $estado = mysqli_real_escape_string($conexion,$Row[11]);
                }

                $municipio = "";
                if(isset($Row[12])) {
                    $municipio = mysqli_real_escape_string($conexion,$Row[12]);
                }

                $localidad = "";
                if(isset($Row[39])) {
                    $localidad = mysqli_real_escape_string($conexion,$Row[39]);
                }

                $sql=$conexion->query(" INSERT INTO `plants` (`id_planta`, `nombre_comun`, `genero`, `familia`, `especie`, `autor_especie`, `colector_nombre`, `fecha_colecta`, `fecha_descripcion`, `pais`, `estado`, `municipio`, `localidad`, `localidad_public`, `img_planta`) 
                VALUES (NULL, '$nombrecomun', '$genero', '$familia', '$especie', '$autor_especie', '$colector_ejemplar', '$fecha_colecta', '$fecha_descripcion', '$pais', '$estado', '$municipio', '$localidad', ' ', ' ')");
                    
                
                    if ($sql >= 1) {
                        $type = "success";
                        $message = "Excel importado correctamente";
                    } else {
                        $type = "error";
                        $message = "Hubo un problema al importar registros";
                    }
             }
        
         }
  }

}
?>
<!doctype html>
<html lang="es">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">
<link rel="icon" href="favicon.ico">
<title>Importar archivo de Excel a MySQL usando PHP - BaulPHP</title>

<!-- Bootstrap core CSS -->
<link href="dist/css/bootstrap.min.css" rel="stylesheet">
<!-- Custom styles for this template -->
<link href="assets/sticky-footer-navbar.css" rel="stylesheet">
<link href="assets/style.css" rel="stylesheet">

</head>

<body>
<header> 
  <!-- Fixed navbar -->
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark"> <a class="navbar-brand" href="#">Herbario Digital Zon Administracion</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active"> <a class="nav-link" href="administrador.php">Inicio administrador <span class="sr-only">(current)</span></a> </li>
      </ul>
      <form class="form-inline mt-2 mt-md-0">
        <input class="form-control mr-sm-2" type="text" placeholder="Buscar" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Busqueda</button>
      </form>
    </div>
  </nav>
</header>

<!-- Begin page content -->

<div class="container">
  <h3 class="mt-5">Importar archivo de Excel a MySQL usando PHP</h3>
  <hr>
  <div class="row">
    <div class="col-12 col-md-12"> 
      <!-- Contenido -->
    
    <div class="outer-container">
        <form action="" method="post"
            name="frmExcelImport" id="frmExcelImport" enctype="multipart/form-data">
            <div>
                <label>Elija Archivo Excel</label> <input type="file" name="file"
                    id="file" accept=".xls,.xlsx">
                <button type="submit" id="submit" name="import"
                    class="btn-submit">Importar Registros</button>
        
            </div>
        
        </form>
        
    </div>
    <div id="response" class="<?php if(!empty($type)) { echo $type . " display-block"; } ?>"><?php if(!empty($message)) { echo $message; } ?></div>
    
         
<?php
    $sqlSelect = "SELECT * FROM plants";
    $result = mysqli_query($conexion, $sqlSelect);

if (mysqli_num_rows($result) > 0)
{
?>
        
    <table class='tutorial-table'>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Genero</th>
                <th>Especie</th>
                <th>Familia</th>
                <th>Autor</th>
                <th>Colector</th>
                <th>fecha colecta</th>
                <th>fecha descripcion</th>
                <th>pais</th>
                <th>estado</th>
                <th>municipio</th>
                <th>localidad</th>


            </tr>
        </thead>
<?php
    while ($row = mysqli_fetch_array($result)) {
?>                  
        <tbody>
        <tr>
            <td><?php  echo $row['nombre_comun']; ?></td>
            <td><?php  echo $row['genero']; ?></td>
            <td><?php  echo $row['familia']; ?></td>
            <td><?php  echo $row['especie']; ?></td>
            <td><?php  echo $row['autor_especie']; ?></td>
            <td><?php  echo $row['colector_nombre']; ?></td>
            <td><?php  echo $row['fecha_colecta']; ?></td>
            <td><?php  echo $row['fecha_descripcion']; ?></td>
            <td><?php  echo $row['pais']; ?></td>
            <td><?php  echo $row['estado']; ?></td>
            <td><?php  echo $row['municipio']; ?></td>
            <td><?php  echo $row['localidad']; ?></td>
        </tr>
<?php
    }
?>
        </tbody>
    </table>
<?php 
} 
?>
      <!-- Fin Contenido --> 
    </div>
  </div>
  <!-- Fin row --> 

  
</div>
<!-- Fin container -->
<footer class="footer">
  <div class="container"> <span class="text-muted">
    <p>Códigos <a href="https://www.baulphp.com/importar-archivo-de-excel-a-mysql-usando-php" target="_blank">BaulPHP</a></p>
    </span> </div>
</footer>
<script src="assets/jquery-1.12.4-jquery.min.js"></script> 

<!-- Bootstrap core JavaScript
    ================================================== --> 
<!-- Placed at the end of the document so the pages load faster --> 

<script src="dist/js/bootstrap.min.js"></script>
</body>
</html>