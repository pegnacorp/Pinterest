<link href="estilo.css" rel="stylesheet" type="text/css" />
<?php 
$idUsuario = 1;//Para la prueba
$idLista = darIdPrimeraListaUsuario($idUsuario);
$enlaces = darEnlaceDeListaPorId($idLista);
dibujarEnlacesTotales($enlaces);



//Aun no se ha implementado
function darListasUsuario($idUsuario){
	$host = "localhost";
	$nombreUsario = "root";
	$claveUsuario = "";
	$nombreBaseDatos = "pinterstellar";
	$link = mysql_connect($host, $nombreUsario, $claveUsuario) 
	or die("No se puede contectar con la base de datos");
	   $tablename="enlace";
	   $query="SELECT * FROM lista where idUsuario=".$idUsuario;
	   /*INNER JOIN enlace ON enlace.idLista =lista.idLista where "; */
	   $result=mysql_db_query ($nombreBaseDatos, $query, $link);
		while ($row = mysql_fetch_array ($result))
	   {
	   	  echo $row["Nombre"]."<br>";
	    }
	    mysql_free_result($result);
}
//Id de la primera lista de un usuario
function darIdPrimeraListaUsuario($idUsuario){
	$host = "localhost";
	$nombreUsario = "root";
	$claveUsuario = "";
	$nombreBaseDatos = "pinterstellar";
	$link = mysql_connect($host, $nombreUsario, $claveUsuario) 
	or die("No se puede contectar con la base de datos");
	   $tablename="enlace";
	   $query="SELECT * FROM lista where idUsuario=".$idUsuario;
	   $result=mysql_db_query ($nombreBaseDatos, $query, $link);
		$row = mysql_fetch_array ($result);
	   	$idLista= $row["idLista"];
	    mysql_free_result($result);
	    return $idLista;
}
function darEnlaceDeListaPorId($idLista){
	$host = "localhost";
	$nombreUsario = "root";
	$claveUsuario = "";
	$nombreBaseDatos = "pinterstellar";
	$link = mysql_connect($host, $nombreUsario, $claveUsuario) 
	or die("No se puede contectar con la base de datos");
	   $tablename="enlace";
	   $query="SELECT * FROM enlace where idLista=".$idLista;
	   $result=mysql_db_query ($nombreBaseDatos, $query, $link);
	   $enlacesDeUsuario;
	   $contador = 0;
		while ($row = mysql_fetch_array ($result))
	   {
	   	$enlacesDeUsuario[$contador] = $row;
	   	$contador = $contador + 1;
	    }
	    mysql_free_result($result);
	    return $enlacesDeUsuario;
}
//Solo funcional para youtube
function insertarVideo($direccion){
	echo"<object width='300' height='200'data='".$direccion."'></object><br>";

}
function insertarImagen($direccion){
	echo"<img src='".$direccion."'>";
}
function esVideo($direccion){
	if(strpos($direccion,"youtube")){
		return true;
	}else{
		return false;
	}
}
function dibujarEnlacesTotales($enlaces){
	for ($i=0; $i < count($enlaces); $i++) { 
		$enlace = $enlaces[$i];
		$nombre= $enlace["Nombre"];
		$direccion = $enlace["Direccion"];
		echo"<div id='enlace'>";
		echo $nombre . "<br>";
		if((esVideo($direccion))=== true){
	   	  	insertarVideo($direccion);
	   	}else{
	   	  	insertarImagen($direccion);
	   	}

	   	echo "</div>";
	}
	
}
?>
