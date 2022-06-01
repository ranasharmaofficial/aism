<?php 

class Choosemodel extends MY_Model{

	public function getWhyChoose(){				 
		$query = $this->db->get('tbl_choose');
	return $query->result();
	}

	public function getWhyChooseByID($id){
		$this->db->select()->from('tbl_choose');
		$this->db->where('id', $id);
		$query = $this->db->get();
		return $query->row();
	}

	public function deleteWhyChooseByID($id){
		$this->db->where('id', $id);
        $this->db->delete('tbl_choose');
        return $this->db->affected_rows();
	}
} 