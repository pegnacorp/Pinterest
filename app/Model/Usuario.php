<?php

class Usuario extends ActiveRecord{
	public $nombre;
	public $correo;
	public $clave;

	function __construct($nombre,$correo,$clave){
		parent::__construct();
		$this->nombre = $nombre;
		$this->correo = $correo;
		$this->clave = $clave;
	}
}

?>