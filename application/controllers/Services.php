<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class Services extends MY_Controller {

	

	

	public function __construct(){

        parent::__construct();

		

		$this->load->database();     

        $this->load->model('cork/Servicesmodel');

		date_default_timezone_set('Asia/Kolkata');

    }

    public function index(){        

       

        $PageQry = $this->Servicesmodel->getPage();

        $ServicesQry = $this->Servicesmodel->getServices();

        $ApplyQry = $this->Servicesmodel->getApply();

    	$this->load->view('cork/services', ['PageQry'=>$PageQry,'ServicesQry'=>$ServicesQry,'ApplyQry'=>$ApplyQry]);

    

    }

	public function details(){
        $id = $this->uri->segment(3);
     $ServiceView = $this->Servicesmodel->getServicesByID($id);
      $ApplyQry = $this->Servicesmodel->getApply();
     $this->load->view('cork/services_details', ['ServiceView'=>$ServiceView,'ApplyQry'=>$ApplyQry]);

    }

	

}