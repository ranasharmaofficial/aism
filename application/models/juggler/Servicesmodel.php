<?php 

class Servicesmodel extends MY_Model{

	public function getServices(){				 
		$query = $this->db->get('tbl_services');
	return $query->result();
	}

	public function getServicesByID($id){
		$this->db->select()->from('tbl_services');
		$this->db->where('id', $id);
		$query = $this->db->get();
		return $query->row();
	}

	public function deleteServicesByID($id){
		$this->db->where('id', $id);
        $this->db->delete('tbl_services');
        return $this->db->affected_rows();
	}
} 