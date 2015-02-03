<!DOCTYPE HTML>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="estilos/estiloBuscador.css">
	<?php
		include('php/FuncionesBD');

		conectarBD();
		$coincidencias;
		$hayCoincidencias = false;

		if ($_SERVER["REQUEST_METHOD"] == "POST") {			
			$datosUsuario['nombre']= $_POST["nombre"];
			$resultados = buscarUnUsuario($datosUsuario);		
			if ($resultados['hayCoincidencias']) {
				$hayCoincidencias = true;
				$coincidencias = $resultados['coincidencias'];
			}else{
				$hayCoincidencias = false;
				//
			}
		}


	?>
</head>
<body>
	<section id="seccionBuscador">
		<br>
		<span>Escriba el Nombre del Usuario</span>
		<br>
		<br>		
		<form method = "post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
			<input type="text" placeholder ="Buscar..." name="nombre"><input type = "submit" value="Buscar">
		</form>
	</section>
	<br>
	<hr>
	<section id="seccionResultados">
		<?php    
			if($hayCoincidencias){
				while($row = $coincidencias->fetch_assoc()) {
	    		    echo "Usuario: " . $row["Nombre"];
	    		    echo "<br>";
	    		    echo "Correo:  " . $row["Correo"];
	    		    echo "<br>";
	    		    echo "<a href='#'>linkASuPagina</a>";
	    		    echo "<hr>";
	    		} 
	    	}           
		?>
	</section>
</body>
</html>