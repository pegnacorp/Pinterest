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
		$idUsuario = $this->ion_auth->user()->row()->id;
		//Se obtienen sus listas
		$datos['listas'] = $this->Lista_Model->getListas($idUsuario);
		$this->load->view('templates/header');
		$this->load->view('templates/navbar');
		$this->load->view('lista/index', $datos);
		$this->load->view('templates/footer');
	}
	
	function view($idLista){
		$idLista_limpio = $this->security->xss_clean($idLista);
		//Se obtiene una sola lista
		$dato['lista'] = $this->Lista_Model->getLista($idLista_limpio);
		//$dato['enlaces'] = $this->Lista_Model->getEnlaces($idLista_limpio);
		$this->load->view('templates/header');
		$this->load->view('templates/navbar');
		$this->load->view('lista/view', $dato);
		$this->load->view('templates/footer');
	}

	function create(){
		$this->form_validation->set_rules('nombre','Nombre','trim|required|max_length[45]');
		$this->form_validation->set_rules('descripcion','Descripción','trim|max_length[45]');
		$this->form_validation->set_rules('privacidad','Privacidad','trim|required');

		$this->form_validation->set_error_delimiters('<span>', '</span>');
		if($this->form_validation->run() === FALSE){
			$this->load->view('templates/header');
			$this->load->view('templates/navbar');
			$this->load->view('lista/create');
			$this->load->view('templates/footer');
		}else{
			$this->Lista_Model->setLista();
			redirect('lista','refresh');
		}
	}

	function delete($idLista){
		$idLista_limpio = $this->security->xss_clean($idLista);
		$this->Lista_Model->deleteLista($idLista_limpio);
		redirect('lista','refresh');
	}

	function update($idLista){
		$this->form_validation->set_rules('nombre','Nombre','required|max_length[45]');
		$this->form_validation->set_rules('descripcion','Descripción','max_length[45]');
		$this->form_validation->set_rules('privacidad','Privacidad','required');
		$this->form_validation->set_error_delimiters('<span>', '</span>');
		if($this->form_validation->run() === FALSE){
			$idLista_limpio = $this->security->xss_clean($idLista);
			//Se obtiene una sola lista
			$dato['lista'] = $this->Lista_Model->getLista($idLista_limpio);
			$this->load->view('templates/header');
			$this->load->view('templates/navbar');
			$this->load->view('lista/update', $dato);
			$this->load->view('templates/footer');
		}else{
			$idLista_limpio = $this->security->xss_clean($idLista);
			$this->Lista_Model->updateLista($idLista_limpio);
			redirect('lista','refresh');
		}
	}

	function all(){
		//Se obtienen sus listas
		$datos['listas'] = $this->Lista_Model->getListas();
		$this->load->view('templates/header');
		$this->load->view('templates/navbar');
		$this->load->view('lista/all', $datos);
		$this->load->view('templates/footer');
	}	
}
?>