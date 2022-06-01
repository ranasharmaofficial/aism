<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Thank_you extends MY_Controller {

	public function __construct(){
        parent::__construct();
		
		$this->load->database();     
        $this->load->model('cork/Thankyou');
		date_default_timezone_set('Asia/Kolkata');
    }
    public function index(){
        $PageQry = $this->Thankyou->ThankPage();
         
    	$this->load->view('cork/thank_you', ['PageQry'=>$PageQry]);
    
    }
}