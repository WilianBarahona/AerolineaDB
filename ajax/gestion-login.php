<?php
	
	session_start(); 
	include("../class/class-conexion.php");
	$conexion = new Conexion();
	switch ($_POST["accion"]) {
		case 'login':
	 		include ("../class/class-persona.php");
			Persona::verificarUsuario($conexion, $_POST["email"], $_POST["password"]);
		break;
	
		default:
			echo "Accion Invalida";
		break;
	}

	$conexion->cerrarConexion();
?>