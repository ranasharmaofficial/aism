<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Book_online extends MY_Controller {

	public function __construct(){
        parent::__construct();

		$this->load->database();
        $this->load->model('juggler/Bookmodel');
		date_default_timezone_set('Asia/Kolkata');
    }
 	public function index()
    {
        $PageQry = $this->Bookmodel->getBookOnline();
        $this->load->view('juggler/book_online', ['PageQry'=>$PageQry]);
    }

    public function add(){
        $this->load->view('juggler/add_book_online');
    }

	public function insert(){

		// Slug Generator Start
	  $title = trim($this->input->post('title'));
      $url = $this->input->post('slug');

	  if(empty($url)){
	  $url = $title;
	  }

    $slug = preg_replace('/[^a-z0-9]+/i', '-', trim(strtolower($url)));
    $selectQuery = $this->db->query("SELECT * FROM tbl_book_online WHERE slug LIKE '$slug%'");


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


		$config['upload_path']   = './assets/images/book-online/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg|PNG|JPG|JPEG|GIF';
        $config['max_size']      = 2048;
        $this->load->library('upload', $config);
	    $this->upload->initialize($config);
	    $this->upload->do_upload('image');
	    $image = $this->upload->data();

		$data = array(
                'name' => trim($this->input->post('name')),
				'title' => trim($this->input->post('title')),
				'sub_title' => trim($this->input->post('sub_title')),
                'slug' => $slug,
                'cost' => trim($this->input->post('cost')),
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

		$res = $this->db->insert('tbl_book_online', $data);
		if($res==true){
		$this->session->set_flashdata('success', '<div class="alert alert-success fade show"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong><i class="fa fa-check-circle" aria-hidden="true"></i>&nbsp;Sucess!&nbsp;&nbsp;</strong>Row Added.</div>');
		}else{
			$this->session->set_flashdata('error', '<div class="alert alert-danger fade show"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong><i class="fa fa-times-circle" aria-hidden="true"></i>&nbsp;Error!&nbsp;&nbsp;</strong>Row Not Added.</div>');
		}
		    redirect('juggler/book_online');
	}

	public function edit($id){
		$PageQry = $this->Bookmodel->getBookOnlineByID($id);
		$this->load->view('juggler/edit_book_online', ['PageQry'=>$PageQry]);
	}

	public function update(){
		$id = $this->input->post('id');

		// Slug Generator Start

        $ServicesQry = $this->Bookmodel->getBookOnlineByID($id);

		$title = $this->input->post('title');

        $url = $this->input->post('slug');
		if(empty($url)){
			$url=$title;
		}

        $slug = preg_replace('/[^a-z0-9]+/i', '-', trim(strtolower($url)));

        $selectQuery = $this->db->query("SELECT * FROM tbl_book_online WHERE slug LIKE '$slug%'");

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

	  $config['upload_path']   = './assets/images/book-online/';
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
				'sub_title' => trim($this->input->post('sub_title')),
                'slug' => $slug,
                'cost' => trim($this->input->post('cost')),
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
				'sub_title' => trim($this->input->post('sub_title')),
                'slug' => $slug,
                'cost' => trim($this->input->post('cost')),
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
		$res = $this->db->update('tbl_book_online', $data);
		if($res==true){
		$this->session->set_flashdata('success', '<div class="alert alert-success fade show"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong><i class="fa fa-check-circle" aria-hidden="true"></i>&nbsp;Sucess!&nbsp;&nbsp;</strong>Row Updated.</div>');
		}else{
			$this->session->set_flashdata('error', '<div class="alert alert-danger fade show"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong><i class="fa fa-times-circle" aria-hidden="true"></i>&nbsp;Error!&nbsp;&nbsp;</strong>Row Not Updated.</div>');
		}
		    redirect('juggler/book_online');
	}
	public function delete($id){
		$res = $this->Bookmodel->deleteBookOnlineByID($id);
		if($res==true){
		$this->session->set_flashdata('success', '<div class="alert alert-success fade show"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong><i class="fa fa-check-circle" aria-hidden="true"></i>&nbsp;Sucess!&nbsp;&nbsp;</strong>Row Deleted.</div>');
		}else{
			$this->session->set_flashdata('error', '<div class="alert alert-danger fade show"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong><i class="fa fa-times-circle" aria-hidden="true"></i>&nbsp;Error!&nbsp;&nbsp;</strong>Row Not Deleted.</div>');
		}
		    redirect('juggler/book_online');
	}
}
