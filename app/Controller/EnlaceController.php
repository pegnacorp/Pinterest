<?php
	class EnlaceController extends Controller{
		public $action;

		function darReglasDeAcceso(){
			$rules  = array();
			$rule  = array("admin"=> array("listing","add","delete","modify"));
			array_push($rules, $rule);
			return $rules;
		}

		function listing(){
			$enlace = new Enlace("","","");
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
				header ("Location: /../pinterestelar/index.php/Enlace/listing");
			}
		}

		function delete(){
			$enlace = new Enlace("","","");
			$id=$_GET["id"];
			$enlace->borrar($id);
			header ("Location: /../pinterestelar/index.php/Enlace/listing");
		}
		
		function modify(){
			if(empty($_POST["direccion"])){
				$enlaceForm = new enlaceForm();
				$enlace = new Enlace("","","");
				$id=$_GET["id"];
				$enlace = $enlace->buscar($id);
				$enlaceForm->mostrarFormularioLlenado($enlace);
			}else{
				$nombre=$_POST["nombre"];
				$direccion = $_POST["direccion"];
				$id=$_GET["id"];
				$enlace = new enlace("","");
				$variables = array("nombre" =>$nombre, "direccion" => $direccion); 
				$enlace->modificar($variables,$id);
				header ("Location: /../pinterestelar/index.php/Enlace/listing/?d");
			}
		}
	}
?>