<?php
	include_once("class-empleado.php");

	class Tripulante extends Empleado{

		private $idTripulante;
		private $Empleado_idEmpleado;

		public function __construct(
					$idTripulante=null,
					$Empleado_idEmpleado=null){
			parent::__construct(
					$idEmpleado=null,
					$fechaIngresoAerolinea=null,
					$Persona_idPersona=null,
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
					$Pais_idPais=null
				);
			$this->idTripulante = $idTripulante;
			$this->Empleado_idEmpleado = $Empleado_idEmpleado;
		}
		public function getIdTripulante(){
			return $this->idTripulante;
		}
		public function setIdTripulante($idTripulante){
			$this->idTripulante = $idTripulante;
		}
		public function getEmpleado_idEmpleado(){
			return $this->Empleado_idEmpleado;
		}
		public function setEmpleado_idEmpleado($Empleado_idEmpleado){
			$this->Empleado_idEmpleado = $Empleado_idEmpleado;
		}
		public function toString(){
			return "IdTripulante: " . $this->idTripulante . 
				" Empleado_idEmpleado: " . $this->Empleado_idEmpleado;
		}

		public function mostrarTodos($objConexion){
			//echo "listo";
			$sql="SELECT P.IDPERSONA,P.PNOMBRE,P.SNOMBRE,P.PAPELLIDO,P.SAPELLIDO,P.DIRECCION,P.CORREO,
				  E.IDEMPLEADO,E.FECHAINGRESOAEROLINEA,
				  EC.IDESTADOCIVIL,EC.NOMBREESTADOCIVIL,
				  PS.IDPAIS,PS.NOMBREPAIS,
				  G.IDGENERO,G.NOMBREGENERO,
				  C.IDCARGO,C.NOMBRECARGO,
				  L.IDLICENCIA,L.REGISTRO,L.FECHAREGISTRO,L.FECHAVENCIMIENTO,
				  T.IDTRIPULANTE
				FROM PERSONA P
				INNER JOIN EMPLEADO E ON P.IDPERSONA=E.PERSONA_IDPERSONA
				INNER JOIN TRIPULANTE T ON E.IDEMPLEADO=T.EMPLEADO_IDEMPLEADO
				INNER JOIN LICENCIA L ON T.IDTRIPULANTE=L.TRIPULANTE_IDTRIPULANTE
				INNER JOIN ESTADOCIVIL EC ON P.ESTADOCIVIL_IDESTADOCIVIL=EC.IDESTADOCIVIL
				INNER JOIN PAIS PS ON P.PAIS_IDPAIS=PS.IDPAIS
				INNER JOIN GENERO G ON P.GENERO_IDGENERO=G.IDGENERO
				INNER JOIN EMPLEADOXCARGO EXC ON E.IDEMPLEADO=EXC.EMPLEADO_IDEMPLEADO
				INNER JOIN CARGO C ON EXC.CARGO_IDCARGO=C.IDCARGO";

				$stid=$objConexion->ejecutarInstruccion($sql);

				$tripulantes=array();
				while($tripulante=$objConexion->obtenerFila($stid)){
				  $tripulantes[]=$tripulante;

				}
			return $tripulantes;
		}
	}
?>