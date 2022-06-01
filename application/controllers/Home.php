<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_Controller {
	
	public function __construct(){
        parent::__construct();
		
		$this->load->database();     
        $this->load->model('cork/Homemodel');
		date_default_timezone_set('Asia/Kolkata');
    }
    public function index(){ 
         $PageQry = $this->Homemodel->HomePageQuery();
         $ProfileQry = $this->Homemodel->getProfile();
		 $SliderQry = $this->Homemodel->getSlider();
		 $SliderBottomQry = $this->Homemodel->getSliderBottom();
		 $PostCatQry = $this->Homemodel->getPostCategory();
		 $PostQry = $this->Homemodel->getPost();
		 $ServicesQry = $this->Homemodel->getServices();
		 $EventsQry = $this->Homemodel->getEvents();
		 $CategoryQry = $this->Homemodel->getCategory();
		 $FaqQry = $this->Homemodel->getFaq();
		 $ClientsQry = $this->Homemodel->getClients();
		 $ContactQry = $this->Homemodel->getContact();
		 $TestimonialsQry = $this->Homemodel->getTestimonials();
		 $ChooseQry = $this->Homemodel->getWhyChoose();
		 $VideoQry = $this->Homemodel->getVideo();
		 $FCourseQry = $this->Homemodel->getFeaturedCourse();
		 $CourseQry = $this->Homemodel->getCourses();
		 $BookOnlineQry = $this->Homemodel->getBookOnline();
         $this->load->view('cork/index', ['PageQry'=>$PageQry,'SliderQry'=>$SliderQry,'PostCatQry'=>$PostCatQry,'PostQry'=>$PostQry,'ServicesQry'=>$ServicesQry,'EventsQry'=>$EventsQry,'CategoryQry'=>$CategoryQry,'FaqQry'=>$FaqQry,'SliderBottomQry'=>$SliderBottomQry,'ProfileQry'=>$ProfileQry,'ClientsQry'=>$ClientsQry,'ContactQry'=>$ContactQry,'TestimonialsQry'=>$TestimonialsQry,'ChooseQry'=>$ChooseQry,'VideoQry'=>$VideoQry,'FCourseQry'=>$FCourseQry,'CourseQry'=>$CourseQry,'BookOnlineQry'=>$BookOnlineQry]);
    }

   
}