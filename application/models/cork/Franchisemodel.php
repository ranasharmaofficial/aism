<?php 
class Franchisemodel extends MY_Model{
	public function getPage(){				 
		$query = $this->db->where('id', 50)->get('tbl_pages');
	return $query->row();
	}
	public function getFranchise(){
		$this->db->select()->from('tbl_franchise');
		$this->db->where('status', 1);
		$query = $this->db->get();
		return $query->result();
	}
	public function getState(){
		$this->db->select()->from('tbl_state');
		$this->db->where('status', 1);
		$query = $this->db->get();
		return $query->result();
	}
	public function getCity(){
		$this->db->select()->from('tbl_city');
		$this->db->where('status', 1);
		$query = $this->db->get();
		return $query->result();
	}
	public function getAjaxValue($id){
		$this->db->select()->from('tbl_city');
		$this->db->where('state_id', $id);
		$query = $this->db->get();
		$output = '<option value="">--Choose City--</option>';
                foreach ($query->result() as $row)
                {
                    $output .= '<option value="' . $row->id . '">' . $row->name . '</option>';
                }
                return $output;	
	}
	public function getAjaxFranchiseValue($state_id, $city_id){
		$this->db->select()->from('tbl_franchise');
		$this->db->where('state_id', $state_id);
		$this->db->where('city_id', $city_id);
		$query = $this->db->get();
		if($query->num_rows()>0){
		$output =  '<div class="centerRow centerRowline">';
			foreach ($query->result() as $row)
                {
                    $output .= '<div class="col_center col_center1">'. $row->franchise_school.'</div>';
                    $output .= '<div class="col_center col_center2">'.$row->franchise_name.'</div>';
                    $output .= '<div class="col_center col_center3">'.$row->franchise_email.'</div>';
                    $output .= '<div class="col_center col_center4">'.$row->franchise_phone.'</div>';
                    $output .= '<div class="col_center col_center5">'.$row->franchise_address.'</div>';
                    
                }
                $output .='</div>';
                return $output;	
            }else{
            	$output = 'No Row Found!';
            	return $output;	
            }
	}

    public function getStudentListByFranchID($fr_id){
        $this->db->select('st.*, cls.class_name');
        $this->db->from('tbl_student st');
        $this->db->join('tbl_class cls', 'cls.id=st.class_id', 'left');
        $this->db->where(['st.franchise_id'=>$fr_id]);
        $query = $this->db->get();
        return $query->result();
    }

    public function getStudentDetailByID($id){
        $this->db->select()->from('tbl_student');
        $this->db->where('id', $id);
        $query = $this->db->get();
        return $query->row();
    }
    public function getStudentEnrollmentDetailByID($id){
        $this->db->select()->from('tbl_enrollment');
        $this->db->where('student_id', $id);
        $query = $this->db->get();
        return $query->row();
    }
    public function getStudentAdmitCardDetailByID($id){
        $this->db->select()->from('tbl_admit_card');
        $this->db->where('student_id', $id);
        $query = $this->db->get();
        return $query->row();
    }

    public function getFranchiseBalanceByID($id){
        $this->db->select()->from('tbl_payment');
        $this->db->where('franchaise_id', $id);
        $this->db->order_by('id', 'DESC');
        $query = $this->db->get();
        return $query->row();
    }

    public function getClass(){
        $query = $this->db->get('tbl_class');
        return $query->result();
    }
    public function getCastCat(){
        $query = $this->db->order_by('cast_title', 'ASC')->get('tbl_cast');
        return $query->result();
    }

    public function getAjaxSubject($id){
        $this->db->select()->from('tbl_subject');
        $this->db->where('class_id', $id);
        $query = $this->db->get();
        $output = '<option value="">Select Subject</option>';
        foreach ($query->result() as $row)
        {
            $output .= '<option value="'.$row->id.'">' .$row->subject_name. ' ('.$row->subject_code.')</option>';
        }
        return $output;
    }
    public function getStudentAdmissionByID($id){
        $this->db->select()->from('tbl_student');
        $this->db->where('id', $id);
        $query = $this->db->get();
        return $query->row();
    }
} 