<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Events extends MY_Controller {
	
	
	public function __construct(){
        parent::__construct();
		
		$this->load->database();     
        $this->load->model('cork/Eventsmodel');
		date_default_timezone_set('Asia/Kolkata');
    }
    public function index(){
	
        $PageQry = $this->Eventsmodel->getPage();
		$EventsQry = $this->Eventsmodel->getEvents();
    	$this->load->view('cork/events', ['PageQry'=>$PageQry,'EventsQry'=>$EventsQry]);
    
    }
	
	public function details(){
		$id = $this->uri->segment(3);
     $EventsView = $this->Eventsmodel->getEventsById($id);
     $this->load->view('cork/events_details', ['EventsView'=>$EventsView]);
    }



	
}