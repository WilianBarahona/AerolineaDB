<?php

	class Ruta{

		private $idRuta;
		private $aliasRuta;
		private $tiempoPromedio;

		public function __construct($idRuta=null,
					$aliasRuta=null,
					$tiempoPromedio=null){
			$this->idRuta = $idRuta;
			$this->aliasRuta = $aliasRuta;
			$this->tiempoPromedio = $tiempoPromedio;
		}
		public function getIdRuta(){
			return $this->idRuta;
		}
		public function setIdRuta($idRuta){
			$this->idRuta = $idRuta;
		}
		public function getAliasRuta(){
			return $this->aliasRuta;
		}
		public function setAliasRuta($aliasRuta){
			$this->aliasRuta = $aliasRuta;
		}
		public function getTiempoPromedio(){
			return $this->tiempoPromedio;
		}
		public function setTiempoPromedio($tiempoPromedio){
			$this->tiempoPromedio = $tiempoPromedio;
		}
		public function __toString(){
			return "IdRuta: " . $this->idRuta . 
				" AliasRuta: " . $this->aliasRuta . 
				" TiempoPromedio: " . $this->tiempoPromedio;
		}
		public static function listarRuta($objConexion){
			$sql="SELECT IDRUTA,ALIASRUTA
				  FROM RUTA";
		     $stid=$objConexion->ejecutarInstruccion($sql);

				$rutas=array();
				while($ruta=$objConexion->obtenerFila($stid)){
				  $rutas[]=$ruta;

				}
			return $rutas;
		}
	}
?>