<?php 
class Profilepagemodel extends MY_Model{

	public function getPageByID(){
		$this->db->select()->from('tbl_profile');
		$this->db->where('id', 1);
		$query = $this->db->get();
		return $query->row();
	}

	
} 