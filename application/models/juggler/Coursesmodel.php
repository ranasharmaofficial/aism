<?php

class Coursesmodel extends MY_Model{

	public function getCourses(){
		$query = $this->db->get('tbl_courses');
	return $query->result();
	}

	public function getCoursesByID($id){
		$this->db->select()->from('tbl_courses');
		$this->db->where('id', $id);
		$query = $this->db->get();
		return $query->row();
	}

	public function deleteCoursesByID($id){
		$this->db->where('id', $id);
        $this->db->delete('tbl_courses');
        return $this->db->affected_rows();
	}

	public function getCategory(){
		$query = $this->db->get('tbl_category');
	return $query->result();
	}
}
