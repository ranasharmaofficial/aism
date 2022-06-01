<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Franchise_centre extends MY_Controller {
	public function __construct(){

        parent::__construct();
		$this->load->database();     
        $this->load->model('cork/Franchisemodel');
		date_default_timezone_set('Asia/Kolkata');
    }
    public function index(){
        $PageQry = $this->Franchisemodel->getPage();
        $FranchiseQry = $this->Franchisemodel->getFranchise();
        $StateQry = $this->Franchisemodel->getState();
        $CityQry = $this->Franchisemodel->getCity();
    	$this->load->view('cork/franchise', ['PageQry'=>$PageQry,'FranchiseQry'=>$FranchiseQry,'StateQry'=>$StateQry, 'CityQry'=>$CityQry]);   
    }
    public function AjaxgetData(){
            $id = $this->input->post('id');
        echo $this->Franchisemodel->getAjaxValue($id);   
    }
     public function AjaxgetFranchise(){
            $state_id = $this->input->post('state_id');
            $city_id = $this->input->post('city_id');
        echo $this->Franchisemodel->getAjaxFranchiseValue($state_id, $city_id);   
    }
}