<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Student_zone extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();

        $this->load->database();
        $this->load->model('juggler/Studentzonemodel');
        $this->load->model('juggler/Categorymodel', 'Categoriesmodel');
        date_default_timezone_set('Asia/Kolkata');
    }

    public function index()
    {
        $PageQry = $this->Studentzonemodel->getStudentData();
        $this->load->view('juggler/students', ['PageQry' => $PageQry]);
    }

    public function add()
    {
        $ClassQry = $this->Studentzonemodel->getClass();
        $FranQry = $this->Studentzonemodel->getFranchise();
        $CastQry = $this->Studentzonemodel->getCastCat();
        $getCourse = $this->Studentzonemodel->getCourse();
        $this->load->view('juggler/add_student', ['getCourse' => $getCourse,'ClassQry' => $ClassQry, 'FranQry' => $FranQry, 'CastQry' => $CastQry]);
    }

    public function AjaxSubject()
    {
        $id = $this->input->post('cid');
        echo $this->Studentzonemodel->getAjaxSubject($id);
    }

    public function insert()
    {
        $config['upload_path'] = './assets/images/student/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg|PNG|JPG|JPEG|GIF';
        $config['max_size'] = 2048;
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        $this->upload->do_upload('image');
        $image = $this->upload->data();

        $config2['upload_path'] = './assets/images/student/';
        $config2['allowed_types'] = 'gif|jpg|png|jpeg|PNG|JPG|JPEG|GIF';
        $config2['max_size'] = 2048;
        $this->load->library('upload', $config2);
        $this->upload->initialize($config2);
        $this->upload->do_upload('sign');
        $sign = $this->upload->data();

        $config3['upload_path'] = './assets/images/student/doc/';
        $config3['allowed_types'] = 'gif|jpg|png|jpeg|PNG|JPG|JPEG|GIF|PDF|pdf';
        $config3['max_size'] = 2048;
        $this->load->library('upload', $config3);
        $this->upload->initialize($config3);
        $this->upload->do_upload('doc1');
        $doc1 = $this->upload->data();

        $config4['upload_path'] = './assets/images/student/doc/';
        $config4['allowed_types'] = 'gif|jpg|png|jpeg|PNG|JPG|JPEG|GIF|PDF|pdf';
        $config4['max_size'] = 2048;
        $this->load->library('upload', $config4);
        $this->upload->initialize($config4);
        $this->upload->do_upload('doc2');
        $doc2 = $this->upload->data();

        $config5['upload_path'] = './assets/images/student/doc/';
        $config5['allowed_types'] = 'gif|jpg|png|jpeg|PNG|JPG|JPEG|GIF|PDF|pdf';
        $config5['max_size'] = 2048;
        $this->load->library('upload', $config5);
        $this->upload->initialize($config5);
        $this->upload->do_upload('doc3');
        $doc3 = $this->upload->data();

        $subjectVal = implode(',', $this->input->post('subject_id'));
        $admittedCourse = trim($this->input->post('course'));
        $getCourse = $this->Studentzonemodel->getCourseByID($admittedCourse);

        $data = array(
            'admitted_course_id' => $admittedCourse,
            'admitted_course' => $getCourse->name,
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
            'franchise_id' => trim($this->input->post('school_id')),
            'class_id' => trim($this->input->post('class_id')),
            'subject_id' => $subjectVal,
            'image' => $image['file_name'],
            'sign' => $sign['file_name'],
            'doc1' => $doc1['file_name'],
            'doc2' => $doc2['file_name'],
            'doc3' => $doc3['file_name'],
            'status' => trim($this->input->post('status')),
            'modified' => date('d-m-Y g:i:s a')
        );

        $res = $this->db->insert('tbl_student', $data);
        if ($res == true) {
            if ($doc1['file_name'] !== "") {
                $last_id = $this->db->insert_id();
                $AWKUniqNo = "100010" . $last_id;
                $dataUp = array(
                    'student_ack_id' => $AWKUniqNo
                );
                $this->db->where('id', $last_id);
                $this->db->update('tbl_student', $dataUp);
            }
            $this->session->set_tempdata('success', '<div class="alert alert-success fade show"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong><i class="fa fa-check-circle" aria-hidden="true"></i>&nbsp;Sucess!&nbsp;&nbsp;</strong>Row Added.</div>', 5);
        } else {
            $this->session->set_tempdata('error', '<div class="alert alert-danger fade show"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong><i class="fa fa-times-circle" aria-hidden="true"></i>&nbsp;Error!&nbsp;&nbsp;</strong>Row Not Added.</div>', 5);
        }
        redirect('juggler/student_zone');
    }

    public function edit($id)
    {
        $ClassQry = $this->Studentzonemodel->getClass();
        $FranQry = $this->Studentzonemodel->getFranchise();
        $PageQry = $this->Studentzonemodel->getStudentByID($id);
        $CastQry = $this->Studentzonemodel->getCastCat();
        $getCourse = $this->Studentzonemodel->getCourse();

        $this->load->view('juggler/edit_student', ['getCourse' => $getCourse, 'ClassQry' => $ClassQry, 'FranQry' => $FranQry, 'PageQry' => $PageQry, 'CastQry' => $CastQry]);
    }

    public function update()
    {
        $id = $this->input->post('id');
        $docblk = $this->input->post('Old_doc1');
        $config['upload_path'] = './assets/images/student/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg|PNG|JPG|JPEG|GIF';
        $config['max_size'] = 2048;
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        $this->upload->do_upload('image');
        $image = $this->upload->data();
        if ($image['file_name'] !== "") {
            $stdPhoto = $image['file_name'];
        } else {
            $stdPhoto = $this->input->post('Old_image');
        }


        $config2['upload_path'] = './assets/images/student/';
        $config2['allowed_types'] = 'gif|jpg|png|jpeg|PNG|JPG|JPEG|GIF';
        $config2['max_size'] = 2048;
        $this->load->library('upload', $config2);
        $this->upload->initialize($config2);
        $this->upload->do_upload('sign');
        $sign = $this->upload->data();
        if ($sign['file_name'] !== "") {
            $stdSign = $sign['file_name'];
        } else {
            $stdSign = $this->input->post('Old_sign');
        }

        $config3['upload_path'] = './assets/images/student/doc/';
        $config3['allowed_types'] = 'gif|jpg|png|jpeg|PNG|JPG|JPEG|GIF|PDF|pdf';
        $config3['max_size'] = 2048;
        $this->load->library('upload', $config3);
        $this->upload->initialize($config3);
        $this->upload->do_upload('doc1');
        $doc1 = $this->upload->data();
        if ($doc1['file_name'] !== "") {
            $stddoc1 = $doc1['file_name'];
        } else {
            $stddoc1 = $this->input->post('Old_doc1');
        }

        $config4['upload_path'] = './assets/images/student/doc/';
        $config4['allowed_types'] = 'gif|jpg|png|jpeg|PNG|JPG|JPEG|GIF|PDF|pdf';
        $config4['max_size'] = 2048;
        $this->load->library('upload', $config4);
        $this->upload->initialize($config4);
        $this->upload->do_upload('doc2');
        $doc2 = $this->upload->data();
        if ($doc2['file_name'] !== "") {
            $stddoc2 = $doc2['file_name'];
        } else {
            $stddoc2 = $this->input->post('Old_doc2');
        }

        $config5['upload_path'] = './assets/images/student/doc/';
        $config5['allowed_types'] = 'gif|jpg|png|jpeg|PNG|JPG|JPEG|GIF|PDF|pdf';
        $config5['max_size'] = 2048;
        $this->load->library('upload', $config5);
        $this->upload->initialize($config5);
        $this->upload->do_upload('doc3');
        $doc3 = $this->upload->data();
        if ($doc3['file_name'] !== "") {
            $stddoc3 = $doc3['file_name'];
        } else {
            $stddoc3 = $this->input->post('Old_doc3');
        }


        $subjectVal = implode(',', $this->input->post('subject_id'));
        $admittedCourse = trim($this->input->post('course'));
        $getCourse = $this->Studentzonemodel->getCourseByID($admittedCourse);

        $data = array(
            'admitted_course_id' => $admittedCourse,
            'admitted_course' => $getCourse->name,
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
            'franchise_id' => trim($this->input->post('school_id')),
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
        $this->db->where('id', $id);
        $res = $this->db->update('tbl_student', $data);
        if ($res == true) {
            if ($doc1['file_name'] !== "" && $docblk == "") {
                $AWKUniqNo = "100010" . $id;
                $dataUp = array(
                    'student_ack_id' => $AWKUniqNo
                );
                $this->db->where('id', $id);
                $this->db->update('tbl_student', $dataUp);
            }
            $this->session->set_tempdata('success', '<div class="alert alert-success fade show"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong><i class="fa fa-check-circle" aria-hidden="true"></i>&nbsp;Sucess!&nbsp;&nbsp;</strong>Row Added.</div>', 5);
        } else {
            $this->session->set_tempdata('error', '<div class="alert alert-danger fade show"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong><i class="fa fa-times-circle" aria-hidden="true"></i>&nbsp;Error!&nbsp;&nbsp;</strong>Row Not Added.</div>', 5);
        }
        redirect('juggler/student_zone');
    }

    public function delete($id)
    {
        $res = $this->Studentzonemodel->deleteStudentByID($id);
        if ($res == true) {
            $this->session->set_tempdata('success', '<div class="alert alert-success fade show"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong><i class="fa fa-check-circle" aria-hidden="true"></i>&nbsp;Sucess!&nbsp;&nbsp;</strong>Row Deleted.</div>', 5);
        } else {
            $this->session->set_tempdata('error', '<div class="alert alert-danger fade show"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong><i class="fa fa-times-circle" aria-hidden="true"></i>&nbsp;Error!&nbsp;&nbsp;</strong>Row Not Deleted.</div>', 5);
        }
        redirect('juggler/student_zone');
    }


    /*======= ADD HERE FOR THE CLASS ======*/
    public function classes()
    {
        $PageQry = $this->Studentzonemodel->getClass();
        $this->load->view('juggler/classes', ['PageQry' => $PageQry]);
    }

    public function add_class()
    {
        $this->load->view('juggler/add_class');
    }

    public function insert_class()
    {

        $data = array(
            'class_name' => trim($this->input->post('name')),
            'enrollment_amount' => trim($this->input->post('amount')),
            'status' => trim($this->input->post('status')),
            'modified' => date('d-m-Y g:i:s a')
        );

        $res = $this->db->insert('tbl_class', $data);
        if ($res == true) {
            $this->session->set_flashdata('success', '<div class="alert alert-success fade show"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong><i class="fa fa-check-circle" aria-hidden="true"></i>&nbsp;Sucess!&nbsp;&nbsp;</strong>Row Added.</div>');
        } else {
            $this->session->set_flashdata('error', '<div class="alert alert-danger fade show"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong><i class="fa fa-times-circle" aria-hidden="true"></i>&nbsp;Error!&nbsp;&nbsp;</strong>Row Not Added.</div>');
        }
        redirect('juggler/student_zone/classes');
    }

    public function edit_class($id)
    {
        $PageQry = $this->Studentzonemodel->getClassByID($id);
        $this->load->view('juggler/edit_class', ['PageQry' => $PageQry]);
    }

    public function update_class()
    {
        $id = $this->input->post('id');


        $data = array(
            'class_name' => trim($this->input->post('name')),
            'enrollment_amount' => trim($this->input->post('amount')),
            'status' => trim($this->input->post('status')),
            'modified' => date('d-m-Y g:i:s a')
        );
        $this->db->where('id', $id);
        $res = $this->db->update('tbl_class', $data);
        if ($res == true) {
            $this->session->set_flashdata('success', '<div class="alert alert-success fade show"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong><i class="fa fa-check-circle" aria-hidden="true"></i>&nbsp;Sucess!&nbsp;&nbsp;</strong>Row Updated.</div>');
        } else {
            $this->session->set_flashdata('error', '<div class="alert alert-danger fade show"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong><i class="fa fa-times-circle" aria-hidden="true"></i>&nbsp;Error!&nbsp;&nbsp;</strong>Row Not Updated.</div>');
        }
        redirect('juggler/student_zone/classes');
    }

    public function delete_class($id)
    {
        $res = $this->Studentzonemodel->deleteClassByID($id);
        if ($res == true) {
            $this->session->set_flashdata('success', '<div class="alert alert-success fade show"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong><i class="fa fa-check-circle" aria-hidden="true"></i>&nbsp;Sucess!&nbsp;&nbsp;</strong>Row Deleted.</div>');
        } else {
            $this->session->set_flashdata('error', '<div class="alert alert-danger fade show"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong><i class="fa fa-times-circle" aria-hidden="true"></i>&nbsp;Error!&nbsp;&nbsp;</strong>Row Not Deleted.</div>');
        }
        redirect('juggler/student_zone/classes');
    }

    /*=======ADD HERE FOR THE SUBJECT=======*/
    public function subject()
    {
        $PageQry = $this->Studentzonemodel->getSubject();
        $this->load->view('juggler/subject', ['PageQry' => $PageQry]);
    }

    public function add_subject()
    {
        $ClassQry = $this->Studentzonemodel->getClass();
        $this->load->view('juggler/add_subject', ['ClassQry' => $ClassQry]);
    }

    public function insert_subj()
    {

        $data = array(
            'class_id' => trim($this->input->post('class_id')),
            'subject_name' => trim($this->input->post('subject_name')),
            'subject_code' => trim($this->input->post('subject_code')),
            'status' => trim($this->input->post('status')),
            'modified' => date('d-m-Y g:i:s a')
        );

        $res = $this->db->insert('tbl_subject', $data);
        if ($res == true) {
            $this->session->set_flashdata('success', '<div class="alert alert-success fade show"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong><i class="fa fa-check-circle" aria-hidden="true"></i>&nbsp;Sucess!&nbsp;&nbsp;</strong>Row Added.</div>');
        } else {
            $this->session->set_flashdata('error', '<div class="alert alert-danger fade show"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong><i class="fa fa-times-circle" aria-hidden="true"></i>&nbsp;Error!&nbsp;&nbsp;</strong>Row Not Added.</div>');
        }
        redirect('juggler/student_zone/subject');
    }

    public function edit_subject($id)
    {
        $ClassQry = $this->Studentzonemodel->getClass();
        $PageQry = $this->Studentzonemodel->getSubjectByID($id);
        $this->load->view('juggler/edit_subject', ['ClassQry' => $ClassQry, 'PageQry' => $PageQry]);
    }

    public function update_subj()
    {
        $id = $this->input->post('id');


        $data = array(
            'class_id' => trim($this->input->post('class_id')),
            'subject_name' => trim($this->input->post('subject_name')),
            'subject_code' => trim($this->input->post('subject_code')),
            'status' => trim($this->input->post('status')),
            'modified' => date('d-m-Y g:i:s a')
        );
        $this->db->where('id', $id);
        $res = $this->db->update('tbl_subject', $data);
        if ($res == true) {
            $this->session->set_flashdata('success', '<div class="alert alert-success fade show"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong><i class="fa fa-check-circle" aria-hidden="true"></i>&nbsp;Sucess!&nbsp;&nbsp;</strong>Row Updated.</div>');
        } else {
            $this->session->set_flashdata('error', '<div class="alert alert-danger fade show"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong><i class="fa fa-times-circle" aria-hidden="true"></i>&nbsp;Error!&nbsp;&nbsp;</strong>Row Not Updated.</div>');
        }
        redirect('juggler/student_zone/subject');
    }

    public function delete_subject($id)
    {
        $res = $this->Studentzonemodel->deleteSubjectByID($id);
        if ($res == true) {
            $this->session->set_flashdata('success', '<div class="alert alert-success fade show"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong><i class="fa fa-check-circle" aria-hidden="true"></i>&nbsp;Sucess!&nbsp;&nbsp;</strong>Row Deleted.</div>');
        } else {
            $this->session->set_flashdata('error', '<div class="alert alert-danger fade show"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong><i class="fa fa-times-circle" aria-hidden="true"></i>&nbsp;Error!&nbsp;&nbsp;</strong>Row Not Deleted.</div>');
        }
        redirect('juggler/student_zone/subject');
    }

    /*====== GENERATE ENROLLMENT OF STUDENT======*/
    public function gen_enroll($id)
    {
        $ClassQry = $this->Studentzonemodel->getClass();
        $FranQry = $this->Studentzonemodel->getFranchise();
        $PageQry = $this->Studentzonemodel->getStudentByID($id);
        $CastQry = $this->Studentzonemodel->getCastCat();
        $this->load->view('juggler/gen_enrollment', ['ClassQry' => $ClassQry, 'FranQry' => $FranQry, 'PageQry' => $PageQry, 'CastQry' => $CastQry]);
    }

    public function gen_enrollment()
    {
        $student_id = $this->input->post('id');
        $stdPhoto = $this->input->post('Old_image');
        $subject = $this->input->post('subject_id');
        $franch_id = $this->input->post('franchise_id');
        $cast_id = $this->input->post('cast');
        $frData = $this->db->where('id', $franch_id)->get('tbl_franchise')->row();
        $castData = $this->db->where('id', $cast_id)->get('tbl_cast')->row();

        $class_id = $this->input->post('class_id');
        $classData = $this->db->where('id', $class_id)->get('tbl_class')->row();
        $PayData = $this->db->where('franchaise_id', $franch_id)->order_by('id', 'DESC')->get('tbl_payment')->row();

        $curntBal = 0;
        $curntBal = ($PayData->credit_amount - $classData->enrollment_amount);


        $data = array(
            'franchise_id' => trim($franch_id),
            'student_id' => trim($student_id),
            'franchise_name' => trim($frData->franchise_name),
            'student_name' => trim($this->input->post('name')),
            'date_of_birth' => trim($this->input->post('dob')),
            'mother_name' => trim($this->input->post('mother_name')),
            'father_name' => trim($this->input->post('father_name')),
            'cast' => trim($castData->cast_title),
            'session' => trim($this->input->post('session')),
            'school_name' => $frData->franchise_school,
            'center_code' => $frData->franchise_unique_id,
            'class_id' => trim($class_id),
            'subject_id' => $subject,
            'roll_no' => trim($this->input->post('roll_no')),
            'image' => $stdPhoto,
            'created_date' => date('Y-m-d H:i:s')
        );

        $res = $this->db->insert('tbl_enrollment', $data);
        if ($res == true) {
            $last_id = $this->db->insert_id();
            $AWKUniqNo = "100100" . $last_id;

            $dataUp = array(
                'enrollment_no' => $AWKUniqNo
            );
            $this->db->where('id', $last_id);
            $this->db->update('tbl_enrollment', $dataUp);

            /*==== PAYMENT ====*/
            $dataPy = array(
                'franchaise_id' => $franch_id,
                'debited_by' => $AWKUniqNo,
                'school_name' => $frData->franchise_school,
                'center_code' => $frData->franchise_unique_id,
                'credit_amount' => $curntBal,
                'debit_amount' => $classData->enrollment_amount,
                'status' => 'debited',
                'created_date' => date('Y-m-d H:i:s')
            );
            $this->db->insert('tbl_payment', $dataPy);
            /*==== END PAYMENT ====*/
            $this->session->set_tempdata('success', '<div class="alert alert-success fade show"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong><i class="fa fa-check-circle" aria-hidden="true"></i>&nbsp;Sucess!&nbsp;&nbsp;</strong>Enrollment Generated.</div>', 5);
        } else {
            $this->session->set_tempdata('error', '<div class="alert alert-danger fade show"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong><i class="fa fa-times-circle" aria-hidden="true"></i>&nbsp;Error!&nbsp;&nbsp;</strong>Row Not Added.</div>', 5);
        }
        redirect('juggler/student_zone');
    }

    /*====== GENERATE ADMIT CARD OF STUDENT======*/
    public function gen_admit($id)
    {
        $ClassQry = $this->Studentzonemodel->getClass();
        $FranQry = $this->Studentzonemodel->getFranchise();
        $PageQry = $this->Studentzonemodel->getStudentByID($id);
        $CastQry = $this->Studentzonemodel->getCastCat();
        $this->load->view('juggler/gen_admit_card', ['ClassQry' => $ClassQry, 'FranQry' => $FranQry, 'PageQry' => $PageQry, 'CastQry' => $CastQry]);
    }

    public function gen_admit_card()
    {
        $student_id = $this->input->post('id');
        $stdPhoto = $this->input->post('Old_image');
        $subject = $this->input->post('subject_id');
        $franch_id = $this->input->post('franchise_id');
        $frData = $this->db->where('id', $franch_id)->get('tbl_franchise')->row();
        $EnrollData = $this->db->where('student_id', $student_id)->get('tbl_enrollment')->row();
        $subject_date = json_encode($this->input->post('subject_date'));

        $data = array(
            'franchise_id' => trim($franch_id),
            'student_id' => trim($student_id),
            'enrollment_no' => trim($EnrollData->enrollment_no),
            'student_name' => trim($this->input->post('name')),
            'date_of_birth' => trim($this->input->post('dob')),
            'mother_name' => trim($this->input->post('mother_name')),
            'father_name' => trim($this->input->post('father_name')),
            'session' => trim($this->input->post('session')),
            'school_name' => $frData->franchise_school,
            'center_code' => $frData->franchise_unique_id,
            'class_id' => trim($this->input->post('class_id')),
            'subject_id' => $subject,
            'subject_date' => $subject_date,
            'roll_no' => trim($this->input->post('roll_no')),
            'image' => $stdPhoto,
            'created_date' => date('Y-m-d H:i:s')
        );

        $res = $this->db->insert('tbl_admit_card', $data);
        if ($res == true) {
            $this->session->set_tempdata('success', '<div class="alert alert-success fade show"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong><i class="fa fa-check-circle" aria-hidden="true"></i>&nbsp;Sucess!&nbsp;&nbsp;</strong>Admit Card Generated.</div>', 5);
        } else {
            $this->session->set_tempdata('error', '<div class="alert alert-danger fade show"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong><i class="fa fa-times-circle" aria-hidden="true"></i>&nbsp;Error!&nbsp;&nbsp;</strong>Admit Card Not Generated.</div>', 5);
        }
        redirect('juggler/student_zone');
    }

    /*======== ENROLLMENT ========*/
    public function enroll_list()
    {
        $PageQry = $this->Studentzonemodel->getEnrollmentList();
        $this->load->view('juggler/enrollment_list', ['PageQry' => $PageQry]);
    }

    public function delete_enroll($id)
    {
        $res = $this->Studentzonemodel->deleteEnrollmentByID($id);
        if ($res == true) {
            $this->session->set_tempdata('success', '<div class="alert alert-success fade show"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong><i class="fa fa-check-circle" aria-hidden="true"></i>&nbsp;Sucess!&nbsp;&nbsp;</strong>Enrollment Deleted.</div>', 5);
        } else {
            $this->session->set_tempdata('error', '<div class="alert alert-danger fade show"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong><i class="fa fa-times-circle" aria-hidden="true"></i>&nbsp;Error!&nbsp;&nbsp;</strong>Row Not Deleted.</div>', 5);
        }
        redirect('juggler/student_zone/enroll_list');
    }

    public function enroll_details($id)
    {
        $PageQry = $this->Studentzonemodel->getEnrollmentDetailsByID($id);
        $this->load->view('juggler/enrollment_details', ['PageQry' => $PageQry]);
    }

    /*======== ADMIT CARD ========*/

    public function admit_card_list()
    {
        $PageQry = $this->Studentzonemodel->getAdmitCardList();
        $this->load->view('juggler/admit_card_list', ['PageQry' => $PageQry]);
    }

    public function delete_admit_card($id)
    {
        $res = $this->Studentzonemodel->deleteAdmitCardByID($id);
        if ($res == true) {
            $this->session->set_tempdata('success', '<div class="alert alert-success fade show"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong><i class="fa fa-check-circle" aria-hidden="true"></i>&nbsp;Sucess!&nbsp;&nbsp;</strong>Enrollment Deleted.</div>', 5);
        } else {
            $this->session->set_tempdata('error', '<div class="alert alert-danger fade show"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong><i class="fa fa-times-circle" aria-hidden="true"></i>&nbsp;Error!&nbsp;&nbsp;</strong>Row Not Deleted.</div>', 5);
        }
        redirect('juggler/student_zone/admit_card_list');
    }

    public function admit_card_details($id)
    {
        $PageQry = $this->Studentzonemodel->getAdmitCardDetailsByID($id);
        $this->load->view('juggler/admit_card_details', ['PageQry' => $PageQry]);
    }

    public function upload_result()
    {
        $this->load->view('juggler/upload_result');
    }

    public function upload_results()
    {
        $config['upload_path'] = './assets/images/student/result/';
        $target_dir = $config['upload_path'];
        if (!empty($_FILES["resultExcel"])) {
            $_FILES["resultExcel"]["name"] = time() . "-" . $_FILES["resultExcel"]["name"];
            $target_file = $target_dir . basename($_FILES["resultExcel"]["name"]);
            $uploadOk = 1;
            $fileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

            $error = "";
            $success = "";
            // Check if file already exists
            if (file_exists($target_file)) {
                $error .= "Sorry, file already exists.<br>";
                $uploadOk = 0;
            }

            // Check file size
            if ($_FILES["resultExcel"]["size"] > 500000) {
                $error .= "Sorry, your file is too large.<br>";
                $uploadOk = 0;
            }

            // Allow certain file formats
            if ($fileType != "csv") {
                $error .= "Sorry, CSV files are allowed.<br>";
                $uploadOk = 0;
            }

            // Check if $uploadOk is set to 0 by an error
            if ($uploadOk == 0) {
                $error .= "Sorry, your file was not uploaded.<br>";
                // if everything is ok, try to upload file
            } else {
                if (move_uploaded_file($_FILES["resultExcel"]["tmp_name"], $target_file)) {
                    $success .= "File has been uploaded.<br>";
                } else {
                    $error .= "Sorry, there was an error uploading your file.<br>";
                }
            }
            
            
            $row = 1;
            if ($uploadOk && ($handle = fopen($target_file, "r")) !== FALSE) {
                while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
                    $num = count($data);
                    #echo "<p> $num fields in line $row: <br /></p>\n";
                    if ($row > 1) {
                        $insertData = $updateData = [];
                        for ($c = 0; $c < $num; $c++) {
                            //echo $data[$c] . "<br />\n";die;
                            $studentEnrollmentNumber = $data[0];
                            $admitCard = $this->Studentzonemodel->getAdmitCardDetailsByEnrollmentNumber($studentEnrollmentNumber);
                            $student = !empty($admitCard->roll_no) ? $this->Studentzonemodel->getStudentByEnrollmentNumber($admitCard->roll_no) : "";
                            $subject = $this->Studentzonemodel->getSubjectByCode($data[1]);
                            
                            if (!empty($admitCard) && !empty($student)) {
                                  //$this->load->model('juggler/Categoriesmodel', 'Categoriesmodel');
                                $category_name = $this->Categoriesmodel->getCategoryByID($student->admitted_course_id);
                                //$subjects = explode(',', $admitCard->subject_id);
                                $resultGroupId = md5($student->student_ack_id . $admitCard->roll_no . $student->admitted_course . $student->session);
                                $rollNumber = $admitCard->roll_no; //tbl_admit_card //roll_no
                                $courseName = $category_name->category_name.'('.$student->admitted_course.')'; //tbl_student //admitted_course
                                $examinationYear = $admitCard->session; //tbl_admit_card //session
                                $studentName = $admitCard->student_name; //tbl_admit_card //student_name
                                $fatherName = $admitCard->father_name; //tbl_admit_card //father_name
                                $centerName = $admitCard->school_name; //tbl_admit_card //school_name
                                $subjectCode = $data[1]; //tbl_admit_card //subject_id
                                $subjectName = $subject->subject_name; //tbl_subject //subject_name
                                $maxNumber = 100; //
                                $minNumber = 33; //
                                $marksObtainTheory = $data[2];
                                $marksObtainPractical = $data[3];
                                $checkResult = $this->Studentzonemodel->checkResults(
                                    [
                                        'result_group_id' => $resultGroupId,
                                        'subject_code' => $subjectCode
                                    ]
                                );
                                $insertData = [
                                    'result_group_id' => $resultGroupId,
                                    'student_enrollment_number' => $studentEnrollmentNumber,
                                    'roll_number' => $rollNumber,
                                    'course_name' => $courseName,
                                    'examination_year' => $examinationYear,
                                    'student_name' => $studentName,
                                    'father_name' => $fatherName,
                                    'center_name' => $centerName,
                                    'subject_code' => $subjectCode,
                                    'subject_name' => $subjectName,
                                    'max_number' => $maxNumber,
                                    'min_number' => $minNumber,
                                    'marks_obtain_theory' => $marksObtainTheory,
                                    'marks_obtain_practical' => $marksObtainPractical,
                                    'file' => $target_file
                                ];
                                if (!empty($checkResult)) {
                                    $insertData['id'] = $checkResult->id;
                                }
                            }
                            else
                            {
                                $uploadOk=0;
                                $error .= "Enrollment number not found, please check your CSV file and try again.<br>";
                            }
                        }
                        if (!empty($checkResult)) {
                            @unlink($checkResult->file);
                            $this->db->where('id', $insertData['id']);
                            $res = $this->db->update('tbl_results', $insertData);
                        } else {
                            if (!empty($rollNumber)) {
                                $res = $this->db->insert('tbl_results', $insertData);
                            }
                        }
                    }
                    $row++;
                }
                fclose($handle);
            }
            if ($this->input->server('REQUEST_METHOD') === 'POST') {
                if ($uploadOk) {
                    $this->session->set_tempdata('success', '<div class="alert alert-success fade show"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong><i class="fa fa-check-circle" aria-hidden="true"></i>Sucess!&nbsp;&nbsp;</strong><br>' . $success . '</div>');
                    redirect('juggler/student_zone/result');
                } else {
                     @unlink($checkResult->file);
                    $this->session->set_flashdata('error', '<div class="alert alert-danger fade show"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong><i class="fa fa-times-circle" aria-hidden="true"></i>Error!&nbsp;&nbsp;</strong><br>' . $error . '</div>');
                }
            }
        }

        $this->load->view('juggler/upload_results');
    }

    public function insert_result()
    {
        $enroll = $this->input->post('enrollment');
        $getDub = $this->db->where('enrollment_no', $enroll)->get('tbl_result')->num_rows();
        if ($getDub > 0) {
            $this->session->set_tempdata('error', '<div class="alert alert-danger fade show"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong><i class="fa fa-times-circle" aria-hidden="true"></i>&nbsp;Error!&nbsp;&nbsp;</strong>This enrollment is allready exist!.</div>', 5);
        } else {
            $config['upload_path'] = './assets/images/student/result/';
            $config['allowed_types'] = 'pdf|PDF';
            $config['max_size'] = 2048;

            $fn = $_FILES['image']['name'];
            $ext = explode(".", $fn);
            $extt = end($ext);
            $fnn = 'RT-' . $this->input->post('enrollment') . ".$extt";
            $config['file_name'] = $fnn;

            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            $this->upload->do_upload('image');
            $image = $this->upload->data();

            $data = array(
                'enrollment_no' => trim($this->input->post('enrollment')),
                'result_file' => $image['file_name'],
                'created_date' => date('Y-m-d H:i:s')
            );

            $res = $this->db->insert('tbl_result', $data);

            if ($res == true) {
                $this->session->set_tempdata('success', '<div class="alert alert-success fade show"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong><i class="fa fa-check-circle" aria-hidden="true"></i>&nbsp;Sucess!&nbsp;&nbsp;</strong>File Uploaded.</div>', 5);
            } else {
                $this->session->set_tempdata('error', '<div class="alert alert-danger fade show"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong><i class="fa fa-times-circle" aria-hidden="true"></i>&nbsp;Error!&nbsp;&nbsp;</strong>File Not Uploaded.</div>', 5);
            }
        }
        redirect('juggler/student_zone/result');
    }

    public function result()
    {
        $PageQry = $this->Studentzonemodel->getResultsList();
        $this->load->view('juggler/manage_result', ['PageQry' => $PageQry]);
    }

    public function edit_result($id)
    {
        $PageQry = $this->Studentzonemodel->getResultByID($id);
        $this->load->view('juggler/edit_upload_result', ['PageQry' => $PageQry]);
    }

    public function update_result()
    {
        $id = $this->input->post('id');

        $config['upload_path'] = './assets/images/student/result/';
        $config['allowed_types'] = 'pdf|PDF';
        $config['max_size'] = 2048;

        $fn = $_FILES['image']['name'];
        $ext = explode(".", $fn);
        $extt = end($ext);
        $fnn = 'RT-' . $this->input->post('enrollment') . ".$extt";
        $config['file_name'] = $fnn;

        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        $this->upload->do_upload('image');
        $image = $this->upload->data();
        if (!empty($image['file_name'])) {
            $pdfFile = $image['file_name'];
        } else {
            $pdfFile = $this->input->post('Old_image');
        }

        $data = array(
            'enrollment_no' => trim($this->input->post('enrollment')),
            'result_file' => $pdfFile,
            'created_date' => date('Y-m-d H:i:s')
        );
        $this->db->where('id', $id);
        $res = $this->db->update('tbl_result', $data);
        if ($res == true) {
            $this->session->set_tempdata('success', '<div class="alert alert-success fade show"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong><i class="fa fa-check-circle" aria-hidden="true"></i>&nbsp;Sucess!&nbsp;&nbsp;</strong>Result Updated.</div>', 5);
        } else {
            $this->session->set_tempdata('error', '<div class="alert alert-danger fade show"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong><i class="fa fa-times-circle" aria-hidden="true"></i>&nbsp;Error!&nbsp;&nbsp;</strong> Not Updated.</div>', 5);
        }
        redirect('juggler/student_zone/result');
    }

    public function delete_result($id)
    {
        $files = $this->Studentzonemodel->getResultsByID($id);
        if (!empty($files->file)) {
            $file = $files->file;
            //$unlinkURl = base_url($file);
            //die($unlinkURl);
            @unlink($file);
            $res = $this->Studentzonemodel->deleteResultFile($file);
            if ($res == true) {

                $this->session->set_tempdata('success', '<div class="alert alert-success fade show"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong><i class="fa fa-check-circle" aria-hidden="true"></i>&nbsp;Sucess!&nbsp;&nbsp;</strong>Row Deleted.</div>', 5);
            } else {
                $this->session->set_tempdata('error', '<div class="alert alert-danger fade show"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong><i class="fa fa-times-circle" aria-hidden="true"></i>&nbsp;Error!&nbsp;&nbsp;</strong>Row Not Deleted.</div>', 5);
            }
        }
        redirect('juggler/student_zone/result');
    }


}
