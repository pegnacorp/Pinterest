<?php
class Articulo_Model extends CI_Model{

   function __construct(){
      parent::__construct();
      $this->load->database();
   }
   
   function dame_articulos(){
   	  //$ssql = "select * from articulos";
   	  //return mysql_query($ssql);
   	  //$query = $this->db->get('articulo', 2);
   	  //$query = $this->db->get('articulo');
   	  $query = $this->db->get_where('articulo', array('nombre' => 'Carlos'));
      return $query->result_array();
      //$query = $this->db->query('SELECT nombre FROM articulo LIMIT 2');
	//return $row = $query->result_array();
   }
   function dame_a_juan(){
   		$query = $this->db->get('articulo', 2);
   }
}
?>