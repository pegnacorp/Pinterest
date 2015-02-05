<link href="estilos/estilo.css" rel="stylesheet" type="text/css" />
<?php session_start();
include ('php/DesplegarEnlaces.php');

if (isset($_SESSION['idUsuario']) === false) {
		header ("Location: ../index.php");

}
else{
	$idUsuario = $_SESSION['idUsuario'];
	//$idUsuario = 1;//Para la prueba
	$idLista = darIdPrimeraListaUsuario($idUsuario);
	$enlaces = darEnlaceDeListaPorId($idLista);
	dibujarEnlacesTotales($enlaces,$idUsuario);
}

?>

