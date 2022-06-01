<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class Testimonials extends MY_Controller {



	public function __construct(){
        parent::__construct();
		
		$this->load->database();     
        $this->load->model('cork/Testimonialsmodel');
		date_default_timezone_set('Asia/Kolkata');
    }

    public function index(){

        $PageQry = $this->Testimonialsmodel->getPage();

        $TestimonialsQry = $this->Testimonialsmodel->getTestimonials();
        $VideoQry = $this->Testimonialsmodel->getVideo();

    	$this->load->view('cork/testimonials', ['PageQry'=>$PageQry,'TestimonialsQry'=>$TestimonialsQry,'VideoQry'=>$VideoQry]);

    

    }


}