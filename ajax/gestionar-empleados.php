<?php 
	include("../class/class-conexion.php");
	include("../class/class-persona.php");
	include("../class/class-empleado.php");
	
	$objConexion=new Conexion();
	switch($_POST['accion']){
		case 'mostrar-todos':
			Empleado::mostrarTodos($objConexion);
		break;
	}

 ?>