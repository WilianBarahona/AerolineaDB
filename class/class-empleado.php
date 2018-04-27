<?php
   	include_once("class-persona.php");

	class Empleado extends Persona{

		private $idEmpleado;
		private $fechaIngresoAerolinea;
		private $Persona_idPersona;

		public function __construct(
					$idEmpleado,
					$fechaIngresoAerolinea,
					$Persona_idPersona){
			parent::__construct($idPersona,
					$pNombre,
					$sNombre ,
					$pApellido,
					$sApellido,
					$direccion,
					$correo,
					$password,
					$fechaNacimiento,
					$estadoCuenta,
					$TipoCuenta,
					$fechaHoraRegistro,
					$EstadoCivil_idEstadoCivil,
					$Genero_idGenero,
					$Pais_idPais);

			$this->idEmpleado = $idEmpleado;
			$this->fechaIngresoAerolinea = $fechaIngresoAerolinea;
			$this->Persona_idPersona = $Persona_idPersona;
		}

		public function getIdEmpleado(){
			return $this->idEmpleado;
		}

		public function setIdEmpleado($idEmpleado){
			$this->idEmpleado = $idEmpleado;
		}

		public function getFechaIngresoAerolinea(){
			return $this->fechaIngresoAerolinea;
		}

		public function setFechaIngresoAerolinea($fechaIngresoAerolinea){
			$this->fechaIngresoAerolinea = $fechaIngresoAerolinea;
		}

		public function getPersona_idPersona(){
			return $this->Persona_idPersona;
		}

		public function setPersona_idPersona($Persona_idPersona){
			$this->Persona_idPersona = $Persona_idPersona;
		}

		public function __toString(){
			return "IdEmpleado: " . $this->idEmpleado . 
				" FechaIngresoAerolinea: " . $this->fechaIngresoAerolinea . 
				" Persona_idPersona: " . $this->Persona_idPersona;
		}
	}
?>