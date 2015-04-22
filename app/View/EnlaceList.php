<?php

class EnlaceList extends View{
	function listarEnlaces($enlaces){
		$i = 0;
		while(count($enlaces)> $i){
			$enlaceActual = $enlaces[$i];

			$id = $enlaceActual->id;
			echo $enlaceActual->nombre;
			echo "<a href='../Enlace/modify/?id=".$id."'> Modificar enlace</a>";
			echo " <a href='../Enlace/delete/?id=".$id."'> Eliminar enlace</a><br>";
			echo "--------------------------------<br/>";
			$i++;
		}
		echo "<a href='../Enlace/add'>Nuevo enlace</a>";
	}
}
?>