<?php

	class Cargo{

		private $idCargo;
		private $nombreCargo;
		private $sueldoBase;
		private $observacion;

		public function __construct($idCargo=null,
					$nombreCargo=null,
					$sueldoBase=null,
					$observacion=null){
			$this->idCargo = $idCargo;
			$this->nombreCargo = $nombreCargo;
			$this->sueldoBase = $sueldoBase;
			$this->observacion = $observacion;
		}
		public function getIdCargo(){
			return $this->idCargo;
		}
		public function setIdCargo($idCargo){
			$this->idCargo = $idCargo;
		}
		public function getNombreCargo(){
			return $this->nombreCargo;
		}
		public function setNombreCargo($nombreCargo){
			$this->nombreCargo = $nombreCargo;
		}
		public function getSueldoBase(){
			return $this->sueldoBase;
		}
		public function setSueldoBase($sueldoBase){
			$this->sueldoBase = $sueldoBase;
		}
		public function getObservacion(){
			return $this->observacion;
		}
		public function setObservacion($observacion){
			$this->observacion = $observacion;
		}
		public function __toString(){
			return "IdCargo: " . $this->idCargo . 
				" NombreCargo: " . $this->nombreCargo . 
				" SueldoBase: " . $this->sueldoBase . 
				" Observacion: " . $this->observacion;
		}
	}
?>