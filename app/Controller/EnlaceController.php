<?php
	class EnlaceController extends Controller{
		public $action;

		function darReglasDeAcceso(){
			$reglas  = array();
			$regla1  = array("admin"=> array("listing","add","delete","modify"));
			$regla2  = array("comun"=> array());
			array_push($reglas, $regla1);
			array_push($reglas, $regla2);
			return $reglas;
		}

		function listing(){
			$enlace = new Enlace("","","","");
			$condicionales = array("idUsuario" => 1);
			$enlaces = $enlace->darTotalCondicionado($condicionales);
			$enlaceList = new EnlaceList();
			$enlaceList-> listarEnlaces($enlaces);
		}
		function add(){
			if(empty($_POST["direccion"])){
				$enlaceForm = new EnlaceForm();
				$enlaceForm->mostrarFormulario();
			}else{
				$nombre=$_POST["nombre"];
				$direccion = $_POST["direccion"];
				$idUsuario = 1;
				$enlace = new Enlace("","","");
				$variables = array("nombre" =>$nombre, "direccion" => $direccion, "idUsuario" => $idUsuario); 
				$enlace->agregar($variables);
				header ("Location: /Proyectos/Pontetium/index.php/Enlace/listing");
			}
		}
		function delete(){
			$enlace = new Enlace("","","","");
			$id=$_GET["id"];
			$enlace->borrar($id);
			header ("Location: /Proyectos/Pontetium/index.php/Enlace/listing");
		}
		
		function modify(){
			if(empty($_POST["direccion"])){
				$enlaceForm = new enlaceForm();
				$enlace = new Enlace("","","","");
				$id=$_GET["id"];
				$enlace = $enlace->buscar($id);
				$enlaceForm->mostrarFormularioLlenado($enlace);
			}else{
				$nombre=$_POST["nombre"];
				$direccion = $_POST["direccion"];
				$id=$_GET["id"];
				$enlace = new Enlace("","","","");
				$variables = array("nombre" =>$nombre, "direccion" => $direccion); 
				$enlace->modificar($variables,$id);
				header ("Location: /Proyectos/Pontetium/index.php/Enlace/listing/?d");
			}
		}
	}
?>