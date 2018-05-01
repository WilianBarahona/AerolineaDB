<?php 

// session_start();
// if($_SESSION['status']==false || $_SESSION["id_tipo_usuario"]!=1) { // O el usuario no es administrador
//     header("Location: ../login.php");
// }

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Vuelos</title>
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
           
           <h1><span class="glyphicon glyphicon-user">&nbsp</span>Vuelos</h1>
           <hr>
           
           <div class="col-md-12">
              <h3>Agregar Vuelo</h3>
              <table class="table table-striped">
                <tr>
                  <td><span style="color:red;font-weight: bold;">*&nbsp&nbsp</span>FechaHora Partida</td>
                  <td>
                    <input type="datetime-local" id="txt-fecha-hora-partida" class="form-control">
                  </td>
                </tr>
                <tr>
                  <td><span style="color:red;font-weight: bold;">*&nbsp&nbsp</span>FechaHora Llegada</td>
                  <td>
                    <input type="datetime-local" id="txt-fecha-hora-llegada" class="form-control">
                  </td>
                </tr>
                <tr>
                  <td><span style="color:red;font-weight: bold;">*&nbsp&nbsp</span>Avion</td>
                  <td>
                   <select id="slc-avion" class="form-control">
                      <option value="0">Seleccione una opcion</option>
                    </select>
                  </td>
                </tr>
                <tr>
                  <td><span style="color:red;font-weight: bold;">*&nbsp&nbsp</span>Ruta</td>
                  <td>
                    <select id="slc-ruta" class="form-control">
                      <option value="0">Seleccione una opcion</option>
                    </select>
                  </td>
                </tr>
                <tr>
                  <td><span style="color:red;font-weight: bold;">*&nbsp&nbsp</span>Tipo De vuelo</td>
                  <td>
                    <select id="slc-tipo-vuelo" class="form-control">
                      <option value="0">Seleccione una opcion</option>
                    </select>
                  </td>
                </tr>
                <tr>
                  <td>
                    <button id="btn-guardar-vuelo" type="button" class="btn btn-success"><span class="glyphicon glyphicon-save"></span> Guardar</button>
                    <button id="btn-actualizar-vuelo" type="button" class="btn btn-info"><span class="glyphicon glyphicon-save"></span>Actualizar</button>
                  </td>
                </tr>
              </table>
            </div>
             <div class="well col-md-12" id="div-vuelos">
              <div id="div-test"></div>
              <table id="tbl-vuelos" class="table table-striped">
                <thead>
                  <th>TipoVuelo</th>
                  <th>Ruta</th>
                  <th>RegistroAvion</th>
                  <th>Marca</th>
                  <th>Modelo</th>
                  <th>FechaPartida</th>
                  <th>FechaLlegada</th>
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
  <script type="text/javascript" src="../js/admin-vuelo.js"></script>
</body>
</html>


