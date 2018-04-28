<?php 
	include("../class/class-conexion.php");
	include("../class/class-persona.php");
	include("../class/class-empleado.php");
	
	$objConexion=new Conexion();
	switch($_POST['accion']){
		case 'mostrar-todos':
			$stid=Empleado::mostrarTodos($objConexion);
			echo json_encode($stid);
		break;
	}

 ?>