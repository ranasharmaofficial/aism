<?php 

class Slidermodel extends MY_Model{

	public function getSlider(){				 
		$query = $this->db->get('tbl_slider');
	return $query->result();
	}

	public function getSliderByID($id){
		$this->db->select()->from('tbl_slider');
		$this->db->where('id', $id);
		$query = $this->db->get();
		return $query->row();
	}

	public function deleteSliderByID($id){
		$this->db->where('id', $id);
        $this->db->delete('tbl_slider');
        return $this->db->affected_rows();
	}

	public function getSliderBottom(){				 
		$query = $this->db->get('tbl_slider_bottom');
	return $query->result();
	}

	public function getSliderBottomByID($id){
		$this->db->select()->from('tbl_slider_bottom');
		$this->db->where('id', $id);
		$query = $this->db->get();
		return $query->row();
	}

	public function deleteSliderBottomByID($id){
		$this->db->where('id', $id);
        $this->db->delete('tbl_slider_bottom');
        return $this->db->affected_rows();
	}
} 