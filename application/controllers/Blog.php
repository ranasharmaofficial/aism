<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends MY_Controller {
	
	
	public function __construct(){
        parent::__construct();
		
		$this->load->database();     
        $this->load->model('cork/Blogmodel');
		date_default_timezone_set('Asia/Kolkata');
    }
    public function index(){
	
        $PageQry = $this->Blogmodel->getPage();
		$PostQry = $this->Blogmodel->getPost();
    	$this->load->view('cork/blog', ['PageQry'=>$PageQry,'PostQry'=>$PostQry]);
    
    }
	
	public function post(){
		$id = $this->uri->segment(3);
     $PostView = $this->Blogmodel->getPostByID($id);
     $this->load->view('cork/blog_details', ['PostView'=>$PostView]);
    }



	public function category(){
		$id = $this->uri->segment(2);
     $PostQry = $this->Blogmodel->getPostByCID($id);  
     $PostCatQry = $this->Blogmodel->getCategoryBySlug($id);    
		 $this->load->view('cork/categories', ['PostQry'=>$PostQry,'PostCatQry'=>$PostCatQry]);
    }
}