<?php

	class Persona{

		private $idPersona;
		private $pNombre;
		private $sNombre ;
		private $pApellido;
		private $sApellido;
		private $direccion;
		private $correo;
		private $password;
		private $fechaNacimiento;
		private $estadoCuenta;
		private $TipoCuenta;
		private $fechaHoraRegistro;
		private $EstadoCivil_idEstadoCivil;
		private $Genero_idGenero;
		private $Pais_idPais;

		public function __construct($idPersona,
					$pNombre,
					$sNombre ,
					$pApellido,
					$sApellido,
					$direccion,
					$correo,
					$password,
					$fechaNacimiento,
					$estadoCuenta,
					$TipoCuenta,
					$fechaHoraRegistro,
					$EstadoCivil_idEstadoCivil,
					$Genero_idGenero,
					$Pais_idPais){
			$this->idPersona = $idPersona;
			$this->pNombre = $pNombre;
			$this->sNombre  = $sNombre ;
			$this->pApellido = $pApellido;
			$this->sApellido = $sApellido;
			$this->direccion = $direccion;
			$this->correo = $correo;
			$this->password = $password;
			$this->fechaNacimiento = $fechaNacimiento;
			$this->estadoCuenta = $estadoCuenta;
			$this->TipoCuenta = $TipoCuenta;
			$this->fechaHoraRegistro = $fechaHoraRegistro;
			$this->EstadoCivil_idEstadoCivil = $EstadoCivil_idEstadoCivil;
			$this->Genero_idGenero = $Genero_idGenero;
			$this->Pais_idPais = $Pais_idPais;
		}
		public function getIdPersona(){
			return $this->idPersona;
		}
		public function setIdPersona($idPersona){
			$this->idPersona = $idPersona;
		}
		public function getPNombre(){
			return $this->pNombre;
		}
		public function setPNombre($pNombre){
			$this->pNombre = $pNombre;
		}
		public function getSNombre (){
			return $this->sNombre ;
		}
		public function setSNombre ($sNombre ){
			$this->sNombre  = $sNombre ;
		}
		public function getPApellido(){
			return $this->pApellido;
		}
		public function setPApellido($pApellido){
			$this->pApellido = $pApellido;
		}
		public function getSApellido(){
			return $this->sApellido;
		}
		public function setSApellido($sApellido){
			$this->sApellido = $sApellido;
		}
		public function getDireccion(){
			return $this->direccion;
		}
		public function setDireccion($direccion){
			$this->direccion = $direccion;
		}
		public function getCorreo(){
			return $this->correo;
		}
		public function setCorreo($correo){
			$this->correo = $correo;
		}
		public function getPassword(){
			return $this->password;
		}
		public function setPassword($password){
			$this->password = $password;
		}
		public function getFechaNacimiento(){
			return $this->fechaNacimiento;
		}
		public function setFechaNacimiento($fechaNacimiento){
			$this->fechaNacimiento = $fechaNacimiento;
		}
		public function getEstadoCuenta(){
			return $this->estadoCuenta;
		}
		public function setEstadoCuenta($estadoCuenta){
			$this->estadoCuenta = $estadoCuenta;
		}
		public function getTipoCuenta(){
			return $this->TipoCuenta;
		}
		public function setTipoCuenta($TipoCuenta){
			$this->TipoCuenta = $TipoCuenta;
		}
		public function getFechaHoraRegistro(){
			return $this->fechaHoraRegistro;
		}
		public function setFechaHoraRegistro($fechaHoraRegistro){
			$this->fechaHoraRegistro = $fechaHoraRegistro;
		}
		public function getEstadoCivil_idEstadoCivil(){
			return $this->EstadoCivil_idEstadoCivil;
		}
		public function setEstadoCivil_idEstadoCivil($EstadoCivil_idEstadoCivil){
			$this->EstadoCivil_idEstadoCivil = $EstadoCivil_idEstadoCivil;
		}
		public function getGenero_idGenero(){
			return $this->Genero_idGenero;
		}
		public function setGenero_idGenero($Genero_idGenero){
			$this->Genero_idGenero = $Genero_idGenero;
		}
		public function getPais_idPais(){
			return $this->Pais_idPais;
		}
		public function setPais_idPais($Pais_idPais){
			$this->Pais_idPais = $Pais_idPais;
		}
		public function __toString(){
			return "IdPersona: " . $this->idPersona . 
				" PNombre: " . $this->pNombre . 
				" SNombre : " . $this->sNombre  . 
				" PApellido: " . $this->pApellido . 
				" SApellido: " . $this->sApellido . 
				" Direccion: " . $this->direccion . 
				" Correo: " . $this->correo . 
				" Password: " . $this->password . 
				" FechaNacimiento: " . $this->fechaNacimiento . 
				" EstadoCuenta: " . $this->estadoCuenta . 
				" TipoCuenta: " . $this->TipoCuenta . 
				" FechaHoraRegistro: " . $this->fechaHoraRegistro . 
				" EstadoCivil_idEstadoCivil: " . $this->EstadoCivil_idEstadoCivil . 
				" Genero_idGenero: " . $this->Genero_idGenero . 
				" Pais_idPais: " . $this->Pais_idPais;
		}
	}
?>