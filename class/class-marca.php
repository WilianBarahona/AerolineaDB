<?php

	class Marca{

		private $idMarca;
		private $nombreMarca;

		public function __construct($idMarca=null,
					$nombreMarca=null){
			$this->idMarca = $idMarca;
			$this->nombreMarca = $nombreMarca;
		}
		public function getIdMarca(){
			return $this->idMarca;
		}
		public function setIdMarca($idMarca){
			$this->idMarca = $idMarca;
		}
		public function getNombreMarca(){
			return $this->nombreMarca;
		}
		public function setNombreMarca($nombreMarca){
			$this->nombreMarca = $nombreMarca;
		}
		public function __toString(){
			return "IdMarca: " . $this->idMarca . 
				" NombreMarca: " . $this->nombreMarca;
		}
	}
?>