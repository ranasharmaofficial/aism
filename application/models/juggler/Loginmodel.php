<?php

class Loginmodel extends MY_Model{
  

  	public function login_valid($username, $password){

  		$q = $this->db->where(['user_name'=>$username, 'user_password'=>$password])->get('tbl_admin');

  				return $q->result();

  	}

}