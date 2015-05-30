<?php
class Lista_Model extends CI_Model{

   function __construct(){
      parent::__construct();
      $this->load->database();
   }
   
   function getListas(){
   	$query = $this->db->get('lista');
      return $query->result_array();
   }
}
?>