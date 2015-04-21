
<?php
class ManejadorURL{
	public $url;
	public $controller;
	public $action;
	public $params;

	function __construct(){
		$this->procesarUrl();
	}

	function procesarUrl(){
		$this->url = "miweb.com/index.php/user/new/?ejemplo=hola";
		$url = $url="http://".$_SERVER['HTTP_HOST'].":".$_SERVER['SERVER_PORT'].$_SERVER['REQUEST_URI'];
		$array = parse_url($url);
		$elementosPath  = explode("index.php", $url);
		$elementosQuery = preg_split ("/[\/]+/", $elementosPath[1]);
		$this->controller = $elementosQuery[1];


		if(isset($elementosQuery[2])==true){
			$this->action = $elementosQuery[2];
		}

		if(isset($array['query'])==true){
			parse_str($array['query'],$this->params);
		}
	}
	
	function getPeticion(){
		return $this->url;
	}
	function getControlador(){
		return $this->controller;
	}
	function getAccion(){
		return $this->action;
	}
	function getParametros(){
		return $this->params;
	}
}


?>