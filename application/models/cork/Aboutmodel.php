<?php 
class Aboutmodel extends MY_Model{

	public function getPage(){				 
		$query = $this->db->where('id', 30)->get('tbl_pages');
	return $query->row();
	}

	public function getTeam(){
		$this->db->select()->from('tbl_our_team');
		$this->db->where('status', 1);
		$query = $this->db->get();
		return $query->result();
	}
	public function getBlog(){
		$this->db->select()->from('tbl_post');
		$this->db->where('status', 1);
		$query = $this->db->get();
		return $query->result();
	}
} 