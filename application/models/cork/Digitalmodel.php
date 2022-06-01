<?php 

class Digitalmodel extends MY_Model{



	public function getPage(){				 

		$query = $this->db->where('id', 55)->get('tbl_pages');

	return $query->row();

	}



	

} 