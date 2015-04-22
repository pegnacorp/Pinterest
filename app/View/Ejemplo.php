<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<link href="estilo.css" rel="stylesheet" type="text/css" />
</head>
<body>

<?php
	/**
	* 
	*/
	class ejemplo
	{
		
		function __construct()
		{
			$this->dibujarEnlacesTotales();
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
	function dibujarEnlacesTotales(){

		echo "<div id='enlace'>Ejemplo</div>";
		
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