<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Franchise_center extends MY_Controller {
	
	public function __construct(){
        parent::__construct();

		$this->load->database();     
        $this->load->model('cork/Franchisemodel');
		date_default_timezone_set('Asia/Kolkata');
    }
    public function index(){
		$franchise_id = $this->session->userdata('session_id');
        $PageQry = $this->Franchisemodel->getPage();
		$BalQry = $this->Franchisemodel->getFranchiseBalanceByID($franchise_id);
    	$this->load->view('cork/franchise_center',['PageQry'=>$PageQry,'BalQry'=>$BalQry]);
    }
	
	public function student_list(){
		$franchise_id = $this->session->userdata('session_id');
        //$PageQry = $this->Franchisemodel->getPage();
        // $franQry = $this->Franchisemodel->getStudentListByFranchID($franchise_id);
		$PageQry = $this->Franchisemodel->getStudentListByFranchID($franchise_id);
        $BalQry = $this->Franchisemodel->getFranchiseBalanceByID($franchise_id);
    	$this->load->view('cork/franchise_student_list',['PageQry'=>$PageQry,'BalQry'=>$BalQry]);
    }
	public function student_detail($id){
		$franchise_id = $this->session->userdata('session_id');
        $PageQry = $this->Franchisemodel->getStudentDetailByID($id);
		$BalQry = $this->Franchisemodel->getFranchiseBalanceByID($franchise_id);
    	$this->load->view('cork/student_details',['PageQry'=>$PageQry,'BalQry'=>$BalQry]);
    }
	
	public function student_enroll_detail($id){
		$franchise_id = $this->session->userdata('session_id');
        $PageQry = $this->Franchisemodel->getStudentEnrollmentDetailByID($id);
		$BalQry = $this->Franchisemodel->getFranchiseBalanceByID($franchise_id);
    	$this->load->view('cork/student_enroll_details',['PageQry'=>$PageQry,'BalQry'=>$BalQry]);
    }
	public function admit_card_detail($id){
		$franchise_id = $this->session->userdata('session_id');
        $PageQry = $this->Franchisemodel->getStudentAdmitCardDetailByID($id);
		$BalQry = $this->Franchisemodel->getFranchiseBalanceByID($franchise_id);
    	$this->load->view('cork/student_admit_card_details',['PageQry'=>$PageQry,'BalQry'=>$BalQry]);
    }
	
	public function new_admission(){
		$franchise_id = $this->session->userdata('session_id');
		$ClassQry = $this->Franchisemodel->getClass();
		$CastQry = $this->Franchisemodel->getCastCat();
		$BalQry = $this->Franchisemodel->getFranchiseBalanceByID($franchise_id);
		$this->load->view('cork/student_new_admission',['BalQry'=>$BalQry,'ClassQry'=>$ClassQry,'CastQry'=>$CastQry]);
	}
	public function AjaxSubject(){
		$id = $this->input->post('cid');
        echo $this->Franchisemodel->getAjaxSubject($id);
    }
	public function insert(){
			$config['upload_path']   = './assets/images/student/';
			$config['allowed_types'] = 'gif|jpg|png|jpeg|PNG|JPG|JPEG|GIF';
			$config['max_size']      = 2048;
			$this->load->library('upload', $config);
			$this->upload->initialize($config);
			$this->upload->do_upload('image');
			$image = $this->upload->data();
			
			$config2['upload_path']   = './assets/images/student/';
			$config2['allowed_types'] = 'gif|jpg|png|jpeg|PNG|JPG|JPEG|GIF';
			$config2['max_size']      = 2048;
			$this->load->library('upload', $config2);
			$this->upload->initialize($config2);
			$this->upload->do_upload('sign');
			$sign = $this->upload->data();
			
			$config3['upload_path']   = './assets/images/student/doc/';
			$config3['allowed_types'] = 'gif|jpg|png|jpeg|PNG|JPG|JPEG|GIF|PDF|pdf';
			$config3['max_size']      = 2048;
			$this->load->library('upload', $config3);
			$this->upload->initialize($config3);
			$this->upload->do_upload('doc1');
			$doc1 = $this->upload->data();
		
			$config4['upload_path']   = './assets/images/student/doc/';
			$config4['allowed_types'] = 'gif|jpg|png|jpeg|PNG|JPG|JPEG|GIF|PDF|pdf';
			$config4['max_size']      = 2048;
			$this->load->library('upload', $config4);
			$this->upload->initialize($config4);
			$this->upload->do_upload('doc2');
			$doc2 = $this->upload->data();
			
			$config5['upload_path']   = './assets/images/student/doc/';
			$config5['allowed_types'] = 'gif|jpg|png|jpeg|PNG|JPG|JPEG|GIF|PDF|pdf';
			$config5['max_size']      = 2048;
			$this->load->library('upload', $config5);
			$this->upload->initialize($config5);
			$this->upload->do_upload('doc3');
			$doc3 = $this->upload->data();
			
			$subjectVal = implode(',', $this->input->post('subject_id'));
			
			$data = array(
				'admitted_course' => trim($this->input->post('course')),
				'name' => trim($this->input->post('name')),
				'email' => trim($this->input->post('email')),
				'dob' => trim($this->input->post('dob')),
				'fathers_name' => trim($this->input->post('father_name')),
				'mothers_name' => trim($this->input->post('mother_name')),
				'cast' => trim($this->input->post('cast')),
				'phone' => trim($this->input->post('phone')),
				'address' => trim($this->input->post('address')),
				'address2' => trim($this->input->post('address2')),
				'session' => trim($this->input->post('session')),
				'franchise_id' => trim($this->input->post('franchise_id')),
				'class_id' => trim($this->input->post('class_id')),
				'subject_id' => $subjectVal,
				'image' => $image['file_name'],
				'sign' => $sign['file_name'],
				'doc1' => $doc1['file_name'],
				'doc2' => $doc2['file_name'],
				'doc3' => $doc3['file_name'],
				'status' => '1',
				'modified' => date('d-m-Y g:i:s a')
			);

		$res = $this->db->insert('tbl_student', $data);
		if($res==true){	
			if($doc1['file_name']!==""){
				$last_id = $this->db->insert_id();
				$AWKUniqNo = "100010".$last_id;
				$dataUp = array(
					'student_ack_id' => $AWKUniqNo
				);
				$this->db->where('id',$last_id);
				$this->db->update('tbl_student', $dataUp);
			}
		$this->session->set_tempdata('success', '<div class="alert alert-success fade show"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong><i class="fa fa-check-circle" aria-hidden="true"></i>&nbsp;Sucess!&nbsp;&nbsp;</strong>Student Added Successfully!.</div>',5);
		}else{
			$this->session->set_tempdata('error', '<div class="alert alert-danger fade show"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong><i class="fa fa-times-circle" aria-hidden="true"></i>&nbsp;Error!&nbsp;&nbsp;</strong>Something went wrong. Please try again.</div>',5);
		}
		    redirect('franchise-center/student-list');
	}
	
	public function edit_admission($id){
		$franchise_id = $this->session->userdata('session_id');
		$ClassQry = $this->Franchisemodel->getClass();
		$CastQry = $this->Franchisemodel->getCastCat();
		$BalQry = $this->Franchisemodel->getFranchiseBalanceByID($franchise_id);
		$PageQry = $this->Franchisemodel->getStudentAdmissionByID($id);
		$this->load->view('cork/edit_student_new_admission',['BalQry'=>$BalQry,'ClassQry'=>$ClassQry,'CastQry'=>$CastQry,'PageQry'=>$PageQry]);
	}
	
	public function update(){
			$id = $this->input->post('p_id');
			$docblk = $this->input->post('Old_doc1');
			$config['upload_path']   = './assets/images/student/';
			$config['allowed_types'] = 'gif|jpg|png|jpeg|PNG|JPG|JPEG|GIF';
			$config['max_size']      = 2048;
			$this->load->library('upload', $config);
			$this->upload->initialize($config);
			$this->upload->do_upload('image');
			$image = $this->upload->data();
			if($image['file_name']!==""){
				$stdPhoto = $image['file_name'];
			}else{
				$stdPhoto = $this->input->post('Old_image');
			}
			
			
			$config2['upload_path']   = './assets/images/student/';
			$config2['allowed_types'] = 'gif|jpg|png|jpeg|PNG|JPG|JPEG|GIF';
			$config2['max_size']      = 2048;
			$this->load->library('upload', $config2);
			$this->upload->initialize($config2);
			$this->upload->do_upload('sign');
			$sign = $this->upload->data();
			if($sign['file_name']!==""){
				$stdSign = $sign['file_name'];
			}else{
				$stdSign = $this->input->post('Old_sign');
			}
			
			$config3['upload_path']   = './assets/images/student/doc/';
			$config3['allowed_types'] = 'gif|jpg|png|jpeg|PNG|JPG|JPEG|GIF|PDF|pdf';
			$config3['max_size']      = 2048;
			$this->load->library('upload', $config3);
			$this->upload->initialize($config3);
			$this->upload->do_upload('doc1');
			$doc1 = $this->upload->data();
			if($doc1['file_name']!==""){
				$stddoc1 = $doc1['file_name'];
			}else{
				$stddoc1 = $this->input->post('Old_doc1');
			}
			
			$config4['upload_path']   = './assets/images/student/doc/';
			$config4['allowed_types'] = 'gif|jpg|png|jpeg|PNG|JPG|JPEG|GIF|PDF|pdf';
			$config4['max_size']      = 2048;
			$this->load->library('upload', $config4);
			$this->upload->initialize($config4);
			$this->upload->do_upload('doc2');
			$doc2 = $this->upload->data();
			if($doc2['file_name']!==""){
				$stddoc2 = $doc2['file_name'];
			}else{
				$stddoc2 = $this->input->post('Old_doc2');
			}
			
			$config5['upload_path']   = './assets/images/student/doc/';
			$config5['allowed_types'] = 'gif|jpg|png|jpeg|PNG|JPG|JPEG|GIF|PDF|pdf';
			$config5['max_size']      = 2048;
			$this->load->library('upload', $config5);
			$this->upload->initialize($config5);
			$this->upload->do_upload('doc3');
			$doc3 = $this->upload->data();
			if($doc3['file_name']!==""){
				$stddoc3 = $doc3['file_name'];
			}else{
				$stddoc3 = $this->input->post('Old_doc3');
			}
			
			
			$subjectVal = implode(',', $this->input->post('subject_id'));
			
			$data = array(
				'admitted_course' => trim($this->input->post('course')),
				'name' => trim($this->input->post('name')),
				'email' => trim($this->input->post('email')),
				'dob' => trim($this->input->post('dob')),
				'fathers_name' => trim($this->input->post('father_name')),
				'mothers_name' => trim($this->input->post('mother_name')),
				'cast' => trim($this->input->post('cast')),
				'phone' => trim($this->input->post('phone')),
				'address' => trim($this->input->post('address')),
				'address2' => trim($this->input->post('address2')),
				'session' => trim($this->input->post('session')),
				'franchise_id' => trim($this->input->post('franchise_id')),
				'class_id' => trim($this->input->post('class_id')),
				'subject_id' => $subjectVal,
				'image' => $stdPhoto,
				'sign' => $stdSign,
				'doc1' => $stddoc1,
				'doc2' => $stddoc2,
				'doc3' => $stddoc3,
				'status' => trim($this->input->post('status')),
				'modified' => date('d-m-Y g:i:s a')
			);
		$this->db->where('id',$id);
		$res = $this->db->update('tbl_student', $data);
		if($res==true){	
			if($doc1['file_name']!=="" && $docblk==""){
				$AWKUniqNo = "100010".$id;
				$dataUp = array(
					'student_ack_id' => $AWKUniqNo
				);
				$this->db->where('id',$id);
				$this->db->update('tbl_student', $dataUp);
			}
		$this->session->set_tempdata('success', '<div class="alert alert-success fade show"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong><i class="fa fa-check-circle" aria-hidden="true"></i>&nbsp;Sucess!&nbsp;&nbsp;</strong>Row Added.</div>',5);
		}else{
			$this->session->set_tempdata('error', '<div class="alert alert-danger fade show"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong><i class="fa fa-times-circle" aria-hidden="true"></i>&nbsp;Error!&nbsp;&nbsp;</strong>Row Not Added.</div>',5);
		}
		    redirect('franchise-center/student-list');
	}
}