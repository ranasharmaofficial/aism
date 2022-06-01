<?php

class Quizzesmodel extends MY_Model{

	public function getQuizzes(){
		$query = $this->db->get('tbl_quizzes');
	return $query->result();
	}

	public function getQuizzesByID($id){
		$this->db->select()->from('tbl_quizzes');
		$this->db->where('id', $id);
		$query = $this->db->get();
		return $query->row();
	}

	public function deleteQuizzesByID($id){
		$this->db->where('id', $id);
        $this->db->delete('tbl_quizzes');
        return $this->db->affected_rows();
	}

	public function getCategory(){
		$query = $this->db->get('tbl_category');
	return $query->result();
	}
	public function getCourses(){
		$query = $this->db->get('tbl_courses');
	return $query->result();
	}
	public function getLession(){
		$query = $this->db->get('tbl_lession');
	return $query->result();
	}
	public function getAjaxCourse($id){

		$this->db->select()->from('tbl_courses');

		$this->db->where('id', $id);

		$query = $this->db->get();

		$output = '<option value="">Select Course</option>';
                foreach ($query->result() as $row)
                {
                    $output .= '<option value="' . $row->id . '">' . $row->name . '</option>';
                }
                return $output;	

	}
		public function getAjaxLession($id){

		$this->db->select()->from('tbl_lession');

		$this->db->where('id', $id);

		$query = $this->db->get();

		$output = '<option value="">Select Lession</option>';
                foreach ($query->result() as $row)
                {
                    $output .= '<option value="' . $row->id . '">' . $row->name . '</option>';
                }
                return $output;	

	}
}
