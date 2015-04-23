<?php
	class UsuarioController extends Controller{
		public $action;

		function darReglasDeAcceso(){
			$reglas  = array();
			$regla1  = array("admin"=> array("listing","cerrar","add","delete","modify"));
			$regla2  = array("comun"=> array("autenticar"));
			array_push($reglas, $regla1);
			array_push($reglas, $regla2);
			return $reglas;
		}

		function listing(){
			$usuario = new Usuario("","","","");
			$users = $usuario->darTotal();
			$userList = new UserList();
			$userList-> listUsers($users);
		}
		function cerrar(){
			$sistemaUsuario = new SystemUser();
			$sistemaUsuario->cerrarSesion();
			$configuracion = Configuracion::getInstance();
			$informacionConfiguracion = $configuracion->loadConfig();	
			header ("Location: ".$informacionConfiguracion["direccionRaiz"]."index.php/Usuario/autenticar");
		}
		function autenticar(){

			if(empty($_POST["correo"])){
				$vistaAutenticar = new VistaAutenticar();
				$vistaAutenticar->mostrarFormulario();
			}else{

				$idUsuario = $_POST["correo"];
				$clave= $_POST["clave"];

				if($idUsuario == "corep"){
					$sistemaUsuario = new SystemUser();
					$sistemaUsuario->crearSesion($idUsuario);
					$usuario = new Usuario("","","","");
					//$users = $usuario->buscar();
					
				}
			}

		}

		function add(){
			if(empty($_POST["nombre"])){
				$userForm = new UserForm();
				$userForm->mostrarFormulario();
			}else{
				$nombre=$_POST["nombre"];
				$correo= $_POST["correo"];
				$clave = $_POST["clave"];
				$user = new Usuario("","","","");
				$variables = array("nombre" =>$nombre, "correo" => $correo, "clave" => $clave); 
				$user->agregar($variables);
				$configuracion = Configuracion::getInstance();
				$informacionConfiguracion = $configuracion->loadConfig();	
				header ("Location: ".$informacionConfiguracion["direccionRaiz"]."index.php/Usuario/listing");
			}
		}
		function delete(){
			$user = new Usuario("","","","");
			$id=$_GET["id"];
			$user->borrar($id);

		}
		function modify(){
			if(empty($_POST["nombre"])){
				$userForm = new UserForm();
				$user = new Usuario("","","","");
				$id=$_GET["id"];
				$usuario = $user->buscar($id);
				$userForm->mostrarFormularioLlenado($usuario);
			}else{
				$nombre=$_POST["nombre"];
				$apellido = $_POST["apellido"];
				$nombreUsuario= $_POST["nombreUsuario"];
				$clave = $_POST["clave"];
				$id=$_GET["id"];
				$user = new Usuario("","","","");
				$variables = array("firstName" =>$nombre, "lastName" => $apellido, "user" => $nombreUsuario, "password" => $clave); 
				$user->modificar($variables,$id);
				$configuracion = Configuracion::getInstance();
				$informacionConfiguracion = $configuracion->loadConfig();	
				header ("Location: ".$informacionConfiguracion["direccionRaiz"]."index.php/Usuario/listing");
				echo "hola";
			}
		}
	}
?>