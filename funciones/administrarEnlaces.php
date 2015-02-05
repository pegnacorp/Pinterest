<?php
function recuperarInfoEnlace($cid_enlace){

    $adatos = array();
    $pconexion = abrirConexion();
    seleccionarBaseDatos($pconexion);
    
    $cquery = "SELECT * FROM enlace"; 
    $cquery .=" WHERE (idEnlace = $cid_enlace)";
    
    $adatos = extraerRegistro($pconexion, $cquery);
    cerrarConexion($pconexion);
    
    return $adatos;
}

function agregarProducto(){

    $cmensaje = "";
    if ( isset($_POST["btn_guardar"]) && $_POST["btn_guardar"] == "Guardar"){
        $cnombre = $_POST["nombre"];
        $cdireccion = $_POST["direccion"];
        $cidlista = $_POST["lista"];
        
        if( empty($cdireccion) && empty($cidlista)){
            $cmensaje = "Faltan campos por llenar";
        }
        else{
            $pconexion = abrirConexion();
            seleccionarBaseDatos($pconexion);
            $cquery = "SELECT Direccion FROM enlace";
            $cquery .= " WHERE idLista = $cidlista";
            if ( !existeRegistro($pconexion, $cquery) ){
                $cquery = "INSERT INTO enlace";
                $cquery .= " (nombre, direccion, idLista)";
                $cquery .= " VALUES ('$cnombre', '$cdireccion', $cidlista)";
                if (insertarDatos($pconexion, $cquery) ){
                    $cmensaje = "Enlace registrado";
                }
                else{
                    $cmensaje = "No fue posible registrar el enlace";	 
                }
            }
            else{
                $cmensaje = "Ya existe un enlace con la direccion $cdireccion";
            }
            cerrarConexion($pconexion);
        }
    }
    return $cmensaje;
}

function listarListas(){
    $copciones = "";
	$pconexion = abrirConexion();
	seleccionarBaseDatos($pconexion);
 
	$cquery = "SELECT * FROM lista";
    $cquery .=" ORDER BY nombre ASC";
	
	$lresult = mysqli_query($pconexion, $cquery);
	if ( $lresult ){
        
		if (mysqli_num_rows($lresult) > 0){
            while ( $adatos = mysqli_fetch_array($lresult) ){
                if ( $_POST["cmb_idlista"] == $adatos["idLista"] )
                    $copciones .= "<option value=\"".$adatos["idLista"]."\" selected>";
                else
                    $copciones .= "<option value=\"".$adatos["idLista"]."\">";
                $copciones .= $adatos["nombre"];
                $copciones .= "</option>\n";
            }	   	 
		}
	} 
	
	mysqli_free_result($lresult);
	cerrarConexion($pconexion);
	return $copciones;
}
?>