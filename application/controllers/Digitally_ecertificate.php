<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Digitally_ecertificate extends MY_Controller {	
	public function __construct(){
        parent::__construct();		
		$this->load->database();     
        $this->load->model('cork/Digitallyecertificatemodel');
		$this->load->library('session');
		date_default_timezone_set('Asia/Kolkata');
    }
    public function index(){
        $PageQry = $this->Digitallyecertificatemodel->getPage();
        $CourseQry = $this->Digitallyecertificatemodel->getCourse();
    	$this->load->view('cork/digitally_ecertificate',['PageQry'=>$PageQry,'CourseQry'=>$CourseQry]);
    }
	public function insert(){
		
		$dobinput = $this->input->post('dob');
		$dformat = date('Y-m-d', strtotime($dobinput));
        $data = array(
                'certificate_type' => trim($this->input->post('cert_type')),
                'course' => trim($this->input->post('course')), 
                'year' => trim($this->input->post('year')),
                'month' => trim($this->input->post('month')),
                'rollno' => trim($this->input->post('rollno')),
                'dob' => trim($dformat),
                'status' => 1,
                'modified' => date('Y-m-d H:i:s')
        );
        $this->db->insert('tbl_digital_certificate', $data);
        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissable"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>User added successfully.</strong></div>');
        redirect('digitally_ecertificate');
    }
}