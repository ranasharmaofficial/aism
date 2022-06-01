<?php 
class Socialmedia extends MY_Model{

	public function socialMed(){
		$query = $this->db->get('tbl_social_media');
		return $query->row();
	}

	
	
} 