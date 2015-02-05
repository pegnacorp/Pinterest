<?php 
include ('FuncionesBD.php');
//include('../GestionEnlace/FuncionesBD');

//Solo funcional para youtube
function insertarVideo($direccion){
	echo"<object id='video' data='".$direccion."'></object><br>";
}
function insertarImagen($direccion){
	echo"<img id='imagen' src='".$direccion."'>";
}
function esVideo($direccion){
	if(strpos($direccion,"youtube")){
		return true;
	}else{
		return false;
	}
}
function esImagen($direccion){
	if(strpos($direccion,".bmp")|| strpos($direccion,".png") || strpos($direccion,".jpg")){
		return true;
	}else{
		return false;
	}
}
function dibujarEnlacesTotales($enlaces,$idUsuario){

	for ($i=0; $i < count($enlaces); $i++) { 
		$enlace = $enlaces[$i];
		$nombre= $enlace["Nombre"];
		$direccion = $enlace["Direccion"];
		$id=$enlace["idEnlace"];
		$idSesion = 2;
		echo"<div id='enlace'>";
		echo "<b><a href='".$direccion."'>".$nombre."</a><br>";
		if($idUsuario == $idSesion){
			echo"<img id='estrellaApagada' src='http://cdn.flaticon.com/png/256/53415.png' onMouseOver='prenderEstrellaEnlace();' onMouseOut='apagarEstrellaEnlace();'>";
		}else{
			echo"<form name='id' method='post' action='../GestionEnlace/EliminarEnlace.php'>
			<input type='image' id='imagenEliminar' value='".$id."' src='http://img1.wikia.nocookie.net/__cb20101009133122/es.pokemon/images/f/f4/Icono_de_borrar.png'/>";
			echo"<input type='hidden' name='id' value='".$id."' />";
			echo "</form>";
		}
		//echo"<img id='imagenEliminar' src='http://img1.wikia.nocookie.net/__cb20101009133122/es.pokemon/images/f/f4/Icono_de_borrar.png'>";
		if((esVideo($direccion))=== true){
	   	  	insertarVideo($direccion);
	   	}else{
	   		if(esImagen($direccion) === true){
	   			insertarImagen($direccion);
	   		}
	   		else{
	   			echo"<img id='imagenOtrosEnlaces' src='http://2.bp.blogspot.com/-PlEakBT5MVQ/UPceQaVjeyI/AAAAAAAAC2w/mQkaDMlsW30/s1600/asd.png'>";
	   		}
	   	}
	   	echo "<div id='informacion'>";
		echo "</div>";
	   	echo "</div>";
	}
	
}
function dibujarDescripcionUsuario($nombre){
	echo"<div id='descripcionUsuario'>";
	echo "<h1>".$nombre."</h1>";
	echo"<img id='estrellaApagadaPerfil' src='http://cdn.flaticon.com/png/256/53415.png' >";
	echo"<img id='estrellaPrendidaPerfil' src='http://b.dryicons.com/images/icon_sets/colorful_stickers_part_2_icons_set/png/128x128/favorite.png'>";
	echo "</div>";
}
?>

</script>
