<?php 
class Pagesmodel extends MY_Model{

	public function getPage(){				 
		$query = $this->db->get('tbl_pages');
	return $query->result();
	}

	public function getPageByID($id){
		$this->db->select()->from('tbl_pages');
		$this->db->where('id', $id);
		$query = $this->db->get();
		return $query->row();
	}

	public function deletePageByID($id){
		$this->db->where('id', $id);
        $this->db->delete('tbl_pages');
        return $this->db->affected_rows();
	}
} 