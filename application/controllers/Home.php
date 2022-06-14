<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_Controller {
	
	public function __construct(){
        parent::__construct();
		
		$this->load->database();     
        $this->load->model('cork/Homemodel');
		date_default_timezone_set('Asia/Kolkata');
		$this->load->library('form_validation');
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
	public function requestCall(){

			$this->form_validation->set_rules('name', 'Name', 'required|xss_clean|max_length[100]'); 
			$this->form_validation->set_rules('email', 'Email', 'required|xss_clean'); 
			$this->form_validation->set_rules('whatsapp', 'WhatsApp', 'required|xss_clean'); 
			$this->form_validation->set_rules('course', 'Course', 'required|xss_clean'); 
			$this->form_validation->set_rules('city', 'City', 'required|xss_clean'); 
			
			// if ($this->form_validation->run() !== FALSE)
			// 	{
				$requestData = array( 
                'name' => strip_tags($this->input->post('name')), 
                'email' => strip_tags($this->input->post('email')), 
                'whatsapp' => strip_tags($this->input->post('whatsapp')), 
                'course' => strip_tags($this->input->post('course')), 
                'city' => strip_tags($this->input->post('city'))
            ); 
				$res = $this->db->insert('call_requests', $requestData);
					if ($res == true) {
						$this->session->set_flashdata(['success' => 'Added successfully!']);
						redirect('');
					} else {
						$this->session->set_flashdata(['error' => "Something went wrong! Please try again."]);
						redirect('');
					}  
				// }
				// else{ 
				// 	$this->session->set_flashdata(['error' => "Please fill all the mandatory fields"]);
				// 	redirect('home?required');
				// }
	}

	public function requestConsultation()
	{
		
				$requestData = array( 
                'first_name' => strip_tags($this->input->post('first_name')), 
                'last_name' => strip_tags($this->input->post('last_name')), 
                'email' => strip_tags($this->input->post('email')), 
                'phone' => strip_tags($this->input->post('phone')), 
                'prefer' => strip_tags($this->input->post('prefer')), 
                'zip' => strip_tags($this->input->post('zip'))
            ); 
				$res = $this->db->insert('consultation_request', $requestData);
					if ($res == true) {
						$this->session->set_flashdata(['success' => 'Added successfully!']);
						redirect('');
					} else {
						$this->session->set_flashdata(['error' => "Something went wrong! Please try again."]);
						redirect('');
					}  
				
	}

   
}