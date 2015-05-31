<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lista extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Lista_Model');
		$this->load->library('form_validation');
	}

	function index(){
		//Se obtiene el id del usuario logueado
		$idUsuario = 1;
		//Se obtienen sus listas
		$datos['listas'] = $this->Lista_Model->getListas($idUsuario);
		$this->load->view('lista/index', $datos);
	}
	
	function view($idLista){
		$idLista_limpio = $this->security->xss_clean($idLista);
		//Se obtiene una sola lista
		$dato['lista'] = $this->Lista_Model->getLista($idLista_limpio);
		$dato['enlaces'] = $this->Lista_Model->getEnlaces($idLista_limpio);
		$this->load->view('lista/view', $dato);
	}

	function create(){
		$this->form_validation->set_rules('nombre','Nombre','required|max_length[45]');
		$this->form_validation->set_rules('descripcion','Descripción','max_length[45]');
		$this->form_validation->set_rules('privacidad','Privacidad','required');
		if($this->form_validation->run() === FALSE){
			$this->load->view('lista/create');
		}else{
			$this->Lista_Model->setLista();
			redirect('index.php/lista','refresh');
		}
	}

	function delete(){

	}

	function update(){

	}

	function upgrade(){

	}
}
?>