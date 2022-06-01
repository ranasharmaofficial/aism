<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Our_team extends MY_Controller {

	public function __construct(){
        parent::__construct();
		
		$this->load->database();     
        $this->load->model('juggler/Teammodel');
		date_default_timezone_set('Asia/Kolkata');
    }
 	public function index()
    {    	
        $PageQry = $this->Teammodel->getTeam();
        $this->load->view('juggler/our_team', ['PageQry'=>$PageQry]);
    }

    public function add(){
        $this->load->view('juggler/add_our_team');
    }

	public function insert(){
	
		$config['upload_path']   = './assets/images/team/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg|PNG|JPG|JPEG|GIF';
        $config['max_size']      = 2048;
        $this->load->library('upload', $config);
	    $this->upload->initialize($config);
	    $this->upload->do_upload('image');
	    $image = $this->upload->data();
		
		$data = array(
                'name' => trim($this->input->post('name')),
				'designation' => trim($this->input->post('designation')),
				'facebook' => trim($this->input->post('facebook')),
				'twitter' => trim($this->input->post('twitter')),
				'linkedin' => trim($this->input->post('linkedin')),
				'instagram' => trim($this->input->post('instagram')),
				'image' => $image['file_name'],
				'status' => trim($this->input->post('status')),
                'modified' => date('d-m-Y g:i:s a')
		);

		$res = $this->db->insert('tbl_our_team', $data);
		if($res==true){		
		$this->session->set_flashdata('success', '<div class="alert alert-success fade show"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong><i class="fa fa-check-circle" aria-hidden="true"></i>&nbsp;Sucess!&nbsp;&nbsp;</strong>Row Added.</div>');
		}else{
			$this->session->set_flashdata('error', '<div class="alert alert-danger fade show"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong><i class="fa fa-times-circle" aria-hidden="true"></i>&nbsp;Error!&nbsp;&nbsp;</strong>Row Not Added.</div>');
		}
		    redirect('juggler/our_team');
	}

	public function edit($id){
		$PageQry = $this->Teammodel->getTeamByID($id);
		$this->load->view('juggler/edit_our_team', ['PageQry'=>$PageQry]);
	}

	public function update(){
		$id = $this->input->post('id');	

	  $config['upload_path']   = './assets/images/team/';
      $config['allowed_types'] = 'gif|jpg|png|jpeg|PNG|JPG|JPEG|GIF';
      $config['max_size']      = 2048;
      $this->load->library('upload', $config);
	  $this->upload->initialize($config);
	  $this->upload->do_upload('image');
	  $image = $this->upload->data();


		if($image['file_name']!==''){
		$data = array(
                'name' => trim($this->input->post('name')),
				'designation' => trim($this->input->post('designation')),
				'facebook' => trim($this->input->post('facebook')),
				'twitter' => trim($this->input->post('twitter')),
				'linkedin' => trim($this->input->post('linkedin')),
				'instagram' => trim($this->input->post('instagram')),
				'image' => $image['file_name'],
				'status' => trim($this->input->post('status')),
                'modified' => date('d-m-Y g:i:s a')
		);
		}else{
		$data = array(
                'name' => trim($this->input->post('name')),
				'designation' => trim($this->input->post('designation')),
				'facebook' => trim($this->input->post('facebook')),
				'twitter' => trim($this->input->post('twitter')),
				'linkedin' => trim($this->input->post('linkedin')),
				'instagram' => trim($this->input->post('instagram')),
				'status' => trim($this->input->post('status')),
                'modified' => date('d-m-Y g:i:s a')
		);
		}
		$this->db->where('id', $id);
		$res = $this->db->update('tbl_our_team', $data);
		if($res==true){		
		$this->session->set_flashdata('success', '<div class="alert alert-success fade show"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong><i class="fa fa-check-circle" aria-hidden="true"></i>&nbsp;Sucess!&nbsp;&nbsp;</strong>Row Updated.</div>');
		}else{
			$this->session->set_flashdata('error', '<div class="alert alert-danger fade show"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong><i class="fa fa-times-circle" aria-hidden="true"></i>&nbsp;Error!&nbsp;&nbsp;</strong>Row Not Updated.</div>');
		}
		    redirect('juggler/our_team');
	}
	public function delete($id){
		$res = $this->Teammodel->deleteTeamByID($id);
		if($res==true){		
		$this->session->set_flashdata('success', '<div class="alert alert-success fade show"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong><i class="fa fa-check-circle" aria-hidden="true"></i>&nbsp;Sucess!&nbsp;&nbsp;</strong>Row Deleted.</div>');
		}else{
			$this->session->set_flashdata('error', '<div class="alert alert-danger fade show"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong><i class="fa fa-times-circle" aria-hidden="true"></i>&nbsp;Error!&nbsp;&nbsp;</strong>Row Not Deleted.</div>');
		}
		    redirect('juggler/our_team');
	}
}
