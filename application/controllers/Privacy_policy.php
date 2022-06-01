<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class Privacy_policy extends MY_Controller {



	public function __construct(){
        parent::__construct();
		
		$this->load->database();     
        $this->load->model('cork/Privacymodel');
		date_default_timezone_set('Asia/Kolkata');
    }

    public function index(){

        $PageQry = $this->Privacymodel->getPage();

         

    	$this->load->view('cork/privacy_policy', ['PageQry'=>$PageQry]);

    

    }

}