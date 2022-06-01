<?php

class Contactus extends MY_Model{
  

  	public function contactPage(){

  		$q = $this->db->where(['id'=>37,'status'=>1])->get('tbl_pages');

  				return $q->row();

  	}
  	public function contactInfo(){

  		$query = $this->db->get('tbl_information');
		return $query->row();
  	}

}