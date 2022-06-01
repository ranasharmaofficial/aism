<?php



defined('BASEPATH') OR exit('No direct script access allowed');



class Franchise extends MY_Controller {



	public function __construct(){

        parent::__construct();

		

		$this->load->database();     

        $this->load->model('juggler/Franchisemodel');

		date_default_timezone_set('Asia/Kolkata');

    }

 	public function index()

    {    	

        $PageQry = $this->Franchisemodel->getFranchise();

        $this->load->view('juggler/franchise', ['PageQry'=>$PageQry]);

    }



    public function add(){
    	$StateQry = $this->Franchisemodel->getState();
    	$CityQry = $this->Franchisemodel->getCity();
        $this->load->view('juggler/add_franchise',['StateQry'=>$StateQry,'CityQry'=>$CityQry]);

    }



	public function insert(){
	

		$config['upload_path']   = './assets/images/franchise/';

        $config['allowed_types'] = 'gif|jpg|png|jpeg|PNG|JPG|JPEG|GIF';

        $config['max_size']      = 2048;

        $this->load->library('upload', $config);

	    $this->upload->initialize($config);

	    $this->upload->do_upload('image');

	    $image = $this->upload->data();

		

		$data = array(

                'state_id' => trim($this->input->post('state_id')),

				'city_id' => trim($this->input->post('city_id')),

				'center_name' => trim($this->input->post('center_name')),

				'contact_name' => trim($this->input->post('contact_name')),

				'contact_email' => trim($this->input->post('contact_email')),

				'contact_phone' => trim($this->input->post('contact_phone')),

				'image' => $image['file_name'],

				'status' => trim($this->input->post('status')),

                'modified' => date('d-m-Y g:i:s a')

		);



		$res = $this->db->insert('tbl_franchise', $data);

		if($res==true){		

		$this->session->set_flashdata('success', '<div class="alert alert-success fade show"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong><i class="fa fa-check-circle" aria-hidden="true"></i>&nbsp;Sucess!&nbsp;&nbsp;</strong>Row Added.</div>');

		}else{

			$this->session->set_flashdata('error', '<div class="alert alert-danger fade show"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong><i class="fa fa-times-circle" aria-hidden="true"></i>&nbsp;Error!&nbsp;&nbsp;</strong>Row Not Added.</div>');

		}

		    redirect('juggler/franchise');

	}



	public function edit($id){

		$PageQry = $this->Franchisemodel->getFranchiseByID($id);
		$StateQry = $this->Franchisemodel->getState();
    	$CityQry = $this->Franchisemodel->getCity();
		$this->load->view('juggler/edit_franchise', ['PageQry'=>$PageQry,'StateQry'=>$StateQry,'CityQry'=>$CityQry]);

	}



	public function update(){

		$id = $this->input->post('id');





	  $config['upload_path']   = './assets/images/franchise/';

      $config['allowed_types'] = 'gif|jpg|png|jpeg|PNG|JPG|JPEG|GIF';

      $config['max_size']      = 2048;

      $this->load->library('upload', $config);

	  $this->upload->initialize($config);

	  $this->upload->do_upload('image');

	  $image = $this->upload->data();





		if($image['file_name']!==''){

		$data = array(

               'state_id' => trim($this->input->post('state_id')),

				'city_id' => trim($this->input->post('city_id')),

				'center_name' => trim($this->input->post('center_name')),

				'contact_name' => trim($this->input->post('contact_name')),

				'contact_email' => trim($this->input->post('contact_email')),

				'contact_phone' => trim($this->input->post('contact_phone')),

				'image' => $image['file_name'],

				'status' => trim($this->input->post('status')),

                'modified' => date('d-m-Y g:i:s a')

		);

		}else{

		$data = array(

               'state_id' => trim($this->input->post('state_id')),

				'city_id' => trim($this->input->post('city_id')),

				'center_name' => trim($this->input->post('center_name')),

				'contact_name' => trim($this->input->post('contact_name')),

				'contact_email' => trim($this->input->post('contact_email')),

				'contact_phone' => trim($this->input->post('contact_phone')),

				'status' => trim($this->input->post('status')),

                'modified' => date('d-m-Y g:i:s a')

		);

		}

		$this->db->where('id', $id);

		$res = $this->db->update('tbl_franchise', $data);

		if($res==true){		

		$this->session->set_flashdata('success', '<div class="alert alert-success fade show"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong><i class="fa fa-check-circle" aria-hidden="true"></i>&nbsp;Sucess!&nbsp;&nbsp;</strong>Row Updated.</div>');

		}else{

			$this->session->set_flashdata('error', '<div class="alert alert-danger fade show"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong><i class="fa fa-times-circle" aria-hidden="true"></i>&nbsp;Error!&nbsp;&nbsp;</strong>Row Not Updated.</div>');

		}

		    redirect('juggler/franchise');

	}

	public function delete($id){

		$res = $this->Franchisemodel->deleteFranchiseByID($id);

		if($res==true){		

		$this->session->set_flashdata('success', '<div class="alert alert-success fade show"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong><i class="fa fa-check-circle" aria-hidden="true"></i>&nbsp;Sucess!&nbsp;&nbsp;</strong>Row Deleted.</div>');

		}else{

			$this->session->set_flashdata('error', '<div class="alert alert-danger fade show"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong><i class="fa fa-times-circle" aria-hidden="true"></i>&nbsp;Error!&nbsp;&nbsp;</strong>Row Not Deleted.</div>');

		}

		    redirect('juggler/franchise');

	}
	public function AjaxgetData(){
			$id = $this->input->post('id');

        echo $this->Franchisemodel->getAjaxValue($id);   
	}

}

