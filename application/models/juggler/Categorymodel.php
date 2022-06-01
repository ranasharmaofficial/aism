<?php 

class Categorymodel extends MY_Model{

	public function getCategory(){				 
		$query = $this->db->get('tbl_category');
	return $query->result();
	}

	public function getCategoryByID($id){
		$this->db->select()->from('tbl_category');
		$this->db->where('id', $id);
		$query = $this->db->get();
		return $query->row();
	}

	public function deleteCategoryByID($id){
		$this->db->where('id', $id);
        $this->db->delete('tbl_category');
        return $this->db->affected_rows();
	}
} 