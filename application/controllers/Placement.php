<?php



defined('BASEPATH') OR exit('No direct script access allowed');







class Placement extends MY_Controller {







	public function __construct(){

        parent::__construct();

		

		$this->load->database();     

        $this->load->model('cork/Placementmodel');

		date_default_timezone_set('Asia/Kolkata');

    }



    public function index(){



        $PageQry = $this->Placementmodel->getPage();


    	$this->load->view('cork/placement', ['PageQry'=>$PageQry]);



    



    }



}