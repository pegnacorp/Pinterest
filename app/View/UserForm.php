<?php

class UserForm extends View{
	function mostrarFormulario(){
		$configuracion = Configuracion::getInstance();
		$informacionConfiguracion = $configuracion->loadConfig();
		echo "
		<form action='".$informacionConfiguracion["direccionRaiz"]."index.php/Usuario/add'  method='post'>
			<input type = 'text' id='nombre' class = 'input' name ='nombre' placeholder='nombre'>
			<br>
			<input type = 'text' id='correo' class = 'input' name ='correo' placeholder='correo'>
			<br>
			<input type = 'password' id='clave' class = 'input' name ='clave' placeholder='Contraseña'>
			<br>
			<input type = 'submit' value='ingresar' >
		</form>";
	}

	function mostrarFormularioLlenado($usuario){
		$id = $usuario->id;
		$nombre = $usuario->firstName;
		$apellido = $usuario->lastName;
		$nombreUsuario = $usuario->user;
		$clave = $usuario->password;
		echo "<form action='".$informacionConfiguracion["direccionRaiz"]."index.php/User/modify/?id=".$id."'  method='post'>
			<input type = 'text' id='nombre' class = 'input' name ='nombre' placeholder='nombre' value='".$nombre."'>
			<br>
			<input type = 'text' id='apellido' class = 'input' name ='apellido' placeholder='apellido' value='".$apellido."'>
			<br>
			<input type = 'text' id='nombreUsuario' class = 'input' name ='nombreUsuario' placeholder='nombre de usuario' value='".$nombreUsuario."'>
			<br>
			<input type = 'password' id='clave' class = 'input' name ='clave' placeholder='Contraseña' value='".$clave."'>
			<input type = 'submit' value='ingresar' >
		</form>";
	}
}
?>
