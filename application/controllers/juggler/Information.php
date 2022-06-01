<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Information extends MY_Controller {
	
	public function __construct(){
        parent::__construct();
		
		$this->load->database();     
        $this->load->model('juggler/Informationmodel');
		date_default_timezone_set('Asia/Kolkata');
    }
    public function index()
    {

        $PageQry = $this->Informationmodel->Information();
        $this->load->view('juggler/information', ['PageQry'=>$PageQry]);
    }
   
    public function update(){
     $id = $this->input->post('id');
	 
	    $config['upload_path']   = './assets/images/logo/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg|PNG|JPG|JPEG|GIF';
        $config['max_size']      = 2048;
        $this->load->library('upload', $config);
	    $this->upload->initialize($config);
	    $this->upload->do_upload('logo');
	    $image = $this->upload->data();
     if($image['file_name']!==''){
     $data = array(                
				'company_name' => trim($this->input->post('company_name')),
                'website_name' => trim($this->input->post('website_name')), 
                'website_url' => trim($this->input->post('website_url')),                
                'address' => trim($this->input->post('address')),
                'address_two' => trim($this->input->post('address_two')),
                'address_three' => trim($this->input->post('address_three')),
                'phone' => trim($this->input->post('phone')),
				'phone_two' => trim($this->input->post('phone_two')),
                'phone_three' => trim($this->input->post('phone_three')),
                'email' => trim($this->input->post('email')),
                'email_two' => trim($this->input->post('email_two')),
                'email_three' => trim($this->input->post('email_three')),
                'gmail' => trim($this->input->post('gmail')),  
				'copyright' => trim($this->input->post('copyright')),
				'logo' => $image['file_name'],
                'map' => trim($this->input->post('map')),
                'status' => trim($this->input->post('status')),                 
                'modified' => date('d-m-Y g:i:s a')
		);
		}else{
		 $data = array(                
				'company_name' => trim($this->input->post('company_name')),
                'website_name' => trim($this->input->post('website_name')), 
                'website_url' => trim($this->input->post('website_url')),                
                'address' => trim($this->input->post('address')),
                'address_two' => trim($this->input->post('address_two')),
                'address_three' => trim($this->input->post('address_three')),
                'phone' => trim($this->input->post('phone')),
                'phone_two' => trim($this->input->post('phone_two')),
                'phone_three' => trim($this->input->post('phone_three')),
                'email' => trim($this->input->post('email')),
                'email_two' => trim($this->input->post('email_two')),
                'email_three' => trim($this->input->post('email_three')),
                'gmail' => trim($this->input->post('gmail')),  
                'copyright' => trim($this->input->post('copyright')),
                'map' => trim($this->input->post('map')),
                'status' => trim($this->input->post('status')),                 
                'modified' => date('d-m-Y g:i:s a')
		);
		}
		$this->db->where('id', $id);
		$res = $this->db->update('tbl_information', $data);
		if($res==true){		
		$this->session->set_flashdata('success', '<div class="alert alert-success fade show"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong><i class="fa fa-check-circle" aria-hidden="true"></i>&nbsp;Sucess!&nbsp;&nbsp;</strong>Information Updated.</div>');
		}else{
			$this->session->set_flashdata('error', '<div class="alert alert-danger fade show"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong><i class="fa fa-times-circle" aria-hidden="true"></i>&nbsp;Error!&nbsp;&nbsp;</strong>Information Not Updated.</div>');
		}
		redirect('juggler/information');
    }

	
}
