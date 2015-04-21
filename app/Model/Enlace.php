<?php
	/**
	* 			
	*/
	class Enlace extends ActiveRecord{
		public $id;
		public $nombre;
		public $direccion;
		public $idUsuario;
		
		function __construct($id,$nombre,$direccion,$idUsuario){
			$this->id = $id;
			$this->nombre = $nombre;
			$this->direccion = $direccion;
			$this->idUsuario = $idUsuario;
		}
	}
?>