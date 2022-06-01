<?php

class Bookmodel extends MY_Model{

	public function getBookOnline(){
		$query = $this->db->get('tbl_book_online');
	return $query->result();
	}

	public function getBookOnlineByID($id){
		$this->db->select()->from('tbl_book_online');
		$this->db->where('id', $id);
		$query = $this->db->get();
		return $query->row();
	}

	public function deleteBookOnlineByID($id){
		$this->db->where('id', $id);
        $this->db->delete('tbl_book_online');
        return $this->db->affected_rows();
	}

	
}
