<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class City extends MY_Controller {



	function __construct() {

		parent::__construct();

		$this->load->database();

		$this->load->model('juggler/Citymodel');

    }

	

 	public function index()

    {

        $CityQry = $this->Citymodel->getCity();

        $this->load->view('juggler/city', ['CityQry'=>$CityQry]);



    }



    public function add(){

	

		$StateQry = $this->Citymodel->getState();

        $this->load->view('juggler/add_city',['StateQry'=>$StateQry]);



    }



	public function insert(){

		


		$data = array(              

        		'state_id' => trim($this->input->post('state_id')),

				'name' => trim($this->input->post('name')),

        		'status' => trim($this->input->post('status')),

                'modified' => date('d-m-Y g:i:s a')

		);



		$res = $this->db->insert('tbl_city', $data);

		if($res==true){		

		$this->session->set_flashdata('success', '<div class="alert alert-success fade show"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong><i class="fa fa-check-circle" aria-hidden="true"></i>&nbsp;Sucess!&nbsp;&nbsp;</strong>Row Added.</div>');

		}else{

			$this->session->set_flashdata('error', '<div class="alert alert-danger fade show"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong><i class="fa fa-times-circle" aria-hidden="true"></i>&nbsp;Error!&nbsp;&nbsp;</strong>Row Not Added.</div>');

		}

		    redirect('juggler/city');

	}



	public function edit($id){

		$StateQry = $this->Citymodel->getState();

		$CityQry = $this->Citymodel->getCityByID($id);

		$this->load->view('juggler/edit_city', ['CityQry'=>$CityQry,'StateQry'=>$StateQry]);

	}



	public function update(){

		$id = $this->input->post('id');

		
		

		$data = array(                

        		'state_id' => trim($this->input->post('state_id')),

				'name' => trim($this->input->post('name')),

        		'status' => trim($this->input->post('status')),

                'modified' => date('d-m-Y g:i:s a')

		);





		$this->db->where('id', $id);

		$res = $this->db->update('tbl_city', $data);

		

		if($res==true){		

		$this->session->set_flashdata('success', '<div class="alert alert-success fade show"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong><i class="fa fa-check-circle" aria-hidden="true"></i>&nbsp;Sucess!&nbsp;&nbsp;</strong>Row Updated.</div>');

		}else{

			$this->session->set_flashdata('error', '<div class="alert alert-danger fade show"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong><i class="fa fa-times-circle" aria-hidden="true"></i>&nbsp;Error!&nbsp;&nbsp;</strong>Row Not Updated.</div>');

		}

		

		redirect('juggler/city');

	}

	

	

	

	public function delete($id){

		$res = $this->Citymodel->deleteCityByID($id);

		if($res==true){		

		$this->session->set_flashdata('success', '<div class="alert alert-success fade show"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong><i class="fa fa-check-circle" aria-hidden="true"></i>&nbsp;Sucess!&nbsp;&nbsp;</strong>Row Deleted.</div>');

		}else{

			$this->session->set_flashdata('error', '<div class="alert alert-danger fade show"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong><i class="fa fa-times-circle" aria-hidden="true"></i>&nbsp;Error!&nbsp;&nbsp;</strong>Row Not Deleted.</div>');

		}

		redirect('juggler/city');

			

	}

	

	

}

