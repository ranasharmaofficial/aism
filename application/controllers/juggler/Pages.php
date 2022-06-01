<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends MY_Controller {
 
 	public function __construct(){
        parent::__construct();
		
		$this->load->database();     
        $this->load->model('juggler/Pagesmodel');
		date_default_timezone_set('Asia/Kolkata');
    }
		 
 	public function index()
    {

        $pages = $this->Pagesmodel->getPage();
        $this->load->view('juggler/page_list', ['pages'=>$pages]);
       
    }

    public function add(){
        $this->load->view('juggler/add_page');
       
    }
 
	public function insert(){
		$data = array(
                'page_name' => trim($this->input->post('page_name')),
                'page_title' => trim($this->input->post('page_title')),
                'page_sub_title' => trim($this->input->post('page_sub_title')),
                'page_meta_title' => trim($this->input->post('page_meta_title')),
                'page_meta_keywords' => trim($this->input->post('page_meta_keywords')),
                'page_meta_description' => trim($this->input->post('page_meta_description')),
                'page_description' => trim($this->input->post('page_description')),
				'status' => trim($this->input->post('status')),
                'modified' => date('d-m-Y g:i:s a')
		);
		
		$res = $this->db->insert('tbl_pages', $data);
		if($res==true){		
				$this->session->set_flashdata('success', '<div class="alert alert-success fade show"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong><i class="fa fa-check-circle" aria-hidden="true"></i>&nbsp;Sucess!&nbsp;&nbsp;</strong>Row Added.</div>');
				}else{
					$this->session->set_flashdata('error', '<div class="alert alert-danger fade show"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong><i class="fa fa-times-circle" aria-hidden="true"></i>&nbsp;Error!&nbsp;&nbsp;</strong>Row Not Added.</div>');
				}
		    redirect('juggler/pages');
	}

	public function edit($id){
		$PageQry = $this->Pagesmodel->getPageByID($id);		 
		$this->load->view('juggler/edit_page', ['PageQry'=>$PageQry]);
	}

	public function update(){
		$id = $this->input->post('id');
		$data = array(
                'page_name' => trim($this->input->post('page_name')),
                'page_title' => trim($this->input->post('page_title')),
                'page_sub_title' => trim($this->input->post('page_sub_title')),
                'page_meta_title' => trim($this->input->post('page_meta_title')),
                'page_meta_keywords' => trim($this->input->post('page_meta_keywords')),
                'page_meta_description' => trim($this->input->post('page_meta_description')),
                'page_description' => trim($this->input->post('page_description')),
				'status' => trim($this->input->post('status')),
                'modified' => date('d-m-Y g:i:s a')
		);
		$this->db->where('id', $id);
		$res = $this->db->update('tbl_pages', $data);
		if($res==true){		
		$this->session->set_flashdata('success', '<div class="alert alert-success fade show"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong><i class="fa fa-check-circle" aria-hidden="true"></i>&nbsp;Sucess!&nbsp;&nbsp;</strong>Row Updated.</div>');
		}else{
			$this->session->set_flashdata('error', '<div class="alert alert-danger fade show"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong><i class="fa fa-times-circle" aria-hidden="true"></i>&nbsp;Error!&nbsp;&nbsp;</strong>Row Not Updated.</div>');
		}
		    redirect('juggler/pages');
	}
	public function delete($id){
		$res = $this->Pagesmodel->deletePageByID($id);		 
		if($res==true){		
		$this->session->set_flashdata('success', '<div class="alert alert-success fade show"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong><i class="fa fa-check-circle" aria-hidden="true"></i>&nbsp;Sucess!&nbsp;&nbsp;</strong>Row Deleted.</div>');
		}else{
			$this->session->set_flashdata('error', '<div class="alert alert-danger fade show"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong><i class="fa fa-times-circle" aria-hidden="true"></i>&nbsp;Error!&nbsp;&nbsp;</strong>Row Not Deleted.</div>');
		}
		    redirect('juggler/pages');
	}
}
 