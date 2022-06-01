<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class Register extends MY_Controller {



	public function __construct(){
        parent::__construct();
		
		$this->load->database();     
        $this->load->model('cork/Registermodel');
		date_default_timezone_set('Asia/Kolkata');
    }

    public function index(){

        $PageQry = $this->Registermodel->getPage();

         

    	$this->load->view('cork/register', ['PageQry'=>$PageQry]);

    

    }
    public function insert(){
        $data = array(
                'first_name' => trim($this->input->post('first_name')),
                'last_name' => trim($this->input->post('last_name')),
                'email' => trim($this->input->post('email')),
                'password' => md5(trim($this->input->post('password'))),
                'status' => 1,
                'modified' => date('d-m-Y g:i:s a')
        );
        
        $res = $this->db->insert('tbl_users', $data);
        if($res==true){     
                $this->session->set_flashdata('success', '<div class="alert alert-success fade show"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong><i class="fa fa-check-circle" aria-hidden="true"></i>&nbsp;Sucess!&nbsp;&nbsp;</strong>User Registered.</div>');
                }else{
                    $this->session->set_flashdata('error', '<div class="alert alert-danger fade show"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong><i class="fa fa-times-circle" aria-hidden="true"></i>&nbsp;Error!&nbsp;&nbsp;</strong>User Login.</div>');
                }
            redirect('login');
    }

}