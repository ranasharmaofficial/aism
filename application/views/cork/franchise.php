<!DOCTYPE html>

<html lang="en">

<head>

<meta charset="utf-8">

<meta http-equiv="X-UA-Compatible" content="IE=edge">

<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">

<title>FRANCHISE CENTRE - Welcome aismgroup.com</title>

<?php include('headerstylelinks.php'); ?>
</head>

<body>

<div class="wrapper">

   <?php include_once('header.php'); ?>

  <section class="page_breadcrumbs ds color parallax about_us section_padding_top">

    <div class="container">

      <div class="row">

        <div class="col-sm-12 text-center">

          <h2>FRANCHISE CENTRE</h2>

          <ol class="breadcrumb highlightlinks">

            <li> <a href="<?php echo base_url(''); ?>"> Home </a> </li>

            <li class="active">FRANCHISE CENTRE</li>

          </ol>

        </div>

      </div>

    </div>

    <div class="ovelay_1"></div>

  </section>

  <section class="sction_style1 white_bg">
            <div class="container">
                <div class="row clearfix about-section">
                    <div class="col-md-12 col-sm-6">
                        <form action="" method="post">
                            <div class="padding-btop30 no-maxpadding text-justify">
                                <div class="tittle_1 about-us-hd certificate">
                                    <h3>FRANCHISE CENTRE</h3>
                                </div>
                                <div class="certificate-bar">
                                    <h3 style="font-size: 20px;text-align:center'
    font-weight: 600;
    color: #3e3f94;
    margin: 0 0 15px;
    text-align: left;" class="cent">SEND REQUEST FOR TESTING CENTER</h3>
                                    <div class="row ">
                                        <div class="col-md-6 col-xs-12 col-sm-12 form-group">

                                            <input type="text" class="form-control input-lg" placeholder="Your Name"
                                                autocomplete="off" name="certificate_no">
                                        </div>
                                        <div class="col-md-6 col-xs-12 col-sm-12 form-group">

                                            <input type="text" class="form-control input-lg" placeholder="Email-Address"
                                                autocomplete="off" name="certificate_no">
                                        </div>


                                    </div>
                                    <div class="row ">

                                        <div class="col-md-12 col-xs-12 col-sm-12 form-group">

                                            <input type="text" class="form-control input-lg" placeholder="Phone Number"
                                                autocomplete="off" name="certificate_no">
                                        </div>

                                        <div class="submitbtn">
                                            <input type="submit" value="SUBMIT">
                                        </div>
                                        <div class="franchaiseCenter franchaiseCenter123">
                                            <div class="franchaise1">
                                                <h3>Search Centers</h3>

                                                <div class="slccenter">
                                                    <form
                                                        action="https://www.lbstc.org.in/franchise-centre/AjaxgetFranchise"
                                                        id="search_center">
                                                        <div class="row">
                                                            <div class="col-sm-5 ">

                                                                <div class="form-group">
                                                                    <select name="state_id" id="state_id">
                                                                        <option>--Choose State--</option>
                                                                        <?php foreach($StateQry as $StateRow){?>
										<option value="<?=$StateRow->id?>"><?=$StateRow->name?></option>
									<?php }?>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-5">
                                                                <div class="form-group">
                                                                    <select name="city_id" id="city_id">
                                                                        <option>--Choose City--</option>
                                                                        <?php foreach($CityQry as $CityRow){?>
										<option value="<?=$CityRow->id?>"><?=$CityRow->name?></option>
									<?php }?>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-2">
                                                                <div class="searchbtn">
                                                                    <a href="#" id="search">SEARCH</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
						</form>
                    </div>




                </div>
                <section>
                    <table>
                        <tr>
                            <th>Center Name</th>
                            <th>
                                Contact Person</th>
                            <th>Contact Email</th>
                            <th>
                                Contact Phone</th>
                            <th>
                                Address</th>
                        </tr>
                        <?php $c=0; foreach($FranchiseQry as $FranchiseRow){ $c++; ?>
						<tr>
                            <td><?=$FranchiseRow->franchise_school?></td>
                            <td><?=$FranchiseRow->franchise_name?></td>
                            <td><?=$FranchiseRow->franchise_email?></td>
                            <td><?=$FranchiseRow->franchise_phone?></td>
                            <td><?=$FranchiseRow->franchise_address?></td>
                        </tr>
                        <?php } ?>

                    </table>
                </section>
            </div>
        </section>

  <!--=====footer start=========-->
