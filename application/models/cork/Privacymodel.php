<?php



class Privacymodel extends MY_Model{

  



  	public function getPage(){



  		$q = $this->db->where(['id'=>14,'status'=>1])->get('tbl_pages');



  				return $q->row();



  	}



}