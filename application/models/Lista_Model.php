<?php
class Lista_Model extends CI_Model{
	function __construct(){
		parent::__construct();
		$this->load->database();
        $this->load->library('ion_auth');
	}

	function getListas($idUsuario = FALSE){
		//Se obtienen las listas de la más reciente a la más antigua
		$this->db->order_by('idLista', 'desc');
		if($idUsuario === FALSE){
			//Se obtienen todas las listas
            $this->db->where('Privacidad', 'publica');
   			$query = $this->db->get('lista');
        }
    	else{
    		//Se obtienen las listas de un solo usuario
    		$query = $this->db->get_where('lista', array('idUsuario' => $idUsuario));
        }
    	return $query->result_array();
    }

    function getLista($idLista){
    	//Se obtiene una unica lista
    	$query = $this->db->get_where('lista', array('idLista' => $idLista));
    	return $query->row();
    }
    function dar_lista_favoritos_por_id_usuario($idUsuario){
        $this->db->join('users', 'users.id = lista.idUsuario');
        $query = $this->db->get_where('lista',array('favoritos' => "1",'idUsuario' => $idUsuario));
        return $query->row();
    }

    function setLista(){
        $lista = array(
            'nombre'        => $this->input->post('nombre'),
            'descripcion'   => $this->input->post('descripcion'),
            'privacidad'    => $this->input->post('privacidad'),
            'idUsuario'     => $this->ion_auth->user()->row()->id
        );

        return $this->db->insert('lista', $lista);
    }

    function updateLista($idLista){
        $lista = array(
            'nombre'        => $this->input->post('nombre'),
            'descripcion'   => $this->input->post('descripcion'),
            'privacidad'    => $this->input->post('privacidad'),
            'idUsuario'     => $this->ion_auth->user()->row()->id,
        );
        $this->db->where('idLista', $idLista);
        return $this->db->update('lista', $lista);
    }

    function deleteLista($idLista){
        $this->db->where('idLista', $idLista);
        $this->db->delete('lista');
    }
}
?>