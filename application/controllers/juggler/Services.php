<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Services extends MY_Controller {

	public function __construct(){
        parent::__construct();
		
		$this->load->database();     
        $this->load->model('juggler/Servicesmodel');
		date_default_timezone_set('Asia/Kolkata');
    }
 	public function index()
    {    	
        $PageQry = $this->Servicesmodel->getServices();
        $this->load->view('juggler/services', ['PageQry'=>$PageQry]);
    }

    public function add(){
        $this->load->view('juggler/add_services');
    }

	public function insert(){
		
		// Slug Generator Start
	  $title = trim($this->input->post('title'));
      $url = $this->input->post('slug');
	  
	  if(empty($url)){
	  $url = $title;
	  }
	
    $slug = preg_replace('/[^a-z0-9]+/i', '-', trim(strtolower($url)));   
    $selectQuery = $this->db->query("SELECT * FROM tbl_services WHERE slug LIKE '$slug%'");
	
	
    if($selectQuery->num_rows()>0){
		foreach($selectQuery->result() as $row){
			$data[] = $row->slug;
  		}
		 if(in_array($slug, $data)){
			$count = 0;
			while( in_array( ($slug . '-' . ++$count ), $data) );
			$slug = $slug . '-' . $count;
		 }
    }
	// Slug Generator End
	
	
		$config['upload_path']   = './assets/images/services/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg|PNG|JPG|JPEG|GIF';
        $config['max_size']      = 2048;
        $this->load->library('upload', $config);
	    $this->upload->initialize($config);
	    $this->upload->do_upload('image');
	    $image = $this->upload->data();
		
		$data = array(
                'name' => trim($this->input->post('name')),
				'title' => trim($this->input->post('title')),
                'slug' => $slug,
				'meta_title' => trim($this->input->post('meta_title')),
				'meta_keywords' => trim($this->input->post('meta_keywords')),
				'meta_description' => trim($this->input->post('meta_description')),
				'short_description' => trim($this->input->post('short_description')),
				'description' => trim($this->input->post('description')),
				'image' => $image['file_name'],
				'featured' => trim($this->input->post('featured')),
				'status' => trim($this->input->post('status')),
                'modified' => date('d-m-Y g:i:s a')
		);

		$res = $this->db->insert('tbl_services', $data);
		if($res==true){		
		$this->session->set_flashdata('success', '<div class="alert alert-success fade show"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong><i class="fa fa-check-circle" aria-hidden="true"></i>&nbsp;Sucess!&nbsp;&nbsp;</strong>Row Added.</div>');
		}else{
			$this->session->set_flashdata('error', '<div class="alert alert-danger fade show"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong><i class="fa fa-times-circle" aria-hidden="true"></i>&nbsp;Error!&nbsp;&nbsp;</strong>Row Not Added.</div>');
		}
		    redirect('juggler/services');
	}

	public function edit($id){
		$PageQry = $this->Servicesmodel->getServicesByID($id);
		$this->load->view('juggler/edit_services', ['PageQry'=>$PageQry]);
	}

	public function update(){
		$id = $this->input->post('id');

		// Slug Generator Start
		
        $ServicesQry = $this->Servicesmodel->getServicesByID($id);
		
		$title = $this->input->post('title');
		
        $url = $this->input->post('slug');
		if(empty($url)){
			$url=$title;
		}
	
        $slug = preg_replace('/[^a-z0-9]+/i', '-', trim(strtolower($url)));
   
        $selectQuery = $this->db->query("SELECT * FROM tbl_services WHERE slug LIKE '$slug%'");
	
	    if($ServicesQry->slug!=$slug){
	
        if($selectQuery->num_rows()>0){
		foreach($selectQuery->result() as $row){
			$data[] = $row->slug;
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

	  $config['upload_path']   = './assets/images/services/';
      $config['allowed_types'] = 'gif|jpg|png|jpeg|PNG|JPG|JPEG|GIF';
      $config['max_size']      = 2048;
      $this->load->library('upload', $config);
	  $this->upload->initialize($config);
	  $this->upload->do_upload('image');
	  $image = $this->upload->data();


		if($image['file_name']!==''){
		$data = array(
                'name' => trim($this->input->post('name')),
				'title' => trim($this->input->post('title')),
                'slug' => $slug,
				'meta_title' => trim($this->input->post('meta_title')),
				'meta_keywords' => trim($this->input->post('meta_keywords')),
				'meta_description' => trim($this->input->post('meta_description')),
				'short_description' => trim($this->input->post('short_description')),
				'description' => trim($this->input->post('description')),
				'image' => $image['file_name'],
				'featured' => trim($this->input->post('featured')),
				'status' => trim($this->input->post('status')),
                'modified' => date('d-m-Y g:i:s a')
		);
		}else{
		$data = array(
                'name' => trim($this->input->post('name')),
				'title' => trim($this->input->post('title')),
                'slug' => $slug,
				'meta_title' => trim($this->input->post('meta_title')),
				'meta_keywords' => trim($this->input->post('meta_keywords')),
				'meta_description' => trim($this->input->post('meta_description')),
				'short_description' => trim($this->input->post('short_description')),
				'description' => trim($this->input->post('description')),
				'featured' => trim($this->input->post('featured')),
				'status' => trim($this->input->post('status')),
                'modified' => date('d-m-Y g:i:s a')
		);
		}
		$this->db->where('id', $id);
		$res = $this->db->update('tbl_services', $data);
		if($res==true){		
		$this->session->set_flashdata('success', '<div class="alert alert-success fade show"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong><i class="fa fa-check-circle" aria-hidden="true"></i>&nbsp;Sucess!&nbsp;&nbsp;</strong>Row Updated.</div>');
		}else{
			$this->session->set_flashdata('error', '<div class="alert alert-danger fade show"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong><i class="fa fa-times-circle" aria-hidden="true"></i>&nbsp;Error!&nbsp;&nbsp;</strong>Row Not Updated.</div>');
		}
		    redirect('juggler/services');
	}
	public function delete($id){
		$res = $this->Servicesmodel->deleteServicesByID($id);
		if($res==true){		
		$this->session->set_flashdata('success', '<div class="alert alert-success fade show"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong><i class="fa fa-check-circle" aria-hidden="true"></i>&nbsp;Sucess!&nbsp;&nbsp;</strong>Row Deleted.</div>');
		}else{
			$this->session->set_flashdata('error', '<div class="alert alert-danger fade show"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong><i class="fa fa-times-circle" aria-hidden="true"></i>&nbsp;Error!&nbsp;&nbsp;</strong>Row Not Deleted.</div>');
		}
		    redirect('juggler/services');
	}
}
