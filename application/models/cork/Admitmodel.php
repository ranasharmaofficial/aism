<?php 

class Admitmodel extends MY_Model{



	public function getPage(){				 

		$query = $this->db->where('id', 51)->get('tbl_pages');

	return $query->row();

	}



} 