<?php
include ('funciones/ConectarBD.php');
include ('funciones/VerificarDatos.php');

$conexion;
function conectarBD(){
	global $conexion;
	$conexion = conectar();
	
}
function verificarLosDatos($datosUsuario){
	global $conexion;
	$resultados = verificarDatos($conexion, $datosUsuario);
	return $resultados;
}

?>