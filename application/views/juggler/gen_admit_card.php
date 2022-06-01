<?php
if (! $this->session->userdata('logged_in')==TRUE)
{
redirect('juggler/login');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
<title>Generate Admit Card</title>
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
                    <h4>Generate Admit Card</h4>
                  </div>
                </div>
              </div>
              <div class="widget-content widget-content-area">
                <form method="post" action="<?=base_url('juggler/student_zone/gen_admit_card')?>" name="form" onsubmit="return confirm('Are you sure you want to generate Admit Card?')">
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
                        <label for="hEmail" class="col-xl-3 col-sm-3 col-sm-2 col-form-label">Choose Date & Time</label>
                        <div class="col-xl-9 col-lg-9 col-sm-10">
                            <?php
                            foreach($SbjQry as $sbjData){
                                ?>
                                <label style="width: 100% !important; padding-left: 0px; text-align: left;" for="hEmail" class="col-form-label"><?=$sbjData->subject_name;?> (<?=$sbjData->subject_code;?>) Date & Time:</label>
                                <input name="subject_date[]" id="subject_date_<?=$sbjData->subject_code;?>" type="datetime-local" class="form-control" required="required" value="" placeholder="<?=$sbjData->subject_name;?> (<?=$sbjData->subject_code;?>) Date & Time" style="margin:5px 0" >
                                <?php
                            }
                            ?>
                        </div>
                    </div>
				  <div class="form-group row">
                    <label for="hEmail" class="col-xl-3 col-sm-3 col-sm-2 col-form-label">Session</label>
                    <div class="col-xl-9 col-lg-9 col-sm-10">
                      <input type="text" readonly class="form-control" value="<?=$PageQry->session;?>" name="session">
                    </div>
                  </div>
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
                  <div class="form-group row">
                    <div class="col-sm-9 col-offset-3">
                      <button type="submit" name="Save" class="btn btn-primary">Generate</button>
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


</body>
</html>
