<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Faq extends MY_Controller {

	public function __construct(){
        parent::__construct();
		
		$this->load->database();     
        $this->load->model('juggler/Faqmodel');
		date_default_timezone_set('Asia/Kolkata');
    }
 	public function index()
    {    	
        $PageQry = $this->Faqmodel->getFaq();
        $this->load->view('juggler/faq', ['PageQry'=>$PageQry]);
    }

    public function add(){
        $this->load->view('juggler/add_faq');
    }

	public function insert(){	
		
		
		$data = array(
                'title' => trim($this->input->post('title')),
				'description' => trim($this->input->post('description')),
				'status' => trim($this->input->post('status')),
                'modified' => date('d-m-Y g:i:s a')
		);

		$res = $this->db->insert('tbl_faq', $data);
		if($res==true){		
		$this->session->set_flashdata('success', '<div class="alert alert-success fade show"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong><i class="fa fa-check-circle" aria-hidden="true"></i>&nbsp;Sucess!&nbsp;&nbsp;</strong>Row Added.</div>');
		}else{
			$this->session->set_flashdata('error', '<div class="alert alert-danger fade show"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong><i class="fa fa-times-circle" aria-hidden="true"></i>&nbsp;Error!&nbsp;&nbsp;</strong>Row Not Added.</div>');
		}
		    redirect('juggler/faq');
	}

	public function edit($id){
		$PageQry = $this->Faqmodel->getFaqByID($id);
		$this->load->view('juggler/edit_faq', ['PageQry'=>$PageQry]);
	}

	public function update(){
		$id = $this->input->post('id');	

	  
		$data = array(
                'title' => trim($this->input->post('title')),
				'description' => trim($this->input->post('description')),
				'status' => trim($this->input->post('status')),
                'modified' => date('d-m-Y g:i:s a')
		);
		$this->db->where('id', $id);
		$res = $this->db->update('tbl_faq', $data);
		if($res==true){		
		$this->session->set_flashdata('success', '<div class="alert alert-success fade show"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong><i class="fa fa-check-circle" aria-hidden="true"></i>&nbsp;Sucess!&nbsp;&nbsp;</strong>Row Updated.</div>');
		}else{
			$this->session->set_flashdata('error', '<div class="alert alert-danger fade show"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong><i class="fa fa-times-circle" aria-hidden="true"></i>&nbsp;Error!&nbsp;&nbsp;</strong>Row Not Updated.</div>');
		}
		    redirect('juggler/faq');
	}
	public function delete($id){
		$res = $this->Faqmodel->deleteFaqByID($id);
		if($res==true){		
		$this->session->set_flashdata('success', '<div class="alert alert-success fade show"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong><i class="fa fa-check-circle" aria-hidden="true"></i>&nbsp;Sucess!&nbsp;&nbsp;</strong>Row Deleted.</div>');
		}else{
			$this->session->set_flashdata('error', '<div class="alert alert-danger fade show"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong><i class="fa fa-times-circle" aria-hidden="true"></i>&nbsp;Error!&nbsp;&nbsp;</strong>Row Not Deleted.</div>');
		}
		    redirect('juggler/faq');
	}
}
