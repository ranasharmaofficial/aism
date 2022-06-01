<?php 

class Eventsmodel extends MY_Model{

	public function getEvents(){				 
		$query = $this->db->get('tbl_events');
	return $query->result();
	}

	public function getEventsByID($id){
		$this->db->select()->from('tbl_events');
		$this->db->where('id', $id);
		$query = $this->db->get();
		return $query->row();
	}

	public function deleteEventsByID($id){
		$this->db->where('id', $id);
        $this->db->delete('tbl_events');
        return $this->db->affected_rows();
	}
} 