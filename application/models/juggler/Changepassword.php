<?php 
class Changepassword extends MY_Model{

	public function changePass(){
		$query = $this->db->get('tbl_admin');
		return $query->row();
	}

	
} 