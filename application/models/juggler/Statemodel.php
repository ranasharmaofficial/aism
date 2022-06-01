<?php 
class Statemodel extends MY_Model{

	public function getState(){				 
		$query = $this->db->get('tbl_state');
	return $query->result();
	}

	public function getStateByID($id){
		$this->db->select()->from('tbl_state');
		$this->db->where('id', $id);
		$query = $this->db->get();
		return $query->row();
	}

	public function deleteStateByID($id){
		$this->db->where('id', $id);
        $this->db->delete('tbl_state');
        return $this->db->affected_rows();
	}
	
	
	
} 