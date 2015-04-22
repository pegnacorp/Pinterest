<?php
	class ActiveRecord {
		public $columnas;
		public $esNuevoRegistro;
		public $comandosBD;

		function __construct(){
		}

		function darNombreDeTabla(){
			return strtolower(get_called_class());
		}
		function agregar($variables){
			$tabla = $this->darNombreDeTabla();
			$comandos = new ComanadosBD();
			$comandos->insert($tabla,$variables);	
		}
		function modificar($variables,$id){
			$tabla = $this->darNombreDeTabla();
			$comandos = new ComanadosBD();
			$comandos->update($tabla,$id,$variables);
		}
		function borrar($id){
			$tabla = $this->darNombreDeTabla();
			$comandos = new ComanadosBD();
			$comandos->delete($tabla,$id);
		}
		function buscar($id){
			$tabla = $this->darNombreDeTabla();
			$comandos = new ComanadosBD();
			return $objeto = $comandos->selectById($tabla,$id);
		}
		function darTotal(){
			$tabla = $this->darNombreDeTabla();
			$comandos = new ComanadosBD();
			$objetos = $comandos->select($tabla,NULL);
			return $objetos;
		}
		function darTotalCondicionado($condicionales){
			$tabla = $this->darNombreDeTabla();
			$comandos = new ComanadosBD();
			$objetos = $comandos->select($tabla,$condicionales);
			return $objetos;
		}
	}
//$activeRecord->darAtributos();
	//$activeRecord->darNombreDeTabla();
	//$activeRecord-> darNombreDeTabla();
?>