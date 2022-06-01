<?php

class Servicesmodel extends MY_Model{
  

  	public function getPage(){

  		$q = $this->db->where(['id'=>34,'status'=>1])->get('tbl_pages');

  				return $q->row();

  	}
	public function getServices(){
		$this->db->select()->from('tbl_services');
		$this->db->where('status', 1);
		$query = $this->db->get();
		return $query->result();
	}
	
	
    public function getServicesByID($id){
		$this->db->select()->from('tbl_services');
		$this->db->where('id', $id);
		$query = $this->db->get();
		return $query->row();
	}

	public function getApply(){
		$this->db->select()->from('tbl_how_to_apply');
		$this->db->limit(3);
		$this->db->where('status', 1);
		$query = $this->db->get();
		return $query->result();
	}

}