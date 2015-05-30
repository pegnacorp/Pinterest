<?php
class Articulo extends CI_Controller{

   // function index()
   // {
   //    echo 'Bienvenido a mi primer controlador en CodeIgniter';
   // }

	function index(){
		//cargo el helper de url, con funciones para trabajo con URL del sitio
      $this->load->helper('url');
      
      //cargo el modelo de artículos
      $this->load->model('Articulo_Model');
      
      //pido los ultimos artículos al modelo
      $articulos = $this->Articulo_Model->dame_articulos();
      $data["articulos"] = $articulos;
 
      //cargo la vista pasando los datos de configuacion
      $this->load->view('articulo', $data);
   }

   function ordenadores($marca=null, $modelo=null){
	   if (is_null($marca) && is_null($modelo)){
	      echo 'Aquí se muestran los productos de ordenadores';
	   }elseif(is_null($modelo)){
	      echo 'Mostrando ordenadores de marca ' . $marca;
	   }else{
	      echo 'Mostrando ordenadores de marca ' . $marca . ' y modelo ' . $modelo;
	   }
	}
   
   function monitores(){
      echo 'Aquí se muestran los productos de monitores';
   }
   function perifericos($modelo){
  	 echo 'Estás viendo el periférico ' . $modelo;
	}
}
?>