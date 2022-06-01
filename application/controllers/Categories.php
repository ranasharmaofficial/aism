<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Categories extends MY_Controller {

	public function __construct(){
        parent::__construct();
		
		$this->load->database();     
        $this->load->model('cork/Categoriesmodel');
		date_default_timezone_set('Asia/Kolkata');
    }
    public function index(){
        $PageQry = $this->Categoriesmodel->getPage();
        $PostCatQry = $this->Categoriesmodel->getPostCategory();
    	$this->load->view('cork/categories', ['PageQry'=>$PageQry,'PostCatQry'=>$PostCatQry]);
    
    }
}