<?php
class EnlaceForm extends View{
	
	function mostrarFormulario(){
		$configuracion = Configuracion::getInstance();
		$informacionConfiguracion = $configuracion->loadConfig();	
		echo "<h2>Nuevo Enlace</h2>
		<form action='".$informacionConfiguracion["direccionRaiz"]."index.php/Enlace/add'  method='post'>
			<table>
				<tr>  
					<td><label for='nombre'>Nombre:</label></td>
					<td><input type = 'text' id='nombre' class = 'input' name ='nombre' placeholder='Nombre'></td>
				</tr>
				<tr>
					<td>&nbsp;</td>
				</tr>
				<tr>
					<td><label for='direccion'>URL:</label></td>
					<td><input type = 'text' id='direccion' class = 'input' name ='direccion' placeholder='URL'></td>
				</tr>
			</table>
			<br>
			<input type = 'submit' value='Guardar' >
		</form>";
	}
	function mostrarFormularioLlenado($enlace){
	$configuracion = Configuracion::getInstance();
	$informacionConfiguracion = $configuracion->loadConfig();	
		if(strcasecmp($enlace->nombre,"")==0)
			echo "<h2>Enlace: ".$enlace->direccion."</h2>";
		else
			echo "<h2>Enlace: ".$enlace->nombre."</h2>";
		echo"<form action='".$informacionConfiguracion["direccionRaiz"]."index.php/Enlace/modify/?id=".$enlace->id."'  method='post'>
			<table>
				<tr>
					<td><label for='nombre'>Nombre:</label></td>
					<td><input type = 'text' id='nombre' class = 'input' name ='nombre' placeholder='nombre' value='".$enlace->nombre."'></td>
				</tr>
				<tr>
					<td>&nbsp;</td>
				</tr>
				<tr>
					<td><label for='direccion'>URL:</label></td>
					<td><input type = 'text' id='direccion' class = 'input' name ='direccion' placeholder='direccion' value='".$enlace->direccion."'></td>
				</tr>
			</table>
			<br>
			<input type = 'submit' value='Guardar' >
		</form>";
	}
}
?>