<?php
$conexion;

function conectar(){
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pinterstellar";

	// se crea la conexion.
$conexion = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conexion->connect_error) {
    die("Connection failed: " . $conexion->connect_error);
} 
	return $conexion;

}

?>