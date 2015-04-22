
<?php
	class VistaAutenticar extends View{
		function mostrarFormulario(){
			echo "
			<form action= '/Proyectos/Pontetium/index.php/Usuario/autenticar/?d'  method='post'>
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


