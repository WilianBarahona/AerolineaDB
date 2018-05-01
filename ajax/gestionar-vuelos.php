<?php 
  include("../class/class-conexion.php");
  include("../class/class-vuelo.php");
  include("../class/class-ruta.php");
  include("../class/class-tipo-vuelo.php");
  include("../class/class-avion.php");
  
  $objConexion=new Conexion();
  switch($_POST['accion']){
    case 'mostrar-todos':
      $stid=Vuelo::mostrarTodos($objConexion);
      echo json_encode($stid);
    break;
    case 'listar-aviones':
      $stid=Avion::listarAvion($objConexion);
      echo json_encode($stid);
    break;
    case 'listar-rutas':
      $stid=Ruta::listarRuta($objConexion);
      echo json_encode($stid);
    break;
    case 'listar-tipos-vuelos':
      $stid=TipoVuelo::listarTipoVuelo($objConexion);
      echo json_encode($stid);
    break;
  }

  $objConexion->cerrarConexion();

 ?>