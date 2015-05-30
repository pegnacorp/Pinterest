<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lista extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Lista_Model');
	}

	function index(){
		$datos['listas'] = $this->Lista_Model->getListas();
		$this->load->view('lista/all', $datos);
	}
	
	function view(){

	}

	function create(){

	}

	function store(){

	}

	function delete(){

	}

	function update(){

	}

	function upgrade(){

	}
}
?>