<?php

class Resultsmodel extends MY_Model{
  
  	public function getPage(){

  		$q = $this->db->where(['id'=>53,'status'=>1])->get('tbl_pages');

  				return $q->row();

  	}
	public function getQuickLinks(){
		$this->db->select()->from('tbl_downloads_document');
		$this->db->where('status', 1);
		$query = $this->db->get();
		return $query->result();
	}
	public function getGalSlider(){
		$this->db->select()->from('tbl_portfolio');
		$this->db->where('status', 1);
		$this->db->limit(10);
		$query = $this->db->get();
		return $query->result();
	}
	
}