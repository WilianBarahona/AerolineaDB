<?php

	class TipoVuelo{

		private $idTipoVuelo;
		private $nombreTipoVuelo;
		private $descripcion;

		public function __construct($idTipoVuelo,
					$nombreTipoVuelo,
					$descripcion){
			$this->idTipoVuelo = $idTipoVuelo;
			$this->nombreTipoVuelo = $nombreTipoVuelo;
			$this->descripcion = $descripcion;
		}
		public function getIdTipoVuelo(){
			return $this->idTipoVuelo;
		}
		public function setIdTipoVuelo($idTipoVuelo){
			$this->idTipoVuelo = $idTipoVuelo;
		}
		public function getNombreTipoVuelo(){
			return $this->nombreTipoVuelo;
		}
		public function setNombreTipoVuelo($nombreTipoVuelo){
			$this->nombreTipoVuelo = $nombreTipoVuelo;
		}
		public function getDescripcion(){
			return $this->descripcion;
		}
		public function setDescripcion($descripcion){
			$this->descripcion = $descripcion;
		}
		public function __toString(){
			return "IdTipoVuelo: " . $this->idTipoVuelo . 
				" NombreTipoVuelo: " . $this->nombreTipoVuelo . 
				" Descripcion: " . $this->descripcion;
		}

		public static function listarTipoVuelo($objConexion){
			$sql="SELECT IDTIPOVUELO,NOMBRETIPOVUELO
				  FROM TIPOVUELO";
		     $stid=$objConexion->ejecutarInstruccion($sql);

				$tipoVuelos=array();
				while($tipoVuelo=$objConexion->obtenerFila($stid)){
				  $tipoVuelos[]=$tipoVuelo;

				}
			return $tipoVuelos;
		}
	}
?>