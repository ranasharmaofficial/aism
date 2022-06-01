<?php

class Categoriesmodel extends MY_Model{
  

  	public function getPage(){

  		$q = $this->db->where(['id'=>36,'status'=>1])->get('tbl_pages');

  				return $q->row();

  	}
	public function getPostCategory(){
		$this->db->select()->from('tbl_post_category');
		$this->db->where('status', 1);
		$query = $this->db->get();
		return $query->result();
	}

}