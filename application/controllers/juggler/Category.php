<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Category extends MY_Controller {

	public function __construct(){
        parent::__construct();
		
		$this->load->database();     
        $this->load->model('juggler/Categorymodel');
		date_default_timezone_set('Asia/Kolkata');
    }
 	public function index()
    {    	
        $PageQry = $this->Categorymodel->getCategory();
        $this->load->view('juggler/category_list', ['PageQry'=>$PageQry]);
    }

    public function add(){
        $this->load->view('juggler/add_category');
    }

	public function insert(){
		
		// Slug Generator Start
	  $category_name = trim($this->input->post('category_name'));
      $category_url = $this->input->post('category_slug');
	  
	  if(empty($category_url)){
	  $category_url = $category_name;
	  }
	
    $slug = preg_replace('/[^a-z0-9]+/i', '-', trim(strtolower($category_url)));   
    $selectQuery = $this->db->query("SELECT * FROM tbl_category WHERE category_slug LIKE '$slug%'");
	
	
    if($selectQuery->num_rows()>0){
		foreach($selectQuery->result() as $row){
			$data[] = $row->category_slug;
  		}
		 if(in_array($slug, $data)){
			$count = 0;
			while( in_array( ($slug . '-' . ++$count ), $data) );
			$slug = $slug . '-' . $count;
		 }
    }
	// Slug Generator End
	
	
		$config['upload_path']   = './assets/images/category/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg|PNG|JPG|JPEG|GIF';
        $config['max_size']      = 2048;
        $this->load->library('upload', $config);
	    $this->upload->initialize($config);
	    $this->upload->do_upload('category_image');
	    $image = $this->upload->data();
		
		$data = array(
                'category_name' => trim($this->input->post('category_name')),
                'category_slug' => $slug,
                'short_description' => trim($this->input->post('short_description')),
                'description' => trim($this->input->post('description')),
                'category_icon' => trim($this->input->post('category_icon')),
				'category_image' => $image['file_name'],
				'status' => trim($this->input->post('status')),
                'modified' => date('d-m-Y g:i:s a')
		);

		$res = $this->db->insert('tbl_category', $data);
		if($res==true){		
		$this->session->set_flashdata('success', '<div class="alert alert-success fade show"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong><i class="fa fa-check-circle" aria-hidden="true"></i>&nbsp;Sucess!&nbsp;&nbsp;</strong>Row Added.</div>');
		}else{
			$this->session->set_flashdata('error', '<div class="alert alert-danger fade show"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong><i class="fa fa-times-circle" aria-hidden="true"></i>&nbsp;Error!&nbsp;&nbsp;</strong>Row Not Added.</div>');
		}
		    redirect('juggler/category');
	}

	public function edit($id){
		$PageQry = $this->Categorymodel->getCategoryByID($id);
		$this->load->view('juggler/edit_category', ['PageQry'=>$PageQry]);
	}

	public function update(){
		$id = $this->input->post('id');

		// Slug Generator Start
		
        $CategoryQry = $this->Categorymodel->getCategoryByID($id);
		
		$category_name = $this->input->post('category_name');
		
        $category_url = $this->input->post('category_slug');
		if(empty($category_url)){
			$category_url=$category_name;
		}
	
        $slug = preg_replace('/[^a-z0-9]+/i', '-', trim(strtolower($category_url)));
   
        $selectQuery = $this->db->query("SELECT * FROM tbl_category WHERE category_slug LIKE '$slug%'");
	
	    if($CategoryQry->category_slug!=$slug){
	
        if($selectQuery->num_rows()>0){
		foreach($selectQuery->result() as $row){
			$data[] = $row->category_slug;
  		 }
		
		 if(in_array($slug, $data)){
			$count = 0;
			while( in_array( ($slug . '-' . ++$count ), $data) );
			$slug = $slug . '-' . $count;
		   }
       }
		}else{
		$slug = $slug;
		}
	  // Slug Generator End

	  $config['upload_path']   = './assets/images/category/';
      $config['allowed_types'] = 'gif|jpg|png|jpeg|PNG|JPG|JPEG|GIF';
      $config['max_size']      = 2048;
      $this->load->library('upload', $config);
	  $this->upload->initialize($config);
	  $this->upload->do_upload('category_image');
	  $image = $this->upload->data();


		if($image['file_name']!==''){
		$data = array(
                'category_name' => trim($this->input->post('category_name')),
                'category_slug' => $slug,
                'short_description' => trim($this->input->post('short_description')),
                'description' => trim($this->input->post('description')),
                'category_icon' => trim($this->input->post('category_icon')),
				'category_image' => $image['file_name'],
				'status' => trim($this->input->post('status')),
                'modified' => date('d-m-Y g:i:s a')
		);
		}else{
		$data = array(
                'category_name' => trim($this->input->post('category_name')),
                'category_slug' => $slug,
                'short_description' => trim($this->input->post('short_description')),
                'description' => trim($this->input->post('description')),
                'category_icon' => trim($this->input->post('category_icon')),
				'status' => trim($this->input->post('status')),
                'modified' => date('d-m-Y g:i:s a')
		);
		}
		$this->db->where('id', $id);
		$res = $this->db->update('tbl_category', $data);
		if($res==true){		
		$this->session->set_flashdata('success', '<div class="alert alert-success fade show"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong><i class="fa fa-check-circle" aria-hidden="true"></i>&nbsp;Sucess!&nbsp;&nbsp;</strong>Row Updated.</div>');
		}else{
			$this->session->set_flashdata('error', '<div class="alert alert-danger fade show"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong><i class="fa fa-times-circle" aria-hidden="true"></i>&nbsp;Error!&nbsp;&nbsp;</strong>Row Not Updated.</div>');
		}
		    redirect('juggler/category');
	}
	public function delete($id){
		$res = $this->Categorymodel->deleteCategoryByID($id);
		if($res==true){		
		$this->session->set_flashdata('success', '<div class="alert alert-success fade show"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong><i class="fa fa-check-circle" aria-hidden="true"></i>&nbsp;Sucess!&nbsp;&nbsp;</strong>Row Deleted.</div>');
		}else{
			$this->session->set_flashdata('error', '<div class="alert alert-danger fade show"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong><i class="fa fa-times-circle" aria-hidden="true"></i>&nbsp;Error!&nbsp;&nbsp;</strong>Row Not Deleted.</div>');
		}
		    redirect('juggler/category');
	}
}
