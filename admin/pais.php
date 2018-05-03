<?php
  session_start();
  // Si no se ha declarado esta variable es porque no se ha iniciado sesion.
  if (!isset($_SESSION["permiso"])){ 
    header("Location: ../login.php");
    // Si se inicio pero el permiso no es correcto. 
  } else if (!($_SESSION["permiso"] == "trabajador"))
    header("Location: ../admin/index.php");
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Paises</title>
   <link rel="icon" href="../img/icon-page-html.png">
   <link rel="stylesheet" type="text/css" href="../css/all.css">
   <link rel="stylesheet" type="text/css" href="../css/jquery-data-table.css">
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/principal.css">
  <link rel="stylesheet" href="../css/jquery-confirm.min.css">
</head>
<body>
  <div class="container-fluid">
    <div class="row">
      <?php 
          include("nav-bar.php");
       ?>
      <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-3 col-lg-offset-2 main">
        <div class="container-fluid">
         <div class="row">
           
           <h1><span class="glyphicon glyphicon-screenshot">&nbsp</span>Paises</h1>
           <hr>
           
           <div class="col-md-12">
              <h3>Agregar Pais</h3>
              <table class="table table-striped">
                <tr>
                	<td><span style="color:red;font-weight: bold;">*&nbsp&nbsp</span>Nombre Del Pais</td>
                	<td>
                		<input type="text" id="txt-nombre-pais" class="form-control" placeholder="Nombre del pais">
                	</td>
                </tr>
                <tr>
                  <td><span style="color:red;font-weight: bold;">*&nbsp&nbsp</span>Nacionalidad</td>
                  <td>
                    <input type="text" id="txt-nacionalidad" class="form-control" placeholder="Nacionalidad">
                  </td>
                </tr>
                <tr>
                 <td><span style="color:red;font-weight: bold;">*&nbsp&nbsp</span>Codigo Postal</td>
                  <td>
                    <input type="text" id="txt-codigo-postal" class="form-control" placeholder="Codigo Postal">
                  </td>
                </tr>
                  <td>
                    <button id="btn-guardar-pais" type="button" class="btn btn-success"><span class="glyphicon glyphicon-save"></span> Guardar</button>
                    <button id="btn-actualizar-pais" type="button" class="btn btn-info"><span class="glyphicon glyphicon-save"></span>Actualizar</button>
                  </td>
                </tr>
              </table>
            </div>
             <div class="well col-md-12" id="div-paises">
              <div id="div-test"></div>
              <table id="tbl-paises" class="table table-striped">
                <thead>
                  <th>Nombre Pais</th>
                  <th>Nacionalidad</th>
                  <th>Codigo Postal</th>
                  <th>Opciones</th>
              </thead>
              <tbody></tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script type="text/javascript" src="../js/jquery-3.2.1.min.js"></script>
  <script type="text/javascript" src="../js/jquery-confirm.min.js"></script>
  <script type="text/javascript" src="../js/jquery-data-table.js"></script>
  <script type="text/javascript" src="../js/admin-pais.js"></script>
</body>
</html>


