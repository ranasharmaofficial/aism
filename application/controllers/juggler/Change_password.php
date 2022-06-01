<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Change_password extends MY_Controller {

    public function __construct(){
        parent::__construct();
		
		$this->load->database();     
        $this->load->model('juggler/Changepassword');
		date_default_timezone_set('Asia/Kolkata');
    }
	public function index()
    {
        $PageQry = $this->Changepassword->changePass();
        $this->load->view('juggler/change_password', ['PageQry'=>$PageQry]);
    }
   
    public function update(){
     $id = $this->input->post('id');
     $password = $this->input->post('user_password');
     $cpassword = $this->input->post('cuser_password');
     if($password != $cpassword){
      $passerror = 'Password does not match!';
     }else{
     $data = array(                
                'user_password' => md5(trim($this->input->post('user_password'))),     
				'status' => trim($this->input->post('status')),                
                'modified' => date('d-m-Y g:i:s a')
		);
		$this->db->where('id', $id);
		$res = $this->db->update('tbl_admin', $data);
		
		if($res==true){		
		$this->session->set_flashdata('success', '<div class="alert alert-success fade show"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong><i class="fa fa-check-circle" aria-hidden="true"></i>&nbsp;Sucess!&nbsp;&nbsp;</strong>Password Updated.</div>');
		}else{
			$this->session->set_flashdata('error', '<div class="alert alert-danger fade show"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong><i class="fa fa-times-circle" aria-hidden="true"></i>&nbsp;Error!&nbsp;&nbsp;</strong>Password Not Updated.</div>');
		}
		
		redirect('juggler/change_password');
    }
}
	
}
