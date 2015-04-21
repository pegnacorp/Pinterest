<?php
	class Configuracion{
	private static $instancia;
	public $params;
	private function __construct(){
   }

   public static function getInstance(){
      if (!self::$instancia instanceof self)
      {
         self::$instancia = new self;
      }
      return self::$instancia;
   }

	function loadConfig(){
		$arregloIni = parse_ini_file("/../app/Config/configuracion.ini");
		return $arregloIni;
	}
	}
?>