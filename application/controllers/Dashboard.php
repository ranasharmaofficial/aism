<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Dashboard extends MY_Controller {
	public function __construct(){
        parent::__construct();	
		$this->load->database();     
		$this->load->model('cork/Dashboardmodel');
		date_default_timezone_set('Asia/Kolkata');
		$this->load->helper(array('form', 'url'));
                $this->load->library('form_validation', 'image_lib');

    }
    public function index(){
    	$ProfileQry = $this->Dashboardmodel->getProfile();
    	$OrderQry = $this->Dashboardmodel->getOrder();    	
    	$this->load->view('cork/dashboard',['ProfileQry'=>$ProfileQry,'OrderQry'=>$OrderQry]); 
    }
public function update_profile(){
		$id = $this->input->post('id');		
		$data = array(
                'first_name' => trim($this->input->post('first_name')),
                'last_name' => trim($this->input->post('last_name')),
				'phone' => trim($this->input->post('phone')),
				'email' => trim($this->input->post('email')),
				'address' => trim($this->input->post('address')),
				'status' => 1,
                'modified' => date('d-m-Y g:i:s a')
		);	
		$this->db->where('id', $id);
		$res = $this->db->update('tbl_users', $data);
		if($res==true){		
		$this->session->set_flashdata('success', '<div class="alert alert-success fade show"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong><i class="fa fa-check-circle" aria-hidden="true"></i>&nbsp;Sucess!&nbsp;&nbsp;</strong>Row Updated.</div>');
		}else{

			$this->session->set_flashdata('error', '<div class="alert alert-danger fade show"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong><i class="fa fa-times-circle" aria-hidden="true"></i>&nbsp;Error!&nbsp;&nbsp;</strong>Row Not Updated.</div>');
		}
		    redirect('dashboard');
	}
	public function insert_result(){
		$user_id = $this->input->post('user_id');
		$lid = $this->input->post('lid');
		$question = $this->input->post('question');
		$answer = $this->input->post('answer');

		$insert_data = array();
       // $field_data = $this->input->post('field');

        for($i = 0; $i < count($question); $i++)
        {
            $insert_data[] = array(
                'user_id' => $user_id[$i],
                'lid' => $lid[$i],
                'question' => $question[$i],
                'answer' => $answer[$i],
                'status' => 1,
                'modified' => date('d-m-Y g:i:s a')
            );
        }

        $this->db->insert_batch('tbl_results', $insert_data);
        redirect('dashboard');
	}
	public function certificate(){
		//$this->load->view('welcome_message');
		//$html = $this->output->get_output();
		$html = '<div style="text-align:center;">';
		$html .= '<img src="http://sufitec.com/neostylus/assets/cork/img/certificate1.jpg" width="600">';
		$html .= '<div style="text-align:center;font-size:18px;color:#000371;font-weight:600;">'.$this->session->userdata('first_name').'&nbsp;'.$this->session->userdata('last_name').'</div>';
		$html .= '<img src="http://sufitec.com/neostylus/assets/cork/img/certificate2.jpg" width="600">';
		$html .= '<div style="text-align:left;margin-left:260px;color:#000371;position:relative;top:60px;">'.date("d-m-Y").'</div>';
		$html .= '<img src="http://sufitec.com/neostylus/assets/cork/img/certificate3.jpg" width="600">';
		$html .= '</div>';
        		// Load pdf library
		$this->load->library('pdf');
		$this->pdf->loadHtml($html);
		$this->pdf->setPaper('A4', 'landscape');
		$this->pdf->render();
		// Output the generated PDF (1 = download and 0 = preview)
		$this->pdf->stream("certificate.pdf", array("Attachment"=> 0));		
	}

}