<?php 
class Faqsmodel extends MY_Model{

	public function getPage(){				 
		$query = $this->db->where('id', 46)->get('tbl_pages');
	return $query->row();
	}
	public function getFaq(){				 
		$query = $this->db->where('status', 1)->get('tbl_faq');
	return $query->result();
	}
	
} 