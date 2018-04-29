<?php 
	include("../class/class-conexion.php");
	include("../class/class-persona.php");
	include("../class/class-pasajero.php");
	include("../class/class-estado-civil.php");
	
	$objConexion=new Conexion();
	switch($_POST['accion']){
		case 'mostrar-todos':
			$stid=Pasajero::mostrarTodos($objConexion);
			echo json_encode($stid);
		break;
		case 'listar-estados-civiles':
			$stid=EstadoCivil::listarEstadoCivil($objConexion);
			echo json_encode($stid);
		break;
	}
	$objConexion->cerrarConexion();

 ?>