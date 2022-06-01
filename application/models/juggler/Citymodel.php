<?php 
class Citymodel extends MY_Model{

	public function getCity(){				 
		$query = $this->db->get('tbl_city');
	return $query->result();
	}

	public function getCityByID($id){
		$this->db->select()->from('tbl_city');
		$this->db->where('id', $id);
		$query = $this->db->get();
		return $query->row();
	}

	public function deleteCityByID($id){
		$this->db->where('id', $id);
        $this->db->delete('tbl_city');
        return $this->db->affected_rows();
	}
	
	public function getState(){				 
		$query = $this->db->get('tbl_state');
	return $query->result();
	}
	
} 