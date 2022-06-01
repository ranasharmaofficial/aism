<?php



class Testimonialsmodel extends MY_Model{

  



  	public function getPage(){



  		$q = $this->db->where(['id'=>39,'status'=>1])->get('tbl_pages');



  				return $q->row();



  	}

	public function getTestimonials(){
		$this->db->select()->from('tbl_testimonials');
		$this->db->where('status', 1);
		$query = $this->db->get();
		return $query->result();
	}
	public function getVideo(){
		$this->db->select()->from('tbl_video');
		$this->db->where('status', 1);
		$query = $this->db->get();
		return $query->result();
	}
}