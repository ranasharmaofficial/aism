<?php
   if(!$this->session->userdata('logged_in')==TRUE){
   	redirect('login');
   }
   ?>
    

<!DOCTYPE html>

<html lang="en">

<head>

<meta charset="utf-8">

<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0; maximum-scale=1">
  <meta name="description" content="Franchise Student List">
  <meta name="keywords" content="Franchise Student List">
  <meta name="author" content="">
  <title>Franchise Student List</title>
<?php include('headerstylelinks.php'); ?>
<style>
 .btn {
			display:inline-block;
			padding:5px;
			background: #17a2b8;
			font-family: 'texgyreadventorbold';
			font-size: 11px;
			color: #fff;
			-moz-transition: all 0.3s ease 0s;
			-o-transition: all 0.3s ease 0s;
			-webkit-transition: all 0.3s ease 0s;
			-ms-transition: all 0.3s ease 0s;
			transition: all 0.3s ease 0s;
		}
         .dataTables_filter {
			 width: 100%;
			 float: right;
			 text-align: right;
         }
         .card-body {
			 -webkit-box-flex: 1;
			 -ms-flex: 1 1 auto;
			 flex: 1 1 auto;
			 padding:5px 5px !important;
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
		 td a i{
			 color:#17a2b8;
		 }
		 td a i:hover{
			 color:blue;
		 }
  </style>
</head>

<body>

<div class="wrapper">

   <?php include_once('header.php'); ?>

  

  <section class="padding-btop50">

    <div class="container">

      <div class="row clearfix">

        <div class="col-md-12"> </div>

        <div class="col-md-12 col-sm-12">
			<div class="tittle_left">
				<h2 class="text-uppercase">Student Details</h2>
			</div>
			<div class="container">
    <div class="content">
			<?php 
				echo $this->session->tempdata('success');
				echo $this->session->tempdata('error');
			?>
			<h2 class="text-center text-success">Hi, Mr. <?=$PageQry->name;?></h2>
			<span style="font-size:15px;color:red;float:right;">Your Balance is : <?=$BalQry->credit_amount;?></span>
    </div>
	<?php 
	$fra_session = $this->session->userdata('session_id');
	$franQry = $this->db->where('id',$fra_session)->get('tbl_franchise')->row();?>	
		<div class="navbar1">
			<a href="<?=base_url('franchise-center');?>">Profile</a> 
			<a class="active" href="<?=base_url('franchise-center/student-list');?>">Student List</a> 
			<a href="<?=base_url('franchise-center/new-admission');?>">Add New Admission</a> 
		</div>
		<div class="container mt-3">
		<div class="main-body">
          <div class="row gutters-sm">
			<div class="col-md-12">
			   <div class="row" style="margin-top:25px;">
					 <table class="table table-striped">
				  <tbody>
						<tr>
						  <th>Acknowledgement :- </th>
						  <td><?=$PageQry->student_ack_id;?></td>
						  <th>Admitted Course :- </th>
						  <td><?=$PageQry->admitted_course;?></td>
						</tr>
						<tr>
						  <th>Name :- </th>
						  <td><?=$PageQry->name;?></td>
						  <th>Email :- </th>
						  <td><?=$PageQry->name;?></td>
						</tr>
						<tr>
						  <th>Date of Birth :- </th>
						  <td><?=$PageQry->dob;?></td>
						  <th>Father's Name :- </th>
						  <td><?=$PageQry->fathers_name;?></td>
						</tr>
						<tr>
						  <th>Mother's Name :- </th>
						  <td><?=$PageQry->mothers_name;?></td>
						  <th>Cast :- </th>
						  <td>
						  <?php $castDataQry = $this->db->where('id', $PageQry->cast)->get('tbl_cast')->row();?>
						  <?=$castDataQry->cast_title;?></td>
						</tr>
						<tr>
						  <th>Mobile No. :- </th>
						  <td><?=$PageQry->phone;?></td>
						  <th>Local Address :- </th>
						  <td><?=$PageQry->address;?></td>
						</tr>
						<tr>
						  <th>Permnent Address :- </th>
						  <td><?=$PageQry->address2;?></td>
						  <th>Session :- </th>
						  <td><?=$PageQry->session;?></td>
						</tr>
						
						<tr>
						  <th>Class :- </th>
						  <td>
						  <?php $clsDataQry = $this->db->where('id', $PageQry->class_id)->get('tbl_class')->row();?>
						   <?=$clsDataQry->class_name;?></td>
						  <th>Student Photo :- </th>
						  <td>
							 <?php if(!empty($PageQry->image)){?>
							 <img style="height:80px;width:auto;" src="<?=base_url('assets/images/student');?>/<?=$PageQry->image;?>" height="50" width="50">
							<a href="<?=base_url('assets/images/student');?>/<?=$PageQry->image;?>" download><i class="fa fa-download" aria-hidden="true"></i></a>
							<?php }else{echo "NA";}?>
						  </td>
						</tr>
						<tr>
						  <th>Student Signature :- </th>
						  <td>
							 <?php if(!empty($PageQry->sign)){?>
							 <img style="height:80px;width:auto;" src="<?=base_url('assets/images/student');?>/<?=$PageQry->sign;?>" height="50" width="50">
							<a href="<?=base_url('assets/images/student');?>/<?=$PageQry->sign;?>" download><i class="fa fa-download" aria-hidden="true"></i></a>
							<?php }else{echo "NA";}?>
						  </td>
						  <th>Document 1 :- </th>
						  <td>
						   <?php if(!empty($PageQry->doc1)){?>
							<a href="<?=base_url('assets/images/student/doc');?>/<?=$PageQry->doc1;?>" download><i class="fa fa-download" aria-hidden="true"></i> <?=$PageQry->doc1;?></a>
							<?php }else{echo "NA";}?>
						  </td>
						</tr>
						<?php if(!empty($PageQry->doc2)||!empty($PageQry->doc3)){?>
						<tr>
						  <th>Document 2 :- </th>
						  <td><?php if(!empty($PageQry->doc2)){?>
							<a href="<?=base_url('assets/images/student/doc');?>/<?=$PageQry->doc2;?>" download><i class="fa fa-download" aria-hidden="true"></i> <?=$PageQry->doc2;?></a>
							<?php }else{echo "NA";}?>
						  </td>
						  <th>Document 3 :- </th>
						  <td>
						  <?php if(!empty($PageQry->doc2)){?>
							<a href="<?=base_url('assets/images/student/doc');?>/<?=$PageQry->doc3;?>" download><i class="fa fa-download" aria-hidden="true"></i> <?=$PageQry->doc3;?></a>
						 <?php }else{echo "NA";}?>
						 </td>
						  
						</tr>
						<?php }?>
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
    
  </div>
          

        </div>
      </div>

    </div>

  </section>

  <!--=====footer start=========-->

  <?php include_once('footer.php'); ?>
<script src="<?=base_url('assets/cork/js/jquery.min.js')?>"></script> 
      <script src="<?=base_url('assets/cork/js/bootstrap.min.js')?>"></script> 
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
</div>

</body>

</html>
