<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Meta -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <title><?=$EventsView->meta_title?></title>
<meta name="description" content="<?=$EventsView->meta_description?>">
<meta name="keywords" content="<?=$EventsView->meta_keywords?>">
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
  <div class="inner-banner contact services">
    <div class="container">
      <div class="row">
        <div class="col-sm-8 col-lg-9">
          <div class="">
            <div class="section-title mb0 headline text-left ">
              <div class="layer-1-3">
                <h2><?=$EventsView->title?></h2>
              </div>
            </div>

            <p><?=$EventsView->sub_title?></p>
          </div>
        </div>
        
      </div>
    </div>
  </div>
  
  <section class="single_event">
    <div class="container">
      <img src="<?=base_url('assets/images/events')?>/<?=$EventsView->image?>">

      <h2><?=$EventsView->title?></h2>
      <div class="eve">
      <?=$EventsView->description?>
      </div>
    </div>
  </section>

  <div class="accordianEvent">
    <div class="container">
      
      <div class="accordion-container">
        <div class="accordianTitle">
          <h2>Event Schedules</h2>
        </div>
        <div class="set">
          <a href="#" class="active">
            Simply dummy text of the printing and typesetting industry
            <i class="fa fa-plus"></i>
          </a>
          <div class="content" style="display: block;">
            <p>Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
          </div>
        </div>
        <div class="set">
          <a href="#">
            Accordian Title 2imply dummy text of the printing and typesetting industry
            <i class="fa fa-plus"></i>
          </a>
          <div class="content">
            <p>Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
          </div>
        </div>
        <div class="set">
          <a href="#">
            Dummy text of the printing and typesetting industry
            <i class="fa fa-plus"></i>
          </a>
          <div class="content">
            <p>Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
          </div>
        </div>
        <div class="set">
          <a href="#">
            Accordian Title 4imply dummy text of the printing and typesetting industry
            <i class="fa fa-plus"></i> 
          </a>
          <div class="content">
            <p>Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
          </div>
        </div>
        <div class="set">
          <a href="#">
            Ccordian Title 5imply dummy text of the printing and typesetting industry
            <i class="fa fa-plus"></i> 
          </a>
          <div class="content">
            <p>Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
          </div>
        </div>
        <div class="set">
          <a href="#">
            Dian Title 6imply dummy text of the printing and typesetting industry
            <i class="fa fa-plus"></i> 
          </a>
          <div class="content">
            <p>Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
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