<?php
	foreach ($enlaces as $enlace)
	{
		$id = $enlace->idEnlace;
	   echo $enlace->Nombre; 
	   if($id_usuario != $id_usuario_lista){
	   		echo "<a href=".base_url()."index.php/enlace/marcar_favorito?id=".$id.">Marcar favorito</A>";
	   }
	   echo "<br>";   
	   echo $enlace->Direccion;
	   echo "<br>";  
	   //echo "<a href=enlace/eliminar?id=".$id.">Eliminar</A>";
	   echo "<a href=".base_url()."index.php/enlace/eliminar?id=".$id.">Eliminar</A>";
	   echo "<a href=".base_url()."index.php/enlace/modificar?id=".$id.">Modificar</A>";
	   echo "<br>"; 
	   echo "--------------------";
	   echo "<br>";  
	}
?>
