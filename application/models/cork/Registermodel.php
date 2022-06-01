<?php 
class Registermodel extends MY_Model{

	public function getPage(){				 
		$query = $this->db->where('id', 43)->get('tbl_pages');
	return $query->row();
	}

	
} 