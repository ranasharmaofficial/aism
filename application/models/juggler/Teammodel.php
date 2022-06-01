<?php 

class Teammodel extends MY_Model{

	public function getTeam(){				 
		$query = $this->db->get('tbl_our_team');
	return $query->result();
	}

	public function getTeamByID($id){
		$this->db->select()->from('tbl_our_team');
		$this->db->where('id', $id);
		$query = $this->db->get();
		return $query->row();
	}

	public function deleteTeamByID($id){
		$this->db->where('id', $id);
        $this->db->delete('tbl_our_team');
        return $this->db->affected_rows();
	}
} 