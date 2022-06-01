<?php 
class Applymodel extends MY_Model{

	public function getPage(){				 
		$query = $this->db->where('id', 48)->get('tbl_pages');
	return $query->row();
	}


} 