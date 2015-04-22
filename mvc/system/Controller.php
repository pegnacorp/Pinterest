<?php
	class Controller{
		protected $accessControl;

		function __construct($action){
			$this->runAction($action);
		}

		function runAction($action){
			$accionExistente = false;
			$reglasDeAcceso = $this->darReglasDeAcceso();
			session_start();
			$sistemaUsuario = new SystemUser();
			$sesionAbierta = $sistemaUsuario->estaLaSesionAbierta();
			foreach($reglasDeAcceso as $regla) {
				foreach ($regla as $rol => $acciones) {
					foreach ($acciones as $accion) {
						if($accion===$action){
							if ($rol == "admin") {
								if ($sesionAbierta == true) {
									$accionExistente = true;
									echo ".";
									break;
								}else{
									echo "No tienes derecho";
									header ("Location: /../Proyectos/Pontetium/index.php/usuario/autenticar/?d");
									break;

								}
							}else{
								$accionExistente = true;
								break;
							}
						}
					}
				}
			}
			$objeto="";

			if($accionExistente === true){
				$objeto = $this->$action();
			}

		}
		function redirect($url){
			
		}
	}
?>