<?php defined('BASEPATH') OR exit('No direct script access allowed');

	class Favorito extends CI_Controller
	{
		
		function __construct(){
			parent::__construct();
			$this->load->model("Favorito_Model");
		}

		function index(){

		}

		function agregarFavorito(){		
			
			$data = array(
				'idUsuarioObservado' => $this->input->post('idUsuarioObservado'),
				'idUsuarioObservador' => $this->input->post('idUsuarioObservador'),
			);			
			$this->Favorito_Model->agregarFavorito($data);
			redirect('auth/show/'.$data['idUsuarioObservado']);
		}

		function dejarDeSeguir(){			
			$data = array(
				'idUsuarioObservado' => $this->input->post('idUsuarioObservado'),
				'idUsuarioObservador' => $this->input->post('idUsuarioObservador'),
			);
			$this->Favorito_Model->dejarDeSeguir($data);
		}

		function esFavorito($idUsuarioObservado, $idUsuarioObservador){
			$data = array(
				'idUsuarioObservado' => $idUsuarioObservado,
				'idUsuarioObservador' => $idUsuarioObservador,
			);
			
		}


	}


?>