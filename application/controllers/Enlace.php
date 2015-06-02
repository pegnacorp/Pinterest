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
			$this->load->view("enlace/Enlace",$data);
		}
		function crear(){
			$this->load->model("Enlace_Model");
			$this->load->helper('form');
    		$this->load->library('form_validation');
    		$this->form_validation->set_rules('nombre','nombre','required');
    		$this->form_validation->set_rules('direccion','direccion','required');
    		if ($this->form_validation->run() == false) { //Fails Validation
    			$listas = array(
  					1   => 'lista 1',
  					2	=> 'lista 2'
					);
    			$data['listas'] = $listas;
            	$this->load->view("enlace/CrearEnlace",$data);

        	}else{
        		$nombre = $this->input->post('nombre');
        		$direccion = $this->input->post('direccion');
        		$lista = $this->input->post('lista');
        		$enlaces = $this->Enlace_Model->agregar_enlace($nombre,$direccion,$lista);
        	}
		}
		function desplegar_enlaces(){
			$id_lista = $this->input->get('lista', TRUE);
			$id_usuario = 2;
			$this->load->model("Enlace_Model");
			$this->load->model("Lista_Model");
			$enlaces = $this->Enlace_Model->dar_enlaces_totales_por_lista($id_lista);
			if(count($enlaces) === 0){
				show_404('Enlace.php');	
			}else{
			$lista = $this->Lista_Model->getLista($id_lista);	
			$id_usuario_lista = $lista->idUsuario;
			$data["enlaces"] = $enlaces;
			$data["lista"] = $lista;
			$data["id_usuario"] = $id_usuario;
			$data["id_usuario_lista"] = $id_usuario_lista;
			$this->load->view('templates/header');
			$this->load->view('templates/navbar');
			$this->load->view('enlace/Enlace',$data);
			$this->load->view('templates/footer');
			}

		}
		function modificar(){
			$this->load->model("Enlace_Model");
			$this->load->model("Lista_Model");
			$this->load->helper('form');
    		$this->load->library('form_validation');
    		$this->form_validation->set_rules('nombre','nombre','required');
    		$this->form_validation->set_rules('direccion','direccion','required');
    		if ($this->form_validation->run() == false) { //Fails Validation
    			$listas = array(
  					1   => 'lista 1',
  					2	=> 'lista 2'
				);
    			$data['listas'] = $listas;
				$id = $this->input->get('id', TRUE);
				$enlace = $this->Enlace_Model->dar_enlace($id);
				$data['enlace'] =$enlace;
				$data['listas']=$listas;
				$this->load->view('templates/header');
				$this->load->view('templates/navbar');
				$this->load->view("enlace/ModificarEnlace",$data);
				//$this->_render_page("enlace/ModificarEnlace",$data);
				$this->load->view('templates/footer');

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
		function marcar_favorito(){
			$this->load->model("Enlace_Model");	
			$this->load->model("Lista_Model");
			$id_usuario = 2;
			$lista=$this->Lista_Model->dar_lista_favoritos_por_id_usuario($id_usuario);
			$id_lista= $lista->idLista;
			$id_enlace = $this->input->get('id', TRUE);
			$this->Enlace_Model->marcar_favorito($id_enlace,$id_lista);

		}
		function _render_page($view, $data=null, $render=false){

			$this->viewdata = (empty($data)) ? $this->data: $data;
			$view_html = $this->load->view($view, $this->viewdata, $render);
			if (!$render) return $view_html;
		}
	}
?>
