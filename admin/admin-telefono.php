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
  <title>Administración</title>
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/principal.css">
  <link rel="stylesheet" href="../css/jquery-confirm.min.css">
</head>
<body>
  <div class="container-fluid">
    <div class="row">
      <?php 
          include("admin-dashboard.php");
       ?>
      <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-3 col-lg-offset-2 main">
        <div class="container-fluid">
         <div class="row">
           
           <h1>Álbumes</h1>
           <hr>
           
           <div class="col-md-12">
              <h3>Agregar Álbum</h3>
              <table class="table table-striped">
                <tr>
                  <td>Fotografía: </td>
                  <td>
                    <input type="hidden" id="txt-url-foto-album">
                    <form method="post" id="form-foto-album" name="form-foto-album" enctype="multipart/form-data">
                      <label class="btn btn-default">
                          Examinar <input type="file" name="file" id="file-foto-album" hidden>
                      </label>
                      <img src="../img/load.gif" id="carga-foto-album" class="img loading" height="20px">
                      <img src="../img/good.png" id="lista-carga-foto-album" class="img loading" height="20px">
                    </form>
                  </td>
                </tr>
                <tr>
                	<td>Artista: </td>
                	<td>
                		<select name="slc-artista" id="slc-artista" class="form-control" placeholder="Seleccionar">
                			<option value="" hidden="">Seleccionar</option>
                		</select>
                	</td>
                </tr>
                <tr>
                  <td>Nombre del álbum: </td>
                  <td>
                    <input type="hidden" name="txt-id-album" id="txt-id-album">
                    <input type="text" id="txt-nombre-album" id="txt-album" value="" placeholder="Nombre" class="form form-control"></td>
                </tr>
                <tr>
                  <td>Año: </td>
                  <td>
                    <input class="form-control" type="date" name="txt-fecha" id="txt-fecha">
                  </td>
                </tr>
                <tr>
                  <td>
                    <button id="btn-guardar-album" type="button" class="btn btn-success"><span class="glyphicon glyphicon-save"></span> Guardar</button>
                    <button id="btn-actualizar-album" type="button" class="btn btn-info"><span class="glyphicon glyphicon-save"></span>Actualizar</button>
                  </td>
                </tr>
              </table>
            </div>
             <div class="well col-md-12" id="div-albumes">
              <span class="glyphicon glyphicon-search" onclick="buscarAlbum()"></span>&nbsp&nbsp&nbsp
              <input type="text" id="txt-busqueda" placeholder="Busqueda" style="border-radius:8px">
              <div id="div-busqueda">
                <table id="tbl-busquedas" class="table table-striped">
                  <thead></thead>
                  <tbody>
                  </tbody>
                </table>
                
              </div>
              <table id="tbl-albumes" class="table table-striped">
                <thead>
                  <th>Cover</th>
                  <th>Album</th>
                  <th>Artista</th>
                  <th>Año</th>
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
  <script type="text/javascript" src="../js/admin-album.js"></script>
</body>
</html>
