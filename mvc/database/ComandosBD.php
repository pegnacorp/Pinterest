<?php

	class ComanadosBD{
		public $parametros;
		public $coneccion;
		public $peticion;

		function insert($tabla,$variablesConInformacion){
			$conexionBD = new ConexionBD();
			$conn = $conexionBD->conectar();
			$result;
			$sql = "INSERT into ".$tabla."(";
			foreach ($variablesConInformacion as $variable => $informacion) {
				$sql .= $variable . ",";
			}
			$sql = trim($sql, ',');
			$sql .=")values(";
			foreach ($variablesConInformacion as $variable => $informacion) {
				$sql .= ":".$variable.",";
			}
			$sql = trim($sql, ',');
			$sql .=')';
		    $result = $conn->prepare($sql);            
		    $result->execute($variablesConInformacion);    

		}
		function update($tabla,$id,$variablesConInformacion){
			$conexionBD = new ConexionBD();
			$conn = $conexionBD->conectar();
			$result;
			$sql = "UPDATE ".$tabla." SET ";
			$parametros = array();
			foreach ($variablesConInformacion as $variable => $informacion) {
				//array_push($parametros, $informacion);
				if($variable != "id".ucwords($tabla)){
					array_push($parametros, $informacion);	
					$sql .= $variable . "=?,";				
				}
			}
			$sql = trim($sql, ',');
			$sql .= " WHERE id".ucwords($tabla)." = ".$id;
			echo $sql;
		    $result = $conn->prepare($sql);     
		    $result->execute($parametros);//Revisar porque no funciona cuando se usa $variablesConInformacion

		}
		function select($tabla,$condicionales){
			$conexionBD = new ConexionBD();
			$conn = $conexionBD->conectar();
			$result;
		    $sql = 'SELECT * FROM '.ucwords($tabla);
		    if($condicionales!=NULL){
		    	$sql .= ' WHERE ';
		    	foreach ($condicionales as $variable => $informacion) {
					$sql .= $variable . " = " . $informacion;
				}
		    }
		    $result = $conn->query($sql);         
		    $rows = $result->fetchAll();
		    $objetos = array();
		    foreach ($rows as $row) {
		    	$id = 0;
		    	$variables = array();
		    	$contador = 0;
		    	while (count($row)>$contador) {
		    		if(isset($row[$contador])==true){
		    			if($contador!=0){
		    			array_push($variables,$row[$contador]);
		    			}else{
		    				$id = $row[$contador];
		    				array_push($variables,$row[$contador]);		
		    			}
		    		}
		    		$contador = $contador + 1;
		    	}
		    	$manoDeDios = new ManoDeDios();
		    	$nombreDeClase = ucwords($tabla);
		    	$objeto = $manoDeDios->darVida($nombreDeClase,$variables);

			    array_push($objetos, $objeto);
			}
			return $objetos;
		}
		function selectById	($tabla,$id){
			$conexionBD = new ConexionBD();
			$conn = $conexionBD->conectar();
			$result;
		    $sql = 'SELECT * FROM '.$tabla;
		    //$sql = 'SELECT * FROM user';
		    $sql .=" WHERE id".ucwords($tabla).'='.$id;
		    //$sql .=" WHERE idUser=".$id;
		    $result = $conn->query($sql);         
		    $rows = $result->fetchAll();
		    foreach ($rows as $row) {
		    	$id = 0;
		    	$variables = array();
		    	$contador = 0;
		    	while (count($row)>$contador) {
		    		if(isset($row[$contador])==true){
		    			if($contador!=0){
		    				array_push($variables,$row[$contador]);
		    			}else{
		    				$id = $row[$contador];
		    			}
		    		}
		    		$contador = $contador + 1;
		    	}
		    	$manoDeDios = new ManoDeDios();
		    	$nombreDeClase = ucwords($tabla);
		    	//$nombreDeClase = ucwords("User");
		    	$objeto = $manoDeDios->darVida($nombreDeClase,$variables);
		    	$objeto->id = $id;
			}
			return $objeto;
		}
		function delete($tabla,$id){
			$conexionBD = new ConexionBD();
			$conn = $conexionBD->conectar();
			$result;
		    $sql = 'DELETE FROM '.$tabla.' WHERE id'.ucwords($tabla).' = ?';
		    $result = $conn->prepare($sql);           
		    $params = array($id); 
		    $result->execute($params);
		}
	}

?>