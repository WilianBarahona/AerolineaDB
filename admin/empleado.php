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
  <title>Empleados</title>
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
           
           <h1><span class="glyphicon glyphicon-user">&nbsp</span>Empleados</h1>
           <hr>
           
           <div class="col-md-12">
              <h3>Agregar Empleado</h3>
              <table class="table table-striped">
                <tr>
                	<td><span style="color:red;font-weight: bold;">*&nbsp&nbsp</span>Primer Nombre</td>
                	<td>
                		<input type="text" id="txt-primer-nombre" class="form-control" placeholder="Primer Nombre">
                	</td>
                </tr>
                <tr>
                 <td>Segundo Nombre</td>
                  <td>
                    <input type="text" id="txt-segundo-nombre" class="form-control" placeholder="Segundo Nombre">
                  </td>
                </tr>
                <tr>
                  <td><span style="color:red;font-weight: bold;">*&nbsp&nbsp</span>Primer Apellido</td>
                  <td>
                    <input type="text" id="txt-primer-apellido" class="form-control" placeholder="Primer Apellido">
                  </td>
                </tr>
                <tr>
                 <td>Segundo Apellido</td>
                  <td>
                    <input type="text" id="txt-segundo-apellido" class="form-control" placeholder="Segundo Apellido">
                  </td>
                </tr>
                <tr>
                 <td><span style="color:red;font-weight: bold;">*&nbsp&nbsp</span>Direccion</td>
                  <td>
                    <input type="text" id="txt-direccion" class="form-control" placeholder="Direccion">
                  </td>
                </tr>
                <tr>
                 <td>Correo</td>
                  <td>
                    <input type="text" id="txt-correo" class="form-control" placeholder="Correo Electonico">
                  </td>
                </tr>
                <tr>
                  <td><span style="color:red;font-weight: bold;">*&nbsp&nbsp</span>Fecha de nacimiento</td>
                  <td>
                    <input class="form-control" type="date" id="txt-fecha-nacimiento">
                  </td>
                </tr>
                <tr>
                  <td><span style="color:red;font-weight: bold;">*&nbsp&nbsp</span>Estado Civil</td>
                  <td>
                   <select id="slc-estado-civil" class="form-control">
                      <option value="0">Seleccione una opcion</option>
                    </select>
                  </td>
                </tr>
                <tr>
                  <td><span style="color:red;font-weight: bold;">*&nbsp&nbsp</span>Genero</td>
                  <td>
                    <select id="slc-genero" class="form-control">
                      <option value="0">Seleccione una opcion</option>
                    </select>
                  </td>
                </tr>
                <tr>
                  <td><span style="color:red;font-weight: bold;">*&nbsp&nbsp</span>Pais</td>
                  <td>
                    <select id="slc-pais" class="form-control">
                      <option value="0">Seleccione una opcion</option>
                    </select>
                  </td>
                </tr>
                <tr>
                 <td><span style="color:red;font-weight: bold;">*&nbsp&nbsp</span>Cargo</td>
                  <td>
                    <select id="slc-cargo" class="form-control" placeholder="cargo">
                      <option value="0">Seleccione una opcion</option>
                    </select>
                  </td>
                </tr>
                <tr>
                  <td>
                    <button id="btn-guardar-empleado" type="button" class="btn btn-success"><span class="glyphicon glyphicon-save"></span> Guardar</button>
                    <button id="btn-actualizar-empleado" type="button" class="btn btn-info"><span class="glyphicon glyphicon-save"></span>Actualizar</button>
                  </td>
                </tr>
              </table>
            </div>
             <div class="well col-md-12" id="div-empleados">
              <div id="div-test"></div>
              <table id="tbl-empleados" class="table table-striped">
                <thead>
                  <th>Primer Nombre</th>
                  <th>Primer Apellido</th>
                  <th>Dirrecion</th>
                  <th>Correo</th>
                  <th>Genero</th>
                  <th>Pais</th>
                  <th>Cargo</th>
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
  <script type="text/javascript" src="../js/admin-empleado.js"></script>
</body>
</html>


