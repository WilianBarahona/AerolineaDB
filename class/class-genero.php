<?php

	class Genero{

		private $idGenero;
		private $nombreGenero;
		private $abreviaturaGenero;

		public function __construct($idGenero=null,
					$nombreGenero=null,
					$abreviaturaGenero=null){
			$this->idGenero = $idGenero;
			$this->nombreGenero = $nombreGenero;
			$this->abreviaturaGenero = $abreviaturaGenero;
		}
		public function getIdGenero(){
			return $this->idGenero;
		}
		public function setIdGenero($idGenero){
			$this->idGenero = $idGenero;
		}
		public function getNombreGenero(){
			return $this->nombreGenero;
		}
		public function setNombreGenero($nombreGenero){
			$this->nombreGenero = $nombreGenero;
		}
		public function getAbreviaturaGenero(){
			return $this->abreviaturaGenero;
		}
		public function setAbreviaturaGenero($abreviaturaGenero){
			$this->abreviaturaGenero = $abreviaturaGenero;
		}
		public function __toString(){
			return "IdGenero: " . $this->idGenero . 
				" NombreGenero: " . $this->nombreGenero . 
				" AbreviaturaGenero: " . $this->abreviaturaGenero;
		}

		public static function listarGenero($objConexion){
			$sql="SELECT IDGENERO,NOMBREGENERO,AbreviaturaGenero
				  FROM GENERO";
		     $stid=$objConexion->ejecutarInstruccion($sql);

				$generos=array();
				while($genero=$objConexion->obtenerFila($stid)){
				  $generos[]=$genero;

				}
			return $generos;
		}
	}
?>