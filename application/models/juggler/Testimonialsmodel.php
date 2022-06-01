<?php 

class Testimonialsmodel extends MY_Model{

	public function getTestimonials(){				 
		$query = $this->db->get('tbl_testimonials');
	return $query->result();
	}

	public function getTestimonialsByID($id){
		$this->db->select()->from('tbl_testimonials');
		$this->db->where('id', $id);
		$query = $this->db->get();
		return $query->row();
	}

	public function deleteTestimonialsByID($id){
		$this->db->where('id', $id);
        $this->db->delete('tbl_testimonials');
        return $this->db->affected_rows();
	}
} 