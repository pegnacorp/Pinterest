<?php

class EnlaceForm extends View{
	
	function mostrarFormulario(){
		echo "<h2>Nuevo Enlace</h2>
		<form action='/pinterestelar/index.php/Enlace/add'  method='post'>
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
		if(strcasecmp($enlace->Nombre,"")==0)
			echo "<h2>Enlace: ".$enlace->Direccion."</h2>";
		else
			echo "<h2>Enlace: ".$enlace->Nombre."</h2>";
		echo"<form action='/Proyectos/Ejemplo mvc/index.php/Link/modify/?id=".$enlace->idEnlace."'  method='post'>
			<table>
				<tr>
					<td><label for='nombre'>Nombre:</label></td>
					<td><input type = 'text' id='nombre' class = 'input' name ='nombre' placeholder='nombre' value='".$enlace->Nombre."'></td>
				</tr>
				<tr>
					<td>&nbsp;</td>
				</tr>
				<tr>
					<td><label for='direccion'>URL:</label></td>
					<td><input type = 'text' id='direccion' class = 'input' name ='direccion' placeholder='direccion' value='".$enlace->Direccion."'></td>
				</tr>
			</table>
			<br>
			<input type = 'submit' value='Guardar' >
		</form>";
	}
}
?>