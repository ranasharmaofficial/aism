<?php
   if(!$this->session->userdata('logged_in')==TRUE){
   	redirect('login');
   }
   ?>
<!DOCTYPE html>
<html lang="en">
   <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0; maximum-scale=1">
      <meta name="description" content="Student Details">
      <meta name="keywords" content="Student Details">
      <meta name="author" content="">
      <title>Student Admit Card Details</title>
       <link rel="stylesheet" href="<?=base_url('assets/cork/css/owl.carousel.css')?>">
       <link rel="stylesheet" href="<?=base_url('assets/cork/css/fontawesome-all.css')?>">
       <link href="<?=base_url('assets/cork/font-awesome/css/font-awesome.min.html')?>" rel="stylesheet">
       <link rel="stylesheet" href="<?=base_url('assets/cork/css/flaticon.css')?>">
       <link rel="stylesheet" type="text/css" href="<?=base_url('assets/cork/css/meanmenu.css')?>">
       <link rel="stylesheet" href="<?=base_url('assets/cork/css/bootstrap.min.css')?>">
       <link rel="stylesheet" href="<?=base_url('assets/cork/css/video.min.css')?>">
       <link rel="stylesheet" href="<?=base_url('assets/cork/css/lightbox.css')?>">
       <link rel="stylesheet" href="<?=base_url('assets/cork/css/progess.css')?>">
       <link rel="stylesheet" href="<?=base_url('assets/cork/css/animate.min.css')?>">
       <link rel="stylesheet" href="<?=base_url('assets/cork/css/style.css')?>">
       <link rel="stylesheet" href="<?=base_url('assets/cork/css/responsive.css')?>">
      <style>
		th {
		text-align: left!important;
		font-size: 15px!important;
		font-weight: 600!important;
		}
         
         .container-fluid {
         padding-right:0px!important;
         padding-left: 0px!important;
         margin-right: auto!important;
         margin-left: auto!important;
         }
         .navbar1 {
         width: 100%;
         background-color:#2c97e9;
         overflow: auto;
         }
         .navbar1 a {
         float: left;
         padding: 12px;
         color: white;
         text-decoration: none;
         font-size: 17px;
         width: 33.33%; /* Four links of equal widths */
         text-align: center;
         }
         .navbar1 a:hover {
         background-color: #000;
         }
         .navbar1 a.active {
         background-color: #000;
         }
         @media screen and (max-width: 500px) {
         .navbar1 a {
         float: none;
         display: block;
         width: 100%;
         text-align: left;
         }
         }
      </style>
   </head>
   <body>
      <!-- Start Preloader -->
      <div id="loading">
         <div class="element">
            <div class="sk-folding-cube">
               <div class="sk-cube1 sk-cube">
               </div>
               <div class="sk-cube2 sk-cube">
               </div>
               <div class="sk-cube4 sk-cube">
               </div>
               <div class="sk-cube3 sk-cube">
               </div>
            </div>
         </div>
      </div>
      <!-- End Preloader -->
      <!-- Start Header -->
      <?php include('header.php');?>
      <!-- End Header -->
      <!-- -------------------------------All-Pop------------------------------------------- -->
      <?php include('all_popup.php');?>
      <div class="clearfix"></div>
      <div class="e-certifiacte">
         <div class="container">
            <div class="content">
               <h2>Admit Card Details (Hi, Mr. <?=$PageQry->student_name;?>)</h2>
			   <span style="font-size:15px;color:red;float:right;">Your Balance is : <?=$BalQry->credit_amount;?></span>
            </div>
            <div class="navbar1">
               <a href="<?=base_url('franchise-center');?>">Profile</a> 
               <a class="active" href="<?=base_url('franchise-center/student-list');?>">Student List</a> 
               <a href="<?=base_url('franchise-center/new-admission');?>">Add New Admission</a>  
            </div>
            <div class="container-fluid">
               <div class="col-md-12">
			   <div class="row" style="margin-top:25px;">
					 <table class="table table-striped">
				  <tbody>
						<tr>
						  <th>Roll No. :- </th>
						  <td><?=$PageQry->roll_no;?></td>
						  <th>Enrollment No.:- </th>
						  <td><?=$PageQry->enrollment_no;?></td>
						</tr>
						<tr>
						  <th>Name :- </th>
						  <td><?=$PageQry->student_name;?></td>
						  <th>Date of Birth :- </th>
						  <td><?=$PageQry->date_of_birth;?></td>
						</tr>
						<tr>
						  <th>Father's Name :- </th>
						  <td><?=$PageQry->father_name;?></td>
						  <th>Mother's Name :- </th>
						  <td><?=$PageQry->mother_name;?></td>
						</tr>
						
						<tr>
						  <th>School Name :- </th>
						  <td><?=$PageQry->school_name;?></td>
						  <th>Center Code :- </th>
						  <td><?=$PageQry->center_code;?></td>
						</tr>
						<tr>
						  <th>Session :- </th>
						  <td><?=$PageQry->session;?></td>
						   <th>Class :- </th>
						  <td>
						  <?php $clsDataQry = $this->db->where('id', $PageQry->class_id)->get('tbl_class')->row();?>
						   <?=$clsDataQry->class_name;?></td>
						</tr>
						
						<tr>
						  <th>Student Photo :- </th>
						  <td>
							 <?php if(!empty($PageQry->image)){?>
							 <img src="<?=base_url('assets/images/student');?>/<?=$PageQry->image;?>" height="50" width="50">
							<a href="<?=base_url('assets/images/student');?>/<?=$PageQry->image;?>" download><i class="fa fa-download" aria-hidden="true"></i></a>
							<?php }else{echo "NA";}?>
						  </td>
						   <th>Created Date :- </th>			 
							<td><?=date('d M, Y h:i:s a', strtotime($PageQry->created_date));?></td>
						</tr>
						<tr>
						<th>Subject :- </th>
						  <?php 
						  $where_in = explode(',',$PageQry->subject_id);
						  $sbjDataQry = $this->db->where_in('id', $where_in)->get('tbl_subject')->result();?>
						  <td colspan="3">
						  <?php 
						  //print_r($sbjDataQry);
						  foreach($sbjDataQry as $sbjQry){?>
							  <span> <?=$sbjQry->subject_name;?> (<?=$sbjQry->subject_code;?>), <span>
							<?php }?>
						   </td>
						
						</tr>
				  </tbody>
			</table>
			 <a href="<?=base_url('franchise-center/student-list');?>" class="btn btn-info btn-sx">Back</a>
			 </div>
               </div>
            </div>
         </div>
      </div>
      <?php include("footer.php");?>
      <a href="#" class="scroll-top">
      <i class="fa fa-chevron-up" aria-hidden="true">
      </i>
      </a> 
      <script src="<?=base_url('assets/cork/js/jquery.min.js')?>"></script> 
      <script src="<?=base_url('assets/cork/assets/bootstrap/js/bootstrap.min.js')?>"></script> 
      <script src="<?=base_url('assets/cork/js/modernizr.custom.js')?>"></script>
      <script src="<?=base_url('assets/juggler/plugins/table/datatable/datatables.js')?>"></script>
      <script>
         $(function () {
           $("#example1").DataTable({
             "responsive": true,
             "autoWidth": true,
          "searching": true,
          "ordering": true,
          "paging": true,
           });
         });
      </script>
   </body>
</html>