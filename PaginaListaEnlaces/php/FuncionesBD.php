<?php
include ('ConectarBD.php');

//Id de la primera lista de un usuario
function darIdPrimeraListaUsuario($idUsuario){
	$query="SELECT * FROM lista where idUsuario=".$idUsuario;
	$conexion = conectar();
	$result=mysqli_query($conexion,$query);
	$row = mysqli_fetch_array($result);
	$idLista= $row["idLista"];
	mysqli_free_result($result);
	mysqli_close($conexion);
	return $idLista;
}

function darEnlaceDeListaPorId($idLista){
	$query="SELECT * FROM enlace where idLista=".$idLista;
	$conexion = conectar();
	$result=mysqli_query($conexion,$query);
	$enlacesDeUsuario;
	$contador = 0;
	while ($row = mysqli_fetch_array ($result))
	{
	   	$enlacesDeUsuario[$contador] = $row;
	   	$contador = $contador + 1;
	}
	mysqli_free_result($result);
	mysqli_close($conexion);
	    return $enlacesDeUsuario;
}

?>