<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends MY_Controller {

	public function __construct(){
        parent::__construct();
		
		$this->load->database();     
        $this->load->model('juggler/Loginmodel');
		date_default_timezone_set('Asia/Kolkata');
    }
	
    public function index()
    {
       $this->load->library('form_validation');      
	   $this->form_validation->set_rules('username', 'User Name', 'required|alpha|trim');
	   $this->form_validation->set_rules('password', 'Password', 'required');
       $this->form_validation->set_error_delimiters("<a class='text-danger'>","</p>");

	        $username = $this->input->post('username');
			$password = $this->input->post('password');

       // New code

       if($this->form_validation->run() == FALSE){
			$this->session->set_userdata('message', validation_errors());
		} else{
			//$data = new stdClass();
			$data = $this->Loginmodel->login_valid($username, md5($password));
			if(count($data) == 1){
				$this->session->set_userdata('message', '<div class="alert alert-success alert-dismissable"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><b>You have logged in successfully.</b></div>');
				$this->session->set_userdata('logged_in', 1);
				$this->session->set_userdata('user_id', $data[0]->id);

			} else{
				$this->session->set_userdata('message', 'Invalid Username or Password');
			}
		}
		$this->load->view('juggler/index');
    }

    public function logout(){    	
		$this->session->sess_destroy();
		redirect('juggler/login');
	}

}
