<?php


function insertarBD($conexion, $tabla, $valores){
	//como son usuarios
	$nombreUsuario = $valores['nombre'];
	$correoUsuario = $valores['correo'];
	$contraseniaUsuario = $valores['contrasenia'];	
	$sql = "INSERT INTO $tabla (Nombre, Correo, Contrasena) VALUES ('$nombreUsuario', '$correoUsuario', '$contraseniaUsuario')";   
    $conexion->exec($sql);
}



?>