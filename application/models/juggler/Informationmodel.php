<?php 

class Franchisesmodel extends MY_Model{

	public function getFranchises(){				 
		$query = $this->db->get('tbl_franchise');
	return $query->result();
	}

	public function getFranchisesByID($id){
		$this->db->select()->from('tbl_franchise');
		$this->db->where('id', $id);
		$query = $this->db->get();
		return $query->row();
	}

	public function deleteFranchisesByID($id){
		$this->db->where('id', $id);
        $this->db->delete('tbl_franchise');
        return $this->db->affected_rows();
	}
	
	/* public function getPaymentDataByFranchiseId($id){
		$this->db->select('p.*,p.id as pay_id,f.franchise_name,f.id as franch_id');
		$this->db->from('tbl_payment p');
		$this->db->join('tbl_franchise f','f.id=p.franchaise_id', 'left');
		$this->db->where('p.franchaise_id', 1);
		$this->db->order_by('p.id', 'ASC');
		$query = $this->db->get();
		return $query->result();

	} */
	public function deletePaymentByID($id){
		$this->db->where('id', $id);
        $this->db->delete('tbl_payment');
        return $this->db->affected_rows();
	}
} 