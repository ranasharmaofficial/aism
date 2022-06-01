<?php



defined('BASEPATH') OR exit('No direct script access allowed');







class Scholarship extends MY_Controller {







	public function __construct(){

        parent::__construct();

		

		$this->load->database();     

        $this->load->model('cork/Scholarshipmodel');

		date_default_timezone_set('Asia/Kolkata');

    }



    public function index(){



        $PageQry = $this->Scholarshipmodel->getPage();


    	$this->load->view('cork/scholarship', ['PageQry'=>$PageQry]);



    



    }



}