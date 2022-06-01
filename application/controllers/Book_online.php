<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class Book_online extends MY_Controller {



	public function __construct(){
        parent::__construct();
		
		$this->load->database();     
        $this->load->model('cork/Bookonlinemodel');
		date_default_timezone_set('Asia/Kolkata');
    }

    public function index(){

        $PageQry = $this->Bookonlinemodel->getPage();
        $BookOnlineQry = $this->Bookonlinemodel->getBookOnline();

    	$this->load->view('cork/book_online', ['PageQry'=>$PageQry,'BookOnlineQry'=>$BookOnlineQry]);

    

    }
    public function details(){
        $id = $this->uri->segment(3);
     $BookView = $this->Bookonlinemodel->getBookOnlineByID($id);
     $this->load->view('cork/book_online_details', ['BookView'=>$BookView]);
    }

}