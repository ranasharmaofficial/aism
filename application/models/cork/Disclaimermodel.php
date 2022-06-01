<?php

class Disclaimermodel extends MY_Model{
  

  	public function getPage(){

  		$q = $this->db->where(['id'=>26,'status'=>1])->get('tbl_pages');

  				return $q->row();

  	}

}