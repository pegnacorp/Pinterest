<?php
class Enlace_Model extends CI_Model{

	function __construct(){
		parent::__construct();
		$this->load->database();
	}
	function dar_enlaces_totales(){
		$query = $this->db->get('enlace');
		return $query->result();
	}
	function agregar_enlace($nombre,$direccion,$idLista){
		$data = array(
			'Nombre'=>$nombre,
			'Direccion'=>$direccion,
			'idLista' => $idLista);
		$this->db->insert('enlace', $data);

	}
	function eliminar($id){
		$this->db->delete('enlace', array('idEnlace' => $id));
	}
	function modificar($id,$nombre,$direccion,$idLista){
		$datos = array('nombre' => $nombre,
			'direccion' => $direccion,
			'idLista' => $idLista);
		$this->db->where('idEnlace', $id);
		$this->db->update('enlace', $datos);
	}
	function dar_enlace($id){
		$query = $this->db->get_where('enlace',array('idEnlace' => $id));
		return $query->row();	
	}
}
?>