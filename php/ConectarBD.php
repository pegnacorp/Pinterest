<?php
$conexion;

function conectar(){
$servername = "localhost";
$username = "root";
$password = "";

	try {
	    $conexion = new PDO("mysql:host=$servername;dbname=pinterstellar", $username, $password);	    
	    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);	    
	    }
	catch(PDOException $e)
	    {
	   
	    }

	return $conexion;

}

?>