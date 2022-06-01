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
  <meta name="description" content="New Admission">
  <meta name="keywords" content="New Admission">
  <meta name="author" content="">
  <title>New Admission</title>
<?php include('headerstylelinks.php'); ?>
<style>

 .btn {
			display:inline-block;
			padding:10px;
			background: #17a2b8;
			font-family: 'texgyreadventorbold';
			font-size: 15px;
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
				<h2 class="text-uppercase">Student New Admission</h2>
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
               <a href="<?=base_url('franchise-center/student-list');?>">Student List</a> 
               <a class="active" href="<?=base_url('franchise-center/new-admission');?>">Add New Admission</a> 
            </div>
		<div class="container mt-3">
		<div class="main-body">
          <div class="row gutters-sm">
			<div class="col-md-12">
					<form method="post" action="<?=base_url('franchise_center/insert');?>" autocomplete="off" enctype="multipart/form-data">
                  <input type="hidden" name="franchise_id" value="<?=$this->session->userdata('session_id');?>"/>
                  <!--<input type="hidden" name="school_name" value="<?=$this->session->userdata('first_name');?>"/>
                  <input type="hidden" name="center_code" value="<?=$this->session->userdata('center_code');?>"/>-->
				  <div class="row" style="margin-top:25px;">
					 <div class="col-md-3">
						<div class="form-group">
						<label>Admitted Course Name :-</label>
						<input type="text" required class="form-control" name="course" placeholder="Enter Your Course Name!">
						</div>
					 </div>
					 <div class="col-md-3">
						<div class="form-group">
						<label>Name :-</label>
							<input type="text" required class="form-control" placeholder="Enter Your Name!" name="name">
						</div>
					 </div>
					 <div class="col-md-3">
						<div class="form-group">
						<label>Date of Birth :-</label>
							<input type="date" required class="form-control" name="dob">
						</div>
					 </div>
					 <div class="col-md-3">
						<div class="form-group">
						<label>Father's Name :-</label>
						<input type="text" required class="form-control" name="father_name" placeholder="Enter Your Father's Name!">
						</div>
					 </div>
			   </div>
				<div class="row">
					 <div class="col-md-3">
						<div class="form-group">
						<label>Mother's Name :-</label>
						<input type="text" required class="form-control" name="mother_name" placeholder="Enter Your Mother's Name!">
						</div>
					 </div>
					 <div class="col-md-3">
						<div class="form-group">
						<label>Cast :-</label>
							<select required class="form-control" name="cast">
							<option value="">SELECT CAST</option>
							<?php foreach($CastQry as $cstRows){?>
								<option value="<?=$cstRows->id;?>"><?=$cstRows->cast_title;?></option>
							<?php }?>
						</select>
						</div>
					 </div>
					 <div class="col-md-3">
						<div class="form-group">
						<label>Mobile No :-</label>
							<input type="text" required class="form-control" placeholder="Enter Your Mobile No.!" maxlength="10" name="phone">
						</div>
					 </div>
					 <div class="col-md-3">
						<div class="form-group">
						<label>Email :-</label>
						<input type="email" required class="form-control" autocomplete="off" placeholder="Enter Your Email!" name="email">
						</div>
					 </div>
			   </div>
			   <div class="row">
					 <div class="col-md-3">
						<div class="form-group">
						<label>Choose Class :-</label>
						<select required class="form-control" id="class_id" name="class_id">
							<option value="">--SELECT--</option>
							<?php foreach($ClassQry as $clsRow){?>
								<option value="<?=$clsRow->id;?>"><?=$clsRow->class_name;?></option>
							<?php }?>
						</select>
						</div>
					 </div>
					 
					 <div class="col-md-3">
						<div class="form-group">
						<label>Select Subject :-</label>
						<select class="form-control select2" id="subj_id" multiple name="subject_id[]">
							<option value="">--SELECT--</option>
						</select>
						</div>
					 </div>
					 
					 <div class="col-md-3">
						<div class="form-group">
						<label>Local Address :-</label>
							<textarea class="form-control" required rows="1" placeholder="Enter Local Address!" name="address"></textarea>
						</div>
					 </div>
					 <div class="col-md-3">
						<div class="form-group">
						<label>Permanant Address :-</label>
						<textarea class="form-control" required rows="1" placeholder="Enter Permanant Address!" name="address2"></textarea>
						</div>
					 </div>
			   </div>
			   
			   <div class="row">
					<div class="col-md-3">
						<div class="form-group">
						<label>Session :-</label>
							<input type="text" required class="form-control" placeholder="Enter Your Session!" name="session">
						</div>
					 </div>
					 <div class="col-md-3">
						<div class="form-group">
						<label>Photo :-</label>
						<input type="file" class="form-control" name="image">
						<small class="form-text text-danger">*Please Upload Passport Size Image.</small>
						</div>
					 </div>
					 <div class="col-md-3">
						<div class="form-group">
						<label>Signature :-</label>
							<input type="file" class="form-control" name="sign">
							<small class="form-text text-danger">*Please Upload Student Signature.</small>
						</div>
					 </div>
					 <div class="col-md-3">
						<div class="form-group">
						<label>Document 1 :-</label>
							<input type="file" class="form-control" required name="doc1">
							<small class="form-text text-danger">*Please Upload 10th Document(pdf).</small>
						</div>
					 </div>
					 
			   </div>
			   <div class="row" id="row_dim" style="display:none;">
					<div class="col-md-3">
						<div class="form-group">
						<label>Document 2 :-</label>
						<input type="file" class="form-control dc" name="doc2">
							<small class="form-text text-danger">*Please Upload Adhar Cart.</small>
						</div>
					 </div>
					<div class="col-md-3">
						<div class="form-group">
						<label>Document 3 :-</label>
						<input type="file" class="form-control dc" name="doc3">
							<small class="form-text text-danger">*Please Upload Other Documents.</small>
						</div>
					 </div>
				</div>
				<div class="row1">
					  <button type="submit" class="btn btn-primary">Save</button> &nbsp; &nbsp;
					  <a href="<?=base_url('franchise-center/student-list');?>" class="btn btn-primary">Cancel</a>
                </div>
				<div style="margin-top:20px;"></div>
			</form>	
			
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