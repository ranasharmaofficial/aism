<!DOCTYPE html>

<html lang="en">

<head>

<meta charset="utf-8">

<meta http-equiv="X-UA-Compatible" content="IE=edge">

<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">

<title><?=$PageQry->page_meta_title?></title>

<meta name="description" content="<?=$PageQry->page_meta_description?>">

<meta name="keywords" content="<?=$PageQry->page_meta_keywords?>">

<?php include('headerstylelinks.php'); ?>
<style>
.accordion {
  background-color: #be2026;
  color: #fff;
  cursor: pointer;
  padding: 18px;
  width: 100%;
  border: none;
  text-align: left;
  outline: none;
  font-size: 15px;
  transition: 0.4s;
  margin:5px;
}

.actives, .accordion:hover {
  background-color: #be2026; 
  color: #fff;
}

.panel {
  padding: 0 18px;
  display: none;
  background-color: white;
  overflow: hidden;
  border:2px solid #be2026;
}
  </style>
</head>

<body>

<div class="wrapper">

   <?php include_once('header.php'); ?>

  <section class="page_breadcrumbs ds color parallax about_us section_padding_top">

    <div class="container">

      <div class="row">

        <div class="col-sm-12 text-center">

          <h2><?=$PageQry->page_meta_title?></h2>

          <ol class="breadcrumb highlightlinks">

            <li> <a href="<?php echo base_url(''); ?>"> Home </a> </li>

            <li class="active"><?=$PageQry->page_meta_title?></li>

          </ol>

        </div>

      </div>

    </div>

    <div class="ovelay_1"></div>

  </section>

  <section class="padding-btop50">

    <div class="container">

      <div class="row clearfix">

        <div class="col-md-12"> </div>

        <div class="col-md-12 col-sm-12">

          <div class="tittle_left">

            <h2 class="text-uppercase"><?=$PageQry->page_title?></h2>

          </div>
		<div class="col-md-9">
		<?php if(false) { ?>
            <section id="content">

                <div id="accordion" class="accordion-container">
                  <?php 
                  $i=1;
                  foreach($FaqQry as $FaqRow){?>
                  <article class="content-entry <?php if($i==1){echo 'open';}?>">
                    <h4 class="article-title"><i></i><?=$FaqRow->title?></h4>
                    <div class="accordion-content" <?php if($i==1){echo 'style="display: block;"';}?>>
                     <?=$FaqRow->description?>                      
                    </div>
                  </article>
                <?php $i++; }?>

                </div>
              </section>
			  <?php } ?>

<?php 
                  $i=1;
                  foreach($FaqQry as $FaqRow){?>
<button class="accordion"><?=$FaqRow->title?></button>
<div class="panel">
  <p><?=$FaqRow->description?> </p>
</div>
<?php $i++; }?>

          </div>
		  <div class="col-sm-3">
          <div class="quicklinks">
            <h2>Quick Links</h2>
            <ul>
              <li><a href="#">Download Center Registration</a></li>
              <li><a href="#">Download Student Registration</a></li>
              <li><a href="#">Download Any Desk Software</a></li>
              <li><a href="#">Download Theory Question Sample</a></li>
              <li><a href="#">Download Practical Question Sample</a></li>
            </ul>
          </div>
          


        </div>
           

        </div>

       

      </div>

        

    </div>

  </section>

  <!--=====footer start=========-->
<script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("actives");
    var panel = this.nextElementSibling;
    if (panel.style.display === "block") {
      panel.style.display = "none";
    } else {
      panel.style.display = "block";
    }
  });
}
</script>
  <?php include_once('footer.php'); ?>

  <!--=====footer start end=========-->

</div>


</body>

</html>

<?php if(false) {?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?=$PageQry->page_meta_title?></title>
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
  <div class="clearfix"></div>
    <div class="inner-banner contact">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-lg-12">
          <div class="content">
            <div class="section-title mb0 headline text-left">
              <div class="layer-1-3">
                <h2><span> FAQs</span></h2>
              </div>
            </div>
            
          </div>
        </div>

      </div>
    </div>
  </div>
  <section class="download-certificate">
    <div class="container">
      <div class="row">
        <div class="col-sm-9">
          <div class="certificatedetail certificatedetail1">
            <div class="schparagrap">
              <h1>Frequently Asked Questions (FAQs)</h1>
              <section id="content">

                <div id="accordion" class="accordion-container">
                  <?php 
                  $i=1;
                  foreach($FaqQry as $FaqRow){?>
                  <article class="content-entry <?php if($i==1){echo 'open';}?>">
                    <h4 class="article-title"><i></i><?=$FaqRow->title?></h4>
                    <div class="accordion-content" <?php if($i==1){echo 'style="display: block;"';}?>>
                     <?=$FaqRow->description?>                      
                    </div>
                  </article>
                <?php $i++; }?>

                </div>
              </section>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="quicklinks">
            <h2>Quick Links</h2>
            <ul>
              <li><a href="#">Download Center Registration</a></li>
              <li><a href="#">Download Student Registration</a></li>
              <li><a href="#">Download Any Desk Software</a></li>
              <li><a href="#">Download Theory Question Sample</a></li>
              <li><a href="#">Download Practical Question Sample</a></li>
            </ul>
          </div>
          <div class="adsbanner">
            <div class="owl-carousel owl-theme adsimag">
              <div class="item"><img src="<?=base_url('assets/cork/img/ads1.png')?>" alt=""></div>
              <div class="item"><img src="<?=base_url('assets/cork/img/ads2.png')?>" alt=""></div>
              <div class="item"><img src="<?=base_url('assets/cork/img/ads3.png')?>" alt=""></div>
              <div class="item"><img src="<?=base_url('assets/cork/img/ads4.png')?>" alt=""></div>
              <div class="item"><img src="<?=base_url('assets/cork/img/ads5.png')?>" alt=""></div>
            </div>
          </div> 


        </div>
      </div>


    </div>
  </section>
  <div class="clearfix"></div>
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