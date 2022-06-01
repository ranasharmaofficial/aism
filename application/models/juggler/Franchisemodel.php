<?php 



class Franchisemodel extends MY_Model{
	public function getFranchise(){				 
		$query = $this->db->get('tbl_franchise');
	return $query->result();
	}
	public function getFranchiseByID($id){
		$this->db->select()->from('tbl_franchise');
		$this->db->where('id', $id);
		$query = $this->db->get();
		return $query->row();
	}
	public function deleteFranchiseByID($id){
		$this->db->where('id', $id);
        $this->db->delete('tbl_franchise');
        return $this->db->affected_rows();
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

} 