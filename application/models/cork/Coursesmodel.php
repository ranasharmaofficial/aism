<?php

class Coursesmodel extends MY_Model
{


    public function getPage()
    {

        $q = $this->db->where(['id' => 42, 'status' => 1])->get('tbl_pages');

        return $q->row();

    }

    public function getCourses()
    {
        $this->db->select()->from('tbl_courses');
        $this->db->where('status', 1);
        $query = $this->db->get();
        return $query->result();
    }

    public function getCoursesByID($id)
    {
        $this->db->select()->from('tbl_courses');
        $this->db->where('id', $id);
        $query = $this->db->get();
        return $query->row();
    }

    public function getCoursesByCategoryID($id)
    {
        $this->db->select(['id', 'name', 'slug'])->from('tbl_courses');
        $this->db->where('cid', $id);
        $this->db->where('status', 1);
        $query = $this->db->get();
        return $query->result();
    }

    public function getLessionByCID($id)
    {
        $this->db->select()->from('tbl_lession');
        $this->db->where('ccid', $id);
        $query = $this->db->get();
        return $query->result();
    }

    public function getApply()
    {
        $this->db->select()->from('tbl_how_to_apply');
        $this->db->limit(3);
        $this->db->where('status', 1);
        $query = $this->db->get();
        return $query->result();
    }

    public function getCategory()
    {
        $this->db->select()->from('tbl_category');
        $this->db->where('status', 1);
        $query = $this->db->get();
        return $query->result();
    }

    public function getCategoryByID($id)
    {
        $this->db->select()->from('tbl_category');
        $this->db->where('id', $id);
        $query = $this->db->get();
        return $query->row();
    }

    public function getCoursesByCID($id)
    {
        $this->db->select()->from('tbl_courses');
        $this->db->where('cid', $id);
        $query = $this->db->get();
        return $query->result();
    }
}