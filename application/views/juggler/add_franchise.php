<?php
if (! $this->session->userdata('logged_in')==TRUE)
{
redirect('juggler/login');
}

$name = '';
$email = '';
$phone = '';
$address = '';
$school = '';
$pass = '';

if(isset($_POST['Save'])){
	$name = $this->input->post('name');
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$address = $_POST['address'];
	$school = $_POST['school_name'];
	$pass = $_POST['password'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
<title>Add Franchise</title>
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
                    <h4>Add Franchise Information</h4>
                  </div>
                </div>
              </div>
              <div class="widget-content widget-content-area">
                <form method="post" action="<?=base_url('juggler/franchises/insert')?>" autocomplete="off" name="form" enctype="multipart/form-data">
				  <div class="form-group row">
                    <label for="hEmail" class="col-xl-3 col-sm-3 col-sm-2 col-form-label">Name</label>
                    <div class="col-xl-9 col-lg-9 col-sm-10">
                      <input type="text" required class="form-control" value="<?=$name;?>" name="name">
                    </div>
                  </div>
					<div class="form-group row">
                    <label for="hEmail" class="col-xl-3 col-sm-3 col-sm-2 col-form-label">School Name</label>
                    <div class="col-xl-9 col-lg-9 col-sm-10">
                      <input type="text" required class="form-control" name="school_name">
                    </div>
                  </div>

          <div class="form-group row">
                                    <label for="hEmail" class="col-xl-3 col-sm-3 col-sm-2 col-form-label">State Name</label>
                                    <div class="col-xl-9 col-lg-9 col-sm-10">
                                      <select name="state_id" id="state_id" class="form-control">
                                        <option>--Choose State--</option>
                                        <?php foreach($StateQry as $StateRow){?>
                                        <option  value="<?=$StateRow->id?>">
                                            <?=$StateRow->name?>
                                        </option>
                                      <?php }?>
                                      </select>
                                    </div>
                                 </div>

                                  <div class="form-group row">
                                    <label for="hEmail" class="col-xl-3 col-sm-3 col-sm-2 col-form-label">City Name</label>
                                    <div class="col-xl-9 col-lg-9 col-sm-10">
                                        <select name="city_id" id="city_id" class="form-control">
                                          <option>--Choose City--</option>
                                          <?php foreach($CityQry as $CityRow){?>
                                          <option <?php if($CityRow->id==$PageQry->city_id){ echo "selected"; } ?>  value="<?=$CityRow->id?>"><?=$CityRow->name?></option>
                                        <?php }?>
                                        </select>
                                    </div>
                                 </div>
				  <div class="form-group row">
                    <label for="hEmail" class="col-xl-3 col-sm-3 col-sm-2 col-form-label">Phone</label>
                    <div class="col-xl-9 col-lg-9 col-sm-10">
                      <input type="tel" required class="form-control" maxlength="10" name="phone">
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
                    <label for="hEmail" class="col-xl-3 col-sm-3 col-sm-2 col-form-label">Address</label>
                    <div class="col-xl-9 col-lg-9 col-sm-10">
                      <textarea class="form-control" rows="1" name="address"></textarea>
                    </div>
                  </div>
				  <div class="form-group row">
                    <label for="hEmail" class="col-xl-3 col-sm-3 col-sm-2 col-form-label">Password</label>
                    <div class="col-xl-9 col-lg-9 col-sm-10">
                      <input type="password" id="myInput" required autocomplete="off" class="form-control" name="password">
                    <button type="button" onclick="myFunction()" >Show/Hide</button>
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
<script>
function myFunction() {
    var x = document.getElementById("myInput");
    if (x.type === "password") {
        x.type = "text";
    } else {
        x.type = "password";
    }
} 


 $(document).ready(function(){
             $('#state_id').change(function(){
              var id = $(this).val(); 
                  $.ajax({
                   url:"<?=base_url('franchise-centre/AjaxgetData/')?>"+id,
                   method: 'post',
                   data: {id: id},
                   dataType: 'html',
                   success: function(data){
                      $('#city_id').html(data);
                   }
                });
              });

           });


</script>
</body>
</html>
