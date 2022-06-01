<?php 

class Usersmodel extends MY_Model{

	public function getUsers(){				 
		$query = $this->db->get('tbl_users');
	return $query->result();
	}

	public function getUsersByID($id){
		$this->db->select()->from('tbl_users');
		$this->db->where('id', $id);
		$query = $this->db->get();
		return $query->row();
	}

	public function deleteUsersByID($id){
		$this->db->where('id', $id);
        $this->db->delete('tbl_users');
        return $this->db->affected_rows();
	}
} 