<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gallery extends MY_Controller {

	public function __construct(){
        parent::__construct();
		
		$this->load->database();     
        $this->load->model('cork/Gallerymodel');
		date_default_timezone_set('Asia/Kolkata');
    }
    public function index(){
        $PageQry = $this->Gallerymodel->getPage();
        $GalleryQry = $this->Gallerymodel->getGallery();
    	$this->load->view('cork/gallery', ['PageQry'=>$PageQry,'GalleryQry'=>$GalleryQry]);
    
    }
}