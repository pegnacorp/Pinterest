<?php  
include_once("config.inc.php"); 
include_once("acceder_base_datos.php");

function validarSesion(){
if(!isset($_SESSION["cidusuario"])){
	$cdestino = "Location:index.php";
	header($cdestino);
	exit();	
	} 
}

function iniciarSesion($cidlogin){

session_start();
$_SESSION["cidusuario"]= $cidlogin;
}

function obtenerInfoSesion(){

	$pconexion = abrirConexion();
   	seleccionarBaseDatos($pconexion);
	$idusuario = $_SESSION["cidusuario"];
	
	$dquery="SELECT usuario.id_rol, usuario.nick, usuario.id_usuario, usuario.nombre, usuario.apellido, usuario.direccion FROM usuario WHERE usuario.id_usuario = '$idusuario'";
	$rolArray=extraerRegistro($pconexion,$dquery);
	
	return $rolArray;		
	
	}
?>
