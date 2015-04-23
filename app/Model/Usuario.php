<?php

class Usuario extends ActiveRecord{
	public $idUsuario;
	public $nombre;
	public $correo;
	public $clave;

	function __construct($idUsuario, $nombre,$correo,$clave){
		parent::__construct();
		$this->idUsuario = $idUsuario;
		$this->nombre = $nombre;
		$this->correo = $correo;
		$this->clave = $clave;
	}
}

?>