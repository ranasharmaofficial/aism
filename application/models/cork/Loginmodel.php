<?php 
class Loginmodel extends MY_Model{

	public function getPage(){				 
		$query = $this->db->where('id', 44)->get('tbl_pages');
	return $query->row();
	}

		public function validate($email,$password){
    $this->db->where('franchise_email',$email);
    $this->db->where('password',$password);
    $result = $this->db->get('tbl_franchise');
    return $result;
  }
} 