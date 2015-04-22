
<?php
	class VistaAutenticar extends View{
		function mostrarFormulario(){
				$configuracion = Configuracion::getInstance();
				$informacionConfiguracion = $configuracion->loadConfig();	
			echo "
			<form action= '".$informacionConfiguracion["direccionRaiz"]."index.php/Usuario/autenticar/?d'  method='post'>
				<input type = 'text' id='correo' class = 'input' name ='correo' placeholder='Indetificador'>
				<br>
				<input type = 'password' id='clave' class = 'input' name ='clave' placeholder='Contraseña'>
				</br>
				<input type = 'submit' value='ingresar' >
			</form>

			";
		}

	}
?>


