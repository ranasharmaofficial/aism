<?php 

class Scholarshipmodel extends MY_Model{



	public function getPage(){				 

		$query = $this->db->where('id', 54)->get('tbl_pages');

	return $query->row();

	}



	

} 