 <?php
include('comprobarRegistroNuevo.php');
include('InsertarBD.php');

function agregarUsuario($conexion, $datosUsuario){
	$nombreUsuario = $datosUsuario['nombre'];
	$correoUsuario = $datosUsuario['correo'];
	$contraseniaUsuario = $datosUsuario['contrasenia'];
	$usuarioAgregado = false;
	
	if (esRegistroNuevo($conexion, 'usuario', 'correo', $correoUsuario)) {		
		insertarBD($conexion, 'usuario', $datosUsuario);		
		$usuarioAgregado = true;
	}else{
		
		$usuarioAgregado = false;
	}
	
	return $usuarioAgregado;
}

?>