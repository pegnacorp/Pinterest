<?php
include ('php/ConectarBD.php');
include ('php/IngresarUsuario.php');

$conexion;
function conectarBD(){
	global $conexion;
	$conexion = conectar();
	
}

function agregarUnUsuario($datosUsuario){
	$usuarioAgregado = false;
	global $conexion;
	if (agregarUsuario($conexion, $datosUsuario)) {
		$usuarioAgregado = true;
	}else{
		$usuarioAgregado = false;
	}


	return $usuarioAgregado;
}

?>