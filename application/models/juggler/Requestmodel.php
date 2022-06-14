<?php 

class Requestmodel extends MY_Model{

	public function getConsultationRequest(){				 
		$query = $this->db->get('consultation_request');
	return $query->result();
	}
	public function getCallRequest(){				 
		$query = $this->db->get('call_requests');
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