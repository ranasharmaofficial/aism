<?php 

class Enquirymodel extends MY_Model{

	public function getEnquiry(){				 
		$query = $this->db->get('tbl_enquiry');
	return $query->result();
	}

	public function getEnquiryByID($id){
		$this->db->select()->from('tbl_enquiry');
		$this->db->where('id', $id);
		$query = $this->db->get();
		return $query->row();
	}

	public function deleteEnquiryByID($id){
		$this->db->where('id', $id);
        $this->db->delete('tbl_enquiry');
        return $this->db->affected_rows();
	}
} 