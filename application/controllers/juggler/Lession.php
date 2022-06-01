<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Lession extends MY_Controller {

	public function __construct(){
        parent::__construct();

		$this->load->database();
        $this->load->model('juggler/Lessionmodel');
		date_default_timezone_set('Asia/Kolkata');
    }
 	public function index()
    {
        $PageQry = $this->Lessionmodel->getLession();
        $this->load->view('juggler/lession', ['PageQry'=>$PageQry]);
    }

    public function add(){
    	$CategoryQry = $this->Lessionmodel->getCategory();
        $this->load->view('juggler/add_lession',['CategoryQry'=>$CategoryQry]);
    }

	public function insert(){

		// Slug Generator Start
	  $title = trim($this->input->post('title'));
      $url = $this->input->post('slug');

	  if(empty($url)){
	  $url = $title;
	  }

    $slug = preg_replace('/[^a-z0-9]+/i', '-', trim(strtolower($url)));
    $selectQuery = $this->db->query("SELECT * FROM tbl_lession WHERE slug LIKE '$slug%'");


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


		$config['upload_path']   = './assets/images/lession/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg|PNG|JPG|JPEG|GIF';
        $config['max_size']      = 2048;
        $this->load->library('upload', $config);
	    $this->upload->initialize($config);
	    $this->upload->do_upload('image');
	    $image = $this->upload->data();

		$data = array(
                'cid' => trim($this->input->post('cid')),
                'ccid' => trim($this->input->post('ccid')),
                'name' => trim($this->input->post('name')),
				'title' => trim($this->input->post('title')),
				'sub_title' => trim($this->input->post('sub_title')),
                'slug' => $slug,
                'duration' => trim($this->input->post('duration')),
				'short_description' => trim($this->input->post('short_description')),
				'description' => trim($this->input->post('description')),
				'image' => $image['file_name'],
				'status' => trim($this->input->post('status')),
                'modified' => date('d-m-Y g:i:s a')
		);

		$res = $this->db->insert('tbl_lession', $data);
		if($res==true){
		$this->session->set_flashdata('success', '<div class="alert alert-success fade show"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong><i class="fa fa-check-circle" aria-hidden="true"></i>&nbsp;Sucess!&nbsp;&nbsp;</strong>Row Added.</div>');
		}else{
			$this->session->set_flashdata('error', '<div class="alert alert-danger fade show"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong><i class="fa fa-times-circle" aria-hidden="true"></i>&nbsp;Error!&nbsp;&nbsp;</strong>Row Not Added.</div>');
		}
		    redirect('juggler/lession');
	}

	public function edit($id){
		$PageQry = $this->Lessionmodel->getLessionByID($id);
		$CategoryQry = $this->Lessionmodel->getCategory();
		$CoursesQry = $this->Lessionmodel->getCourses();
		$this->load->view('juggler/edit_lession', ['PageQry'=>$PageQry,'CategoryQry'=>$CategoryQry,'CoursesQry'=>$CoursesQry]);
	}

	public function update(){
		$id = $this->input->post('id');

		// Slug Generator Start

        $ServicesQry = $this->Lessionmodel->getLessionByID($id);

		$title = $this->input->post('title');

        $url = $this->input->post('slug');
		if(empty($url)){
			$url=$title;
		}

        $slug = preg_replace('/[^a-z0-9]+/i', '-', trim(strtolower($url)));

        $selectQuery = $this->db->query("SELECT * FROM tbl_lession WHERE slug LIKE '$slug%'");

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

	  $config['upload_path']   = './assets/images/lession/';
      $config['allowed_types'] = 'gif|jpg|png|jpeg|PNG|JPG|JPEG|GIF';
      $config['max_size']      = 2048;
      $this->load->library('upload', $config);
	  $this->upload->initialize($config);
	  $this->upload->do_upload('image');
	  $image = $this->upload->data();


		if($image['file_name']!==''){
		$data = array(
				'cid' => trim($this->input->post('cid')),
				'ccid' => trim($this->input->post('ccid')),
                'name' => trim($this->input->post('name')),
				'title' => trim($this->input->post('title')),
				'sub_title' => trim($this->input->post('sub_title')),
                'slug' => $slug,
                'duration' => trim($this->input->post('duration')),
				'short_description' => trim($this->input->post('short_description')),
				'description' => trim($this->input->post('description')),
				'image' => $image['file_name'],
				'status' => trim($this->input->post('status')),
                'modified' => date('d-m-Y g:i:s a')
		);
		}else{
		$data = array(
				'cid' => trim($this->input->post('cid')),
				'ccid' => trim($this->input->post('ccid')),
                'name' => trim($this->input->post('name')),
				'title' => trim($this->input->post('title')),
				'sub_title' => trim($this->input->post('sub_title')),
                'slug' => $slug,
                'duration' => trim($this->input->post('duration')),
				'short_description' => trim($this->input->post('short_description')),
				'description' => trim($this->input->post('description')),
				'status' => trim($this->input->post('status')),
                'modified' => date('d-m-Y g:i:s a')
		);
		}
		$this->db->where('id', $id);
		$res = $this->db->update('tbl_lession', $data);
		if($res==true){
		$this->session->set_flashdata('success', '<div class="alert alert-success fade show"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong><i class="fa fa-check-circle" aria-hidden="true"></i>&nbsp;Sucess!&nbsp;&nbsp;</strong>Row Updated.</div>');
		}else{
			$this->session->set_flashdata('error', '<div class="alert alert-danger fade show"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong><i class="fa fa-times-circle" aria-hidden="true"></i>&nbsp;Error!&nbsp;&nbsp;</strong>Row Not Updated.</div>');
		}
		    redirect('juggler/lession');
	}
	public function delete($id){
		$res = $this->Lessionmodel->deleteLessionByID($id);
		if($res==true){
		$this->session->set_flashdata('success', '<div class="alert alert-success fade show"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong><i class="fa fa-check-circle" aria-hidden="true"></i>&nbsp;Sucess!&nbsp;&nbsp;</strong>Row Deleted.</div>');
		}else{
			$this->session->set_flashdata('error', '<div class="alert alert-danger fade show"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong><i class="fa fa-times-circle" aria-hidden="true"></i>&nbsp;Error!&nbsp;&nbsp;</strong>Row Not Deleted.</div>');
		}
		    redirect('juggler/lession');
	}

	  public function AjaxCourse(){
	  	$id = $this->input->post('cid');
        echo $this->Lessionmodel->getAjaxCourse($id);

      

    }
}
