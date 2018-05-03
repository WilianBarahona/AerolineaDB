<?php
  session_start();
  // Si no se ha declarado esta variable es porque no se ha iniciado sesion.
  if (!isset($_SESSION["permiso"])){ 
    header("Location: login.php");
    // Si se inicio pero el permiso no es correcto. 
  } else if (!($_SESSION["permiso"] == "cliente"))
    header("Location: admin/index.php");
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Formulario</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/carousel.css" rel="stylesheet">
  </head>

  <body>

    <?php 
      include("admin/nav-bar-home.php");
     ?>
     
    <div class="jumbotron">
      <div class="container">
        <center><h1>Rerservacion de Vuelos</h1></center>
        <center><p>Aqui puedes reservar tus vuelos de forma facil y rapida.</p>
        </center>
      </div>
    </div>
<br>
<br>
    
    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
          <form action="pagina1.html" method="GET">
            <table class="table table-striped table-hover">
              <tr>       
                <td>Primer Nombre:</td>
                <td><input class="form-control" type="text" name="txt-nombre" id="txt-nombre" placeholder="Ingrese su primer Nombre"></td>
              </tr>
              <tr>
                <td>Segundo Nombre</td>
                <td><input class="form-control" type="text" name="txt-apellido" id="txt-apellido" placeholder="Ingrese su segundo nombre"></td>
              </tr>
              <tr>
                <td>Primer Apellido</td>
                <td><input class="form-control" type="text" name="txt-apellido" id="txt-apellido" placeholder="Ingrese su primer apellido"></td>
              </tr>
              <tr>
                <td>Segundo Apellido</td>
                <td><input class="form-control" type="text" name="txt-apellido" id="txt-apellido" placeholder="Ingrese su segundo apellido"></td>
              </tr>
              <tr>
                <td>Origen: </td>
                <td>
                  <select class="form-control" name="slc-pais" id="slc-pais">
                    <option>--Seleccione un Origen--</option>
                    <option value="1">Tegucigalpa</option>
                    <option value="2">Nicaragua</option>
                    <option value="3">El Salvador</option>
                    <option value="4">Panama</option>
                  </select>
                </td>
              </tr>
              <tr>
                <td>Destinno: </td>
                <td>
                  <select class="form-control" name="slc-pais" id="slc-pais">
                    <option>--Seleccione un Destino--</option>
                    <option value="1">La Ceiba</option>
                    <option value="2">Rotan</option>
                    <option value="3">Islas de la Bahia</option>
                    <option value="4">San Pedro Sula</option>
                  </select>
                </td>
              </tr>
              <tr>
                <td>Fecha de Salida:</td>
                <td><input class="form-control" type="date" name="txt-fecha-nacimiento" id="txt-fecha-nacimiento"></td>
              </tr>
              <td>Tipo-Vuelo: </td>
                <td>
                  <select class="form-control" name="slc-pais" id="slc-pais">
                    <option>--Seleccione Tipo-Vuelo--</option>
                    <option value="1">Clase A</option>
                    <option value="2">Clase B</option>
                    <option value="3">Clase C</option>
                    <option value="4">Otras</option>
                  </select>
                </td>
              </tr>
              <tr>
                <td>Edad:</td>
                <td><input class="form-control" type="number" name="txt-edad" id="txt-edad" min="1" max="130"></td>
              </tr>
              
              <tr>
                <td>Telefono:</td>
                <td><input class="form-control" type="tel" name="txt-" id="txt-"></td>
              </tr>
              <tr>
                <td>Genero:</td>
                <td>
                  <label><input type="radio" name="rbt-genero" value="F">Femenino</label>
                  <label><input type="radio" name="rbt-genero" value="M">Masculino</label>
                </td>
              </tr>
              <tr>
                <td colspan="2">
                  <button type="button" class="btn btn-warning" onclick="guardarRegistro();">
                    <span class="glyphicon glyphicon-save"></span> Guardar
                  </button>
                </td>
              </tr>
            </table>    
          </form>          
          <div id="resultado-validacion"></div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
          <table class="table table-striped table-hover">
              <tr>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Destino</th>
                <th>Salida</th>
                <th>Hora</th>
              </tr>
              <tbody id="tbl-registros">
                <tr>
                  <td>Juan</td>
                  <td>Herandez</td>
                  <td>La Ceiba</td>
                  <td>12/01/2018</td>
                  <td>12:00 am</td>
                </tr>
              </tbody>
              <tr>
                  <td>William</td>
                  <td>Barahona</td>
                  <td>Roatan</td>
                  <td>12/01/2018</td>
                  <td>14:00 pm</td>
                </tr>
          </table>
        </div>
      </div>
    </div>   
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>