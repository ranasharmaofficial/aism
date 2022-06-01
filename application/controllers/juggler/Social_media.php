<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Social_media extends MY_Controller {

	 public function __construct(){
        parent::__construct();
		
		$this->load->database();     
        $this->load->model('juggler/Socialmedia');
		date_default_timezone_set('Asia/Kolkata');
    }
    public function index()
    {

        $PageQry = $this->Socialmedia->socialMed();         
        $this->load->view('juggler/social_media', ['PageQry'=>$PageQry]);
       
    }

	public function update(){
     $id = $this->input->post('id');
                                                          
     $data = array(                
                'facebook' => trim($this->input->post('facebook')), 
                'twitter' => trim($this->input->post('twitter')),  
                'linkedin' => trim($this->input->post('linkedin')),  
                'instagram' => trim($this->input->post('instagram')),  
				'youtube' => trim($this->input->post('youtube')),  
                'status' => trim($this->input->post('status')),                 
                'modified' => date('d-m-Y g:i:s a')
		);
		$this->db->where('id', $id);
		$res = $this->db->update('tbl_social_media', $data);
		
		if($res==true){		
		$this->session->set_flashdata('success', '<div class="alert alert-success fade show"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong><i class="fa fa-check-circle" aria-hidden="true"></i>&nbsp;Sucess!&nbsp;&nbsp;</strong>Data Updated.</div>');
		}else{
			$this->session->set_flashdata('error', '<div class="alert alert-danger fade show"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong><i class="fa fa-times-circle" aria-hidden="true"></i>&nbsp;Error!&nbsp;&nbsp;</strong>Data Not Updated.</div>');
		}
		
		redirect('juggler/social-media');
    }
}
