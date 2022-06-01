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

.abs input[type=text] {

	border:none;

	border-bottom:2px solid gray;

	margin-bottom:20px;

}

select.form-control {

	border:none;

	outline:none;

	margin-bottom:20px;

	border-bottom:2px solid gray;

}

.front-mod {

	background-image:url('front-bg.jpg');

	background-size: cover;

	background-repeat: no-repeat;

}

.abs {

	background-color: rgb(41 51 76);

}

.para p {

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

<script type="text/javascript" charset="UTF-8" src="http://maps.google.com/maps-api-v3/api/js/42/9/common.js"></script>

<script type="text/javascript" charset="UTF-8" src="http://maps.google.com/maps-api-v3/api/js/42/9/util.js"></script>

</head>

<body>

<?php include('header.php');?>



<div class="inner-banner contact services">

  <div class="container">

    <div class="row">

      <div class="col-sm-8 col-lg-9">

        <div class="content">

          <div class="section-title mb0 headline text-left ">

            <div class="layer-1-3">

              <h2>Services</h2>

            </div>

          </div>

          <p><?=$PageQry->page_sub_title?></p>

        </div>

      </div>

     

    </div>

  </div>

</div>

<section class="about inner padding-lg services2">

  <div class="container">

    <div class="row">

      <div class="col-md-5">

        <div class="video-block">

          <div id="thumbnail_container"> <img src="<?=base_url('assets/cork/img/services/about-video.jpg')?>" id="thumbnail" class="img-responsive" alt=""> </div>

          </div>

    

      </div>

      <div class="col-md-7 left-block">

        <div class="section-title mb0 headline text-left ">

          <div class="layer-1-3">

            <h2><?=$PageQry->page_title?></h2>

          </div>

        </div>

        <?=$PageQry->page_description?>

      </div>

    </div>

  </div>

</section>

<section class="unique-team unique-team2 servicesDetail">

  <div class="container">

    <div class="section-title mb20 headline text-center "> <span class="subtitle text-uppercase">UNIQUE FEATURES OF OUR PROGRAMS</span>

      <h2>WANT TO <span>STUDY PROGRAMS</span></h2>

    </div>

    <div class="owl-carousel owl-theme services-clm-sld">

      <?php foreach($ServicesQry as $ServicesRow){?>

      <div class="item unversity-team">

        <h3><?=$ServicesRow->name?></h3>

        <p><?=$ServicesRow->short_description?></p>

        <a href="<?=base_url('service')?>/<?=$ServicesRow->slug?>/<?=$ServicesRow->id?>">KNOW MORE</a> </div>

     <?php }?>

    </div>

  </div>

</section>

<section class="how-apply how-apply2">

  <div class="container">

    <div class="section-title mb20 headline text-center "> <span class="subtitle text-uppercase">THERE ARE MANY WAYS TO LEARN</span>

      <h2><span>How to Apply</span></h2>

    </div>

    <ul class="row">

      <?php 

      $ap=1;

      foreach($ApplyQry as $ApplyRow){?>

      <li class="col-sm-4 <?php if($ap==1){echo 'active';}?>">

        <div class="icon-block"> <span class="num"><?=$ap?></span> <img src="<?=base_url('assets/images/apply')?>/<?=$ApplyRow->image?>" alt="<?=$ApplyRow->name?>"></div>

        <h3><?=$ApplyRow->name?></h3>

        <?=$ApplyRow->description?>

      </li>

   <?php $ap++;}?>

     

    </ul>

    <div class="button-wrapper"> <a href="<?=base_url('contact-us')?>" class="btn">Enquire Now<span class="icon-more-icon"></span></a> </div>

  </div>

</section>



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

