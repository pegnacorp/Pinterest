<?php


    function esRegistroNuevo($conexion, $tabla, $columna, $identificador){     

        $sql = "SELECT * FROM $tabla WHERE $columna = '$identificador'";

        $res = $conexion->query($sql); 

        $esNuevo = true;
        if ($res->fetch()) {          
            $esNuevo = false;
        }else{
            $esNuevo = true;
        }
        return $esNuevo;        
    }        


?>