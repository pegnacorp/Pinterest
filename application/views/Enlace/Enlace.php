<div class="padding">


	<br>

</div>
    <div class="panel panel-default">

	<div class="panel-body">
	   	<p class="lead">Nombre de la lista: <?php echo $lista->Nombre;?></p>
      	<h4>Descripcion: <?php echo $lista->Descripcion	;?></h4>
	</div>
	</div>
	<?php
$id_usuario = $id_usuario_logueado; //Modificar
if(( $lista->idUsuario ==$id_usuario)){
?>
	<?php $this->load->view("enlace/CrearEnlaceEnLista");

	}?>
    <div class="centrar-columna">
        <!-- content -->                      
      	<div class="row">
	<?php if(( $lista->Privacidad === "publico" || ($lista->Privacidad === "privado" &&  $lista->idUsuario ==$id_usuario))){ 
	foreach ($enlaces as $enlace){
	?>

	<div class="panel panel-default">
	<div class="panel-body">
	<?php $id = $enlace->idEnlace;?>
	<?php  echo $enlace->Nombre;?>        <?php
	   echo "<a href=".base_url()."index.php/enlace/eliminar?id=".$id.">Eliminar</A>";
	   echo "<a href=".base_url()."index.php/enlace/modificar?id=".$id.">Modificar</A>";

	   ?>

		
		<?php

	   $direccion = $enlace->Direccion;
	   	if((esVideo($direccion))=== true){
	   	  	$url_video = hacer_embebible_video_youtube($direccion);
	   	  	echo"<object class='video' data='".$url_video."'></object><br>";
	   	}else{
	   		if(esImagen($direccion) === true){
	   			echo"<img x src='".$direccion."' class='img-responsive'>";
	   		}
	   		else{
	   			echo"<img class='imagen' src='http://2.bp.blogspot.com/-PlEakBT5MVQ/UPceQaVjeyI/AAAAAAAAC2w/mQkaDMlsW30/s1600/asd.png' class='img-responsive'>";
	   		}
	   	}
	   	if($id_usuario != $id_usuario_lista){
	   		echo "<a href=".base_url()."index.php/enlace/marcar_favorito?id=".$id.">Marcar favorito</A>";
	   }
	   ?>
	   <ul class="list-group">
            <li class="list-group-item">Nombre: <?php echo $enlace->Nombre;?></li>
            <li class="list-group-item">Dirección: <?php echo $enlace->Direccion;?></li>
        </ul>

	        </p>
          </div>
        </div>
     	<?php

	}

	}else{
		echo("Es privado");
	}


?>

		</div>
	</div>

</div>
<?php 
	function hacer_embebible_video_youtube($url){
		$direccion=explode("www.youtube.com/watch?v=", $url);
	   	$id_video = $direccion[1];
	   	$url_nueva = "https://www.youtube.com/embed/".$id_video;
	   	return $url_nueva;
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

?>

	