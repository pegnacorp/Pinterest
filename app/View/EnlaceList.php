<?php

class EnlaceList extends View{
	function listarEnlaces($enlaces){
		$i = 0;
		while(count($enlaces)> $i){
			$enlaceActual = $enlaces[$i];

			$id = $enlaceActual->id;
			echo $enlaceActual->nombre;
			echo "<a href='../user/modify/?id=".$id."'>Modificar usuario</a>";
			echo " <a href='../user/delete/?id=".$id."'>Eliminar usuario</a><br>";
			echo "--------------------------------<br/>";
			$i++;
		}
		echo "<a href='../add/?d'>Nuevo usuario</a>";
	}
}
?>