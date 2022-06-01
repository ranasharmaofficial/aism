<?php 

class Examinationmodel extends MY_Model{



	public function getPage(){				 

		$query = $this->db->where('id', 52)->get('tbl_pages');

	return $query->row();

	}



	

} 