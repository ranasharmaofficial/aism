<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Why_choose extends MY_Controller {

	public function __construct(){
        parent::__construct();
		
		$this->load->database();     
        $this->load->model('juggler/Choosemodel');
		date_default_timezone_set('Asia/Kolkata');
    }
 	public function index()
    {    	
        $PageQry = $this->Choosemodel->getWhyChoose();
        $this->load->view('juggler/why_choose', ['PageQry'=>$PageQry]);
    }

    public function add(){
        $this->load->view('juggler/add_why_choose');
    }

	public function insert(){	
		
		
		$data = array(
                'name' => trim($this->input->post('name')),
				'description' => trim($this->input->post('description')),
				'position' => trim($this->input->post('position')),
				'icon' => trim($this->input->post('icon')),
				'status' => trim($this->input->post('status')),
                'modified' => date('d-m-Y g:i:s a')
		);

		$res = $this->db->insert('tbl_choose', $data);
		if($res==true){		
		$this->session->set_flashdata('success', '<div class="alert alert-success fade show"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong><i class="fa fa-check-circle" aria-hidden="true"></i>&nbsp;Sucess!&nbsp;&nbsp;</strong>Row Added.</div>');
		}else{
			$this->session->set_flashdata('error', '<div class="alert alert-danger fade show"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong><i class="fa fa-times-circle" aria-hidden="true"></i>&nbsp;Error!&nbsp;&nbsp;</strong>Row Not Added.</div>');
		}
		    redirect('juggler/why_choose');
	}

	public function edit($id){
		$PageQry = $this->Choosemodel->getWhyChooseByID($id);
		$this->load->view('juggler/edit_why_choose', ['PageQry'=>$PageQry]);
	}

	public function update(){
		$id = $this->input->post('id');		

		$data = array(
                'name' => trim($this->input->post('name')),
				'description' => trim($this->input->post('description')),
				'icon' => trim($this->input->post('icon')),
				'position' => trim($this->input->post('position')),
				'status' => trim($this->input->post('status')),
                'modified' => date('d-m-Y g:i:s a')
		);
		$this->db->where('id', $id);
		$res = $this->db->update('tbl_choose', $data);
		if($res==true){		
		$this->session->set_flashdata('success', '<div class="alert alert-success fade show"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong><i class="fa fa-check-circle" aria-hidden="true"></i>&nbsp;Sucess!&nbsp;&nbsp;</strong>Row Updated.</div>');
		}else{
			$this->session->set_flashdata('error', '<div class="alert alert-danger fade show"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong><i class="fa fa-times-circle" aria-hidden="true"></i>&nbsp;Error!&nbsp;&nbsp;</strong>Row Not Updated.</div>');
		}
		    redirect('juggler/why_choose');
	}
	public function delete($id){
		$res = $this->Choosemodel->deleteWhyChooseByID($id);
		if($res==true){		
		$this->session->set_flashdata('success', '<div class="alert alert-success fade show"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong><i class="fa fa-check-circle" aria-hidden="true"></i>&nbsp;Sucess!&nbsp;&nbsp;</strong>Row Deleted.</div>');
		}else{
			$this->session->set_flashdata('error', '<div class="alert alert-danger fade show"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong><i class="fa fa-times-circle" aria-hidden="true"></i>&nbsp;Error!&nbsp;&nbsp;</strong>Row Not Deleted.</div>');
		}
		    redirect('juggler/why_choose');
	}
}
