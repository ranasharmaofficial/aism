<?php

class Profilemodel extends MY_Model{
  

  	public function getPage(){

  		$q = $this->db->where(['id'=>1,'status'=>1])->get('tbl_profile');

  				return $q->row();

  	}

	
}