<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?=$PageQry->page_meta_title?></title>
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
</head>
<body>
<?php include('header.php');?>
<div class="inner-banner contact">
  <div class="container">
    <div class="row">
      <div class="col-sm-8 col-lg-9">
        <div class="content">
          <div class="section-title mb0 headline text-left ">
            <div class="layer-1-3">
              <h2>Testi<span>monials</span></h2>
            </div>
          </div>
          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="container testimOnial">
  <div class="form">
    <ul class="tab-group">
      <li class="tab active"><a href="#login">Testimonials</a></li>
      <li class="tab"><a href="#signup">Videos</a></li>
    </ul>
    <div class="tab-content">
      <div id="login">
        <div class="storiesContainer__3OzedleDyumoo1txWDXEd-"> 
          <?php foreach($TestimonialsQry as $TestimonialsRow){?>
          <a href="/stories/adding-code-to-design" data-testid="story-card" class="story__2PFf3PoXqjjoDn_EvjY2qU">
          <div data-testid="feature-user"> <img alt="" class="portrait__3H707mm752Ni_q38WAtzEQ" src="<?=base_url('assets/images/testimonials')?>/<?=$TestimonialsRow->image?>">
            <div class="name__rnwgp9EgjojFgYg8qyVZ6"><?=$TestimonialsRow->name?></div>
            <div class="description__1T03rFsweeuuz-cLeD4NQw">
              <svg viewBox="0 0 24 24" width="16px" height="16px" fill="currentColor" role="img" class="markerIcon__1QZDzVSI0WIjRCtygldgiB">
                <title>Marker Icon</title>
                <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M.75 23.25h22.5m-3.75-15c0 4.142-7.5 10.5-7.5 10.5s-7.5-6.358-7.5-10.5a7.5 7.5 0 0115 0z"></path>
              </svg>
              <span class="location__1qQzewIzAWHw2ftMS6hI0Z"><?=$TestimonialsRow->location?></span> </div>
          </div>
          <div class="heading__3OEHajWQSqrtU8gRKefU8H"><?=$TestimonialsRow->designation?></div>
          </a> 
        <?php }?>
 </div>
      </div>
      <div id="signup" class="videotestimonial">
        <div class="row">
        <?php foreach($VideoQry as $VideoRow){?>
          <div class="col-sm-4 col-xs-6">
            <div class="innerYT">
              <div class="latest-video-poster relative-position mb20"> <img src="<?=base_url('assets/images/video')?>/<?=$VideoRow->image?>" alt="">
                <div class="video-play-btn text-center gradient-bg"> <a class="popup-with-zoom-anim" href="<?=$VideoRow->description?>"><i class="fas fa-play"></i></a> </div>
              </div>
              <div class="ytTitle"><?=$VideoRow->name?></div>
            </div>
          </div>
        <?php }?>

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
