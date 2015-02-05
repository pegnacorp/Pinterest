<?php



function seleccionarUsuarios($conexion, $datosUsuario){
$nombreUsuario = $datosUsuario['nombre'];
$sql = "SELECT Nombre, Correo,idUsuario FROM usuario WHERE Nombre = '$nombreUsuario'";
$coincidencias = $conexion->query($sql);

if ($coincidencias->num_rows > 0) {
    // output data of each row
    $resultados['hayCoincidencias'] = true;
    //while($row = $coincidencias->fetch_assoc()) {
    //    echo "Usuario: " . $row["Nombre"];
    //}     
} else {
    //echo "0 results";
    $resultados['hayCoincidencias'] = false;
}

$resultados['coincidencias'] = $coincidencias;

return $resultados;

}

?>