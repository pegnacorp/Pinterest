<?php

class Usuario extends ActiveRecord{
	public $id;
	public $nombre;
	public $correo;
	public $clave;

	function __construct($id,$nombre,$correo,$clave){
		parent::__construct();
		$this->id = $id;
		$this->nombre = $nombre;
		$this->correo = $correo;
		$this->clave = $clave;
	}
}

?>