<?php 
	include("../class/class-conexion.php");
	include("../class/class-persona.php");
	include("../class/class-empleado.php");
	include("../class/class-estado-civil.php");
	include("../class/class-pais.php");
	include("../class/class-genero.php");
	include("../class/class-cargo.php");
	
	$objConexion=new Conexion();
	switch($_POST['accion']){
		case 'mostrar-todos':
			$stid=Empleado::mostrarTodos($objConexion);
			echo json_encode($stid);
		break;
		case 'listar-estados-civiles':
			$stid=EstadoCivil::listarEstadoCivil($objConexion);
			echo json_encode($stid);
		break;
		case 'listar-generos':
			$stid=Genero::listarGenero($objConexion);
			echo json_encode($stid);
		break;
		case 'listar-paises':
			$stid=Pais::listarPais($objConexion);
			echo json_encode($stid);
		break;
		case 'listar-cargos-empleados':
			$stid=Cargo::listarCargoEmpleado($objConexion);
			echo json_encode($stid);
		break;
	}

	$objConexion->cerrarConexion();

 ?>