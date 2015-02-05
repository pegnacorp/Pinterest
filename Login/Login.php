<!DOCTYPE HTML>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="estilos/estiloLogin.css">

<?php
		include ('php/FuncionesBD.php');
		$mensaje ="";
		conectarBD();
		$coincidencias;		

		if ($_SERVER["REQUEST_METHOD"] == "POST") {			
			$datosUsuario['correo']= $_POST["correo"];
			$datosUsuario['contrasenia']= $_POST["contrasenia"];
			$resultados = verificarLosDatos($datosUsuario);
			if ($resultados['hayCoincidencias']) {
				$coincidencias = $resultados['coincidencias'];
				$row = $coincidencias->fetch_assoc();

				session_start();
           		$_SESSION['nombre'] = $row['Nombre'];
           		header ("Location: ../PaginaListaEnlaces/PaginaPrincipal.php");

			}else{
				$mensaje = "Esa Cuenta No Existe, Intente De Nuevo";	
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

	<span id="tituloMenu">Ingresa!</span>
	<br>
	<br>	
	<section id="formSection">
		<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">			
			<input type = "text" id="correoUsuario" class = "input" name ="correo" placeholder="correo">
			<br>
			<br>
			<input type = "password" id="contraseniaUsuario" class = "input" name ="contrasenia" placeholder="contrasenia">
			<br>
			<span id="mensaje"><?php echo $mensaje;?></span>
			<br>
			<br>
			<input type = "submit" value="INGRESAR" >
		</form>

	</section>
	<br><br> 
</section>

<section id="barraDerecha">
	
</section>

</body>
</html>
