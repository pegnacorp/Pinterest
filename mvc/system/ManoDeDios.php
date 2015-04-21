<?php
	class ManoDeDios{

		function darVida($nombreClase,$argumentos){
			try {
				$clase = new ReflectionClass($nombreClase);
				$objeto = $clase->newInstanceArgs($argumentos);
				return $objeto;
				
			} catch (ReflectionException $exception) {
				echo "No existe la dirección indicada";
			}
		}
	}
?>