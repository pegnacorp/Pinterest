<?php include_once( "funciones/menu_header.php"); ?>
<!DOCTYPE HTML>
<html>

<head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="estilos/estiloBuscador.css">
    <link href="CSS/index.css" rel="stylesheet" type="text/css" />
    <link href="CSS/header.css" rel="stylesheet" type="text/css" />
    <link href="CSS/footer.css" rel="stylesheet" type="text/css" />
    <link href="CSS/estilos_botones.css" rel="stylesheet" type="text/css" />

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
            <section id="seccionBuscador">
                <br>
                <span>Escriba el Nombre del Usuario</span>
                <br>
                <br>
                <form method="post" action="<?php echo htmlspecialchars($_SERVER[" PHP_SELF "]);?>">
                    <input type="text" placeholder="Buscar..." name="nombre">
                    <input type="submit" value="Buscar">
                </form>
            </section>
            <br>
            <hr>
            <section id="seccionResultados">
                <?php if($hayCoincidencias){ while($row=$ coincidencias->fetch_assoc()) { echo "Usuario: " . $row["Nombre"]; echo "
                <br>"; echo "Correo: " . $row["Correo"]; echo "
                <br>"; echo "<a href='#'>linkASuPagina</a>"; echo "
                <hr>"; } } ?>
            </section>
        </div>
        <!--Fin del cuerpo-->

        <!--Inicio del footer-->
        <div id="div_footer">
            &copy; Todos los derechos reservados - Pinterestellar
        </div>
    </div>
    <div id="div_footer">

        <div class="leyenda">
            &copy; Todos los derechos reservados - Pinterestellar
            <br> Desarrollado por Aldo, Jahzeel, Jorge, Jose, Juan.
        </div>

    </div>
    <!--Fin del footer-->

</body>

</html>