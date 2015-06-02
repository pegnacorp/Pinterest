<?php
	
	class Favorito_model extends CI_Controller
	{
		function agregarFavorito($data){				
			return $this->db->insert('favoritos', $data);			
		}		
		
		function dejarDeSeguir($data){
			return $this->db->delete('favoritos', $data);
		}

		function esFavorito($data){
			$esFavorito = false;
			if ($this->db->get('favoritos', $data)) {
				$esFavorito = true;
			}

			return $esFavorito;
		}
	}
?>