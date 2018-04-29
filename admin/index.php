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
  <title>DashBoard</title>
   <link rel="icon" href="../img/icon-page-html.png">
   <link rel="stylesheet" type="text/css" href="../css/all.css">
   <link rel="stylesheet" type="text/css" href="../css/jquery-data-table.css">
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/principal.css">
  <link href="../css/landigPage.css" rel="stylesheet">
  <link rel="stylesheet" href="../css/jquery-confirm.min.css">
  <style>
    .carrousel {
      color:white;
      margin-bottom:200px;
    }
  </style>
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
           
           <h1><span class="glyphicon glyphicon-home">&nbsp</span>DashBoard</h1>
           <hr>
           
            

               <!-- Carousel
            ================================================== -->
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
              <!-- Indicators -->
              <ol class="carousel-indicators">
                <li data-target="" data-slide-to="0" class="active"></li>
                <li data-target="" data-slide-to="1"></li>
                <li data-target="" data-slide-to="2"></li>
              </ol>
              <div class="carousel-inner" role="listbox">
                <div class="item active">
                  <img class="first-slide" src="../img/carrousel3.jpg" alt="First slide">
                  <div class="container">
                    <div class="carousel-caption">
                      <h1 class="carrousel size-font-carrusel"><b>Tu Aerolinea de confianza</b></h1>
                    </div>
                  </div>
                </div>
                <div class="item">
                  <img class="second-slide" src="../img/carrousel2.jpg" alt="Second slide">
                  <div class="container">
                    <div class="carousel-caption">
                      <h1 class=" carrousel size-font-carrusel"><b>Viaje Comodo y Seguro</b></h1>
                    </div>
                  </div>
                </div>
                <div class="item">
                  <img class="third-slide" src="../img/carrousel1.jpg" alt="Third slide">
                  <div class="container">
                    <div class="carousel-caption">
                       <h1 class="carrousel size-font-carrusel"><b>Los mejores precios del mercado</b></h1>
                    </div>
                  </div>
                </div>
              </div>
              <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div><!-- /.carousel -->
          </div>
        </div>
      </div>
    </div>
  </div>


    
  <script type="text/javascript" src="../js/jquery-3.2.1.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  <script type="text/javascript" src="../js/jquery-confirm.min.js"></script>
  <script type="text/javascript" src="../js/jquery-data-table.js"></script>
  <script type="text/javascript" src="../js/admin-empleado.js"></script>
    <script src="../js/holder.min.js"></script>
    <script src="../js/landingPage.min.js"></script>
</body>
</html>


