<?php 
include ('FuncionesBD.php');

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
function dibujarEnlacesTotales($enlaces){

	for ($i=0; $i < count($enlaces); $i++) { 
		$enlace = $enlaces[$i];
		$nombre= $enlace["Nombre"];
		$direccion = $enlace["Direccion"];

		echo"<div id='enlace'>";
		echo "<b><a href='".$direccion."'>".$nombre."</b><br>";
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
?>
