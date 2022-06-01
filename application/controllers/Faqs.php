<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class Faqs extends MY_Controller {



	public function __construct(){
        parent::__construct();
		
		$this->load->database();     
        $this->load->model('cork/Faqsmodel');
		date_default_timezone_set('Asia/Kolkata');
    }

    public function index(){

        $PageQry = $this->Faqsmodel->getPage();

         $FaqQry = $this->Faqsmodel->getFaq();

    	$this->load->view('cork/faqs', ['PageQry'=>$PageQry,'FaqQry'=>$FaqQry]);

    

    }

}