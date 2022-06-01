<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile_page extends MY_Controller {
 
 	public function __construct(){
        parent::__construct();
		
		$this->load->database();     
        $this->load->model('juggler/Profilepagemodel');
		date_default_timezone_set('Asia/Kolkata');
    }
		 
 	public function index()
    {

        $PageQry = $this->Profilepagemodel->getPageByID();
        $this->load->view('juggler/profile_page', ['PageQry'=>$PageQry]);
       
    }

   

	public function update(){
		$id = $this->input->post('id');
		$data = array(
                'name' => trim($this->input->post('name')),
                'title' => trim($this->input->post('title')),
                'sub_title' => trim($this->input->post('sub_title')),
                'meta_title' => trim($this->input->post('meta_title')),
                'meta_keywords' => trim($this->input->post('meta_keywords')),
                'meta_description' => trim($this->input->post('meta_description')),
                'short_description' => trim($this->input->post('short_description')),
                'description' => trim($this->input->post('description')),
				'status' => trim($this->input->post('status')),
                'modified' => date('d-m-Y g:i:s a')
		);
		$this->db->where('id', 1);
		$res = $this->db->update('tbl_profile', $data);
		if($res==true){		
		$this->session->set_flashdata('success', '<div class="alert alert-success fade show"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong><i class="fa fa-check-circle" aria-hidden="true"></i>&nbsp;Sucess!&nbsp;&nbsp;</strong>Row Updated.</div>');
		}else{
			$this->session->set_flashdata('error', '<div class="alert alert-danger fade show"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong><i class="fa fa-times-circle" aria-hidden="true"></i>&nbsp;Error!&nbsp;&nbsp;</strong>Row Not Updated.</div>');
		}
		    redirect('juggler/profile_page');
	}

}
 