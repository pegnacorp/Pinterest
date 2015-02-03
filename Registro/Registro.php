<!DOCTYPE HTML>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="estilos/estiloRegistro.css">

<?php
		include ('php/FuncionesBD.php');
		$mensaje ="";
		conectarBD();

		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			$datosUsuario['nombre']= $_POST["nombre"];
			$datosUsuario['correo']= $_POST["correo"];
			$datosUsuario['contrasenia']= $_POST["contrasenia"];
			if (agregarUnUsuario($datosUsuario)) {
				$mensaje = "Se ha creado su cuenta con exito!";
			}else{
				$mensaje = "Ese correo ya posee una cuenta";
			}
		}	
?>

</head>

<body>



<section id="barraSuperior">
	Planets of Links
</section>

<section id="barraIzquierda">
	
</section>

<section id="menu">

	<span id="tituloMenu">Registrate!</span>
	<br>
	<br>	
	<section id="formSection">
		<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
			<input type = "text" id="nombreUsuario" class = "input" name ="nombre" placeholder="Usuario">
			<br>
			<br>
			<input type = "text" id="correoUsuario" class = "input" name ="correo" placeholder="correo">
			<br>
			<br>
			<input type = "password" id="contraseniaUsuario" class = "input" name ="contrasenia" placeholder="contrasenia">
			<br>
			<span id="mensaje"><?php echo $mensaje;?></span>
			<br>
			<br>
			<input type = "submit" value="REGISTRARME" >
		</form>

	</section>
	<br><br> 
</section>

<section id="barraDerecha">
	
</section>

</body>
</html>
