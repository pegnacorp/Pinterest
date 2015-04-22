<?php

class Enlace extends ActiveRecord{
	public $idEnlace;
	public $nombre;
	public $direccion;
	public $idUsuario;

	function __construct($nombre,$direccion,$idUsuario){
		parent::__construct();
		$this->nombre = $nombre;
		$this->direccion = $direccion;
		$this->idUsuario = $idUsuario;
	}
}

?>