<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Franchises extends MY_Controller {

	public function __construct(){
        parent::__construct();
		
		$this->load->database();     
        $this->load->model('juggler/Franchisesmodel');
        $this->load->model('juggler/Franchisesmodel');
		date_default_timezone_set('Asia/Kolkata');
    }
 	public function index()
    {    	
        $PageQry = $this->Franchisesmodel->getFranchises();
        $this->load->view('juggler/franchises', ['PageQry'=>$PageQry]);
    }

    public function add(){

    	$StateQry = $this->Franchisesmodel->getState();
        //$CityQry = $this->Franchisesmodel->getCity();		
		$this->load->view('juggler/add_franchise', ['StateQry'=>$StateQry]);

       // $this->load->view('juggler/add_franchise');
    }

	public function insert(){	
		$email = $this->input->post('email');
		$chkData = $this->db->where('franchise_email',$email)->get('tbl_franchise')->num_rows();
		if($chkData > 0){
			$this->session->set_tempdata('exist','*This email id already Exist!!', 7);
			redirect('juggler/franchises/add');
		}else{
		
				$data = array(
					'state_id' => trim($this->input->post('state_id')),
					'city_id' => trim($this->input->post('city_id')),
					'franchise_name' => trim($this->input->post('name')),
					'franchise_email' => trim($this->input->post('email')),
					'franchise_school' => trim($this->input->post('school_name')),
					'franchise_phone' => trim($this->input->post('phone')),
					'franchise_address' => trim($this->input->post('address')),
					'password' => md5($this->input->post('password')),
					'status' => trim($this->input->post('status')),
					'modified' => date('d-m-Y g:i:s a')
				);
			}
			$res = $this->db->insert('tbl_franchise', $data);
			if($res==true){
				$last_id = $this->db->insert_id();
				$FranchiseUniq = "10010".$last_id;
				$dataUp = array(
					'franchise_unique_id' => $FranchiseUniq
				);
				$this->db->where('id',$last_id);
				$this->db->update('tbl_franchise', $dataUp);
			$this->session->set_tempdata('success', '<div class="alert alert-success fade show"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong><i class="fa fa-check-circle" aria-hidden="true"></i>&nbsp;Sucess!&nbsp;&nbsp;</strong>Row Added.</div>', 10);
			}else{
				$this->session->set_tempdata('error', '<div class="alert alert-danger fade show"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong><i class="fa fa-times-circle" aria-hidden="true"></i>&nbsp;Error!&nbsp;&nbsp;</strong>Row Not Added.</div>', 10);
			}
				redirect('juggler/franchises');
					
	}

	public function edit($id){
		$PageQry = $this->Franchisesmodel->getFranchisesByID($id);
		$StateQry = $this->Franchisesmodel->getState();
        //$CityQry = $this->Franchisesmodel->getCity();		
		$this->load->view('juggler/edit_franchise', ['PageQry'=>$PageQry,'StateQry'=>$StateQry]);
	}

	public function update(){
		$id = $this->input->post('id');	
			$data = array(
				'state_id' => trim($this->input->post('state_id')),
				'city_id' => trim($this->input->post('city_id')),
				'franchise_name' => trim($this->input->post('name')),
				'franchise_email' => trim($this->input->post('email')),
				'franchise_school' => trim($this->input->post('school_name')),
				'franchise_phone' => trim($this->input->post('phone')),
				'franchise_address' => trim($this->input->post('address')),
				'password' => md5($this->input->post('password')),
				'status' => trim($this->input->post('status')),
				'modified' => date('d-m-Y g:i:s a')
			);
		
		$this->db->where('id', $id);
		$res = $this->db->update('tbl_franchise', $data);
		if($res==true){		
		$this->session->set_tempdata('success', '<div class="alert alert-success fade show"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong><i class="fa fa-check-circle" aria-hidden="true"></i>&nbsp;Sucess!&nbsp;&nbsp;</strong>Row Updated.</div>', 10);
		}else{
			$this->session->set_tempdata('error', '<div class="alert alert-danger fade show"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong><i class="fa fa-times-circle" aria-hidden="true"></i>&nbsp;Error!&nbsp;&nbsp;</strong>Row Not Updated.</div>', 10);
		}
		    redirect('juggler/franchises');
	}
	public function delete($id){
		$res = $this->Franchisesmodel->deleteFranchisesByID($id);
		if($res==true){		
		$this->session->set_tempdata('success', '<div class="alert alert-success fade show"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong><i class="fa fa-check-circle" aria-hidden="true"></i>&nbsp;Sucess!&nbsp;&nbsp;</strong>Row Deleted.</div>', 10);
		}else{
			$this->session->set_tempdata('error', '<div class="alert alert-danger fade show"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong><i class="fa fa-times-circle" aria-hidden="true"></i>&nbsp;Error!&nbsp;&nbsp;</strong>Row Not Deleted.</div>', 10);
		}
		    redirect('juggler/franchises');
	}
	
	public function add_pay($id){
		$FranQry = $this->Franchisesmodel->getFranchisesByID($id);
		$this->load->view('juggler/add_payment', ['FranQry'=>$FranQry]);
	}
	
	public function insert_payment(){
			$data = array(
				'franchaise_id' => trim($this->input->post('franchise_id')),
				'school_name' => trim($this->input->post('school_name')),
				'center_code' => trim($this->input->post('center_code')),
				'credit_amount' => trim($this->input->post('pay_mount')),
				'status' => 'credited',
				'created_date' => date('Y-m-d h:i:s')
			);
		
		$res = $this->db->insert('tbl_payment', $data);
		if($res==true){		
		$this->session->set_tempdata('success', '<div class="alert alert-success fade show"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong><i class="fa fa-check-circle" aria-hidden="true"></i>&nbsp;Sucess!&nbsp;&nbsp;</strong>Payment Added.</div>', 6);
		}else{
			$this->session->set_tempdata('error', '<div class="alert alert-danger fade show"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong><i class="fa fa-times-circle" aria-hidden="true"></i>&nbsp;Error!&nbsp;&nbsp;</strong>Payment Not Updated.</div>', 6);
		}
		    redirect('juggler/franchises');
	}
	
	public function view_pay(){
		$this->load->view('juggler/payment_list');
	}
	
	public function delete_payment($id){
		$res = $this->Franchisesmodel->deletePaymentByID($id);
		if($res==true){		
		$this->session->set_tempdata('success', '<div class="alert alert-success fade show"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong><i class="fa fa-check-circle" aria-hidden="true"></i>&nbsp;Sucess!&nbsp;&nbsp;</strong>Row Deleted.</div>',5);
		}else{
			$this->session->set_tempdata('error', '<div class="alert alert-danger fade show"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong><i class="fa fa-times-circle" aria-hidden="true"></i>&nbsp;Error!&nbsp;&nbsp;</strong>Row Not Deleted.</div>',5);
		}
		    redirect($_SERVER['HTTP_REFERER']);
			//redirect('juggler/franchises/view_pay');
	}
}
