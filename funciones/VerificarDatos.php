<?php

function verificarDatos($conexion, $datosUsuario){
	$correoUsuario = $datosUsuario['correo'];
	$contraseniaUsuario = $datosUsuario['contrasenia'];
	$cuentaExiste = false;

	$sql = "SELECT Nombre FROM usuario WHERE Correo = '$correoUsuario' AND Contrasena = '$contraseniaUsuario'";
	$coincidencias = $conexion->query($sql);
	
	if ($coincidencias->num_rows > 0) {		
		$resultados['hayCoincidencias'] = true;
	}else{
		$resultados['hayCoincidencias'] = false;
	}
	
	$resultados['coincidencias'] = $coincidencias;

return $resultados;
}

?>