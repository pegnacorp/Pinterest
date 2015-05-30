<?php
	foreach ($enlaces as $enlace)
	{
	   echo $enlace->Nombre; 
	   echo "<br>";   
	   echo $enlace->Direccion;
	   echo "<br>"; 
	   $id = $enlace->idEnlace; 
	   //echo "<a href=enlace/eliminar?id=".$id.">Eliminar</A>";
	   echo "<a href=".base_url()."index.php/enlace/eliminar?id=".$id.">Eliminar</A>";
	   echo "<a href=".base_url()."index.php/enlace/modificar?id=".$id.">Modificar</A>";
	   echo "<br>"; 
	   echo "--------------------";
	   echo "<br>";  
	}
?>
