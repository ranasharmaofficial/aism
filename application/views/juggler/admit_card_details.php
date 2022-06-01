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
<title>Admit Card Details</title>
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
                    <h4>Admit Card Details</h4>
                  </div>
                </div>
              </div>
              <div class="widget-content widget-content-area">
                <form method="post" action="#" name="form">
				  <div class="form-group row">
                    <label for="hEmail" class="col-xl-3 col-sm-3 col-sm-2 col-form-label">Student Name</label>
                    <div class="col-xl-9 col-lg-9 col-sm-10">
                      <input type="text" class="form-control" readonly value="<?=$PageQry->student_name;?>"/>
                    </div>
                  </div>
				    <div class="form-group row">
                    <label for="hEmail" class="col-xl-3 col-sm-3 col-sm-2 col-form-label">DOB</label>
                    <div class="col-xl-9 col-lg-9 col-sm-10">
                      <input type="date" class="form-control" readonly value="<?=$PageQry->date_of_birth;?>"/>
                    </div>
                  </div>
				  <div class="form-group row">
                    <label for="hEmail" class="col-xl-3 col-sm-3 col-sm-2 col-form-label">Father's Name</label>
                    <div class="col-xl-9 col-lg-9 col-sm-10">
                      <input type="text" class="form-control" readonly value="<?=$PageQry->father_name;?>"/>
                    </div>
                  </div>
				   <div class="form-group row">
                    <label for="hEmail" class="col-xl-3 col-sm-3 col-sm-2 col-form-label">Mother's Name</label>
                    <div class="col-xl-9 col-lg-9 col-sm-10">
                      <input type="text" class="form-control" readonly value="<?=$PageQry->mother_name;?>"/>
                    </div>
                  </div>
					<div class="form-group row">
                    <label for="hEmail" class="col-xl-3 col-sm-3 col-sm-2 col-form-label">School Name</label>
                    <div class="col-xl-9 col-lg-9 col-sm-10">
                      <input type="text" class="form-control" readonly value="<?=$PageQry->school_name;?>"/>
                    </div>
                  </div>
				  <div class="form-group row">
                    <label for="hEmail" class="col-xl-3 col-sm-3 col-sm-2 col-form-label">Center Code</label>
                    <div class="col-xl-9 col-lg-9 col-sm-10">
                      <input type="text" class="form-control" readonly value="<?=$PageQry->center_code;?>"/>
                    </div>
                  </div>
				  <div class="form-group row">
                    <label for="hEmail" class="col-xl-3 col-sm-3 col-sm-2 col-form-label">Roll No.</label>
                    <div class="col-xl-9 col-lg-9 col-sm-10">
                      <input type="text" class="form-control" readonly value="<?=$PageQry->roll_no;?>"/>
                    </div>
                  </div>
				  <div class="form-group row">
                    <label for="hEmail" class="col-xl-3 col-sm-3 col-sm-2 col-form-label">Enrollment No.</label>
                    <div class="col-xl-9 col-lg-9 col-sm-10">
                      <input type="text" class="form-control" readonly value="<?=$PageQry->enrollment_no;?>"/>
                    </div>
                  </div>
				  <div class="form-group row">
                    <label for="hEmail" class="col-xl-3 col-sm-3 col-sm-2 col-form-label">Class</label>
                    <div class="col-xl-9 col-lg-9 col-sm-10">
                      <?php $ClassQry = $this->db->where(['id'=>$PageQry->class_id])->get('tbl_class')->row();?>
                     <input type="text" class="form-control" readonly value="<?=$ClassQry->class_name;?>"/>
					</div>
                  </div>
				  <div class="form-group row">
                    <label for="hEmail" class="col-xl-3 col-sm-3 col-sm-2 col-form-label">Subject</label>
                    <div class="col-xl-9 col-lg-9 col-sm-10">
					  <select disabled class="form-control" id="subj_id" multiple>
							<option value="">--SELECT--</option>
							<?php
								$exp = explode(',',$PageQry->subject_id);
								$SbjQry = $this->db->where(['class_id'=>$PageQry->subject_id, 'status'=>1])->get('tbl_subject')->result();
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
				 
				  <div class="form-group row">
                    <label for="hEmail" class="col-xl-3 col-sm-3 col-sm-2 col-form-label">Student Photo</label>
                    <div class="col-xl-9 col-lg-9 col-sm-10">
						<?php if($PageQry->image!=''){?>
                            <img src="<?=base_url('assets/images/student')?>/<?=$PageQry->image?>" height="60" width="80">
                      <?php }?>
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-sm-9 col-offset-3">
                      <a href="<?=base_url('juggler/student_zone/admit_card_list');?>" class="btn btn-primary">Back</a>
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
</body>
</html>
