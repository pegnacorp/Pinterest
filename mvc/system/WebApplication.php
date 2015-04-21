<?php
include("/mvc/Configuracion.php");
include("/mvc/Autoloader.php");
include("/mvc/ManejadorUrl.php");
include("/mvc/system/SystemUser.php");
include("/mvc/system/ManoDeDios.php");
include_once("/mvc/system/Controller.php");

class WebApplication{
	public $config;
	public $manejadorUrl;
	public $user;
	public $db;
	public $controller;
	public $autoload;

	function __construct(){
		$this->autoload  = new Autoloader();
		$this->instancia = Configuracion::getInstance();
		$this->manejadorUrl = new ManejadorUrl();
		$this->systemUser = new systemUser();
	}

	function start(){
		$nombreControlador =  $this->manejadorUrl->getControlador();
		$accion = $this->manejadorUrl->getAccion();
		$parametros = $this->manejadorUrl->getParametros();
		if(($nombreControlador==null)||($accion==null)){
			echo "No existe la dirección indicada";
		}
		$argumentos  = array($accion);
		$manoDeDios = new ManoDeDios();
		//La mano de Dios usa la función reflexión, para inicializar clases con solo conocer el nombre y su argumentos
		$controlador = $manoDeDios->darVida($nombreControlador."Controller",$argumentos);
	}
}
?>