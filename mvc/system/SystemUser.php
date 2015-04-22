<?php
	class SystemUser{		
		private $id;
		private $sesionAbierta;

		function crearSesion($id){
			session_start();
			$_SESSION['id'] = $id;
		}
		public function estaLaSesionAbierta(){
			return isset($_SESSION['id']) == true;
		}
		function cerrarSesion(){
        	session_destroy();
		}
	}
?>