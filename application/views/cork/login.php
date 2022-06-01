<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
    <title>Center Login | Aism Group</title>
   <?php include('headerstylelinks.php'); ?>
</head>

<body>
    <div class="wrapper">
        <?php include_once('header.php'); ?>
        <!-- id="bootstrap-touch-slider"  class="bs-slider carousel bs-slider fade control-round indicators-line" data-ride="carousel"-->


        <section class="sction_style1 white_bg">
            <div class="container">
                <div class="row clearfix about-section">

                    <div class="col-md-5 col-sm-6">
                        <div class=""> <img src="<?= base_url('assets/cork/images/bg-student-login.jpg'); ?>" alt="" title="About Aism group"
                                class="img-responsive" /> </div>
                    </div>
                    <div class="col-md-7 col-sm-6">
                        <div class="form-register-group registerform login">
                            <div class="form">
                                <div class="tab-content">
                                    <div id="signup">
                                        <div class="section-title mb20 headline text-center ">
                                            <span class="subtitle text-uppercase">Login Form</span>
                                            <h2>Center <span>Login</span></h2>
                                        </div>
                                        <form action="<?=base_url('login/auth')?>" method="post">

                                            <div class="top-row">
                                                <div class="field-wrap">
                                                    <input type="email" name="email" required="" placeholder="Email*"
                                                        autocomplete="off">
                                                </div>
                                            </div>
                                            <div class="pass-wrap">

                                                <div class="field-wrap">
                                                    <input type="password" name="password" required=""
                                                        placeholder="Password" autocomplete="off">
                                                </div>
                                            </div>
                                            <div class="placeit-btn gradient-bg text-center text-uppercase ul-li-block bold-font">
                                                <button type="submit" class="button button-block">LOGIN</button>
                                            </div>
                                        </form>

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
        <!--=====footer start end=========-->

    </div>
    
    <script>
    $('.carousel[data-type="multi"] .item').each(function() {

        var next = $(this).next();
        if (!next.length) {
            next = $(this).siblings(':first');
        }
        next.children(':first-child').clone().appendTo($(this));


        for (var i = 0; i < 6; i++) {
            next = next.next();
            if (!next.length) {
                next = $(this).siblings(':first');
            }

            next.children(':first-child').clone().appendTo($(this));
        }

    });
    </script>
    <script>
    $(function() {
        var $gallery = $('.gallery a').simpleLightbox();

        $gallery.on('show.simplelightbox', function() {
                console.log('Requested for showing');
            })
            .on('shown.simplelightbox', function() {
                console.log('Shown');
            })
            .on('close.simplelightbox', function() {
                console.log('Requested for closing');
            })
            .on('closed.simplelightbox', function() {
                console.log('Closed');
            })
            .on('change.simplelightbox', function() {
                console.log('Requested for change');
            })
            .on('next.simplelightbox', function() {
                console.log('Requested for next');
            })
            .on('prev.simplelightbox', function() {
                console.log('Requested for prev');
            })
            .on('nextImageLoaded.simplelightbox', function() {
                console.log('Next image loaded');
            })
            .on('prevImageLoaded.simplelightbox', function() {
                console.log('Prev image loaded');
            })
            .on('changed.simplelightbox', function() {
                console.log('Image changed');
            })
            .on('nextDone.simplelightbox', function() {
                console.log('Image changed to next');
            })
            .on('prevDone.simplelightbox', function() {
                console.log('Image changed to prev');
            })
            .on('error.simplelightbox', function(e) {
                console.log('No image found, go to the next/prev');
                console.log(e);
            });
    });


    $('.demo4_top,.demo4_bottom').bootpag({
        total: 50,
        page: 2,
        maxVisible: 5,
        leaps: true,
        firstLastUse: true,
        first: '←',
        last: '→',
        wrapClass: 'pagination',
        activeClass: 'active',
        disabledClass: 'disabled',
        nextClass: 'next',
        prevClass: 'prev',
        lastClass: 'last',
        firstClass: 'first'
    }).on("page", function(event, num) {
        $(".content4").html("Page " + num); // or some ajax content loading...
    });
    </script>
    <script>
    //model popu on load body
    $(document).ready(function() {
        $('#myModal').modal('show');
    });
    //model popu on load body end
    </script>
    <!--<script src="https://www.google.com/recaptcha/api.js" async defer></script>
