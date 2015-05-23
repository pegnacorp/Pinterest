<?php
class MiControlador extends CI_Controller {

   function index(){
   	  $this->load->helper('url');
   	  $data = array();
	  $data['main_content'] = 'mivista';
      $this->load->view('includes/plantilla',$data);
   }
   
}
?>