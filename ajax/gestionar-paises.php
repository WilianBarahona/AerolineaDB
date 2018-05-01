<?php 
	include("../class/class-conexion.php");
	include("../class/class-pais.php");
	
	$objConexion=new Conexion();
	switch($_POST['accion']){
		case 'mostrar-todos':
			$stid=Pais::listarPais($objConexion);
			echo json_encode($stid);
		break;
		
	}

	$objConexion->cerrarConexion();

 ?>