<script type="text/javascript">
  var onloadCallback = function() {
    alert("grecaptcha is ready!");
  };
</script>-->
    <!--  <script src="https://www.google.com/recaptcha/api.js?render=6Ldai7AUAAAAAGDHWagdDvjO0JDdd9930CWKYkm0"></script>
  <script>
  grecaptcha.ready(function() {
      grecaptcha.execute('6Ldai7AUAAAAAGDHWagdDvjO0JDdd9930CWKYkm0', {action: 'homepage'}).then(function(token) {
         ...
      });
  });
  </script>-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js"
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
    $(function() {
        $("#frmcertifictae_verify").validate({
            rules: {
                certificate_no: "required"
            },
            messages: {
                certificate_no: "Please enter certificate number"
            },
            submitHandler: function(form) {
                form.submit();
            }
        });
    });
    </script>
</body>

</html>

<?php if(false) { ?>
	<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Meta -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<title><?=$PageQry->page_meta_title?></title>
<meta name="description" content="<?=$PageQry->page_meta_description?>">
<meta name="keywords" content="<?=$PageQry->page_meta_keywords?>">

	<link rel="stylesheet" href="<?=base_url('assets/cork/css/owl.carousel.css')?>">
	<link rel="stylesheet" href="<?=base_url('assets/cork/css/fontawesome-all.css')?>">
	<link href="<?=base_url('assets/cork/font-awesome/css/font-awesome.min.css')?>" rel="stylesheet">
	<link rel="stylesheet" href="<?=base_url('assets/cork/css/flaticon.css')?>">
	<link rel="stylesheet" type="text/css" href="<?=base_url('assets/cork/css/meanmenu.css')?>">
	<link rel="stylesheet" href="<?=base_url('assets/cork/css/bootstrap.min.css')?>">
	<link rel="stylesheet" href="<?=base_url('assets/cork/css/video.min.css')?>">
	<link rel="stylesheet" href="<?=base_url('assets/cork/css/lightbox.css')?>">
	<link rel="stylesheet" href="<?=base_url('assets/cork/css/progess.css')?>">
	<link rel="stylesheet" href="<?=base_url('assets/cork/css/animate.min.css')?>">
	<link rel="stylesheet" href="<?=base_url('assets/cork/css/style.css')?>">
	<link rel="stylesheet" href="<?=base_url('assets/cork/css/responsive.css')?>">
	<!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css"> -->
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
			background-image:url('front-bg.jpg');
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
    background-color: #ed1c24;
    padding: 5px 3px;
    border-radius: 6px;
    font-size: 20px;
		}
		.card-body.text-center {
			background-color:#2e3192;
		}
		button.btn.btn-block.text-light.py-1 {
			background-color: #FFA500;
		}
.modal-body p {
    margin-bottom: 5px;
    color: #fff;
    font-size: 14px;
}
label.pl-1.pr-5 {
    color: #fff;
    font-size: 14px;
}
	</style>

</head>

<body>
<?php include('header.php');?>
	<br>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-8" style="margin-top:-1.4em;padding: 0">
				<img src="<?=base_url('assets/cork/img/course/bg-student-login.jpg')?>" style="border-radius: 0;width: 100%">
			</div>
			<div class="col-md-4">
				<div class="form-register-group registerform login">
					<div class="form">
						<div class="tab-content">
							<div id="signup">   
								<div class="section-title mb20 headline text-center ">
									<span class="subtitle text-uppercase">Login Form</span>
									<h2>Center <span>Login</span></h2>
								</div>
								<form action="<?=base_url('login/auth')?>" method="post">

									<div class="top-row">
										<div class="field-wrap">	
											<input type="email" name="email" required="" placeholder="Email*" autocomplete="off">
										</div>
									</div>
									<div class="pass-wrap">

										<div class="field-wrap">
											<input type="password" name="password" required="" placeholder="Password" autocomplete="off">
										</div>
									</div>
									<div class="placeit-btn gradient-bg text-center text-uppercase ul-li-block bold-font">
										<button type="submit" class="button button-block">LOGIN</button>
									</div>
								</form>

							</div>



						</div>   
					</div>   

				</div>

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
			</body>
			</html>

			<?php } ?>