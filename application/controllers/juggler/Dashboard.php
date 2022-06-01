<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends MY_Controller {

	public function __construct(){
		parent::__construct();
		if($this->session->userdata('logged_in') !== 1);
	}
	
    public function index()
    {
        $this->load->view('juggler/dashboard');
       
    }

	
}
