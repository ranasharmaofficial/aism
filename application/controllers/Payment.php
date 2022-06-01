<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class Payment extends MY_Controller {



	public function __construct(){
        parent::__construct();
		
		$this->load->database();     
        $this->load->model('cork/Paymentmodel');
		date_default_timezone_set('Asia/Kolkata');
    }

    public function index(){


    	$this->load->view('cork/payment');    

    }

   
}