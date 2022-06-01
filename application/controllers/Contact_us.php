<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact_us extends MY_Controller {

	public function __construct(){
        parent::__construct();
		
		$this->load->database();     
        $this->load->model('cork/Contactus');
		date_default_timezone_set('Asia/Kolkata');
    }
    public function index(){      
        $PageQry = $this->Contactus->contactPage();
        $ContactInfo = $this->Contactus->contactInfo();
    	$this->load->view('cork/contact_us', ['PageQry'=>$PageQry, 'ContactInfo'=>$ContactInfo]);
    
    }
    
}