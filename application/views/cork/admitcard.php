

<!DOCTYPE html>

<html lang="en">

<head>

<meta charset="utf-8">

<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0; maximum-scale=1">
  <meta name="description" content="Download your Admit Card">
  <meta name="keywords" content="Download your Admit Card">
  <meta name="author" content="">
  <title>Download your Admit Card</title>
<?php include('headerstylelinks.php'); ?>
<style>
.colsm5{
	max-width: 45%;
    height: 450px;
    flex: 0 0 45%;
	backgroun:cover;
    background: url(<?= base_url('assets/cork/images/bg-student-login.jpg'); ?>);
}

		.abs input[type=text]{
			border:none;
			border-bottom:2px solid gray;
			margin-bottom:20px;
		} 
	
 
.GetResult input[type="submit"] {
    border: 0;
    color: #fff;
    font-weight: 500;
    height: 44px;
    box-sizing: border-box;
    border-radius: 50px;
    display: table;
    padding: 5px 35px;
    font-size: 14px;
    text-transform: uppercase;
    margin-top: 0px;
    background: #ed1c24;
    background-size: 200% auto;
    -webkit-transition: background 1s ease-out;
    -o-transition: background 1s ease-out;
    transition: background 1s ease-out;
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
		.captchno {
    max-width: calc(15% - 2px);
    flex: 0 0 15%;
    height: 36px;
    margin: 0;
    display: flex;
    justify-content: space-between;
    padding: 6px 10px;
}
#imgmargin{
	margin:-100px;
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
				<h2 class="text-uppercase">Download Your Admit Card</h2>
			</div>
			 
     
		<div class="container mt-3">
		<div class="main-body">
          <div class="row gutters-sm">
			<div class="col-md-7">
					<div class="resultsShow">
					 
                    <?php
                    $min_number = 1;
                    $max_number = 9;
                    $random_number1 = mt_rand($min_number, $max_number);
                    $random_number2 = mt_rand($min_number, $max_number);

                    echo $this->session->tempdata('success');
                    echo $this->session->tempdata('exit');
                    echo $this->session->tempdata('error');
                    ?>
                    <form action="<?=base_url('createpdf/admit-card');?>" method="post" target="_blank">
						<div class="form_group">
							<label>Enter Your Acknowledgement Number :</label>
							<input type="text" name="enroll" required="required">
						</div>
						<div class="form_group2">
							<label>Sum the numbers</label>
							<input type="text" name="captchaResult" required="required">
							<div class="captchno">
								<span class="first-no"><?=$random_number1;?></span>
								<span class="plus-no">+</span>
								<span class="last-no"><?=$random_number2;?></span>
							</div>
                            <input name="firstNumber" type="hidden" value="<?php echo $random_number1; ?>" />
                            <input name="secondNumber" type="hidden" value="<?php echo $random_number2; ?>" />
                        </div>

						<div class="GetResult">
							<input type="submit" name="sb" value="Get Admit Card">
						</div>
					</form>
				</div>	
			
            </div>
			<div class="col-md-5">
			  <img id="" src="<?=base_url('assets/cork/images/bg-student-login.jpg'); ?>">
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