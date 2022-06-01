<?php
if (! $this->session->userdata('logged_in')==TRUE)
{
redirect('juggler/login');
}

$frBalQry = $this->db->where('franchaise_id', $PageQry->franchise_id)->order_by('id','DESC')->get('tbl_payment')->row();
$ClsEnroQry = $this->db->where('id', $PageQry->class_id)->get('tbl_class')->row();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
<title>Generate Enrollment</title>
<link rel="icon" type="image/x-icon" href="assets/img/favicon.ico"/>
<link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
<link href="<?=base_url('assets/juggler/bootstrap/css/bootstrap.min.css')?>" rel="stylesheet" type="text/css" />
<link href="<?=base_url('assets/juggler/assets/css/plugins.css')?>" rel="stylesheet" type="text/css" />
<link href="<?=base_url('assets/juggler/assets/css/scrollspyNav.css')?>" rel="stylesheet" type="text/css" />
</head>
<body class="sidebar-noneoverflow" data-spy="scroll" data-target="#navSection" data-offset="100">
<div class="header-container fixed-top">
  <?php include('header.php');?>
</div>
<div class="main-container" id="container">
  <div class="overlay"></div>
  <div class="cs-overlay"></div>
  <div class="search-overlay"></div>
  <?php include('left_nav.php');?>
  <div id="content" class="main-content">
    <div class="container">
      <div class="container">
        <div class="row">
          <div id="flHorizontalForm" class="col-lg-12 layout-spacing layout-top-spacing">
            <div class="statbox widget box box-shadow">
              <div class="widget-header">
                <div class="row">
                  <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                    <h4>Generate Enrollment <span style="float:right;color:red;">Franchise Account Balance is : <?=$frBalQry->credit_amount;?></span></h4>
					
                  </div>
                </div>
              </div>
              <div class="widget-content widget-content-area">
                <form method="post" action="<?=base_url('juggler/student_zone/gen_enrollment')?>" name="form" onsubmit="return confirm('Are you sure you want to generate Enrollment?')">
				  <input type="hidden" name="id" value="<?=$PageQry->id;?>">
				  <input type="hidden" name="roll_no" value="<?=$PageQry->student_ack_id;?>">
				  <!--<div class="form-group row">
                    <label for="hEmail" class="col-xl-3 col-sm-3 col-sm-2 col-form-label">Course for which admitted</label>
                    <div class="col-xl-9 col-lg-9 col-sm-10">
                      <input type="text" class="form-control" readonly value="<?=$PageQry->admitted_course;?>" name="course">
                    </div>
                  </div>-->
				  <div class="form-group row">
                    <label for="hEmail" class="col-xl-3 col-sm-3 col-sm-2 col-form-label">Name</label>
                    <div class="col-xl-9 col-lg-9 col-sm-10">
                      <input type="text" class="form-control" readonly value="<?=$PageQry->name;?>" name="name">
                    </div>
                  </div>
				    <div class="form-group row">
                    <label for="hEmail" class="col-xl-3 col-sm-3 col-sm-2 col-form-label">DOB</label>
                    <div class="col-xl-9 col-lg-9 col-sm-10">
                      <input type="date" class="form-control" readonly value="<?=$PageQry->dob;?>" name="dob">
                    </div>
                  </div>
				  <div class="form-group row">
                    <label for="hEmail" class="col-xl-3 col-sm-3 col-sm-2 col-form-label">Father's Name</label>
                    <div class="col-xl-9 col-lg-9 col-sm-10">
                      <input type="text" class="form-control" readonly value="<?=$PageQry->fathers_name;?>" name="father_name">
                    </div>
                  </div>
				   <div class="form-group row">
                    <label for="hEmail" class="col-xl-3 col-sm-3 col-sm-2 col-form-label">Mother's Name</label>
                    <div class="col-xl-9 col-lg-9 col-sm-10">
                      <input type="text" class="form-control" readonly value="<?=$PageQry->mothers_name;?>" name="mother_name">
                    </div>
                  </div>
				  <div class="form-group row">
                    <label for="hEmail" class="col-xl-3 col-sm-3 col-sm-2 col-form-label">Cast</label>
                    <div class="col-xl-9 col-lg-9 col-sm-10">
					<input type="hidden" name="cast" value="<?=$PageQry->cast;?>"/>
						<select class="form-control" disabled>
							<option value="">--SELECT CAST--</option>
							<?php foreach($CastQry as $cstRows){?>
								<option value="<?=$cstRows->id;?>"<?php if($PageQry->cast==$cstRows->id){echo "selected";}?>><?=$cstRows->cast_title;?></option>
							<?php }?>
						</select>
                    </div>
                  </div>
				  <!--<div class="form-group row">
                    <label for="hEmail" class="col-xl-3 col-sm-3 col-sm-2 col-form-label">Mobile No</label>
                    <div class="col-xl-9 col-lg-9 col-sm-10">
                      <input type="number" readonly class="form-control" maxlength="10" value="<?=$PageQry->phone;?>" name="phone">
                    </div>
                  </div>
				  <div class="form-group row">
                    <label for="hEmail" class="col-xl-3 col-sm-3 col-sm-2 col-form-label">Email</label>
                    <div class="col-xl-9 col-lg-9 col-sm-10">
					<span style="color:red;"><?php echo $this->session->tempdata('exist');?></span>
                      <input type="email" readonly class="form-control" value="<?=$PageQry->email;?>" autocomplete="off" name="email">
                    </div>
                  </div>-->
					<div class="form-group row">
                    <label for="hEmail" class="col-xl-3 col-sm-3 col-sm-2 col-form-label">School Name</label>
                    <div class="col-xl-9 col-lg-9 col-sm-10">
					<input type="hidden" name="franchise_id" value="<?=$PageQry->franchise_id;?>"/>
                      <select disabled class="form-control">
							<option value="">--SELECT--</option>
							<?php foreach($FranQry as $franRow){?>
								<option value="<?=$franRow->id;?>"<?php if($PageQry->franchise_id==$franRow->id){echo "selected";}?>><?=$franRow->franchise_school;?></option>
							<?php }?>
						</select>
                    </div>
                  </div>
				  <div class="form-group row">
                    <label for="hEmail" class="col-xl-3 col-sm-3 col-sm-2 col-form-label">Choose Class</label>
                    <div class="col-xl-9 col-lg-9 col-sm-10">
					<input type="hidden" name="class_id" value="<?=$PageQry->class_id;?>"/>
                      <select disabled class="form-control" id="class_id">
							<option value="">--SELECT--</option>
							<?php foreach($ClassQry as $clsRow){?>
								<option value="<?=$clsRow->id;?>"<?php if($PageQry->class_id==$clsRow->id){echo "selected";}?>><?=$clsRow->class_name;?></option>
							<?php }?>
						</select>
                    </div>
                  </div>
				  <div class="form-group row">
                    <label for="hEmail" class="col-xl-3 col-sm-3 col-sm-2 col-form-label">Choose Subject</label>
                    <div class="col-xl-9 col-lg-9 col-sm-10">
                      <input type="hidden" name="subject_id" value="<?=$PageQry->subject_id;?>"/>
					  <select disabled class="form-control" id="subj_id" multiple>
							<option value="">--SELECT--</option>
							<?php 
								$exp = explode(',',$PageQry->subject_id);
								$SbjQry = $this->db->where(['class_id'=>$PageQry->class_id, 'status'=>1])->get('tbl_subject')->result();
								foreach($SbjQry as $sbjData){?>
								<option value="<?=$sbjData->id;?>"<?php if(in_array($sbjData->id ,$exp)){echo "selected";}?>><?=$sbjData->subject_name;?> (<?=$sbjData->subject_code;?>)</option>
							<?php }?>
						</select>
                    </div>
                  </div>
				  <div class="form-group row">
                    <label for="hEmail" class="col-xl-3 col-sm-3 col-sm-2 col-form-label">Session</label>
                    <div class="col-xl-9 col-lg-9 col-sm-10">
                      <input type="text" readonly class="form-control" value="<?=$PageQry->session;?>" name="session">
                    </div>
                  </div>
				 
				  <!--<div class="form-group row">
                    <label for="hEmail" class="col-xl-3 col-sm-3 col-sm-2 col-form-label">Permanant Address</label>
                    <div class="col-xl-9 col-lg-9 col-sm-10">
                      <textarea class="form-control" readonly rows="1" name="address2"><?=$PageQry->address2;?></textarea>
                    </div>
                  </div>-->
				  <div class="form-group row">
                    <label for="hEmail" class="col-xl-3 col-sm-3 col-sm-2 col-form-label">Student Photo</label>
                    <div class="col-xl-9 col-lg-9 col-sm-10">
						<!--<span style="color:red">*Please Upload Passport Size Image</span>
						<input type="file" class="form-control" name="image">-->
						<input type="hidden" class="form-control" value="<?=$PageQry->image;?>" name="Old_image">
						<?php if($PageQry->image!=''){?>
                            <img src="<?=base_url('assets/images/student')?>/<?=$PageQry->image?>" height="60" width="80">
                      <?php }?>
                    </div>
                  </div>
				  <!--<div class="form-group row">
                    <label for="hEmail" class="col-xl-3 col-sm-3 col-sm-2 col-form-label">Student Sign</label>
                    <div class="col-xl-9 col-lg-9 col-sm-10">
						<span style="color:red">*Please Upload Student Sign Image</span>
                      <input type="file" class="form-control" name="sign">
					  <input type="hidden" class="form-control" value="<?=$PageQry->sign;?>" name="Old_sign">
						<?php if($PageQry->sign!=''){?>
                      <img src="<?=base_url('assets/images/student')?>/<?=$PageQry->sign?>" height="60" width="80">
                      <?php }?>
					</div>
                  </div>-->
				  <!--<div class="form-group row">
                    <label for="hEmail" class="col-xl-3 col-sm-3 col-sm-2 col-form-label">Document 1</label>
                    <div class="col-xl-9 col-lg-9 col-sm-10">
					<span style="color:red">*Please Upload 10th Document(pdf)</span>
                      <input type="file" class="form-control" name="doc1">
					  <input type="hidden" class="form-control" value="<?=$PageQry->doc1;?>" name="Old_doc1">
						<?php if($PageQry->doc1!=''){ 
						$ext = pathinfo($PageQry->doc1, PATHINFO_EXTENSION);?>
						<?php if(strtolower($ext)=='pdf'){?>
							<img src="<?=base_url('assets/cork/images/pdf.png')?>" height="50" width="50">
						<?php }else{?>
							<img src="<?=base_url('assets/images/student/doc')?>/<?=$PageQry->doc1?>" height="60" width="80">
						<?php }}?>
					</div>
                  </div>-->
				  <?php if($PageQry->class_id=='1'){ $dis ="none";}else{$dis ="block";}?>
				  <!--<div id="row_dim" style="display:<?=$dis;?>">
				  <div class="form-group row">
                    <label for="hEmail" class="col-xl-3 col-sm-3 col-sm-2 col-form-label">Document 2</label>
                    <div class="col-xl-9 col-lg-9 col-sm-10">
					<span style="color:red">*Please Upload Adhar Cart</span>
                      <input type="file" class="form-control dc" name="doc2">
					  <input type="hidden" class="form-control" value="<?=$PageQry->doc2;?>" name="Old_doc2">
						<?php if($PageQry->doc2!=''){ 
						$ext2 = pathinfo($PageQry->doc2, PATHINFO_EXTENSION);?>
						<?php if(strtolower($ext2)=='pdf'){?>
							<img src="<?=base_url('assets/cork/images/pdf.png')?>" height="50" width="50">
						<?php }else{?>
							<img src="<?=base_url('assets/images/student/doc')?>/<?=$PageQry->doc2?>" height="60" width="80">
						<?php }}?>
					</div>
                  </div>-->
				   <!--<div class="form-group row">
                    <label for="hEmail" class="col-xl-3 col-sm-3 col-sm-2 col-form-label">Document 3</label>
                    <div class="col-xl-9 col-lg-9 col-sm-10">
					<span style="color:red">*Please Upload Other Documents</span>
                      <input type="file" class="form-control dc" name="doc3">
					  <input type="hidden" class="form-control" value="<?=$PageQry->doc3;?>" name="Old_doc3">
						<?php if($PageQry->doc3!=''){ 
						$ext3 = pathinfo($PageQry->doc3, PATHINFO_EXTENSION);?>
						<?php if(strtolower($ext3)=='pdf'){?>
							<img src="<?=base_url('assets/cork/images/pdf.png')?>" height="50" width="50">
						<?php }else{?>
							<img src="<?=base_url('assets/images/student/doc')?>/<?=$PageQry->doc3?>" height="60" width="80">
						<?php }}?>
					</div>
                  </div>
                  </div>-->
                 <!--<fieldset class="form-group">
                  <div class="row">
                    <label class="col-form-label col-xl-3 col-sm-3 col-sm-2 pt-0">Status</label>
                    <div class="col-xl-9 col-lg-9 col-sm-10">
                      <div class="form-check">
                        <div class="custom-control custom-radio classic-radio-info">
                          <input type="radio" id="hRadio1" name="status" class="custom-control-input" value="1" <?php if(isset($PageQry->status) && $PageQry->status=='1'){ echo "checked"; } ?>>
                          <label class="custom-control-label" for="hRadio1">Active</label>
                        </div>
                      </div>
                      <div class="form-check">
                        <div class="custom-control custom-radio classic-radio-info">
                          <input type="radio" id="hRadio2" name="status" class="custom-control-input" value="0" <?php if(isset($PageQry->status) && $PageQry->status=='0'){ echo "checked"; } ?>>
                          <label class="custom-control-label" for="hRadio2">InActive</label>
                        </div>
                      </div>
                    </div>
                  </div>
                  </fieldset>-->                
                  <div class="form-group row">
                    <div class="col-sm-9 col-offset-3">
					<?php if($frBalQry->credit_amount > $ClsEnroQry->enrollment_amount){;?>	
                      <button type="submit" name="Save" class="btn btn-primary">Generate</button>
                    <?php }else{?>
						<a href="#" onclick="return confirm('Your account balance is not sufficient, so please contact to administrator!!!')" class="btn btn-primary">Generate</a>
                    <?php }?>
					</div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php include('footer.php');?>
  </div>
