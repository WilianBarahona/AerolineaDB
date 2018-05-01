<?php

	class Vuelo{

		private $idVuelo;
		private $fechaHoraPartida;
		private $fechaHoraLLegada;
		private $Avion_idAvion;
		private $Ruta_idRuta;
		private $TipoVuelo_idTipoVuelo;

		public function __construct($idVuelo=null,
					$fechaHoraPartida=null,
					$fechaHoraLLegada=null,
					$Avion_idAvion=null,
					$Ruta_idRuta=null,
					$TipoVuelo_idTipoVuelo=null){
			$this->idVuelo = $idVuelo;
			$this->fechaHoraPartida = $fechaHoraPartida;
			$this->fechaHoraLLegada = $fechaHoraLLegada;
			$this->Avion_idAvion = $Avion_idAvion;
			$this->Ruta_idRuta = $Ruta_idRuta;
			$this->TipoVuelo_idTipoVuelo = $TipoVuelo_idTipoVuelo;
		}
		public function getIdVuelo(){
			return $this->idVuelo;
		}
		public function setIdVuelo($idVuelo){
			$this->idVuelo = $idVuelo;
		}
		public function getFechaHoraPartida(){
			return $this->fechaHoraPartida;
		}
		public function setFechaHoraPartida($fechaHoraPartida){
			$this->fechaHoraPartida = $fechaHoraPartida;
		}
		public function getFechaHoraLLegada(){
			return $this->fechaHoraLLegada;
		}
		public function setFechaHoraLLegada($fechaHoraLLegada){
			$this->fechaHoraLLegada = $fechaHoraLLegada;
		}
		public function getAvion_idAvion(){
			return $this->Avion_idAvion;
		}
		public function setAvion_idAvion($Avion_idAvion){
			$this->Avion_idAvion = $Avion_idAvion;
		}
		public function getRuta_idRuta(){
			return $this->Ruta_idRuta;
		}
		public function setRuta_idRuta($Ruta_idRuta){
			$this->Ruta_idRuta = $Ruta_idRuta;
		}
		public function getTipoVuelo_idTipoVuelo(){
			return $this->TipoVuelo_idTipoVuelo;
		}
		public function setTipoVuelo_idTipoVuelo($TipoVuelo_idTipoVuelo){
			$this->TipoVuelo_idTipoVuelo = $TipoVuelo_idTipoVuelo;
		}
		public function __toString(){
			return "IdVuelo: " . $this->idVuelo . 
				" FechaHoraPartida: " . $this->fechaHoraPartida . 
				" FechaHoraLLegada: " . $this->fechaHoraLLegada . 
				" Avion_idAvion: " . $this->Avion_idAvion . 
				" Ruta_idRuta: " . $this->Ruta_idRuta . 
				" TipoVuelo_idTipoVuelo: " . $this->TipoVuelo_idTipoVuelo;
		}

		public static function mostrarTodos($objConexion){
			$sql="
				SELECT *
				FROM VUELO V
				INNER JOIN AVION AV ON V.AVION_IDAVION=AV.IDAVION
				INNER JOIN MARCA M ON AV.MARCA_IDMACA=M.IDMACA
				INNER JOIN MODELO MD ON AV.MODELO_IDMODELO=MD.IDMODELO
				INNER JOIN TIPOVUELO TV ON V.TIPOVUELO_IDTIPOVUELO=TV.IDTIPOVUELO
				INNER JOIN RUTA R ON V.RUTA_IDRUTA=R.IDRUTA

				";

			$stid=$objConexion->ejecutarInstruccion($sql);

			$vuelos=array();
			while($vuelo=$objConexion->obtenerFila($stid)){
			  $vuelos[]=$vuelo;

			}
		return $vuelos;

		}
	}
?>