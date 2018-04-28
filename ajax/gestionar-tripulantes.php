<?php 
	include("../class/class-conexion.php");
	include("../class/class-persona.php");
	include("../class/class-tripulante.php");
	
	$objConexion=new Conexion();
	switch($_POST['accion']){
		case 'mostrar-todos':
			$stid=Tripulante::mostrarTodos($objConexion);
			echo json_encode($stid);
		break;
	}
	$objConexion->cerrarConexion();

 ?>

