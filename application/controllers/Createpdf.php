<?php

defined('BASEPATH') or exit('No direct script access allowed');


class Createpdf extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->database();
        $this->load->model('cork/Resultsmodel');
        date_default_timezone_set('Asia/Kolkata');
    }

    public function index()
    {
        $captchaResult = $this->input->post('captchaResult');
        $firstNumber = $this->input->post('firstNumber');
        $secondNumber = $this->input->post('secondNumber');
        $checkTotal = $firstNumber + $secondNumber;
        $this->load->helper('pdf_helper');
        $this->load->helper('download');
        $enroll = $this->input->post('enroll');
        $emptyData = $this->db->where('student_enrollment_number',$enroll)->get('tbl_results')->num_rows();
        if ($captchaResult == $checkTotal) {
            if($emptyData > 0){
                $getResult = $this->db->where('student_enrollment_number',$enroll)->get('tbl_results')->result();
                $getStudent = $this->db->where('student_ack_id',$getResult[0]->roll_number)->get('tbl_student')->row();
                
                $data = [];
                $data['studentPhoto'] = $getStudent->image;
                foreach ($getResult as $val) {
                    // print_r($val);
                    // die();
                    $data['course_name'] = $val->course_name;
                    $data['examination_year'] = $val->examination_year;
                    $data['roll_number'] = $val->roll_number;
                    $data['student_name'] = $val->student_name;
                    $data['father_name'] = $val->father_name;
                    $data['mother_name'] = $getStudent->mothers_name;
                    $data['center_name'] = $val->center_name;
                    $data['subject_code'][] = $val->subject_code;
                    $data['subject_name'][] = $val->subject_name;
                    $data['max_number'][] = $val->max_number;
                    $data['min_number'][] = $val->min_number;
                    $theory = $val->marks_obtain_theory;
                    $data['marks_obtain_theory'][] = $theory;
                    $practical = $val->marks_obtain_practical;
                    $data['marks_obtain_practical'][] = $practical;
                    $data['marks_obtain_total'][] = $theory + (empty($practical) ? 0 : $practical);
                    $data['date'] = date("d-m-Y", time());
                }
                $data['controller'] = $this;
                $data = ['data' => $data];
                $this->load->view('cork/pdfreport', $data);
            }else{
                $this->session->set_tempdata('exit','<div class="alert alert-danger alert-dismissible show"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong><i class="fa fa-times-circle" aria-hidden="true"></i>&nbsp;Error!&nbsp;&nbsp;</strong>Enrollment not Generated!.</div>',5);
                redirect('results');
            }
        } else {
            $this->session->set_tempdata('error', '<div class="alert alert-danger alert-dismissible show"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong><i class="fa fa-times-circle" aria-hidden="true"></i>&nbsp;Error!&nbsp;&nbsp;</strong>Captcha not valid!.</div>',5);
            redirect('results');
        }
    }

    public function admit_card()
    {
        $captchaResult = $this->input->post('captchaResult');
        $firstNumber = $this->input->post('firstNumber');
        $secondNumber = $this->input->post('secondNumber');
        $checkTotal = $firstNumber + $secondNumber;

        $this->load->helper('pdf_helper');
        $this->load->helper('download');
        $enroll = $this->input->post('enroll');
        $getStudent = $this->db->where('student_ack_id',$enroll)->get('tbl_student')->row();
        $studentId = $getStudent->id;
        $emptyData = $this->db->where('student_id',$studentId)->get('tbl_admit_card')->num_rows();
        if ($captchaResult == $checkTotal) {
            if($emptyData > 0) {
                $getAdmitCard = $this->db->where('student_id',$studentId)->get('tbl_admit_card')->row();
                $data = [];
                $data['studentPhoto'] = $getStudent->image;
                $data['course_name'] = $getStudent->admitted_course;
                $data['examination_year'] = $getStudent->session;
                $data['roll_number'] = $getAdmitCard->roll_no;
                $data['student_name'] = $getAdmitCard->student_name;
                $data['father_name'] = $getAdmitCard->father_name;
                $data['center_name'] = $getAdmitCard->school_name;
                $data['subject_date'] = json_decode($getAdmitCard->subject_date, true);
                $subjects = explode(",", $getAdmitCard->subject_id);
                $getAdmitCard = $this->db->where_in('id',$subjects)->get('tbl_subject')->result();

                $s=0;
                foreach ($getAdmitCard as $val) {
                    $data['subject_code'][] = $val->subject_code;
                    $data['subject_name'][] = $val->subject_name;
                    $data['date'][] = date("d-m-Y", strtotime($data['subject_date'][$s]));
                    $data['time'][] = date("h:i:s a", strtotime($data['subject_date'][$s]));
                    $s++;
                }
                $data['controller'] = $this;
                $data = ['data' => $data];
                $this->load->view('cork/pdf_admit_card_report', $data);
            } else{
                $this->session->set_tempdata('exit','<div class="alert alert-danger alert-dismissible show"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong><i class="fa fa-times-circle" aria-hidden="true"></i>&nbsp;Error!&nbsp;&nbsp;</strong>Admit Card not Generated!.</div>',5);
                redirect('admit-card');
            }
        } else {
            $this->session->set_tempdata('error', '<div class="alert alert-danger alert-dismissible show"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong><i class="fa fa-times-circle" aria-hidden="true"></i>&nbsp;Error!&nbsp;&nbsp;</strong>Captcha not valid!.</div>',5);
            redirect('admit-card');
        }
    }

    function getPercentInWord($number)
    {
        $decimal = round($number - ($no = floor($number)), 2) * 100;
        $hundred = null;
        $digits_length = strlen($no);
        $i = 0;
        $str = array();
        $words = array(0 => '', 1 => 'one', 2 => 'two',
            3 => 'three', 4 => 'four', 5 => 'five', 6 => 'six',
            7 => 'seven', 8 => 'eight', 9 => 'nine',
            10 => 'ten', 11 => 'eleven', 12 => 'twelve',
            13 => 'thirteen', 14 => 'fourteen', 15 => 'fifteen',
            16 => 'sixteen', 17 => 'seventeen', 18 => 'eighteen',
            19 => 'nineteen', 20 => 'twenty', 30 => 'thirty',
            40 => 'forty', 50 => 'fifty', 60 => 'sixty',
            70 => 'seventy', 80 => 'eighty', 90 => 'ninety');
        $digits = array('', 'hundred','thousand','lakh', 'crore');
        while( $i < $digits_length ) {
            $divider = ($i == 2) ? 10 : 100;
            $number = floor($no % $divider);
            $no = floor($no / $divider);
            $i += $divider == 10 ? 1 : 2;
            if ($number) {
                $plural = (($counter = count($str)) && $number > 9) ? 's' : null;
                $hundred = ($counter == 1 && $str[0]) ? ' and ' : null;
                $str [] = ($number < 21) ? $words[$number].' '. $digits[$counter]. $plural.' '.$hundred:$words[floor($number / 10) * 10].' '.$words[$number % 10]. ' '.$digits[$counter].$plural.' '.$hundred;
            } else $str[] = null;
        }
        $Rupees = implode('', array_reverse($str));
        $paise = ($decimal > 0) ? " point(.) " . ($words[$decimal / 10] . " " . $words[$decimal % 10]) . '' : '';
        return ($Rupees ? $Rupees . '' : '') . $paise;
    }
}