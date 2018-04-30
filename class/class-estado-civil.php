<?php

	class EstadoCivil{

		private $idEstadoCivil;
		private $nombreEstadoCivil;

		public function __construct($idEstadoCivil=null,
					$nombreEstadoCivil=null){
			$this->idEstadoCivil = $idEstadoCivil;
			$this->nombreEstadoCivil = $nombreEstadoCivil;
		}
		public function getIdEstadoCivil(){
			return $this->idEstadoCivil;
		}
		public function setIdEstadoCivil($idEstadoCivil){
			$this->idEstadoCivil = $idEstadoCivil;
		}
		public function getNombreEstadoCivil(){
			return $this->nombreEstadoCivil;
		}
		public function setNombreEstadoCivil($nombreEstadoCivil){
			$this->nombreEstadoCivil = $nombreEstadoCivil;
		}
		public function __toString(){
			return "IdEstadoCivil: " . $this->idEstadoCivil . 
				" NombreEstadoCivil: " . $this->nombreEstadoCivil;
		}


		public static function listarEstadoCivil($objConexion){
			$sql="SELECT EC.IDESTADOCIVIL,EC.NombreEstadoCivil
				  FROM ESTADOCIVIL EC
				";

			$stid=$objConexion->ejecutarInstruccion($sql);

				$estadosCiviles=array();
				while($estadoCivil=$objConexion->obtenerFila($stid)){
				  $estadosCiviles[]=$estadoCivil;

				}
			return $estadosCiviles;

		}
	}
?>