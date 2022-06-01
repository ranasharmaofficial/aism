<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Terms_of_use extends MY_Controller {

	public function __construct(){
        parent::__construct();
		
		$this->load->database();     
        $this->load->model('cork/Termsmodel');
		date_default_timezone_set('Asia/Kolkata');
    }
    public function index(){
        $PageQry = $this->Termsmodel->getPage();
         
    	$this->load->view('cork/terms_of_use', ['PageQry'=>$PageQry]);
    
    }
}