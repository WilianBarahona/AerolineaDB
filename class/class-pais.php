<?php

	class Pais{

		private $idPais;
		private $nombrePais;
		private $nacionalidad;
		private $codigoPostal;
		private $fotoBandera;

		public function __construct($idPais=null,
					$nombrePais=null,
					$nacionalidad=null,
					$codigoPostal=null,
					$fotoBandera=null){
			$this->idPais = $idPais;
			$this->nombrePais = $nombrePais;
			$this->nacionalidad = $nacionalidad;
			$this->codigoPostal = $codigoPostal;
			$this->fotoBandera = $fotoBandera;
		}
		public function getIdPais(){
			return $this->idPais;
		}
		public function setIdPais($idPais){
			$this->idPais = $idPais;
		}
		public function getNombrePais(){
			return $this->nombrePais;
		}
		public function setNombrePais($nombrePais){
			$this->nombrePais = $nombrePais;
		}
		public function getNacionalidad(){
			return $this->nacionalidad;
		}
		public function setNacionalidad($nacionalidad){
			$this->nacionalidad = $nacionalidad;
		}
		public function getCodigoPostal(){
			return $this->codigoPostal;
		}
		public function setCodigoPostal($codigoPostal){
			$this->codigoPostal = $codigoPostal;
		}
		public function getFotoBandera(){
			return $this->fotoBandera;
		}
		public function setFotoBandera($fotoBandera){
			$this->fotoBandera = $fotoBandera;
		}
		public function __toString(){
			return "IdPais: " . $this->idPais . 
				" NombrePais: " . $this->nombrePais . 
				" Nacionalidad: " . $this->nacionalidad . 
				" CodigoPostal: " . $this->codigoPostal . 
				" FotoBandera: " . $this->fotoBandera;
		}
	}
?>