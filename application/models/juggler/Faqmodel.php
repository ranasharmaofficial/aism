<?php 

class Faqmodel extends MY_Model{

	public function getFaq(){				 
		$query = $this->db->get('tbl_faq');
	return $query->result();
	}

	public function getFaqByID($id){
		$this->db->select()->from('tbl_faq');
		$this->db->where('id', $id);
		$query = $this->db->get();
		return $query->row();
	}

	public function deleteFaqByID($id){
		$this->db->where('id', $id);
        $this->db->delete('tbl_faq');
        return $this->db->affected_rows();
	}
} 