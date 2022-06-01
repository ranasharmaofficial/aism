<?php



defined('BASEPATH') OR exit('No direct script access allowed');







class Examination extends MY_Controller {







	public function __construct(){

        parent::__construct();

		

		$this->load->database();     

        $this->load->model('cork/Examinationmodel');

		date_default_timezone_set('Asia/Kolkata');

    }



    public function index(){



        $PageQry = $this->Examinationmodel->getPage();


    	$this->load->view('cork/examination', ['PageQry'=>$PageQry]);



    



    }



}