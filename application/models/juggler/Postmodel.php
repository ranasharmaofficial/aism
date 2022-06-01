<?php 
class Postmodel extends MY_Model{

	public function getPost(){				 
		$query = $this->db->get('tbl_post');
	return $query->result();
	}

	public function getPostByID($id){
		$this->db->select()->from('tbl_post');
		$this->db->where('id', $id);
		$query = $this->db->get();
		return $query->row();
	}

	public function deletePostByID($id){
		$this->db->where('id', $id);
        $this->db->delete('tbl_post');
        return $this->db->affected_rows();
	}
	
	
	/* Category Code Start Here */
	
	public function getCategory(){				 
		$query = $this->db->get('tbl_post_category');
	return $query->result();
	}

	public function getCategoryByID($id){
		$this->db->select()->from('tbl_post_category');
		$this->db->where('id', $id);
		$query = $this->db->get();
		return $query->row();
	}

	public function deleteCategoryByID($id){
		$this->db->where('id', $id);
        $this->db->delete('tbl_post_category');
        return $this->db->affected_rows();
	}
	
	
	/* Category Code End Here */
} 