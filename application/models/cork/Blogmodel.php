<?php

class Blogmodel extends MY_Model{
  

  	public function getPage(){

  		$q = $this->db->where(['id'=>40,'status'=>1])->get('tbl_pages');

  				return $q->row();

  	}
	public function getPost(){
		$this->db->select()->from('tbl_post');
		$this->db->where('status', 1);
		$query = $this->db->get();
		return $query->result();
	}
	 public function getPostByID($id){
		$this->db->select()->from('tbl_post');
		$this->db->where('id', $id);
		$query = $this->db->get();
		return $query->row();
	}
	public function getPostByCID($id){
		$this->db->select()->from('tbl_post');
		$this->db->where('cat_slug', $id);
		$query = $this->db->get();
		return $query->result();
	}
	public function getCategoryBySlug($id){
		$this->db->select()->from('tbl_post_category');
		$this->db->where('category_slug', $id);
		$query = $this->db->get();
		return $query->row();
	}
}