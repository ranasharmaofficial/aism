<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Slider extends MY_Controller {

	public function __construct(){
        parent::__construct();
		
		$this->load->database();     
        $this->load->model('juggler/Slidermodel');
		date_default_timezone_set('Asia/Kolkata');
    }
 	public function index()
    {    	
        $PageQry = $this->Slidermodel->getSlider();
        $this->load->view('juggler/slider', ['PageQry'=>$PageQry]);
    }

    public function add(){
        $this->load->view('juggler/add_slider');
    }

	public function insert(){	
		$config['upload_path']   = './assets/images/slider/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg|PNG|JPG|JPEG|GIF';
        $config['max_size']      = 2048;
        $this->load->library('upload', $config);
	    $this->upload->initialize($config);
	    $this->upload->do_upload('image');
	    $image = $this->upload->data();
		
		$data = array(
                'name' => trim($this->input->post('name')),
				'description' => trim($this->input->post('description')),
				'image' => $image['file_name'],
				'url' => trim($this->input->post('url')),
				'position' => trim($this->input->post('position')),
				'status' => trim($this->input->post('status')),
                'modified' => date('d-m-Y g:i:s a')
		);

		$res = $this->db->insert('tbl_slider', $data);
		if($res==true){		
		$this->session->set_flashdata('success', '<div class="alert alert-success fade show"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong><i class="fa fa-check-circle" aria-hidden="true"></i>&nbsp;Sucess!&nbsp;&nbsp;</strong>Row Added.</div>');
		}else{
			$this->session->set_flashdata('error', '<div class="alert alert-danger fade show"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong><i class="fa fa-times-circle" aria-hidden="true"></i>&nbsp;Error!&nbsp;&nbsp;</strong>Row Not Added.</div>');
		}
		    redirect('juggler/slider');
	}

	public function edit($id){
		$PageQry = $this->Slidermodel->getSliderByID($id);
		$this->load->view('juggler/edit_slider', ['PageQry'=>$PageQry]);
	}

	public function update(){
		$id = $this->input->post('id');		

	  $config['upload_path']   = './assets/images/slider/';
      $config['allowed_types'] = 'gif|jpg|png|jpeg|PNG|JPG|JPEG|GIF';
      $config['max_size']      = 2048;
      $this->load->library('upload', $config);
	  $this->upload->initialize($config);
	  $this->upload->do_upload('image');
	  $image = $this->upload->data();


		if($image['file_name']!==''){
		$data = array(
                'name' => trim($this->input->post('name')),
				'description' => trim($this->input->post('description')),
				'image' => $image['file_name'],
				'url' => trim($this->input->post('url')),
				'position' => trim($this->input->post('position')),
				'status' => trim($this->input->post('status')),
                'modified' => date('d-m-Y g:i:s a')
		);
		}else{
		$data = array(
                'name' => trim($this->input->post('name')),
				'description' => trim($this->input->post('description')),
				'url' => trim($this->input->post('url')),
				'position' => trim($this->input->post('position')),
				'status' => trim($this->input->post('status')),
                'modified' => date('d-m-Y g:i:s a')
		);
		}
		$this->db->where('id', $id);
		$res = $this->db->update('tbl_slider', $data);
		if($res==true){		
		$this->session->set_flashdata('success', '<div class="alert alert-success fade show"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong><i class="fa fa-check-circle" aria-hidden="true"></i>&nbsp;Sucess!&nbsp;&nbsp;</strong>Row Updated.</div>');
		}else{
			$this->session->set_flashdata('error', '<div class="alert alert-danger fade show"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong><i class="fa fa-times-circle" aria-hidden="true"></i>&nbsp;Error!&nbsp;&nbsp;</strong>Row Not Updated.</div>');
		}
		    redirect('juggler/slider');
	}
	public function delete($id){
		$res = $this->Slidermodel->deleteSliderByID($id);
		if($res==true){		
		$this->session->set_flashdata('success', '<div class="alert alert-success fade show"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong><i class="fa fa-check-circle" aria-hidden="true"></i>&nbsp;Sucess!&nbsp;&nbsp;</strong>Row Deleted.</div>');
		}else{
			$this->session->set_flashdata('error', '<div class="alert alert-danger fade show"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong><i class="fa fa-times-circle" aria-hidden="true"></i>&nbsp;Error!&nbsp;&nbsp;</strong>Row Not Deleted.</div>');
		}
		    redirect('juggler/slider');
	}
	public function slider_bottom()
    {    	
        $PageQry = $this->Slidermodel->getSliderBottom();
        $this->load->view('juggler/slider_bottom', ['PageQry'=>$PageQry]);
    }
	  public function add_slider_bottom(){
        $this->load->view('juggler/add_slider_bottom');
    }

    public function insert_slider_bottom(){	
		$config['upload_path']   = './assets/images/sbottom/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg|PNG|JPG|JPEG|GIF';
        $config['max_size']      = 2048;
        $this->load->library('upload', $config);
	    $this->upload->initialize($config);
	    $this->upload->do_upload('image');
	    $image = $this->upload->data();
		
		$data = array(
                'name' => trim($this->input->post('name')),
                'sub_title' => trim($this->input->post('sub_title')),
				'description' => trim($this->input->post('description')),
				'image' => $image['file_name'],
				'url' => trim($this->input->post('url')),
				'position' => trim($this->input->post('position')),
				'status' => trim($this->input->post('status')),
                'modified' => date('d-m-Y g:i:s a')
		);

		$res = $this->db->insert('tbl_slider_bottom', $data);
		if($res==true){		
		$this->session->set_flashdata('success', '<div class="alert alert-success fade show"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong><i class="fa fa-check-circle" aria-hidden="true"></i>&nbsp;Sucess!&nbsp;&nbsp;</strong>Row Added.</div>');
		}else{
			$this->session->set_flashdata('error', '<div class="alert alert-danger fade show"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong><i class="fa fa-times-circle" aria-hidden="true"></i>&nbsp;Error!&nbsp;&nbsp;</strong>Row Not Added.</div>');
		}
		    redirect('juggler/slider/slider-bottom');
	}

    public function edit_slider_bottom($id){
		$PageQry = $this->Slidermodel->getSliderBottomByID($id);
		$this->load->view('juggler/edit_slider_bottom', ['PageQry'=>$PageQry]);
	}
	public function update_slider_bottom(){
		$id = $this->input->post('id');		

	  $config['upload_path']   = './assets/images/sbottom/';
      $config['allowed_types'] = 'gif|jpg|png|jpeg|PNG|JPG|JPEG|GIF';
      $config['max_size']      = 2048;
      $this->load->library('upload', $config);
	  $this->upload->initialize($config);
	  $this->upload->do_upload('image');
	  $image = $this->upload->data();


		if($image['file_name']!==''){
		$data = array(
                'name' => trim($this->input->post('name')),
                'sub_title' => trim($this->input->post('sub_title')),
				'description' => trim($this->input->post('description')),
				'image' => $image['file_name'],
				'url' => trim($this->input->post('url')),
				'position' => trim($this->input->post('position')),
				'status' => trim($this->input->post('status')),
                'modified' => date('d-m-Y g:i:s a')
		);
		}else{
		$data = array(
                'name' => trim($this->input->post('name')),
                'sub_title' => trim($this->input->post('sub_title')),
				'description' => trim($this->input->post('description')),
				'url' => trim($this->input->post('url')),
				'position' => trim($this->input->post('position')),
				'status' => trim($this->input->post('status')),
                'modified' => date('d-m-Y g:i:s a')
		);
		}
		$this->db->where('id', $id);
		$res = $this->db->update('tbl_slider_bottom', $data);
		if($res==true){		
		$this->session->set_flashdata('success', '<div class="alert alert-success fade show"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong><i class="fa fa-check-circle" aria-hidden="true"></i>&nbsp;Sucess!&nbsp;&nbsp;</strong>Row Updated.</div>');
		}else{
			$this->session->set_flashdata('error', '<div class="alert alert-danger fade show"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong><i class="fa fa-times-circle" aria-hidden="true"></i>&nbsp;Error!&nbsp;&nbsp;</strong>Row Not Updated.</div>');
		}
		    redirect('juggler/slider/slider-bottom');
	}
	public function delete_slider_bottom($id){
		$res = $this->Slidermodel->deleteSliderBottomByID($id);
		if($res==true){		
		$this->session->set_flashdata('success', '<div class="alert alert-success fade show"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong><i class="fa fa-check-circle" aria-hidden="true"></i>&nbsp;Sucess!&nbsp;&nbsp;</strong>Row Deleted.</div>');
		}else{
			$this->session->set_flashdata('error', '<div class="alert alert-danger fade show"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong><i class="fa fa-times-circle" aria-hidden="true"></i>&nbsp;Error!&nbsp;&nbsp;</strong>Row Not Deleted.</div>');
		}
		    redirect('juggler/slider/slider-bottom');
	}
}
