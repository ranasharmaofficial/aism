<?php 

class Portfoliomodel extends MY_Model{

	public function getPortfolio(){				 
		$query = $this->db->get('tbl_portfolio');
	return $query->result();
	}

	public function getPortfolioByID($id){
		$this->db->select()->from('tbl_portfolio');
		$this->db->where('id', $id);
		$query = $this->db->get();
		return $query->row();
	}

	public function deletePortfolioByID($id){
		$this->db->where('id', $id);
        $this->db->delete('tbl_portfolio');
        return $this->db->affected_rows();
	}
} 