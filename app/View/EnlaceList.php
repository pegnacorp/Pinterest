<!DOCTYPE html>
<html>
<head>
	<style type="text/css"><?php include("estilo.css") ?></style>
</head>
<body>

<?php
class EnlaceList extends View{
	

	function desplegarVistaEnlaces($enlaces){
		echo "<b><a href='".$direccion."'>".$nombre."</a><br>";
		listarEnlaces($enlaces);
	}
	function listarEnlaces($enlaces){
		$i = 0;
				$idUsuario = 2;//Para la prueba
				if($enlaces === 0){
					echo "No hay enlaces";
				}else{
					$this->dibujarEnlacesTotales($enlaces,$idUsuario);
			}
		}
	
	//Solo funcional para youtube
	function insertarVideo($direccion){
		echo"<object id='video' data='".$direccion."'></object><br>";
	}
	function insertarImagen($direccion){
		echo"<img id='imagen' src='".$direccion."' WIDTH=178 HEIGHT=180>";
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
			$nombre= $enlace->nombre;
			$direccion = $enlace->direccion;
			$id=$enlace->id;
			$idSesion = 2;
			echo"<div id='enlace'>";
			echo "<b><a href='".$direccion."'>".$nombre."</a><br>";
			echo "<a href='../modify/?id=".$id."'> Modificar enlace</a>";
			echo " <a href='../delete/?id=".$id."'> Eliminar enlace</a><br>";
			
			//echo"<img id='imagenEliminar' src='http://img1.wikia.nocookie.net/__cb20101009133122/es.pokemon/images/f/f4/Icono_de_borrar.png'>";
			if(($this->esVideo($direccion))=== true){
		   	  	$this->insertarVideo($direccion);
		   	}else{
		   		if($this->esImagen($direccion) === true){
		   			$this->insertarImagen($direccion);
		   		}
		   		else{
		   			echo"<img id='imagenOtrosEnlaces' src='http://2.bp.blogspot.com/-PlEakBT5MVQ/UPceQaVjeyI/AAAAAAAAC2w/mQkaDMlsW30/s1600/asd.png' WIDTH=150 HEIGHT=160>";
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

}
?>
</body>
</html>