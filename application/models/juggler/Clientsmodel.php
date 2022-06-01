<?php 

class Clientsmodel extends MY_Model{

	public function getClients(){				 
		$query = $this->db->get('tbl_clients');
	return $query->result();
	}

	public function getClientsByID($id){
		$this->db->select()->from('tbl_clients');
		$this->db->where('id', $id);
		$query = $this->db->get();
		return $query->row();
	}

	public function deleteClientsByID($id){
		$this->db->where('id', $id);
        $this->db->delete('tbl_clients');
        return $this->db->affected_rows();
	}
} 