</div>
<script src="<?=base_url('assets/juggler/assets/js/libs/jquery-3.1.1.min.js')?>"></script>
<script src="<?=base_url('assets/juggler/bootstrap/js/popper.min.js')?>"></script>
<script src="<?=base_url('assets/juggler/bootstrap/js/bootstrap.min.js')?>"></script>
<script src="<?=base_url('assets/juggler/plugins/perfect-scrollbar/perfect-scrollbar.min.js')?>"></script>
<script src="<?=base_url('assets/juggler/assets/js/app.js')?>"></script>
<script>
        $(document).ready(function() {
            App.init();
        });
    </script>
<script src="<?=base_url('assets/juggler/plugins/highlight/highlight.pack.js')?>"></script>
<script src="<?=base_url('assets/juggler/assets/js/custom.js')?>"></script>
<script src="<?=base_url('assets/juggler/assets/js/scrollspyNav.js')?>"></script>
<script src="https://cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
<script>
 CKEDITOR.replace( 'description' );
</script>
<script type='text/javascript'>
  $(document).ready(function(){
   $('#class_id').change(function(){
    var cid = $(this).val();
	//alert(cid);return false;
    $.ajax({
     url:'<?=base_url()?>juggler/student_zone/AjaxSubject',
     method: 'post',
     data: {cid: cid},
     success: function (data) {
	   //alert(data);return false;
		$('#subj_id').html(data);
	}
   });
  });
	
	$('#class_id').change(function(){
		if($('#class_id').val() == '1') {
            $('#row_dim').hide(); 
			$('.dc').removeAttr('required',false);
        } else {
            $('#row_dim').show();
			$('.dc').attr('required', true);
        } 
 	});
 });
 </script>

</body>
</html>
