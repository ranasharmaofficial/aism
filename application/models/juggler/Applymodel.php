<?php 

class Applymodel extends MY_Model{

	public function getApply(){				 
		$query = $this->db->get('tbl_how_to_apply');
	return $query->result();
	}

	public function getApplyByID($id){
		$this->db->select()->from('tbl_how_to_apply');
		$this->db->where('id', $id);
		$query = $this->db->get();
		return $query->row();
	}

	public function deleteApplyByID($id){
		$this->db->where('id', $id);
        $this->db->delete('tbl_how_to_apply');
        return $this->db->affected_rows();
	}
} 