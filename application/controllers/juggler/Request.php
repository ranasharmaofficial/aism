<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Request extends MY_Controller {

	public function __construct(){
        parent::__construct();
		
		$this->load->database();     
        $this->load->model('juggler/Requestmodel');
		date_default_timezone_set('Asia/Kolkata');
    }
 	public function index()
    {    	
        $PageQry = $this->Requestmodel->getConsultationRequest();
        $this->load->view('juggler/consultaionreq_view', ['PageQry'=>$PageQry]);
    }
	public function callRequest()
	{
		$PageQry = $this->Requestmodel->getCallRequest();
        $this->load->view('juggler/callrequest_view', ['PageQry'=>$PageQry]);
	}

    public function add(){
        $this->load->view('juggler/add_users');
    }

	public function insert(){	
	
		$config['upload_path']   = './assets/images/users/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg|PNG|JPG|JPEG|GIF';
        $config['max_size']      = 2048;
        $this->load->library('upload', $config);
	    $this->upload->initialize($config);
	    $this->upload->do_upload('image');
	    $image = $this->upload->data();
		
		$data = array(
                'first_name' => trim($this->input->post('first_name')),
                'last_name' => trim($this->input->post('last_name')),
				'email' => trim($this->input->post('email')),
				'password' => trim($this->input->post('password')),
				'phone' => trim($this->input->post('phone')),
				'address' => trim($this->input->post('address')),
				'image' => $image['file_name'],
				'status' => trim($this->input->post('status')),
                'modified' => date('d-m-Y g:i:s a')
		);

		$res = $this->db->insert('tbl_users', $data);
		if($res==true){		
		$this->session->set_flashdata('success', '<div class="alert alert-success fade show"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong><i class="fa fa-check-circle" aria-hidden="true"></i>&nbsp;Sucess!&nbsp;&nbsp;</strong>Row Added.</div>');
		}else{
			$this->session->set_flashdata('error', '<div class="alert alert-danger fade show"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong><i class="fa fa-times-circle" aria-hidden="true"></i>&nbsp;Error!&nbsp;&nbsp;</strong>Row Not Added.</div>');
		}
		    redirect('juggler/users');
	}

	public function edit($id){
		$PageQry = $this->Usersmodel->getUsersByID($id);
		$this->load->view('juggler/edit_users', ['PageQry'=>$PageQry]);
	}

	public function update(){
		$id = $this->input->post('id');		

	  $config['upload_path']   = './assets/images/users/';
      $config['allowed_types'] = 'gif|jpg|png|jpeg|PNG|JPG|JPEG|GIF';
      $config['max_size']      = 2048;
      $this->load->library('upload', $config);
	  $this->upload->initialize($config);
	  $this->upload->do_upload('image');
	  $image = $this->upload->data();


		if($image['file_name']!==''){
		$data = array(
                'first_name' => trim($this->input->post('first_name')),
                'last_name' => trim($this->input->post('last_name')),
				'email' => trim($this->input->post('email')),
				'password' => trim($this->input->post('password')),
				'phone' => trim($this->input->post('phone')),
				'address' => trim($this->input->post('address')),
				'image' => $image['file_name'],
				'status' => trim($this->input->post('status')),
                'modified' => date('d-m-Y g:i:s a')
		);
		}else{
		$data = array(
                'first_name' => trim($this->input->post('first_name')),
                'last_name' => trim($this->input->post('last_name')),
				'email' => trim($this->input->post('email')),
				'password' => trim($this->input->post('password')),
				'phone' => trim($this->input->post('phone')),
				'address' => trim($this->input->post('address')),
				'status' => trim($this->input->post('status')),
                'modified' => date('d-m-Y g:i:s a')
		);
		}
		$this->db->where('id', $id);
		$res = $this->db->update('tbl_users', $data);
		if($res==true){		
		$this->session->set_flashdata('success', '<div class="alert alert-success fade show"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong><i class="fa fa-check-circle" aria-hidden="true"></i>&nbsp;Sucess!&nbsp;&nbsp;</strong>Row Updated.</div>');
		}else{
			$this->session->set_flashdata('error', '<div class="alert alert-danger fade show"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong><i class="fa fa-times-circle" aria-hidden="true"></i>&nbsp;Error!&nbsp;&nbsp;</strong>Row Not Updated.</div>');
		}
		    redirect('juggler/users');
	}
	public function delete($id){
		$res = $this->Usersmodel->deleteUsersByID($id);
		if($res==true){		
		$this->session->set_flashdata('success', '<div class="alert alert-success fade show"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong><i class="fa fa-check-circle" aria-hidden="true"></i>&nbsp;Sucess!&nbsp;&nbsp;</strong>Row Deleted.</div>');
		}else{
			$this->session->set_flashdata('error', '<div class="alert alert-danger fade show"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong><i class="fa fa-times-circle" aria-hidden="true"></i>&nbsp;Error!&nbsp;&nbsp;</strong>Row Not Deleted.</div>');
		}
		    redirect('juggler/users');
	}
}
