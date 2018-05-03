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

    <title>Destinos</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/carousel.css" rel="stylesheet">
  </head>
<!-- NAVBAR
================================================== -->
  <body>
   
    <?php 
      include("admin/nav-bar-home.php");
     ?>
    <div class="jumbotron">
      <div class="container">
        <center><h1>LISTA DE DESTINOS</h1></center>
        <center><p>Puedes escoger entre muchos lugares turisticos a nivel nacional para poder viajar con tu familia.</p>
        </center>>
      </div>
    </div>


    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

   
<div class="container marketing">
       <table class="table table-striped table-hover">
        <tr>
            <th>Origen</th>
            <th>Destino</th>
            <th>Ciudad</th>
            <th>Salida</th>
            <th>Tipo-Vuelo</th>
            <th>Hora</th>
            <th>Precio</th>
            
        </tr>
        <tr>
          <td>Tegucigalpa</td>
          <td>La Ceiba</td>
          <td>La Ceiba</td>
          <td>12/05/2018</td>
          <td>Clase B</td>
          <td>6:30 am</td>
          <td><h4>25$</h4></td>
          
        </tr>
        <tr>
          <td>Tegucigalpa</td>
          <td>Comayagua</td>
          <td>Comayagua</td>
          <td>05/05/2018</td>
          <td>Clase A</td>
          <td>4:30 am</td>
          <td><h4>19$</h4></td>
          
        </tr>
        <tr>
          <td>San Pedro Sula</td>
          <td>Roatan</td>
          <td>Roatan</td>
          <td>13/05/2018</td>
          <td>Clase a</td>
          <td>7:30 am</td>
          <td><h4>30$</h4></td>
          
        </tr>
        <tr>
          <td>San Pedro Sula</td>
          <td>Islas de la Bahia</td>
          <td>Islas de la Bahia</td>
          <td>21/05/2018</td>
          <td>Clase a</td>
          <td>10:30 am</td>
          <td><h4>30$</h4></td>
          
        </tr>
        <tr>
          <td>Tegucigalpa</td>
          <td>Costa Rica</td>
          <td>San Jose</td>
          <td>21/05/2018</td>
          <td>Clase B</td>
          <td>2:15 pm</td>
          <td><h4>349$</h4></td>
          
        </tr>
        <tr>
          <td>San Pedro Sula</td>
          <td>EEUU</td>
          <td>Houston</td>
          <td>21/05/2018</td>
          <td>Clase A</td>
          <td>7:30 pm</td>
          <td><h4>400$</h4></td>
        </tr>

        <tr>
          <td>San Pedro Sula</td>
          <td>EEUU</td>
          <td>Miami</td>
          <td>22/05/2018</td>
          <td>Clase B</td>
          <td>7:30 pm</td>
          <td><h4>382$</h4></td>
        </tr>

        <tr>
          <td>San Pedro Sula</td>
          <td>Nicaragua</td>
          <td>Managua</td>
          <td>19/05/2018</td>
          <td>Clase C</td>
          <td>8:15pm</td>
          <td><h4>356$</h4></td>
        </tr>
        
    </table>


      <!-- START THE FEATURETTES -->

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">Islas de la Bahía</h2>
          <p class="lead">Sin duda uno de los más paradisiacos lugares turísticos de Honduras, un archipiélago caribeño rodeado de aguas tibias y cristalinas, donde sumergirse en verdaderos tapices de corales y una extraordinaria biodiversidad marina.</p>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-responsive center-block" src="img/islas.jpg" alt="Generic placeholder image">
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7 col-md-push-5">
          <h2 class="featurette-heading">La Ceiba</h2>
          <p class="lead">Situada prácticamente al frente de Cayos Cochinos, corresponde a la tercera ciudad más grande de Honduras, conocida por su litoral norte donde se extienden hermosas playas que dan al Mar Caribe.</p>
        </div>
        <div class="col-md-5 col-md-pull-7">
          <img class="featurette-image img-responsive center-block" src="img/ceiba.jpg" alt="Generic placeholder image">
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">Islas Roatan</h2>
          <p class="lead">Roatán significa reino celestial. La isla es magnífica, con sus playas de arena blanca y lindas casas coloniales de madera construidas parcialmente sobre el agua, pero tendrás que disponer de un cierto presupuesto para quedarte y aprovechar la isla, dándote lujos de vez en cuando.</p>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-responsive center-block" src="img/roatan.jpg" alt="Generic placeholder image">
        </div>
      </div>

      <hr class="featurette-divider">

      <!-- /END THE FEATURETTES -->


     <!-- FOOTER -->
      <footer>
        <p class="pull-right"><a href="#">Bases de Datos I</a></p>
        <p>&copy; 2018 W&JC, Company. &middot; Todos los derechos &middot; Reservados</p>
      </footer>

    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="../../assets/js/vendor/holder.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
