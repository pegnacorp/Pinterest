<?php include_once( "funciones/menu_header.php"); ?>
<!DOCTYPE HTML>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="estilos/estiloLogin.css">
    <link href="CSS/autentificar.css" rel="stylesheet" type="text/css" />
    <link href="CSS/header.css" rel="stylesheet" type="text/css" />
    <link href="CSS/footer.css" rel="stylesheet" type="text/css" />
    <link href="CSS/estilos_botones.css" rel="stylesheet" type="text/css" />

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
				$mensaje = "Bienvenido: " . $row['Nombre'];
			}else{
				$mensaje = "Esa Cuenta No Existe, Intente De Nuevo";	
			}
		}	
?>

</head>

<body>
    <div id="cintilla">

    </div>
    <div id=contenedor>
        <!--Inicio del header -->
        <div id="div_encabezado">
            <div id="logotipo"></div>
            <div id="btns_identificarse">
                <?php echo listarPanel(); ?>
            </div>
            <div id="div_menu">
                <?php echo listarMenu(); ?>
            </div>
        </div>
        <!--Fin del header -->

        <!--Inicio del cuerpo-->
        <div id="div_cuerpo">
            <section id="menu">

                <span id="tituloMenu">Ingresa!</span>
                <br>
                <br>
                <section id="formSection">
                    <form method="post" action="<?php echo htmlspecialchars($_SERVER[" PHP_SELF "]);?>">
                        <input type="text" id="correoUsuario" class="input" name="correo" placeholder="correo">
                        <br>
                        <br>
                        <input type="password" id="contraseniaUsuario" class="input" name="contrasenia" placeholder="contrasenia">
                        <br>
                        <span id="mensaje"><?php echo $mensaje;?></span>
                        <br>
                        <br>
                        <input type="submit" value="INGRESAR">
                    </form>

                </section>
                <br>
                <br>
            </section>
        </div>
        <!--Fin del cuerpo-->

        <!--Inicio del footer-->
        <div id="div_footer">
            &copy; Todos los derechos reservados - Pinterestellar
        </div>
        <div id="div_footer">

            <div class="leyenda">
                &copy; Todos los derechos reservados - Pinterestellar
                <br> Desarrollado por Aldo, Jahzeel, Jorge, Jose, Juan.
            </div>

        </div>
        <!--Fin del footer-->
    </div>
</body>

</html>