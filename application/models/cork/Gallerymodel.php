<?php

class Gallerymodel extends MY_Model{
  

  	public function getPage(){

  		$q = $this->db->where(['id'=>35,'status'=>1])->get('tbl_pages');

  				return $q->row();

  	}
		public function getGallery(){
		$this->db->select()->from('tbl_portfolio');
		$this->db->where('status', 1);
		$query = $this->db->get();
		return $query->result();
	}
	
	
}