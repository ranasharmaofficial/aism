<?php

class Digitallyecertificatemodel extends MY_Model{
  
  	public function getPage(){

  		$q = $this->db->where(['id'=>56,'status'=>1])->get('tbl_pages');
  				return $q->row();
  	}	
	public function getCourse(){
		$this->db->select()->from('tbl_courses');
		$this->db->where('status', 1);
		$query = $this->db->get();
		return $query->result();
	}		
}