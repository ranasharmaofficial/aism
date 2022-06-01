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
  <meta name="description" content="<?=$PageQry->page_meta_description;?>">
  <meta name="keywords" content="<?=$PageQry->page_meta_keywords;?>">
  <meta name="author" content="">
  <title><?=$PageQry->page_meta_title;?></title>
<?php include('headerstylelinks.php'); ?>
<style>
 
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
  width: 25%; /* Four links of equal widths */
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

<div class="wrapper">

   <?php include_once('header.php'); ?>

  

  <section class="padding-btop50">

    <div class="container">

      <div class="row clearfix">

        <div class="col-md-12"> </div>

        <div class="col-md-12 col-sm-12">
			<div class="tittle_left">
				<h2 class="text-uppercase"><?=$PageQry->page_name;?></h2>
			</div>
			<div class="container">
    <div class="content">
       
	  <span style="font-size:15px;color:red;float:right;">Your Balance is : <?=$BalQry->credit_amount;?></span>
    </div>
	<?php 
	$fra_session = $this->session->userdata('session_id');
	$franQry = $this->db->where('id',$fra_session)->get('tbl_franchise')->row();?>	
		<div class="navbar1">
			<a class="active" href="<?=base_url('franchise-center');?>">Profile</a> 
			<a href="<?=base_url('franchise-center/student-list');?>">Student List</a> 
			<a href="<?=base_url('franchise-center/new-admission');?>">Add New Admission</a> 
		</div>
		<div class="container mt-3">
		<div class="main-body">
          <div class="row gutters-sm">
            <div class="col-md-4 mb-3">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex flex-column align-items-center text-center">
                    <img style="height:150px;width:auto;border-radius:50%;" src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin" class="rounded-circle" width="150">
                    <div class="mt-3">
                      <p class="font-weight-bold" style="font-size:18px;">Name:&nbsp;<?=$franQry->franchise_name;?></p>
                      <p class="text-secondary mb-1"><?=$franQry->franchise_school;?></p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-8">
              <div class="card mb-3">
                <div class="card-body">
					<table class="table table-bordered">
                            <tbody>
                                <tr>
                                    <td>Full Name</td>
                                    <td><?= $franQry->franchise_name; ?></td>
                                </tr>
                                <tr>
                                    <td>Email/Username</td>
                                    <td><?=$franQry->franchise_email;?></td>
                                </tr>
                                <tr>
                                    <td>Center Name</td>
                                    <td><?=$franQry->franchise_school;?></td>
                                </tr>
								                <tr>
                                    <td>Center Code</td>
                                    <td><?=$franQry->franchise_unique_id;?></td>
                                </tr>
								                <tr>
                                    <td>Phone</td>
                                    <td><?=$franQry->franchise_phone;?></td>
                                </tr>
								                <tr>
                                    <td>Address</td>
                                    <td><?=$franQry->franchise_address;?></td>
                                </tr>
								                <tr>
                                    <td>Created On</td>
                                    <td><?=$franQry->modified;?></td>
                                </tr> 
								
								
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

    </div>

  </section>

  <!--=====footer start=========-->

  <?php include_once('footer.php'); ?>

</div>

</body>

</html>


<?php if(false) { ?>
<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0; maximum-scale=1">
  <meta name="description" content="<?=$PageQry->page_meta_description;?>">
  <meta name="keywords" content="<?=$PageQry->page_meta_keywords;?>">
  <meta name="author" content="">
  <title><?=$PageQry->page_meta_title;?></title>
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
  width: 25%; /* Four links of equal widths */
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
      <h2><?=$PageQry->page_name;?></h2>
	  <span style="font-size:15px;color:red;float:right;">Your Balance is : <?=$BalQry->credit_amount;?></span>
    </div>
	<?php 
	$fra_session = $this->session->userdata('session_id');
	$franQry = $this->db->where('id',$fra_session)->get('tbl_franchise')->row();?>	
		<div class="navbar1">
			<a class="active" href="<?=base_url('franchise-center');?>">Profile</a> 
			<a href="<?=base_url('franchise-center/student-list');?>">Student List</a> 
			<a href="<?=base_url('franchise-center/new-admission');?>">Add New Admission</a> 
		</div>
		<div class="container">
		<div class="main-body">
          <div class="row gutters-sm">
            <div class="col-md-4 mb-3">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex flex-column align-items-center text-center">
                    <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin" class="rounded-circle" width="150">
                    <div class="mt-3">
                      <h4><?=$franQry->franchise_name;?></h4>
                      <p class="text-secondary mb-1"><?=$franQry->franchise_school;?></p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-8">
              <div class="card mb-3">
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Full Name</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <?=$franQry->franchise_name;?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Email/Username</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <?=$franQry->franchise_email;?>
                    </div>
                  </div>
                  <hr>
				  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Center Name</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <?=$franQry->franchise_school;?>
                    </div>
                  </div>
                  <hr>
				  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Center Code</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <?=$franQry->franchise_unique_id;?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Phone</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <?=$franQry->franchise_phone;?>
                    </div>
                  </div>
                  <hr>
                  <!--<div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Mobile</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      (320) 380-4539
                    </div>
                  </div>
                  <hr>-->
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Address</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <?=$franQry->franchise_address;?>
                    </div>
                  </div>
				  <hr>
				  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Created On </h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <?=$franQry->modified;?>
                    </div>
                  </div>
                </div>
              </div>
              
            </div>
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
		<script src="<?=base_url('assets/cork/assets/select2/js/select2.min.js')?>"></script> 
		<script src="<?=base_url('assets/cork/assets/matchHeight/js/matchHeight-min.js')?>"></script> 
		<script src="<?=base_url('assets/cork/assets/bxslider/js/bxslider.min.js')?>"></script> 
		<script src="<?=base_url('assets/cork/assets/waypoints/js/waypoints.min.js')?>"></script> 
		<script src="<?=base_url('assets/cork/assets/counterup/js/counterup.min.js')?>"></script> 
		<script src="<?=base_url('assets/cork/assets/magnific-popup/js/magnific-popup.min.js')?>"></script> 
		<script src="<?=base_url('assets/cork/assets/owl-carousel/js/owl.carousel.min.js')?>"></script>
		<script src="<?=base_url('assets/cork/assets/datepicker/js/datepicker.js')?>"></script> 
		<script src="<?=base_url('assets/cork/js/modernizr.custom.js')?>"></script>
<script>
  $('.adsimag').owlCarousel({
    loop:true,
    margin:10,
    nav:false,
    dots:true,
    autopaly:true,
    responsive:{
      0:{
        items:1
      },
      600:{
        items:1
      },
      1000:{
        items:1
      }
    }
  })
</script>
</body>
</html>
<?php } ?>