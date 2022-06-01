<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Meta -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <title><?=$PostCatQry->category_name?></title>
<meta name="description" content="<?=$PostCatQry->category_name?>">
<meta name="keywords" content="<?=$PostCatQry->category_name?>">

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
       <div class="inner-banner contact">
        <div class="container">
          <div class="row">
            <div class="col-sm-12 col-lg-12">
              <div class="content">
                <div class="section-title mb0 headline text-left">
                  <div class="layer-1-3">
                    <h2><?=$PostCatQry->category_name?></h2>
                  </div>
                </div>
                <!-- <h1>Contact Us</h1> -->
                <!--  <div class="bredcrumbR"><a href="index.html">Home</a><a href="javascript:void(0)"> | Blog List</a></div> -->
                <p>Explore our blogs for an insight about our work background and more. Get an idea on how to approach personal development in personal and professional life.</p>
              </div>
            </div>

          </div>
        </div>
      </div>
      <div class="section-event">
       <div class="container">
        <div class="row">
          <?php foreach($PostQry as $PostRow){?>
         <div class="col-md-4">
          <div class="blog-group">
           <div class="blog-sec1">
            <img src="<?=base_url('assets/images/post')?>/<?=$PostRow->post_image?>" alt="event">
            <div class="blog-list">
             <b>Daneu williams</b>
           </div>
         </div>
         <div class="event-sec2">
          <p><span><?=$PostRow->post_title?></span></p>
          <?=$PostRow->post_short_description?>
          <a href="<?=base_url('post')?>/<?=$PostRow->post_slug?>/<?=$PostRow->id?>">Read More</a>
        </div>
      </div>
    </div>
    <?php }?>
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