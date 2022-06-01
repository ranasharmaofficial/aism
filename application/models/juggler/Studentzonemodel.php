<?php

class Studentzonemodel extends MY_Model
{

    public function getClass()
    {
        $query = $this->db->get('tbl_class');
        return $query->result();
    }

    public function getCourse()
    {
        $query = $this->db->get('tbl_courses');
        return $query->result();
    }

    public function getCourseByID($id)
    {
        $this->db->select()->from('tbl_courses');
        $this->db->where('id', $id);
        $query = $this->db->get();
        return $query->row();
    }

    public function getClassByID($id)
    {
        $this->db->select()->from('tbl_class');
        $this->db->where('id', $id);
        $query = $this->db->get();
        return $query->row();
    }

    public function deleteClassByID($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('tbl_class');
        return $this->db->affected_rows();
    }

    public function getSubject()
    {
        $this->db->select('cl.*,sb.*');
        $this->db->from('tbl_subject sb');
        $this->db->join('tbl_class cl', 'cl.id=sb.class_id', 'left');
        $this->db->order_by('sb.id', 'ASC');
        $query = $this->db->get();
        return $query->result();
    }

    public function getSubjectByID($id)
    {
        $this->db->select()->from('tbl_subject');
        $this->db->where('id', $id);
        $query = $this->db->get();
        return $query->row();
    }

    /**
     * @param $subjectCode
     * @return mixed
     */
    public function getSubjectByCode($subjectCode)
    {
        $this->db->select()->from('tbl_subject');
        $this->db->where('subject_code', $subjectCode);
        $query = $this->db->get();
        return $query->row();
    }

    public function deleteSubjectByID($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('tbl_subject');
        return $this->db->affected_rows();
    }

    public function getFranchise()
    {
        $this->db->select()->from('tbl_franchise');
        $this->db->where('status', 1);
        $query = $this->db->get();
        return $query->result();
    }

    public function getAjaxSubject($id)
    {
        $this->db->select()->from('tbl_subject');
        $this->db->where('class_id', $id);
        $query = $this->db->get();
        $output = '<option value="">Select Subject</option>';
        foreach ($query->result() as $row) {
            $output .= '<option value="' . $row->id . '">' . $row->subject_name . ' (' . $row->subject_code . ')</option>';
        }
        return $output;
    }

    public function getStudentData()
    {
        $query = $this->db->order_by('id', 'ASC')->get('tbl_student');
        return $query->result();
    }

    public function getCastCat()
    {
        $query = $this->db->order_by('cast_title', 'ASC')->get('tbl_cast');
        return $query->result();
    }

    public function getStudentByID($id)
    {
        $this->db->select()->from('tbl_student');
        $this->db->where('id', $id);
        $query = $this->db->get();
        return $query->row();
    }

    /**
     * @param int $enrollmentNumber
     * @return mixed
     */
    public function getStudentByEnrollmentNumber($enrollmentNumber = 0)
    {
        $this->db->select()->from('tbl_student');
        $this->db->where('student_ack_id', $enrollmentNumber);
        $query = $this->db->get();
        return $query->row();
    }

    public function deleteStudentByID($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('tbl_student');
        return $this->db->affected_rows();
    }

    /*======Enrollment here========*/
    public function getEnrollmentList()
    {
        $this->db->select()->from('tbl_enrollment');
        $this->db->where('status', 1);
        $query = $this->db->get();
        return $query->result();
    }

    public function deleteEnrollmentByID($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('tbl_enrollment');
        return $this->db->affected_rows();
    }

    public function getEnrollmentDetailsByID($id)
    {
        $this->db->select()->from('tbl_enrollment');
        $this->db->where('id', $id);
        $query = $this->db->get();
        return $query->row();
    }

    /*======ADMIT CARD HERE========*/
    public function getAdmitCardList()
    {
        $this->db->select()->from('tbl_admit_card');
        $this->db->where('status', 1);
        $query = $this->db->get();
        return $query->result();
    }

    public function deleteAdmitCardByID($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('tbl_admit_card');
        return $this->db->affected_rows();
    }

    public function getAdmitCardDetailsByID($id)
    {
        $this->db->select()->from('tbl_admit_card');
        $this->db->where('id', $id);
        $query = $this->db->get();
        return $query->row();
    }

    /**
     * @param int $enrollmentNo
     * @return mixed
     */
    public function getAdmitCardDetailsByEnrollmentNumber($enrollmentNo = 0)
    {
        $this->db->select()->from('tbl_admit_card');
        $this->db->where('enrollment_no', $enrollmentNo);
        $query = $this->db->get();
        return $query->row();
    }

    public function getResultsList()
    {
        $this->db->select()->from('tbl_results');
        $this->db->order_by('created_date', 'ASC');
        $this->db->group_by('file');
        $query = $this->db->get();
        return $query->result();
    }

    public function deleteResultFile($file)
    {
        $this->db->where('file', $file);
        $this->db->delete('tbl_results');
        return $this->db->affected_rows();
    }

    public function getResultByID($id)
    {
        $this->db->select()->from('tbl_result');
        $this->db->where('id', $id);
        $query = $this->db->get();
        return $query->row();
    }

    public function deleteResultFileByID($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('tbl_result');
        return $this->db->affected_rows();
    }

    public function UnlinkFileByID($table, $id)
    {
        $this->db->select()->from($table);
        $this->db->where('id', $id);
        $query = $this->db->get();
        return $query->row();
    }

    /**
     * @return mixed
     */
    public function getResults()
    {
        $query = $this->db->get('tbl_results');
        return $query->result();
    }

    /**
     * @param int $id
     * @return mixed
     */
    public function getResultsByID($id = 0)
    {
        $this->db->select()->from('tbl_results');
        $this->db->where('id', $id);
        $query = $this->db->get();
        return $query->row();
    }

    /**
     * @param array $param
     * @return mixed
     */
    public function checkResults($param = [])
    {
        $this->db->select()->from('tbl_results');
        $this->db->where($param);
        $query = $this->db->get();
        return $query->row();
    }

    /**
     * @param int $id
     * @return mixed
     */
    public function deleteResultsByID($id = 0)
    {
        $this->db->where('id', $id);
        $this->db->delete('tbl_results');
        return $this->db->affected_rows();
    }

} 