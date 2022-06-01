<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Results extends MY_Controller {
    
    public function __construct(){
        parent::__construct();
        
        $this->load->database();     
        $this->load->model('cork/Resultsmodel');
        date_default_timezone_set('Asia/Kolkata');
    }
    public function index(){
        $PageQry = $this->Resultsmodel->getPage();
        $QuickQry = $this->Resultsmodel->getQuickLinks();
        $GalSlidQry = $this->Resultsmodel->getGalSlider();
        $this->load->view('cork/results',['PageQry'=>$PageQry,'QuickQry'=>$QuickQry,'GalSlidQry'=>$GalSlidQry]);
    }
    
    public function create_captcha(){
        $this->load->helper('download');
        $enroll = $this->input->post('enroll');
        $emptyData = $this->db->where('enrollment_no',$enroll)->get('tbl_result')->num_rows();
        if($emptyData > 0){
            $getFile = $this->db->where('enrollment_no',$enroll)->get('tbl_result')->row();
                $captchaResult = $this->input->post('captchaResult');
                $firstNumber = $this->input->post('firstNumber');
                $secondNumber = $this->input->post('secondNumber');
                $checkTotal = $firstNumber + $secondNumber;
                if ($captchaResult == $checkTotal){
                    $path_pdf1 = 'assets/images/student/result/'.$getFile->result_file;
                    $path_pdf= str_replace(".html", "","$path_pdf1"); 

                    $the_session = array("result_key" => $path_pdf);
                    $this -> session -> set_userdata($the_session);

                    

                    // $pdf = base_url('assets/images/student/result/'.$getFile->result_file);
                    // $fileinfo = pathinfo($pdf);
                    // $name = 'RT-'.$enroll. '.' . strtolower($fileinfo['extension']);
                    // $data = file_get_contents('assets/images/student/result/'.$getFile->result_file); 
                    // force_download($name, $pdf); 
                    
                } else {
                    $this->session->set_tempdata('error', '<div class="alert alert-danger alert-dismissible show"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong><i class="fa fa-times-circle" aria-hidden="true"></i>&nbsp;Error!&nbsp;&nbsp;</strong>Captcha not valid!.</div>',5);
                }
                
        }else{
            $this->session->set_tempdata('exit','<div class="alert alert-danger alert-dismissible show"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong><i class="fa fa-times-circle" aria-hidden="true"></i>&nbsp;Error!&nbsp;&nbsp;</strong>Enrollment not Generated!.</div>',5);
        }
        redirect('results');    
    }
}