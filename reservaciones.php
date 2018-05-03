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
<html
 lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Reservaciones</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/estilo.css" rel="stylesheet">
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
<center><label for="recipient-name" class="col-form-label">Elije tu mejor Asiento</label></center>
<center><button type="button" class="btn btn-primary" onclick="guardarRegistro();">
                  <span class="glyphicon glyphicon-user"></span>Disponibles</button>
                  <button type="button" class="btn btn-danger" onclick="guardarRegistro();">
                  <span class="glyphicon glyphicon-user"></span>Reservados</button></center>

<div class="container marketing">
  <br>
       <table class="table table-striped table-hover">
        <tr>
            <th>A</th>
            <th><button type="button" class="btn btn-primary" id="btn-color" data-toggle="modal" data-target="#exampleModal">
                    <span></span><strong>A1</strong></th>
            <th><button type="button" class="btn btn-primary" id="btn1-color" data-toggle="modal" data-target="#exampleModal">
                    <span></span><strong>A2</strong></th>
            <th><button type="button" class="btn btn-primary" id="btn2-color" data-toggle="modal" data-target="#exampleModal">
                    <span></span><strong>A3</strong></th>
            <th><button type="button" class="btn btn-primary" id="btn3-color" data-toggle="modal" data-target="#exampleModal">
                    <span></span><strong>A4</strong></th>
            <th><button type="button" class="btn btn-primary" id="btn4-color" data-toggle="modal" data-target="#exampleModal">
                    <span></span><strong>A5</strong></th>
            <th><button type="button" class="btn btn-primary" id="btn5-color" data-toggle="modal" data-target="#exampleModal">
                    <span></span><strong>A6</strong></th>
            <th><button type="button" class="btn btn-primary" id="btn6-color" data-toggle="modal" data-target="#exampleModal">
                    <span></span><strong>A7</strong></th>
            <th><button type="button" class="btn btn-primary" id="btn7-color" data-toggle="modal" data-target="#exampleModal">
                    <span></span><strong>A8</strong></th>
            <th><button type="button" class="btn btn-primary" id="btn8-color" data-toggle="modal" data-target="#exampleModal">
                    <span></span><strong>A9</strong></th>
            <th>B</th>
            <th><button type="button" class="btn btn-primary" id="btn10-color" data-toggle="modal" data-target="#exampleModal">
                    <span></span><strong>B1</strong></th>
            <th><button type="button" class="btn btn-primary" id="btn11-color" data-toggle="modal" data-target="#exampleModal">
                    <span></span><strong>B2</strong></th>
            <th><button type="button" class="btn btn-primary" id="btn12-color" data-toggle="modal" data-target="#exampleModal">
                    <span></span><strong>B3</strong></th>
            <th><button type="button" class="btn btn-primary" id="btn13-color" data-toggle="modal" data-target="#exampleModal">
                    <span></span><strong>B4</strong></th>
            <th><button type="button" class="btn btn-primary" id="btn14-color" data-toggle="modal" data-target="#exampleModal">
                    <span></span><strong>B5</strong></th>
            <th><button type="button" class="btn btn-primary" id="btn15-color" data-toggle="modal" data-target="#exampleModal">
                    <span></span><strong>B6</strong></th>
            <th><button type="button" class="btn btn-primary" id="btn16-color" data-toggle="modal" data-target="#exampleModal">
                    <span></span><strong>B7</strong></th>
            <th><button type="button" class="btn btn-primary" id="btn17-color" data-toggle="modal" data-target="#exampleModal">
                    <span></span><strong>B8</strong></th>
            <th><button type="button" class="btn btn-primary" id="btn18-color" data-toggle="modal" data-target="#exampleModal">
                    <span></span><strong>B9</strong></th>
        </tr>
        <tr>
          <th>C</th>
            <th><button type="button" class="btn btn-primary" id="btn19-color" data-toggle="modal" data-target="#exampleModal">
                    <span></span><strong>C1</strong></th>
            <th><button type="button" class="btn btn-primary" id="btn20-color" data-toggle="modal" data-target="#exampleModal">
                    <span></span><strong>C2</strong></th>
            <th><button type="button" class="btn btn-primary" id="btn21-color" data-toggle="modal" data-target="#exampleModal">
                    <span></span><strong>C3</strong></th>
            <th><button type="button" class="btn btn-primary" id="btn22-color" data-toggle="modal" data-target="#exampleModal">
                    <span></span><strong>C4</strong></th>
            <th><button type="button" class="btn btn-primary" id="btn23-color" data-toggle="modal" data-target="#exampleModal">
                    <span></span><strong>C5</strong></th>
            <th><button type="button" class="btn btn-primary" id="btn24-color" data-toggle="modal" data-target="#exampleModal">
                    <span></span><strong>C6</strong></th>
            <th><button type="button" class="btn btn-primary" id="btn25-color" data-toggle="modal" data-target="#exampleModal">
                    <span></span><strong>C7</strong></th>
            <th><button type="button" class="btn btn-primary" id="btn26-color" data-toggle="modal" data-target="#exampleModal">
                    <span></span><strong>C8</strong></th>
            <th><button type="button" class="btn btn-primary" id="btn27-color" data-toggle="modal" data-target="#exampleModal">
                    <span></span><strong>C9</strong></th>
            <th>D</th>
            <th><button type="button" class="btn btn-primary" id="btn29-color" data-toggle="modal" data-target="#exampleModal">
                    <span></span><strong>D1</strong></th>
            <th><button type="button" class="btn btn-primary" id="btn30-color" data-toggle="modal" data-target="#exampleModal">
                    <span></span><strong>D2</strong></th>
            <th><button type="button" class="btn btn-primary" id="btn31-color" data-toggle="modal" data-target="#exampleModal">
                    <span></span><strong>D3</strong></th>
            <th><button type="button" class="btn btn-primary" id="btn32-color" data-toggle="modal" data-target="#exampleModal">
                    <span></span><strong>D4</strong></th>
            <th><button type="button" class="btn btn-primary" id="btn33-color" data-toggle="modal" data-target="#exampleModal">
                    <span></span><strong>D5</strong></th>
            <th><button type="button" class="btn btn-primary" id="btn34-color" data-toggle="modal" data-target="#exampleModal">
                    <span></span><strong>D6</strong></th>
            <th><button type="button" class="btn btn-primary" id="btn35-color" data-toggle="modal" data-target="#exampleModal">
                    <span></span><strong>D7</strong></th>
            <th><button type="button" class="btn btn-primary" id="btn36-color" data-toggle="modal" data-target="#exampleModal">
                    <span></span><strong>D8</strong></th>
            <th><button type="button" class="btn btn-primary" id="btn37-color" data-toggle="modal" data-target="#exampleModal">
                    <span></span><strong>D9</strong></th>
        </tr>
        
        <tr>
          <th>E</th>
          <th></th>
          <th></th>
          <th></th>
          <th></th>
          <th></th>
          <th></th>
          <th></th>
          <th></th>
          <th></th>
          <th></th>
          <th></th>
          <th></th>
          <th></th>
          <th></th>
          <th></th>
          <th></th>
          <th></th>
          <th></th>
          <th></th>
          
        </tr>
        <tr>
          <th>F</th>
            <th><button type="button" class="btn btn-primary" id="btn38-color" data-toggle="modal" data-target="#exampleModal">
                    <span></span><strong>F1</strong></th>
            <th><button type="button" class="btn btn-primary" id="btn39-color" data-toggle="modal" data-target="#exampleModal">
                    <span></span><strong>F2</strong></th>
            <th><button type="button" class="btn btn-primary" id="btn40-color" data-toggle="modal" data-target="#exampleModal">
                    <span></span><strong>F3</strong></th>
            <th><button type="button" class="btn btn-primary" id="btn41-color" data-toggle="modal" data-target="#exampleModal">
                    <span></span><strong>F4</strong></th>
            <th><button type="button" class="btn btn-primary" id="btn42-color" data-toggle="modal" data-target="#exampleModal">
                    <span></span><strong>F5</strong></th>
            <th><button type="button" class="btn btn-primary" id="btn43-color" data-toggle="modal" data-target="#exampleModal">
                    <span></span><strong>F6</strong></th>
            <th><button type="button" class="btn btn-primary" id="btn44-color" data-toggle="modal" data-target="#exampleModal">
                    <span></span><strong>F7</strong></th>
            <th><button type="button" class="btn btn-primary" id="btn45-color" data-toggle="modal" data-target="#exampleModal">
                    <span></span><strong>F8</strong></th>
            <th><button type="button" class="btn btn-primary" id="btn46-color" data-toggle="modal" data-target="#exampleModal">
                    <span></span><strong>F9</strong></th>
            <th>G</th> 
            <th><button type="button" class="btn btn-primary" id="btn49-color" data-toggle="modal" data-target="#exampleModal">
                    <span></span><strong>G1</strong></th>
            <th><button type="button" class="btn btn-primary" id="btn51-color" data-toggle="modal" data-target="#exampleModal">
                    <span></span><strong>G2</strong></th>
            <th><button type="button" class="btn btn-primary" id="btn52-color" data-toggle="modal" data-target="#exampleModal">
                    <span></span><strong>G3</strong></th>
            <th><button type="button" class="btn btn-primary" id="btn53-color" data-toggle="modal" data-target="#exampleModal">
                    <span></span><strong>G4</strong></th>
            <th><button type="button" class="btn btn-primary" id="btn54-color" data-toggle="modal" data-target="#exampleModal">
                    <span></span><strong>G5</strong></th>
            <th><button type="button" class="btn btn-primary" id="btn55-color" data-toggle="modal" data-target="#exampleModal">
                    <span></span><strong>G6</strong></th>
            <th><button type="button" class="btn btn-primary" id="btn56-color" data-toggle="modal" data-target="#exampleModal">
                    <span></span><strong>G7</strong></th>
            <th><button type="button" class="btn btn-primary" id="btn57-color" data-toggle="modal" data-target="#exampleModal">
                    <span></span><strong>G8</strong></th>
            <th><button type="button" class="btn btn-primary" id="btn58-color" data-toggle="modal" data-target="#exampleModal">
                    <span></span><strong>G9</strong></th>
        </tr>
         <tr>
          <th>H</th>
           <th><button type="button" class="btn btn-primary" id="btn59-color" data-toggle="modal" data-target="#exampleModal">
                    <span></span><strong>H1</strong></th>
            <th><button type="button" class="btn btn-primary" id="btn60-color" data-toggle="modal" data-target="#exampleModal">
                    <span></span><strong>H2</strong></th>
            <th><button type="button" class="btn btn-primary" id="btn61-color" data-toggle="modal" data-target="#exampleModal">
                    <span></span><strong>H3</strong></th>
            <th><button type="button" class="btn btn-primary" id="btn62-color" data-toggle="modal" data-target="#exampleModal">
                    <span></span><strong>H4</strong></th>
            <th><button type="button" class="btn btn-primary" id="btn63-color" data-toggle="modal" data-target="#exampleModal">
                    <span></span><strong>H5</strong></th>
            <th><button type="button" class="btn btn-primary" id="btn64-color" data-toggle="modal" data-target="#exampleModal">
                    <span></span><strong>H6</strong></th>
            <th><button type="button" class="btn btn-primary" id="btn65-color" data-toggle="modal" data-target="#exampleModal">
                    <span></span><strong>H7</strong></th>
            <th><button type="button" class="btn btn-primary" id="btn66-color" data-toggle="modal" data-target="#exampleModal">
                    <span></span><strong>H8</strong></th>
            <th><button type="button" class="btn btn-primary" id="btn67-color" data-toggle="modal" data-target="#exampleModal">
                    <span></span><strong>H9</strong></th>
            <th>I</th>
            <th><button type="button" class="btn btn-primary" id="btn68-color" data-toggle="modal" data-target="#exampleModal">
                    <span></span><strong>I-1</strong></th>
            <th><button type="button" class="btn btn-primary" id="btn69-color" data-toggle="modal" data-target="#exampleModal">
                    <span></span><strong>I-2</strong></th>
            <th><button type="button" class="btn btn-primary" id="btn70-color" data-toggle="modal" data-target="#exampleModal">
                    <span></span><strong>I-3</strong></th>
            <th><button type="button" class="btn btn-primary" id="btn71-color" data-toggle="modal" data-target="#exampleModal">
                    <span></span><strong>I-4</strong></th>
            <th><button type="button" class="btn btn-primary" id="btn72-color" data-toggle="modal" data-target="#exampleModal">
                    <span></span><strong>I-5</strong></th>
            <th><button type="button" class="btn btn-primary" id="btn73-color" data-toggle="modal" data-target="#exampleModal">
                    <span></span><strong>I-6</strong></th>
            <th><button type="button" class="btn btn-primary" id="btn74-color" data-toggle="modal" data-target="#exampleModal">
                    <span></span><strong>I-7</strong></th>
            <th><button type="button" class="btn btn-primary" id="btn75-color" data-toggle="modal" data-target="#exampleModal">
                    <span></span><strong>I-8</strong></th>
            <th><button type="button" class="btn btn-primary" id="btn76-color" data-toggle="modal" data-target="#exampleModal">
                    <span></span><strong>I-9</strong></th>
          
        </tr>

    </table>
    <br>
    <br>
    <hr>
    <table class="table table-striped table-hover">
        <tr>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Origen</th>
            <th>Destino</th>
            <th>Fecha-Salida</th>
            <th>Hora</th>
            <th>Tipo-Vuelo</th>
            
            
        </tr>
        <tr>
          <td>Juan Carlos</td>
          <td>Martinez</td>
          <td>Tegucigalpa</td>
          <td>Costa Rica</td>
          <td>15/05/2018</td>
          <td>8:30 am</td>
          <td>Clase A</td>
          
        </tr>
        <tr>
          <td>William</td>
          <td>Barahona</td>
          <td>Tegucigalpa</td>
          <td>EEUU</td>
          <td>15/05/2018</td>
          <td>8:15 am</td>
          <td>Clase B</td>
          
        </tr>
        <tr>
          <td>Luis Fernando</td>
          <td>Suazo</td>
          <td>San Pedro Sula</td>
          <td>Roatan</td>
          <td>16/05/2018</td>
          <td>8:00 am</td>
          <td>Clase C</td>
          
        </tr>       
    </table>
