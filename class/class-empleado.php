<?php
   	include_once("class-persona.php");

	class Empleado extends Persona{

		private $idEmpleado;
		private $fechaIngresoAerolinea;
		private $Persona_idPersona;

		public function __construct(
					$idEmpleado=null,
					$fechaIngresoAerolinea=null,
					$Persona_idPersona=null){
			parent::__construct(
					$idPersona=null,
					$pNombre=null,
					$sNombre =null,
					$pApellido=null,
					$sApellido=null,
					$direccion=null,
					$correo=null,
					$password=null,
					$fechaNacimiento=null,
					$estadoCuenta=null,
					$TipoCuenta=null,
					$fechaHoraRegistro=null,
					$EstadoCivil_idEstadoCivil=null,
					$Genero_idGenero=null,
					$Pais_idPais=null);

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

		public static function mostrarTodos($objConexion){
			//echo "listo";
			$sql="SELECT P.IDPERSONA,P.PNOMBRE,P.SNOMBRE,P.PAPELLIDO,P.SAPELLIDO,P.DIRECCION,P.CORREO,
				  E.IDEMPLEADO,E.FECHAINGRESOAEROLINEA,
				  EC.IDESTADOCIVIL,EC.NOMBREESTADOCIVIL,
				  PS.IDPAIS,PS.NOMBREPAIS,
				  G.IDGENERO,G.NOMBREGENERO,
				  C.IDCARGO,C.NOMBRECARGO
				FROM PERSONA P
				INNER JOIN EMPLEADO E ON P.IDPERSONA=E.PERSONA_IDPERSONA
				INNER JOIN ESTADOCIVIL EC ON P.ESTADOCIVIL_IDESTADOCIVIL=EC.IDESTADOCIVIL
				INNER JOIN PAIS PS ON P.PAIS_IDPAIS=PS.IDPAIS
				INNER JOIN GENERO G ON P.GENERO_IDGENERO=G.IDGENERO
				INNER JOIN EMPLEADOXCARGO EXC ON E.IDEMPLEADO=EXC.EMPLEADO_IDEMPLEADO
				INNER JOIN CARGO C ON EXC.CARGO_IDCARGO=C.IDCARGO
				WHERE EXC.ESTADO != 'I'";

				$stid=$objConexion->ejecutarInstruccion($sql);

				$empleados=array();
				while($empleado=$objConexion->obtenerFila($stid)){
				  $empleados[]=$empleado;

				}
			return $empleados;
		}
	}
?>