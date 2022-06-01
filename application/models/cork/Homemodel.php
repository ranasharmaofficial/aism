<?php
class Homemodel extends MY_Model{

  public function HomePageQuery(){

  		$q = $this->db->where(['id'=>33,'status'=>1])->get('tbl_pages');

  				return $q->row();

  	}
	public function getSlider(){
		$this->db->select()->from('tbl_slider');
		$this->db->order_by('position', 'asc');
		$this->db->where('status', 1);
		$query = $this->db->get();
		return $query->result();
	}
	
	public function getPostCategory(){
		$this->db->select()->from('tbl_post_category');
		$this->db->where('status', 1);
		$query = $this->db->get();
		return $query->result();
	}
	
	public function getPost(){
		$this->db->select()->from('tbl_post');
		$this->db->limit(2);
		$this->db->where('status', 1);
		$query = $this->db->get();
		return $query->result();
	}

	public function getCategory(){
		$this->db->select()->from('tbl_category');
		$this->db->where('status', 1);
		$query = $this->db->get();
		return $query->result();
	}
 	public function getServices(){
		$this->db->select()->from('tbl_services');
		$this->db->limit(6);
		$this->db->where('status', 1);
		$query = $this->db->get();
		return $query->result();
	}
	public function getEvents(){
		$this->db->select()->from('tbl_events');
		$this->db->limit(3);
		$this->db->where('status', 1);
		$query = $this->db->get();
		return $query->result();
	}
	public function getFaq(){
		$this->db->select()->from('tbl_faq');
		$this->db->limit(4);
		$this->db->where('status', 1);
		$query = $this->db->get();
		return $query->result();
	}
	public function getSliderBottom(){
		$this->db->select()->from('tbl_slider_bottom');
		$this->db->limit(3);
		$this->db->order_by("position", "asc");
		$this->db->where('status', 1);
		$query = $this->db->get();
		return $query->result();
	}

	public function getProfile(){

  		$q = $this->db->where(['id'=>1,'status'=>1])->get('tbl_profile');

  				return $q->row();

  	}
  	public function getClients(){
		$this->db->select()->from('tbl_clients');
		$this->db->where('status', 1);
		$query = $this->db->get();
		return $query->result();
	}
	public function getContact(){
		$this->db->select()->from('tbl_information');
		$this->db->where('status', 1);
		$query = $this->db->get();
		return $query->row();
	}
	public function getTestimonials(){
		$this->db->select()->from('tbl_testimonials');
		$this->db->where('status', 1);
		$query = $this->db->get();
		return $query->result();
	}
	public function getWhyChoose(){
		$this->db->select()->from('tbl_choose');
		$this->db->where('status', 1);
		$query = $this->db->get();
		return $query->result();
	}
	public function getVideo(){
		$this->db->select()->from('tbl_video');
		$this->db->where('status', 1);
		$query = $this->db->get();
		return $query->row();
	}
	public function getFeaturedCourse(){

  		$q = $this->db->where(['featured'=>1,'status'=>1])->get('tbl_courses');

  				return $q->result();

  	}
  	public function getCourses(){
		$this->db->select()->from('tbl_courses');
		$this->db->limit(20);
		$this->db->where('status', 1);
		$query = $this->db->get();
		return $query->result();
	}
	public function getBookOnline(){
		$this->db->select()->from('tbl_book_online');
		$this->db->where('featured', 1);
		$this->db->where('status', 1);
		$query = $this->db->get();
		return $query->result();
	}
}