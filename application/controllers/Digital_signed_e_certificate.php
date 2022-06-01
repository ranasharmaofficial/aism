<?php



defined('BASEPATH') OR exit('No direct script access allowed');







class digital_signed_e_certificate extends MY_Controller {







	public function __construct(){

        parent::__construct();

		

		$this->load->database();     

        $this->load->model('cork/Digitalmodel');

		date_default_timezone_set('Asia/Kolkata');

    }



    public function index(){



        $PageQry = $this->Digitalmodel->getPage();


    	$this->load->view('cork/digital_signed_certificate', ['PageQry'=>$PageQry]);



    



    }



}