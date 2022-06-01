<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class Diploma_course extends MY_Controller {



	public function __construct(){
        parent::__construct();
		
		$this->load->database();     
        date_default_timezone_set('Asia/Kolkata');
    }
    public function certificateCourses(){
        $this->load->view('cork/certificates_courses');
    }
    public function diplomaIndustrySafety(){
        $this->load->view('cork/diploma-industrial-safety');
    }
    public function diplomaFoodSafety(){
        $this->load->view('cork/diploma-food-safety');
    }
}