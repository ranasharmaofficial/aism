<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Enquiry extends MY_Controller {

	public function __construct(){
        parent::__construct();
		
		$this->load->database();     
        $this->load->model('juggler/Enquirymodel');
		date_default_timezone_set('Asia/Kolkata');
    }
 	public function index()
    {    	
        $PageQry = $this->Enquirymodel->getEnquiry();
        $this->load->view('juggler/enquiry', ['PageQry'=>$PageQry]);
    }

	public function edit($id){
		$PageQry = $this->Enquirymodel->getEnquiryByID($id);
		$this->load->view('juggler/edit_enquiry', ['PageQry'=>$PageQry]);
	}

	public function update(){
		$id = $this->input->post('id');		
		$data = array(
                'name' => trim($this->input->post('name')),
				'phone' => trim($this->input->post('phone')),
				'email' => trim($this->input->post('email')),
				'subject' => trim($this->input->post('subject')),
				'message' => trim($this->input->post('message')),
				'notes' => trim($this->input->post('notes')),
				'status' => trim($this->input->post('status')),
                'modified' => date('d-m-Y g:i:s a')
		);
		
		$this->db->where('id', $id);
		$res = $this->db->update('tbl_enquiry', $data);
		if($res==true){		
		$this->session->set_flashdata('success', '<div class="alert alert-success fade show"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong><i class="fa fa-check-circle" aria-hidden="true"></i>&nbsp;Sucess!&nbsp;&nbsp;</strong>Row Updated.</div>');
		}else{
			$this->session->set_flashdata('error', '<div class="alert alert-danger fade show"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong><i class="fa fa-times-circle" aria-hidden="true"></i>&nbsp;Error!&nbsp;&nbsp;</strong>Row Not Updated.</div>');
		}
		    redirect('juggler/enquiry');
	}
	public function delete($id){
		$res = $this->Enquirymodel->deleteEnquiryByID($id);
		if($res==true){		
		$this->session->set_flashdata('success', '<div class="alert alert-success fade show"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong><i class="fa fa-check-circle" aria-hidden="true"></i>&nbsp;Sucess!&nbsp;&nbsp;</strong>Row Deleted.</div>');
		}else{
			$this->session->set_flashdata('error', '<div class="alert alert-danger fade show"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong><i class="fa fa-times-circle" aria-hidden="true"></i>&nbsp;Error!&nbsp;&nbsp;</strong>Row Not Deleted.</div>');
		}
		    redirect('juggler/enquiry');
	}
}
