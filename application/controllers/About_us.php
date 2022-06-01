<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class About_us extends MY_Controller {



	public function __construct(){
        parent::__construct();
		
		$this->load->database();     
        $this->load->model('cork/Aboutmodel');
		date_default_timezone_set('Asia/Kolkata');
    }

    public function index(){

        $PageQry = $this->Aboutmodel->getPage();

         $TeamQry = $this->Aboutmodel->getTeam();

         $BlogQry = $this->Aboutmodel->getBlog();

    	$this->load->view('cork/about_us', ['PageQry'=>$PageQry,'TeamQry'=>$TeamQry,'BlogQry'=>$BlogQry]);
    }

    public function ohsasLeadAuditor(){
        $this->load->view('cork/ohsas_lead_auditor');
    }
    public function qmsIsoLeadAuditor(){
        $this->load->view('cork/qmsiso_lead_auditor');
    }
    public function isoIrcaLeadAuditor(){
        $this->load->view('cork/iso_irca_lead_auditor');
    }
    public function ioshManagingSystem(){
        $this->load->view('cork/iosh_managing_system');
    }
    public function ioshWorkingSafety(){
        $this->load->view('cork/iosh_working_safety');
    }

}