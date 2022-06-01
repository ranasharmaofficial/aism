<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends MY_Controller {
    public function __construct(){

        parent::__construct();
        $this->load->database();     
        $this->load->model('cork/Loginmodel');
        date_default_timezone_set('Asia/Kolkata');
    }



    public function index(){
        $PageQry = $this->Loginmodel->getPage();
        $this->load->view('cork/login', ['PageQry'=>$PageQry]);

    }



    public function auth(){
        $email    = $this->input->post('email',TRUE);
        $password = md5($this->input->post('password',TRUE));
        $validate = $this->Loginmodel->validate($email,$password);
        if($validate->num_rows() > 0){
            $data  = $validate->row_array();
            $first_name  = $data['franchise_school'];
            $email = $data['franchise_email'];
            $center = $data['franchise_unique_id'];
            $franchise_id = $data['id'];
            $sesdata = array(
                'first_name' => $first_name,
                'email' => $email,
                'center_code' => $center,
                'session_id' => $franchise_id,
                'logged_in' => TRUE
            );
            $this->session->set_userdata($sesdata);
            redirect('franchise-center');

        }else{
            echo $this->session->set_flashdata('msg','Email or Password is Wrong');
            redirect('login');
        }
    }

 

  function logout(){

      $this->session->sess_destroy();

      redirect('login');

  }



}