<?php
include_once("./config.inc.php"); 
include_once("acceder_base_datos.php");
function listarProductos(){
	$cenlaces = "";
	$pconexion = abrirConexion();
	seleccionarBaseDatos($pconexion);
	$cquery = "";

    if(isset($_POST['submit'])){ 
        if(isset($_GET['buscar'])){ 
            if(preg_match("/[A-Z  | a-z]+/", $_POST['txt_buscar'])){
                $filtro=$_POST['txt_buscar']; 
                $cquery = "SELECT * FROM enlace AS e WHERE  e.nombre LIKE '%" . $filtro . "%' OR p.descripcion LIKE '%" . $filtro . "%'";
            }else{
                $cquery = "SELECT * FROM enlace AS e";
            }
        }else{
           $cquery = "SELECT * FROM enlace AS e"; 
        }
    }

	

	$lresult = mysqli_query($pconexion, $cquery);
	$i = 0;
	if ( $lresult ){
   		if (mysqli_num_rows($lresult) > 0){          	 
		   	while ( $adatos = mysqli_fetch_array($lresult) ){
		   		
		   		if($i == 0){
		   			$cenlaces .= "<tr>";
		   		}
                $nombre = $adatos["Nombre"];
                $cid_enlace = $adatos["idEnlace"];
            	$cenlaces .=    "<td>";
                $cenlaces .=        "<div id=\"enlace\">";
                
                $cenlaces .=        "</div>";
                $cenlaces .=        "<div id=\"nombreEnlace\">";
                $cenlaces .=            $adatos["Nombre"];
                $cenlaces .=        "</div>";
                $cenlaces .=        "<div id=\"descripcionEnlace\">";
                $cenlaces .=            "<div id=\"descripcion\">".$adatos["Descripcion"]."</div>";
                $cenlaces .=                "<div id=\"detalles\">";
                
                $cenlaces .=                    "<a href=\"javascript:mostrar_ventana('".$adatos["idEnlace"]."','".$adatos["Nombre"]."','".$adatos["Descripcion"]."')\" title=\"Detalles\">Ver M&aacute;s [+]</a>";
                
               
                $cenlaces .=                "</div>";
                $cenlaces .=            "</div>";
                $cenlaces .=        "</div>";
                $cenlaces .=    "</td>";
                

                if($i == 3){
                	$cenlaces .= "</tr>";
                	$i = 0;
                }else{
                    $i++;
                }
                
    		}
            $cenlaces .= "<tr height=\"70px\"><td>&nbsp;</td></tr>";
		}else{

        }
	}

	mysqli_free_result($lresult);
 	cerrarConexion($pconexion);
 	return $cenlaces;

}

?>