<?php
	include_once("class-persona.php");

	class Pasajero{

		private $idPasajero;
		private $Persona_idPersona;
		private $fotoPerfil;
		private $numeroPasaporte;

		public function __construct(
					$idPasajero=null,
					$Persona_idPersona=null,
					$fotoPerfil=null,
					$numeroPasaporte=null){
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
			$this->idPasajero = $idPasajero;
			$this->Persona_idPersona = $Persona_idPersona;
			$this->fotoPerfil = $fotoPerfil;
			$this->numeroPasaporte = $numeroPasaporte;
		}
		public function getIdPasajero(){
			return $this->idPasajero;
		}
		public function setIdPasajero($idPasajero){
			$this->idPasajero = $idPasajero;
		}
		public function getPersona_idPersona(){
			return $this->Persona_idPersona;
		}
		public function setPersona_idPersona($Persona_idPersona){
			$this->Persona_idPersona = $Persona_idPersona;
		}
		public function getFotoPerfil(){
			return $this->fotoPerfil;
		}
		public function setFotoPerfil($fotoPerfil){
			$this->fotoPerfil = $fotoPerfil;
		}
		public function getNumeroPasaporte(){
			return $this->numeroPasaporte;
		}
		public function setNumeroPasaporte($numeroPasaporte){
			$this->numeroPasaporte = $numeroPasaporte;
		}
		public function toString(){
			return "IdPasajero: " . $this->idPasajero . 
				" Persona_idPersona: " . $this->Persona_idPersona . 
				" FotoPerfil: " . $this->fotoPerfil . 
				" NumeroPasaporte: " . $this->numeroPasaporte;
		}

		public static function mostrarTodos($objConexion){
			$sql="SELECT *
				 FROM PERSONA P
				 INNER JOIN PASAJERO PJ ON P.IDPERSONA=PJ.PERSONA_IDPERSONA
				 INNER JOIN ESTADOCIVIL EC ON P.ESTADOCIVIL_IDESTADOCIVIL=EC.IDESTADOCIVIL
				 INNER JOIN PAIS PS ON P.PAIS_IDPAIS=PS.IDPAIS
				 INNER JOIN GENERO G ON P.GENERO_IDGENERO=G.IDGENERO";

				$stid=$objConexion->ejecutarInstruccion($sql);

				$pasajeros=array();
				while($pasajero=$objConexion->obtenerFila($stid)){
				  $pasajeros[]=$pasajero;

				}
			return $pasajeros;
		}
	}
?>