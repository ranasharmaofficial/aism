<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Online_courses extends MY_Controller {
	
	
	public function __construct(){
        parent::__construct();
		
		$this->load->database();     
        $this->load->model('cork/Coursesmodel');
		date_default_timezone_set('Asia/Kolkata');
    }
    public function index(){        
       
        $PageQry = $this->Coursesmodel->getPage();
        $CoursesQry = $this->Coursesmodel->getCourses();
        $CategoryQry = $this->Coursesmodel->getCategory();
        $ApplyQry = $this->Coursesmodel->getApply();
    	$this->load->view('cork/online_courses', ['PageQry'=>$PageQry,'CoursesQry'=>$CoursesQry,'ApplyQry'=>$ApplyQry,'CategoryQry'=>$CategoryQry]);
    
    }
	public function details(){
        $id = $this->uri->segment(3);
        $CoursesView = $this->Coursesmodel->getCoursesByID($id);
        $LessionQry = $this->Coursesmodel->getLessionByCID($id);
        $ApplyQry = $this->Coursesmodel->getApply();
        $getCoursesByCategoryID = $this->Coursesmodel->getCoursesByCategoryID($CoursesView->cid);
        $this->load->view('cork/courses_details', ['getCoursesByCategory' => $getCoursesByCategoryID, 'CoursesView'=>$CoursesView,'ApplyQry'=>$ApplyQry,'LessionQry'=>$LessionQry]);
    }

    public function category(){
        $id = $this->uri->segment(3);
     $CategoryQry = $this->Coursesmodel->getCategoryByID($id);
     $CourseQry = $this->Coursesmodel->getCoursesByCID($id);
     $ApplyQry = $this->Coursesmodel->getApply();
     $this->load->view('cork/course_category_details', ['CourseQry'=>$CourseQry,'ApplyQry'=>$ApplyQry,'CategoryQry'=>$CategoryQry]);
    }
	
}