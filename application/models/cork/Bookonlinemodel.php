<?php 
class Bookonlinemodel extends MY_Model{

	public function getPage(){				 
		$query = $this->db->where('id', 47)->get('tbl_pages');
	return $query->row();
	}

	public function getBookOnline(){
		$this->db->select()->from('tbl_book_online');
		$this->db->where('status', 1);
		$query = $this->db->get();
		return $query->result();
	}
	
	public function getBookOnlineByID($id){
		$this->db->select()->from('tbl_book_online');
		$this->db->where('id', $id);
		$query = $this->db->get();
		return $query->row();
	}
} 