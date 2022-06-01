<?php



defined('BASEPATH') OR exit('No direct script access allowed');



class Quizzes extends MY_Controller {



	public function __construct(){

        parent::__construct();



		$this->load->database();

        $this->load->model('juggler/Quizzesmodel');

		date_default_timezone_set('Asia/Kolkata');

    }

 	public function index()

    {

        $PageQry = $this->Quizzesmodel->getQuizzes();

        $this->load->view('juggler/quizzes', ['PageQry'=>$PageQry]);

    }



    public function add(){

    	$CategoryQry = $this->Quizzesmodel->getCategory();

        $this->load->view('juggler/add_quizzes',['CategoryQry'=>$CategoryQry]);

    }



	public function insert(){





		$data = array(

                'cid' => trim($this->input->post('cid')),

                'ccid' => trim($this->input->post('ccid')),

                'lid' => trim($this->input->post('lid')),

                'question_type' => trim($this->input->post('question_type')),

                'name' => trim($this->input->post('name')),

				'option_one' => trim($this->input->post('option_one')),

				'option_two' => trim($this->input->post('option_two')),

                'option_three' => trim($this->input->post('option_three')),

				'option_four' => trim($this->input->post('option_four')),

				'true_answer' => trim($this->input->post('true_answer')),

				'marks' => trim($this->input->post('marks')),

				'status' => trim($this->input->post('status')),

                'modified' => date('d-m-Y g:i:s a')

		);



		$res = $this->db->insert('tbl_quizzes', $data);

		if($res==true){

		$this->session->set_flashdata('success', '<div class="alert alert-success fade show"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong><i class="fa fa-check-circle" aria-hidden="true"></i>&nbsp;Sucess!&nbsp;&nbsp;</strong>Row Added.</div>');

		}else{

			$this->session->set_flashdata('error', '<div class="alert alert-danger fade show"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong><i class="fa fa-times-circle" aria-hidden="true"></i>&nbsp;Error!&nbsp;&nbsp;</strong>Row Not Added.</div>');

		}

		    redirect('juggler/quizzes');

	}



	public function edit($id){

		$PageQry = $this->Quizzesmodel->getQuizzesByID($id);

		$CategoryQry = $this->Quizzesmodel->getCategory();

		$CoursesQry = $this->Quizzesmodel->getCourses();

		$LessionQry = $this->Quizzesmodel->getLession();

		$this->load->view('juggler/edit_quizzes', ['PageQry'=>$PageQry,'CategoryQry'=>$CategoryQry,'LessionQry'=>$LessionQry,'CoursesQry'=>$CoursesQry]);

	}



	public function update(){

		$id = $this->input->post('id');



		$data = array(

				'cid' => trim($this->input->post('cid')),

                'ccid' => trim($this->input->post('ccid')),

                'lid' => trim($this->input->post('lid')),

                'question_type' => trim($this->input->post('question_type')),

                'name' => trim($this->input->post('name')),

				'option_one' => trim($this->input->post('option_one')),

				'option_two' => trim($this->input->post('option_two')),

                'option_three' => trim($this->input->post('option_three')),

				'option_four' => trim($this->input->post('option_four')),

				'true_answer' => trim($this->input->post('true_answer')),

				'marks' => trim($this->input->post('marks')),

				'status' => trim($this->input->post('status')),

                'modified' => date('d-m-Y g:i:s a')

		);

		$this->db->where('id', $id);

		$res = $this->db->update('tbl_quizzes', $data);

		if($res==true){

		$this->session->set_flashdata('success', '<div class="alert alert-success fade show"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong><i class="fa fa-check-circle" aria-hidden="true"></i>&nbsp;Sucess!&nbsp;&nbsp;</strong>Row Updated.</div>');

		}else{

			$this->session->set_flashdata('error', '<div class="alert alert-danger fade show"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong><i class="fa fa-times-circle" aria-hidden="true"></i>&nbsp;Error!&nbsp;&nbsp;</strong>Row Not Updated.</div>');

		}

		    redirect('juggler/quizzes');

	}

	public function delete($id){

		$res = $this->Quizzesmodel->deleteQuizzesByID($id);

		if($res==true){

		$this->session->set_flashdata('success', '<div class="alert alert-success fade show"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong><i class="fa fa-check-circle" aria-hidden="true"></i>&nbsp;Sucess!&nbsp;&nbsp;</strong>Row Deleted.</div>');

		}else{

			$this->session->set_flashdata('error', '<div class="alert alert-danger fade show"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong><i class="fa fa-times-circle" aria-hidden="true"></i>&nbsp;Error!&nbsp;&nbsp;</strong>Row Not Deleted.</div>');

		}

		    redirect('juggler/quizzes');

	}



	  public function AjaxCourse(){

	  	$id = $this->input->post('cid');

        echo $this->Quizzesmodel->getAjaxCourse($id);     



    }

     public function AjaxLession(){

	  	$id = $this->input->post('ccid');

        echo $this->Quizzesmodel->getAjaxLession($id);     



    }

}

