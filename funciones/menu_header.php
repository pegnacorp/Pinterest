<?php
include_once("funciones/mantener_sesion.php");
session_start();
function listarMenu(){
    $menu = "";
    if(isset($_SESSION["cidusuario"])){
        $rolArray = obtenerInfoSesion();
        if($rolArray[0] == 1){
            $menu .= "<a class=\"menu\" href=\"index.php\">";
            $menu .= "INICIO";
            $menu .= "</a>";
            
            $menu .= "<a class=\"menu\" href=\"catalogoLinks.php\">";
            $menu .= "ADMINISTRAR LINKS";
            $menu .= "</a>";
        }
        elseif($rolArray[0] == 2){
            $menu .= "<a class=\"menu\" href=\"index.php\">";
            $menu .= "INICIO";
            $menu .= "</a>";
            
            $menu .= "<a class=\"menu\" href=\"Buscador\Bucador.php\">";
            $menu .= "BUSCAR USUARIO";
            $menu .= "</a>";
 	
            $menu .= "<a class=\"menu\" href=\"acerca.php\">";
            $menu .= "ACERCA";
            $menu .= "</a>";
        }
    }else{
        $menu .= "<a class=\"menu\" href=\"index.php\">";
        $menu .= "INICIO";
        $menu .= "</a>";
        
        $menu .= "<a class=\"menu\" href=\"Buscador\Bucador.php\">";
        $menu .= "BUSCAR USUARIO";
        $menu .= "</a>";
 	
        $menu .= "<a class=\"menu\" href=\"acerca.php\">";
        $menu .= "ACERCA";
        $menu .= "</a>";
    }
    return $menu;
}

function listarPanel(){
    $panel = "";
    if(isset($_SESSION["cidusuario"])){
        $rolArray = obtenerInfoSesion();
		if($rolArray[0] == 1){
            $panel .= "<ul id=\"nombre_usuario\">";
            $panel .= "<li><a href=\"#\">Usuario:".$rolArray[1].".</a>";
            $panel .= "<ul>";
            $panel .= "<li class=\"elem_usuario\"><a href=\"cuenta_usuario.php?cid_usuario=$rolArray[2]\" class=\"link_usuario\">CUENTA</a></li>";
            $panel .= "<li class=\"elem_usuario\"><a href=\"funciones/cerrar_sesion.php\" class=\"link_usuario\">SALIR</a></li>";
            $panel .= "</ul>";
            $panel .= "</li>";
            $panel .= "</ul>";
        }
        elseif($rolArray[0] == 2){
            $panel .= "<ul id=\"nombre_usuario\">";
            $panel .= "<li><a href=\"#\">Usuario:".$rolArray[1].".</a>";
            $panel .= "<ul>";
            $panel .= "<li class=\"elem_usuario\"> <a href=\"cuenta_usuario.php?cid_usuario=$rolArray[2]\" class=\"link_usuario\">CUENTA</a></li>";
            $panel .= "<li class=\"elem_usuario\"> <a href=\"funciones/cerrar_sesion.php\" class=\"link_usuario\">SALIR</a></li>";
            $panel .= "</ul>";
            $panel .= "</li>";
            $panel .= "</ul>";
        }
    }else{
        $panel .= "<a id=\"registrarse\" class=\"myButton\" value=\"Registrarse\" href=\"Registro\Registro.php\">";
        $panel .= "REGISTRARSE";
        $panel .= "</a>";
        
        $panel .= "<a id=\"identificarse\" class=\"myButton\" value=\"Identificarse\" href=\"login\Login.php\">";
        $panel .= "INGRESAR";
        $panel .= "</a>";
    }
    return $panel; 
}
?>