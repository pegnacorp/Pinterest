<?php
	class UserController extends Controller{
		public $action;

		function darReglasDeAcceso(){
			$reglas  = array();
			$regla1  = array("admin"=> array("listing","add","delete","modify"));
			array_push($reglas, $regla1);
			return $reglas;
		}

		function listing(){
			$user = new User("","","","");
			$users = $user->darTotal();
			$userList = new UserList();
			$userList-> listUsers($users);
		}

		function add(){
			if(empty($_POST["nombre"])){
				$userForm = new UserForm();
				$userForm->mostrarFormulario();
			}else{
				$nombre=$_POST["nombre"];
				$apellido = $_POST["apellido"];
				$nombreUsuario= $_POST["nombreUsuario"];
				$clave = $_POST["clave"];
				$user = new User("","","","");
				$variables = array("firstName" =>$nombre, "lastName" => $apellido, "user" => $nombreUsuario, "password" => $clave); 
				$user->agregar($variables);
				header ("Location: /../Proyectos/Ejemplo mvc/index.php/User/listing/?d");
			}
		}
		function delete(){
			$user = new User("","","","");
			$id=$_GET["id"];
			$user->borrar($id);

		}
		function modify(){
			if(empty($_POST["nombre"])){
				$userForm = new UserForm();
				$user = new User("","","","");
				$id=$_GET["id"];
				$usuario = $user->buscar($id);
				$userForm->mostrarFormularioLlenado($usuario);
			}else{
				$nombre=$_POST["nombre"];
				$apellido = $_POST["apellido"];
				$nombreUsuario= $_POST["nombreUsuario"];
				$clave = $_POST["clave"];
				$id=$_GET["id"];
				$user = new User("","","","");
				$variables = array("firstName" =>$nombre, "lastName" => $apellido, "user" => $nombreUsuario, "password" => $clave); 
				$user->modificar($variables,$id);
				header ("Location: /../Proyectos/Ejemplo mvc/index.php/User/listing/?d");
				echo "hola";
			}
		}
	}
?>