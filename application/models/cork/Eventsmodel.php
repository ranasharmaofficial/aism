<?php

class Eventsmodel extends MY_Model{
  

  	public function getPage(){

  		$q = $this->db->where(['id'=>45,'status'=>1])->get('tbl_pages');

  				return $q->row();

  	}
	public function getEvents(){
		$this->db->select()->from('tbl_events');
		$this->db->where('status', 1);
		$query = $this->db->get();
		return $query->result();
	}
	public function getEventsById($id){
		$this->db->select()->from('tbl_events');
		$this->db->where('id', $id);
		$query = $this->db->get();
		return $query->row();
	}
}