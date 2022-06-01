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
				<h2 class="text-uppercase">Franchise Student List</h2>
			</div>
			<div class="container">
    <div class="content">
			<?php 
				echo $this->session->tempdata('success');
				echo $this->session->tempdata('error');
			?>
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
                <div class="table-responsive">  
					<table id="example1" class="table table-bordered table-striped">
                     <thead>
                        <tr>
                           <th>S.N</th>
                           <th>Admitted Course</th>
                           <th>AWK No.</th>
                           <th>Name</th>
                           <th>DOB</th>
                           <th>Session</th>
                           <th>class</th>
                           <th>AWK/Admit</th>
                           <th>Status</th>
                           <th>Action</th>
                        </tr>
                     </thead>
                     <tbody>
					 <?php $sn =1;
						foreach($PageQry as $PageData){
							$stGenEnr =$this->db->where('student_id',$PageData->id)->get('tbl_enrollment')->num_rows();
							$stGenAd =$this->db->where('student_id',$PageData->id)->get('tbl_admit_card')->num_rows();
							?>
                        <tr>
                           <td><?=$sn;?></td>
                           <td><?=$PageData->admitted_course;?></td>
                           <td><?=$PageData->student_ack_id;?></td>
                           <td><?=$PageData->name;?></td>
                           <td><?=$PageData->dob;?></td>
                           <td><?=$PageData->session;?></td>
                           <td><?=$PageData->class_name;?></td>
						   <td>
						   <?php if(!empty($stGenEnr)){?>
							<a href="<?=base_url('franchise-center/student-enroll-detail');?>/<?=$PageData->id;?>" class="btn btn-info btn-sm" title="View Enrollment"><i class="fa fa-user-plus" aria-hidden="true"></i></a>
						   <?php }
							if(!empty($stGenAd)){ ?>
								<a href="<?=base_url('franchise-center/admit-card-detail');?>/<?=$PageData->id;?>" class="btn btn-info btn-sm" title="View Admit Card"><i class="fa fa-id-card" aria-hidden="true"></i></a> 
							<?php }?>
						   </td>
						    <td>
							<span class="btn btn-info btn-sm"><?php if($PageData->status=='1'){echo "Active";}else{echo "In-Active";}?></span>
							</td>
                           <td>
							<a href="<?=base_url('franchise-center/student_detail');?>/<?=$PageData->id;?>" title="View Details"><i class="fa fa-eye fa-lg" aria-hidden="true"></i> </a> &nbsp;
							<!---<a href="base_url('franchise-center/edit_admission');?>/=$PageData->id;?>" title="Edit Admission"> <i class="fa fa-pencil fa-lg" aria-hidden="true"></i> </a>--->
                           </td>
                        </tr>
						<?php $sn++;}?>	
                     </tbody>
                  </table>
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