</div>
    

        </div>
      </div>
    </div>   


<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalLabel">Rerservacion de Vuelo</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>

      </div>
      <div class="modal-body row">
    <div class="col-sm-6">
        <div class="form-group">
            <label for="recipient-name" class="col-form-label">Primer Nombre:</label>
            <input type="text" class="form-control" id="txt-pnombre">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Segundo Nombre:</label>
            <input type="text" class="form-control" id="txt-snombre">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Primer Apellido:</label>
            <input type="text" class="form-control" id="txt-papellido">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Primer Apellido:</label>
            <input type="text" class="form-control" id="txt-sapellido">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Genero:</label>
            <select class="form-control" name="slc-pais" id="slc-genero">
                    <option>--Seleccione su genero--</option>
                    <option value="1">Masculino</option>
                    <option value="2">Femenino</option>
                  </select>
          </div>
    </div>
  </form>
    <div class="col-sm-6">
        <form>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Destinos:</label>
            <select class="form-control" name="slc-pais" id="slc-genero">
                    <option>--Seleccion Destino--</option>
                    <option value="1">Islas de la Bahia</option>
                    <option value="2">Roatan</option>
                    <option value="2">La Ceiba</option>
                    <option value="2">San Pedro Sula</option>
                    <option value="2">Puerto Lempira</option>
                    <option value="2">Utila</option>
                    <option value="2">Miami</option>
                    <option value="2">Houston</option>
                    <option value="2">Atlanta</option>
                    <option value="2">Panama</option>
                    <option value="2">Costa Rica</option>
                    <option value="2">Nicaragua</option>
                    <option value="2">El Salvador</option>
                    <option value="2">Guatemala</option>
                    <option value="2">Mexico</option>
                    

                  </select>
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Fecha-Salida:</label>
           <td><input class="form-control" type="date" id="txt-fecha-salida"></td>
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Tipo de Vuelo:</label>
           <select class="form-control" name="slc-pais" id="slc-genero">
                    <option>--Sleccione Tipo-Vuelo--</option>
                    <option value="1">Clase A</option>
                    <option value="2">Clase B</option>
                    <option value="2">Clase C</option>
                  </select>
              </div>    
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Hora-Salida:</label>
            <input type="time" class="form-control" id="txt-hora">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">No.Asiento:</label>
            <input type="text" class="form-control" id="txt-asiento">
          </div>
    </div>
  </form>
    
</div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary" id="btn-guardar">Guardar</button>
      </div>
    </div>
  </div>
</div>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
    <script src="js/botones.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

  </body>
</html>