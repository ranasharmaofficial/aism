<?php



defined('BASEPATH') OR exit('No direct script access allowed');
class Admit_card extends MY_Controller {
	public function __construct(){
        parent::__construct();
		$this->load->database();     
        $this->load->model('cork/Admitmodel');
		date_default_timezone_set('Asia/Kolkata');
    }
    public function index(){
        $PageQry = $this->Admitmodel->getPage();
    	$this->load->view('cork/admitcard', ['PageQry'=>$PageQry]);
    }
}