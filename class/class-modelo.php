<?php

	class Modelo{

		private $idModelo;
		private $nombreModelo;

		public function __construct($idModelo=null,
					$nombreModelo=null){
			$this->idModelo = $idModelo;
			$this->nombreModelo = $nombreModelo;
		}
		public function getIdModelo(){
			return $this->idModelo;
		}
		public function setIdModelo($idModelo){
			$this->idModelo = $idModelo;
		}
		public function getNombreModelo(){
			return $this->nombreModelo;
		}
		public function setNombreModelo($nombreModelo){
			$this->nombreModelo = $nombreModelo;
		}
		public function __toString(){
			return "IdModelo: " . $this->idModelo . 
				" NombreModelo: " . $this->nombreModelo;
		}
	}
?>