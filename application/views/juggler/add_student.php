<?php
if (! $this->session->userdata('logged_in')==TRUE)
{
redirect('juggler/login');
}

$name = '';
$name = $this->input->post('name');

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
<title>Add Student</title>
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
                    <h4>Add Student Information</h4>
                  </div>
                </div>
              </div>
              <div class="widget-content widget-content-area">
                <form method="post" action="<?=base_url('juggler/student_zone/insert')?>" autocomplete="off" name="form" enctype="multipart/form-data">
				  <div class="form-group row">
                    <label for="hEmail" class="col-xl-3 col-sm-3 col-sm-2 col-form-label">Course for which admitted</label>
                    <div class="col-xl-9 col-lg-9 col-sm-10">

                        <select required class="form-control" name="course">
                            <option value="">--SELECT COURSE--</option>
                            <?php foreach($getCourse as $val){?>
                                <option value="<?=$val->id;?>"><?=$val->name;?></option>
                            <?php }?>
                        </select>
                    </div>
                  </div>
				  <div class="form-group row">
                    <label for="hEmail" class="col-xl-3 col-sm-3 col-sm-2 col-form-label">Name</label>
                    <div class="col-xl-9 col-lg-9 col-sm-10">
                      <input type="text" required class="form-control" value="<?=$name;?>" name="name">
                    </div>
                  </div>
				    <div class="form-group row">
                    <label for="hEmail" class="col-xl-3 col-sm-3 col-sm-2 col-form-label">DOB</label>
                    <div class="col-xl-9 col-lg-9 col-sm-10">
                      <input type="date" required class="form-control" name="dob">
                    </div>
                  </div>
				  <div class="form-group row">
                    <label for="hEmail" class="col-xl-3 col-sm-3 col-sm-2 col-form-label">Father's Name</label>
                    <div class="col-xl-9 col-lg-9 col-sm-10">
                      <input type="text" required class="form-control" name="father_name">
                    </div>
                  </div>
				   <div class="form-group row">
                    <label for="hEmail" class="col-xl-3 col-sm-3 col-sm-2 col-form-label">Mother's Name</label>
                    <div class="col-xl-9 col-lg-9 col-sm-10">
                      <input type="text" required class="form-control" name="mother_name">
                    </div>
                  </div>
				  <div class="form-group row">
                    <label for="hEmail" class="col-xl-3 col-sm-3 col-sm-2 col-form-label">Cast</label>
                    <div class="col-xl-9 col-lg-9 col-sm-10">
						<select required class="form-control" name="cast">
							<option value="">--SELECT CAST--</option>
							<?php foreach($CastQry as $cstRows){?>
								<option value="<?=$cstRows->id;?>"><?=$cstRows->cast_title;?></option>
							<?php }?>
						</select>
                    </div>
                  </div>
				  <div class="form-group row">
                    <label for="hEmail" class="col-xl-3 col-sm-3 col-sm-2 col-form-label">Mobile No</label>
                    <div class="col-xl-9 col-lg-9 col-sm-10">
                      <input type="number" required class="form-control" maxlength="10" name="phone">
                    </div>
                  </div>
				  <div class="form-group row">
                    <label for="hEmail" class="col-xl-3 col-sm-3 col-sm-2 col-form-label">Email</label>
                    <div class="col-xl-9 col-lg-9 col-sm-10">
					<span style="color:red;"><?php echo $this->session->tempdata('exist');?></span>
                      <input type="email" required class="form-control" autocomplete="off" name="email">
                    </div>
                  </div>
					<div class="form-group row">
                    <label for="hEmail" class="col-xl-3 col-sm-3 col-sm-2 col-form-label">School Name</label>
                    <div class="col-xl-9 col-lg-9 col-sm-10">
                      <select required class="form-control" name="school_id">
							<option value="">--SELECT--</option>
							 <?php foreach($FranQry as $franRow){?>
								<option value="<?=$franRow->id;?>"><?=$franRow->franchise_school;?></option>
							 <?php }?>
						</select>
                    </div>
                  </div>
				  <div class="form-group row">
                    <label for="hEmail" class="col-xl-3 col-sm-3 col-sm-2 col-form-label">Choose Class</label>
                    <div class="col-xl-9 col-lg-9 col-sm-10">
                      <select required class="form-control" id="class_id" name="class_id">
							<option value="">--SELECT--</option>
							<?php foreach($ClassQry as $clsRow){?>
								<option value="<?=$clsRow->id;?>"><?=$clsRow->class_name;?></option>
							<?php }?>
						</select>
                    </div>
                  </div>
				  <div class="form-group row">
                    <label for="hEmail" class="col-xl-3 col-sm-3 col-sm-2 col-form-label">Choose Subject</label>
                    <div class="col-xl-9 col-lg-9 col-sm-10">
                      <select class="form-control" id="subj_id" multiple name="subject_id[]">
							<option value="">--SELECT--</option>
						</select>
                    </div>
                  </div>
				  <div class="form-group row">
                    <label for="hEmail" class="col-xl-3 col-sm-3 col-sm-2 col-form-label">Session</label>
                    <div class="col-xl-9 col-lg-9 col-sm-10">
                      <input type="text" required class="form-control" name="session">
                    </div>
                  </div>
				  <div class="form-group row">
                    <label for="hEmail" class="col-xl-3 col-sm-3 col-sm-2 col-form-label">Local Address</label>
                    <div class="col-xl-9 col-lg-9 col-sm-10">
                      <textarea class="form-control" required rows="1" name="address"></textarea>
                    </div>
                  </div>
				  <div class="form-group row">
                    <label for="hEmail" class="col-xl-3 col-sm-3 col-sm-2 col-form-label">Permanant Address</label>
                    <div class="col-xl-9 col-lg-9 col-sm-10">
                      <textarea class="form-control" rows="1" name="address2"></textarea>
                    </div>
                  </div>
				  <div class="form-group row">
                    <label for="hEmail" class="col-xl-3 col-sm-3 col-sm-2 col-form-label">Student Photo</label>
                    <div class="col-xl-9 col-lg-9 col-sm-10">
						<span style="color:red">*Please Upload Passport Size Image</span>
                      <input type="file" class="form-control" name="image">
                    </div>
                  </div>
				  <div class="form-group row">
                    <label for="hEmail" class="col-xl-3 col-sm-3 col-sm-2 col-form-label">Student Sign</label>
                    <div class="col-xl-9 col-lg-9 col-sm-10">
						<span style="color:red">*Please Upload Student Sign Image</span>
                      <input type="file" class="form-control" name="sign">
                    </div>
                  </div>
				  <div class="form-group row">
                    <label for="hEmail" class="col-xl-3 col-sm-3 col-sm-2 col-form-label">Document 1</label>
                    <div class="col-xl-9 col-lg-9 col-sm-10">
					<span style="color:red">*Please Upload 10th Document(pdf)</span>
                      <input type="file" class="form-control" required name="doc1">
                    </div>
                  </div>
				  <div id="row_dim" style="display:none">
				  <div class="form-group row">
                    <label for="hEmail" class="col-xl-3 col-sm-3 col-sm-2 col-form-label">Document 2</label>
                    <div class="col-xl-9 col-lg-9 col-sm-10">
					<span style="color:red">*Please Upload Adhar Cart</span>
                      <input type="file" class="form-control dc" name="doc2">
                    </div>
                  </div>
				  <div class="form-group row">
                    <label for="hEmail" class="col-xl-3 col-sm-3 col-sm-2 col-form-label">Document 3</label>
                    <div class="col-xl-9 col-lg-9 col-sm-10">
					 <span style="color:red">*Please Upload Other Documents</span>
                      <input type="file" class="form-control dc" name="doc3">
                    </div>
                  </div>
                  </div>
                  <fieldset class="form-group">
                  <div class="row">
                    <label class="col-form-label col-xl-3 col-sm-3 col-sm-2 pt-0">Status</label>
                    <div class="col-xl-9 col-lg-9 col-sm-10">
                      <div class="form-check">
                        <div class="custom-control custom-radio classic-radio-info">
                          <input type="radio" id="hRadio1" name="status" class="custom-control-input" value="1" checked>
                          <label class="custom-control-label" for="hRadio1">Active</label>
                        </div>
                      </div>
                      <div class="form-check">
                        <div class="custom-control custom-radio classic-radio-info">
                          <input type="radio" id="hRadio2" name="status" class="custom-control-input" value="0">
                          <label class="custom-control-label" for="hRadio2">InActive</label>
                        </div>
                      </div>
                    </div>
                  </div>
                  </fieldset>                  
                  <div class="form-group row">
                    <div class="col-sm-9 col-offset-3">
                      <button type="submit" name="Save" class="btn btn-primary">Save</button>
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
