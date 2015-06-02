<?php
	
	class Favorito_model extends CI_Controller
	{
		function agregarFavorito($data){				
			return $this->db->insert('favoritos', $data);			
		}		
		
		function dejarDeSeguir($data){
			return $this->db->delete('favoritos', $data);
		}

		function esFavorito( $idUsuarioObservado,  $idUsuarioObservador){
			$data = array(
				'idUsuarioObservado' => $idUsuarioObservado,
				'idUsuarioObservador' => $idUsuarioObservador,
			);
			$esFavorito = false;
			if ($this->db->get('favoritos', $data)) {
				$esFavorito = true;
			}

			return $esFavorito;
		}
	}
?>