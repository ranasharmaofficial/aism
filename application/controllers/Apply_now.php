<?php



defined('BASEPATH') OR exit('No direct script access allowed');







class Apply_now extends MY_Controller {







	public function __construct(){

        parent::__construct();

		

		$this->load->database();     

        $this->load->model('cork/Applymodel');

		date_default_timezone_set('Asia/Kolkata');

    }



    public function index(){

if (!$this->session->userdata('loggedin')==TRUE)

{

redirect('login');

}

        $course = $this->input->post('course');

         $course_id = $this->input->post('course_id');

        $duration = $this->input->post('duration');

        $eligibility = $this->input->post('eligibility');

        $course_fee = $this->input->post('course_fee');



        $this->session->set_flashdata('s_course', $course);

        $this->session->set_flashdata('s_duration', $duration);

        $this->session->set_flashdata('s_eligibility', $eligibility);

        $this->session->set_flashdata('s_course_fee', $course_fee);

         $this->session->set_flashdata('s_course_id', $course_id);

        $PageQry = $this->Applymodel->getPage();



    	$this->load->view('cork/apply_now', ['PageQry'=>$PageQry]);    



    }



    public function insert(){





        $data = array(

                'user_id' => $this->session->userdata('user_id'),

                'first_name' => trim($this->input->post('first_name')),

                'last_name' => trim($this->input->post('last_name')),

                'email' => trim($this->input->post('email')),

                'phone' => trim($this->input->post('phone')),

                'course' => trim($this->input->post('course')),

                'course_id' => trim($this->input->post('course_id')),

                'duration' => trim($this->input->post('duration')),

                'eligibility' => trim($this->input->post('eligibility')),

                'course_fee' => trim($this->input->post('course_fee')),

                'address' => trim($this->input->post('address')),

                'country' => trim($this->input->post('country')),

                'state' => trim($this->input->post('state')),

                'city' => trim($this->input->post('city')),

                'zip_code' => trim($this->input->post('zip_code')),

                'status' => 1,

                'modified' => date('d-m-Y g:i:s a')

        );



        $res = $this->db->insert('tbl_order', $data);

        if($res==true){

        $this->session->set_flashdata('success', '<div class="alert alert-success fade show"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong><i class="fa fa-check-circle" aria-hidden="true"></i>&nbsp;Sucess!&nbsp;&nbsp;</strong>Row Added.</div>');

        }else{

            $this->session->set_flashdata('error', '<div class="alert alert-danger fade show"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong><i class="fa fa-times-circle" aria-hidden="true"></i>&nbsp;Error!&nbsp;&nbsp;</strong>Row Not Added.</div>');

        }

            redirect('payment');

    }



}