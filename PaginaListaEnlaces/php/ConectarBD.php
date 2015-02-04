<?php

function conectar(){
$host = "localhost";
	$nombreUsario = "root";
	$claveUsuario = "";
	$nombreBaseDatos = "pinterstellar";
	$conexion = mysqli_connect($host, $nombreUsario, $claveUsuario, $nombreBaseDatos);
	return $conexion;
}

?>