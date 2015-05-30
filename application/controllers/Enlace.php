<?php
	/**
	* sd
	*/
	class Enlace extends CI_Controller
	{
		function index(){
			$this->load->model("Enlace_Model");
			$enlaces = $this->Enlace_Model->dar_enlaces_totales();
			$data["enlaces"] = $enlaces;
			$this->load->view("Enlace",$data);
		}
		function crear(){

			$this->load->model("Enlace_Model");
			
			$this->load->helper('form');
    		$this->load->library('form_validation');
    		$this->form_validation->set_rules('nombre','nombre','required');
    		$this->form_validation->set_rules('direccion','direccion','required');
    		if ($this->form_validation->run() == false) { //Fails Validation
    			$listas = array(
  					1   => 'lista 1'
					);
    			$data['listas'] = $listas;
            	$this->load->view("CrearEnlace",$data);

        	}else{
        		$nombre = $this->input->post('nombre');
        		$direccion = $this->input->post('direccion');
        		$lista = $this->input->post('lista');
        		$enlaces = $this->Enlace_Model->agregar_enlace($nombre,$direccion,$lista);
        	}
			
		}
		function modificar(){
			$this->load->model("Enlace_Model");
			$this->load->helper('form');
    		$this->load->library('form_validation');
    		$this->form_validation->set_rules('nombre','nombre','required');
    		$this->form_validation->set_rules('direccion','direccion','required');
    		if ($this->form_validation->run() == false) { //Fails Validation
    			 $listas = array(
  					2   => 'lista 2',
  					1	=> 'lista 1'
					);
    			$data['listas'] = $listas;
				$id = $this->input->get('id', TRUE);
				$enlace = $this->Enlace_Model->dar_enlace($id);
				$data['enlace'] =$enlace;
				$data['listas']=$listas;
				$this->load->view("ModificarEnlace",$data);
			}else{
				$nombre = $this->input->post('nombre');
        		$direccion = $this->input->post('direccion');
        		$lista = $this->input->post('lista');
        		$id = $this->input->get('id', TRUE);
        		$enlaces = $this->Enlace_Model->modificar($id,$nombre,$direccion,$lista);
        		header ("Location: ". base_url()."index.php/enlace");
			}
		}
		function eliminar(){

			$this->load->model("Enlace_Model");
			$id = $this->input->get('id', TRUE);
			$this->Enlace_Model->eliminar($id );
			header ("Location: ". base_url()."index.php/enlace");


		}
	}
?>