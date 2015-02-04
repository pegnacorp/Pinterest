<link href="estilos/estilo.css" rel="stylesheet" type="text/css" />
<?php
include ('php/DesplegarEnlaces.php');
$idUsuario = 1;//Para la prueba
$idLista = darIdPrimeraListaUsuario($idUsuario);
$enlaces = darEnlaceDeListaPorId($idLista);
dibujarEnlacesTotales($enlaces);
?>