<script type='text/javascript'>
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
 <script type='text/javascript'>
  $(document).ready(function(){
  	$('#fatchAjax').hide();
 	 $('#search').click(function (event) {
        event.preventDefault();
   var idserch = $("#search_center").attr("action");
    var state_id = $('#state_id').val();
    var city_id = $('#city_id').val();
    $.ajax({
     url:idserch,
     method: 'post',
     data: {state_id: state_id, city_id: city_id},
     dataType: 'html',
     success: function(data){
     		$('#fatchAjax').show();
     		console.log(data);
     		$('#display_row1 , #display_row2 ,#display_row3 , #display_row4 ,#display_row5 ,#display_row6').hide();
        $('#fatchAjax').html(data);
     }
   });
  });
 });
 </script>
  <?php include_once('footer.php'); ?>

  <!--=====footer start end=========-->

</div>


</body>

</html>




<?php if(false) { ?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?=$PageQry->page_meta_title?></title>

<meta name="description" content="<?=$PageQry->page_meta_description?>">

<meta name="keywords" content="<?=$PageQry->page_meta_keywords?>">
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
		.abs input[type=text]{
			border:none;
			border-bottom:2px solid gray;
			margin-bottom:20px;
		} 

		select.form-control{
			border:none;
			outline:none;
			margin-bottom:20px;
			border-bottom:2px solid gray;
		}

		.front-mod{
			background-image:url('front-bg.html');
			background-size: cover;
			background-repeat: no-repeat;
		}

		.abs {
			background-color: rgb(41 51 76);
		}

		.para p{
			font-size:12px;
		}
		.bg-primary {
			background-color: #FFA500!important;
		}
		.abs {
			background-color: #29334c;
		}
		.btn-success {
			color: #fff;
			background-color: #FFA500!important;
			border: none;
		}
		.text-light {
			color: #f8f9fa!important;
			background-color: #FFA500;
			padding: 5px 3px;
			border-radius: 4px;
		}
		.card-body.text-center {
			background-color: #29334c;
		}
		button.btn.btn-block.text-light.py-1 {
			background-color: #FFA500;
		}
	</style>
</head>
<body>
<?php include('header.php');?>


	<div class="e-certifiacte">
		<div class="container">
			<div class="content">
				<h1><?=$PageQry->page_title?></h1>
			</div>

			<div class="franchaiseCenter">
				<div class="franchaise1">
					<?=$PageQry->page_description?>
				</div>
			</div>

			

			

			<div class="franchaiseCenter franchaiseCenter126">
				<div class="franchaise1">
					
					
					<form class="hdm" method="post" action="">
						<h3>SEND REQUEST FOR TESTING CENTER</h3>
						<div class="formrow">
							<div class="form-group">
								<input type="text" name="name" placeholder="Your Name">
							</div>
							<div class="form-group">
								<input type="email" name="email" placeholder="Email Address">
							</div>
						</div>
						<div class="col-sm-12">
							<div class="form-group">
								<input type="text" name="phone" placeholder="Phone Number">
							</div>
							<div class="submitbtn">
								<input type="submit" value="SUBMIT">
							</div>
						</div>
					</form>
				</div>
			</div>

			<div class="franchaiseCenter franchaiseCenter123">
				<div class="franchaise1">
					<h3>Search Centers</h3>
					
					<div class="slccenter">
						<form action="<?=base_url('franchise-centre/AjaxgetFranchise')?>" id="search_center">
						<div class="row">
							<div class="col-sm-5">

								<div class="form-group">
									<select name="state_id" id="state_id">
										<option>--Choose State--</option>
										<?php foreach($StateQry as $StateRow){?>
										<option value="<?=$StateRow->id?>"><?=$StateRow->name?></option>
									<?php }?>
									</select>
								</div>
							</div>
							<div class="col-sm-5">
								<div class="form-group">
									<select name="city_id" id="city_id">
										<option>--Choose City--</option>
										<?php foreach($CityQry as $CityRow){?>
										<option value="<?=$CityRow->id?>"><?=$CityRow->name?></option>
									<?php }?>
									</select>
								</div>
							</div>
							<div class="col-sm-2">
								<div class="searchbtn">
									<a href="#" id="search">SEARCH</a>
								</div>
							</div>
						</div>
						</form>
					
					</div>
				</div>
			</div>

			<div class="tablecentere">
				<div class="centerRow centerRowTital">
					<div class="col_center col_center1">Center Name</div>
					<div class="col_center col_center2">Contact Person</div>
					<div class="col_center col_center3">Contact Email</div>
					<div class="col_center col_center4">Contact Phone</div>
					<div class="col_center col_center5">Address</div>
				</div>
				<div id="fatchAjax" style="border: 2px dotted green;">
				</div>
				<?php $c=0; foreach($FranchiseQry as $FranchiseRow){ $c++; ?>
					<div id="display_row<?=$c?>">
						<div class="centerRow centerRowline">
								<div class="col_center col_center1"><?=$FranchiseRow->franchise_school?></div>
								<div class="col_center col_center2"><?=$FranchiseRow->franchise_name?></div>
								<div class="col_center col_center3"><?=$FranchiseRow->franchise_email?></div>
								<div class="col_center col_center4"><?=$FranchiseRow->franchise_phone?></div>
								<div class="col_center col_center5"><?=$FranchiseRow->franchise_address?></div>
						</div>
					</div>
			<?php }?>
				
			</div>
		</div>
	</div>
	<?php include('footer.php');?>

	<script src="<?=base_url('assets/cork/js/jquery-2.1.4.min.js')?>"></script>
	<script src="<?=base_url('assets/cork/js/bootstrap.min.js')?>"></script>
	<script src="<?=base_url('assets/cork/js/popper.min.js')?>"></script>
	<script src="<?=base_url('assets/cork/js/owl.carousel.min.js')?>"></script>
	<script src="<?=base_url('assets/cork/js/jarallax.js')?>"></script>
	<script src="<?=base_url('assets/cork/js/jquery.magnific-popup.min.js')?>"></script>
	<script src="<?=base_url('assets/cork/js/lightbox.js')?>"></script>
	<script src="<?=base_url('assets/cork/js/jquery.meanmenu.js')?>"></script>
	<script src="<?=base_url('assets/cork/js/scrollreveal.min.js')?>"></script>
	<script src="<?=base_url('assets/cork/js/jquery.counterup.min.js')?>"></script>
	<script src="<?=base_url('assets/cork/js/waypoints.min.js')?>"></script>
	<script src="<?=base_url('assets/cork/js/jquery-ui.js')?>"></script>
	<script src="<?=base_url('assets/cork/js/gmap3.min.js')?>"></script>
	<script src="<?=base_url('assets/cork/js/switch.js')?>"></script>
	<script src="http://maps.google.com/maps/api/js?key=AIzaSyC61_QVqt9LAhwFdlQmsNwi5aUJy9B2SyA"></script>
	<script src="<?=base_url('assets/cork/js/script.js')?>"></script>
	<script src="<?=base_url('assets/cork/js/custom.js')?>"></script>
	<script type='text/javascript'>
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
 <script type='text/javascript'>
  $(document).ready(function(){
  	$('#fatchAjax').hide();
 	 $('#search').click(function (event) {
        event.preventDefault();
   var idserch = $("#search_center").attr("action");
    var state_id = $('#state_id').val();
    var city_id = $('#city_id').val();
    $.ajax({
     url:idserch,
     method: 'post',
     data: {state_id: state_id, city_id: city_id},
     dataType: 'html',
     success: function(data){
     		$('#fatchAjax').show();
     		console.log(data);
     		$('#display_row1 , #display_row2 ,#display_row3 , #display_row4 ,#display_row5 ,#display_row6').hide();
        $('#fatchAjax').html(data);
     }
   });
  });
 });
 </script>
</body>
</html>
<?php } ?>