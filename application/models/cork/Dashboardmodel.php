<?php 

class Dashboardmodel extends MY_Model{


public function getProfile(){

		$this->db->select()->from('tbl_users');
		$this->db->where('id', $this->session->userdata('user_id'));
		$this->db->where('status', 1);
		$query = $this->db->get();
		return $query->row();
	}
	public function getOrder(){
		$this->db->select()->from('tbl_order');
		$this->db->where('user_id', $this->session->userdata('user_id'));
		$this->db->where('status', 1);
		$query = $this->db->get();
		return $query->row();
	}
} 