<!DOCTYPE html>
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

<section id="best-product" class="best-product-section onlinebook">
  <div class="container">
    <div class="section-title-2 mb65 headline text-left">
      <h2>Neostylus <span>Best Products.</span></h2>
    </div>
    <div id="best-product-slide-item" class="best-product-slide">
      <?php foreach($BookOnlineQry as $BookOnlineRow){?>
      <div class="product-img-text">
        <div class="product-img text-center mb20">
          <img src="<?=base_url('assets/images/book-online')?>/<?=$BookOnlineRow->image?>" alt="">
        </div>
        <div class="product-text-content relative-position">
          <div class="best-title-price float-left">
            <div class="course-title headline">
              <h3><a href="<?=base_url('product')?>/<?=$BookOnlineRow->slug?>/<?=$BookOnlineRow->id?>"><?=$BookOnlineRow->name?></a></h3>
            </div>
            <div class="price-start">
              By Punam Agarwal-
              <span>INR <?=$BookOnlineRow->cost?></span>
            </div>
          </div>
          <div class="add-cart text-center">
            <i class="fas fa-cart-plus"></i>
          </div>
        </div>
      </div>
    <?php }?>
     
    </div>
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

