<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class State extends MY_Controller {



	function __construct() {

		parent::__construct();

		$this->load->database();

		$this->load->model('juggler/Statemodel');

    }

	

 	public function index()

    {

        $StateQry = $this->Statemodel->getState();

        $this->load->view('juggler/state', ['StateQry'=>$StateQry]);



    }



    public function add(){

        $this->load->view('juggler/add_state');



    }



	public function insert(){



		$data = array(              

        		'name' => trim($this->input->post('name')),

        		'status' => trim($this->input->post('status')),

                'modified' => date('d-m-Y g:i:s a')

		);



		$res = $this->db->insert('tbl_state', $data);

		if($res==true){		

		$this->session->set_flashdata('success', '<div class="alert alert-success fade show"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong><i class="fa fa-check-circle" aria-hidden="true"></i>&nbsp;Sucess!&nbsp;&nbsp;</strong>Row Added.</div>');

		}else{

			$this->session->set_flashdata('error', '<div class="alert alert-danger fade show"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong><i class="fa fa-times-circle" aria-hidden="true"></i>&nbsp;Error!&nbsp;&nbsp;</strong>Row Not Added.</div>');

		}

		    redirect('juggler/state');

	}



	public function edit($id){

		$StateQry = $this->Statemodel->getStateByID($id);

		$this->load->view('juggler/edit_state', ['StateQry'=>$StateQry]);

	}



	public function update(){

		$id = $this->input->post('id');

		

		$data = array(                

        		'name' => trim($this->input->post('name')),

        		'status' => trim($this->input->post('status')),

                'modified' => date('d-m-Y g:i:s a')

		);





		$this->db->where('id', $id);

		$res = $this->db->update('tbl_state', $data);

		

		if($res==true){		

		$this->session->set_flashdata('success', '<div class="alert alert-success fade show"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong><i class="fa fa-check-circle" aria-hidden="true"></i>&nbsp;Sucess!&nbsp;&nbsp;</strong>Row Updated.</div>');

		}else{

			$this->session->set_flashdata('error', '<div class="alert alert-danger fade show"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong><i class="fa fa-times-circle" aria-hidden="true"></i>&nbsp;Error!&nbsp;&nbsp;</strong>Row Not Updated.</div>');

		}

		

		redirect('juggler/state');

	}

	

	

	

	public function delete($id){

		$res = $this->Statemodel->deleteStateByID($id);

		if($res==true){		

		$this->session->set_flashdata('success', '<div class="alert alert-success fade show"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong><i class="fa fa-check-circle" aria-hidden="true"></i>&nbsp;Sucess!&nbsp;&nbsp;</strong>Row Deleted.</div>');

		}else{

			$this->session->set_flashdata('error', '<div class="alert alert-danger fade show"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong><i class="fa fa-times-circle" aria-hidden="true"></i>&nbsp;Error!&nbsp;&nbsp;</strong>Row Not Deleted.</div>');

		}

		redirect('juggler/state');

			

	}

	

	

}

