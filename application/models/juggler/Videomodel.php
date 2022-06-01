<?php 

class Videomodel extends MY_Model{

	public function getVideo(){				 
		$query = $this->db->get('tbl_video');
	return $query->result();
	}

	public function getVideoByID($id){
		$this->db->select()->from('tbl_video');
		$this->db->where('id', $id);
		$query = $this->db->get();
		return $query->row();
	}

	public function deleteVideoByID($id){
		$this->db->where('id', $id);
        $this->db->delete('tbl_video');
        return $this->db->affected_rows();
	}
} 