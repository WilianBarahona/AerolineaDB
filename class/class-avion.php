<?php

	class Avion{

		private $idAvion;
		private $registro;
		private $cantidadAsientos;
		private $Modelo_idModelo;
		private $Marca_idMarca;
		private $pesoMaximoEquipaje;

		public function __construct($idAvion=null,
					$registro=null,
					$cantidadAsientos=null,
					$Modelo_idModelo=null,
					$Marca_idMarca=null,
					$pesoMaximoEquipaje=null){
			$this->idAvion = $idAvion;
			$this->registro = $registro;
			$this->cantidadAsientos = $cantidadAsientos;
			$this->Modelo_idModelo = $Modelo_idModelo;
			$this->Marca_idMarca = $Marca_idMarca;
			$this->pesoMaximoEquipaje = $pesoMaximoEquipaje;
		}
		public function getIdAvion(){
			return $this->idAvion;
		}
		public function setIdAvion($idAvion){
			$this->idAvion = $idAvion;
		}
		public function getRegistro(){
			return $this->registro;
		}
		public function setRegistro($registro){
			$this->registro = $registro;
		}
		public function getCantidadAsientos(){
			return $this->cantidadAsientos;
		}
		public function setCantidadAsientos($cantidadAsientos){
			$this->cantidadAsientos = $cantidadAsientos;
		}
		public function getModelo_idModelo(){
			return $this->Modelo_idModelo;
		}
		public function setModelo_idModelo($Modelo_idModelo){
			$this->Modelo_idModelo = $Modelo_idModelo;
		}
		public function getMarca_idMarca(){
			return $this->Marca_idMarca;
		}
		public function setMarca_idMarca($Marca_idMarca){
			$this->Marca_idMarca = $Marca_idMarca;
		}
		public function getPesoMaximoEquipaje(){
			return $this->pesoMaximoEquipaje;
		}
		public function setPesoMaximoEquipaje($pesoMaximoEquipaje){
			$this->pesoMaximoEquipaje = $pesoMaximoEquipaje;
		}
		public function __toString(){
			return "IdAvion: " . $this->idAvion . 
				" Registro: " . $this->registro . 
				" CantidadAsientos: " . $this->cantidadAsientos . 
				" Modelo_idModelo: " . $this->Modelo_idModelo . 
				" Marca_idMarca: " . $this->Marca_idMarca . 
				" PesoMaximoEquipaje: " . $this->pesoMaximoEquipaje;
		}

		public static function listarAvion($objConexion){
			$sql="SELECT IDAVION,REGISTRO
				  FROM AVION";
		     $stid=$objConexion->ejecutarInstruccion($sql);

				$aviones=array();
				while($avion=$objConexion->obtenerFila($stid)){
				  $aviones[]=$avion;

				}
			return $aviones;
		}
	}
?>