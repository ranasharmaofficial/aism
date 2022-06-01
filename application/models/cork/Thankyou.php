<?php

class Thankyou extends MY_Model{
  

  	public function ThankPage(){

  		$q = $this->db->where(['id'=>38,'status'=>1])->get('tbl_pages');

  				return $q->row();

  	}

}