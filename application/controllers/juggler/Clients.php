<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Clients extends MY_Controller {

	public function __construct(){
        parent::__construct();
		
		$this->load->database();     
        $this->load->model('juggler/Clientsmodel');
		date_default_timezone_set('Asia/Kolkata');
    }
 	public function index()
    {    	
        $PageQry = $this->Clientsmodel->getClients();
        $this->load->view('juggler/clients', ['PageQry'=>$PageQry]);
    }

    public function add(){
        $this->load->view('juggler/add_clients');
    }

	public function insert(){	
		$config['upload_path']   = './assets/images/clients/';
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
				'position' => trim($this->input->post('position')),
				'status' => trim($this->input->post('status')),
                'modified' => date('d-m-Y g:i:s a')
		);

		$res = $this->db->insert('tbl_clients', $data);
		if($res==true){		
		$this->session->set_flashdata('success', '<div class="alert alert-success fade show"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong><i class="fa fa-check-circle" aria-hidden="true"></i>&nbsp;Sucess!&nbsp;&nbsp;</strong>Row Added.</div>');
		}else{
			$this->session->set_flashdata('error', '<div class="alert alert-danger fade show"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong><i class="fa fa-times-circle" aria-hidden="true"></i>&nbsp;Error!&nbsp;&nbsp;</strong>Row Not Added.</div>');
		}
		    redirect('juggler/clients');
	}

	public function edit($id){
		$PageQry = $this->Clientsmodel->getClientsByID($id);
		$this->load->view('juggler/edit_clients', ['PageQry'=>$PageQry]);
	}

	public function update(){
		$id = $this->input->post('id');		

	  $config['upload_path']   = './assets/images/clients/';
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
				'position' => trim($this->input->post('position')),
				'status' => trim($this->input->post('status')),
                'modified' => date('d-m-Y g:i:s a')
		);
		}else{
		$data = array(
                'name' => trim($this->input->post('name')),
				'description' => trim($this->input->post('description')),
				'position' => trim($this->input->post('position')),
				'status' => trim($this->input->post('status')),
                'modified' => date('d-m-Y g:i:s a')
		);
		}
		$this->db->where('id', $id);
		$res = $this->db->update('tbl_clients', $data);
		if($res==true){		
		$this->session->set_flashdata('success', '<div class="alert alert-success fade show"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong><i class="fa fa-check-circle" aria-hidden="true"></i>&nbsp;Sucess!&nbsp;&nbsp;</strong>Row Updated.</div>');
		}else{
			$this->session->set_flashdata('error', '<div class="alert alert-danger fade show"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong><i class="fa fa-times-circle" aria-hidden="true"></i>&nbsp;Error!&nbsp;&nbsp;</strong>Row Not Updated.</div>');
		}
		    redirect('juggler/clients');
	}
	public function delete($id){
		$res = $this->Clientsmodel->deleteClientsByID($id);
		if($res==true){		
		$this->session->set_flashdata('success', '<div class="alert alert-success fade show"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong><i class="fa fa-check-circle" aria-hidden="true"></i>&nbsp;Sucess!&nbsp;&nbsp;</strong>Row Deleted.</div>');
		}else{
			$this->session->set_flashdata('error', '<div class="alert alert-danger fade show"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong><i class="fa fa-times-circle" aria-hidden="true"></i>&nbsp;Error!&nbsp;&nbsp;</strong>Row Not Deleted.</div>');
		}
		    redirect('juggler/clients');
	}
}
