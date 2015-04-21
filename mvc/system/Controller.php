<?php
	class Controller{
		protected $accessControl;

		function __construct($action){
			$this->runAction($action);
		}

		function runAction($action){
			$accionExistente = false;
			$reglasDeAcceso = $this->darReglasDeAcceso();
			foreach($reglasDeAcceso as $regla) {
				foreach ($regla as $rol => $acciones) {
					//Si el rol puede usar cierta función
					foreach ($acciones as $accion) {
						if($accion===$action){
							$accionExistente = true;
							break;
						}
					}
				}
			}
			if($accionExistente === true){
				$this->$action();
			}
		}
		function redirect($url){
			
		}
	}
?>